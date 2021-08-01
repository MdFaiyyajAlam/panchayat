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
                        <span>Add Subcategory</span>
                    </x-slot>
                    <x-slot name="content">
                        {{-- validation --}}
                        <x-jet-validation-errors class="mb-2 text-danger" />
                        <form action="{{ route('admin.subcategory.store') }}" method="POST" class="row fw-bold">
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
                            {{-- parent category --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Parent Category</label>
                                <select name="parent_id" class="form-select">
                                    <option value="" selected>None</option>
                                    @if (isset($categories))
                                        @foreach ($categories as $list)
                                            <option value="{{$list->id}}">
                                                {{ucwords($list->name)}}
                                            </option>       
                                        @endforeach
                                    @endif
                                </select>
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
                            <div class="col-12 mt-4 d-flex justify-content-end">
                              <button type="submit" class="btn btn-primary btn-sm">Add Subcategory</button>
                            </div>
                        </form>
                    </x-slot>
                </x-bootstrap.card>
            </div>
            {{-- subcategories list --}}
            <div class="col-12 col-xl-6">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <span>Subcategories</span>
                    </x-slot>
                    <x-slot name="content">
                        <div style="overflow-x: scroll">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Id</th>
										<th>Name</th>
										{{-- <th>language</th> --}}
										<th>Parent Category</th>
										<th>Options</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($subcategories as $list)
                                        <tr>
                                            <td>{{$list->id}}</td>
                                            <td>{{ucwords($list->name)}}</td>
                                            <td>{{ucwords($list->parent->name)}}</td>
                                            <td class="dropdown">
                                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Select an option
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('admin.subcategory.edit', $list->id)}}">
                                                            <i class='bx bxs-edit bx-xs me-2'></i>
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('admin.subcategory.delete', $list->id)}}">
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