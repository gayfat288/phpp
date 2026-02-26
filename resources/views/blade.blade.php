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

    @if ($year > 0)
    <p>Year: {{ $year }}</p>
    @else
    <p>Year: {{ date('Y') }}</p>
    @endif

    @if($month > 0)
    <p>Month: {{ $month }}</p>
    @else
    <p>Month: {{ date('m') }}</p>
    @endif

    @if ($day > 0)
    <p>Day: {{ $elem }}</p>
    @else
    <p>Day: {{ date('d') }}</p>
    @endif

    <p>{!! $str !!}</p> {{-- комментарий --}}

    @if ($userAge > 18)
    <p>Текст для пользователя старше 18 лет. Пользователь совершеннолетний</p>
    @elseif ($userAge == 18)
    <p>Текст для 18-летнего пользователя. Пользователь совершеннолетний</p>
    @else
    <p>Текст для пользователя младше 18. Пользователь несовершеннолетний</p>
    @endif
    
    @unless ($userAge >= 18)
    <p>Пользователь несовершеннолетний</p>
    @endunless

    {{ $sum = 0 }}
    @foreach ($numbers as $elem)
    <ul>
        <li>{{ $elem * $elem}}</li>
        <li>{{ sqrt($elem) }}</li>
    </ul>
    @if ($loop->count > 0)
    {{ $sum += $elem }}
    @else
    <p>Массив пустой</p>
    @endif
    @endforeach
    <p>{{ $sum }}</p>
</body>

</html>