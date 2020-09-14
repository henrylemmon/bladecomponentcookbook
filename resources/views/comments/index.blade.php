<x-layout>
    <x-section>
        @forelse ($comments as $comment)
            <div class="p-2 mb-1"><a href="/comments/{{$comment->id }}/edit">{{ $comment->body }}</a></div>
        @empty
            <div class="p2 mb-1">No Comments Yet</div>
        @endforelse

            <div class="mt-5 mb-4">
                <a href="/comments/create" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4">
                    Create New Comment
                </a>

                <a href="/" class="text-blue-400 rounded hover:text-blue-500 mr-4">
                    Main Menu &gt;
                </a>
            </div>
    </x-section>
</x-layout>
