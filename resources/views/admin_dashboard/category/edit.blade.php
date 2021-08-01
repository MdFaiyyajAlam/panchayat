@extends('layouts.admin.app')

@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            {{-- update category --}}
            <div class="col-12 col-xl-6 d-flex">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <span>Update Category</span>
                    </x-slot>
                    <x-slot name="content">
                        <form action="{{ route('admin.category.update', $category->id) }}" method="POST" class="row fw-bold">
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
                                <input type="text" name="name" class="form-control" placeholder="Category Name" value="{{$category->name}}" required>
                            </div>
                            {{-- slug --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Slug
                                    <small>
                                        (If you leave it blank, it will be generated automatically.)
                                    </small>
                                </label>
                                <input type="text" class="form-control" name="slug" value="{{$category->slug}}" placeholder="Slug">
                            </div>
                            {{-- description --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">
                                    Description (Meta Tag)
                                </label>
                                <input type="text" class="form-control" name="description" value="{{$category->description}}" placeholder="Description (Meta Tag)">
                            </div>
                            {{-- keywords --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">
                                    Keywords (Meta Tag)
                                </label>
                                <input type="text" class="form-control" name="keywords" value="{{$category->keywords}}" placeholder="Keywords (Meta Tag)">
                            </div>
                            {{-- color --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Color</label>
                                <input type="text" name="color" class="form-control" value="{{$category->color}}" placeholder="Color">
                            </div>
                            {{-- menu order --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Menu Order</label>
                                <input type="number" name="menu_order" min="1" value="{{$category->navigation->menu_order}}" class="form-control">
                            </div>
                            {{-- show on menu --}}
                            <div class="col-12 mt-3">
                                <div class="row g-sm-2">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="fw-bold">Show on Menu</label>
                                    </div>
                                    @if ($category->navigation->menu_status == 1)
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <input type="radio" name="menu_status" value="1" checked>
                                            <label class="cursor-pointer">Yes</label>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <input type="radio" name="menu_status" value="0">
                                            <label class="cursor-pointer">No</label>
                                        </div>
                                    @else
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <input type="radio" name="menu_status" value="1">
                                            <label class="cursor-pointer">Yes</label>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <input type="radio" name="menu_status" value="0" checked>
                                            <label class="cursor-pointer">No</label>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{-- show on homepage --}}
                            <div class="col-12 mt-3">
                                <div class="row g-sm-2">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="fw-bold">Show on Homepage</label>
                                    </div>
                                    @if ($category->navigation->home_status == 1)
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <input type="radio" name="home_status" value="1" checked>
                                            <label class="cursor-pointer">Yes</label>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <input type="radio" name="home_status" value="0">
                                            <label class="cursor-pointer">No</label>
                                        </div>
                                    @else
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <input type="radio" name="home_status" value="1">
                                            <label class="cursor-pointer">Yes</label>
                                        </div>
                                        <div class="col-lg-2 col-md-4 col-sm-12">
                                            <input type="radio" name="home_status" value="0" checked>
                                            <label class="cursor-pointer">No</label>
                                        </div>
                                    @endif
                                    
                                </div>
                            </div>
                            {{-- category block style --}}
                            <div class="col-12 mt-3">
                                <label class="fw-bold">Category Block Style</label>
                                <div class="row row-cols-sm-4 row-cols-md-5 row-cols-xl-4 g-sm-2 align-items-start mt-3">
                                    @if ($category->navigation->block_type == 'block-1')
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
                                    @endif

                                    @if ($category->navigation->block_type == 'block-2')
                                        <div class="col d-flex flex-column">
                                            <div class="text-center mb-3">
                                                <input type="radio" name="block_type" value="block-1">
                                            </div>
                                            <img src="https://biharyojna.com/assets/admin/img/block-1.png" alt="block-1" class="img-fluid img-thumbnail">
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <div class="text-center mb-3">
                                                <input type="radio" name="block_type" value="block-2" checked>
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
                                    @endif
                                    
                                    @if ($category->navigation->block_type == 'block-3')
                                        <div class="col d-flex flex-column">
                                            <div class="text-center mb-3">
                                                <input type="radio" name="block_type" value="block-1">
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
                                                <input type="radio" name="block_type" value="block-3" checked>
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
                                    @endif
                                    
                                    @if ($category->navigation->block_type == 'block-4')
                                        <div class="col d-flex flex-column">
                                            <div class="text-center mb-3">
                                                <input type="radio" name="block_type" value="block-1">
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
                                                <input type="radio" name="block_type" value="block-4" checked>
                                            </div>
                                            <img src="https://biharyojna.com/assets/admin/img/block-4.png" alt="block-4" class="img-fluid img-thumbnail">
                                        </div>
                                        <div class="col d-flex flex-column">
                                            <div class="text-center mb-3">
                                                <input type="radio" name="block_type" value="block-5">
                                            </div>
                                            <img src="https://biharyojna.com/assets/admin/img/block-5.png" alt="block-5" class="img-fluid img-thumbnail">
                                        </div>
                                    @endif
                                    
                                    @if ($category->navigation->block_type == 'block-5')
                                        <div class="col d-flex flex-column">
                                            <div class="text-center mb-3">
                                                <input type="radio" name="block_type" value="block-1">
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
                                                <input type="radio" name="block_type" value="block-5" checked>
                                            </div>
                                            <img src="https://biharyojna.com/assets/admin/img/block-5.png" alt="block-5" class="img-fluid img-thumbnail">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 mt-4 d-flex justify-content-end">
                              <button type="submit" class="btn btn-primary btn-sm">Update Category</button>
                            </div>
                        </form>
                    </x-slot>
                </x-bootstrap.card>
            </div>
            
        </div>
    
    </div>
</div>
<!--end page wrapper -->
@endsection