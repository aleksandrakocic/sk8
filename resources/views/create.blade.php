@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Add new produt</h1>
            <form action="/products" method="post">
            {{csrf_field()}}

                <div class="form-group">
                    <label for="title">TITLE
                    </label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>


                <div class="form-group">
                    <label for="description">DESCRIPTION
                    </label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>

                <div class="form-group">
                    <label for="price">PRICE
                    </label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="form-group">
                    <label for="image">IMAGE
                    </label>
                    <input type="text" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="category">CATEGORY
                    </label>
                    <input type="text" class="form-control" id="category" name="category">
                </div>

                <div>
                  <button class="btn btn-primary">Save</button>
                </div>

            </form>
            </div>
        </div>
    </div>
@endsection
