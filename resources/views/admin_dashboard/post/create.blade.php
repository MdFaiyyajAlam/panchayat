@extends('layouts.admin.app')

@section('main')
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="fs-5 fw-bold text-dark">Add Article</div>
            <a href="{{ route('admin.post.view') }}" role="button" class="btn btn-primary btn-sm d-flex align-items-center">
                <i class='bx bx-menu me-1'></i>
                Posts
            </a>
        </div>
        <hr>
        
        <!-- form start -->
        <form action="{{ route('admin.post.store') }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            @csrf
            <input type="hidden" name="post_type" value="article">
            <div class="row">
                <div class="col-xl-8">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-column">
                                    <h5 class="mb-0">Post Details</h5>
                                </div>
                            </div>

                            {{-- validation --}}
                            <x-jet-validation-errors class="mb-2 text-danger" />

                            {{-- title --}}
                            <div class="col-12 mt-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
                            </div>
                            {{-- slug --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Slug
                                    <small>(If you leave it blank, it will be generated automatically.)</small>
                                </label>
                                <input type="text" class="form-control" name="slug" placeholder="Slug">
                            </div>
                            {{-- description --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Summary & Description (Meta Tag)</label>
                                <textarea class="form-control" name="description" placeholder="Summary & Description (Meta Tag)" ></textarea>
                            </div>
                            {{-- keywords --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Keywords (Meta Tag)</label>
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords (Meta Tag)">
                            </div>
                            {{-- visibility --}}
                            <div class="col-12 mt-3">
                                <div class="row g-sm-2">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="fw-bold">Visibility</label>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-12">
                                        <input type="radio" id="rb_visibility_1" name="visibility" value="1" checked>
                                        <label for="rb_visibility_1" class="cursor-pointer">Show</label>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-12">
                                        <input type="radio" id="rb_visibility_2" name="visibility" value="0">
                                        <label for="rb_visibility_2" class="cursor-pointer">Hide</label>
                                    </div>
                                </div>
                            </div>
                            {{-- show right column--}}
                            <div class="col-12 mt-3">
                                <div class="row g-sm-2">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="fw-bold">Show Right Column</label>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-12">
                                        <input type="radio" name="show_right_column" value="1" id="right_column_enabled" checked>
                                        <label for="right_column_enabled" class="option-label">Yes</label>
                                    </div>
                                    <div class="col-lg-2 col-md-4 col-sm-12">
                                        <input type="radio" name="show_right_column" value="0" id="right_column_disabled">
                                        <label for="right_column_disabled" class="option-label">No</label>
                                    </div>
                                </div>
                            </div>
                            {{-- featured --}}
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="form-label fw-bold">Add to Featured</label>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="checkbox" name="is_featured" value="1" >
                                    </div>
                                </div>
                            </div>
                            {{-- breaking --}}
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="form-label fw-bold">Add to Breaking</label>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="checkbox" name="is_breaking" value="1">
                                    </div>
                                </div>
                            </div>
                            {{-- slider --}}
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="form-label fw-bold">Add to Slider</label>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="checkbox" name="is_slider" value="1">
                                    </div>
                                </div>
                            </div>
                            {{-- recommended --}}
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="form-label fw-bold">Add to Recommended</label>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="checkbox" name="is_recommended" value="1">
                                    </div>
                                </div>
                            </div>
                            {{-- Show Only to Registered Users --}}
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="form-label fw-bold">Show Only to Registered Users</label>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="checkbox" name="show_auth" value="1">
                                    </div>
                                </div>
                            </div>
                            {{-- Send Post to All Subscribers (Newsletter) --}}
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12">
                                        <label class="form-label fw-bold">Send Post to All Subscribers (Newsletter)</label>
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="checkbox" name="send_to_subscribes" value="1">
                                    </div>
                                </div>
                            </div>
                            {{-- Tags --}}
                            <div class="col-12 mt-3">
                                <label class="form-label fw-bold">Tags</label>
                                <input type="text" name="tags" class="form-control" data-role="tagsinput" placeholder="Tags">
                                <small>(Type tag and hit enter)</small>
                            </div>
                            {{-- Optional URL --}}
                            <div class="col-12 mt-3">
                                <label class="form-label fw-bold">Optional URL</label>
                                <input type="text" class="form-control" name="optional_url" placeholder="Optional URL">
                            </div>
                        </div>
                    </div>
                    {{-- content --}}
                    <div id="main_editor">
                        <div class="row">
                            <div class="col-sm-12 editor-buttons">
                                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#file_manager_image" data-image-type="editor">
                                    <i class="bx bx-image"></i>
                                    Add Image
                                </button>
                            </div>
                        </div>
                        <textarea class="tinyMCE form-control" name="content"></textarea>
                    </div>
                </div>
                <div class="col-xl-4">
                    {{-- main post image --}}
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="d-flex flex-column fs-6 mb-3">
                                <div class="fw-bold">Image</div>
                                <small class="small">Main post image</small>
                            </div>
                            <div id="post_select_image_container" class="post-select-image-container">
                                <a class="btn-select-image" data-bs-toggle="modal" data-bs-target="#file_manager_image" data-image-type="main">
                                    <div class="btn-select-image-inner">
                                        <i class="bx bx-images"></i>
                                        <button class="btn">Select Image</button>
                                    </div>
                                </a>
                            </div>
                            <input type="text" name="post_image_id" id="post_image_id">
                            <div class="col-12 mt-3">
                                <label for="title" class="form-label fw-bold">or&nbsp;Add Image Url</label>
                                <input type="text" name="image_url" class="form-control" id="video_thumbnail_url" placeholder="Add Image Url">
                            </div>
                            <div class="col-12 mt-3">
                                <label class="form-label fw-bold">Image Description</label>
                                <input type="text" class="form-control" name="image_description" placeholder="Image Description" >
                            </div>
                        </div>
                    </div>
                    {{-- additional images --}}
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="fw-bold">Additional Images</div>
                            <p class="small">More main images (slider will be active)</p>
                            <a class='btn btn-sm btn-primary' data-toggle="modal" data-target="#file_manager_image" data-image-type="additional">
                                Select Image
                            </a>
                        </div>
                    </div>
                    {{-- files --}}
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="fw-bold">Files</div>
                            <p class="small">Downloadable additional files (.pdf, .docx, .zip etc..)</p>
                            <a class='btn btn-sm btn-primary' data-toggle="modal" data-target="#file_manager">
                                Select File
                            </a>
                        </div>
                    </div>
                    {{-- category --}}
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="mb-3 fw-bold">Category</div>
                            {{-- language --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Language</label>
                                <select name="lang_id" class="form-select" onchange="get_parent_categories_by_lang(this.value);">
                                    <option value="1" selected>English</option>
                                </select>
                            </div>
                            {{-- category --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Category</label>
                                <select id="categories" name="category_id" class="form-select" onchange="get_sub_categories(this.value);" required>
                                    <option value="">Select a category</option>
                                </select>
                            </div>
                            {{-- subcategory --}}
                            <div class="col-12 mt-3">
                                <label class="form-label">Subcategory</label>
                                <select id="subcategories" name="subcategory_id" class="form-select">
                                    <option value="0">Select a category</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    {{-- publish --}}
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="mb-3 fw-bold">Publish
                            </div>
                            <div class="form-check mt-3 col-12">
                                <label class="form-check-label">
                                    Scheduled Post
                                </label>
                                <input class="form-check-input" type="checkbox" name="scheduled_post" value="1" id="cb_scheduled">
                            </div>
                            <div class="col-12 mt-3 scheduled-date d-none">
                                <div class="mb-3">
                                    <label class="form-label">Date Published</label>
                                    <div class="input-group mb-3">
                                        <input class="result form-control" type="text" name="date_published" id="date-time" placeholder="Date Picker...">
                                        <span class="input-group-text">
                                            <i class="bx bxs-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" name="status" value="0" class="btn btn-warning btn-sm">Save as Draft</button>
                                <button type="submit" name="status" value="1" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
        <!-- Button trigger modal -->
          
        <!-- Modal -->
        <div id="file_manager_image" class="modal fade modal-file-manager" role="dialog">
            <div class="modal-dialog modal-xl">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Images</h5>
                        <div class="file-manager-search d-none d-lg-flex">
                            <input type="text" id="input_search_image" class="form-control" placeholder="Search">
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="file-manager-search d-lg-none mx-3">
                        <input type="text" id="input_search_image" class="form-control" placeholder="Search">
                    </div>
                    <div class="modal-body">
                        <div class="file-manager">
                            <div class="file-manager-left">
                                <div class="dm-uploader-container">
                                    <div id="drag-and-drop-zone-image" class="dm-uploader text-center">
                                        <p class="file-manager-file-types">
                                            <span>JPG</span>
                                            <span>JPEG</span>
                                            <span>PNG</span>
                                            <span>GIF</span>
                                        </p>
                                        <p class="dm-upload-icon">
                                            <i class='bx bx-cloud-upload' ></i>
                                        </p>
                                        <p class="dm-upload-text">Drag and drop files here or</p>
                                        <p class="text-center">
                                            <button class="btn btn-outline-secondary btn-browse-files btn-sm">Browse Files</button>
                                        </p>
                                        <a class='btn btn-sm dm-btn-select-files'>
                                            <input type="file" name="file" size="40" multiple="multiple">
                                        </a>
                                        <ul class="dm-uploaded-files" id="files-image"></ul>
                                        <button type="button" id="btn_reset_upload_image" class="btn btn-sm btn-reset-upload">Reset</button>
                                    </div>
                                </div>
                            </div>
        
                            <div class="file-manager-right">
                                <div class="file-manager-content">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div id="image_file_upload_response"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="selected_img_file_id">
                            <input type="hidden" id="selected_img_mid_file_path">
                            <input type="hidden" id="selected_img_default_file_path">
                            <input type="hidden" id="selected_img_slider_file_path">
                            <input type="hidden" id="selected_img_big_file_path">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btn_img_delete" class="btn btn-danger btn-sm btn-file-delete">
                            <i class="bx bx-trash bx-xs pb-1"></i>
                            Delete
                        </button>
                        <button type="button" id="btn_img_select" class="btn btn-sm btn-info btn-file-select">
                            <i class="bx bx-check bx-xs pb-1"></i>
                            Select Image
                        </button>
                        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
          
        <!-- Modal -->
        <div id="file_manager" class="modal fade modal-file-manager" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Files</h4>
                        <div class="file-manager-search">
                            <input type="text" id="input_search_file" class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="file-manager">
                            <div class="file-manager-left">
                                <div class="dm-uploader-container">
                                    <div id="drag-and-drop-zone" class="dm-uploader text-center">
                                        <p class="dm-upload-icon">
                                            <i class="fa fa-cloud-upload"></i>
                                        </p>
                                        <p class="dm-upload-text">Drag and drop files here or</p>
                                        <p class="text-center">
                                            <button class="btn btn-default btn-browse-files">Browse Files</button>
                                        </p>
        
                                        <a class='btn btn-md dm-btn-select-files'>
                                            <input type="file" name="file" size="40" multiple="multiple">
                                        </a>
                                        <ul class="dm-uploaded-files" id="files-file"></ul>
                                        <button type="button" id="btn_reset_upload" class="btn btn-reset-upload">Reset</button>
                                    </div>
                                </div>
                            </div>
        
                            <div class="file-manager-right">
                                <div class="file-manager-content">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div id="file_upload_response"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="selected_file_id">
                            <input type="hidden" id="selected_file_name">
                            <input type="hidden" id="selected_file_path">
                        </div>
                    </div>
        
                    <div class="modal-footer">
                        <button type="button" id="btn_file_delete" class="btn btn-danger pull-left btn-file-delete"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
                        <button type="button" id="btn_file_select" class="btn bg-olive btn-file-select"><i class="fa fa-check"></i>&nbsp;&nbsp;Select File</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!--end page wrapper -->
@endsection

@push('js')
<script>
    // hide delete & select model button
    $('#btn_img_delete').hide();
    $('#btn_img_select').hide();
    $('[data-bs-dismiss="modal"]').click(function (){
        $('#btn_img_delete').hide();
        $('#btn_img_select').hide();
    });

    
    var post_type = "article";
    var text_select_a_result = "Select a result";
    var text_result = "Result";
    //warn before close the page
    var allow_submit_form = false;
    window.onbeforeunload = function () {
        if ($('#wr_input_post_title').val().trim().length > 0) {
            if (allow_submit_form == false) {
                return 'You have unsaved changes! Are you sure you want to leave this page?';
            }
        }
    };
    // scheduled date
    $('#cb_scheduled').click(function(){
        let scheduled = document.querySelector('.scheduled-date');
        scheduled.classList.toggle('d-none');
    });
    
    // datetime-picker
    $(function () {
        $('#date-time').bootstrapMaterialDatePicker({
            format: 'YYYY-MM-DD HH:mm'
        });
        $('#date').bootstrapMaterialDatePicker({
            time: false
        });
        $('#time').bootstrapMaterialDatePicker({
            date: false,
            format: 'HH:mm'
        });
    });
</script>

<script>
    var get_url = "{{route('admin.postGallery.view')}}";
    var delete_url = "{{url('admin/post-gallery/delete') . '/'}}";
    // var select_url = "{{route('admin.postGallery.view')}}";
    var fb_app_id = "";
    var txt_select_image = "Select Image";
    var sweetalert_ok = "OK";
    var sweetalert_cancel = "Cancel";
</script>

<!-- File item template -->
<script type="text/html" id="files-template-image">
    <li class="media">
        <img class="preview-img" src="{{ asset('assets/admin/plugins/file-manager/file.png') }}" alt="">
        <div class="media-body">
            <div class="progress">
                <div class="dm-progress-waiting"></div>
                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </li>
</script>

<script>
    var txt_processing = "Processing...";
    $(function () {
        $('#drag-and-drop-zone-image').dmUploader({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('admin.postGallery.store') }}",
            queue: true,
            allowedTypes: 'image/*',
            extFilter: ["jpg", "jpeg", "png", "gif"],
            extraData: function (id) {
                return {
                    "file_id": id,
                };
            },
            onDragEnter: function () {
                this.addClass('active');
            },
            onDragLeave: function () {
                this.removeClass('active');
            },
            onInit: function () {
            },
            onComplete: function (id) {
            },
            onNewFile: function (id, file) {
                ui_multi_add_file(id, file, "image");
                if (typeof FileReader !== "undefined") {
                    var reader = new FileReader();
                    var img = $('#uploaderFile' + id).find('img');

                    reader.onload = function (e) {
                        img.attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            },
            onBeforeUpload: function (id) {
                $('#uploaderFile' + id + ' .dm-progress-waiting').hide();
                ui_multi_update_file_progress(id, 0, '', true);
                ui_multi_update_file_status(id, 'uploading', 'Uploading...');
                $("#btn_reset_upload_image").show();
            },
            onUploadProgress: function (id, percent) {
                ui_multi_update_file_progress(id, percent);
            },
            onUploadSuccess: function (id, data) {
                document.getElementById("uploaderFile" + id).remove();
                refresh_images();
                ui_multi_update_file_status(id, 'success', 'Upload Complete');
                ui_multi_update_file_progress(id, 100, 'success', false);
                $("#btn_reset_upload_image").hide();
            },
            onUploadError: function (id, xhr, status, message) {
                if (message == "Not Acceptable") {
                    $("#uploaderFile" + id).remove();
                    $(".error-message-img-upload").show();
                    $(".error-message-img-upload p").html("");
                    setTimeout(function () {
                        $(".error-message-img-upload").fadeOut("slow");
                    }, 4000)
                }
            },
            onFallbackMode: function () {
            },
            onFileSizeError: function (file) {
            },
            onFileTypeError: function (file) {
            },
            onFileExtError: function (file) {
            },
        });
    });

    $(document).on('click', '#btn_reset_upload_image', function () {
        $("#drag-and-drop-zone-image").dmUploader("reset");
        $("#files-image").empty();
        $(this).hide();
    });
</script>

<!-- File item template -->
<script type="text/html" id="files-template-file">
    <li class="media">
        <img class="preview-img" src="https://biharyojna.com/assets/admin/plugins/file-manager/file.png" alt="">
        <div class="media-body">
            <div class="progress">
                <div class="dm-progress-waiting"></div>
                <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </li>
</script>

<script>
    var txt_processing = "Processing...";
    $(function () {
        $('#drag-and-drop-zone').dmUploader({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ route('admin.postGallery.store')}}",
            queue: true,
            extraData: function (id) {
                return {
                    "file_id": id,
                };
            },
            onDragEnter: function () {
                this.addClass('active');
            },
            onDragLeave: function () {
                this.removeClass('active');
            },
            onInit: function () {
            },
            onComplete: function (id) {
            },
            onNewFile: function (id, file) {
                ui_multi_add_file(id, file, "file");
            },
            onBeforeUpload: function (id) {
                $('#uploaderFile' + id + ' .dm-progress-waiting').hide();
                ui_multi_update_file_progress(id, 0, '', true);
                ui_multi_update_file_status(id, 'uploading', 'Uploading...');
                $("#btn_reset_upload").show();
            },
            onUploadProgress: function (id, percent) {
                ui_multi_update_file_progress(id, percent);
            },
            onUploadSuccess: function (id, data) {
                refresh_files();
                document.getElementById("uploaderFile" + id).remove();
                ui_multi_update_file_status(id, 'success', 'Upload Complete');
                ui_multi_update_file_progress(id, 100, 'success', false);
                $("#btn_reset_upload").hide();
            },
            onUploadError: function (id, xhr, status, message) {
            },
            onFallbackMode: function () {
            },
            onFileSizeError: function (file) {
            },
            onFileTypeError: function (file) {
            },
            onFileExtError: function (file) {
            },
        });
    });


    $(document).on('click', '#btn_reset_upload', function () {
        $("#drag-and-drop-zone").dmUploader("reset");
        $("#files-file").empty();
        $(this).hide();
    });
</script>

@endpush