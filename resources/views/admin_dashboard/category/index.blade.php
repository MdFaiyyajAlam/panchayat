@extends('layouts.admin.app')

@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            {{-- add category --}}
            <div class="col-12 col-xl-6 d-flex">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <span>Add Category</span>
                    </x-slot>
                    <x-slot name="content">
                        <form action="{{ route('admin.category.store') }}" method="POST" class="row fw-bold">
                            @csrf
                            {{-- language --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Language</label>
                                <select name="lang_id" class="form-select">
                                    <option value="1" selected>English</option>
                                </select>
                            </div>
                            {{-- name --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Category Name" required>
                            </div>
                            {{-- slug --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Slug
                                    <small>
                                        (If you leave it blank, it will be generated automatically.)
                                    </small>
                                </label>
                                <input type="text" class="form-control" name="slug" placeholder="Slug">
                            </div>
                            {{-- description --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">
                                    Description (Meta Tag)
                                </label>
                                <input type="text" class="form-control" name="description" placeholder="Description (Meta Tag)">
                            </div>
                            {{-- keywords --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">
                                    Keywords (Meta Tag)
                                </label>
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords (Meta Tag)">
                            </div>
                            {{-- color --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Color</label>
                                <input type="text" name="color" class="form-control" placeholder="Color">
                            </div>
                            {{-- menu order --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Menu Order</label>
                                <input type="number" name="menu_order" min="1" value="1" class="form-control">
                            </div>
                            {{-- show on menu --}}
                            <div class="col-12 mt-3">
                                <div class="row g-sm-2">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="fw-bold">Show on Menu</label>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-12">
                                        <input type="radio" name="menu_status" value="1" checked>
                                        <label class="cursor-pointer">Yes</label>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-12">
                                        <input type="radio" name="menu_status" value="0">
                                        <label class="cursor-pointer">No</label>
                                    </div>
                                </div>
                            </div>
                            {{-- show on homepage --}}
                            <div class="col-12 mt-3">
                                <div class="row g-sm-2">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="fw-bold">Show on Homepage</label>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-12">
                                        <input type="radio" name="home_status" value="1" checked>
                                        <label class="cursor-pointer">Yes</label>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-12">
                                        <input type="radio" name="home_status" value="0">
                                        <label class="cursor-pointer">No</label>
                                    </div>
                                </div>
                            </div>
                            {{-- category block style --}}
                            <div class="col-12 mt-3">
                                <label class="fw-bold">Category Block Style</label>
                                <div class="row row-cols-sm-4 row-cols-md-5 row-cols-xl-4 g-sm-2 align-items-start mt-3">
                                    <div class="col d-flex flex-column">
                                        <div class="text-center mb-3">
                                            <input type="radio" name="block_type" value="block-1" checked>
                                        </div>
                                        <img src="https://biharyojna.com/assets/admin/img/block-1.png" alt="block-1" class="img-fluid img-thumbnail">
                                    </div>
                                    <div class="col d-flex flex-column">
                                        <div class="text-center mb-3">
                                            <input type="radio" name="block_type" value="block-2">
                                        </div>
                                        <img src="https://biharyojna.com/assets/admin/img/block-2.png" alt="block-2" class="img-fluid img-thumbnail">
                                    </div>
                                    <div class="col d-flex flex-column justify-content-center">
                                        <div class="text-center mb-3">
                                            <input type="radio" name="block_type" value="block-3">
                                        </div>
                                        <img src="https://biharyojna.com/assets/admin/img/block-3.png" alt="block-3" class="img-fluid img-thumbnail">
                                    </div>
                                    <div class="col d-flex flex-column">
                                        <div class="text-center mb-3">
                                            <input type="radio" name="block_type" value="block-4">
                                        </div>
                                        <img src="https://biharyojna.com/assets/admin/img/block-4.png" alt="block-4" class="img-fluid img-thumbnail">
                                    </div>
                                    <div class="col d-flex flex-column">
                                        <div class="text-center mb-3">
                                            <input type="radio" name="block_type" value="block-5">
                                        </div>
                                        <img src="https://biharyojna.com/assets/admin/img/block-5.png" alt="block-5" class="img-fluid img-thumbnail">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-4 d-flex justify-content-end">
                              <button type="submit" class="btn btn-primary btn-sm">Add Category</button>
                            </div>
                        </form>
                    </x-slot>
                </x-bootstrap.card>
            </div>
            {{-- categories list --}}
            <div class="col-12 col-xl-6">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <span>Categories</span>
                    </x-slot>
                    <x-slot name="content">
                        <div style="overflow-x: scroll">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Id</th>
										<th>Name</th>
										{{-- <th>language</th> --}}
										<th>Order</th>
										<th>Color</th>
										<th>Option</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{ucwords($category->name)}}</td>
                                            <td>{{ucwords($category->navigation->menu_order)}}</td>
                                            <td>{{ucwords($category->color)}}</td>
                                            <td class="dropdown">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Select an option
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('admin.category.edit', $category->id)}}">
                                                            <i class='bx bxs-edit bx-xs me-2'></i>
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('admin.category.delete', $category->id)}}">
                                                            <i class='bx bxs-trash bx-xs me-2'></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
							</table>
						</div>
                    </x-slot>
                </x-bootstrap.card>
            </div>
        </div>
    
    </div>
</div>
<!--end page wrapper -->
@endsection

@push('js')
    <script>
        $(document).ready(function() {
			var table = $('#example').DataTable( {
				lengthChange: true,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
			.appendTo( '#example_wrapper .col-md-6:eq(0)' );
		});
    </script>
@endpush