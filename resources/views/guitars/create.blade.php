@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <form action="{{ route('guitars.store') }}" class="form bg-white p-6 border-1" method="POST">
        @csrf
        <div>
            <label for="guitar-name" class="text-sm">Guitar Name</label>
            <input type="text" class="text-lg border-1" id="guitar-name" value="{{ old('guitar-name') }}" name="guitar-name">
            @error('guitar-name')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="brand" class="text-sm">Brand</label>
            <input type="text" class="text-lg border-1" id="brand" value="{{ old('brand') }}"  name="brand">
            @error('brand')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <label for="year" class="text-sm">Year Made</label>
            <input type="text" class="text-lg border-1" id="year" value="{{ old('year') }}" name="year">
            @error('year')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div>
            <button class="border-1" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection