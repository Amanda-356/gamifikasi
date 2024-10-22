@props(['active'])

@php
    $defaultClasses = 'flex flex-col border-2 border-gray-100 p-4 rounded-md cursor-pointer';
    $activeClasses = 'bg-gray-800 text-white';
    $hoverClasses = 'hover:bg-gray-800 hover:text-white focus:bg-gray-800';
@endphp

<div x-data="{ isOpen: false }" class="col-span-2">
    <div {{ $attributes->merge(['class' => $defaultClasses]) }}
        :class="{ '{{ $activeClasses }}': isOpen, '{{ $hoverClasses }}': !isOpen }" 
        @click="isOpen = !isOpen" 
        @click.outside="isOpen = false">
        <span class="text-md font-medium">
            {{ $slot }}
        </span>

        <!-- Detail Kelompok -->
        <div class="grid items-center gap-2 mt-2" 
            x-show="isOpen" x-transition @click.stop>
            <div class="flex gap-4 items-center">
                <div class="flex items-center border-2 border-gray-400 p-4 rounded-md text-white w-full">                
                    <span>Soal 1</span>
                </div>
                <a href="#" @click.stop class="col-end-auto">
                    <x-icon icon="iconDelete"></x-icon>
                </a>
            </div>
            <div class="flex gap-4 items-center">
                <div class="flex items-center border-2 border-gray-400 p-4 rounded-md text-white w-full">                
                    <span>Soal 2</span>
                </div>
                <a href="#" @click.stop class="">
                    <x-icon icon="iconDelete"></x-icon>
                </a>
            </div>
        </div>
    </div>
</div>

