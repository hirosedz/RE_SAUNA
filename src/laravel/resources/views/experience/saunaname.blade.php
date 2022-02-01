@extends ('layouts.experience')

@section ('content')
<div class="container">
    <header style="height: 150px;">
        <div class="backbutton">
            <button>back</button>
        </div>
    </header>
    <main style="height: 450px;">

        <div>
            <h3 class="facility">サウナ施設</h3>
        </div>
        <div class="row">
            <div class="col mx-auto">
                <select>
                <option value="test">test</option>
                </select>
            </div>
            <div class="col mx-auto">
                <button class="new">新規登録</button>
            </div>
        </div>
    </main>

        <div>
            <button class="next" onclick="location.href='./saunaexperience'">Next</button>
        </div>

</div>
@endsection
