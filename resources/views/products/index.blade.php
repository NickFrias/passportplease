<x-site-layout title="Product Listing">
        <h1>All Products</h1>

        @if ($products->count() === 0)
            <p>No product yet.</p>
        @else
            <ul>
                @foreach ($products as $product)
                    <li class="product">
                    <p>
                        <h2><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h2>
                        <p class="meta">
                        SKU → {{ $product->sku }}
                    </p>
                        <form method="POST" action="{{ route('products.destroy', $product) }}" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 underline">Delete</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        @endif
    <div>
        <a href="{{ route('dashboard') }}" class = "underline"> Back to dashboard </a>
    </div>
</x-site-layout>