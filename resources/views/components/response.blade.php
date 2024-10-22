@props([
    'question' => 'Pertanyaan tidak tersedia',
    'answer' => 'Jawaban tidak tersedia',
    'responseType' => 'pilgan',
])

@if ($responseType === 'pilgan')
    <span class="text-sm text-amber-600">Pertanyaan =
        <span class="text-sm text-white">{{ $question }}</span>
    </span>
    <span class="text-sm text-amber-600">Jawaban =
        <span class="text-sm text-white">{{ $answer }}</span>
    </span>
@elseif ($responseType === 'pilgan-with-upload')
    <span class="text-sm text-amber-600">Pertanyaan =
        <span class="text-sm text-white">{{ $question }}</span>
    </span>
    <span class="text-sm text-amber-600">Jawaban =
        <span class="text-sm text-white">{{ $answer }}</span>
    </span>
    <div class="grid grid-cols-2 items-center">
        <span>Jawaban siswa : </span>
        <img src="{{ asset('img/dummyResponse.png') }}" alt="jawaban siswa" class="w-40">
    </div>
@elseif ($responseType === 'upload')
    <div class="grid grid-cols-2 items-center">
        <span>Jawaban siswa : </span>
        <img src="{{ asset('img/dummyResponse.png') }}" alt="jawaban siswa" class="w-40">
    </div>
@endif

{{-- 
    Level 1 : Pilihan ganda & Upload foto
    Level 2 : Pilihan ganda
    Level 3 : Upload foto
    Level 4 : Upload foto
    Level 5 : Pilihn ganda
--}}
