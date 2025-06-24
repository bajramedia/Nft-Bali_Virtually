<section class="py-16 md:py-24">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-semibold mb-6 font-aldrich text-white">Impact &amp; Giving</h2>
            <p class="text-white max-w-7xl mx-auto mb-10 text-base md:text-lg">
                Every Bali Virtually NFT is more than just a digital artwork. It <span class="text-teal-400 font-semibold">carries the essence of culture, spirituality, and social responsibility.</span> Through this collection, the sacred legends of Bali are immortalized for the world, while directly supporting cultural preservation and the well-being of local communities. 
            </p>
            <p class="text-white max-w-7xl mx-auto text-base md:text-lg">
                Each NFT sold is not just a digital collectible, but also a part of an effort to create positive change. We are committed to <span class="text-teal-400 font-semibold">donating 20%</span> of each NFT sale to the people of Bali. The funds raised will be used to support education, preserve culture, and promote sustainable tourism.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                // Ambil data projects dari controller untuk featured section
                $featuredProjects = app('App\Http\Controllers\PageController')->getProjectsData();
                // Ambil hanya 3 project pertama untuk featured section
                $featuredProjects = array_slice($featuredProjects, 0, 3);
            @endphp

            @foreach ($featuredProjects as $project)
                <div class="bg-gray-800 rounded-2xl overflow-hidden shadow-lg flex flex-col items-center transition-all duration-300 hover:shadow-xl hover:scale-105">
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
                            <span class="text-xs color-text-white mt-1">{{ round($project['raised_amount'] / $project['target_amount'] * 100) }}%</span>
                        </div>
                        <div class="flex justify-center">
                            <a href="{{ route('Impact&Giving') }}" class="btn-glow w-3/5 bg-gradient-mint-sky text-black font-semibold py-2 rounded-lg shadow-lg hover:from-blue-600 hover:to-teal-500 transition-all text-base font-aldrich">
                                Contribute Now
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>