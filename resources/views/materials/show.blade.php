<x-site-layout title="Material Details">
    <dl>
        <div>
            <dt class="text-sm text-gray-500"> Name </dt>
            <dd>{{ $material->name }}</dd>

            <dt class="text-sm text-gray-500"> Description </dt>
            <dd>{{ $material->description }}</dd>
        </div>
    </dl>
        <div>
            <a href="{{ route('materials.index') }}" class = "underline"> Back to overview </a>
        </div>


</x-site-layout>
