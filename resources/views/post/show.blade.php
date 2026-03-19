<x-layout>
    <table border="1">
        <tr>
            @foreach($posts as $post)
            <td>{{ $post->id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->desc }}</td>
            @endforeach
        </tr>
    </table>
</x-layout>