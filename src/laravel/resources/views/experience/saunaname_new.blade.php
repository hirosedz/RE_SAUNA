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
            <div class="col">
                <form action="{{ action('SaunaNameController@create') }}" method="post">
                    <input type="text" style="width: 400px; margin-left: 150px;" value="{{ old('saunaname') }}"></input>
                </form>
            </div>
        </div>
        <div>
            <button class="next" onclick="location.href='../saunaexperience'" style="margin-top: 40px; margin-left: 170px;">Next</button>
        </div>
    </main>
</div>
@endsection
