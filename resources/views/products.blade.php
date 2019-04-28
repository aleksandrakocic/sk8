@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class='container' >
           <a class="row justify-content-center" href="products/create">CREATE NEW PRODUCT</a>
        </div>
        This is the list of exiting products
        <products-component></products-component>
    </div>
</div>
@endsection
