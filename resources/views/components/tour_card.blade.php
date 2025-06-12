<div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden flex flex-col">
    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-48 object-cover">
    <div class="p-6 flex flex-col flex-grow">
        <h3 class="text-xl font-semibold mb-2">{{ $title }}</h3>
        <p class="text-gray-400 text-sm mb-4 flex-grow">{{ $description }}</p>
        <a href="#" class="mt-auto bg-teal-500 hover:bg-teal-600 text-white font-semibold py-2 px-4 rounded-md text-center transition duration-300">
            Learn More
        </a>
    </div>
</div>