@props(['name'])
<div 
    id="{{ $name }}"
    x-data="{show: false, name: '{{ $name }}'}" 
    x-show="show" 
    x-on:modal.window="
        show = ($event.detail === name);
    "
    @keydown.escape.window="show=false"
    style="display: none"
    class="fixed inset-0 grid place-items-center"
    {{ $attributes }} 
>
    <div class="fixed inset-0 bg-gray-900 opacity-90" @click="show=false"></div>

    <div class="bg-white shadow-md max-w-sm h-48 m-auto rounded-md fixed inset-0" x-show.transition="show">
        <div class="flex flex-col h-full justify-between">
            <header class="p-6">
                <h3 class="font-bold text-lg">
                    {{ $title }}
                </h3>
            </header>
            <main class="px-6 mb-4">
                {{ $body }}
            </main>
            <footer class="flex justify-end px-6 py-4 mt-6 bg-gray-200 rounded-b-md">
                {{ $footer }}
            </footer>
        </div>
    </div>
</div>