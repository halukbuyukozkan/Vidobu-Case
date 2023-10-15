@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header d-flex">
                  {{ __('Dashboard') }}
                  <a type="button" class="btn btn-primary ms-auto" href="{{ route('person.create') }}" ><i class="bi bi-pencil-fill"></i> Create Person</a>                
                </div>

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
                            <th scope="col" class="text-end">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">1</th>
                            <td>test</td>
                            <td>test</td>
                            <td class="text-end">
                              <a type="button" class="btn btn-secondary"><i class="bi bi-eye-fill"></i> Details</a>
                              <a type="button" class="btn btn-primary"><i class="bi bi-pencil-fill"></i> Edit</a>
                              <a type="button" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Delete</a>
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
