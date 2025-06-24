{{-- resources/views/components/nft_card.blade.php --}}
{{-- Perhatikan: kita menggunakan sintaks Alpine.js (x-bind, x-text) karena view ini di-include di dalam scope Alpine --}}

<div style="background-color: #2B2B2B;" class="rounded-2xl shadow-xl overflow-hidden flex flex-col  hover:bg-gray-800 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl h-[420px] w-full max-w-[420px] min-w-[280px] sm:max-w-[350px] md:max-w-[380px] lg:max-w-[400px] border border-white-700 hover:border-teal-400 mx-auto">
    <!-- Image Container -->
    <div class="w-full h-[240px] overflow-hidden bg-gray-800">
        <img src="{{ $image ?? asset('images/Vr-vg.png') }}" alt="{{ $title ?? 'NFT Avatar' }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
    </div>
    
    <!-- Content Container -->
    <div class="flex-1 flex flex-col justify-between p-6 text-center">
        <!-- Title -->
        <div class="mb-4">
            <h3 class="text-lg font-bold text-white leading-tight">
                {{ $title ?? 'NFT Title' }}
            </h3>
        </div>
        
        <!-- Button -->
        <div class="w-full">
            <a href="{{ route('nft.detail', $slug ?? '#') }}" class="btn-glow bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-3 px-6 rounded-lg text-sm w-full text-center flex items-center justify-center transition-all duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                View Details
            </a>
        </div>
    </div>
</div>