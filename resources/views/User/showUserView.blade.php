<x-layout>
    <x-slot:title>ShowUserView</x-slot>
    @foreach ($users as $user)
    <ul>
        @foreach ($user->getAttributes() as $attribute => $value)
            <li>{{ $attribute }}: {{ $value }}</li>
        @endforeach
    </ul>
@endforeach
{{dd($users)}}
</x-layout>
