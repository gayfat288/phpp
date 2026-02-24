<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
<body>
    {{ $eee }}
    {{ $fff }}

    <x-layout>
        <x-slot:title>
            {{ $title3 }}
        </x-slot>
        {{ $text3 }}
    </x-layout>
</body>
</html>