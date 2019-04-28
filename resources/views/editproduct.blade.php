@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit produt</h1>
        <form action="/products" method="post">
        {{csrf_field()}}

            <div class="form-group">
                <label for="title">TITLE
                </label>
                <input value= "{{$product->title}}" type="text" class="form-control" id="title" name="title">
            </div>


            <div class="form-group">
                <label for="description">DESCRIPTION
                </label>
                <input value='product.description' type="text" class="form-control" id="description" name="description">
            </div>

            <div class="form-group">
                <label for="price">PRICE
                </label>
                <input value='product.price' type="number" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="image">IMAGE
                </label>
                <input value='product.image' type="text" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="category">CATEGORY
                </label>
                <input value='product.category' type="text" class="form-control" id="category" name="category">
            </div>

            <div>
              <button class="btn btn-primary">edit</button>
            </div>

        </form>
        </div>
    </div>
</div>
@endsection