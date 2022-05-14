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
        </script>


<script>
    function delete_form(element){
        let url=$(element).data('route');
        Swal.fire({
            title: 'are you sure to delete this item ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete !',
            cancelButtonText:'Cancel !'
        }).then((result) => {
            if (result.isConfirmed) {
                $('#delete_form').attr('action',url).submit();
            }
        })
    }
</script>
@endpush
