{{-- resources/views/roadmap.blade.php --}}

@extends('layouts.app')

@section('title', 'Background & Roadmap - Bali Virtually')

@section('content')

{{-- Hero Section --}}
<section class="relative w-full flex items-center justify-center mb-12 sm:mb-16 lg:mb-20" style="background-image: url('{{ asset('images/roadmapbg.png') }}'); background-size: cover; background-position: center; height: auto; min-height: 100vh;">
    <div class="absolute inset-0 overlay-dark-heavy"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full h-full py-20">
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
                    <p  class="color-text-white text-base sm:text-lg leading-[1.5] text-justify">
                        Bali Virtually was born from my personal journey as the founder. For several years (2021 - now), I worked as a 
                        freelance photographer and videographer documenting the social programs of a DPR RI member 
                        representing Bali. This role brought me across many remote villages, witnessing firsthand the distribution of 
                        social aid for micro-businesses, home renovations, support for people with disabilities, and community 
                        outreach.
                    </p>
                    
                    <p class="color-text-white text-base sm:text-lg leading-[1.5] text-justify">
                        While working, I often saw how deeply grateful local residents were to receive attention and support from the 
                        government. It moved me. At the same time, I began to feel a strong desire to help, but I didn't know where to 
                        start or what I could do.
                    </p>
                    
                    <p  class="color-text-white text-base sm:text-lg leading-[1.5] text-justify">
                        Three years later, life gave me a new path I became a lecturer at a private IT university in Bali, specializing in 
                        Visual Communication Design with a focus on Virtual Interactive Experience Design with academic 
                        responsibilities, I must teach, research, and serve the community. That's when I realized "Maybe this is the 
                        path I was meant to take to make a real impact."
                    </p>
                    
                    <p class="color-text-white text-base sm:text-lg leading-3 text-justify font-medium italic" >
                        With my background in IT, art, and experience in virtual tour research, I began to ask:
                    </p>
                    
                    <p class="color-text-white text-base sm:text-lg leading-3 text-justify font-medium italic">
                        "What can I do with the knowledge and position I have now?"
                    </p>
                    
                    <p class="color-text-white text-base sm:text-lg leading-3 text-justify font-medium italic">
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
                    {{-- SVG Roadmap --}}
                    <div class="w-full flex justify-center">
                        <img src="{{ asset('images/roadmap.svg') }}" 
                             alt="Roadmap Timeline" 
                             class="w-full max-w-4xl h-auto">
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