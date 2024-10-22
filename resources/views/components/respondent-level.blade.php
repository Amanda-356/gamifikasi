{{-- Modal Level --}}

@props(['infoLevel'])

<div x-data="{isModalOpen: false}">
    <div class="bg-gray-100 border-2 border-gray-400 p-4 rounded-md text-white w-full">
        <div class="flex justify-between items-center text-gray-900" @click="isModalOpen = !isModalOpen" @click.outside="isModalOpen = false">
            <span class="text-lg font-semibold">Level {{ $infoLevel }}</span>
            <x-icon icon="iconDropdownExpand"></x-icon>
        </div>
        <div class="bg-gray-800 flex flex-col border-2 border-gray-400 mt-4 px-4 py-2 rounded-md" x-show="isModalOpen" x-transition @click.stop>
            <div class="grid lg:grid-cols-1 gap-2 divide-y-2 divide-gray-700">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>