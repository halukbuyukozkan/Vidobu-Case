@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            {{ __('Edit Person') }}
        </div>
        <div class="card-body">
            <form action="{{ route('people.update',$person) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input 
                        type="text" 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        name="name"
                        value="{{ $person->name }}"
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
                            <option value="{{ $gender }}" {{old('gender',$gender) == $person->gender ? 'selected' : ''}} >{{ $gender }}</option>                            
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea 
                        class="form-control @error('address') is-invalid @enderror" 
                        id="address" 
                        name="address"
                    >{{ $person->address->address }}</textarea>
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
                        value="{{ $person->address->post_code }}"
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
                        value="{{ $person->address->city_name }}"
                    >
                    @error('city')
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
                        value="{{ $person->address->country_name }}"
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