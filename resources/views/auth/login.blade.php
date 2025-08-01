<x-layout.layout-auth title="Login | Tasty Food">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h2 class="text-2xl font-bold text-yellow-400 mb-2 text-center">Selamat Datang</h2>
        <p class="text-slate-600 mb-6 text-sm text-center">Masukkan email dan password untuk masuk</p>

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold text-slate-700">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}"
                   class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-yellow-400"
                   placeholder="Email" required autofocus>
            @error('email')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label for="password" class="block text-sm font-semibold text-slate-700">Password</label>
            <input type="password" name="password" id="password"
                   class="w-full mt-1 px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-yellow-400"
                   placeholder="Password" required>
            @error('password')
                <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center mb-4">
        <input 
        type="checkbox" 
        name="remember" 
        id="remember" 
        class="mr-2 accent-yellow-300 checked:text-black checked:bg-yellow-300 checked:border-yellow-300"
        >
        <label for="remember" class="mb-[3px] text-sm text-slate-700">Ingat saya</label>
        </div>

        @if (session('error'))
            <p class="text-sm text-red-600 mt-1">{{ session('error') }}</p>
        @endif

        <button type="submit"
                class="w-full mt-2 bg-yellow-300 hover:bg-yellow-400 text-black font-bold py-2 px-4 rounded">
            MASUK
        </button>

        <p class="mt-4 text-sm text-slate-600 text-center">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-yellow-400 font-semibold">Daftar</a>
        </p>
    </form>
</x-layout.layout-auth>
