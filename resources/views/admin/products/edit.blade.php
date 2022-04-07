@extends('layouts.index')
@section('content')
    <div class="col-lg-12">
        <h1 class="my-4">Products edit</h1>

        <div class="row my-5">
            <form action="{{ route('products.update',  $product)}}" method="POST" enctype="multipart/form-data" class="">
                @method('patch')
                @csrf
                Name:
                <br/>
                <input type="text" name="name" value="{{ $product->name ?? old('name') ?? '' }}" class="form-control">
                <br/>

                Price ($):
                <br/>
                <input type="text" name="price" value="{{$product->price ?? old('price') ?? '' }}" class="form-control">
                <br/>
                Description:
                <br/>
                <textarea class="form-control" name="description" id="" cols="30" rows="5">{{ $product->description ?? old('description') ?? '' }}</textarea>
                <br/>

                Category:
                <br/>
                <select name="category_id" id="" class="form-control">
                    @foreach($categories as $id => $name)
                        <option value="{{ $id }}"
                            @if($id == $product->id)
                                selected
                            @endif
                        >{{ $name }}</option>
                    @endforeach
                </select>
                <br/>

                Photo:
                <br/>
                <input type="file" name="photo" class="form-control">
                <br/>
                <button type="submit" class="btn-primary btn">Update</button>
            </form>
        </div>
    </div>
@endsection
