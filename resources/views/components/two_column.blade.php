<x-master title="{{ $title }}">
    @if (!empty($description))
        <x-slot name="description">
            $description
        </x-slot>
    @endif
    <x-slot name="page">
        <div class="container mx-auto px-4 lg:grid lg:grid-cols-12 gap-3 mt-5 mb-4">
            <div class="col-span-9 mt-5">
                <article class="block bg-neutral-800 text-neutral-100 px-4 py-2 rounded-sm border-neutral-700 border">

                    @if (session()->has('success'))
                        <x-success>
                            {{ session()->get('success') }}
                        </x-success>
                    @endif

                    {{ $slot }}
                </article>
            </div>
            <div class="col-span-3 mt-5">
                <x-sidebar></x-sidebar>
            </div>
        </div>
    </x-slot>
</x-master>