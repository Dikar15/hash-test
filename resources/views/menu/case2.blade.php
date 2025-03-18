@extends('layouts.layout')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card text-center ">
            <div class="card-head">
                <h2 style="text-align: center;">Cek Persentase Karakter</h2>
            </div>
            <div class="card-body">
                @if(session('percentage') !== null)
                <p style="text-align: center; font-weight: bold;">Persentase karakter yang cocok: {{ session('percentage') }}%</p>
                @endif

                <form action="{{ url('/check-match') }}" method="POST">
                    @csrf
                    <label for="input1">Input 1:</label>
                    <input type="text" id="input1" name="input1" required>

                    <label for="input2">Input 2:</label>
                    <input type="text" id="input2" name="input2" required>

                    <button type="submit">Cek Persentase</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')

@endsection