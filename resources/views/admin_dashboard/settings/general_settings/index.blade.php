@extends('layouts.admin.app')

@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <x-bootstrap.card>
                    {{-- <x-slot name="title">
                        <span>Settings Language</span>
                    </x-slot> --}}
                    <x-slot name="content">
                        <form action="" method="POST" class="row fw-bold">
                            @csrf
                            {{-- language --}}
                            <div class="col-12">
                                <label class="form-label">Settings Language</label>
                                <select name="lang_id" class="form-select">
                                    <option value="1" selected>English</option>
                                </select>
                            </div>
                        </form>
                    </x-slot>
                </x-bootstrap.card>

            </div>
        </div>
        <div class="row">
            <x-bootstrap.card>
                <div class="col-lg-12 d-flex">
                    {{-- <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2"> --}}

                    <div class="card-body-fluid">
                        <ul class="nav nav-tabs nav-primary d-flex" role="tablist">
                            <li class="nav-item " role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#primarygeneral" role="tab"
                                    aria-selected="true">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx- font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">General Settings</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#primarycontact" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx- font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Contact Settings</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#primarysocial" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx- font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Social Media Settings</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#primaryfacebook" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx- font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Facebook Comments</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#primarycookies" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx- font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Cookies Warning</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#primarycustom" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx- font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Custom CSS Codes</div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#primarycustomjs" role="tab"
                                    aria-selected="false">
                                    <div class="d-flex align-items-center">
                                        <div class="tab-icon"><i class='bx bx- font-18 me-1'></i>
                                        </div>
                                        <div class="tab-title">Custom JavaScript Codes</div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        {{-- GeneralSettings --}}
                        <div class="tab-content py-3">
                            <div class="tab-pane fade show active" id="primarygeneral" role="tabpanel">

                                <form action="{{ route('admin.settings.store') }}" method="POST"
                                    class="row fw-bold">
                                    @csrf
                                    {{-- Timezone --}}
                                    <div class="col-8 mt-3">
                                        <label class="form-label">Timezone</label>
                                        <select name="timezone_id" class="form-select">
                                            <option value="1" selected>Africa/Abidjan</option>
                                            <option value="2" selected>Africa/Accra</option>
                                            <option value="3" selected>Indian/Maldives</option>
                                        </select>
                                    </div>
                                    {{-- Cookie Prefix --}}
                                    <div class="col-8 mt-3">
                                        <label class="form-label">Cookie Prefix</label>
                                        <input type="text" name="cookie_prefix" class="form-control"
                                            placeholder="604b01e40d216" required>
                                    </div>

                                    {{-- Application Name --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">
                                            Application Name
                                        </label>
                                        <input type="text" class="form-control" name="application_name"
                                            placeholder="Application Name" required>
                                    </div>
                                    {{-- Footer About Section description --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">
                                            Footer About Section
                                        </label>
                                        <textarea type="text" rows="10" class="form-control" name="footer_about_section"
                                            placeholder="Footer About Section" style="height:200px;"></textarea>
                                    </div>
                                    {{-- Post Optional URL Button Name --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">
                                            Post Optional URL Button Name
                                        </label>
                                        <input type="text" class="form-control" name="post_url"
                                            placeholder="Post Optional URL Button Name">
                                    </div>
                                    {{-- Copyright --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Copyright</label>
                                        <input type="text" name="copyright" class="form-control"
                                            placeholder="Copyright">
                                    </div>
                                    <div class="col-6 mt-3 float-end">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Save Changes">
                                    </div>

                                </form>
                            </div>
                            {{-- End GeneralSettings --}}

                            {{-- Contact Settings --}}
                            <div class="tab-pane fade" id="primarycontact" role="tabpanel">
                                <form action="{{ route('admin.settings.store.contact') }}"
                                    method="POST" class="row fw-bold">
                                    @csrf

                                    {{-- Address --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Address"
                                            required>
                                    </div>

                                    {{-- Email --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">
                                            Email
                                        </label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="123@gmail.com" required>
                                    </div>
                                    {{-- Phone --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">
                                            Phone
                                        </label>
                                        <input type="tel" class="form-control" name="phone" placeholder="1234567890">
                                    </div>
                                    {{-- Contact Text --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">
                                            Contact Text
                                        </label>
                                        <textarea name="contact_taxt" id="basic-example" cols="30" class="form-control"
                                            rows="10"></textarea>
                                    </div>

                                    <div class="col-6 mt-3 float-end">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Save Changes">
                                    </div>

                                </form>
                            </div>
                            {{-- End Contact Settings --}}

                            {{-- Social Media Settings --}}
                            <div class="tab-pane fade" id="primarysocial" role="tabpanel">
                                <form action="{{ route('admin.settings.store.social') }}"
                                    method="POST" class="row fw-bold">
                                    @csrf

                                    {{-- Facebook URL --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Facebook URL</label>
                                        <input type="text" name="facebook_url" class="form-control"
                                            placeholder="Facebook URL" required>
                                    </div>
                                    {{-- Twitter URL --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Twitter URL</label>
                                        <input type="text" name="twitter_url" class="form-control"
                                            placeholder="Twitter URL" required>
                                    </div>
                                    {{-- Instagram URL --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Instagram URL</label>
                                        <input type="text" name="instagram_url" class="form-control"
                                            placeholder="Instagram URL" required>
                                    </div>
                                    {{-- Pinterest URL --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Pinterest URL</label>
                                        <input type="text" name="pinterest_url" class="form-control"
                                            placeholder="Pinterest URL" required>
                                    </div>
                                    {{-- LinkedIn URL --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">LinkedIn URL</label>
                                        <input type="text" name="linkedIn_url" class="form-control"
                                            placeholder="LinkedIn URL" required>
                                    </div>
                                    {{-- VK URL --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">VK URL</label>
                                        <input type="text" name="vk_url" class="form-control" placeholder="VK URL"
                                            required>
                                    </div>
                                    {{-- Telegram URL --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Telegram URL</label>
                                        <input type="text" name="telegram_url" class="form-control"
                                            placeholder="Telegram URL" required>
                                    </div>
                                    {{-- Youtube URL --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Youtube URL</label>
                                        <input type="text" name="youtube_url" class="form-control"
                                            placeholder="Youtube URL" required>
                                    </div>
                                    <div class="col-3 mt-3 float-right">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Save Changes">
                                    </div>
                                </form>
                            </div>
                            {{-- End Social Media Settings --}}

                            {{-- Facebook Comments --}}
                            <div class="tab-pane fade" id="primaryfacebook" role="tabpanel">
                                <form action="{{ route('admin.settings.store.facebook.cps') }}"
                                    method="POST" class="row fw-bold">
                                    @csrf

                                    {{-- Facebook Comments Plugin Code --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Facebook Comments Plugin Code</label>

                                        <textarea name="facebook_comments" id="" class="form-control"
                                            placeholder="Facebook Comments Plugin Code" cols="30" rows="10" style="height:200px;"></textarea>
                                    </div>
                                    <div class="col-3 mt-3 float-end">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Save Changes">
                                    </div>
                                </form>
                            </div>
                            {{-- End Facebook Comments --}}

                            {{-- Cookies Warning --}}
                            <div class="tab-pane fade" id="primarycookies" role="tabpanel">
                                <form action="{{route('admin.settings.store.cookies.warning')}}" method="post" class="row fw-bold">
                                    @csrf

                                    {{-- Show Cookies Warning --}}
                                    <div class="col-12 mt-3">
                                        <div class="row g-sm-2">
                                            <div class="col-md-4 col-sm-12">
                                                <label class="fw-bold">Show Cookies Warning</label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-12">
                                                <input type="radio" name="menu_cookies" value="1" checked>
                                                <label class="cursor-pointer">Yes</label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-12">
                                                <input type="radio" name="menu_cookies" value="0">
                                                <label class="cursor-pointer">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Cookies Text Warning --}}
                                    <div class="col-12 mt-3">
                                        <textarea name="cookies_text" id="" class="form-control"
                                            placeholder="Show Cookies Warning" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="col-3 mt-3 float-end">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Save Changes">
                                    </div>
                                </form>
                            </div>
                            {{-- End Cookies Warning --}}

                            {{-- Custom CSS Codes --}}
                            <div class="tab-pane fade" id="primarycustom" role="tabpanel">
                                <form action="{{route('admin.settings.store.custom.css')}}" method="POST" class="row fw-bold">
                                    @csrf

                                    {{-- Custom CSS Codes --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Custom CSS Codes <small>(These codes will be added to
                                                the header of the site.)</small></label>

                                        <textarea name="custom_css" id="" class="form-control"
                                            placeholder="Custom CSS Codes" cols="30" rows="10" style="height:200px;"></textarea>
                                        {{-- E.g. <style> body {background-color: #00a65a;} </style> --}}
                                    </div>
                                    <div class="col-3 mt-3 float-end">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Save Changes">
                                    </div>
                                </form>
                            </div>
                            {{-- Custom CSS Codes --}}

                            {{-- Custom JavaScript Codes --}}
                            <div class="tab-pane fade" id="primarycustomjs" role="tabpanel">
                                <form action="{{ route('admin.settings.store.custom.js')}}" method="POST" class="row fw-bold">
                                    @csrf

                                    {{-- Custom JavaScript Codes (These codes will be added to the footer of the site.) --}}
                                    <div class="col-12 mt-3">
                                        <label class="form-label">Custom JavaScript Codes <small>(These codes will be
                                                added to the footer of the site.)<small></label>

                                        <textarea name="custom_js" id="" class="form-control"
                                            placeholder="Custom JavaScript Codes" cols="30" rows="10" style="height:200px;"></textarea>
                                    </div>
                                    <div class="col- mt-3 ">
                                        <input type="submit" class="btn btn-sm btn-primary" value="Save Changes">
                                    </div>
                                </form>
                            </div>
                            {{-- End  Custom JavaScript Codes --}}
                        </div>
                    </div>

            </x-bootstrap.card>

        </div>

        <div class="row">
            {{-- Google reCAPTCHA --}}
            <div class="col-12 col-xl-6">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <span>Google reCAPTCHA</span>
                    </x-slot>

                    <x-slot name="content">
                        <form action="{{route('admin.settings.store.GoogleReCAPTCHA')}}" method="POST" class="row fw-bold">
                            @csrf
                        {{-- Site Key --}}
                        <div class="col-12 mt-3">
                            <label class="form-label">
                                Site Key
                            </label>
                            <input type="text" class="form-control" name="site_key" placeholder="Site Key" required>
                        </div>
                        {{-- Secret Key --}}
                        <div class="col-12 mt-3">
                            <label class="form-label">
                                Secret Key
                            </label>
                            <input type="text" class="form-control" name="secret_key" placeholder="Secret Key" required>
                        </div>
                        {{-- Language --}}
                        <div class="col-12 mt-3">
                            <label class="form-label">
                                Language
                            </label>
                            <input type="text" class="form-control" name="language" placeholder="en" required>
                            <a href="https://developers.google.com/recaptcha/docs/language"
                                class="nav-link">https://developers.google.com/recaptcha/docs/language</a>
                        </div>
                        <div class="col-3 mt-3 float-end">
                            <input type="submit" class="btn btn-sm btn-primary" value="Save Changes">
                        </div>
                    </form>
                    </x-slot>
                </x-bootstrap.card>
            </div>
            {{-- End Google reCAPTCHA --}}

            {{-- Maintenance Mode --}}
            <div class="col-12 col-xl-6">
                <x-bootstrap.card>
                    <x-slot name="title">
                        <span>Maintenance Mode</span>
                    </x-slot>
                    <x-slot name="content">
                <form action="{{route('admin.settings.store.MaintenanceMode')}}" method="POST" class="row fw-bold">
                    @csrf
                        {{-- Title --}}
                        <div class="col-12 mt-3">
                            <label class="form-label">
                                Title
                            </label>
                            <input type="text" class="form-control" name="title" placeholder="Comming Soon" required>
                        </div>
                        {{-- Description --}}
                        <div class="col-12 mt-3">
                            <label class="form-label">
                                Description
                            </label>
                            <textarea name="description" id="" cols="30" class="form-control" rows="10"
                                placeholder="Description" style="height:150px;"></textarea>
                        </div>

                        {{-- Status --}}
                        <div class="col-12 mt-3">
                            <div class="row g-sm-2">
                                <div class="col-md-4 col-sm-12">
                                    <label class="fw-bold">Status</label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12">
                                    <input type="radio" name="menu_status" value="1" checked>
                                    <label class="cursor-pointer">Enable</label>
                                </div>
                                <div class="col-lg-2 col-md-4 col-sm-12">
                                    <input type="radio" name="menu_status" value="0">
                                    <label class="cursor-pointer">Disable</label>
                                </div>
                            </div>
                        </div>
                        {{-- Image --}}
                        <div class="col-12 mt-3">
                            <label class="form-label">
                                Image: assets/img/maintenance_bg.jpg
                            </label>
                        </div>
                        <div class="col-3 mt-3 float-end">
                            <input type="submit" class="btn btn-sm btn-primary" value="Save Changes">
                        </div>
                </form>
                    </x-slot>
                </x-bootstrap.card>
            </div>
            {{-- End Maintenance Mode --}}
        </div>
    </div>
</div>
<!--end page wrapper -->
@endsection

@push('js')
    <script>
        $(document).ready(function () {
            var table = $('#example').DataTable({
                lengthChange: true,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example_wrapper .col-md-6:eq(0)');
        });

    </script>

    <script>
        tinymce.init({
            selector: 'textarea#basic-example',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });

    </script>
    <script>
		tinymce.init({
		  selector: '#mytextarea'
		});
	</script>
    <script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
	</script>

@endpush
