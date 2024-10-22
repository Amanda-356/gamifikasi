<div class="flex flex-col items-center w-full lg:h-[300vh] min-h-screen overflow-hidden">
    <div class="flex items-center justify-between px-2 py-2 lg:px-6 w-full bg-no-repeat bg-cover bg-gradient-to-r from-slate-700 to-zinc-800 sticky top-0 z-10">
        <img src="{{ asset('img/logo.svg') }}" alt="logo" class="lg:max-w-20 max-w-12">
        <a class="font-bangers tracking-wider text-xl font-bold text-cyan-200">
            <span class="text-amber-600">Treasure</span>
            Hunt
        </a>
        <a class="text-sm font-medium text-red-500" href="{{ route('logout') }}">Logout</a>
    </div>
    <div class="relative bg-game-map bg-top bg-no-repeat bg-cover md:bg-cover lg:bg-cover w-screen h-[74vh] md:min-h-[150dvh] lg:min-h-[300dvh] lg:max-h-[300dvh]">
        <img src="{{ asset('img/currentlevel.svg') }}" alt="stone-level-1" class="absolute w-16 lg:w-44 top-[12%] right-[23%] md:top-[15%] md:right-[30%] lg:top-[300px] lg:right-[200px]">
    </div>
</div>
