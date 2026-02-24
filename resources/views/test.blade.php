<!DOCTYPE html>
<html>

<head>
    <title>my view</title>
</head>

<body>
    variable one: {{ $var1 }}
    variabe two: {{ $var2 }}

    name: {{ $name }}
    surname: {{ $surname }}

    user name: {{ $a }}
    user surname: {{ $b }}

    <x-layout>
        <x-slot:title>
            {{ $title }}
            </x-slot>
            {{ $text }}
    </x-layout>
</body>

</html>