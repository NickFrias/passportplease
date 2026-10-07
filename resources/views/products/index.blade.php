<x-site-layout title="Product Listing">
    <h1 class="text-3xl font-bold">All Products</h1>

    @if ($products->count() === 0)
        <p class="mt-4">No product yet.</p>
    @else
        <ul class="mt-4 space-y-4">
            @foreach ($products as $product)
                <li class="product">
                    <h2 class="font-semibold"><a href="{{ route('products.show', $product) }}" class="underline">{{ $product->name }}</a></h2>
                    <p class="meta">SKU → {{ $product->sku }}</p>
                    <form method="POST" action="{{ route('products.destroy', $product) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 underline">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif

    <div class="mt-6">
        <a href="{{ route('dashboard') }}" class="underline">Back to dashboard</a>
    </div>
</x-site-layout>
