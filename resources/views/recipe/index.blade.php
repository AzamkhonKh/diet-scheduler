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
    <script src="assets/js/app-ecommerce-product-list.js"></script>
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">eCommerce /</span> Product List</h4>

            <!-- Product List Table -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Filter</h5>
                    <div class="d-flex justify-content-between align-items-center row py-3 gap-3 gap-md-0">
                        <div class="col-md-4 product_status"></div>
                        <div class="col-md-4 product_category"></div>
                        <div class="col-md-4 product_stock"></div>
                    </div>
                </div>
                <div class="card-datatable table-responsive">
                    <table class="datatables-products table">
                        <thead class="border-top">
                            <tr>
                                <th></th>
                                <th></th>
                                <th>product</th>
                                <th>category</th>
                                <th>stock</th>
                                <th>sku</th>
                                <th>price</th>
                                <th>qty</th>
                                <th>status</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <!-- / Content -->
    @endsection
