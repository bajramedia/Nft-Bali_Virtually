@extends('layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="relative h-screen w-full flex items-center justify-center" style="background-image: url('{{ asset('images/mountain-3807667_1280 1.png') }}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black" style="opacity: 0.6;"></div>
        <div class="relative z-10 flex flex-col items-center justify-center w-full h-full">
            <div class="mx-auto px-4 w-[90%]">
                <h1 class="text-white text-center text-4xl md:text-6xl font-normal md:font-normal leading-tight" style="color: var(--color-white);">
                    Your Gateway to <br>Bali's Beauty
                </h1>
            </div>
        </div>
    </section>

    {{-- Main Content --}}
    <main class="relative py-16 md:py-20 min-h-screen overflow-hidden">
        <div class="mx-auto px-4 w-[90%] relative z-10">
            {{-- Description Section --}}
            <div class="w-full text-center mb-12">
                <p class="color-text-white text-sm md:text-base leading-relaxed whitespace-nowrap mx-auto">
                    Bali Virtually provide <span class="color-text-green">360° Virtual Tour</span> of Bali's top destinations, bringing immersive experiences to <span class="color-text-green">travelers everywhere.</span>
                </p>
            </div>

            {{-- Region Filter --}}
            <div class="w-full flex justify-center mb-16">
                <div class="flex flex-wrap justify-center gap-3 md:gap-4 max-w-5xl">
                    @php
                        $regions = ['All', 'Denpasar', 'Tabanan', 'Badung', 'Gianyar', 'Bangli', 'Klungkung', 'Karangasem', 'Buleleng' ];
                    @endphp
                    @foreach($regions as $region)
                        <button onclick="filterTours('{{ $region }}')" class="filter-btn px-4 py-2 text-xs md:text-sm font-medium color-text-white color-bg-gray border border-white border-1 rounded-md hover:color-bg-mint hover:text-white transition duration-300 {{ $region === 'All' ? 'active' : '' }}">
                            {{ $region }}
                        </button>
                    @endforeach
                </div>
            </div>

            {{-- Tour Cards --}}
            <div class="w-full flex justify-center">
                <div id="tour-cards-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-6 md:gap-8 justify-items-center max-w-4xl">
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

            <script>
            // Fungsi buat filter tour cards berdasarkan kategori yang dipilih
            function filterTours(selectedCategory) {
                const tourCards = document.querySelectorAll('.tour-card');
                const filterButtons = document.querySelectorAll('.filter-btn');
                
                // Update active state pada button filter
                filterButtons.forEach(btn => {
                    btn.classList.remove('active', 'color-bg-mint');
                    btn.classList.add('color-bg-gray');
                });
                
                // Set active state untuk button yang diklik
                event.target.classList.add('active', 'color-bg-mint');
                event.target.classList.remove('color-bg-gray');
                
                // Filter tour cards
                tourCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    
                    if (selectedCategory === 'All' || cardCategory === selectedCategory) {
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
            }

            // Set default filter ke 'All' saat halaman dimuat
            document.addEventListener('DOMContentLoaded', function() {
                const allButton = document.querySelector('.filter-btn.active');
                if (allButton) {
                    allButton.classList.add('color-bg-mint');
                    allButton.classList.remove('color-bg-gray');
                }
            });
            </script>

            <style>
            /* Style tambahan buat smooth transition */
            .tour-card {
                transition: opacity 0.3s ease-in-out;
            }
            
            .filter-btn.active {
                background: var(--color-mint) !important;
                color: var(--color-black) !important;
            }
            </style>