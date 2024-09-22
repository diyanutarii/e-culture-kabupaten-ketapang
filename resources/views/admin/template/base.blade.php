<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title> {{ $title }} - Ketapang Berbudaye</title>

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

        <div class="main-content">
            @yield('content')

            @include('admin.template.sections.footer')
        </div>
        <!-- end main content-->

    </div>

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

    <!-- Morris Js-->
    <script src="{{ asset('assets-admin/plugins/morris-js/morris.min.js') }}"></script>

    <!-- Raphael Js-->
    <script src="{{ asset('assets-admin/plugins/raphael/raphael.min.js') }}"></script>

    <!--dropify-->
    <script src="{{ asset('assets-admin/plugins/dropify/dropify.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets-admin/js/theme.js') }}"></script>

    <script>
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

        dropify.on("dropify.afterClear", function() {
            $("#hiddenFoto").val("");
            $("#hiddenGambar").val("");
        });
    </script>

    @stack('script')
</body>

</html>
