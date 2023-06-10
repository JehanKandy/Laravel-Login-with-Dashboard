@extends('layouts.dashboard')

<style>
    .dash-card{
        background-color: white;
        border-radius: 5px;
        width: 100%;
        padding: 20px 30px;
    }
    .dash-imput{
        width: 100%;
    }
</style>

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged as Admin!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="dash-card">
    <div class="row">
        <div class="col-lg-2">
            <h3>Customer : </h3>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <input type="text" name="" id="" class="form-control dash-imput" placeholder="Customer No">
            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <input type="text" name="" id="" class="form-control dash-imput" placeholder="Customer Name">
            </div>
        </div>
        <div class="col-lg-2">
            Customer : <a href="">Create</a> | <a href="">Search</a>
        </div>
        <div class="col-lg-2">
            No:
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <input type="number" name="" id="" class="form-control dash-imput" placeholder="Customer Name">
            </div>
        </div>
    </div>
</div>


@endsection
