@extends('layouts.index')
@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">Products</h1>
        <div class="row mb-4">
            <a href="{{ route('products.create') }}" class="btn btn-primary"> Create product</a>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col" class="text-center">Photo</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td scope="row">{{ $product->name }}</td>
                        <td scope="row">$ {{ number_format($product->price,2,'.',' ') }}</td>
                        <td scope="row" >
                            <img class="w-25 d-block mx-auto" src="{{$product->photo}}" alt="">
                        </td>
                        <td>
                            <a href="{{ route('products.edit', $product) }}" class="btn btn-primary">Edit</a>

                            <form action="{{route('products.delete', $product)}}" method="POST" id="delete-form" style="display: inline">
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
