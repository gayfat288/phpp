<!DOCTYPE html>
<html>

<head>
    <title>my view</title>
</head>

<body>
    <p>{{ $name }}</p>
    <p>{{ $age }}</p>
    <p>{{ $salary }}</p>

    <p class="{{ $class }}">aaaa</p>

    <input value="{{ $name1 }}">
    <input value="{{ $age1 }}">
    <input value="{{ $salary1 }}">

    <p style="{{ $style }}">1234567890</p>

    <a href="{{ $href }}">{{ $text }}</a>

    <p>date: {{ date('d.m.Y') }}</p>

    @foreach ($arr as $elem)
        <p>{{ $loop->count }}</p>
        <p>{{ $elem }}</p>
    @endforeach

    @forelse ($city as $elem)
    <p>{{ $elem }}</p>
    @empty
    <p>Москва</p>
    @endforelse

    @foreach ($location as $elem)
        <p>{{ $elem }}</p>
    @forelse ($city as $elem)
        <p>{{ $elem }}</p>
    @empty
        <p>Москва</p>
    @endforelse
    @forelse ($country as $elem)
        <p>{{ $elem }}</p>
    @empty
        <p>Россия</p>
    @endforelse  
    @endforeach

    
</body>

</html>