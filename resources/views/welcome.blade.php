<x-layout>
    {{-- <livewire:manage-users> --}}
    <div class="shadow sm:rounded-md sm:overflow-hidden">
        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
            <x-button class="bg-gray-400 hover:bg-gray-500" onclick="$modals.show('join-modal')">Join</x-button>
        </div>
    </div>

    <x-modals.join />

    <script>
        window.$modals = {
            show(name){
                window.dispatchEvent(
                    new CustomEvent('modal', {
                        detail: name
                    })
                );
            }
        }
    </script>
</x-layout>