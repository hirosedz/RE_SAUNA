@extends ('layouts.experience')

@section ('content')
<div class="container">
    <header style="height: 100px; margin-top: 70px;">
        <div class="backbutton">
            <button>back</button>
        </div>
    </header>
    <div>
        <div>
            <h3 class="facility">サウナに行った日</h3>

            <h4 class="experience">サウナ体験記録</h4>

            <div class="card">
                <div class="row">
                    <div class="col">set1 Score</div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">sauna  00C</div><div class="col">water  00C</div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col">Time</div><div class="col">00</div><div class="col">00</div><div class="col">00</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col">set2 Score</div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">sauna  00C</div><div class="col">water  00C</div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col">Time</div><div class="col">00</div><div class="col">00</div><div class="col">00</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row">
                    <div class="col">set3 Score</div>
                    </div>
                    <div class="row justify-content-start">
                        <div class="col">sauna  00C</div><div class="col">water  00C</div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col">Time</div><div class="col">00</div><div class="col">00</div><div class="col">00</div>
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
        <button class="next">done?</button>
    </div>
</div>
@endsection
