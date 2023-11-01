@extends('layout.admin')
@section('css')
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/dropzone/dropzone.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/flatpickr/flatpickr.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/tagify/tagify.css') }}" />
@endsection
@section('js')
    <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/jquery-repeater/jquery') }}-repeater.js"></script>
    <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/tagify/tagify.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ asset('assets/js/app-ecommerce-product-add.js') }}"></script>
@endsection
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="app-ecommerce">
                <!-- Add Product -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <div class="d-flex flex-column justify-content-center">
                        <h4 class="mb-1 mt-3">Recipe and related information</h4>
                        <p class="text-muted">add recipe and steps to prepare</p>
                    </div>
                    <div class="d-flex align-content-center flex-wrap gap-3">
                        <div class="d-flex gap-3">
                            <a href="{{ route('recipe.index') }}" class="btn btn-label-secondary">Discard</a>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Recipe</button>
                    </div>
                </div>

                <div class="row">
                    <!-- First column-->
                    <div class="col-12">
                        <!-- Product Information -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-tile mb-0">Recipe information</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="ecommerce-product-name">Name</label>
                                    <input type="text" class="form-control" id="ecommerce-product-name"
                                        placeholder="Product title" name="productTitle" aria-label="Product title" />
                                </div>
                                <!-- Description -->
                                <div>
                                    <label class="form-label">Description (Optional)</label>
                                    <div class="form-control p-0 pt-1">
                                        <div class="comment-toolbar border-0 border-bottom">
                                            <div class="d-flex justify-content-start">
                                                <span class="ql-formats me-0">
                                                    <button class="ql-bold"></button>
                                                    <button class="ql-italic"></button>
                                                    <button class="ql-underline"></button>
                                                    <button class="ql-list" value="ordered"></button>
                                                    <button class="ql-list" value="bullet"></button>
                                                    <button class="ql-link"></button>
                                                    <button class="ql-image"></button>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="comment-editor border-0 pb-4" id="ecommerce-category-description"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Information -->
                        <!-- Variants -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Ingredients</h5>
                            </div>
                            <div class="card-body">
                                <form class="form-repeater">
                                    <div data-repeater-list="group-a">
                                        <div data-repeater-item>
                                            <div class="row">
                                                <div class="mb-3 col-4">
                                                    <label class="form-label" for="form-repeater-1-1">Options</label>
                                                    <select id="form-repeater-1-1" class="select2 form-select"
                                                        data-placeholder="Size">
                                                        <option value="">Size</option>
                                                        <option value="size">Size</option>
                                                        <option value="color">Color</option>
                                                        <option value="weight">Weight</option>
                                                        <option value="smell">Smell</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3 col-8">
                                                    <label class="form-label invisible" for="form-repeater-1-2">Not
                                                        visible</label>
                                                    <input type="number" id="form-repeater-1-2" class="form-control"
                                                        placeholder="Enter size" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" data-repeater-create>Add another option</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /Variants -->
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
    @endsection
