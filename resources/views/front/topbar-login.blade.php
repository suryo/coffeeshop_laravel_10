<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <span class="logo-lg">
                    <img src="{{ URL::asset('/assets/images/coffeeshop.png') }}" alt="" height="80">
                </span>
            </div>

            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search..." size="100">
                    <span class="uil-search"></span>
                </div>
            </form>
        </div>

        <div class="d-flex">
            <div class="d-inline-block">
                <a type="button" class="btn header-item noti-icon right-bar-toggle waves-effect" href="#">
                    <i class="uil-shopping-cart" style="font-size: 30px"></i>
                </a>
            </div>
            <div class="d-inline-block">
                <a type="button" class="btn header-item noti-icon right-bar-toggle waves-effect" href="/login">
                    <i class="uil-signin" style="font-size: 30px"></i>
                </a>
            </div>
        </div>
    </div>
</header>