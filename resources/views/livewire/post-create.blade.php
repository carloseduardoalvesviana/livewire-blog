<div>
    <div class="container mx-auto px-4">
        <h1
            class="mt-6 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
            Create Post</h1>
        <p class="mt-2 text-lg text-gray-600">Start crafting your new post below.</p>
        <div class="mt-10 w-1/2 space-y-8 divide-y divide-gray-200">

            @if ($saveSuccess)
                <div class="rounded-lg rounded-md bg-green-100 p-4">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-green-800">Successfully Saved Post</h3>
                            <div class="mt-2 text-sm text-green-700">
                                <p>Your new post has been saved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <form wire:submit="save">
                <div class="sm:col-span-6">
                    <label for="title" class="block text-sm font-medium text-gray-700">
                        Post Title
                    </label>
                    <div class="mt-1">
                        <input id="title" wire:model="title" name="title"
                            class="block w-full appearance-none rounded-md border border-gray-400 bg-white px-3 py-2 text-base leading-normal transition transition duration-150 duration-150 ease-in-out ease-in-out sm:text-sm sm:leading-5">
                        <div class="text-red-800">
                            @error('title')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="pt-5 sm:col-span-6">
                    <label for="body" class="block text-sm font-medium text-gray-700">Body</label>
                    <div class="mt-1">
                        <textarea id="body" rows="3" wire:model="body"
                            class="block w-full appearance-none rounded-md rounded-md border border-gray-300 border-gray-400 bg-white px-3 py-2 text-base leading-normal shadow-sm transition duration-150 ease-in-out focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                        <div class="text-red-800">
                            @error('body')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Add the body for your post.</p>
                </div>
                <button
                    class="focus:shadow-outline-indigo inline-flex cursor-pointer justify-center rounded-md border border-transparent bg-indigo-500 px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out hover:bg-indigo-600 focus:border-indigo-700 focus:outline-none active:bg-indigo-700"
                    type="submit">Save</button>
            </form>
        </div>
    </div>
</div>
