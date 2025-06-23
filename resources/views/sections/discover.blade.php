{{-- Discover Bali in 360° Section --}}
<section class="relative py-16 md:py-20 overflow-hidden">
    <div class="mx-auto px-4 w-[90%] relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-white text-2xl md:text-3xl font-semibold mb-12 font-aldrich">
                Discover Bali in 360°
            </h2>
            
            {{-- Interactive SVG Bali Map --}}
            <div class="relative max-w-4xl mx-auto">
                <div class="bali-map-container relative">
                    <object data="{{ asset('images/bali-map2.svg') }}" type="image/svg+xml" class="bali-svg-map w-full h-auto rounded-lg" id="bali-map-svg"></object>
                </div>
            </div>
        </div>
    </div>
</section>

