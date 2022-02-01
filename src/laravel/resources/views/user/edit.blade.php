@extends('layouts.useredit')

@section('content')
    <div class="container">
        <header class="header">
            <div class="header-logo">
                <div class="circle">
                    <h1 calss="logo"><div class="hoge"><span>The best</span><br/><span>Your</span><br/><span>SAUNA</span><br/><span>Experiece</span><br/><span>Return</span><br/></div>
                    </h1>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="name" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="text" class="form-control" placeholder="password" name="password" value="{{ old('password') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                        <input type="text" class="form-control" placeholder="birth" name="birth" value="{{ old('birth') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="EDIT PROFILE">
                </form>
            </div>
        </div>
    </div>
@endsection
