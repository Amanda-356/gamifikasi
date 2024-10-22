{{-- Pertanyaan dan jawaban --}}

@props(['infoSoal'])

<div class="pt-4 grid gap-4">
    <span class="flex text-lg font-bold">Soal {{ $infoSoal }}</span>
    <div class="grid grid-cols-1 gap-2">
        {{ $slot }}
    </div>
</div>
