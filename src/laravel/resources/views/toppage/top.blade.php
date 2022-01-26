@extends ('layouts.toppage')

@section ('content')
<div class="container-fluid">
    <div>
    <header class="header">
            <div class="header-logo">
                <div class="circle"></div>
                <h1><span>The best</span><br/><span>Your</span><br/><span>SAUNA</span><br/><span>Experiece</span><br/><span>Return</span><br/></h1>
            </div>
    </header>
    <div class="username">
        <h3>user name</h3>
    </div>
    <div class="bestscore mx-auto container-fluid">
        <div class="row">
            <div class="col">set X</div>
            <div class="score-cicle">Best Score</div>
            <h5>sauna</h5><h5>water</h5>
            <h5>Time</h5><h4>00</h4><h4>00</h4><h4>00</h4>
        </div>
    </div>
        <div class="lastdata mx-auto" style="padding:20px;">
            <div style="width: 600px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4">
                            <div class="score-circle">Best score</div>
                        </div>
                        <div class="col-4">
                            <h5>date</h5>
                        </div>
                        <div class="col-4">
                            <h5>sauna</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
