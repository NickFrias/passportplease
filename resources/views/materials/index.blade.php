<x-site-layout title="Material Listing">
    <h1 class="text-3xl font-bold">All Materials</h1>

    @if ($materials->count() === 0)
        <p class="mt-4">No material yet.</p>
    @else
        <ul class="mt-4 space-y-4">
            @foreach ($materials as $material)
                <li class="material">
                    <h2 class="font-semibold"><a href="{{ route('materials.show', $material) }}" class="underline">{{ $material->name }}</a></h2>
                    <form method="POST" action="{{ route('materials.destroy', $material) }}">
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
