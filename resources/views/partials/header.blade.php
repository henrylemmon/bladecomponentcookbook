<header class="bg-gray-700 text-white px-6 py-4 flex justify-between items-center">
    <h1 class="font-bold tracking-widest uppercase">Laracasts</h1>

    <nav>
        <a
            class="px-6 hover:underline hover:text-blue-400"
            href="/"
        >
            Home
        </a>
        <a
            class="px-6 hover:underline hover:text-blue-400"
            href="/flash"
        >
            Flash Messages
        </a>
        <a
            class="px-6 hover:underline hover:text-blue-400"
            href="/comments"
        >
            View All Comments
        </a>
        <a
            class="px-6 hover:underline hover:text-blue-400"
            href="/modal"
        >
            Modal
        </a>
        <a
            class="px-6 hover:underline hover:text-blue-400"
            href="/dropdown"
        >
            Dropdown
        </a>
    </nav>

    <x-dropdown alignment="right" color="black">
        <x-slot name="trigger">
            <buttton class="focus:outline-none">
                <img src="https://www.placecage.com/30/30" class="rounded-full border border-white" alt="">
            </buttton>
        </x-slot>

        <x-dropdown-link href="#">Account</x-dropdown-link>
        <x-dropdown-link href="#">Support</x-dropdown-link>
    </x-dropdown>
</header>
