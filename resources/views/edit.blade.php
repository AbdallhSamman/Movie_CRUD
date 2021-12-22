@extends('layout.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="footer create">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 width">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 width">
                    <div class="address">
                        <h3>Add a movie</h3>
                        <form action="/index/{{$movie->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="_method" value="PUT">
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="Name" type="text" name="name" value="{{$movie->name}}">
                                </div>
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="description" type="text" name="desc" value="{{$movie->desc}}">
                                </div>
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="gener" type="text" name="gener" value="{{$movie->gener}}">
                                </div>
                                <div class="col-sm-12">
                                    <input class="contactus" placeholder="gener" type="file" name="image">
                                </div>
                                
                                <div class="col-sm-12">
                                    <button class="send" type="submit">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</body>
</html>
@endsection
