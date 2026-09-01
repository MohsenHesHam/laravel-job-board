<x-authlayout title="Create an Account">
    <div class="flex min-h-[calc(100vh-160px)] items-center justify-center px-4 py-12 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8 rounded-2xl border border-white/10 bg-gray-800/60 p-8 shadow-2xl backdrop-blur-md">
            
            <div class="text-center">
                <h2 class="text-3xl font-bold tracking-tight text-white">Create an account</h2>
                <p class="mt-2 text-sm text-gray-400">
                    Already have an account?
                    <a href="/login" class="font-medium text-indigo-400 hover:text-indigo-300 transition">Sign in</a>
                </p>
            </div>

            <form action="/register" method="POST" class="mt-8 space-y-6">
                @csrf

                <div class="space-y-4">
                    <!-- Full Name -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-200">Full Name</label>
                        <input 
                            id="name" 
                            name="name" 
                            type="text" 
                            autocomplete="name" 
                            required 
                            value="{{ old('name') }}"
                            placeholder="John Doe"
                            class="mt-1 block w-full rounded-lg border border-white/10 bg-gray-900/80 px-4 py-2.5 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition"
                        >
                        @error('name')
                            <span class="mt-1 block text-xs text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

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
                            autocomplete="new-password" 
                            required 
                            placeholder="••••••••"
                            class="mt-1 block w-full rounded-lg border border-white/10 bg-gray-900/80 px-4 py-2.5 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition"
                        >
                        @error('password')
                            <span class="mt-1 block text-xs text-red-400">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password Confirmation -->
                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-200">Confirm Password</label>
                        <input 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            type="password" 
                            autocomplete="new-password" 
                            required 
                            placeholder="••••••••"
                            class="mt-1 block w-full rounded-lg border border-white/10 bg-gray-900/80 px-4 py-2.5 text-white placeholder-gray-500 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 sm:text-sm transition"
                        >
                    </div>
                </div>

                <!-- Terms and Conditions Checkbox -->
                <div class="flex items-center">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input 
                            type="checkbox" 
                            name="terms" 
                            required
                            class="size-4 rounded border-gray-700 bg-gray-900 text-indigo-600 focus:ring-indigo-500 focus:ring-offset-gray-800"
                        >
                        <span class="text-sm text-gray-300">
                            I agree to the <a href="#" class="text-indigo-400 hover:text-indigo-300">Terms</a> and <a href="#" class="text-indigo-400 hover:text-indigo-300">Privacy Policy</a>
                        </span>
                    </label>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="flex w-full justify-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition cursor-pointer"
                >
                    Create Account
                </button>
            </form>
        </div>
    </div>
</x-authlayout>