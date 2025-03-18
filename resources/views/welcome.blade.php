@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card text-center ">
            <div class="card-head">
                <h1>Silahakan pilih studi kasus</h1>
            </div>
            <div class="card-body">
                <a href="{{route('menu.case1')}}"><button class="btn btn-primary">CRUD</button></a>
                <a href="{{route('menu.case2')}}"><button class="btn btn-primary">Pilih Kata</button></a>
                <!-- <a href="{{route('menu.case3')}}"><button class="btn btn-primary">Studi kasus 3</button></a> -->
            </div>
        </div>
    </div>
</div>
@endsection