@extends('layouts.index')
@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">Categories create</h1>
        <div class="row my-5">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                Name:
                <br/>
                <input type="text" name="name" value="{{ old('name') ?? '' }}" class="form-control">
                <br/>
                <button type="submit" class="btn-primary btn">Create</button>
            </form>
        </div>
    </div>
@endsection
