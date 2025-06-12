{{-- Discover Bali in 360° Section --}}
<section class="relative py-16 md:py-20 overflow-hidden">
    <div class="mx-auto px-4 w-[90%] relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-white text-2xl md:text-3xl font-semibold mb-8" style="font-family: 'Aldrich', sans-serif;">
                Discover Bali in 360°
            </h2>
            
            {{-- Interactive SVG Bali Map --}}
            <div class="relative max-w-4xl mx-auto">
                <div class="bali-map-container relative">
                    <object data="{{ asset('images/bali-map-sv.svg') }}" type="image/svg+xml" class="bali-svg-map w-full h-auto rounded-lg" id="bali-map-svg"></object>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const svgObject = document.getElementById('bali-map-svg');
    let tooltip = null;
    
    // Wait for SVG to load
    svgObject.addEventListener('load', function() {
        initializeMap();
    });
    
    // Also try immediate initialization in case SVG is already loaded
    setTimeout(initializeMap, 100);
    
    function initializeMap() {
        const svgDoc = svgObject.contentDocument;
        if (!svgDoc) {
            console.log('SVG document not accessible, trying again...');
            setTimeout(initializeMap, 500);
            return;
        }
        
        // Create tooltip element if not exists
        if (!tooltip) {
            tooltip = document.createElement('div');
            tooltip.className = 'region-tooltip';
            document.body.appendChild(tooltip);
        }
        
        // Region mappings with possible SVG element IDs/classes
        const regions = {
            'jembrana': 'Jembrana',
            'tabanan': 'Tabanan', 
            'badung': 'Badung',
            'denpasar': 'Denpasar',
            'gianyar': 'Gianyar',
            'klungkung': 'Klungkung',
            'bangli': 'Bangli',
            'karangasem': 'Karangasem',
            'buleleng': 'Buleleng',
            'nusa-penida': 'Nusa Penida',
            'nusapenida': 'Nusa Penida'
        };
        
        // Try multiple selectors to find regions in SVG
        const selectors = [
            'path', 'g', 'polygon', 'circle', 'rect', '[id*="region"]', '[class*="region"]'
        ];
        
        let regionsFound = 0;
        
        // Add interactivity to regions
        Object.keys(regions).forEach(regionId => {
            let regionElement = svgDoc.getElementById(regionId) || 
                               svgDoc.querySelector(`[data-region="${regionId}"]`) ||
                               svgDoc.querySelector(`[class*="${regionId}"]`) ||
                               svgDoc.querySelector(`[id*="${regionId}"]`);
            
            if (regionElement) {
                setupRegionInteractivity(regionElement, regions[regionId]);
                regionsFound++;
            }
        });
        
        // If no specific regions found, try to make all paths interactive
        if (regionsFound === 0) {
            console.log('No specific regions found, making all paths interactive');
            const allPaths = svgDoc.querySelectorAll('path, polygon');
            allPaths.forEach((path, index) => {
                const regionName = path.getAttribute('data-name') || 
                                 path.getAttribute('id') || 
                                 path.getAttribute('class') || 
                                 `Region ${index + 1}`;
                setupRegionInteractivity(path, regionName);
            });
        }
        
        console.log(`Initialized ${regionsFound || svgDoc.querySelectorAll('path, polygon').length} interactive regions`);
    }
    
    function setupRegionInteractivity(element, regionName) {
        element.classList.add('region-area');
        
        // Set initial styles
        const originalFill = element.getAttribute('fill') || element.style.fill;
        const originalStroke = element.getAttribute('stroke') || element.style.stroke;
        
        // Mouse enter
        element.addEventListener('mouseenter', function(e) {
            element.style.fill = 'rgba(128, 236, 182, 0.4)';
            element.style.stroke = 'rgba(128, 236, 182, 0.8)';
            element.style.strokeWidth = '2';
            
            tooltip.innerHTML = `
                <span class="region-name">${regionName}</span>
                <span class="region-action">Click to explore</span>
            `;
            tooltip.classList.add('show');
            updateTooltipPosition(e);
        });
        
        // Mouse move
        element.addEventListener('mousemove', function(e) {
            updateTooltipPosition(e);
        });
        
        // Mouse leave
        element.addEventListener('mouseleave', function() {
            element.style.fill = originalFill;
            element.style.stroke = originalStroke;
            element.style.strokeWidth = '1';
            
            tooltip.classList.remove('show');
        });
        
        // Click
        element.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Clicked region:', regionName);
            showRegionNotification(regionName);
            
            // Add navigation logic here if needed
            // window.location.href = `/virtual-tours?region=${encodeURIComponent(regionName)}`;
        });
    }
    
    function updateTooltipPosition(e) {
        const x = e.clientX;
        const y = e.clientY;
        
        tooltip.style.left = (x + 15) + 'px';
        tooltip.style.top = (y - 60) + 'px';
        
        // Prevent tooltip from going off screen
        const rect = tooltip.getBoundingClientRect();
        if (rect.right > window.innerWidth) {
            tooltip.style.left = (x - rect.width - 15) + 'px';
        }
        if (rect.top < 0) {
            tooltip.style.top = (y + 15) + 'px';
        }
    }
    
    function showRegionNotification(regionName) {
        // Create notification
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] text-black px-6 py-3 rounded-lg shadow-xl z-50 font-semibold transform translate-x-full transition-all duration-300';
        notification.innerHTML = `
            <div class="flex items-center gap-3">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                </svg>
                <span>Exploring ${regionName}!</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);
        
        // Animate out and remove
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 2700);
    }
});
</script>