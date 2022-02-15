@extends ('layouts.experience')

@section ('content')
<div class="container">
    <header style="height: 150px;">
        <div class="backbutton">
        <a href="#" onclick="history.back(-1);return false;"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
    </header>
    <main style="height: 450px;">

        <div>
            <h3 class="facility">サウナ施設</h3>
        </div>
        <div class="row">
            <div class="col mx-auto justify-center">
                <select class="choice">
                <option value="test">test</option>
                </select>
            </div>
            <div class="col mx-auto justify-center">
                <button class="new" onclick="location.href='/saunaname/new'">新規登録</button>
            </div>
        </div>
    </main>

        <div>
            <button class="next" onclick="location.href='./saunaexperience'">Next</button>
        </div>

</div>
@endsection
