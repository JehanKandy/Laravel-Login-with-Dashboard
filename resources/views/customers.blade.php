@extends('layouts.dashboard')

<style>
    .dash-card{
        background-color: white;
        border-radius: 5px;
        width: 100%;
        padding: 20px 30px;
        box-shadow: 10px 10px 5px #b7f3df;

    }
    .dash-imputs{
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

<div class="row">
    <div class="col-lg-6">
        <div class="dash-card">
            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <label for="code">Customer Code : </label>
                    </div>
                    <div class="col-lg-8">
                        <label for="code"><input type="text" name="" id="" class="form-control dash-inputs" placeholder="Customer Code"></label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="code">Customer Name : </label>
                    </div>
                    <div class="col-lg-8">
                        <label for="code"><input type="text" name="" id="" class="form-control dash-inputs" placeholder="Customer Name"></label>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="code">Address 01 : </label>
                    </div>
                    <div class="col-lg-8">
                        <label for="code"><input type="text" name="" id="" class="form-control dash-inputs" placeholder="No"></label>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="code">Address 02 : </label>
                    </div>
                    <div class="col-lg-8">
                        <label for="code"><input type="text" name="" id="" class="form-control dash-inputs" placeholder="Street"></label>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="code">Address 03 : </label>
                    </div>
                    <div class="col-lg-8">
                        <label for="code"><input type="text" name="" id="" class="form-control dash-inputs" placeholder="City"></label>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="code">Phone Number : </label>
                    </div>
                    <div class="col-lg-8">
                        <label for="code"><input type="text" name="" id="" class="form-control dash-inputs" placeholder="Mobile"></label>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="code">Email : </label>
                    </div>
                    <div class="col-lg-8">
                        <label for="code"><input type="email" name="" id="" class="form-control dash-inputs" placeholder="Email"></label>
                    </div>
                </div><br>
            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="dash-card">
    

        </div>
    </div>
</div>




@endsection
