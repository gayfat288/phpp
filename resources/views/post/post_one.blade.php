<x-layout>
    <a href="post/all"><b>Название статьи: {{ $post->title }}</b></a>
    <p>Описание: {{ $post->desc }}</p>
    <p>Текст: {{ $post->text }}</p>
    <p>Опубликовано: {{ $post->date }}</p>
</x-layout>