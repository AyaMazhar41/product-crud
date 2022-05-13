@extends('admin.layouts.master')

@section('title')
عرض النتج
@endsection
@section('content')
    <div class="card-box">
        <h3 class="form-title font-green">عرض المنتج
            : {{ $product->title }}</h3>

        {!! Form::model($product) !!}
        @include('admin.product.form',['readonly' => true])

        <div class="form-group">
            <a href="{{ url()->previous() }}" class="btn btn-info">رجوع
            </a>
        </div>
    </div>

@endsection
