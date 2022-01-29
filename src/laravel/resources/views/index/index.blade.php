@extends ('layouts.toppage')

@section ('content')
<div class="container-fluid">

    <header class="header">
        <div class="row">
            <h3 class="index">記録一覧</h3>
            <input type="text"></input>
        </div>
    </header>

        <div class="lastdata mx-auto" style="padding:20px; height: 700px">
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
@endsection
