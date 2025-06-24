@extends('layouts.app')

@section('title', 'Impact & Giving - Bali Virtually')

@section('content')

{{-- Hero Section --}}
<section class="relative h-screen w-full flex items-center justify-center" style="background-image: url('{{ asset('images/women.png') }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-black" style="opacity: 0.6;"></div>
    <div class="relative z-10 flex flex-col items-center justify-center w-full h-full">
        <div class="mx-auto px-4 w-[90%] text-center">
            <h1 class="text-white text-4xl md:text-6xl font-normal leading-tight mb-6" style="color: var(--color-white);">
                Virtual Journeys,<br>Real Change
            </h1>
        </div>
    </div>
</section>

{{-- Main Content --}}
<main class="relative py-16 md:py-20 min-h-screen overflow-hidden">
    <div class="mx-auto px-4 w-[95%] relative z-10">
        {{-- Description Section --}}
        <div class="w-full text-center mb-16">
            <p class="color-text-white font-medium text-base md:text-lg leading-relaxed max-w-7xl mx-auto">
                Each NFT sold is not just a digital collectible, but also a part of an effort to create positive change. We are <span class="text-mint">committed to donating 20%</span> of each NFT sale to the people of Bali. The funds raised will be used to support education, preserve culture, and improve the well-being of the communities that contribute to maintaining Bali's heritage. With every NFT purchase, you are playing a role in creating a better future for Bali's local communities.
            </p>
        </div></span>

        {{-- Empower Culture Section --}}
        <div class="w-full flex justify-center mb-16">
            <div class="rounded-2xl border border-gray-white p-8 md:p-12 max-w-[89%] w-full" style="background-color: #272727;">
                <h2 class="text-white text-3xl md:text-4xl font-normal font-aldrich text-center mb-8">
                    Empower Culture. Support Communities
                </h2>
                <p class="color-text-white text-sm md:text-base leading-[2.3] text-left">
                    Join us in supporting projects that preserve <span class="text-mint">cultural traditions, protect natural landscapes, and strengthen local economies.</span> Your donations contribute directly to impactful initiatives, ensuring that local heritage and communities thrive for future generations. With transparent tracking, you can follow the progress of the projects and see the tangible difference your support makes.
                </p>
            </div>
        </div>

        {{-- Funded Projects Section --}}
        <div class="w-full">
            <h2 class="text-white text-2xl md:text-3xl font-semibold font-aldrich text-center mb-12">
                Funded Project
            </h2>
            
            <div class="w-[89%] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                 @foreach ($projects as $project)
                     <div class="bg-[#2B2B2B] rounded-2xl overflow-hidden shadow-lg flex flex-col items-center">
                         <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-auto object-cover">
                         <div class="p-6 flex flex-col flex-1 w-full">
                             <h3 class="text-xl font-semibold text-white mb-2 mt-2 text-center">{{ $project['short_title'] ?? $project['title'] }}</h3>
                             <h3 class="text-xl font-semibold text-white mb-6 text-center">Through Collective Growth</h3>
                             <div class="mb-2 flex justify-center">
                                 <span class="text-xs color-text-white tracking-normal">USD ${{ number_format($project['raised_amount']) }} / USD ${{ number_format($project['target_amount']) }}</span>
                             </div>
                             <div class="w-full flex flex-col items-center mb-2">
                                 <div class="w-4/5 color-text-white rounded-full h-2.5 bg-[#353535] relative">
                                    <?php $barWidth = round($project['raised_amount'] / $project['target_amount'] * 100); ?>
                                     <div class="bg-teal-400 h-2.5 rounded-full absolute top-0 left-0" style="width: {{ $barWidth > 100 ? 100 : $barWidth }}%"></div>
                                 </div>
                             </div>
                             <div class="flex justify-start w-4/5 mx-auto mb-6">
                                <!-- <div > -->
                                 <span class="text-xs color-text-white mt-1">{{ round($project['raised_amount'] / $project['target_amount'] * 100) }}%</span>
                                 
                             </div>
                             <div class="flex justify-center">
                                 <a href="{{ route('funded-project-goa-gajah') }}" class="btn-glow w-3/5 bg-gradient-mint-sky color-black font-semibold py-2 rounded-lg shadow-lg hover:from-blue-600 hover:to-teal-500 transition-all text-base" style="font-family: 'Aldrich', sans-serif;">
                                     Contribute Now
                                 </a>
                             </div>
                         </div>
                     </div>
                 @endforeach
            </div>
        </div>
    </div>
</main>

@endsection