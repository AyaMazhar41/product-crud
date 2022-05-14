@extends('admin.layouts.master')

@section('title')
المنتجات
@endsection

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="mt-0 header-title"></h4>
            <p class="text-muted font-14 mb-3">
                <a href="{{ route('products.create')}}" class="btn btn-info">
                    اضافه منتج
                </a>
            </p>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                <tr>

                    <th>#</th>
                    <th>الاسم</th>
                    <th>السعر</th>
                    <th>الوصف</th>
                    <th>العمليات</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product )
                    <tr>
                    <th>{{ $loop->iteration }} </th>

                      <td>  {{ $product -> title}} </td>
                      <td> {{ $product -> price}}  </td>
                     <td> {{ \Illuminate\Support\Str::limit($product->description, 50) }}   </td>
                     <td>

                        <a href="{{ route('products.edit', $product) }}" class="btn btn-info">تعديل</a>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-info">عرض</a>

                        <button
                        class="btn btn-danger"
                        type="button"
                        data-route="{{route('products.destroy', $product->id)}}"
                        onclick="delete_form(this)"
                    >
                        <span> حذف </span>
                    </button>
                     </td>

                    </tr>

                    @endforeach


                </tbody>
            </table>
            <form style="display: none;" id="delete_form" method="post">
                @csrf @method('DELETE')
            </form>
        </div>
    </div>
</div>
@endsection
@include('admin.layouts.partials.datatables')
