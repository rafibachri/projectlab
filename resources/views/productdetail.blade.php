@extends('temp')


<style>
    .kotak{
        background: gray;
        color:white;
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
        margin-top: 40px;
        justify-content:center;
    }
</style>

@section('content')
    @include('navbar')
    
    <div class = "products">
    <img src= "/image_products/{{$productdetail->image}}" style="width: 350px" alt="...">
        <div class="card" style="width: 350px">
            <div class="card-body">
            <h5 class="card-title">{{ $productdetail->title }}</h5>
            <p class="card-text">Rp.{{$productdetail->price}}</p>
            <p class="card-text">{{$productdetail->year }}</p>
            <p class="card-text">{{$productdetail->description }}</p>
            </div>
            <button class = "alert alert-success" style = "margin: 10px; text-align: center; align-items: center">
                    Edit Product
            </button>
            <button class = "alert alert-danger" style = "margin: 10px; text-align: center; align-items: center">
                    Delete Product
            </button>
        </div>
    </div>
@endsection