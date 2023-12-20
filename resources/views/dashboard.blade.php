@extends('layouts.main')
@section('title','Dashboard')
@section('container')
<div class="row">
    @foreach ($products as $product)
    <div class="col-4">
        <div class="card shadow-lg">
            {{-- <div class="card-header text-center">
                <h1 class="fs-4 card-title fw-bold">Forgot Password</h1>
            </div> --}}
            <div class="card-body p-4">
                {{ $product->name }}
            </div>
            <div class="card-footer py-3 border-0">
                {{ $product->price }}
            </div>
        </div>
    </div>   
    @endforeach
</div>


@endsection