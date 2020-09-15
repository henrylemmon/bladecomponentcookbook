<x-layout>
    <x-modal
        title="Deactivate Account?"
        submit-label="Deactivate"
        cancel-label="Cancel"
    >
        <x-slot name="trigger">
            <x-section>
                <button @click="on = true">Show Modal</button>
            </x-section>
        </x-slot>

        Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.
    </x-modal>

    <x-section>
        <a href="/">Main Menu &gt;</a>
    </x-section>
</x-layout>
