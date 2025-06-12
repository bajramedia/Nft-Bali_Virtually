{{-- resources/views/components/nft_card.blade.php --}}
{{-- Perhatikan: kita menggunakan sintaks Alpine.js (x-bind, x-text) karena view ini di-include di dalam scope Alpine --}}

<div class="rounded-xl shadow-lg overflow-hidden flex flex-col border border-gray-700 hover:border-teal-400 transition duration-300 transform hover:-translate-y-1 h-[360px] w-[340px] items-center" style="background-color: #262626;">
    <div class="flex flex-col flex-grow gap-3 px-5 pt-5 pb-4 items-center text-center w-full">
        <!-- Avatar Image -->
        <div class="w-50 h-50 overflow-hidden flex items-center justify-center">
            <img src="{{ asset('images/Vr-vg.png') }}" alt="{{ $title ?? 'NFT Avatar' }}" class="w-full h-full object-cover">
        </div>
        
        <!-- Title -->
        <div class="w-full flex flex-col mt-2">
            <h3 class="text-lg font-semibold color-text-white leading-tight text-center">
                {{ $title ?? 'NFT Title' }}
            </h3>
        </div>
        
        <!-- Button -->
        <div class=" w-full mt-auto flex justify-center items-center mb-1">
            <a href="{{ route('nft.detail', $slug ?? '#') }}" class="btn-glow bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-3 px-8 rounded-lg text-base transition duration-300 shadow-md hover:shadow-lg transform hover:scale-105">
                View Details
            </a>
        </div>
    </div>
</div>