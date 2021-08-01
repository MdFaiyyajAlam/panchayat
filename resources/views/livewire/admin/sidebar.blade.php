<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">{{ config('app.name', '') }}</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>

    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li class="menu-label">MAIN NAVIGATION</li>
        {{-- Dashboard --}}
        <li>
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        {{-- Navigation --}}
        <li>
            <a href="{{route('admin.navigation.view')}}">
                <div class="parent-icon"><i class='bx bx-grid-alt'></i>
                </div>
                <div class="menu-title">Navigation</div>
            </a>
        </li>
        {{-- Pages --}}
        {{-- <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-file'></i>
                </div>
                <div class="menu-title">Pages</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Add Page</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Pages</a>
                </li>
            </ul>
        </li> --}}
        {{-- Categories --}}
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-folder-open'></i>
                </div>
                <div class="menu-title">Categories</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.category.view') }}"><i class="bx bx-right-arrow-alt"></i>Categories</a>
                </li>
                <li> <a href="{{ route('admin.subcategory.view')}}"><i class="bx bx-right-arrow-alt"></i>Subcategories</a>
                </li>
            </ul>
        </li>
        {{-- Add Post --}}
        <li>
            <a href="{{route('admin.post.format')}}">
                <div class="parent-icon"><i class='bx bx-file-blank'></i>
                </div>
                <div class="menu-title">Add Post</div>
            </a>
        </li>
        {{-- Bulk Posts --}}
        <li>
            <a href="{{route('admin.post.bulkPost')}}">
                <div class="parent-icon"><i class='bx bx-cloud-upload'></i>
                </div>
                <div class="menu-title">Bulk Post Upload</div>
            </a>
        </li>
        {{-- Posts --}}
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-menu'></i>
                </div>
                <div class="menu-title">Posts</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.post.view')}}"><i class="bx bx-right-arrow-alt"></i>Posts</a>
                </li>
                <li>
                    <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Slider Posts</a>
                </li>
                <li>
                    <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Featured Posts</a>
                </li>
                <li>
                    <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Breaking Posts</a>
                </li>
                <li>
                    <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Recommended Posts</a>
                </li>
                <li>
                    <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Pending Posts</a>
                </li>
                <li>
                    <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Scheduled Posts</a>
                </li>
                <li>
                    <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Drafts Posts</a>
                </li>
            </ul>
        </li>
        {{-- Widget --}}
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon"><i class='bx bxs-grid'></i>
                </div>
                <div class="menu-title">Widget</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Add Widget</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Widgets</a>
                </li>
            </ul>
        </li>
        {{-- Polls --}}
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-list-ul'></i>
                </div>
                <div class="menu-title">Polls</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Add Poll</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Polls</a>
                </li>
            </ul>
        </li>
        {{-- Gallery --}}
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-image' ></i>
                </div>
                <div class="menu-title">Gallery</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Add Gallery</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Images</a>
                </li>
            </ul>
        </li>
        {{-- Contact Messages --}}
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bxl-telegram'></i>
                </div>
                <div class="menu-title">Contact Messages</div>
            </a>
        </li>
        {{-- Comments --}}
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-message-rounded-dots'></i>
                </div>
                <div class="menu-title">Comments</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Pending Comments</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Approved Comments</a>
                </li>
            </ul>
        </li>
        {{-- Newsletter --}}
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-envelope'></i>
                </div>
                <div class="menu-title">Newsletter</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Send Email to Subscribers</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Subscribers</a>
                </li>
            </ul>
        </li>
        {{-- Users --}}
        <li>
            <a href="javascript:void(0);" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-group'></i>
                </div>
                <div class="menu-title">Users</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Add Users</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Administrators</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Users</a>
                </li>
            </ul>
        </li>
        {{-- Roles & Permissions --}}
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-key'></i>
                </div>
                <div class="menu-title">Roles & Permissions</div>
            </a>
        </li>
        {{-- SEO Tools --}}
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-wrench'></i>
                </div>
                <div class="menu-title">SEO Tools</div>
            </a>
        </li>
        {{-- Social Login Configuration --}}
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-share-alt'></i>
                </div>
                <div class="menu-title">Social Login Configuration</div>
            </a>
        </li>
        {{-- Cache System --}}
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-data'></i>
                </div>
                <div class="menu-title">Cache System</div>
            </a>
        </li>
        <li class="menu-label">SETTINGS</li>
        {{-- Preferences --}}
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-check-square'></i>
                </div>
                <div class="menu-title">Preferences</div>
            </a>
        </li>
        {{-- Route Settings --}}
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bxs-traffic-barrier'></i>
                </div>
                <div class="menu-title">Route Settings</div>
            </a>
        </li>
        {{-- Email Settings --}}
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-cog' ></i>
                </div>
                <div class="menu-title">Email Settings</div>
            </a>
        </li>
        {{-- Visual Settings --}}
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bx-paint' ></i>
                </div>
                <div class="menu-title">Visual Settings</div>
            </a>
        </li>
        {{-- Font Settings --}}
        <li>
            <a href="{{route('admin.settings.font')}}">
                <div class="parent-icon"><i class='bx bx-font' ></i>
                </div>
                <div class="menu-title">Font Settings</div>
            </a>
        </li>
        {{-- Languages Settings --}}
        <li>
            <a href="{{route('admin.settings.language')}}">
                <div class="parent-icon"><i class='bx bx-font-family' ></i>
                </div>
                <div class="menu-title">Languages Settings</div>
            </a>
        </li>
        {{-- General Settings --}}
        <li>
            <a href="{{route('admin.settings.index')}}">
                <div class="parent-icon"><i class='bx bx-cog' ></i>
                </div>
                <div class="menu-title">General Settings</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
