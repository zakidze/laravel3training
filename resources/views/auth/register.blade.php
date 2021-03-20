@extends('layouts.app')
@section('content')
<div class="flex justify-center">
    <div class="w-6/12 bg-white p-6 rounded-lg">
        <h1 class="mb-4">register page</h1>
        <form action=" {{route('register')}}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="name" class="sr-only">name</label>
                <input value="{{ old('name') }}" type="text" name="name" id="name" placeholder="your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg  @error('name')
                        border-red-500
                    @enderror">
                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>

                @enderror
            </div>
            <div class="mb-4">
                <label for="username" class="sr-only">username</label>
                <input value="{{ old('name') }}" type="text" name="username" id="username" placeholder="your username"
                    class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>

                @enderror
            </div>
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
                <label for="password" class="sr-only">password again</label>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    placeholder="your password again" class="bg-gray-100 border-2 w-full p-4 rounded-lg">
                @error('password_confirmation')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>

                @enderror
            </div>
            <div>
                <button type="submit" class="bg-blue-500 text-white rounded font-medium w-full p-4 ">register</button>
            </div>

        </form>

    </div>
</div>
@endsection