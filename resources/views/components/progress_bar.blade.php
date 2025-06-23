{{-- resources/views/components/progress_bar.blade.php --}}
{{-- Component Progress Bar yang bisa dipakai di mana aja --}}

@php
    // Calculate progress percentage asli (bisa unlimited)
    $percentage = $target > 0 ? round(($raised / $target) * 100) : 0;
    
    // Progress bar width dengan batas maksimal
    // Biar nggak terlalu liar sampai 1000%
    $maxProgressWidth = 100;
    $progressWidth = min($percentage, $maxProgressWidth);
    
    // Setup default values
    $barHeight = $height ?? 'h-2.5';
    $showLabels = $showLabels ?? true;
    $showAmount = $showAmount ?? true;
    $barColor = $color ?? 'bg-teal-400';
    $bgColor = $backgroundColor ?? 'bg-[#353535]';
    $barWidth = $width ?? 'w-4/5';
@endphp

<div class="progress-bar-container {{ $containerClass ?? '' }} w-full">
    @if($showLabels && $showAmount)
        {{-- Amount Display --}}
        <div class="mb-2 flex justify-center w-full">
            <span class="text-xs color-text-white tracking-wide text-center px-2">
                USD ${{ number_format($raised) }} / USD ${{ number_format($target) }}
            </span>
        </div>
    @endif
    
    {{-- Progress Bar dengan Background Terpisah --}}
    <div class="w-full flex flex-col items-center mb-2 px-4">
        {{-- Background Bar (Bagian Hitam) - Tetap, nggak berubah --}}
        <div class="progress-background {{ $barWidth }} {{ $barHeight }} {{ $bgColor }} rounded-full relative max-w-full">
            {{-- Wrapper untuk clip/potong kelebihan progress bar --}}
            <div class="progress-overflow-container absolute top-0 left-0 w-full h-full rounded-full overflow-hidden">
                {{-- Progress Bar Fill (Bagian Warna) - Bisa 300% tapi di-clip --}}
                <div class="progress-bar-fill {{ $barColor }} {{ $barHeight }} rounded-full transition-all duration-500" 
                     style="width: {{ $progressWidth }}%">
                </div>
            </div>
        </div>
    </div>
    
    @if($showLabels)
        {{-- Percentage Display - Tetap nampilin persentase asli dengan padding --}}
        <div class="flex justify-start {{ $barWidth }} mx-auto px-4">
            <span class="text-xs color-text-white mt-1">{{ $percentage }}%</span>
        </div>
    @endif
</div>

{{-- 
Usage Examples:

Basic usage:
@include('components.progress_bar', [
    'raised' => $project['raised_amount'], 
    'target' => $project['target_amount']
])

Custom styling:
@include('components.progress_bar', [
    'raised' => $project['raised_amount'], 
    'target' => $project['target_amount'],
    'height' => 'h-3',
    'color' => 'bg-gradient-to-r from-[#80ECB6] to-[#79ADEE]',
    'width' => 'w-full',
    'showAmount' => false
])
--}} 