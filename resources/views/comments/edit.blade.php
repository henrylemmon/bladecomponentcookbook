<x-layout>
    <x-section>
        <x-form
            method="PATCH"
            action="/comments/{{ $comment->id }}"
        >
            <div class="mb-6">
                <label for="body" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                    Body
                </label>

                <textarea
                    name="body"
                    id="body"
                    required
                    class="border border-gray-400 p-2 w-full"
                >{{ $comment->body }}</textarea>

                @error('body')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Submit
                </button>
            </div>
        </x-form>

        <div class="flex items-center">
            <x-form-button
                method="DELETE"
                action="/comments/{{ $comment->id }}"
                class="bg-red-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4"
            >
                Delete
            </x-form-button>

            <a href="/comments" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                Cancel
            </a>

            <a href="/" class="text-blue-400 rounded hover:text-blue-500 mr-4">
                Main Menu &gt;
            </a>
        </div>
    </x-section>
</x-layout>
