<x-layout>
    <h2>Категории</h2>

    @foreach($cats as $c)
        <a href="/ads/{{ $c }}">{{ $c }}</a><br>
    @endforeach
</x-layout>