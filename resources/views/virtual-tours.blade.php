@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="relative h-screen w-full flex items-center justify-center mb-16" style="background-image: url('{{ asset('images/mountain-3807667_1280 1.png') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black" style="opacity: 0.6;"></div>
        <div class="relative z-10 flex flex-col items-center justify-center w-full h-full">
            <div class="mx-auto px-4 w-[90%] text-center">
                <h1 class="text-white text-4xl md:text-6xl font-normal leading-tight mb-6" style="color: var(--color-white);">
                    Your Gateway to <br>Bali's Beauty
                </h1>
                <p class="color-text-green text-xl md:text-xl mb-12 mt-12 font-medium">
                    Let's Explore Virtual Tours
                </p>
                <a href="#tour-gallery" class="btn-glow-intense bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-bold py-4 px-12 rounded-lg text-lg transition duration-300 shadow-lg hover:shadow-xl transform hover:scale-105">
                    EXPLORE
                    <img src="{{ asset('images/sparkler.png') }}" alt="sparkler" class="inline w-4 h-4 ml-1">
                </a>
            </div>
        </div>
    </section>

    {{-- Main Content --}}
    <main class="relative py-24 md:py-20 min-h-screen overflow-hidden">
        <div class="mx-auto px-4 w-[95%] relative z-10">
            {{-- Description Section --}}
            <div class="w-full text-center mb-24">
                <p class="color-text-white text-lg md:text-base leading-relaxed max-w-5xl mx-auto">
                    Bali Virtually provide <span class="color-text-green">360° Virtual Tour</span> of Bali's top destinations, bringing immersive experiences to <span class="color-text-green">travelers everywhere.</span>
            </div>

            {{-- Region Filter --}}
            <div class="w-full flex justify-center mb-24">
                <div class="flex flex-wrap justify-center gap-3 md:gap-4 max-w-[90%]">
                    @php
                    $regions = ['Gianyar', 'Tabanan', 'Denpasar', 'Badung', 'Karangasem', 'Buleleng', 'Bangli', 'Klungkung', 'Jembrana', 'N. Penida'];
                @endphp
                    @foreach($regions as $region)
                        <button onclick="filterTours('{{ $region }}')" class="region-filter-btn px-6 py-2.5 text-sm font-medium text-white bg-transparent border border-gray-400 rounded-lg transition-all duration-300 hover:border-gradient-active focus:outline-none {{ $region === 'Gianyar' ? 'active border-gradient-active' : '' }}" data-region="{{ $region }}">
                            {{ $region }}
                        </button>
                    @endforeach
                </div>
            </div>

            {{-- Tour Cards --}}
            <div class="w-[93.555%] mx-auto flex justify-center pb-24" id="tour-gallery">
                <div id="tour-cards-container" class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-8 max-w-none justify-content-center w-full px-4 md:px-6 lg:px-8">
                    @foreach ($tours as $tour)
                        <div class="tour-card" data-category="{{ $tour['category'] }}">
                            @include('components.tour-card-virtual', [
                                'title' => $tour['title'],
                                'description' => $tour['description'],
                                'image' => $tour['image'],
                                'category' => $tour['category'],
                                'slug' => $tour['slug']
                            ])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection

