<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posty</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center ">
            <li>
                <a href="/" class="p-3">home</a>
            </li>
            <li>
                <a href="/dashboard" class="p-3">dashboaord</a>
            </li>
            <li>
                <a href="{{route('posts')}}" class="p-3">posts</a>
            </li>
        </ul>
        <ul class="flex items-center">
            @auth
            <li>
                <a href="" class="p-3">{{auth()->user()->name}} </a>
            </li>
            <li>
                <form action="/logout" method="POST" class="inline">
                    @csrf
                    <button type="submit"> logout</button>
                </form>
            </li>
            @endauth
            @guest
            <li>
                <a href="/login" class="p-3">login</a>
            </li>
            <li>
                <a href="{{route('register')}}" class="p-3">register</a>
            </li>
            @endguest




        </ul>
    </nav>
    @yield('content');
</body>

</html>