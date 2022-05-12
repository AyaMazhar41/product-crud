@extends('admin.auth.layout')

@section('title')
{{('تسجيل الدخول')}}
@endsection
@section('content')
<div class="col-md-8 col-lg-6 col-xl-5">


    <div class="card login-box">

        <div class="card-body p-4">

            <div class="text-center mb-4">
                <h4 class="text-uppercase mt-0"> تسجيل الدخول
                </h4>
            </div>
        <form method="POST" action="{{ route('login') }}" class="flex col">
            @csrf

            <div class="form-group mb-3">
            <label>البريد الالكتروني</label>
            {!! Form::text('email', null, ['class' => 'form-control','placeholder'=>'ادخل البريد الالكتروني','required'=>true]) !!}
            @error('email')
            <ul class="parsley-errors-list filled" id="parsley-id-5">
                <li class="parsley-required">{{$message}}</li>
            </ul>
            </div>
            @enderror
            <div class="form-group mb-3">
            <label> الرقم السري</label>
            {!! Form::text('password', null, ['class' => 'form-control','required'=>true]) !!}
            @error('password')
            <ul class="parsley-errors-list filled" id="parsley-id-5">
                <li class="parsley-required">{{$message}}</li>
            </ul>
            @enderror
            </div>
            <div class="form-group mb-0 text-center">
                <button class="btn btn-primary btn-block" type="submit"> حفظ
                </button>
            </div>

        </form>


    </div> <!-- end card-body -->
</div>
<!-- end card -->


</div>
<!-- end row -->

</div>
 @endsection

