@extends ('layouts.experience')

@section ('content')
<div class="container">
    <header style="height: 100px; margin-top: 70px;">
        <div class="backbutton">
            <a href="#" onclick="history.back(-1);return false;"><i class="fa-solid fa-arrow-left"></i></a>
        </div>
    </header>
    <div>
        <div>
            <h3 class="facility">サウナに行った日
                <input type="date" style="text-center"></input></h3>

            <h4 class="experience">サウナ体験記録</h4>

            <div class="card">
                <div class="row">
                    <div class="col text-center">set1 Score<input type="number" style="width: 80px;" placeholder="score"></input></div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col text-center">
                            <input type="number" style="width: 130px;" placeholder="sauna degree"></input>
                        </div>
                        <div class="col text-center">
                            <input type="number" style="width: 130px;" placeholder="water degree"></input>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col text-center">Time</div>
                        <div class="col"><input type="number" style="width: 100px;" placeholder="sauna Time"></input></div>
                        <div class="col"><input type="number" style="width: 100px;" placeholder="water Time"></input></div>
                        <div class="col"><input type="number" style="width: 100px;" placeholder="air Time"></input></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col text-center">set2 Score<input type="number" style="width: 80px;" placeholder="score"></input></div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col text-center">
                            <input type="number" style="width: 130px;" placeholder="sauna degree"></input>
                        </div>
                        <div class="col text-center">
                            <input type="number" style="width: 130px;" placeholder="water degree"></input>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col text-center">Time</div>
                        <div class="col"><input type="number" style="width: 100px;" placeholder="sauna Time"></input></div>
                        <div class="col"><input type="number" style="width: 100px;" placeholder="water Time"></input></div>
                        <div class="col"><input type="number" style="width: 100px;" placeholder="air Time"></input></div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col text-center">set3 Score<input type="number" style="width: 80px;" placeholder="score"></input></div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col text-center">
                            <input type="number" style="width: 130px;" placeholder="sauna degree"></input>
                        </div>
                        <div class="col text-center">
                            <input type="number" style="width: 130px;" placeholder="water degree"></input>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col text-center">Time</div>
                        <div class="col"><input type="number" style="width: 100px;" placeholder="sauna Time"></input></div>
                        <div class="col"><input type="number" style="width: 100px;" placeholder="water Time"></input></div>
                        <div class="col"><input type="number" style="width: 100px;" placeholder="air Time"></input></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h5 class="addset">
            <a>add set</a>
        </h5>
    </div>
    <div class="mx-auto">
        <button class="next" onclick="location.href='./saunadata'">done?</button>
    </div>
</div>
@endsection
