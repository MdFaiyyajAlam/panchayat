@extends('layouts.admin.app')

@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            {{-- update subcategory --}}
            <div class="col-12 col-xl-6 d-flex">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <span>Update Subcategory</span>
                    </x-slot>
                    <x-slot name="content">
                        <form action="{{ route('admin.subcategory.update', $subcategory->id) }}" method="POST" class="row fw-bold">
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
                                <input type="text" name="name" class="form-control" placeholder="Category Name" value="{{$subcategory->name}}" required>
                            </div>
                            {{-- slug --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Slug
                                    <small>
                                        (If you leave it blank, it will be generated automatically.)
                                    </small>
                                </label>
                                <input type="text" class="form-control" name="slug" value="{{$subcategory->slug}}" placeholder="Slug">
                            </div>
                            {{-- description --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">
                                    Description (Meta Tag)
                                </label>
                                <input type="text" class="form-control" name="description" value="{{$subcategory->description}}" placeholder="Description (Meta Tag)">
                            </div>
                            {{-- keywords --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">
                                    Keywords (Meta Tag)
                                </label>
                                <input type="text" class="form-control" name="keywords" value="{{$subcategory->keywords}}" placeholder="Keywords (Meta Tag)">
                            </div>
                            {{-- parent category --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Parent Category</label>
                                <select name="parent_id" class="form-select">
                                    @if (isset($categories))
                                        @foreach ($categories as $list)
                                            <option value="{{$list->id}}"
                                                @if ($subcategory->id == $list->id)
                                                    {{'selected'}}
                                                @endif
                                            >
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
                                    @if ($subcategory->menu_status == 1)
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
                            <div class="col-12 mt-4 d-flex justify-content-end">
                              <button type="submit" class="btn btn-primary btn-sm">Update Subcategory</button>
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