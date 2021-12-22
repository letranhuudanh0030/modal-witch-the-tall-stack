<x-modal name="join-modal">
    <x-slot name='title'>
        <h1>Join</h1>
    </x-slot>
    <x-slot name='body'>
        <p>Here are some details about our plan.</p>
    </x-slot>
    <x-slot name='footer'>
        <x-button class="bg-blue-500 hover:bg-blue-600" @click="show = false">
            Close
        </x-button>
    </x-slot>
</x-modal>