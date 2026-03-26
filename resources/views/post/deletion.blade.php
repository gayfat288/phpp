<x-layout>
    <form action="" method="POST">
        <p><strong>Удалить статью?</strong></p>
        <input name="submit" type="submit">
    </form>

    <p>Удаленные статьи: {{ $deleted }}</p>
</x-layout>