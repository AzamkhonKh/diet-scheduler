@extends('layout.admin')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">eCommerce /</span> Product List</h4>

        <!-- Product List Widget -->

        <div class="card mb-4">
            <div class="card-widget-separator-wrapper">
                <div class="card-body card-widget-separator">
                    <div class="row gy-4 gy-sm-1">
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                                <div>
                                    <h6 class="mb-2">In-store Sales</h6>
                                    <h4 class="mb-2">$5,345.43</h4>
                                    <p class="mb-0">
                                        <span class="text-muted me-2">5k orders</span><span
                                            class="badge bg-label-success">+5.7%</span>
                                    </p>
                                </div>
                                <span class="avatar me-sm-4">
                                    <span class="avatar-initial bg-label-secondary rounded"><i
                                            class="ti-md ti ti-smart-home text-body"></i></span>
                                </span>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none me-4" />
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start card-widget-2 border-end pb-3 pb-sm-0">
                                <div>
                                    <h6 class="mb-2">Website Sales</h6>
                                    <h4 class="mb-2">$674,347.12</h4>
                                    <p class="mb-0">
                                        <span class="text-muted me-2">21k orders</span><span
                                            class="badge bg-label-success">+12.4%</span>
                                    </p>
                                </div>
                                <span class="avatar p-2 me-lg-4">
                                    <span class="avatar-initial bg-label-secondary rounded"><i
                                            class="ti-md ti ti-device-laptop text-body"></i></span>
                                </span>
                            </div>
                            <hr class="d-none d-sm-block d-lg-none" />
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div
                                class="d-flex justify-content-between align-items-start border-end pb-3 pb-sm-0 card-widget-3">
                                <div>
                                    <h6 class="mb-2">Discount</h6>
                                    <h4 class="mb-2">$14,235.12</h4>
                                    <p class="mb-0 text-muted">6k orders</p>
                                </div>
                                <span class="avatar p-2 me-sm-4">
                                    <span class="avatar-initial bg-label-secondary rounded"><i
                                            class="ti-md ti ti-gift text-body"></i></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <h6 class="mb-2">Affiliate</h6>
                                    <h4 class="mb-2">$8,345.23</h4>
                                    <p class="mb-0">
                                        <span class="text-muted me-2">150 orders</span><span
                                            class="badge bg-label-danger">-3.5%</span>
                                    </p>
                                </div>
                                <span class="avatar p-2">
                                    <span class="avatar-initial bg-label-secondary rounded"><i
                                            class="ti-md ti ti-wallet text-body"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="card-header d-flex border-top rounded-0 flex-wrap py-2">
                        <div class="me-5 ms-n2 pe-5">
                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input type="search"
                                        class="form-control" placeholder="Search Product"
                                        aria-controls="DataTables_Table_0"></label></div>
                        </div>
                        <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">
                            <div
                                class="dt-action-buttons d-flex flex-column align-items-start align-items-md-center justify-content-sm-center mb-3 mb-md-0 pt-0 gap-4 gap-sm-0 flex-sm-row">
                                <div class="dataTables_length mt-2 mt-sm-0 mt-md-3 me-2" id="DataTables_Table_0_length">
                                    <label><select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                            class="form-select">
                                            <option value="7">7</option>
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="50">50</option>
                                            <option value="70">70</option>
                                            <option value="100">100</option>
                                        </select></label>
                                </div>
                                <div class="dt-buttons btn-group flex-wrap d-flex">
                                    <div class="btn-group"><button
                                            class="btn btn-secondary buttons-collection dropdown-toggle btn-label-secondary me-3"
                                            tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                            aria-haspopup="dialog" aria-expanded="false"><span><i
                                                    class="ti ti-download me-1 ti-xs"></i>Export</span><span
                                                class="dt-down-arrow"></span></button></div> <button
                                        class="btn btn-secondary add-new btn-primary ms-2 ms-sm-0" tabindex="0"
                                        aria-controls="DataTables_Table_0" type="button"><span><i
                                                class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span
                                                class="d-none d-sm-inline-block">Add Product</span></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="datatables-products table dataTable no-footer dtr-column" id="DataTables_Table_0"
                        aria-describedby="DataTables_Table_0_info">
                        <thead class="border-top">
                            <tr>
                                <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                    style="width: 30.0078px; display: none;" aria-label=""></th>
                                <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1"
                                    colspan="1" style="width: 25.0078px;" data-col="1" aria-label=""><input
                                        type="checkbox" class="form-check-input"></th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 140.281px;"
                                    aria-label="product: activate to sort column ascending">product</th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 153.734px;"
                                    aria-label="category: activate to sort column descending" aria-sort="ascending">
                                    category</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 104.602px;"
                                    aria-label="stock">stock</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 77.0078px;"
                                    aria-label="sku: activate to sort column ascending">sku</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 98.875px;"
                                    aria-label="price: activate to sort column ascending">price</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 76.5234px;"
                                    aria-label="qty: activate to sort column ascending">qty</th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 118.477px;"
                                    aria-label="status: activate to sort column ascending">status</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 127.484px;"
                                    aria-label="Actions">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd">
                                <td valign="top" colspan="9" class="dataTables_empty">No data available in table
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row mx-2">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                                Showing 0 to 0 of 0 entries</div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0"
                                            aria-disabled="true" aria-role="link" data-dt-idx="previous" tabindex="0"
                                            class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a
                                            aria-controls="DataTables_Table_0" aria-disabled="true" aria-role="link"
                                            data-dt-idx="next" tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection
