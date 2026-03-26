<x-layout>
    <table border="1">
        <tr>
            @foreach($posts as $post)
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->desc }}</td>
            <td>Редактировать статью: <a href="/post/new/{id}"></a></td>
            <td>Удалить статью: <a href="/post/del/{id}"></a></td>
            @endforeach
        </tr>
    </table>
</x-layout>