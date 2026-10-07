<x-site-layout title="Create Product">
    <h1 class="text-3xl font-bold">Product Creation</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">
            <x-breeze.input-label for="name" :value="__('Name')" />
            <x-breeze.text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-breeze.input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- SKU -->
        <div class="mt-4">
            <x-breeze.input-label for="sku" :value="__('SKU')" />
            <x-breeze.text-input id="sku" class="block mt-1 w-full" type="text" name="sku" :value="old('sku')"/>
            <x-breeze.input-error :messages="$errors->get('sku')" class="mt-2" />
        </div>

        <!-- Description -->
        <div class="mt-4">
            <x-breeze.input-label for="description" :value="__('Description')" />
            <textarea id="description" class="block mt-1 w-full border-gray-300 rounded-md" name="description">{{ old('description') }}</textarea>
            <x-breeze.input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Category -->
        <div class="mt-4">
            <x-breeze.input-label for="category" :value="__('Category')" />
            <x-breeze.text-input id="category" class="block mt-1 w-full" type="text" name="category" :value="old('category')"/>
            <x-breeze.input-error :messages="$errors->get('category')" class="mt-2" />
        </div>

        <!-- Weight -->
        <div class="mt-4">
            <x-breeze.input-label for="weight" :value="__('Weight kg')" />
            <x-breeze.text-input id="weight" class="block mt-1 w-full" type="number" step="0.001" name="weight" :value="old('weight')"/>
            <x-breeze.input-error :messages="$errors->get('weight')" class="mt-2" />
        </div>

        <!-- Dimensions -->
        <div class="mt-4">
            <x-breeze.input-label for="dimensions" :value="__('Dimensions')" />
            <x-breeze.text-input id="dimensions" class="block mt-1 w-full" type="text" name="dimensions" :value="old('dimensions')"/>
            <x-breeze.input-error :messages="$errors->get('dimensions')" class="mt-2" />
        </div>

        <div class="mt-6">
            <x-breeze.primary-button>
                {{ __('Create') }}
            </x-breeze.primary-button>
        </div>
    </form>
</x-site-layout>
