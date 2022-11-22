@extends('app')
@section('content')
    <div class="container">
        <form method="post" action="/albums">
            @csrf
            <div class="form-items">
                <label class="input-label" for="name"> Add New Image </label>
                <input class="input-form text-white" id="name" name="name" type="text"/>
            </div>
            <input type="submit" value="Submit" class="btn">
        </form>

        <div class="content">
           <h2>{{$album->name}}</h2>
           <div class="main-box">
               @foreach ($album->pictures as $pic)
                <div class="box">
                    <div class="box-pic">
                        <img src="{{$pic->path}}" alt="picture"/>
                    </div>
                    <div class="box-text">
                        <h6>{{$pic->name}}</h6>
                    </div>
                </div>               
               @endforeach
           </div>
        </div>
    </div>
    <style>
        .main-box{
            display: grid;
            grid-template-columns: auto auto auto;
            /* gap: 20px 10px; */
        }
        .box{
            background-color: #888;
            padding: 20px;
            font-size: 30px;
            text-align: center;
            overflow: hidden;
            max-height: 60%;
            max-width: 60%;
        }
        .box-pic{ }
        .box-pic:hover + .box-text{transform: translateY(-30px) }
        .box-text{
            /* display: none; */
            z-index: 3;
            transition: all 0.3s;
            transform: translateY(10px);
        }
    </style>
@endsection