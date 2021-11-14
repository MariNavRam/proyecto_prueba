@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($casa as $uniquecasa)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{$uniquecasa->name}}</div>

                <div class="card-body">
                    {{$uniquecasa->description}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
