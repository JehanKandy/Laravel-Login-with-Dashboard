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
            <h4 class="text-end">No:</h4>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <input type="number" name="" id="" class="form-control dash-imput" placeholder="">
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-2">
            <h3>Description : </h3>
        </div>
        <div class="col-lg-4">
            <input type="text" name="" id="" class="form-control dash-imput" placeholder="Description">
        </div>
        <div class="col-lg-2">
        </div>
        <div class="col-lg-2">
            <h4 class="text-end">Date:</h4>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <input type="date" name="" id="" class="form-control dash-imput" placeholder="">
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg-8">
        </div>
        <div class="col-lg-2">
            <h4 class="text-end">Invoice No:</h4>            
        </div>
        <div class="col-lg-2">
            <input type="text" name="" id="" class="form-control dash-imput">
        </div>
    </div>

    <table class="table table-striped table-hover dash-tabel">
        <thead class="table-light">
            <tr>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Weight</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>100</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>101</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>102</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>103</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>104</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
      </table>

      <div class="row">
            <div class="col-lg-6">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Much longer nav link</a>
                    </li>
                  </ul>
            </div>
            <div class="col-lg-3">
                <div class="input-group mb-3">
                    <h5 class="input-text">Credit</h5>
                    <input type="text" class="form-control" placeholder="Credit">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group mb-3">
                    <h5 class="input-text">Gross Amount</h5>
                    <input type="text" class="form-control" placeholder="Gross Amount">
                </div>
            </div>
      </div>
      
      <div class="row">
            <div class="col-lg-6">               
            </div>
            <div class="col-lg-3">
                <div class="input-group mb-3">
                    <h5 class="input-text">Cash</h5>
                    <input type="text" class="form-control" placeholder="Cash">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group mb-3">
                    <h5 class="input-text">Transport</h5>
                    <input type="text" class="form-control" placeholder="Transport">
                </div>
            </div>
      </div>
      <div class="row">
            <div class="col-lg-6">               
            </div>
            <div class="col-lg-3">
                <div class="input-group mb-3">
                    <h5 class="input-text">Cheque</h5>
                    <input type="text" class="form-control" placeholder="Cheque">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="input-group mb-3">
                    <h5 class="input-text">Net Amount</h5>
                    <input type="text" class="form-control" placeholder="Net Amount">
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-lg-6">               
                </div>
                <div class="col-lg-3">
                    <center>
                        <button type="button" class="btn btn-danger btn-lg">Delete</button>
                        <button type="button" class="btn btn-info btn-lg">Print</button>
                    </center>
                </div>
                <div class="col-lg-3">
                    <center>
                        <button type="button" class="btn btn-success btn-lg">Save</button>
                        <button type="button" class="btn btn-secondary btn-lg">Reset</button>
                    </center>
                </div>
            </div>            
        
      </div>

</div>


@endsection
