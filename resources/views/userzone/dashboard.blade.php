<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 space-y-4 text-gray-900">
                <div>
                    <a href="{{ route('products.index') }}" class="underline">Manage your products →</a>
                </div>

                <div>
                    <a href="{{ route('products.create') }}" class="underline">Create your products →</a>
                </div>

                <div>
                    <a href="{{ route('materials.index') }}" class="underline">Manage your materials →</a>
                </div>

                <div>
                    <a href="{{ route('materials.create') }}" class="underline">Create your materials →</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
