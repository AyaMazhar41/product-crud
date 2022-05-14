@extends('admin.layouts.master')

@section('title')
  اضافه منتج
@endsection
@section('content')
    <div class="card-box">
        <h3 class="form-title font-green">   اضافه منتج </h3>
        {!! Form::open(['route' => 'products.store','id'=>'forms']) !!}
        @include('admin.product.form',['readonly'=>false])
        {!! Form::close() !!}
    </div>
@endsection
