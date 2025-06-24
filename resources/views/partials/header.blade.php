<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out" id="main-header">
    <div class="mx-auto px-4 max-w-[85%]">
        <nav class="flex items-center justify-between py-6 transition-all duration-300">
            <div>
                <a href="/" class="text-2xl font-bold text-white flex items-center">
                    <img src="{{ asset('images/Logo.png') }}" alt="Bali Virtually Logo" class="h-8 md:h-10">
                    <span class="ml-3 logo-color font-aldrich">Bali Virtually</span>
                </a>
            </div>
            <div class="hidden md:flex space-x-8 items-center">
                  <a href="{{ route("VirtualTours") }}" class="hover:text-mint transition duration-300 font-aldrich" @if(Route::is("VirtualTours*")) style="color: #80ECB6;" @endif>Virtual Tours</a>
                  <a href="{{ route("Nft") }}" class="hover:text-mint transition duration-300 font-aldrich" @if(Route::is("Nft*")) style="color: #80ECB6;" @endif>NFT</a>
                  <a href="{{ route("Impact&Giving") }}" class="hover:text-mint transition duration-300 font-aldrich" @if(Route::is("Impact&Giving*")) style="color: #80ECB6;" @endif>Impact & Giving</a>
                  <a href="{{ route("Roadmap") }}" class="hover:text-mint transition duration-300 font-aldrich" @if(Route::is("Roadmap*")) style="color: #80ECB6;" @endif>Roadmap</a>
            </div>
            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white hover:text-mint focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path class="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>            
                        <path class="close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </nav>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-4 pt-4 pb-4 space-y-2 bg-dark/90 backdrop-blur-lg rounded-lg mt-2 border border-gray-700">
                <a href="{{ route('VirtualTours') }}" class="color-text-white hover:text-mint block px-3 py-3 rounded-md text-base transition duration-300 font-aldrich">Virtual Tours</a>
                <a href="{{ route('Nft') }}" class="color-text-white hover:text-mint block px-3 py-3 rounded-md text-base transition duration-300 font-aldrich">NFT</a>
                <a href="{{ route('Impact&Giving') }}" class="color-text-white hover:text-mint block px-3 py-3 rounded-md text-base transition duration-300 font-aldrich">Impact & Giving</a>
                <a href="{{ route('Roadmap') }}" class="color-text-white hover:text-mint block px-3 py-3 rounded-md text-base transition duration-300 font-aldrich">Roadmap</a>
            </div>
        </div>
    </div>
</header>

