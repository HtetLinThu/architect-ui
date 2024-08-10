<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo">
            <div class="tw-flex tw-items-center">
                <img src="{{ asset('assets/images/logo.png') }}" class="tw-w-12" alt="">
                <div class="tw-pl-2 tw-text-left">
                    <h6 class="mb-0 tw-line-clamp-1">Architect UI</h6>
                </div>
            </div>
        </div>

        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user mr-2"></i> Profile
                </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-sign-out-alt mr-2"></i> Logout
                </a>
            </div>
        </div>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <ul class="header-megamenu nav">
            </ul>
        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img class="rounded-circle" src="#" alt="" style="max-width:100%;height:40px;">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user mr-2"></i> Profile
                                    </a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-sign-out-alt mr-2"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">Username</div>
                            <div class="widget-subheading">username@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>