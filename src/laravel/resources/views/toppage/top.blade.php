@extends ('layouts.toppage')

@section ('content')
<div class="container-fluid">
    <div>
    <header class="header">
            <div class="header-logo">
                <div class="circle"></div>
                <h1 calss="logo"><div class="hoge"><span>The best</span><br/><span>Your</span><br/><span>SAUNA</span><br/><span>Experiece</span><br/><span>Return</span><br/></h1></div>
            </div>
    </header>
    <div class="username">
        <h2>user name</h2>
    </div>
    <div class="bestscore mx-auto container-fluid">
        <div class="row">
            <div class="col">set X</div>
        </div>
        <div class="row justify-content-start">
            <div class="col">Best Score</div><div class="col">sauna  00C</div><div class="col">water  00C</div>
        </div>
        <div class="row justify-content-end">
            <div class="col">Time</div><div class="col">00</div><div class="col">00</div><div class="col">00</div>
        </div>
    </div>
        <div class="lastdata mx-auto" style="padding:20px;">
            <div style="width: 600px;">
                <div class="card">
                    <div class="row">
                        <div class="col-4"><h5>Best score</h5></div>
                        <div class="col-4"><h5>date</h5></div>
                        <div class="col-4"><h5>sauna_name</h5></div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-4"><h5>Best score</h5></div>
                        <div class="col-4"><h5>date</h5></div>
                        <div class="col-4"><h5>sauna_name</h5></div>
                    </div>
                </div>
                <div class="card">
                    <div class="row">
                        <div class="col-4"><h5>Best score</h5></div>
                        <div class="col-4"><h5>date</h5></div>
                        <div class="col-4"><h5>sauna_name</h5></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
