@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header d-flex">
                  {{ __('Dashboard') }}
                  <a type="button" class="btn btn-primary ms-auto" href="{{ route('people.create') }}" ><i class="bi bi-pencil-fill"></i> Create Person</a>                
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
                            <th scope="col">Name</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Post Code</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th scope="col" class="text-end">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($people as $person)
                          <tr>
                            <td>{{ $person->name }}</td>
                            <td>{{ $person->birthday }}</td>
                            <td>{{ $person->gender }}</td>
                            <td>{{ $person->address->address }}</td>
                            <td>{{ $person->address->post_code}}</td>
                            <td>{{ $person->address->city_name }}</td>
                            <td>{{ $person->address->country_name }}</td>
                            <td class="text-end" style="width: 30%">
                              <a type="button" class="btn btn-primary" href="{{ route('people.edit',$person['id']) }}"><i class="bi bi-pencil-fill"></i> Edit</a>
                              <form action="{{ route('people.destroy',$person['id']) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i> Delete</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                  {!! $people->links() !!}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
