@extends ('layouts.experience')

@section ('content')
<div class="center">
    <header style="height: 150px;">
        <div class="backbutton">
            <button>back</button>
        </div>
    </header>
    <main style="height: 450px;">
        <div>
            <h3 class="facility">サウナ施設新規登録</h3>
        </div>
        <div class="row justify-center">
            <div class="col">
                <input type="text" style="width: 400px; margin-left: 150px;"></input>
            </div>
        </div>
        <div>
            <button class="next" onclick="location.href='../saunaexperience'" style="margin-top: 40px; margin-left: 170px;">Next</button>
        </div>
    </main>
</div>
@endsection
