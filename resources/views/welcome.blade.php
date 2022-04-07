@extends('layouts.index')
@section('content')
    <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
            @foreach($categories as $category)
                <a class="list-group-item" href="#!">{{ucfirst($category->name ?? 'No name')}}</a>
            @endforeach
        </div>
    </div>
    <div class="col-lg-9">
        <div class="carousel slide my-4" id="carouselExampleIndicators" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"><img class="d-block img-fluid"
                                                       src="https://via.placeholder.com/900x350" alt="First slide"/>
                </div>
                <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350"
                                                alt="Second slide"/></div>
                <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350"
                                                alt="Third slide"/></div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="#!"><img class="card-img-top" src="{{$product->photo ?? ''}}" alt="..."/></a>
                        <div class="card-body">
                            <h4 class="card-title"><a href="#!">{{ $product->name ?? 'No name' }}</a></h4>
                            <h5>$ {{number_format($product->price,2,'.',' ')}}</h5>
                            <p class="card-text">{{$product->decsription ?? 'No description'}}</p>
                            <hr>
                            <p>{{ $product->category->name }}</p>
                        </div>
                        <div class="card-footer"><small class="text-muted">★ ★ ★ ★ ☆</small></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection