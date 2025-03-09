@php
    $i = 0;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
        .newMatch{
            border: 1px solid black;
            width: 100px;
            text-align: center;
        }

        .newMatch:hover{
            border: 2px solid green;
        }
    
    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Details') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                       
                            <h2 style="font-weight: bold">name: {{ $character->name }} </h2>
                            @if ($character->enemy === 1)
                                <h3>Enemy</h3>
                            @endif
                            <br>
                            <h3>defence: {{ $character->defence }} </h3>
                            <h3>strength: {{ $character->strength }} </h3>
                            <h3>accuracy: {{ $character->accuracy }} </h3>
                            <h3>magic: {{ $character->magic }} </h3>
                            <br>
                            @if ($character->enemy === 0)
                                <hr>
                                <br>
                                <h3 style="font-weight: bold">contests:</h3>
                                @if (count($contests) > 0)
                                    @foreach ($contests as $contest)
                                        <h4>place: {{$placeNames[$i]}} | enemy: {{$enemyNames[$i++]}}</h4>
                                    @endforeach
                                @else
                                   <h4> This character has not participated in a contest yet. </h4>
                                @endif
                                <br>
                                <hr>
                                <br>
                            @endif
                            <h3 class="newMatch">
                                <a href="{{ route('edit', ['id' => $character['id']]) }}">Edit</a>
                            </h3>
                            <br>
                            <h3 class="newMatch">Delete</h3>
                            @if ($character->enemy === 0)
                                <br>
                                <h3 class="newMatch">New Match</h3>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>

