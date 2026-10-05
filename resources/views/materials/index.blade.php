<x-site-layout title="Material Listing">
        <h1>All Materials</h1>

        @if ($materials->count() === 0)
            <p>No material yet.</p>
        @else
            <ul>
                @foreach ($materials as $material)
                    <li class="material">
                        <h2><a href="{{ route('materials.show', $material) }}">{{ $material->name }}</a></h2>
                    </li>
                @endforeach
            </ul>
        @endif
    <div>
        <a href="{{ route('dashboard') }}" class = "underline"> Back to dashboard </a>
    </div>
</x-site-layout>