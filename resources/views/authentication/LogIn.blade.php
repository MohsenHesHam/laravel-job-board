<x-authlayout title="Sign In">
    <div class="flex min-h-[calc(100vh-160px)] items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8 rounded-2xl border border-white/10 bg-gray-800/60 p-8 shadow-2xl backdrop-blur-md">
            
            <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white">Welcome back</h2>
                <p class="mt-2 text-sm text-gray-400">
                    Don't have an account?
                    <a href="/signin" class="font-medium text-indigo-400 hover:text-indigo-300 transition">Sign up</a>
                </p>
            </div>

            <form action="/login" method="POST" class="mt-8 space-y-6">
                @csrf

                <div class="space-y-4">
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-200">Email address</label>
                        <input 
                            id="email" 
                            name="email" 
                            type="email" 
                            autocomplete="email" 
                            required 
                            value="{{ old('email') }}"
                            placeholder="you@example.com"
                            class="mt-1 block w-full rounded-lg border border-white/10 bg-gray-900/80 px-4 py-2.5 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition"
                        >
                        @error('email')
                            <span class="mt-1 block text-xs text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-200">Password</label>
                        <input 
                            id="password" 
                            name="password" 
                            type="password" 
                            autocomplete="current-password" 
                            required 
                            placeholder="••••••••"
                            class="mt-1 block w-full rounded-lg border border-white/10 bg-gray-900/80 px-4 py-2.5 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition"
                        >
                        @error('password')
                            <span class="mt-1 block text-xs text-red-400">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input 
                            type="checkbox" 
                            name="remember" 
                            class="size-4 rounded border-gray-700 bg-gray-900 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-gray-800"
                        >
                        <span class="text-sm text-gray-300">Remember me</span>
                    </label>

                    <a href="/forgot-password" class="text-sm font-medium text-indigo-400 hover:text-indigo-300 transition">
                        Forgot password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="flex w-full justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition cursor-pointer"
                >
                    Sign in
                </button>
            </form>
        </div>
    </div>
</x-authlayout>