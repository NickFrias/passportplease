<x-site-layout title="Product Details">
    <dl>
        <div>
            <dt class="text-sm text-gray-500"> Name </dt>
            <dd>{{ $product->name }}</dd>
            
            <dt class="text-sm text-gray-500"> Description </dt>
            <dd>{{ $product->description }}</dd>
            
            <dt class="text-sm text-gray-500"> SKU </dt>
            <dd>{{ $product->sku }}</dd>
            </p>
        </div>
    </dl>
        <div>
            <a href="{{ route('products.index') }}" class = "underline"> Back to overview </a>
        </div>
</x-site-layout>
