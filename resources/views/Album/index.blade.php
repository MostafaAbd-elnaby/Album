@extends('app')
@section('content')
    <div class="container">
        <div class="content">

        <div class="button">
            <a href="/albums/create"><button> Create </button></a>
        </div>

        @if(isset($albums))
            @foreach($albums as $album)

            <div class="card">
                <div class="card-title">
                    <h3>{{$album->name}}</h3>
                </div>
                <div class="card-content">
                    <a href="/albums/{{$album->id}}"><button> Show </button></a>
                    <span>Has 3 Pics</span>
                </div>
            </div>

            @endforeach
        @endif
        </div>
    </div>

    <style>
        .card {
            background-color: #2d3748;
            color: white;
            padding: 20px;
            margin: 10px;
            transition: background-color 0.5s;
        }
        .card:hover {
            background-color: #44516a;
        }
        .button button{
            padding: 10px;
            border-radius: 10%;
            background-color: blueviolet;
            color: #FFF;
            cursor: pointer
        }
    </style>
@endsection
