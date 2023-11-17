<x-layout>
    <x-slot:title>
        getRoleUserViews
    </x-slot>
    {{$roles}}
    {{$roles->user}}
    @foreach ($roles->getAttributes() as $role )
        <h2>{{$role}}</h2>
    @endforeach
    @foreach( $roles->user as $role)
        @foreach ( $role->getAttributes() as $r )
            <h2>{{$r}}</h2>
        @endforeach
    @endforeach
</x-layout>
