<x-site-layout title="Product Details">
    <dl>
        <div>
            <dt class="text-sm text-gray-500"> Name </dt>
            <dd>{{ $product->name }}</dd>
            
            <dt class="text-sm text-gray-500"> Description </dt>
            <dd>{{ $product->description }}</dd>
            
            <dt class="text-sm text-gray-500"> SKU </dt>
            <dd>{{ $product->sku }}</dd>

            <dt class="text-sm text-gray-500"> Category </dt>
            <dd>{{ $product->category }}</dd>

            <dt class="text-sm text-gray-500"> Weight </dt>
            <dd>{{ $product->weight }} kg</dd>

            <dt class="text-sm text-gray-500"> Dimensions </dt>
            <dd>{{ $product->dimensions }} m</dd>
            
            <dt class="text-sm text-gray-500"> Company </dt>
            <dd>{{ $product->user->company }}</dd>

            <dt class="text-sm text-gray-500"> Materials </dt>
            <dd>
                @if ($product->materials->isEmpty())
                    No materials yet.
                @else
                    <ul>
                        @foreach ($product->materials as $material)
                        <li>
                            <a href="{{route('materials.show', $material)}}">{{$material->name}}</a>:{{$material->pivot->percentage}} %
                        </li>
                    @endforeach
                    </ul>   
                @endif
            </dd>
        </div>
    </dl>
        <div>
            <a href="{{ route('products.edit', $product) }}" class = "underline"> Edit Product </a>
        </div>

        <div>
            <a href="{{ route('products.index') }}" class = "underline"> Back to overview </a>
        </div>


</x-site-layout>
