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
                <div class="row">
                    <div class="col-lg-6">
                    
                    </div>
                    <div class="col-lg-3">
                        <input type="submit" value="Save" class="btn btn-success" style="width: 100%;">
                    </div>
                    <div class="col-lg-3">
                        <input type="reset" value="Reset" class="btn btn-secondary" style="width: 100%;">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="dash-card">
            <table class="table table-striped table-hover">
                <thead class="table-primary">
                  <tr>
                    <th scope="col">Code</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Colombo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Kandy</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Mathara</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Mathara</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Mathara</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Mathara</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>Mathara</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
</div>




@endsection
