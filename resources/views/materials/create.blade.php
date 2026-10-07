<x-site-layout title="Create Material">
    <h1 class="text-3xl font-bold">Material Creation</h1>

    <form method="POST" action="{{ route('materials.store') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <x-breeze.input-label for="name" :value="__('Name')" />
            <x-breeze.text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-breeze.input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-breeze.input-label for="description" :value="__('Description')" />
            <textarea id="description" class="block mt-1 w-full border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-xs px-2 py-1" name="description">{{ old('description') }}</textarea>
            <x-breeze.input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="mt-6">
            <x-breeze.primary-button>
                {{ __('Create') }}
            </x-breeze.primary-button>
        </div>
    </form>

    <div class="mt-6">
        <a href="{{ route('dashboard') }}" class="underline">Back to dashboard</a>
    </div>
</x-site-layout>
