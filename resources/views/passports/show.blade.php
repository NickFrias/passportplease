<x-site-layout title="Digital Product Passport">
    <h1 class="text-3xl font-bold">Digital Product Passport</h1>
    <dl>
        <div>
            <dt class="text-sm text-gray-500"> Name </dt>
            <dd>{{ $passport->product->name }}</dd>
            
            <dt class="text-sm text-gray-500"> Company </dt>
            <dd>{{ $passport->product->user->company }}</dd>
            
            <dt class="text-sm text-gray-500"> Description </dt>
            <dd>{{ $passport->product->description }}</dd>

            <dt class="text-sm text-gray-500"> SKU </dt>
            <dd>{{ $passport->product->sku }}</dd>

            <dt class="text-sm text-gray-500"> Category </dt>
            <dd>{{ $passport->product->category }}</dd>

            <dt class="text-sm text-gray-500"> Weight </dt>
            <dd>{{ $passport->product->weight }} kg</dd>

            <dt class="text-sm text-gray-500"> Dimensions </dt>
            <dd>{{ $passport->product->dimensions }}</dd>

            <dt class="text-sm text-gray-500"> Materials </dt>
            <dd>
                @if ($passport->product->materials->isEmpty())
                    No materials yet.
                @else
                    <ul>
                        @foreach ($passport->product->materials as $material)
                        <li>
                            {{$material->name}}: {{$material->pivot->percentage}} %
                        </li>
                    @endforeach
                    </ul>   
                @endif
            </dd>
        </div>
    </dl>
</x-site-layout>