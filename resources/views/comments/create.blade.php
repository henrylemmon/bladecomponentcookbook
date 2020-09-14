<x-layout>
    <x-section>
        <x-form
            method="POST"
            action="/comments"
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
                ></textarea>

                @error('body')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                >
                    Create
                </button>
            </div>
        </x-form>

        <a href="/comments">All Comments &gt;</a>

        <a href="/" class="text-blue-400 rounded hover:text-blue-500 mr-4">
            Main Menu &gt;
        </a>

    </x-section>
</x-layout>
