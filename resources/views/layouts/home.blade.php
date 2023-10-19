@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h1 style="font-size: 72px;
                    background: -webkit-linear-gradient(#ffffff, #007bff);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;font-weight:bold;text-align:center">BREAKING NEWS</h1></div>
                    @foreach ($News as $new)
                        <div class="col-lg-12 mb-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"> <a href="detail/{{$new["id"] }}">{{$new["title"]}}</a></h6>
                                </div>
                            <div class="card-body">
                                <p>{{substr($new["content"],0,150)}}<a href="detail/{{$new["id"] }}"> Baca Selengkapnya</a></p>
                            </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
