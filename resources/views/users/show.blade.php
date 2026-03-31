<x-layout>
    <table border="1">
        @foreach ($users as $us)
        <tr>
            <td>{{ $us }}</td>
        </tr>
        @endforeach
    </table>
</x-layout>