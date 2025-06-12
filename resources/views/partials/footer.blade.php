<footer class="relative bg-[#121212] py-12 md:py-16 overflow-hidden" style="font-family: 'Aldrich', sans-serif; color: var(--color-white);">
    <div class="mx-auto px-4 w-[90%] flex flex-col md:flex-row md:justify-between md:items-start text-gray-400">
        <!-- Logo & Copyright -->
        <div class="mb-8 md:mb-0 flex flex-col gap-6">
            <div class="flex items-center gap-3 mb-18">
                <img src="images/logo.png" alt="Logo Bali Virtually" class="h-10 w-auto">
                <span class="text-2xl font-bold logo-color tracking-wide" style="font-family: 'Aldrich', sans-serif;">BALI VIRTUALLY</span>
            </div>
            <p class="text-sm color-text-white">&copy; {{ date('Y') }}. Bali Virtually. All right reserved</p>
        </div>
        <!-- Menu -->
        <div class="mb-8 md:mb-0 flex flex-col color-text-white gap-4 text-sm md:text-base">
            <a href="#" class="hover:text-mint transition duration-300">Virtual Tours</a>
            <a href="#" class="hover:text-mint transition duration-300">NFT</a>
            <a href="#" class="hover:text-mint transition duration-300">Impact & Giving</a>

            <div class="flex gap-4 mt-6">
                <a href="#" aria-label="X" class="hover:text-mint transition duration-300 color-text-white">
                    <!-- X icon SVG -->
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 4L20 20M20 4L4 20"/>
                    </svg>
                </a>
                <a href="#" aria-label="Instagram" class="hover:text-mint transition duration-300 color-text-white">
                    <!-- Instagram icon SVG -->
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <rect x="2" y="2" width="20" height="20" rx="5" />
                        <circle cx="12" cy="12" r="5" />
                        <circle cx="18" cy="6" r="1" />
                    </svg>
                </a>
            </div>
        </div>
        <!-- Kontak -->
        <div class="flex flex-col color-text-white gap-4 text-sm md:text-base">
            <span>082143203184</span>
            <span>baliVirtually@gmail.com</span>
            <span>Denpasar, Bali</span>
        </div>
    </div>
    <!-- Blur Effect Kanan Bawah -->
    <div class="pointer-events-none absolute right-0 bottom-0 w-full h-full z-0 overflow-hidden">
        <div class="absolute right-[-20%] bottom-[-20%] w-96 h-96 rounded-full bg-gradient-to-br from-[#79ADEE] via-[#80ECB6] to-transparent opacity-40" style="filter: blur(80px);"></div>
        <div class="absolute right-[10%] bottom-[10%] w-64 h-64 rounded-full bg-gradient-to-tl from-[#80ECB6] via-[#79ADEE] to-transparent opacity-30" style="filter: blur(60px);"></div>
        <div class="absolute right-[5%] bottom-[30%] w-32 h-32 rounded-full bg-gradient-to-r from-[#79ADEE] to-[#80ECB6] opacity-25" style="filter: blur(40px);"></div>

        <div class="absolute left-[-10%] bottom-[-10%] w-48 h-48 rounded-full bg-gradient-to-tr from-[#80ECB6] to-transparent opacity-20" style="filter: blur(70px);"></div>
    </div>
</footer>