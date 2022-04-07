@extends('layouts.index')
@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">Categories</h1>
        <div class="row mb-4">
            <a href="{{ route('categories.create') }}" class="btn btn-primary"> Create category</a>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td scope="row">{{ $category->name }}</td>
                        <td>
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary">Edit</a>

                            <form action="{{route('categories.delete', $category)}}" method="POST" id="delete-form" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
