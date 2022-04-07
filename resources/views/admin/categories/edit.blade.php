@extends('layouts.index')
@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">Category edit</h1>
        <div class="row my-5">
            <form action="{{ route('categories.update', $category) }}" method="POST">
                @csrf
                @method('patch')
                Name:
                <br/>
                <input type="text" name="name" value="{{ $category->name ?? old('name') ?? '' }}" class="form-control">
                <br/>
                <button type="submit" class="btn-primary btn">Update</button>
            </form>
        </div>
    </div>
@endsection
