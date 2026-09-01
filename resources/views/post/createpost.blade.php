<x-layout title="Create New Post">
    <div class="mx-auto max-w-xl py-6 px-4 sm:px-6">
        <div class="bg-gray-800/60 border border-white/10 backdrop-blur-md rounded-2xl p-6 sm:p-8 shadow-2xl">
            
            <div class="mb-6 text-center">
                <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Create New Post</h2>
                <p class="mt-2 text-sm text-gray-400">Fill in the details below to publish your post</p>
            </div>

            <form action="/post" method="POST" class="space-y-6">
                @csrf

                <!-- 1. Title Field -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-200">Post Title</label>
                    <input 
                        type="text" 
                        name="title" 
                        id="title" 
                        value="{{ old('title') }}" 
                        placeholder="Enter post title..." 
                        required
                        class="mt-2 block w-full rounded-lg bg-gray-900/80 border border-white/10 px-4 py-2.5 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition sm:text-sm"
                    >
                    @error('title')
                        <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- 2. Author Field (Text Input) -->
                <div>
                    <label for="auther" class="block text-sm font-medium text-gray-200">Author Name</label>
                    <input 
                        type="text" 
                        name="auther" 
                        id="auther" 
                        value="{{ old('auther') }}" 
                        placeholder="Enter author name..." 
                        required
                        class="mt-2 block w-full rounded-lg bg-gray-900/80 border border-white/10 px-4 py-2.5 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition sm:text-sm"
                    >
                    @error('auther')
                        <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- 3. Body Field -->
                <div>
                    <label for="body" class="block text-sm font-medium text-gray-200">Content</label>
                    <textarea 
                        name="body" 
                        id="body" 
                        rows="4" 
                        placeholder="Write your post content here..." 
                        required
                        class="mt-2 block w-full rounded-lg bg-gray-900/80 border border-white/10 px-4 py-2.5 text-white placeholder-gray-500 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/20 focus:outline-none transition sm:text-sm"
                    >{{ old('body') }}</textarea>
                    @error('body')
                        <span class="text-xs text-red-400 mt-1 block">{{ $message }}</span>
                    @enderror
                </div>

                <!-- 4. Published Toggle -->
                <div class="flex items-center justify-between rounded-lg bg-gray-900/50 border border-white/10 p-3.5">
                    <div class="flex flex-col">
                        <span class="text-sm font-medium text-gray-200">Publish Immediately</span>
                        <span class="text-xs text-gray-400">Make this post visible right away</span>
                    </div>
                    
                    <input type="hidden" name="published" value="0">
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input 
                            type="checkbox" 
                            name="published" 
                            value="1" 
                            class="sr-only peer"
                            {{ old('published', '1') == '1' ? 'checked' : '' }}
                        >
                        <div class="w-11 h-6 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600"></div>
                    </label>
                </div>

                <!-- Action Buttons -->
                <div class="pt-2 flex items-center justify-end gap-3">
                    <a href="/post" class="rounded-lg px-4 py-2.5 text-sm font-medium text-gray-300 hover:text-white hover:bg-white/5 transition">
                        Cancel
                    </a>
                    <button type="submit" class="rounded-lg bg-indigo-600 px-6 py-2.5 text-sm font-semibold text-white shadow-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-900 transition cursor-pointer">
                        Save Post
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-layout>