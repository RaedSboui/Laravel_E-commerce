@extends('layouts.back.template')

@section('stylesheets')
@parent
<link rel="stylesheet" href={{ asset('back/data_table/css/bootstrap-table.min.css') }}>
@endsection

@section('content')
    <div class="right_col" role="main" id="main-container">
        <h3 class="text-center">Products list</h3>
        <div class="row"> 
            <div class="float-start"></div>
            <hr>
            <div class="float-end mb-4">
                <a class="btn btn-outline-warning" onclick="openModal(null, 'add')">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table  id="table"
                class="table table-bordered table-striped"
                data-toggle="table"
                data-pagination="true"
                data-search="true"
                data-search-align="left"
                data-show-fullscreen="true"
                data-show-toggle="true"
                data-show-columns="true"
                data-show-export="true"
                data-export-types= "['pdf','excel' ,'doc', 'txt', 'xlsx', 'json', 'xml', 'csv', 'sql', 'print']"
                data-show-jump-to="true"
                data-click-to-select="true"
                data-show-copy-rows="true"
                data-minimum-count-columns="2"
                data-page-list="[5, 10, 50, 100, all]"
                data-response-handler="responseHandler"
                data-print-as-filtered-and-sorted-on-ui="true"
                data-id-field="id">
                
            <thead>
                <tr>
                    <th class="text-center" data-field="state" data-checkbox="true"></th>
                    <th class="text-center" data-field="id" data-sortable="true">ID</th>
                    <th class="text-center" data-field="image" data-sortable="true">Image</th>
                    <th class="text-center" data-field="name" data-sortable="true">Name</th>
                    <th class="text-center" data-field="category_id" data-sortable="true">Category</th>
                    <th class="text-center" data-field="action" data-sortable="true">Action</th>
                </tr>
            </thead>

            <tbody>
                @if ($products)
                   @foreach ($products as $product)
                    <tr>
                        <td data-field="state" data-checkbox="true"></td>
                        <td class="text-center">{{ $product->id }}</td>
                        <td class="text-center"><img src="{{ asset('images/products/'.$product->image) }}" height="80" class="rounded-circle"></td>
                        <td class="text-center">{{ $product->name }}</td>
                        <td class="text-center">{{ $product->category->name }}</td>
                        <td class="text-center">
                            <a class="btn btn-outline-primary" href="{{ route('products.show', $product) }}"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-outline-success" onclick="openModal({{ $product }},'edit')"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-outline-danger" onclick="openModal({{ $product }},'delete')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach   
                @else
                    <tr>
                        <td colspan="5">no records found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>


    <!-- Add Modal -->
    <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create a new Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('products.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="category_id">Category :</label>
                            <select name="category_id" class="form-control" id="event_id">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name :</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter the product name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price :</label>
                            <input type="text" name="price" class="form-control" placeholder="Enter the product price">
                        </div>
                        <div class="form-group">
                            <label for="image">Image :</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" class="form-control" placeholder="Product description" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Update Modal -->
    <div class="modal fade" id="updateProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formUpdate" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="category_id">Category :</label>
                            <select name="category_id" class="form-control" id="event_id">
                                @foreach ($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>    
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Name :</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="price">Price :</label>
                            <input type="text" name="price" class="form-control" id="price" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Image :</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" class="form-control" id="description" required></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save Change</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    @isset($category)
        @include('layouts.back.deleteModal')
    @endisset

@endsection

@section('javascript')
@parent
<script src={{ asset('back/data_table/js/tableExport.min.js') }}></script>
<!-- ToolBar -->
<script src={{ asset('back/data_table/js/popper.min.js') }}></script>
<script src={{ asset('back/data_table/js/bootstrap-table.min.js') }}></script>
<!-- Export Plugins -->
<script src={{ asset('back/data_table/js/bootstrap-table-export.min.js') }}></script>
<script src={{ asset('back/data_table/js/tableExport.min.js') }}></script>
   <!-- Page Jump To -->
<script src={{ asset('back/data_table/js/bootstrap-table-page-jump-to.min.js') }}></script>
   <!-- PDF -->
<script src={{ asset('back/data_table/js/jspdf.min.js') }}></script>
<script src={{ asset('back/data_table/js/jspdf.plugin.autotable.js') }}></script>

    <!-- Copy -->
<script src={{ asset('back/data_table/js/bootstrap-table-copy-rows.min.js') }}></script>
<!-- Modal -->
<script src="{{asset('back/js/modalProduct.js')}}"></script>
@endsection