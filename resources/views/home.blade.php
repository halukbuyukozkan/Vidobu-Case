@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>test</td>
                            <td>test</td>
                            <td style="width: 30%">
                              <button type="button" class="btn btn-secondary"><i class="bi bi-eye-fill"></i> Details</button>
                              <button type="button" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</button>
                              <button type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Delete</button>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
