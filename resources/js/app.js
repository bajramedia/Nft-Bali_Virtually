import './bootstrap';

// ===== MOBILE MENU & STICKY NAVBAR FUNCTIONALITY =====
// Fungsi buat mobile menu toggle dan sticky navbar (dari header.blade.php)
function initializeHeader() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        const openIcon = mobileMenuButton.querySelector('.open');
        const closeIcon = mobileMenuButton.querySelector('.close');

        // Mobile Menu Toggle dengan animasi
        mobileMenuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
            openIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        // Menutup menu mobile ketika mengklik di luar menu
        document.addEventListener('click', function (event) {
            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target) && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        });
    }

    // Sticky Navbar dengan Background Scroll Effect - Bikin navbar makin keren!
    const header = document.getElementById('main-header');
    if (header) {
        window.addEventListener('scroll', function () {
            const nav = header.querySelector('nav');

            if (window.scrollY > 50) {
                // Ketika sudah di-scroll, kasih background hitam dan padding lebih kecil
                header.classList.add('scrolled');
                if (nav) {
                    nav.classList.add('py-4');
                    nav.classList.remove('py-6');
                }
            } else {
                // Ketika belum di-scroll, background transparan dan padding normal
                header.classList.remove('scrolled');
                if (nav) {
                    nav.classList.remove('py-4');
                    nav.classList.add('py-6');
                }
            }
        });
    }
}

// ===== NFT FILTERING FUNCTIONALITY =====
// Fungsi buat filter NFT cards berdasarkan kategori yang dipilih (dari nfts.blade.php)
window.filterNfts = function (selectedRegion) {
    const nftCards = document.querySelectorAll('.nft-card');
    const filterButtons = document.querySelectorAll('.region-filter-btn');

    // Update active state pada button filter
    filterButtons.forEach(btn => {
        btn.classList.remove('active', 'border-gradient-active');
        btn.classList.add('border-gray-400');
    });

    // Set active state untuk button yang diklik
    const activeButton = document.querySelector(`[data-region="${selectedRegion}"]`);
    if (activeButton) {
        activeButton.classList.add('active', 'border-gradient-active');
        activeButton.classList.remove('border-gray-400');
    }

    // Filter NFT cards - hanya show yang sesuai region
    nftCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');

        if (cardCategory === selectedRegion) {
            card.style.display = 'block';
            // Animasi fade in
            card.style.opacity = '0';
            setTimeout(() => {
                card.style.opacity = '1';
            }, 100);
        } else {
            card.style.display = 'none';
        }
    });
};

// ===== VIRTUAL TOURS FILTERING FUNCTIONALITY =====
// Fungsi buat filter tour cards berdasarkan kategori yang dipilih (dari virtual-tours.blade.php)
window.filterTours = function (selectedCategory) {
    const tourCards = document.querySelectorAll('.tour-card');
    const filterButtons = document.querySelectorAll('.region-filter-btn');

    // Update active state pada button filter
    filterButtons.forEach(btn => {
        btn.classList.remove('active', 'border-gradient-active');
        btn.classList.add('border-gray-400');
    });

    // Set active state untuk button yang diklik
    const activeButton = document.querySelector(`[data-region="${selectedCategory}"]`);
    if (activeButton) {
        activeButton.classList.add('active', 'border-gradient-active');
        activeButton.classList.remove('border-gray-400');
    }

    // Filter tour cards - hanya show yang sesuai category
    tourCards.forEach(card => {
        const cardCategory = card.getAttribute('data-category');

        if (cardCategory === selectedCategory) {
            card.style.display = 'block';
            // Animasi fade in
            card.style.opacity = '0';
            setTimeout(() => {
                card.style.opacity = '1';
            }, 100);
        } else {
            card.style.display = 'none';
        }
    });
};

