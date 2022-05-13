@extends('admin.layouts.master')

@section('title')
تعديل منتج
@endsection

@section('content')
    <div class="card-box">
        <h3 class="form-title font-green"> تعديل المنتج :

             {{ $product->title }}</h3>

        {!! Form::model($product, ['route' => ['products.update', $product], 'method' => 'PUT']) !!}
        @include('admin.product.form',['readonly'=>false])
        {!! Form::close() !!}

    </div>
@endsection
