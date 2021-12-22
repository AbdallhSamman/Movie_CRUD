@extends('layout.master')
@section('content')
    



</div>
<!-- Lastestnews -->
<div class="Lastestnews blog">
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row justify-content-md-center">
            <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 margin">
                <div class="news-box">
                   
                        <div class="news-box mb-5">
                            <figure ><img class="y" src="../images/{{ $single -> image }}" alt="img"  /></figure>
                            <div class="row">
                            <div class="col-7 mb-3 ml-3 z">
                            
                            <h3>{{ $single -> name }}</h3>
                            <span> {{ $single -> desc }}</span>
                            <p>{{ $single -> gener }}</p>
                          
                            
                                
                            
                                        </div>
                                        
                                    <div class="col-4 m-auto ">
                                        <a  href="{{route('index.edit', $single->id)}}" class="btn btn-primary mr-3">Edite</a>
                                    <form method="post" action="/index/{{$single->id}}" class="x">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input class="btn btn-danger" type="submit" value="DELETE">
                                    </form>
                                        </div>
                                    </div>
                                    {{-- <a  href="{{route('index.show', $film->id)}}" class="btn btn-primary">Edite</a> --}}
                           </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection