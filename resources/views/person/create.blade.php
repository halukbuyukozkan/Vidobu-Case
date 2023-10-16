@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            {{ __('Create Person') }}
        </div>
        <div class="card-body">
            <form action="{{ route('people.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input 
                        type="text" 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        name="name"
                        required
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
                        required
                    >
                    @error('birthday')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender">
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
                        required
                    ></textarea>
                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="post_code" class="form-label">Post Code</label>
                    <input 
                        type="text" 
                        class="form-control @error('post_code') is-invalid @enderror" 
                        id="post_code" 
                        name="post_code"
                        required
                    >
                    @error('post_code')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="city_name" class="form-label">City Name</label>
                    <input 
                        type="text" 
                        class="form-control @error('city_name') is-invalid @enderror" 
                        id="city_name" 
                        name="city_name"
                        required
                    >
                    @error('city_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="country_name" class="form-label">Country Name</label>
                    <input 
                        type="text" 
                        class="form-control @error('country_name') is-invalid @enderror" 
                        id="country_name" 
                        name="country_name"
                        required
                    >
                    @error('country_name')
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
