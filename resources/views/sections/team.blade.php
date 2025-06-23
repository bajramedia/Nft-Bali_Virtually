<section class="py-16 md:py-24 mt-8">
    <div class="w-[84%] mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-16 color-text-white font-aldrich">Meet The Team</h2>
        <div class="grid grid-cols-1 mt-12 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-none justify-items-center">
            @php
                // Data dummy team members - nanti bisa diganti dari database
                $teamMembers = [
                    [
                        'id' => 1,
                        'name' => 'Gusde', 
                        'image' => 'images/gusdeWirya.png', 
                        'role' => 'Founder & CEO',
                        'description' => 'Seorang visioner yang berdedikasi untuk menghadirkan pengalaman virtual yang tak terlupakan dari Bali.',
                        'full_bio' => 'Gusde adalah seorang entrepreneur berpengalaman dengan passion mendalam terhadap teknologi dan budaya Bali. Dengan latar belakang di bidang teknologi dan pariwisata, ia memimpin visi untuk menghadirkan Bali ke dunia digital melalui pengalaman virtual yang autentik dan immersive.'
                    ],
                    [
                        'id' => 2,
                        'name' => 'Vivaldi', 
                        'image' => 'images/Vivaldi.png', 
                        'role' => 'Co-Founder & CCO',
                        'description' => 'Kreatif strategis yang memimpin visi konten dan memastikan setiap pengalaman virtual mencerminkan keindahan autentik Bali.',
                        'full_bio' => 'Vivaldi adalah creative strategist dengan pengalaman lebih dari 10 tahun di industri kreatif. Ia bertanggung jawab memastikan setiap konten yang diproduksi tidak hanya visual yang menakjubkan, tetapi juga menceritakan kisah autentik Bali dengan cara yang menginspirasi.'
                    ],
                    [
                        'id' => 3,
                        'name' => 'Lestari', 
                        'image' => 'images/Dwilestari.png', 
                        'role' => 'Marketing & Community Manager',
                        'description' => 'Penghubung antara komunitas dan brand, memastikan setiap interaksi menciptakan koneksi yang bermakna.',
                        'full_bio' => 'Lestari adalah communication expert yang memiliki kemampuan luar biasa dalam membangun dan memelihara hubungan dengan komunitas. Dengan background di digital marketing dan community management, ia memastikan brand Bali Virtually terhubung dengan audiens secara autentik.'
                    ],
                    [
                        'id' => 4,
                        'name' => 'Dady', 
                        'image' => 'images/dady.png', 
                        'role' => 'Content Creator',
                        'description' => 'Storyteller yang mengubah momen-momen indah Bali menjadi narasi visual yang menginspirasi.',
                        'full_bio' => 'Dady adalah content creator dan visual storyteller yang memiliki mata artistik untuk menangkap keindahan Bali. Dengan keahlian di fotografi, videografi, dan digital art, ia menciptakan konten yang tidak hanya indah dipandang tetapi juga menyentuh hati.'
                    ],
                ];
            @endphp

            @foreach ($teamMembers as $member)
            <div class="group w-full max-w-[320px]">
                <div class="color-bg-gray rounded-2xl p-6 transition-all duration-300 hover:transform hover:scale-105 team-card min-h-96 w-full" data-member-id="{{ $member['id'] }}">
                    <!-- Foto Profile tanpa Border -->
                    <div class="relative mb-6">
                        <div class="w-32 h-32 mx-auto rounded-full">
                            <img src="{{ $member['image'] }}" alt="{{ $member['name'] }}" class="w-full h-full rounded-full object-cover">
                        </div>
                    </div>
                    
                    <!-- Nama -->
                    <h3 class="text-xl font-bold color-text-white mb-2 font-aldrich">{{ $member['name'] }}</h3>
                    
                    <!-- Role -->
                    <p class="color-text-white font-semibold text-sm mb-4 font-urbanist">{{ $member['role'] }}</p>
                    
                    <!-- Deskripsi -->
                    <p class="color-text-white text-xs leading-relaxed font-urbanist opacity-90 member-description">{{ $member['description'] }}</p>
                    
                    <!-- Bio lengkap (hidden by default) -->
                    <p class="color-text-white text-xs leading-relaxed font-urbanist opacity-90 member-full-bio hidden">{{ $member['full_bio'] }}</p>
                    
                    <!-- Read More Button -->
                    <button class="mt-4 text-xs color-text-green hover:text-mint transition-colors duration-300 font-medium font-urbanist read-more-btn" onclick="toggleMemberBio({{ $member['id'] }})">
                        Read More
                    </button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>