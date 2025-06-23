<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // halaman home
    public function showHome()
    {
        return view('welcome');
    }
    
    // halaman virtual tours
    public function showVirtualTours()
    {
        $tours = $this->getToursData();
        return view('virtual-tours', ['tours' => $tours]);
    }

    // method untuk ambil data tours
    private function getToursData()
    {
        return [
            [
                'id' => 1,
                'slug' => 'mystery-panyenjon-temple',
                'title' => 'The Mystery of Panyenjon Temple',
                'description' => 'A sacred temple known for its unique architecture and mysterious legends.',
                'image' => 'images/patung-bayi.png',
                'category' => 'Gianyar',
                'long_description' => 'Nestled in the heart of Gianyar, the Panyenjon Temple stands as a testament to Bali\'s rich spiritual heritage. This ancient sanctuary, shrouded in mystery and legend, offers visitors a glimpse into the profound religious traditions that have shaped Balinese culture for centuries.',
                'location' => 'Gianyar Regency, Central Bali',
                'best_time' => 'Early morning (6-8 AM) or late afternoon (4-6 PM)',
                'duration' => '45-60 minutes',
                'highlights' => ['Unique stone carvings', 'Ancient architecture', 'Sacred meditation spots', 'Historical significance']
            ],
            [
                'id' => 2,
                'slug' => 'goa-gajah-elephant-cave',
                'title' => 'Goa Gajah',
                'description' => 'An archaeological site of significant historical value, also known as Elephant Cave.',
                'image' => 'images/goa-gajah.png', 
                'category' => 'Gianyar',
                'long_description' => 'Goa Gajah, or Elephant Cave, is one of Bali\'s most significant archaeological sites. Dating back to the 9th century, this temple complex features intricate stone carvings, ancient bathing pools, and a mysterious cave entrance that embodies the spiritual essence of ancient Bali.',
                'location' => 'Bedulu Village, Gianyar Regency',
                'best_time' => 'Morning (8-10 AM) to avoid crowds',
                'duration' => '60-90 minutes',
                'highlights' => ['Ancient cave entrance', 'Holy spring pools', '9th-century stone carvings', 'Archaeological significance']
            ],
            [
                'id' => 3,
                'slug' => 'batuan-temple',
                'title' => 'Batuan Temple',
                'description' => 'A local Balinese Hindu temple looked after by the residents of Batuan countryside.',
                'image' => 'images/tugu-batu.png', 
                'category' => 'Gianyar',
                'long_description' => 'Pura Batuan is a beautiful example of traditional Balinese temple architecture, maintained by the local community of Batuan village. Known for its intricate stone work and peaceful atmosphere, this temple offers an authentic glimpse into daily spiritual life in Bali.',
                'location' => 'Batuan Village, Gianyar Regency',
                'best_time' => 'Any time during daylight hours',
                'duration' => '30-45 minutes',
                'highlights' => ['Traditional architecture', 'Community temple', 'Stone sculptures', 'Local cultural significance']
            ],
            [
                'id' => 4,
                'slug' => 'tanah-lot-temple',
                'title' => 'Tanah Lot Temple',
                'description' => 'A rock formation off the Indonesian island of Bali, home to the ancient Hindu pilgrimage temple.',
                'image' => 'images/goa-gajah.png', 
                'category' => 'Gianyar',
                'long_description' => 'Perched on a dramatic rock formation surrounded by crashing waves, Tanah Lot is one of Bali\'s most iconic temples. This ancient sea temple offers breathtaking sunset views and represents the perfect harmony between spiritual devotion and natural beauty.',
                'location' => 'Gianyar Regency, Central Bali',
                'best_time' => 'Sunset (5:30-6:30 PM) for best views',
                'duration' => '90-120 minutes',
                'highlights' => ['Dramatic rock formation', 'Sunset views', 'Sea temple', 'Cultural significance']
            ],
        ];
    }

    // halaman nft
    public function showNftPage()
    {
        $nfts = $this->getNftsData();
        $categories = collect($nfts)->pluck('category')->unique()->values()->all();

        return view('nfts', [
            'nfts' => $nfts,
            'categories' => $categories
        ]);
    }

    // method untuk ambil data NFTs
    private function getNftsData()
    {
        return [
            [
                'id' => 1, 
                'slug' => 'goa-gajah-elephant-cave-nft',
                'title' => 'Goa Gajah NFT\'s', 
                'image' => 'images/goa-gajah.png', 
                'category' => 'Gianyar',
                'price' => '0.30 ETH',
                'description' => 'Digital collectible of the ancient Goa Gajah temple, capturing 9th-century Balinese spiritual architecture.',
                'artist' => 'Bali Virtually Team',
                'created_date' => '2024-01-20',
                'rarity' => 'Epic',
                'total_supply' => 75,
                'collection_description' => 'This collection is a tribute to those who seek meaning who believe that ancestral heritage can be revived through digital media and still touch the soul.',
                'sub_nfts' => [
                    [
                        'name' => 'The Inner Ascent',
                        'description' => 'A digital masterpiece capturing the essence of an inner journey toward enlightenment. The Inner Ascent is a 14-second cinematic video featuring a 3D model of Goa Gajah from its mysterious cave entrance to the sacred meditation chamber within, where the statue of Ganesha sits in silent reverence. This artwork represents a transformation from the noisy outer world into the quiet corridor of the self, into a sacred space where we confront deeper meanings of life.',
                        'edition' => 'NFT 1/1 Premium Collector Edition',
                        'benefits' => [
                            'Exclusive cinematic 3D video',
                            'Historical eBook about Goa Gajah',
                            '20% contribution for real impact to the local community'
                        ]
                    ],
                    [
                        'name' => 'Hariti',
                        'description' => 'A digital masterpiece capturing the essence of an inner journey toward enlightenment. The Inner Ascent is a 10-second cinematic video featuring a 3D model of Goa Gajah from its mysterious cave entrance to the sacred meditation chamber within, where the statue of Ganesha sits in silent reverence. This artwork represents a transformation from the noisy outer world into the quiet corridor of the self, into a sacred space where we confront deeper meanings of life.',
                        'edition' => 'NFT 1/10 Premium Collector Edition',
                        'benefits' => [
                            'Exclusive cinematic 3D video',
                            'Story eBook about Hariti',
                            '20% contribution for real impact to the local community'
                        ]
                    ]
                ]
            ],
            [
                'id' => 2, 
                'slug' => 'batuan-temple-nft',
                'title' => 'Batuan Temple NFT\'s', 
                'image' => 'images/tugu-batu.png', 
                'category' => 'Gianyar',
                'price' => '0.20 ETH',
                'description' => 'Community-preserved temple NFT showcasing traditional Balinese Hindu architecture and local craftsmanship.',
                'artist' => 'Bali Virtually Team',
                'created_date' => '2024-01-25',
                'rarity' => 'Common',
                'total_supply' => 150,
                'collection_description' => 'Sacred temple collection featuring the architectural beauty and spiritual essence of Batuan Temple through digital artistry.',
                'sub_nfts' => [
                    [
                        'name' => 'Temple Guardian',
                        'description' => 'Digital representation of the sacred guardians that protect Batuan Temple, featuring intricate stone carvings and ancient architectural details.',
                        'edition' => 'NFT 1/5 Premium Collector Edition',
                        'benefits' => [
                            'Exclusive 3D temple walkthrough',
                            'Temple history documentation',
                            '25% contribution for temple maintenance'
                        ]
                    ],
                    [
                        'name' => 'Sacred Stones',
                        'description' => 'A collection capturing the mystical essence of Batuan Temple\'s ancient stone sculptures and their spiritual significance.',
                        'edition' => 'NFT 1/15 Premium Collector Edition',
                        'benefits' => [
                            'High-resolution stone sculpture gallery',
                            'Cultural significance guide',
                            '25% contribution for local artisan support'
                        ]
                    ]
                ]
            ],
            [
                'id' => 3, 
                'slug' => 'patung-bayi-sakah-nft',
                'title' => 'Patung Bayi Sakah NFT\'s', 
                'image' => 'images/patung-bayi.png', 
                'category' => 'Gianyar',
                'price' => '0.25 ETH',
                'description' => 'A unique NFT collection featuring the sacred Patung Bayi Sakah statue, preserving cultural heritage in digital form.',
                'artist' => 'Bali Virtually Team',
                'created_date' => '2024-01-15',
                'rarity' => 'Rare',
                'total_supply' => 100,
                'collection_description' => 'Mystical collection honoring the sacred statue of Patung Bayi Sakah and its deep spiritual connection to Balinese heritage.',
                'sub_nfts' => [
                    [
                        'name' => 'Sacred Child',
                        'description' => 'A reverent digital interpretation of the sacred child statue, capturing its spiritual essence and cultural importance.',
                        'edition' => 'NFT 1/3 Premium Collector Edition',
                        'benefits' => [
                            'Sacred statue 3D model',
                            'Spiritual significance documentary',
                            '30% contribution for statue preservation'
                        ]
                    ],
                    [
                        'name' => 'Divine Protection',
                        'description' => 'Embodying the protective power and divine blessing associated with the sacred Patung Bayi Sakah.',
                        'edition' => 'NFT 1/8 Premium Collector Edition',
                        'benefits' => [
                            'Blessing ceremony video',
                            'Cultural protection stories',
                            '30% contribution for community welfare'
                        ]
                    ]
                ]
            ],
            [
                'id' => 4, 
                'slug' => 'tanah-lot-sunset-nft',
                'title' => 'Tanah Lot NFT\'s', 
                'image' => 'images/nft.png', 
                'category' => 'Tabanan',
                'price' => '0.40 ETH',
                'description' => 'Iconic sea temple NFT featuring dramatic sunset views and spiritual rock formation architecture.',
                'artist' => 'Bali Virtually Team',
                'created_date' => '2024-02-01',
                'rarity' => 'Legendary',
                'total_supply' => 50,
                'collection_description' => 'Spectacular collection capturing the majesty and spiritual power of Tanah Lot temple against the endless ocean.',
                'sub_nfts' => [
                    [
                        'name' => 'Ocean\'s Edge',
                        'description' => 'A breathtaking capture of Tanah Lot temple perched on its dramatic rock formation, surrounded by the eternal dance of ocean waves.',
                        'edition' => 'NFT 1/2 Premium Collector Edition',
                        'benefits' => [
                            'Sunset time-lapse video',
                            'Ocean temple mythology guide',
                            '35% contribution for coastal conservation'
                        ]
                    ],
                    [
                        'name' => 'Sunset Prayers',
                        'description' => 'The golden hour at Tanah Lot, where prayers meet the setting sun in a divine symphony of light and devotion.',
                        'edition' => 'NFT 1/5 Premium Collector Edition',
                        'benefits' => [
                            'Golden hour photography collection',
                            'Prayer ritual documentation',
                            '35% contribution for temple maintenance'
                        ]
                    ]
                ]
            ],
            [
                'id' => 5, 
                'slug' => 'denpasar-cultural-nft',
                'title' => 'Denpasar Cultural NFT\'s', 
                'image' => 'images/nft.png', 
                'category' => 'Denpasar',
                'price' => '0.18 ETH',
                'description' => 'Urban cultural heritage NFT representing the modern capital while preserving traditional Balinese values.',
                'artist' => 'Bali Virtually Team',
                'created_date' => '2024-02-05',
                'rarity' => 'Common',
                'total_supply' => 200,
                'collection_description' => 'Contemporary collection showcasing how traditional Balinese culture thrives in the modern capital city.',
                'sub_nfts' => [
                    [
                        'name' => 'Urban Temple',
                        'description' => 'The harmonious blend of modern city life and ancient temple traditions in the heart of Denpasar.',
                        'edition' => 'NFT 1/20 Premium Collector Edition',
                        'benefits' => [
                            'Urban culture video tour',
                            'Modern Bali lifestyle guide',
                            '20% contribution for urban heritage preservation'
                        ]
                    ]
                ]
            ],
            [
                'id' => 6, 
                'slug' => 'badung-heritage-nft',
                'title' => 'Badung Heritage NFT\'s', 
                'image' => 'images/nft.png', 
                'category' => 'Badung',
                'price' => '0.22 ETH',
                'description' => 'Southern Bali heritage NFT showcasing the blend of traditional temples and coastal beauty.',
                'artist' => 'Bali Virtually Team',
                'created_date' => '2024-02-10',
                'rarity' => 'Rare',
                'total_supply' => 120,
                'collection_description' => 'Coastal heritage collection celebrating the unique blend of temple spirituality and ocean majesty in southern Bali.',
                'sub_nfts' => [
                    [
                        'name' => 'Coastal Sanctuary',
                        'description' => 'Where ancient temples meet pristine beaches, creating a sacred landscape of divine beauty and natural wonder.',
                        'edition' => 'NFT 1/12 Premium Collector Edition',
                        'benefits' => [
                            'Coastal temple aerial footage',
                            'Beach temple history guide',
                            '25% contribution for coastal preservation'
                        ]
                    ]
                ]
            ],
        ];
    }

    // halaman impact & giving
    public function showImpactGiving()
    {
        $projects = $this->getProjectsData();
        return view('impact-giving', ['projects' => $projects]);
    }

    // halaman roadmap
    public function showRoadmap()
    {
        return view('roadmap');
    }

    // halaman funded project goa gajah
    public function showFundedProjectGoaGajah()
    {
        return view('funded-project-goa-gajah');
    }



    // halaman detail NFT
    public function showNftDetail($slug)
    {
        $nfts = $this->getNftsData();
        $nft = collect($nfts)->firstWhere('slug', $slug);
        
        if (!$nft) {
            abort(404, 'NFT not found');
        }
        
        return view('nft-detail', ['nft' => $nft]);
    }

    // halaman detail project (dynamic projects) - DISABLED
    // public function showProjectDetail($slug)
    // {
    //     $projects = $this->getProjectsData();
    //     $project = collect($projects)->firstWhere('slug', $slug);
        
    //     if (!$project) {
    //         abort(404, 'Project not found');
    //     }
        
    //     return view('project-detail', ['project' => $project]);
    // }

    // Helper method untuk calculate progress percentage
    public static function calculateProgress($raised, $target)
    {
        if ($target <= 0) return 0;
        return round(($raised / $target) * 100);
    }

    // Helper method untuk format currency
    public static function formatCurrency($amount)
    {
        return number_format($amount);
    }

    // Helper method untuk get project by slug
    public function getProjectBySlug($slug)
    {
        $projects = $this->getProjectsData();
        return collect($projects)->firstWhere('slug', $slug);
    }

    // method untuk ambil data projects
    public function getProjectsData()
    {
        return [
            [
                'id' => 1,
                'slug' => 'goa-gajah-preservation',
                'title' => 'Preserve Goa Gajah Through Collective Growth',
                'short_title' => 'Goa Gajah',
                'description' => 'Preserving the ancient Goa Gajah temple for future generations through community empowerment.',
                'image' => 'images/goa-gajah.png',
                'category' => 'Cultural Preservation',
                'coordinator' => 'Agus Sri Seri',
                'location' => 'Bedulu Village, Gianyar',
                'target_amount' => 2000,
                'raised_amount' => 23000,
                'supporters' => 47,
                'end_date' => '2024-12-31',
                'long_description' => 'We create real impact for the community around Goa Gajah through three main pillars: education, MSME empowerment, and cultural preservation. With your support, we can nurture local knowledge, boost the community\'s economy through Micro, Small, and Medium Enterprises (MSMEs), and safeguard traditional wisdom and cultural heritage so they continue to thrive and inspire future generations.',
                'programs' => [
                    'Education Programs',
                    'MSME Empowerment',
                    'Cultural Preservation',
                    'Community Development'
                ],
                'gallery' => [
                    'images/goa-gajah.png',
                    'images/goa-gajah.png',
                    'images/goa-gajah.png',
                    'images/goa-gajah.png',
                ]
            ],
            [
                'id' => 2,
                'slug' => 'patung-bayi-sakah-preservation',
                'title' => 'Preserve Patung Bayi Sakah Through Collective Growth',
                'short_title' => 'Patung Bayi Sakah',
                'description' => 'Protecting and maintaining the sacred Patung Bayi Sakah statue through community initiatives.',
                'image' => 'images/patung-bayi.png',
                'category' => 'Cultural Heritage',
                'coordinator' => 'I Made Sukarta',
                'location' => 'Gianyar Regency',
                'target_amount' => 1500,
                'raised_amount' => 450,
                'supporters' => 32,
                'end_date' => '2024-11-30',
                'long_description' => 'The Patung Bayi Sakah preservation project focuses on maintaining this sacred cultural artifact while empowering the local community through education and sustainable tourism practices.',
                'programs' => [
                    'Statue Conservation',
                    'Local Guide Training',
                    'Heritage Education',
                    'Sustainable Tourism'
                ],
                'gallery' => [
                    'images/patung-bayi-1.jpg',
                    'images/patung-bayi-2.jpg',
                    'images/patung-bayi-3.jpg',
                    'images/patung-bayi-4.jpg',
                ]
            ],
            [
                'id' => 3,
                'slug' => 'batuan-temple-restoration',
                'title' => 'Preserve Batuan Temple Through Collective Growth',
                'short_title' => 'Batuan Temple',
                'description' => 'Supporting the restoration and maintenance of Batuan Temple through community collaboration.',
                'image' => 'images/tugu-batu.png',
                'category' => 'Temple Restoration',
                'coordinator' => 'I Ketut Suweca',
                'location' => 'Batuan Village, Gianyar',
                'target_amount' => 1800,
                'raised_amount' => 720,
                'supporters' => 56,
                'end_date' => '2025-01-31',
                'long_description' => 'Batuan Temple, a cornerstone of local spiritual life, requires ongoing maintenance and restoration. This project ensures the temple\'s preservation while strengthening community bonds and cultural traditions.',
                'programs' => [
                    'Temple Restoration',
                    'Cultural Workshops',
                    'Community Events',
                    'Youth Engagement'
                ],
                'gallery' => [
                    'images/batuan-1.jpg',
                    'images/batuan-2.jpg',
                    'images/batuan-3.jpg',
                    'images/batuan-4.jpg',
                ]
            ],
        ];
    }
}
