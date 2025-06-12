<section class="py-16 mb-16 md:py-24">
    <div class="container mx-auto px-4 mt-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-16">Meet The Team</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            @php
                $teamMembers = [
                    ['name' => 'Bagus Wijaya', 'image' => 'images/gusdeWirya.png', 'role' => 'CEO & Founder'],
                    ['name' => 'Yudhi', 'image' => 'images/Vivaldi.png', 'role' => 'Co-Founder & CCO'],
                    ['name' => 'Sulis Setyowati', 'image' => 'images/Dwilestari.png', 'role' => 'Marketing & Community Manager'],
                    ['name' => 'Dede', 'image' => 'images/dady.png', 'role' => 'Content Creator'],
                ];
            @endphp

            @foreach ($teamMembers as $member)
            <div class="flex flex-col items-center">
                <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="w-32 h-32 rounded-full object-cover mb-4 shadow-lg">
                <h3 class="text-xl font-semibold">{{ $member['name'] }}</h3>
                <p style=" font-family: "Aldrich", sans-serif !important; " class="color-text-white font-medium text-sm w-3/5">{{ $member['role'] ?? '' }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>