// ===== INTERACTIVE SVG MAP FUNCTIONALITY =====
// Fungsi buat interactive SVG map Bali (dari discover.blade.php)
function initializeInteractiveMap() {
    const svgObject = document.getElementById('bali-map-svg');
    if (!svgObject) return;

    let tooltip = null;

    // Tunggu SVG selesai dimuat
    svgObject.addEventListener('load', function () {
        initializeMap();
    });

    // Coba inisialisasi langsung kalau SVG udah dimuat
    setTimeout(initializeMap, 100);

    function initializeMap() {
        const svgDoc = svgObject.contentDocument;
        if (!svgDoc) {
            console.log('SVG document belum bisa diakses, coba lagi...');
            setTimeout(initializeMap, 500);
            return;
        }

        // Buat tooltip kalau belum ada
        if (!tooltip) {
            tooltip = document.createElement('div');
            tooltip.className = 'region-tooltip';
            document.body.appendChild(tooltip);
        }

        // Mapping region dengan kemungkinan ID/class di SVG
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

        let regionsFound = 0;

        // Tambahin interaktivitas ke region
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

        // Kalau ga ada region spesifik yang ketemu, bikin semua path jadi interaktif
        if (regionsFound === 0) {
            console.log('Ga ada region spesifik yang ketemu, bikin semua path jadi interaktif');
            const allPaths = svgDoc.querySelectorAll('path, polygon');
            allPaths.forEach((path, index) => {
                const regionName = path.getAttribute('data-name') ||
                    path.getAttribute('id') ||
                    path.getAttribute('class') ||
                    `Region ${index + 1}`;
                setupRegionInteractivity(path, regionName);
            });
        }

        console.log(`Berhasil inisialisasi ${regionsFound || svgDoc.querySelectorAll('path, polygon').length} region interaktif`);
    }

    function setupRegionInteractivity(element, regionName) {
        element.classList.add('region-area');

        // Set style awal
        const originalFill = element.getAttribute('fill') || element.style.fill;
        const originalStroke = element.getAttribute('stroke') || element.style.stroke;

        // Mouse masuk
        element.addEventListener('mouseenter', function (e) {
            element.style.fill = 'rgba(128, 236, 182, 0.4)';
            element.style.stroke = 'rgba(128, 236, 182, 0.8)';
            element.style.strokeWidth = '2';

            tooltip.innerHTML = `
                <span class="region-name">${regionName}</span>
                <span class="region-action">Klik untuk jelajahi</span>
            `;
            tooltip.classList.add('show');
            updateTooltipPosition(element);
        });

        // Mouse keluar
        element.addEventListener('mouseleave', function () {
            element.style.fill = originalFill;
            element.style.stroke = originalStroke;
            element.style.strokeWidth = '1';

            tooltip.classList.remove('show');
        });

        // Klik
        element.addEventListener('click', function (e) {
            e.preventDefault();
            console.log('Region yang diklik:', regionName);
            showRegionNotification(regionName);

            // Navigasi ke halaman virtual tour dengan parameter region
            setTimeout(() => {
                window.location.href = `/virtual-tours?region=${encodeURIComponent(regionName.toLowerCase())}`;
            }, 1000);
        });
    }

    function updateTooltipPosition(element) {
        // Dapatkan posisi element di dalam SVG
        const svgRect = svgObject.getBoundingClientRect();
        const elementBBox = element.getBBox();

        // Hitung posisi tengah element
        const elementCenterX = elementBBox.x + (elementBBox.width / 2);
        const elementCenterY = elementBBox.y + (elementBBox.height / 2);

        // Konversi ke koordinat layar
        const screenX = svgRect.left + (elementCenterX * (svgRect.width / svgObject.contentDocument.documentElement.viewBox.baseVal.width));
        const screenY = svgRect.top + (elementCenterY * (svgRect.height / svgObject.contentDocument.documentElement.viewBox.baseVal.height));

        // Posisikan tooltip di atas region
        tooltip.style.left = (screenX - (tooltip.offsetWidth / 2)) + 'px';
        tooltip.style.top = (screenY - tooltip.offsetHeight - 15) + 'px';

        // Cegah tooltip keluar dari layar
        const rect = tooltip.getBoundingClientRect();
        if (rect.left < 10) {
            tooltip.style.left = '10px';
        }
        if (rect.right > window.innerWidth - 10) {
            tooltip.style.left = (window.innerWidth - rect.width - 10) + 'px';
        }
        if (rect.top < 10) {
            tooltip.style.top = (screenY + 15) + 'px';
        }
    }

    function showRegionNotification(regionName) {
        // Buat notifikasi
        const notification = document.createElement('div');
        notification.className = 'fixed top-4 right-4 bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] text-black px-6 py-3 rounded-lg shadow-xl z-50 font-semibold transform translate-x-full transition-all duration-300';
        notification.innerHTML = `
            <div class="flex items-center gap-3">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                </svg>
                <span>Lagi jelajahi ${regionName}!</span>
            </div>
        `;

        document.body.appendChild(notification);

        // Animasi masuk
        setTimeout(() => {
            notification.classList.remove('translate-x-full');
        }, 100);

        // Animasi keluar dan hapus
        setTimeout(() => {
            notification.classList.add('translate-x-full');
            setTimeout(() => {
                notification.remove();
            }, 300);
        }, 2700);
    }
}

