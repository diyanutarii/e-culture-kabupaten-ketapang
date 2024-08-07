<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{ $title }} - {{ env('APP_NAME') }}</title>

    <!-- App favicon -->
    <x-favicon></x-favicon>

    <!-- Datatables css -->
    <link href="{{ asset('assets-admin/plugins/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets-admin/plugins/datatables/responsive.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets-admin/plugins/datatables/buttons.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets-admin/plugins/datatables/select.bootstrap4.css') }}" rel="stylesheet"
        type="text/css" />

    <!-- Sweet Alerts css -->
    <link href="{{ asset('assets-admin/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Dropify css -->
    <link href="{{ asset('assets-admin/plugins/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets-admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets-admin/css/theme.min.css') }}" rel="stylesheet" type="text/css" />

    @stack('style')
</head>

<body>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <div class="header-border"></div>
        @include('admin.template.sections.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.template.sections.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            @yield('content')
            <!-- End Page-content -->

            @include('admin.template.sections.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>

    <!-- jQuery  -->
    <script src="{{ asset('assets-admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/waves.js') }}"></script>
    <script src="{{ asset('assets-admin/js/simplebar.min.js') }}"></script>

    <!-- Datatables  -->
    <script src="{{ asset('assets-admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets-admin/plugins/datatables/vfs_fonts.js') }}"></script>

    <!-- Sparkline Js-->
    <script src="{{ asset('assets-admin/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Js-->
    <script src="{{ asset('assets-admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Chart Custom Js-->
    <script src="{{ asset('assets-admin/pages/knob-chart-demo.js') }}"></script>

    <!-- Morris Js-->
    <script src="{{ asset('assets-admin/plugins/morris-js/morris.min.js') }}"></script>

    <!-- Raphael Js-->
    <script src="{{ asset('assets-admin/plugins/raphael/raphael.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ asset('assets-admin/pages/dashboard-demo.js') }}"></script>

    <!-- Sweet Alerts Js-->
    <script src="{{ asset('assets-admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

    <!--dropify-->
    <script src="{{ asset('assets-admin/plugins/dropify/dropify.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets-admin/js/theme.js') }}"></script>

    <script script src="https://cdn.tiny.cloud/1/mntelhivl7uwt5ikv4mj25qfr692ljx6u47h7skin30mj5ke/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '.tinymce',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace visualblocks wordcount linkchecker ',
            toolbar: 'undo redo | blocks fontsize | bold italic underline strikethrough | link image | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat ',
        });
    </script>

    <script>
        // Ajax CSRF Token
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        @if (App::isLocale('id'))
            $('.datatable').DataTable({
                "drawCallback": function() {
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                },
                "language": {
                    "search": "Pencarian",
                    "infoEmpty": "Data Belum Tersedia",
                    "info": "Menampilkan _PAGE_ dari _PAGES_ halaman",
                    "emptyTable": "Data Belum Tersedia",
                    "lengthMenu": "Tampilkan _MENU_ Baris",
                    "zeroRecords": "Data Tidak Ditemukan",
                    "infoFiltered": "(Hasil pencarian dari _MAX_ data)",
                    "processing": "Sedang Memproses...",
                    "paginate": {
                        "first": "Pertama",
                        "previous": "<i class='mdi mdi-chevron-left'>",
                        "next": "<i class='mdi mdi-chevron-right'>",
                        "last": "Terakhir",
                    }
                },
            });

            var dropify = $('.dropify').dropify({
                messages: {
                    'default': 'Klik atau seret dan lepas untuk memasukkan file',
                    'replace': 'Klik atau seret dan lepas untuk mengganti file',
                    'remove': 'Hapus',
                    'error': 'Galat. Ukuran terlalu besar melebihi 2MB atau tipe file tidak didukung'
                }
            });
        @else
            $('.datatable').DataTable({
                "drawCallback": function() {
                    $('.dataTables_paginate > .pagination').addClass('pagination-rounded');
                },
                "language": {
                    "paginate": {
                        "previous": "<i class='mdi mdi-chevron-left'>",
                        "next": "<i class='mdi mdi-chevron-right'>",
                    }
                },
            });

            var dropify = $('.dropify').dropify({
                messages: {
                    'default': 'Click or drag and drop a file',
                    'replace': 'Click or drag and drop to replace',
                    'remove': 'Remove',
                    'error': 'Error. The file is either not square, larger than 2 MB or not an acceptable file type'
                }
            });
        @endif

        dropify.on("dropify.afterClear", function() {
            $("#hiddenPhoto").val("");
            $("#hiddenImage").val("");
        });
    </script>

    @stack('script')
</body>

</html>
