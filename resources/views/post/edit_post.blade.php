<x-layout>
    <form action="" method="POST">
        <input name="title" value="{{ $postt->title }}">
        <input name="desc" value="{{ $postt->desc }}">
        <input name="date" value="{{ $postt->date }}">
        <textarea name="text">{{ $postt->text }}</textarea>
        <input name="submit" type="submit">
    </form>
</x-layout>