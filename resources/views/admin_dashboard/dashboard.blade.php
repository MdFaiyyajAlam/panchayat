@extends('layouts.admin.app')

@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
    
        {{-- chartbox details --}}
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4">
            <a href="" class="col cs-box-report">
                <div class="card radius-10 overflow-hidden bg-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Posts</p>
                                <h5 class="mb-0 text-white">867</h5>
                            </div>
                            <div class="ms-auto text-white">
                                <i class='bx bx-file-blank'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart1"></div>
                </div>
            </a>
            <a href="" class="col cs-box-report">
                <div class="card radius-10 overflow-hidden bg-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Pending Posts</p>
                                <h5 class="mb-0 text-white">$52,945</h5>
                            </div>
                            <div class="ms-auto text-white">
                                <i class='bx bxs-low-vision' ></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart2"></div>
                </div>
            </a>
            <a href="" class="col cs-box-report">
                <div class="card radius-10 overflow-hidden bg-warning">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-dark">Draft</p>
                                <h5 class="mb-0 text-dark">24.5K</h5>
                            </div>
                            <div class="ms-auto text-dark">
                                <i class='bx bx-file'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart3"></div>
                </div>
            </a>
            <a href="" class="col cs-box-report">
                <div class="card radius-10 overflow-hidden bg-success">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-white">Scheduled Posts</p>
                                <h5 class="mb-0 text-white">869</h5>
                            </div>
                            <div class="ms-auto text-white">
                                <i class='bx bx-time'></i>
                            </div>
                        </div>
                    </div>
                    <div class="" id="chart4"></div>
                </div>
            </a>
        </div>
      
        {{-- pending comments & latest messages --}}
        <div class="row">
            {{-- pending comments --}}
            <div class="col-12 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-column">
                                <h5 class="mb-0">Pending Comments</h5>
                                <p class="small">Recently added unapproved comments</p>
                            </div>
                            <div class="font-22 ms-auto">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Comment</th>
                                        <th>Date</th>
                                        <th class="text-center" colspan="2">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#55879</td>
                                        <td>Dilip kumar</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>{{ date('Y-m-d / H:i') }}</td>
                                        <td class="order-actions text-center">
                                            <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                <i class='bx bxs-trash'></i>
                                            </a>
                                        </td>
                                        <td class="order-actions text-center">
                                            <a href="javascript:;" class="text-primary bg-light-primary border-0">
                                                <i class='bx bxs-edit'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#88379</td>
                                        <td>Rahul</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>{{ date('Y-m-d / H:i') }}</td>
                                        <td class="order-actions text-center">
                                            <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                <i class='bx bxs-trash'></i>
                                            </a>
                                        </td>
                                        <td class="order-actions text-center">
                                            <a href="javascript:;" class="text-primary bg-light-primary border-0">
                                                <i class='bx bxs-edit'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#68823</td>
                                        <td>Ankit</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>{{ date('Y-m-d / H:i') }}</td>
                                        <td class="order-actions text-center">
                                            <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                <i class='bx bxs-trash'></i>
                                            </a>
                                        </td>
                                        <td class="order-actions text-center">
                                            <a href="javascript:;" class="text-primary bg-light-primary border-0">
                                                <i class='bx bxs-edit'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#54869</td>
                                        <td>Sandeep</div>
                                        </td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>{{ date('Y-m-d / H:i') }}</td>
                                        <td class="order-actions text-center">
                                            <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                <i class='bx bxs-trash'></i>
                                            </a>
                                        </td>
                                        <td class="order-actions text-center">
                                            <a href="javascript:;" class="text-primary bg-light-primary border-0">
                                                <i class='bx bxs-edit'></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#22536</td>
                                        <td>Deepak</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>{{ date('Y-m-d / H:i') }}</td>
                                        <td class="order-actions text-center">
                                            <a href="javascript:;" class="text-danger bg-light-danger border-0">
                                                <i class='bx bxs-trash'></i>
                                            </a>
                                        </td>
                                        <td class="order-actions text-center">
                                            <a href="javascript:;" class="text-primary bg-light-primary border-0">
                                                <i class='bx bxs-edit'></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- latest messages --}}
            <div class="col-12 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-column">
                                <h5 class="mb-0">Latest Contact Messages</h5>
                                <p class="small">Recently added contact messages</p>
                            </div>
                            <div class="font-22 ms-auto">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </div>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Message</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#55879</td>
                                        <td>Dilip kumar</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>{{ date('Y-m-d / H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td>#88379</td>
                                        <td>Rahul</td>
                                        <td class=""><span class="badge bg-light-danger text-danger w-100">Cancelled</span></td>
                                        <td>{{ date('Y-m-d / H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td>#68823</td>
                                        <td>Ankit</td>
                                        <td class=""><span class="badge bg-light-warning text-warning w-100">Pending</span></td>
                                        <td>{{ date('Y-m-d / H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td>#54869</td>
                                        <td>Sandeep</div>
                                        </td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>{{ date('Y-m-d / H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td>#22536</td>
                                        <td>Deepak</td>
                                        <td class=""><span class="badge bg-light-success text-success w-100">Completed</span></td>
                                        <td>{{ date('Y-m-d / H:i') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-2 text-end">
                            <a href="javscript:;" class="btn btn-primary btn-sm">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end row-->

        {{-- latest users --}}
        <div class="row">
            {{-- latest users --}}
            <div class="col-12 col-xl-6 d-flex">
                <div class="card radius-10 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="d-flex flex-column">
                                <h5 class="mb-0">Latest Users</h5>
                                <p class="small">Recently registered users</p>
                            </div>
                            <div class="font-22 ms-auto">
                                <i class='bx bx-dots-horizontal-rounded'></i>
                            </div>
                        </div>
                        {{-- user list --}}
                        <div class="d-flex">
                            <div class="d-flex flex-column">
                                <img src="{{ url('https://via.placeholder.com/110x110') }}" class="msg-avatar" alt="user avatar">
                                <div class="user-name">Rahul sgfgfgfgfs sg</div>
                                <div class="small user-creation">
                                    {{ date ('d-m-y')}}
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <img src="{{ url('https://via.placeholder.com/110x110') }}" class="msg-avatar" alt="user avatar">
                                <div class="user-name">Rahul sgfgfgfgfs sg</div>
                                <div class="small user-creation">
                                    {{ date ('d-m-y')}}
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 text-end">
                            <a href="javscript:;" class="btn btn-primary btn-sm">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<!--start switcher-->
<div class="switcher-wrapper">
    <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
    </div>
    <div class="switcher-body">
        <div class="d-flex align-items-center">
            <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
            <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
        </div>
        <hr/>
        <h6 class="mb-0">Theme Styles</h6>
        <hr/>
        <div class="d-flex align-items-center justify-content-between">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                <label class="form-check-label" for="lightmode">Light</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                <label class="form-check-label" for="darkmode">Dark</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                <label class="form-check-label" for="semidark">Semi Dark</label>
            </div>
        </div>
        <hr/>
        <div class="form-check">
            <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
            <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
        </div>
        <hr/>
        <h6 class="mb-0">Header Colors</h6>
        <hr/>
        <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
                <div class="col">
                    <div class="indigator headercolor1" id="headercolor1"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor2" id="headercolor2"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor3" id="headercolor3"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor4" id="headercolor4"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor5" id="headercolor5"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor6" id="headercolor6"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor7" id="headercolor7"></div>
                </div>
                <div class="col">
                    <div class="indigator headercolor8" id="headercolor8"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end switcher-->
@endsection

@push('js')
<script>
    new PerfectScrollbar('.customers-list');
    new PerfectScrollbar('.store-metrics');
    new PerfectScrollbar('.product-list');
</script>
@endpush