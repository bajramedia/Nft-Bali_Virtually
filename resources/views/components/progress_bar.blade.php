{{-- resources/views/components/progress_bar.blade.php --}}
{{-- Component Progress Bar yang bisa dipakai di mana aja --}}

@php
    // Calculate progress percentage dengan aman
    $percentage = $target > 0 ? round(($raised / $target) * 100) : 0;
    
    // Setup default values
    $barHeight = $height ?? 'h-2.5';
    $showLabels = $showLabels ?? true;
    $showAmount = $showAmount ?? true;
    $barColor = $color ?? 'bg-teal-400';
    $bgColor = $backgroundColor ?? 'bg-[#353535]';
    $barWidth = $width ?? 'w-4/5';
@endphp

<div class="progress-bar-container {{ $containerClass ?? '' }}">
    @if($showLabels && $showAmount)
        {{-- Amount Display --}}
        <div class="mb-2 flex justify-center">
            <span class="text-xs color-text-white tracking-wide">
                USD ${{ number_format($raised) }} / USD ${{ number_format($target) }}
            </span>
        </div>
    @endif
    
    {{-- Progress Bar --}}
    <div class="w-full flex flex-col items-center mb-2">
        <div class="{{ $barWidth }} color-text-white rounded-full {{ $barHeight }} {{ $bgColor }} relative">
            <div class="{{ $barColor }} {{ $barHeight }} rounded-full absolute top-0 left-0 transition-all duration-500" 
                 style="width: {{ $percentage }}%">
            </div>
        </div>
    </div>
    
    @if($showLabels)
        {{-- Percentage Display --}}
        <div class="flex justify-start {{ $barWidth }} mx-auto">
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