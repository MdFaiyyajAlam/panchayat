@extends('layouts.admin.app')

@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">

        {{-- menu limit --}}
        <div class="row">
            <div class="col-12 col-xl-6 d-flex">

            </div>
            {{-- menu limit --}}
            <div class="col-12 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-column">
                                <h5 class="mb-0">Menu Limit</h5>
                            </div>
                        </div>
                        <form action="" method="POST" class="row fw-bold">
                            <div class="col-12 mt-3">
                              <label for="title" class="form-label">Menu Limit (The number of links that appear in the menu)</label>
                              <input type="number" class="form-control" id="title" value="1" min="1">
                            </div>
                            <div class="col-12 mt-4 d-flex justify-content-end">
                              <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
<!--end page wrapper -->
@endsection