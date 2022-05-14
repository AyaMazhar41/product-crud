@extends('admin.layouts.master')

@section('title')
  logs
@endsection

@section('content')

    <div class="card-box">
        <h4 class="mt-0 header-title">logs
        </h4>
        <p class="text-muted font-14 mb-3">

        </p>


        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
                <div class="col-sm-12 col-md-6">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                        <thead>
                            <tr role="row">
                                <th >ID</th>
                                <th >الموظف</th>
                                <th >الوصف</th>
                                <th >المنتج</th>
                                <th >التاريخ</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($activities as $activity)
                                <tr role="row" class="odd" id="row-{{ $activity->id }}">
                                    <td>{{ $activity->id }}</td>
                                    <td>{{ $activity->causer?->name }}</td>
                                    <td>{{ $activity->description }}</td>
                                    <td>{{ $activity->subject?->title }}</td>
                                    <td>{{ $activity->created_at }}</td>


                                </tr>

                            @endforeach

                        </tbody>
                    </table>


                </div>
            </div>

        </div>
    </div>


@endsection

@include('admin.layouts.partials.datatables')
