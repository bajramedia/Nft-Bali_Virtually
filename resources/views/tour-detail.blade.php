@extends('layouts.app')

@section('title', 'Virtual Experience Through Immersive Tours - Bali Virtually')

@section('content')

{{-- Hero Section --}}
<section class="relative h-screen w-full flex items-center justify-center" style="background-image: url('{{ asset('images/virtual-tour-bg.jpg') }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black" style="opacity: 0.6;"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full h-full">
        <div class="mx-auto px-4 w-[90%] text-center">
            <h1 class="text-white text-4xl md:text-6xl font-bold leading-tight mb-8" style="font-family: 'Aldrich', sans-serif;">
                Virtual Experience Through<br>Immersive Tours
            </h1>
        </div>
    </div>
</section>

{{-- Main Content --}}
<main class="relative py-16 md:py-20 min-h-screen overflow-hidden">
    <div class="mx-auto px-4 w-[90%] relative z-10">
        
        {{-- Description Section --}}
        <div class="w-full text-center mb-16">
            <p class="color-text-white text-sm md:text-base leading-relaxed max-w-6xl mx-auto">
                We create real impact for the community around Goa Gajah through three main pillars: education, MSME empowerment, and cultural preservation. With your support, we can nurture local knowledge, boost the community's economy through Micro, Small, and Medium Enterprises (MSMEs), and safeguard traditional wisdom and cultural heritage so they continue to thrive and inspire future generations.
            </p>
        </div>

        {{-- Impact Pillars Section --}}
        <div class="w-full flex justify-center mb-16">
            <div class="p-8 md:p-12 max-w-5xl w-full">
                <div class="flex flex-col lg:flex-row items-start gap-16">
                    {{-- Left side - Image with name and title below --}}
                    <div class="flex-shrink-0 flex flex-col items-center lg:items-start w-full lg:w-auto">
                        <div class="w-40 h-40 rounded-full bg-gradient-to-br from-[#80ECB6] to-[#79ADEE] flex items-center justify-center mb-4">
                            <div class="w-36 h-36 rounded-full bg-[#232323] flex items-center justify-center">
                                <svg class="w-16 h-16 text-[#80ECB6]" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 12a2 2 0 100-4 2 2 0 000 4z"/>
                                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        <div class="text-center lg:text-left">
                            <h3 class="text-white text-xl mb-1" style="font-family: 'Aldrich', sans-serif;">
                                Agus Sari Sari
                            </h3>
                            <p class="color-text-white text-sm opacity-80">Project Coordinator</p>
                        </div>
                    </div>
                    
                    {{-- Right side - Content aligned with image --}}
                    <div class="flex-1 flex items-start">
                        <div class="color-text-white leading-relaxed space-y-4 text-sm">
                            <p>Jelaskan peluang</p>
                            <p>Jelaskan apa sebagai apa, sejarah dan potensi spiritual desa, masyarakat, masyarakat budaya sebagai apa dan permintaan apa yang dihadapi di masyarakat dan perlukah dibantu untuk pemberdayaan apa?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Our Virtual Tours Section --}}
        <div class="mb-20">
            <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-12" style="font-family: 'Aldrich', sans-serif;">
                Our Virtual Tours
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                {{-- Sacred Temples Card --}}
                <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden hover:border-[#80ECB6] transition duration-300">
                    <div class="aspect-video bg-gray-700 relative">
                        <img src="{{ asset('images/temple-tour.jpg') }}" alt="Sacred Temple Tours" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black opacity-40"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-white text-lg font-semibold text-center" style="font-family: 'Aldrich', sans-serif;">
                            Sacred Temple Tours
                        </h3>
                    </div>
                </div>
                
                {{-- Cultural Sites Card --}}
                <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden hover:border-[#80ECB6] transition duration-300">
                    <div class="aspect-video bg-gray-700 relative">
                        <img src="{{ asset('images/cultural-sites.jpg') }}" alt="Cultural Heritage Sites" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black opacity-40"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-white text-lg font-semibold text-center" style="font-family: 'Aldrich', sans-serif;">
                            Cultural Heritage Sites
                        </h3>
                    </div>
                </div>
                
                {{-- Nature Experiences Card --}}
                <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden hover:border-[#80ECB6] transition duration-300">
                    <div class="aspect-video bg-gray-700 relative">
                        <img src="{{ asset('images/nature-tours.jpg') }}" alt="Natural Wonders" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black opacity-40"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-white text-lg font-semibold text-center" style="font-family: 'Aldrich', sans-serif;">
                            Natural Wonders
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        {{-- How Virtual Tours Help Section --}}
        <div class="mb-20">
            <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-12" style="font-family: 'Aldrich', sans-serif;">
                How Your Contribution Helps
            </h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 max-w-6xl mx-auto">
                {{-- Goa Gajah NFT's Card - Bagian Kiri (Lebih Kecil) --}}
                <div class="lg:col-span-5 bg-gray-800 rounded-xl border border-gray-700 p-8 hover:border-[#80ECB6] transition duration-300">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-24 h-24 rounded-full bg-gradient-to-br from-[#80ECB6] to-[#79ADEE] flex items-center justify-center mb-4">
                            <svg class="w-12 h-12 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="text-white text-lg font-semibold mb-3" style="font-family: 'Aldrich', sans-serif;">
                            Goa Gajah NFT's
                        </h3>
                        <p class="color-text-white text-sm opacity-80 mb-6">
                            Help Lombok to share their culture and history — it's a living experience of Bali's rich cultural heritage, kept alive for the world.
                        </p>
                        
                        {{-- Progress Bar --}}
                        <div class="w-full mb-4">
                            <div class="w-full bg-gray-600 rounded-full h-2 mb-2">
                                <div class="bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] h-2 rounded-full" style="width: 25%"></div>
                            </div>
                            <div class="flex justify-between text-xs color-text-white">
                                <span>25%</span>
                                <span>$500 / $2000</span>
                            </div>
                        </div>
                        
                        <button class="bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-2 px-6 rounded-lg transition duration-300 transform hover:scale-105 text-sm">
                            View Details
                        </button>
                    </div>
                </div>
                
                {{-- Preserve Goa Gajah Through Knowledge Card - Bagian Kanan (Lebih Besar) --}}
                <div class="lg:col-span-7 bg-gray-800 rounded-xl border border-gray-700 p-8 hover:border-[#80ECB6] transition duration-300">
                    <div class="flex items-start gap-6">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-br from-[#80ECB6] to-[#79ADEE] flex items-center justify-center flex-shrink-0">
                            <svg class="w-10 h-10 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M12 14l9-5-9-5-9 5 9 5z"/>
                                <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-white text-xl font-semibold mb-3" style="font-family: 'Aldrich', sans-serif;">
                                Preserve Goa Gajah Through Knowledge
                            </h3>
                            <p class="color-text-white text-sm opacity-80 mb-6 leading-relaxed">
                                Goa Gajah is more than stone and masonry — it's a living experience of Bali's rich cultural heritage, kept alive for the world. Our mission is to preserve this sacred site through education, cultural documentation, and direct community support.
                            </p>
                            
                            {{-- Progress Bar --}}
                            <div class="mb-6">
                                <div class="w-full bg-gray-600 rounded-full h-2.5 mb-2">
                                    <div class="bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] h-2.5 rounded-full" style="width: 35%"></div>
                                </div>
                                <div class="flex justify-between text-xs color-text-white">
                                    <span>35% Funded</span>
                                    <span>$700 / $2000</span>
                                </div>
                            </div>
                            
                            <button class="bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                                Be part of this mission
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Virtual Tour Gallery Section --}}
        <div class="mb-20">
            <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-12" style="font-family: 'Aldrich', sans-serif;">
                Tour Destinations
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                @for($i = 1; $i <= 6; $i++)
                    <div class="aspect-video bg-gray-700 rounded-xl border border-gray-600 hover:border-[#80ECB6] transition duration-300 flex items-center justify-center group">
                        <div class="text-center">
                            <svg class="w-12 h-12 text-gray-500 group-hover:text-[#80ECB6] mx-auto mb-2 transition duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-gray-500 group-hover:text-[#80ECB6] text-sm transition duration-300">Tour #{{ $i }}</p>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        {{-- Results & Impact Section --}}
        <div class="mb-20">
            <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-12" style="font-family: 'Aldrich', sans-serif;">
                Impact & Results
            </h2>
            
            <div class="max-w-4xl mx-auto text-center">
                <p class="color-text-white text-lg leading-relaxed">
                    Our virtual tour platform has welcomed over 10,000 global visitors, providing immersive cultural experiences while supporting local communities. Through virtual tourism, we've reduced environmental impact by 60% while maintaining authentic cultural education and generating sustainable income for local guides and cultural preservationists in Bali.
                </p>
            </div>
        </div>
    </div>
</main>

@endsection