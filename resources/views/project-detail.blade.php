@extends('layouts.app')

@section('title', 'Preserve Goa Gajah Through Collective Growth - Bali Virtually')

@section('content')

{{-- Hero Section --}}
<section class="relative h-screen w-full flex items-center justify-center" style="background-image: url('{{ asset('images/goa-gajah-bg.jpg') }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black" style="opacity: 0.6;"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full h-full">
        <div class="mx-auto px-4 w-[90%] text-center">
            <h1 class="text-white text-4xl md:text-6xl font-bold leading-tight mb-8" style="font-family: 'Aldrich', sans-serif;">
                Preserve Goa Gajah Through<br>Collective Growth
            </h1>
        </div>
    </div>
</section>

{{-- Main Content --}}
<main class="relative py-16 md:py-20 min-h-screen" style="background-color: #1a1a1a;">
    <div class="mx-auto px-4 w-[90%] relative z-10">
        
        {{-- Program Description Section --}}
        <div class="flex flex-col lg:flex-row items-start gap-12 mb-20 max-w-6xl mx-auto">
            {{-- Profile Image --}}
            <div class="flex-shrink-0">
                <div class="w-32 h-32 rounded-full bg-gradient-to-br from-[#80ECB6] to-[#79ADEE] flex items-center justify-center">
                    <div class="w-28 h-28 rounded-full bg-gray-800 flex items-center justify-center">
                        <svg class="w-12 h-12 text-[#80ECB6]" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                        </svg>
                    </div>
                </div>
            </div>
            
            {{-- Program Description --}}
            <div class="flex-1">
                <div class="mb-6">
                    <h3 class="color-text-green text-xl mb-2" style="font-family: 'Aldrich', sans-serif;">
                        Agus Sari Sari
                    </h3>
                    <p class="color-text-white text-sm opacity-80">Project Coordinator</p>
                </div>
                
                <div class="color-text-white leading-relaxed space-y-4">
                    <p>Kami mencakup dukungan,</p>
                    <p>pelestarian agama sebagai yang</p>
                    <p>sejarah dan prestasi bangkah daerah masyarakat bawah sebanyak apapun untuk mencapai dalam proses demi yang mencakup di masyarakat dan pemenghuan untuk pemberdayaan oaol?</p>
                </div>
            </div>
        </div>

        {{-- Our Program Section --}}
        <div class="mb-20">
            <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-12" style="font-family: 'Aldrich', sans-serif;">
                Our Program
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                {{-- Education Card --}}
                <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden hover:border-[#80ECB6] transition duration-300">
                    <div class="aspect-video bg-gray-700 relative">
                        <img src="{{ asset('images/education-program.jpg') }}" alt="Education Program" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black opacity-40"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-white text-lg font-semibold text-center" style="font-family: 'Aldrich', sans-serif;">
                            Education
                        </h3>
                    </div>
                </div>
                
                {{-- Supporting Local MSMEs Card --}}
                <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden hover:border-[#80ECB6] transition duration-300">
                    <div class="aspect-video bg-gray-700 relative">
                        <img src="{{ asset('images/msme-program.jpg') }}" alt="MSME Program" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black opacity-40"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-white text-lg font-semibold text-center" style="font-family: 'Aldrich', sans-serif;">
                            Supporting Local MSMEs
                        </h3>
                    </div>
                </div>
                
                {{-- Preserve Culture Card --}}
                <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden hover:border-[#80ECB6] transition duration-300">
                    <div class="aspect-video bg-gray-700 relative">
                        <img src="{{ asset('images/culture-program.jpg') }}" alt="Culture Program" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black opacity-40"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-white text-lg font-semibold text-center" style="font-family: 'Aldrich', sans-serif;">
                            Preserve Culture
                        </h3>
                    </div>
                </div>
            </div>
        </div>

        {{-- How Your Contribution Helps Section --}}
        <div class="mb-20">
            <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-12" style="font-family: 'Aldrich', sans-serif;">
                How Your Contribution Helps
            </h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
                {{-- Goa Gajah NFTs Card --}}
                <div class="bg-gray-800 rounded-xl border border-gray-700 p-8 hover:border-[#80ECB6] transition duration-300">
                    <div class="flex items-center gap-6 mb-6">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-br from-[#80ECB6] to-[#79ADEE] flex items-center justify-center flex-shrink-0">
                            <svg class="w-10 h-10 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white text-xl font-semibold mb-2" style="font-family: 'Aldrich', sans-serif;">
                                Goa Gajah NFTs
                            </h3>
                            <p class="color-text-white text-sm opacity-80">
                                VIRTUAL WORLD TOURS SITE NOD OFC FROM $200
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex justify-center">
                        <button class="bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                            View Details
                        </button>
                    </div>
                </div>
                
                {{-- Preserve Goa Gajah Through Knowledge Card --}}
                <div class="bg-gray-800 rounded-xl border border-gray-700 p-8 hover:border-[#80ECB6] transition duration-300">
                    <div class="flex items-center gap-6 mb-6">
                        <div class="w-20 h-20 rounded-full bg-gradient-to-br from-[#80ECB6] to-[#79ADEE] flex items-center justify-center flex-shrink-0">
                            <svg class="w-10 h-10 text-black" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white text-xl font-semibold mb-2" style="font-family: 'Aldrich', sans-serif;">
                                Preserve Goa Gajah Through Knowledge
                            </h3>
                            <p class="color-text-white text-sm opacity-80">
                                Goa Gajah is more than stone and statuary... It is integral to understanding how all of Bali's sacred heritage lives as well as many in the world.
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex justify-center">
                        <button class="bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                            BE PART OF OUR MISSION
                        </button>
                    </div>
                </div>
            </div>
        </div>

        {{-- Project Image Section --}}
        <div class="mb-20">
            <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-12" style="font-family: 'Aldrich', sans-serif;">
                Project Image
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                @for($i = 1; $i <= 6; $i++)
                    <div class="aspect-video bg-gray-700 rounded-xl border border-gray-600 hover:border-[#80ECB6] transition duration-300 flex items-center justify-center">
                        <svg class="w-12 h-12 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                @endfor
            </div>
        </div>

        {{-- Results Section --}}
        <div class="mb-20">
            <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-12" style="font-family: 'Aldrich', sans-serif;">
                Results
            </h2>
            
            <div class="max-w-4xl mx-auto text-center">
                <p class="color-text-white text-lg leading-relaxed">
                    Goa Gajah, a sacred site in Bali, is a cultural and historical treasure. By supporting our initiative, you help preserve one of Indonesia's most significant heritage sites. Our project has shown real impact and significance that speaks to the wisdom and cultural heritage so understood and respected worldwide.
                </p>
            </div>
        </div>
    </div>
</main>

@endsection 