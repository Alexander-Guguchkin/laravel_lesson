<x-layout>
    <x-slot:title>
        getInfo
    </x-slot>
    {{-- <ul>
        @foreach ( $posts as $post )
            <li>title:{{$post->title}}</li>
            <li>text:{{$post->texts}}</li>
            <li>decription:{{$post->description}}</li>
        @endforeach
    </ul>
    <table>
        <tr><th>title</th><th>text</th><th>decription</th></tr>

            @foreach ( $posts as $post )
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->texts}}</td>
                <td>{{$post->description}}</td>
            </tr>
            @endforeach
    </table>
    <table>
        <tr><th>title</th><th>text</th><th>decription</th></tr>

            @foreach ( $postsWhere as $post )
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->texts}}</td>
                <td>{{$post->description}}</td>
            </tr>
            @endforeach
    </table>
    @foreach ( $postTitle as $pt)
       <p>title:{{$pt->title}}</p>
    @endforeach

    @foreach ($renameDiscription as $renames)
        {{$renames->text_discription}}
    @endforeach

    @foreach ($userAges as $ages)
       <h2>=30 {{$ages->age}}</h2>
    @endforeach

    @foreach ($user12 as $ages)
       <h2>!=30 {{$ages->age}}</h2>
    @endforeach

    @foreach ($user21 as $user )
        <h2>>30 {{$user->age}}</h2>
    @endforeach
    @foreach ($userMenshe as $user )
        <h2> меньше 30 {{$user->age}} </h2>
    @endforeach
    @foreach ($userMenRav as $user )
        <h2><=30 {{$user->age}}</h2>
    @endforeach
    @foreach ($userAGE as $user )
        <h2>20-30 {{$user->age}}</h2>
    @endforeach
    @foreach ( $userOrWhere as $userOW)
        <h2>{{$userOW->age}}</h2>
        <h2>{{$userOW->id}}</h2>
    @endforeach
    new tasks
    @foreach ( $queryUserId as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new tasks 1
    @foreach ( $queryUsername as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new tasks 2
    @foreach ( $queryUseSalary as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new tasks 3
    @foreach ( $queryAnd as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new tasks 4
    @foreach ( $queryOr as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new tasks 5
    @foreach ( $queryOrderBy as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new tasks 6
    @foreach ( $queryOrderBy as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new tasks 7
    @foreach ( $queryOrderByDesc as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new task 8
    @foreach ( $queryLatest as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    @foreach ( $queryOldest as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new task 9
    @foreach ( $queryRandomFunc as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new task 10
    @foreach ( $queryRandomFuncFirst as $userOW)
            <h2>{{$userOW}}</h2>
    @endforeach

    new task 11
    @foreach ( $queryAgeFirst as $userOW)
            <h2>{{$userOW}}</h2>
    @endforeach

    new task 12

    @foreach ( $queryAge as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new task 13

    @foreach ( $queryUser as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new task 14
    @foreach ( $queryUA as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new task 15
    @foreach ( $queryUserTakeSkip as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new task 16
    @foreach ( $queryUserTakeSkipWhere as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
    new task 17
    {{$queryId}} --}}
{{$queryLinkDB}}
    @foreach ( $queryLinkDB as $userOW)
        @foreach ($userOW as $us)
            <h2>{{$us}}</h2>
        @endforeach
    @endforeach
</x-layout>
