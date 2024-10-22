@section('title', 'Login')


<div class="min-h-screen flex items-center justify-center w-full h-full bg-no-repeat bg-cover bg-gradient-to-r from-slate-700 to-zinc-800">
    <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-8 min-w-96">
        <h1 class="text-2xl font-bold text-center mb-6 dark:text-gray-200">Login akun tim kamu !</h1>
        <form wire:submit.prevent="authenticate">
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Username</label>
                <input wire:model.lazy="username" type="text" id="username"
                    class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="masukan nama pekerjaan" >
                @error('username')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                </div>
            <div class="mb-6">
                <label for="password"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
                <input wire:model.lazy="password" type="password" id="password"
                    class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="Enter your password" >
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
                </div>

            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-500 hover:bg-orange-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500">
                Login
            </button>
        </form>
    </div>
</div>
