<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-black-900">
                    <a href="{{ route('products.index') }}" class="underline">Manage your products →</a>
                </div>

                <div class="p-6 text-black-900">
                    <a href="{{ route('products.create') }}" class="underline">Create your products →</a>
                </div>

                <div class="p-6 text-black-900">
                    <a href="{{ route('materials.index') }}" class="underline">Manage your materials →</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
