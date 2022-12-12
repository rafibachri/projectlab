@extends('temp')

@section('title', 'GadgetOn')

<style>
    .kotak{
        /* background: gray;
        color:white; */
        margin: 0 100px;
        margin-top:20px;
        margin-bottom:20px;
    }
    .booklist{
        padding:10px;
        font-size: 30px;
        
    }
    .booklist p{
        margin-bottom:0;
    }
    .products{
        display:flex;
        padding: 10px;
        margin: 0 100px;
    }
</style>

@section('content')
    @include('navbar')
    <div class = "kotak">
        <div class = "booklist">
            <p>
                Our Products
            </p>
        </div>
    </div>
    
    <div class = "products">
        @foreach ($productlist as $product)
            <div class="card" style="width: 350px">
                <img src= "/image_products/{{$product->image}}" class="card-img-top"alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $product->title }}</h5>
            <p class="card-text">2021</p>
            <p class="card-text">Rp.{{ $product->price }}</p>
            <a href="/productdetail/{{$product->id}}" class="btn btn-primary" style = "text-align: center;">
               View Product
            </a>
            </div>
        </div>
        @endforeach
    </div>
@endsection