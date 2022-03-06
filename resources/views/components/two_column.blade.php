<x-master title="{{ $title }}">
    @if (!empty($description))
        <x-slot name="description">
            $description
        </x-slot>
    @endif
    <x-slot name="page">
        <div class="container mx-auto px-4 grid grid-cols-12 gap-3 mt-10 mb-4">
            <div class="col-span-9">
                <article class="block bg-neutral-800 text-neutral-100 px-4 py-2 rounded-sm border-neutral-700 border">
                    {{ $slot }}
                </article>
            </div>
            <div class="col-span-3">
                <x-sidebar></x-sidebar>
            </div>
        </div>
    </x-slot>
</x-master>