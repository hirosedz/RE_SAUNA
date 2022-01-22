@extends('layouts.signup')

@section('title', 'RE SAUNA')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1 align="center">RE:SAUNA</h1>
                <form action="" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name"> name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="email">email</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="password">password</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="password" value="{{ old('password') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="birth">birth</label>
                        <div class="col-md-10">
                        <input type="text" class="form-control" name="birth" value="{{ old('birth') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="SIGN UP">
                </form>
            </div>
        </div>
    </div>
@endsection
