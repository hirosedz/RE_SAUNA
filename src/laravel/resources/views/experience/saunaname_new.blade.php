@extends ('layouts.experience')

@section ('content')
<div class="center">
    <header style="height: 150px;">
        <div class="backbutton">
            <a href="#" onclick="history.back(-1);return false;"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
    </header>
    <main style="height: 450px;">
        <div>
            <h3 class="facility">サウナ施設新規登録</h3>
        </div>
        <div class="row justify-center">
            <form action="{{ action('SaunaNameController@create') }}" method="post">

                <div class="col">
                    <input type="text" name="saunaname" style="width: 400px; margin-left: 150px;" value="{{ old('saunaname') }}"></input>
                    <input type="hidden" name="user_id" style="width: 400px; margin-left: 150px;" value="{{ Auth::user()->id }}"></input>
                </div>
                <div>
                    <input type="submit" class="btn btn-primary" vallue="Next">
                    <!-- <button class="next" style="margin-top: 40px; margin-left: 170px;">Next</button> -->
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </main>
</div>
@endsection
