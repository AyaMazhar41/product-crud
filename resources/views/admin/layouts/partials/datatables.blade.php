@push('styles')

    <link href="{{ asset('light/libs/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('light/libs/datatables/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('light/libs/datatables/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('light/libs/datatables/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

@endpush



@push('scripts')

<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{ asset('light/js/vendor.min.js') }}"></script>

<!-- third party js -->
<script src="{{ asset('light/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('light/libs/datatables/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('light/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('light/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('light/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('light/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('light/libs/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ asset('light/libs/datatables/buttons.flash.min.js') }}"></script>
<script src="{{ asset('light/libs/datatables/buttons.print.min.js') }}"></script>
<script src="{{ asset('light/libs/datatables/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('light/libs/datatables/dataTables.select.min.js') }}"></script>
<script src="{{ asset('light/libs/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('light/libs/pdfmake/vfs_fonts.js') }}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="assets/js/pages/datatables.init.js"></script>



    <script>
        $(document).ready(function() {
            $('#datatable-buttons').DataTable({
                dom: 'Bfrtip',
                responsive:true,
                buttons: [
                    'csv', 'copy', 'excel', 'print'
                ],
                language:{
                    url:'//cdn.datatables.net/plug-ins/1.10.25/i18n/Arabic.json'
                }
            });
            $('#datatable').DataTable();
        });
    </script>

    <script>
        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            html.addEventListener('click', function() {
                alert(clickCheckbox.checked);
            });
            var switchery = new Switchery(html);
        });

        function delete_form(element) {
            var name = $(element).data('name');
            var swalTitle = {!! json_encode(trans('dashboard.delete')) !!} + ' ' + name;
            var swalText = {!! json_encode(trans('dashboard.almostdelete')) !!} + name + {!! json_encode(trans('dashboard.continue')) !!};
            swal({
                title: swalTitle,
                text: swalText,
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-warning",
                confirmButtonText: {!! json_encode(trans('dashboard.con')) !!},
                cancelButtonText: {!! json_encode(trans('dashboard.cancel')) !!}
            }).then(function(isConfirm) {
                if (isConfirm.value) {
                    $('#delete_form').attr('action', $(element).data('url')).submit();
                }
            });
        }


        {{-- function activate(id) {
        $.ajax({
            url: "{{route('admins.updateActivation')}}",
            type: 'POST',
            datatype: 'json',
            data: {
                'admin_id' : id
            },
            success: function(data) {
                swal({
                    title: 'تم التعديل',
                    text: 'تم تعديل البيانات بنجاح',
                    type: "success"
                });
            },
            error: function(error) {
                if (error['status'] == 403) {
                    swal({
                        title: 'غير مسموح',
                        text: 'غير مسموح لك بتعديل حالة المشرفين',
                        type: "error"
                    });
                } else {
                    swal({
                        title: 'حدث خطأ',
                        text: 'حدث خطأ ما برجاء المحاولة لاحقا',
                        type: "error"
                    });
                }
            }
        });
    } --}}
    </script>
@endpush
