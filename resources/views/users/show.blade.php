<x-layout>
    @foreach($users as $user)
    <div>
        <h2>{{$user->title}}</h2>
        <div>
            {{$user->text}}
        </div>
    </div>
    @endforeach
</x-layout>