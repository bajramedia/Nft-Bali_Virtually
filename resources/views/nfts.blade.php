{{-- resources/views/nfts.blade.php --}}

@extends('layouts.app')

@section('title', 'NFTs - Bali Virtually')

@section('content')

{{-- 1. Hero Section --}}
<section class="relative h-screen w-full flex items-center justify-center mb-32" style="background-image: url('{{ asset('images/ganesha.png') }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black" style="opacity: 0.6;"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full h-full">
        <div class="mx-auto px-4 w-[90%] text-center">
            <h1 class="text-white text-4xl md:text-6xl font-normal leading-tight mb-8" style="color: var(--color-white);">
                Sacred Legends,<br>Digitally Immortalized
            </h1>
            <p class="color-text-green text-xl md:text-xl mb-16 mt-16 font-medium">
                Let's Discover More NFTs
            </p>
            <a href="#nft-gallery" class="btn-glow-intense bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-bold py-4 px-12 rounded-lg text-lg transition duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                BROWSE
                <img src="{{ asset('images/sparkler.png') }}" alt="sparkler" class="inline w-4 h-4 ml-1">
            </a>
        </div>
    </div>
</section>

{{-- Main Content --}}
<main class="relative py-32 md:py-28 min-h-screen overflow-hidden">
    <div class="mx-auto px-4 w-[95%] relative z-10">
        {{-- Description Section --}}
        <div class="w-full text-center mb-32">
            <p class="color-text-white text-lg md:text-base leading-relaxed max-w-7xl mx-auto">
                Every Bali Virtually NFT is more than just a digital artwork. It <span class="color-text-green">carries the essence of culture, spirituality, and social responsibility.</span> Through this collection, the sacred legends of Bali are immortalized for the world, while directly supporting cultural preservation and the well-being of local communities. By owning this NFT, you are not only collecting beauty, you are investing in the future of Bali, helping to safeguard its priceless sacred heritage.
            </p>
        </div>

        {{-- Region Filter --}}
        <div class="w-full flex justify-center mb-24">
            <div class="flex flex-wrap justify-center gap-3 md:gap-4 max-w-[90%] mx-auto">
                @php
                    $regions = ['Gianyar', 'Tabanan', 'Denpasar', 'Badung', 'Karangasem', 'Buleleng', 'Bangli', 'Klungkung', 'Jembrana', 'N. Penida'];
                @endphp
                @foreach($regions as $region)
                    <button onclick="filterNfts('{{ $region }}')" class="region-filter-btn px-6 py-2.5 text-sm font-medium text-white bg-transparent border border-gray-400 rounded-lg transition-all duration-300 hover:border-gradient-active focus:outline-none {{ $region === 'Gianyar' ? 'active border-gradient-active' : '' }}" data-region="{{ $region }}">
                        {{ $region }}
                    </button>
                @endforeach
            </div>
        </div>

        {{-- NFT Cards --}}
        <div class="w-full mx-auto flex justify-center pb-32"  id="nft-gallery">
            <div id="nft-cards-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-6 md:gap-10 lg:gap-12 max-w-7xl justify-content-center w-full px-6 md:px-8 lg:px-10">
                @foreach($nfts as $nft)
                    <div class="nft-card mb-8" data-category="{{ $nft['category'] }}">
                        @include('components.nft_card', [
                            'title' => $nft['title'],
                            'image' => $nft['image'],
                            'slug' => $nft['slug']
                        ])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>



@endsection