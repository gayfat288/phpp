<form action="">
    <input name="title" value="{{ $post->title }}">
    <input name="desc" value="{{ $post->desc }}">
    <textarea name="text">{{ $post->text }}</textarea>
    <input name="submit" type="submit">
</form>