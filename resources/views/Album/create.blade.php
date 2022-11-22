@extends('app')
@section('content')
    <div class="container">
        <div class="content">
        <form method="post" action="/albums">
            @csrf
            <div class="form-items">
                <label class="text-white input-label" for="name"> Name Of Album </label>
                <input class="input-form text-white" id="name" name="name" type="text"/>
            </div>
            <input type="submit" value="Submit" class="btn">
        </form>
        </div>
    </div>
    <style>
        .form-items {
            display: flex;
            gap: 5px;
        }
        .btn {
            padding: 10px;
            border-radius: 10%;
            background-color: blueviolet;
            color: #FFF;
            cursor: pointer
        }
    </style>
@endsection
