@extends('layouts.app')

@section('title', 'Funded Project - Goa Gajah - Bali Virtually')

@section('content')

{{-- Hero Section --}}
<section class="relative h-screen w-full flex items-center justify-center" style="background-image: url('{{ asset('images/goa-gajah-hero.jpg') }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black" style="opacity: 0.7;"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full h-full">
        <div class="mx-auto px-4 w-[90%] text-center">
            <h1 class="text-white text-4xl md:text-5xl font-bold leading-tight mb-6" style="font-family: 'Aldrich', sans-serif;">
                Preserve Goa Gajah Through<br>Collective Growth
            </h1>
        </div>
    </div>
</section>

{{-- Main Content --}}
<main class="relative py-16 md:py-20 min-h-screen overflow-hidden">
    <div class="mx-auto px-4 w-[90%] relative z-10">
        
        {{-- Description & Profile Section --}}
        <div class="flex flex-col lg:flex-row items-start gap-12 mb-20">
            {{-- Description Text --}}
            <div class="lg:w-2/3">
                <p class="color-text-white text-base leading-relaxed mb-8">
                    We create real impact for the community around Goa Gajah through three main pillars: education, MSME empowerment, and cultural preservation. With your support, we can nurture local knowledge, boost the community's economy through Micro, Small, and Medium Enterprises (MSMEs), and safeguard traditional wisdom and cultural heritage so they continue to thrive and inspire future generations.
                </p>
            </div>
            
            {{-- Profile Card --}}
            <div class="lg:w-1/3 flex justify-center">
                <div class="bg-gray-800 rounded-2xl border border-gray-700 p-8 text-center max-w-sm w-full">
                    {{-- Profile Avatar --}}
                    <div class="w-24 h-24 mx-auto mb-6 rounded-full overflow-hidden bg-gradient-to-br from-[#80ECB6] to-[#79ADEE] p-1">
                        <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                            <div class="w-full h-full rounded-full bg-gradient-to-br from-[#80ECB6] to-[#79ADEE]"></div>
                        </div>
                    </div>
                    
                    {{-- Profile Info --}}
                    <h3 class="text-white text-lg font-semibold mb-2">Agus Sri Seri</h3>
                    <p class="color-text-white text-sm mb-4">Project Coordinator</p>
                    
                    {{-- Indonesian Description --}}
                    <div class="text-left space-y-2">
                        <p class="color-text-white text-xs leading-relaxed">
                            Istrina dengan pelayanan agama sebagai aga.
                        </p>
                        <p class="color-text-white text-xs leading-relaxed">
                            sejarah dan potensi spiritual desa masyarakat maupun bekerja sebagai agen perubahan apa yang dibohasi di masyarakat dan paru dibiarkan untuk pemberdayaan apa?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Our Program Section --}}
        <div class="mb-20">
            <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-12" style="font-family: 'Aldrich', sans-serif;">
                Our Program
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                @php
                    $programs = [
                        [
                            'title' => 'Education',
                            'image' => 'images/goa-gajah-education.jpg',
                        ],
                        [
                            'title' => 'Supporting Local MSMEs',
                            'image' => 'images/goa-gajah-msme.jpg',
                        ],
                        [
                            'title' => 'Preserve Culture',
                            'image' => 'images/goa-gajah-culture.jpg',
                        ],
                    ];
                @endphp

                @foreach($programs as $program)
                    <div class="bg-gray-800 rounded-xl border border-gray-700 overflow-hidden hover:border-[#80ECB6] transition duration-300 group">
                        {{-- Program Image --}}
                        <div class="w-full h-48 overflow-hidden bg-gray-700">
                            <img src="{{ asset($program['image']) }}" alt="{{ $program['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-300" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="w-full h-full bg-gray-700 items-center justify-center hidden">
                                <svg class="w-16 h-16 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        
                        {{-- Program Title --}}
                        <div class="p-6 text-center">
                            <h3 class="text-white text-lg font-semibold">
                                {{ $program['title'] }}
                            </h3>
                        </div>
                    </div>
                @endforeach
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
                    <div class="flex items-start gap-6">
                        {{-- Avatar --}}
                        <div class="w-16 h-16 rounded-full overflow-hidden bg-gradient-to-br from-[#80ECB6] to-[#79ADEE] p-1 flex-shrink-0">
                            <div class="w-full h-full rounded-full bg-gray-700 flex items-center justify-center">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="flex-1">
                            <h3 class="text-white text-lg font-semibold mb-2">Goa Gajah NFTs</h3>
                            <p class="color-text-white text-sm mb-4">
                                YOUR GOA GAJAH IS THE NFT GOA GAJAH
                            </p>
                            
                            {{-- Progress Bars --}}
                            @php
                                // Ambil data project Goa Gajah dari controller
                                $goaGajahProject = collect(app('App\Http\Controllers\PageController')->getProjectsData())
                                    ->firstWhere('slug', 'goa-gajah-preservation');
                            @endphp
                            <div class="space-y-3 mb-6">
                                @if($goaGajahProject)
                                    {{-- Menggunakan Progress Bar Component --}}
                                    @include('components.progress_bar', [
                                        'raised' => $goaGajahProject['raised_amount'], 
                                        'target' => $goaGajahProject['target_amount'],
                                        'color' => 'bg-gradient-to-r from-[#80ECB6] to-[#79ADEE]',
                                        'height' => 'h-2',
                                        'width' => 'w-full',
                                        'containerClass' => 'mb-4'
                                    ])
                                @else
                                    {{-- Fallback jika project tidak ditemukan --}}
                                    <div class="text-xs color-text-white text-center">
                                        Project data not available
                                    </div>
                                @endif
                            </div>
                            
                            <button class="btn-glow bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-2 px-6 rounded-lg text-sm transition duration-300">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Preserve Knowledge Card --}}
                <div class="bg-gray-800 rounded-xl border border-gray-700 p-8 hover:border-[#80ECB6] transition duration-300">
                    <div class="text-center">
                        {{-- Hands Icon --}}
                        <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center">
                            <svg class="w-12 h-12 text-[#80ECB6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/>
                            </svg>
                        </div>
                        
                        <h3 class="text-white text-xl font-semibold mb-4">
                            Preserve Goa Gajah Through Knowledge
                        </h3>
                        <p class="color-text-white text-sm mb-6 leading-relaxed">
                            Goa Gajah is more than stone architecture - it is a living center of Bali's spiritual heritage that we will preserve in the world.
                        </p>
                        
                        <button class="btn-glow bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-3 px-8 rounded-lg transition duration-300">
                            BE PART OF THIS MISSION
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
            
            <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                @for($i = 1; $i <= 6; $i++)
                    <div class="bg-gray-800 rounded-xl border border-gray-700 aspect-video overflow-hidden hover:border-[#80ECB6] transition duration-300 group cursor-pointer">
                        <div class="w-full h-full bg-gray-700 flex items-center justify-center group-hover:bg-gray-600 transition duration-300">
                            <svg class="w-12 h-12 text-gray-500 group-hover:text-[#80ECB6] transition duration-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        {{-- Results Section --}}
        <div class="mb-12">
            <h2 class="text-white text-3xl md:text-4xl font-bold text-center mb-8" style="font-family: 'Aldrich', sans-serif;">
                Results
            </h2>
            
            <div class="max-w-4xl mx-auto text-center">
                <p class="color-text-white text-base leading-relaxed">
                    Goa Gajah, a sacred site in Bali, is a cultural and historical treasure. By supporting our initiative, you help preserve clear information about the site, maintain its historical and spiritual significance of the ancient site. Your contribution aids in preserving Goa Gajah for future generations, ensuring this cultural heritage is understood and respected worldwide.
                </p>
            </div>
        </div>
    </div>
</main>

@endsection 