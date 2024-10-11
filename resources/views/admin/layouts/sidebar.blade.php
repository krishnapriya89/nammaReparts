<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rocker</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard')}}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        <li>
            <a href="{{route('category.index')}}">
                <div class="parent-icon"><i class='bx bx-wrench'></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
        </li>
        <li>
            <a href="{{route('subcategory.index')}}">
                <div class="parent-icon"><i class='bx bx-cog'></i>
                </div>
                <div class="menu-title">Sub Category</div>
            </a>
        </li>
        <li>
            <a href="{{route('vehicle_brand.index')}}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Vehicle Brand</div>
            </a>
        </li>
        <li>
            <a href="{{route('vehicle_model.index')}}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Vehicle Model</div>
            </a>
        </li>
        <li>
            <a href="{{route('vehicle_part.index')}}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Vehicle Parts</div>
            </a>
        </li>

    </ul>
    <!--end navigation-->
</div>