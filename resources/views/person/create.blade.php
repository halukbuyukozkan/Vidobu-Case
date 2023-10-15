@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            {{ __('Create Person') }}
        </div>
        <div class="card-body">
            <form action="{{ route('person.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input 
                        type="text" 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        name="name"
                    >
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="birthday" class="form-label">Birthday</label>
                    <input 
                        type="date" 
                        class="form-control @error('birthday') is-invalid @enderror" 
                        id="birthday" 
                        name="birthday"
                    >
                    @error('birthday')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" aria-label="Default select example">
                        @foreach ($genders as $gender)
                            <option value="{{ $gender }}">{{ $gender }}</option>                            
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea 
                        class="form-control @error('address') is-invalid @enderror" 
                        id="address" 
                        name="address"
                    ></textarea>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection
