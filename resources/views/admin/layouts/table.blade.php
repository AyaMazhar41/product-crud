@extends('admin.layouts.master')

@section('title')
{{__('dashboard.main')}}
@endsection

@section('content')


<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="mt-0 header-title">Buttons example</h4>
            <p class="text-muted font-14 mb-3">
                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p>

            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>

                    <th>Salary</th>
                </tr>
                </thead>


                <tbody>

                <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                   
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@include('admin.layouts.partials.datatables')
