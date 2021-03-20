@extends('layouts.app')
@section('content')
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
        <h1 class="mb-4">register page</h1>
        @if (session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">{{session('status')}}</div>

        @else

        @endif
        <form action=" {{route('login')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="sr-only">email</label>
                <input value="{{ old('name') }}" type="email" name="email" id="email" placeholder="your email"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>

                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">password</label>
                <input type="password" name="password" id="password" placeholder="your password"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>

                @enderror
            </div>
            <div class="mb-4">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember">Remember me</label>
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white rounded font-medium w-full p-4 ">login</button>
            </div>

        </form>

    </div>
</div>
@endsection