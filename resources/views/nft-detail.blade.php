{{-- resources/views/nft-detail.blade.php --}}

@extends('layouts.app')

@section('title', $nft['title'] . ' - Bali Virtually')

@section('content')

{{-- Hero Section dengan background dinamis --}}
<section class="relative h-screen w-full flex items-center justify-center mb-12 sm:mb-16 lg:mb-20" style="background-image: url('{{ asset($nft['image']) }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 overlay-dark-heavy"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full h-full">
        <div class="mx-auto px-4 w-[90%] sm:w-[85%] text-center">
            <h1 class="font-aldrich color-text-white text-3xl sm:text-4xl md:text-5xl lg:text-6xl leading-tight mb-6 sm:mb-8">
                {{ $nft['title'] }}
            </h1>
        </div>
    </div>
</section>

{{-- Main Content --}}
<main class="relative py-12 sm:py-16 lg:py-20 min-h-screen">
    <div class="mx-auto px-4 w-[85%] max-w-7xl">
        
        {{-- Description Section --}}
        <div class="text-center mb-12 sm:mb-16 lg:mb-20">
            <p class="color-text-white text-base sm:text-lg md:text-xl leading-relaxed max-w-[90%] sm:max-w-[84%] mx-auto">
                {{ $nft['collection_description'] ?? 'This collection is a tribute to those who seek meaning who believe that ancestral heritage can be revived through digital media and still touch the soul.' }}
            </p>
        </div>

        {{-- NFT Collection Cards --}}
        <div class="space-y-12 sm:space-y-16 lg:space-y-20 max-w-7xl mx-auto">
            
            @if(isset($nft['sub_nfts']) && count($nft['sub_nfts']) > 0)
                @foreach($nft['sub_nfts'] as $index => $subNft)
                    <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 sm:gap-8 lg:gap-10 items-start">
                        {{-- Card Image (Kiri) --}}
                        <div class="order-1 lg:order-1 lg:col-span-2 max-w-sm sm:max-w-md mx-auto lg:mx-0 lg:mt-2">
                            <div class="bg-gray-800 card-bg-dark shadow-xl rounded-2xl overflow-hidden h-full flex flex-col">
                                <img src="{{ asset($nft['image']) }}" alt="{{ $subNft['name'] }}" class="w-full h-[240px] sm:h-[280px] object-cover">
                                <div class="p-4 sm:p-6 text-center flex-grow flex flex-col justify-between">
                                    <h3 class="font-aldrich color-text-white text-lg sm:text-xl font-bold mb-4 sm:mb-6 leading-tight">{{ $subNft['name'] }}</h3>
                                    <div class="flex justify-center">
                                        <a href="/404" class="btn-glow bg-gradient-mint-sky hover:from-[#79ADEE] hover:to-[#80ECB6] color-black font-semibold py-2.5 sm:py-3 px-6 sm:px-8 rounded-lg text-sm transition-all duration-300 min-w-[120px] sm:w-auto">
                                            Collect Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Card Description (Kanan) --}}
                        <div class="order-2 lg:order-2 lg:col-span-3 flex flex-col justify-start mt-6 lg:mt-0">
                            <div class="space-y-4 sm:space-y-6 h-full">
                                {{-- Judul NFT --}}
                                <h2 class="font-aldrich color-text-white text-xl sm:text-2xl md:text-3xl leading-tight text-center lg:text-left">{{ $subNft['name'] }}</h2>
                                
                                <p class="color-text-white text-sm sm:text-base leading-[1.8] text-left lg:text-justify">
                                    {{ $subNft['description'] }}
                                </p>
                                
                                {{-- What Will You Get Section --}}
                                <div class="pt-2">
                                    <h4 class="color-text-green text-base sm:text-lg font-semibold mb-4 sm:mb-5 font-aldrich">What Will You Get</h4>
                                    <div class="space-y-3 sm:space-y-4">
                                        <p class="color-text-white font-medium text-sm sm:text-base mb-3 sm:mb-4">{{ $subNft['edition'] }}</p>
                                        <div class="space-y-2 sm:space-y-3">
                                            @foreach($subNft['benefits'] as $benefit)
                                                <div class="flex items-start gap-2 sm:gap-3">
                                                    <span class="w-2 h-2 bg-gradient-mint-sky rounded-full mt-2 sm:mt-2.5 flex-shrink-0"></span>
                                                    <span class="color-text-white text-xs sm:text-sm leading-[1.7]">{{ $benefit }}</span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                {{-- Fallback jika tidak ada sub_nfts --}}
                <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 sm:gap-8 lg:gap-10 items-start">
                    {{-- Card Image (Kiri) --}}
                    <div class="order-1 lg:order-1 lg:col-span-2 max-w-sm sm:max-w-md mx-auto lg:mx-0 lg:mt-2">
                        <div class="rounded-2xl overflow-hidden bg-gray-800 card-bg-dark shadow-xl h-full flex flex-col">
                            <img src="{{ asset($nft['image']) }}" alt="{{ $nft['title'] }}" class="w-full h-[240px] sm:h-[280px] object-cover">
                            <div class="p-4 sm:p-6 text-center flex-grow flex flex-col justify-between">
                                <h3 class="font-aldrich color-text-white text-lg sm:text-xl mb-4 sm:mb-6 leading-tight">{{ $nft['title'] }}</h3>
                                <div class="flex justify-center">
                                    <a href="/404" class="btn-glow bg-gradient-mint-sky hover:from-[#79ADEE] hover:to-[#80ECB6] color-black font-semibold py-2.5 sm:py-3 px-6 sm:px-8 rounded-lg text-sm transition-all duration-300 min-w-[120px] sm:w-auto">
                                        Collect Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Card Description (Kanan) --}}
                    <div class="order-2 lg:order-2 lg:col-span-3 flex flex-col justify-start mt-6 lg:mt-0">
                        <div class="space-y-4 sm:space-y-6 h-full">
                            <h2 class="font-aldrich color-text-white text-xl sm:text-2xl md:text-3xl leading-tight text-center lg:text-left">{{ $nft['title'] }}</h2>
                            
                            <p class="color-text-white text-sm sm:text-base leading-[1.8] text-left lg:text-justify">
                                {{ $nft['description'] }}
                            </p>
                            
                            <div class="pt-2">
                                <h4 class="color-text-green text-base sm:text-lg font-semibold mb-4 sm:mb-5 font-aldrich">What Will You Get</h4>
                                <div class="space-y-3 sm:space-y-4">
                                    <p class="color-text-white font-medium text-sm sm:text-base mb-3 sm:mb-4">{{ $nft['rarity'] ?? 'Limited' }} NFT Collector Edition</p>
                                    <div class="space-y-2 sm:space-y-3">
                                        <div class="flex items-start gap-2 sm:gap-3">
                                            <span class="w-2 h-2 bg-gradient-mint-sky rounded-full mt-2 sm:mt-2.5 flex-shrink-0"></span>
                                            <span class="color-text-white text-xs sm:text-sm leading-[1.7]">Exclusive digital artwork</span>
                                        </div>
                                        <div class="flex items-start gap-2 sm:gap-3">
                                            <span class="w-2 h-2 bg-gradient-mint-sky rounded-full mt-2 sm:mt-2.5 flex-shrink-0"></span>
                                            <span class="color-text-white text-xs sm:text-sm leading-[1.7]">Cultural heritage documentation</span>
                                        </div>
                                        <div class="flex items-start gap-2 sm:gap-3">
                                            <span class="w-2 h-2 bg-gradient-mint-sky rounded-full mt-2 sm:mt-2.5 flex-shrink-0"></span>
                                            <span class="color-text-white text-xs sm:text-sm leading-[1.7]">25% contribution for cultural preservation</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
</main>

@endsection 