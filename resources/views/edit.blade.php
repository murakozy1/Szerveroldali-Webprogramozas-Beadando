@php
    $i = 0;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <style>
        button{
            border: 3px solid black;
        }

        button:hover{
            border: 3px solid green;
        }

        input:hover{
            border: 1px solid green;
        }

    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Edit') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                       
                            <form action="{{ route('update', $character->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <label for="name"> Name: </label>
                                <input type="text" name="name" value="{{old('name', $character->name)}}">
                                <br>
                                <br>
                                <label for="defence"> Defence: </label>
                                <input type="number" name="defence" value="{{old('defence', $character->defence)}}">
                                <br>
                                <br>
                                <label for="strength"> Strength: </label>
                                <input type="number" name="strength" value="{{old('strength', $character->strength)}}">
                                <br>
                                <br>
                                <label for="accuracy"> Accuracy: </label>
                                <input type="number" name="accuracy" value="{{old('accuracy', $character->accuracy)}}">
                                <br>
                                <br>
                                <label for="magic"> Magic: </label>
                                <input type="number" name="magic" value="{{old('magic', $character->magic)}}">
                                <br>
                                <br>
                                <button type="submit"> Confirm changes </button>
                                @if (count($errors) > 0)
                                    @foreach ($errors->all() as $error)
                                        <h4 style="color: red"> {{$error}} </h4>
                                    @endforeach
                                @endif
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>


