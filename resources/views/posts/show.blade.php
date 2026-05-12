<table border='1'>
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Description</td>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td><a href="{{ $post->id }}">{{ $post->title }}</a></td>
        <td>{{ $post->desc }}</td>
    </tr>
    @endforeach
</table>