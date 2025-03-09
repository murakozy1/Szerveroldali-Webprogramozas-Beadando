<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        table{
            border: 1px solid black;
            text-align: center;
            margin: 5px;
            padding: 5px;
        }

        tr{
            border: 1px solid black;  
            margin: 5px; 
            padding: 5px; 
        }

        td{
            border: 1px solid black;   
            margin: 5px; 
            padding: 5px;
        }

        .newChar:hover{
            border: 2px solid green;
        }


    </style>
</head>
<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                    <div class="p-6 text-gray-900">
                        <h2>Your characters: </h2>
                        <table>
                            <tr>
                                <td>Name</td>
                                <td>Defence</td>
                                <td>Strength</td>
                                <td>Accuracy</td>
                                <td>Magic</td>
                                <td>Details</td>
                            </tr>               
                            @foreach ($characters as $character)
                                <tr>
                                    <td>{{$character['name']}}</td>
                                    <td>{{$character['defence']}}</td>
                                    <td>{{$character['strength']}}</td>
                                    <td>{{$character['accuracy']}}</td>
                                    <td>{{$character['magic']}}</td>
                                    <td><a href="{{ route('details', ['id' => $character['id']]) }}">click here</a></td>
                                </tr>                        
                            @endforeach
                        </table>
                        
                        <table>
                            <tr>
                                <td class="newChar"><a href="{{route('newCharacter', ['id' => $characters[0]['user_id']])}}">Make New Character</a></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>
