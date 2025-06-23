@extends('layouts.app')

@section('content')
<section class="relative min-h-screen flex items-center justify-center overflow-hidden" 
         style="background: linear-gradient(135deg, #121212 0%, #1a1a1a 50%, #121212 100%);">
    
    <div class="text-center px-6 py-12 max-w-4xl mx-auto">
        {{-- Error Message --}}
        <div class="mb-8 space-y-4">
            <h2 class="text-3xl md:text-4xl font-semibold color-text-white mb-4" style="font-family: 'Aldrich', sans-serif;">
                Oops! Halaman Tidak Ditemukan
            </h2>
            <p class="text-lg color-text-white opacity-80 leading-relaxed max-w-2xl mx-auto">
                Sepertinya kamu tersesat di pulau digital kami! 🏝️<br>
                Halaman yang kamu cari mungkin sudah pindah ke dimensi lain atau sedang berlibur di pantai Bali.
            </p>
        </div>

        {{-- Suggestions dengan Hover Animation yang Lebih Keren --}}
        <div class="mb-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                <div class="suggestion-card bg-gray-800 bg-opacity-50 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:border-[#80ECB6] transition-all duration-300 hover:shadow-lg hover:shadow-[#80ECB6]/20 hover:scale-105">
                    <div class="w-12 h-12 mx-auto mb-4 rounded-full bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] flex items-center justify-center">
                        <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Kembali ke Beranda</h3>
                    <p class="text-gray-400 text-sm">Mulai petualangan virtual dari awal</p>
                </div>

                <div class="suggestion-card bg-gray-800 bg-opacity-50 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:border-[#79ADEE] transition-all duration-300 hover:shadow-lg hover:shadow-[#79ADEE]/20 hover:scale-105">
                    <div class="w-12 h-12 mx-auto mb-4 rounded-full bg-gradient-to-r from-[#79ADEE] to-[#80ECB6] flex items-center justify-center">
                        <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                            <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Jelajahi Virtual Tours</h3>
                    <p class="text-gray-400 text-sm">Temukan destinasi Bali yang menakjubkan</p>
                </div>

                <div class="suggestion-card bg-gray-800 bg-opacity-50 backdrop-blur-sm border border-gray-700 rounded-xl p-6 hover:border-[#80ECB6] transition-all duration-300 hover:shadow-lg hover:shadow-[#80ECB6]/20 hover:scale-105">
                    <div class="w-12 h-12 mx-auto mb-4 rounded-full bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] flex items-center justify-center">
                        <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <h3 class="text-white font-semibold mb-2">Hubungi Kami</h3>
                    <p class="text-gray-400 text-sm">Butuh bantuan? Tim kami siap membantu</p>
                </div>
            </div>
        </div>

        {{-- Action Buttons --}}
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('home') }}" 
               class="btn-glow bg-gradient-to-r from-[#80ECB6] to-[#79ADEE] hover:from-[#79ADEE] hover:to-[#80ECB6] text-black font-semibold py-4 px-8 rounded-lg text-lg transition duration-300 shadow-md hover:shadow-lg transform hover:scale-105 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                </svg>
                Kembali ke Beranda
            </a>
            
            <a href="{{ route('VirtualTours') }}" 
               class="border-2 border-[#80ECB6] text-[#80ECB6] hover:bg-[#80ECB6] hover:text-black font-semibold py-4 px-8 rounded-lg text-lg transition duration-300 transform hover:scale-105 flex items-center justify-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                </svg>
                Explore Virtual Tours
            </a>
        </div>

        {{-- Fun Message dengan Interactive Element --}}
        <div class="mt-12 opacity-70">
            <p class="text-sm color-text-white mb-4">
                "Tidak semua yang hilang itu benar-benar hilang. Kadang hanya sedang mencari jalan pulang." 🌺
            </p>
            <div class="flex justify-center items-center gap-2 text-xs color-text-white opacity-50">
                <span>Mencari halaman</span>
                <div class="flex gap-1">
                    <div class="w-1 h-1 bg-[#80ECB6] rounded-full animate-ping"></div>
                    <div class="w-1 h-1 bg-[#79ADEE] rounded-full animate-ping" style="animation-delay: 0.2s;"></div>
                    <div class="w-1 h-1 bg-[#80ECB6] rounded-full animate-ping" style="animation-delay: 0.4s;"></div>
                </div>
                <span>tidak ditemukan</span>
            </div>
        </div>
    </div>
</section>

{{-- Enhanced Custom Animations --}}
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        25% { transform: translateY(-5px) rotate(1deg); }
        50% { transform: translateY(-10px) rotate(0deg); }
        75% { transform: translateY(-5px) rotate(-1deg); }
    }
    
    .animate-float {
        animation: float 4s ease-in-out infinite;
    }
    
    @keyframes glow-pulse {
        0%, 100% { 
            box-shadow: 0 0 20px rgba(128, 236, 182, 0.3);
        }
        50% { 
            box-shadow: 0 0 40px rgba(128, 236, 182, 0.6), 0 0 60px rgba(121, 173, 238, 0.4);
        }
    }
    
    .animate-glow-pulse {
        animation: glow-pulse 2s ease-in-out infinite;
    }
    
    /* Custom bounce dengan efek yang lebih smooth */
    @keyframes bounce-delayed {
        0%, 20%, 53%, 80%, 100% {
            animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000);
            transform: translate3d(0,0,0) scale(1);
        }
        40%, 43% {
            animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transform: translate3d(0, -15px, 0) scale(1.05);
        }
        70% {
            animation-timing-function: cubic-bezier(0.755, 0.050, 0.855, 0.060);
            transform: translate3d(0, -7px, 0) scale(1.02);
        }
        90% {
            transform: translate3d(0, -2px, 0) scale(1.01);
        }
    }
    
    .animate-bounce-delayed {
        animation: bounce-delayed 3s infinite;
    }
    
    /* Suggestion card hover effect */
    .suggestion-card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        position: relative;
    }
    
    .suggestion-card:hover {
        transform: translateY(-5px) scale(1.02);
    }
    
    /* Enhanced border gradient effect */
    .suggestion-card:hover::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 12px;
        padding: 2px;
        background: linear-gradient(45deg, #80ECB6, #79ADEE);
        mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        mask-composite: exclude;
        -webkit-mask-composite: xor;
    }
</style>
@endsection