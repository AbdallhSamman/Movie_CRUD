@extends('layout.master')
@section('content')
    

<div class="contactbg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contacttitlepage">
                    <h2>contact</h2>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class=" col-md-6 offset-md-3">
            <div class="address">

                <form method="POST" action="/regester">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 mb-4">
                            <input class="contactus" placeholder="Name" type="text" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="col-sm-12 mb-4">
                            <input class="contactus" placeholder="Email" type="text" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12 mb-4">
                            <input class="contactus" placeholder="Password" type="password" name="password" >
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-sm-12">
                            <button class="send" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection