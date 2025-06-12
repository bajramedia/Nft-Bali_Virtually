<div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden flex flex-col border border-gray-700 hover:border-teal-400 transition duration-300 transform hover:-translate-y-1 h-[420px] w-[450px] items-center">
    <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-full h-[260px] object-cover">
    <div class="flex flex-col flex-grow gap-4 px-5 pt-4 pb-4 items-center text-center w-full">
        <div class="w-full flex flex-col items-center">
            <h3 class="text-lg font-semibold text-white mb-2 leading-tight">{{ $title }}</h3>
            <p class="text-color-white text-sm line-clamp-2">{{ $description }}</p>
        </div>
        <div class="flex justify-center w-full mt-auto">
            <a href="{{ route('tour.detail', $slug) }}" class="btn-glow bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-3 px-6 rounded-lg text-sm transition duration-300 shadow-md hover:shadow-lg transform hover:scale-105">
                Experience Now
            </a>
        </div>
    </div>  
</div>  