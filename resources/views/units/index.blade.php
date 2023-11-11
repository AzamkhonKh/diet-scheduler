@extends('layout.admin')
@section('css')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/app-ecommerce.css" />
@endsection
@section('js')
    <!-- Vendors JS -->
    <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="assets/vendor/libs/select2/select2.js"></script>

    <!-- Page JS -->
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light"></span> Units</h4>

            <!-- Product List Table -->
            <div class="card">
                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header d-flex border-top rounded-0 flex-wrap py-2">
                        <div class="me-5 ms-n2 pe-5">
                        </div>
                        <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">
                            <div
                                class="dt-action-buttons d-flex flex-column align-items-start align-items-md-center justify-content-sm-center mb-3 mb-md-0 pt-0 gap-4 gap-sm-0 flex-sm-row">

                                <div class="dt-buttons btn-group flex-wrap d-flex">
                                    <div class="btn-group">
                                    </div>
                                    <a href={{ route('unit.create') }}
                                        class="btn btn-secondary add-new btn-primary ms-2 ms-sm-0" tabindex="0"
                                        aria-controls="DataTables_Table_1" type="button">
                                        <span><i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                                                class="d-none d-sm-inline-block">Add Unit</span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-products table dataTable no-footer dtr-column " id="DataTables_Table_1"
                        aria-describedby="DataTables_Table_1_info" style="width: 100%;">
                        <thead class="border-top">
                            <tr>
                                <th tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1">
                                    Unit
                                </th>
                                {{-- <th tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1">
                                    category
                                </th>
                                <th tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1">status
                                </th> --}}
                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($units as $u)
                                <tr class="odd">
                                    <td class="sorting_1">
                                        <div class="d-flex justify-content-start align-items-center product-name">
                                            <div class="d-flex flex-column">
                                                <h6 class="text-body text-nowrap mb-0">{{ $u->name }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-inline-block text-nowrap">
                                            <button class="btn btn-sm btn-icon">
                                                <i class="ti ti-edit"></i>
                                            </button><button class="btn btn-sm btn-icon delete-record">
                                                <i class="ti ti-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row mx-2">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite">
                                Displaying 1 to 7 of 100 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_1_previous"><a aria-controls="DataTables_Table_1"
                                            aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#"
                                            aria-controls="DataTables_Table_1" aria-role="link" aria-current="page"
                                            data-dt-idx="0" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="DataTables_Table_1" aria-role="link" data-dt-idx="1"
                                            tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="DataTables_Table_1" aria-role="link" data-dt-idx="2"
                                            tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="DataTables_Table_1" aria-role="link" data-dt-idx="3"
                                            tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="DataTables_Table_1" aria-role="link" data-dt-idx="4"
                                            tabindex="0" class="page-link">5</a></li>
                                    <li class="paginate_button page-item disabled" id="DataTables_Table_1_ellipsis"><a
                                            aria-controls="DataTables_Table_1" aria-disabled="true" aria-role="link"
                                            data-dt-idx="ellipsis" tabindex="0" class="page-link">…</a></li>
                                    <li class="paginate_button page-item "><a href="#"
                                            aria-controls="DataTables_Table_1" aria-role="link" data-dt-idx="14"
                                            tabindex="0" class="page-link">15</a></li>
                                    <li class="paginate_button page-item next" id="DataTables_Table_1_next"><a
                                            href="#" aria-controls="DataTables_Table_1" aria-role="link"
                                            data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    @endsection
