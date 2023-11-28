<div>
    {{-- @dd($user->toArray()) --}}
    @foreach ($user->toArray() as $u)
        @foreach ($u as $item)
            <h2>{{$item}}</h2>
        @endforeach
    @endforeach
</div>
