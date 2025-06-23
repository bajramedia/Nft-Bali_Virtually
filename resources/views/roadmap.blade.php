{{-- resources/views/roadmap.blade.php --}}

@extends('layouts.app')

@section('title', 'Background & Roadmap - Bali Virtually')

@section('content')

{{-- Hero Section --}}
<section class="relative h-screen w-full flex items-center justify-center mb-12 sm:mb-16 lg:mb-20" style="background-image: url('{{ asset('images/high-angle-shot-foggy-hills 1.jpg') }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 overlay-dark-heavy"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full h-full">
        <div class="mx-auto px-4 w-[85%] text-center">
            <h1 class="font-aldrich color-text-white text-3xl sm:text-4xl md:text-5xl lg:text-6xl leading-tight mb-6 sm:mb-8">
                Background & Roadmap
            </h1>
        </div>
    </div>
</section>

{{-- Main Content --}}
<main class="relative py-12 sm:py-16 lg:py-20 min-h-screen">
    <div class="mx-auto px-4 w-[100%]">
        
        {{-- The Origin Section --}}
        <section class="mb-20 sm:mb-28 lg:mb-32">
            <div class="text-center mb-12 sm:mb-16 lg:mb-20">
                <h2 class="font-aldrich color-text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight mb-8 sm:mb-12">
                    The Origin of Bali Virtually
                </h2>
                
                <div class="space-y-6 sm:space-y-8 max-w-[85%] mx-auto">
                    <p  class="color-text-white text-base sm:text-lg leading-[2] text-justify">
                        Bali Virtually was born from my personal journey as the founder. For several years (2021 - now), I worked as a 
                        freelance photographer and videographer documenting the social programs of a DPR RI member 
                        representing Bali. This role brought me across many remote villages, witnessing firsthand the distribution of 
                        social aid for micro-businesses, home renovations, support for people with disabilities, and community 
                        outreach.
                    </p>
                    
                    <p class="color-text-white text-base sm:text-lg leading-[2] text-justify">
                        While working, I often saw how deeply grateful local residents were to receive attention and support from the 
                        government. It moved me. At the same time, I began to feel a strong desire to help, but I didn't know where to 
                        start or what I could do.
                    </p>
                    
                    <p  class="color-text-white text-base sm:text-lg leading-[2] text-justify">
                        Three years later, life gave me a new path I became a lecturer at a private IT university in Bali, specializing in 
                        Visual Communication Design with a focus on Virtual Interactive Experience Design with academic 
                        responsibilities, I must teach, research, and serve the community. That's when I realized "Maybe this is the 
                        path I was meant to take to make a real impact."
                    </p>
                    
                    <p class="color-text-white text-base sm:text-lg leading-[1] text-justify font-medium italic" >
                        With my background in IT, art, and experience in virtual tour research, I began to ask:
                    </p>
                    
                    <p class="color-text-white text-base sm:text-lg leading-[1] text-justify font-medium italic">
                        "What can I do with the knowledge and position I have now?"
                    </p>
                    
                    <p class="color-text-white text-base sm:text-lg leading-[1] text-justify font-medium italic">
                        "How can I contribute to society while building a meaningful livelihood?"
                    </p>
                    
                    <p  class="color-text-white text-base sm:text-lg leading-[2] text-justify">
                        I noticed that although Bali's tourism numbers continue to grow, many beautiful and unique destinations 
                        remain under-visited and their surrounding communities don't benefit equally from the economic impact. This 
                        inequality inspired me to take action. Bali Virtually was created as a response to promote lesser-known 
                        destinations through immersive virtual experiences, empower local communities through NFT-based revenue 
                        sharing, and bring Bali's cultural treasures to the global digital stage.
                    </p>
                </div>
            </div>
        </section>

        {{-- Roadmap Section --}}
        <section class="mb-20 sm:mb-28 lg:mb-32">
            <div class="text-center mb-12 sm:mb-16 lg:mb-20">
                <h2 class="font-aldrich color-text-white text-2xl sm:text-3xl md:text-4xl lg:text-5xl leading-tight mb-8 sm:mb-12">
                    Roadmap
                </h2>
                
                <div class="max-w-[85%] mx-auto mb-12">
                    <p class="color-text-white text-sm sm:text-base leading-[1.8] text-center">
                        This roadmap provides a comprehensive overview of our project from developing immersive virtual tours and 
                        exclusive NFTs, to implementing smart contracts for transparent revenue sharing, and ultimately bringing 
                        Bali's iconic destinations into the metaverse.
                    </p>
                </div>
                
                {{-- Roadmap Timeline --}}
                <div class="relative max-w-[85%] mx-auto">
                    {{-- SVG Roadmap Line --}}
                    <div class="absolute left-1/2 transform -translate-x-1/2 z-0 opacity-80">
                        <img src="{{ asset('images/line-roadmap.svg') }}" 
                             alt="Roadmap Timeline" 
                             class="w-40 sm:w-48 md:w-56 lg:w-64 xl:w-72 h-auto">
                    </div>
                    
                    {{-- Roadmap Items --}}
                    <div class="space-y-4 sm:space-y-6 md:space-y-8 relative z-10">
                        
                        {{-- Item 1: Research & Design (Kiri) --}}
                        <div class="relative flex items-start min-h-[80px]">
                            {{-- Left Content --}}
                            <div class="w-1/2 pr-4 sm:pr-6 text-right flex items-start justify-end">
                                <div class="mr-4 sm:mr-6 md:mr-8 mt-0">
                                    <h3 class="font-aldrich color-text-white text-sm sm:text-base md:text-lg font-bold mb-1 sm:mb-2">Research & Design</h3>
                                    <p class="color-text-white text-xs sm:text-sm opacity-80">Gianyar's Top Heritage Sites<br>April - May 2025</p>
                                </div>
                            </div>
                            
                            {{-- Right Content (Empty for this item) --}}
                            <div class="w-1/2 pl-4 sm:pl-6 flex items-start justify-start">
                                <div class="ml-4 sm:ml-6 md:ml-8"></div>
                            </div>
                        </div>
                        
                        {{-- Item 2: Premiere Launch (Kanan) --}}
                        <div class="relative flex items-start min-h-[80px]">
                            {{-- Left Content (Empty for this item) --}}
                            <div class="w-1/2 pr-4 sm:pr-6 text-right flex items-start justify-end">
                                <div class="mr-4 sm:mr-6 md:mr-8"></div>
                            </div>
                            
                            {{-- Right Content --}}
                            <div class="w-1/2 pl-4 sm:pl-6 flex items-start justify-start">
                                <div class="ml-4 sm:ml-6 md:ml-8 mt-3 sm:mt-4 md:mt-5">
                                    <h3 class="font-aldrich color-text-white text-sm sm:text-base md:text-lg font-bold mb-1 sm:mb-2">Premiere Launch: Goa Gajah</h3>
                                    <p class="color-text-white text-xs sm:text-sm opacity-80">Immersive Tour & Limited NFT Collection<br>June - July 2025</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Item 3: Batuan Temple (Kiri) --}}
                        <div class="relative flex items-start min-h-[80px]">
                            {{-- Left Content --}}
                            <div class="w-1/2 pr-4 sm:pr-6 text-right flex items-start justify-end">
                                <div class="mr-4 sm:mr-6 md:mr-8 mt-2 sm:mt-3">
                                    <h3 class="font-aldrich color-text-white text-sm sm:text-base md:text-lg font-bold mb-1 sm:mb-2">Batuan Temple</h3>
                                    <p class="color-text-white text-xs sm:text-sm opacity-80">Virtual Tour & NFT Launch<br>August 2025</p>
                                </div>
                            </div>
                            
                            {{-- Right Content (Empty for this item) --}}
                            <div class="w-1/2 pl-4 sm:pl-6 flex items-start justify-start">
                                <div class="ml-4 sm:ml-6 md:ml-8"></div>
                            </div>
                        </div>
                        
                        {{-- Item 4: Patung Bayi Sakah (Kanan) --}}
                        <div class="relative flex items-start min-h-[80px]">
                            {{-- Left Content (Empty for this item) --}}
                            <div class="w-1/2 pr-4 sm:pr-6 text-right flex items-start justify-end">
                                <div class="mr-4 sm:mr-6 md:mr-8"></div>
                            </div>
                            
                            {{-- Right Content --}}
                            <div class="w-1/2 pl-4 sm:pl-6 flex items-start justify-start">
                                <div class="ml-4 sm:ml-6 md:ml-8 mt-5 sm:mt-6 md:mt-7">
                                    <h3 class="font-aldrich color-text-white text-sm sm:text-base md:text-lg font-bold mb-1 sm:mb-2">Patung Bayi Sakah</h3>
                                    <p class="color-text-white text-xs sm:text-sm opacity-80">Virtual Tour & NFT Launch<br>September 2025</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Item 5: Research & Development (Kiri) --}}
                        <div class="relative flex items-start min-h-[80px]">
                            {{-- Left Content --}}
                            <div class="w-1/2 pr-4 sm:pr-6 text-right flex items-start justify-end">
                                <div class="mr-4 sm:mr-6 md:mr-8 mt-4 sm:mt-5 md:mt-6">
                                    <h3 class="font-aldrich color-text-white text-sm sm:text-base md:text-lg font-bold mb-1 sm:mb-2">Research, Design & Develop</h3>
                                    <p class="color-text-white text-xs sm:text-sm opacity-80">Virtual Tour & NFT of Top Heritage Sites in other key regions: Tabanan, Denpasar, Badung, Etc.<br>October 2025 - October 2026</p>
                                </div>
                            </div>
                            
                            {{-- Right Content (Empty for this item) --}}
                            <div class="w-1/2 pl-4 sm:pl-6 flex items-start justify-start">
                                <div class="ml-4 sm:ml-6 md:ml-8"></div>
                            </div>
                        </div>
                        
                        {{-- Item 6: Smart Contracts (Kanan) --}}
                        <div class="relative flex items-start min-h-[80px]">
                            {{-- Left Content (Empty for this item) --}}
                            <div class="w-1/2 pr-4 sm:pr-6 text-right flex items-start justify-end">
                                <div class="mr-4 sm:mr-6 md:mr-8"></div>
                            </div>
                            
                            {{-- Right Content --}}
                            <div class="w-1/2 pl-4 sm:pl-6 flex items-start justify-start">
                                <div class="ml-4 sm:ml-6 md:ml-8 mt-7 sm:mt-8 md:mt-9">
                                    <h3 class="font-aldrich color-text-white text-sm sm:text-base md:text-lg font-bold mb-1 sm:mb-2">Implementing Smart Contracts</h3>
                                    <p class="color-text-white text-xs sm:text-sm opacity-80">September - October 2026</p>
                                </div>
                            </div>
                        </div>
                        
                        {{-- Item 7: Bali Metaverse (Kiri) --}}
                        <div class="relative flex items-start min-h-[80px]">
                            {{-- Left Content --}}
                            <div class="w-1/2 pr-4 sm:pr-6 text-right flex items-start justify-end">
                                <div class="mr-4 sm:mr-6 md:mr-8 mt-6 sm:mt-7 md:mt-8">
                                    <h3 class="font-aldrich color-text-white text-sm sm:text-base md:text-lg font-bold mb-1 sm:mb-2">Bali Metaverse Ecosystem Development</h3>
                                    <p class="color-text-white text-xs sm:text-sm opacity-80">November 2026 - November 2027</p>
                                </div>
                            </div>
                            
                            {{-- Right Content (Empty for this item) --}}
                            <div class="w-1/2 pl-4 sm:pl-6 flex items-start justify-start">
                                <div class="ml-4 sm:ml-6 md:ml-8"></div>
                            </div>
                        </div>
                        
                        {{-- Item 8: Ongoing Development (Kanan) --}}
                        <div class="relative flex items-start min-h-[80px]">
                            {{-- Left Content (Empty for this item) --}}
                            <div class="w-1/2 pr-4 sm:pr-6 text-right flex items-start justify-end">
                                <div class="mr-4 sm:mr-6 md:mr-8"></div>
                            </div>
                            
                            {{-- Right Content --}}
                            <div class="w-1/2 pl-4 sm:pl-6 flex items-start justify-start">
                                <div class="ml-4 sm:ml-6 md:ml-8 mt-9 sm:mt-10 md:mt-11">
                                    <h3 class="font-aldrich color-text-white text-sm sm:text-base md:text-lg font-bold mb-1 sm:mb-2">2028+ Ongoing Development of</h3>
                                    <p class="color-text-white text-xs sm:text-sm opacity-80">New Experiences & Collaborations</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                {{-- Impact Statement --}}
                <div class="mt-16 sm:mt-20 max-w-[85%] mx-auto">
                    <p class="color-text-white text-sm sm:text-base leading-[1.8] text-center">
                        Every time an NFT collection is sold out, 20% of the proceeds are immediately allocated to implement real 
                        community programs in the village where the related cultural site is located.
                    </p>
                </div>
            </div>
        </section>

    </div>
</main>

@endsection 