// ===== TEAM MEMBER BIO TOGGLE FUNCTIONALITY =====
// Fungsi buat toggle bio member team (dari team.blade.php)
window.toggleMemberBio = function (memberId) {
    const card = document.querySelector(`[data-member-id="${memberId}"]`);
    if (!card) return;

    const description = card.querySelector('.member-description');
    const fullBio = card.querySelector('.member-full-bio');
    const button = card.querySelector('.read-more-btn');

    if (description && fullBio && button) {
        if (description.classList.contains('hidden')) {
            // Kalo lagi show full bio, balik ke description
            description.classList.remove('hidden');
            fullBio.classList.add('hidden');
            button.textContent = 'Read More';
        } else {
            // Kalo lagi show description, ganti ke full bio
            description.classList.add('hidden');
            fullBio.classList.remove('hidden');
            button.textContent = 'Read Less';
        }
    }
};

// ===== INITIALIZATION =====
// Inisialisasi semua fungsi setelah DOM selesai dimuat
document.addEventListener('DOMContentLoaded', function () {
    // Inisialisasi header dan navigation
    initializeHeader();

    // Inisialisasi interactive map kalau ada
    initializeInteractiveMap();

    // Set default filter untuk NFT page - default ke Gianyar
    const nftContainer = document.getElementById('nft-cards-container');
    if (nftContainer) {
        // Reset semua button filter di NFT dulu
        const allNftButtons = document.querySelectorAll('.region-filter-btn');
        allNftButtons.forEach(btn => {
            btn.classList.remove('active', 'border-gradient-active');
            btn.classList.add('border-gray-400');
        });

        // Set "Gianyar" yang aktif dan filter langsung
        const defaultNftButton = document.querySelector('[data-region="Gianyar"]');
        if (defaultNftButton) {
            defaultNftButton.classList.add('active', 'border-gradient-active');
            defaultNftButton.classList.remove('border-gray-400');
            // Auto filter ke Gianyar
            filterNfts('Gianyar');
        }
    }

    // Set default filter untuk Virtual Tours page - default ke Gianyar
    const tourContainer = document.getElementById('tour-cards-container');
    if (tourContainer) {
        // Reset semua button filter di Virtual Tours dulu
        const allToursButtons = document.querySelectorAll('.region-filter-btn');
        allToursButtons.forEach(btn => {
            btn.classList.remove('active', 'border-gradient-active');
            btn.classList.add('border-gray-400');
        });

        // Set "Gianyar" yang aktif dan filter langsung
        const defaultToursButton = document.querySelector('[data-region="Gianyar"]');
        if (defaultToursButton) {
            defaultToursButton.classList.add('active', 'border-gradient-active');
            defaultToursButton.classList.remove('border-gray-400');
            // Auto filter ke Gianyar
            filterTours('Gianyar');
        }
    }
});
