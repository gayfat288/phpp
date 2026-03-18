<x-layout>
    <ul>
        @foreach ($names as $name)
        <li>{{ $name }}</li>
        @endforeach
    </ul>
</x-layout>