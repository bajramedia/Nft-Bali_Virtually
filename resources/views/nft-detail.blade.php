{{-- resources/views/nft-detail.blade.php --}}

@extends('layouts.app')

@section('title', $nft['title'] . ' - Bali Virtually')

@section('content')

{{-- Hero Section dengan background dinamis --}}
<section class="relative h-screen w-full flex items-center justify-center mb-20" style="background-image: url('{{ asset($nft['image']) }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 overlay-dark-heavy"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full h-full">
        <div class="mx-auto px-4 w-[90%] text-center">
            <h1 class="font-aldrich color-text-white text-4xl md:text-6xl leading-tight mb-8">
                {{ $nft['title'] }}
            </h1>
        </div>
    </div>
</section>

{{-- Main Content --}}
<main class="relative py-16 min-h-screen">
    <div class="mx-auto px-4 w-[95%] max-w-7xl">
        
        {{-- Description Section --}}
        <div class="text-center mb-20">
            <p class="color-text-white text-lg md:text-xl leading-relaxed max-w-4xl mx-auto">
                {{ $nft['collection_description'] ?? 'This collection is a tribute to those who seek meaning who believe that ancestral heritage can be revived through digital media and still touch the soul.' }}
            </p>
        </div>

        {{-- NFT Collection Cards --}}
        <div class="space-y-16 max-w-6xl mx-auto">
            
            @if(isset($nft['sub_nfts']) && count($nft['sub_nfts']) > 0)
                @foreach($nft['sub_nfts'] as $index => $subNft)
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
                        {{-- Card Image (Kiri) --}}
                        <div class="order-1 lg:order-1">
                            <div class="rounded-2xl overflow-hidden bg-gray-800 card-bg-dark">
                                <img src="{{ asset($nft['image']) }}" alt="{{ $subNft['name'] }}" class="w-full h-[400px] object-cover">
                                <div class="p-6 text-center">
                                    <h3 class="font-aldrich color-text-white text-xl mb-4">{{ $subNft['name'] }}</h3>
                                    <button class="btn-glow bg-gradient-mint-sky hover:from-[#79ADEE] hover:to-[#80ECB6] color-black font-semibold py-3 px-8 rounded-lg text-sm transition-all duration-300 w-full">
                                        Collect Now
                                    </button>
                                </div>
                            </div>
                        </div>

                        {{-- Card Description (Kanan) --}}
                        <div class="order-2 lg:order-2 flex flex-col justify-start">
                            <div class="mb-8">
                                <p class="color-text-white text-base leading-relaxed mb-8">
                                    {{ $subNft['description'] }}
                                </p>
                                
                                {{-- What Will You Get Section --}}
                                <div>
                                    <h4 class="color-text-green text-lg font-semibold mb-6">What Will You Get</h4>
                                    <div class="color-text-white text-sm space-y-3">
                                        <p class="font-medium text-base mb-4">{{ $subNft['edition'] }}</p>
                                        @foreach($subNft['benefits'] as $benefit)
                                            <div class="flex items-start gap-3">
                                                <span class="w-2 h-2 bg-gradient-mint-sky rounded-full mt-2 flex-shrink-0"></span>
                                                <span class="leading-relaxed">{{ $benefit }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                {{-- Fallback jika tidak ada sub_nfts --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-start">
                    {{-- Card Image (Kiri) --}}
                    <div class="order-1 lg:order-1">
                        <div class="rounded-2xl overflow-hidden bg-gray-800 card-bg-dark">
                            <img src="{{ asset($nft['image']) }}" alt="{{ $nft['title'] }}" class="w-full h-[400px] object-cover">
                            <div class="p-6 text-center">
                                <h3 class="font-aldrich color-text-white text-xl mb-4">{{ $nft['title'] }}</h3>
                                <button class="btn-glow bg-gradient-mint-sky hover:from-[#79ADEE] hover:to-[#80ECB6] color-black font-semibold py-3 px-8 rounded-lg text-sm transition-all duration-300 w-full">
                                    Collect Now
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Card Description (Kanan) --}}
                    <div class="order-2 lg:order-2 flex flex-col justify-start">
                        <div class="mb-8">
                            <p class="color-text-white text-base leading-relaxed mb-8">
                                {{ $nft['description'] }}
                            </p>
                            <div>
                                <h4 class="color-text-green text-lg font-semibold mb-6">What Will You Get</h4>
                                <div class="color-text-white text-sm space-y-3">
                                    <p class="font-medium text-base mb-4">{{ $nft['rarity'] }} NFT Collector Edition</p>
                                    <div class="flex items-start gap-3">
                                        <span class="w-2 h-2 bg-gradient-mint-sky rounded-full mt-2 flex-shrink-0"></span>
                                        <span class="leading-relaxed">Exclusive digital artwork</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <span class="w-2 h-2 bg-gradient-mint-sky rounded-full mt-2 flex-shrink-0"></span>
                                        <span class="leading-relaxed">Cultural heritage documentation</span>
                                    </div>
                                    <div class="flex items-start gap-3">
                                        <span class="w-2 h-2 bg-gradient-mint-sky rounded-full mt-2 flex-shrink-0"></span>
                                        <span class="leading-relaxed">25% contribution for cultural preservation</span>
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