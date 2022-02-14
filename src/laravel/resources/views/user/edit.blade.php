@extends('layouts.useredit')

@section('content')
    <div class="container">
        <header class="header">
            <div class="header-logo">
                <div class="circle">
                    <h1 class="logo"><div class="hoge"><span>The best</span><br/><span>Your</span><br/><span>SAUNA</span><br/><span>Experiece</span><br/><span>Return</span><br/></div>
                    </h1>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-md-8 mx-auto" style="margin-top: 45px;">
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
        <footer>
        <div class="fixed-bottom mx-auto" style="height:30px; width: 650px; background-color:white;">
            <div class="row">
                <div class="col-3 text-center">
                    <span>
                        <a href="../toppage"><i class="fa-solid fa-house-chimney"></i></a>
                    </span>
                </div>
                <div class="col-3 text-center">
                    <span>
                        <a href="../saunaname"><i class="fa-solid fa-circle-plus"></i></a>
                    </span>
                </div>
                <div class="col-3 text-center">
                    <span>
                        <a href="../index"><i class="fa-solid fa-book-open"></i></a>
                    </span>
                </div>
                <div class="col-3 text-center">
                    <span>
                        <a href="../user"><i class="fa-solid fa-pen"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    </div>
@endsection
