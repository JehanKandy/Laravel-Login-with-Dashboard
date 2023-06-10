@extends('layouts.dashboard')

<style>
    .dash-card{
        background-color: white;
        border-radius: 5px;
        width: 100%;
        padding: 20px 30px;
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
            
        </div>
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-2">
            
        </div>
        <div class="col-lg-2">
            
        </div>
    </div>
</div>


@endsection
