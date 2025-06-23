<div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden flex flex-col border border-gray-700 hover:border-teal-400 transition duration-300 transform hover:-translate-y-1 h-[420px] w-full min-w-0 max-w-full sm:max-w-[500px] md:max-w-[600px] lg:max-w-[630px] xl:max-w-[930px] items-center mx-auto">
    <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-full h-[260px] object-cover">
    <div class="flex flex-col flex-grow gap-4 px-6 pt-5 pb-5 items-center text-center w-full">
        <div class="w-full flex flex-col items-center">
            <h3 class="text-lg font-semibold text-white mb-2 leading-tight">{{ $title }}</h3>
            <p class="text-color-white text-sm line-clamp-2">{{ $description }}</p>
        </div>
        <div class="flex justify-center w-full mt-auto">
            <button class="btn-glow bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-3 px-8 rounded-lg text-sm text-center flex items-center justify-center transition duration-300 shadow-md hover:shadow-lg transform hover:scale-105">
                Experience Now
            </button>
        </div>
    </div>  
</div>  