@extends('layouts.dashboard')

<style>
    .dash-card{
        background-color: white;
        border-radius: 5px;
        width: 100%;
        padding: 20px 30px;
        box-shadow: 10px 10px 5px #b7f3df;

    }
    .dash-imput{
        width: 100%;
    }
    .dash-tabel{
        margin: 20px 0;
    }
    .input-text{
        padding: 10px 15px;
    }
    .dash-btn{
        width: 50%
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

<div class="row">
    <div class="col-lg-6">
        <div class="dash-card">
    

        </div>
    </div>
    <div class="col-lg-6">
        <div class="dash-card">
    

        </div>
    </div>
</div>




@endsection
