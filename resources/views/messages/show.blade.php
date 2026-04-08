@if(session('success'))
    {{ session('success') }}
@endif

@foreach($messages as $m)
    <p>{{ $m->name }}: {{ $m->text }}
    <a href="/admin/messages/delete/{{ $m->id }}">Удалить</a>
    </p>
@endforeach

<form method="POST" action="/messages">
    @csrf
    <input name="name">
    <textarea name="text"></textarea>
    <button>Отправить</button>
</form>