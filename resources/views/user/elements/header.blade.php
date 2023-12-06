<header id="header" class="d-flex align-items-center" style="height: auto; top: 20px">
    <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="left-wrap">
            <?php
            use Illuminate\Support\Facades\Auth;$footer_setting = \App\Models\FooterSetting::all()
            ?>
            @foreach($footer_setting as $footer_setting)

                <div id="logo">
                    <h1 style="inline-size: max-content" class="logo"><a href="index.html">{{$footer_setting->name}}<span>.</span></a></h1>
                </div>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
            @endforeach

            <nav id="navbar" class="navbar">

                <ul>
                    <li><a class="nav-link scrollto {{ Route::is('user.pages.home') ? 'active' : '' }}"
                           href="{{ route('user.pages.home') }}">Home</a></li>
                    <li><a class="nav-link scrollto {{ Route::is('user.pages.viec-lam') ? 'active' : '' }}"
                           href="{{ route('user.pages.viec-lam') }}">Tìm việc làm</a></li>
                    <li><a class="nav-link scrollto {{ Route::is('pages.nha-tuyen-dung') ? 'active' : '' }}"
                           href="{{ route('pages.nha-tuyen-dung') }}">Nhà tuyển dụng</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>

                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li class="mobile-li-toggle"><a href="#" title="Thông Báo Việc Làm"><span class="mdi mdi-bell">&nbsp;Thông báo</span></a>
                    </li>
                    <li class="mobile-li-toggle"
                    <?php
                        if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                            echo 'hidden';
                        }
                        ?>><a class="nav-link scrollto" href="{{ route('user.pages.login_page') }}"><span
                                class="mdi mdi-account-circle">&nbsp;Đăng nhập</span></a>
                    </li>
                    <li class="dropdown mobile-li-toggle" <?php
                        if (Auth::check() == false || Auth::user()->id_nhomquyen == 1) {
                            echo 'hidden';
                        }
                        ?>>
                        <a href="/" class="{{ Route::is('information') ? 'active' : '' }} nav-link scrollto">
                            <?php
                            if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                                echo '<span class="mdi mdi-account-circle">&nbsp;' . Auth::user()->ten . '</span>';
//                            echo Auth::user()->ten;
                                echo '<i class="bi bi-chevron-down"></i>';
                            }
                            ?>
                        </a>
                        <ul>
                            @if(isset(Auth::user()->id_nhomquyen))
                                @if(Auth::user()->id_nhomquyen == 0)
                                    <li><a style="font-weight: 700;" href="{{ route('profile') }}"> &nbsp; Quản Lí Hồ
                                            Sơ</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('CV') }}"> &nbsp; Hồ sơ xin việc</a>
                                    </li>
                                    <li><a style="font-weight: 700;" href="{{ route('viec-lam-da-luu') }}"> &nbsp; Việc
                                            làm đã lưu</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('viec-lam-da-nop') }}"> &nbsp; Việc
                                            làm đã ứng tuyển</a></li>
                                    <li><a style="font-weight: 700;" href="{{ route('information') }}"> &nbsp; Tài
                                            khoản</a></li>
                                @endif
                            @endif

                            <li><a style="font-weight: 700;" href="{{ route('logout') }}"> &nbsp; Đăng xuất</a></li>
                        </ul>
                    </li>

                    <li class="mobile-li-toggle" <?php
                        if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                            echo 'hidden';
                        }
                        ?> ><a class="nav-link scrollto" href="{{route('user.pages.register_page')}}"><span
                                class="">Đăng ký</span></a>
                    </li>
                    <li class="mobile-li-toggle">
                        <a class="nav-link scrollto" href="{{ route('employer.home') }}"
                           title="Đăng tuyển, Tìm ứng viên">
                            <span class="mdi mdi-chevron-right">Dành cho nhà tuyển dụng</span>

                        </a>
                    </li>
                </ul>

                <div class="button-hambuger">
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </div>

            </nav>
            <input type="hidden" value="" id="control_page">

        </div>
        <div class="right-wrap">
            <div class="main-noti dropdown">
                <a href="https://careerbuilder.vn/thong-bao-viec-lam" title="Thông Báo Việc Làm">
                    <span class="mdi mdi-bell"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="noti">
                        <p></p>
                        <p>Chào mừng bạn đến CareerBuilder.vn</p>
                        <p>Tạo thông báo việc làm để xem việc làm phù hợp với bạn, nhà tuyển dụng đã xem hồ sơ của bạn
                            và cập nhật nhiều hơn nữa ...<br><br></p>
                        <p></p>
                        <a class="email" href="https://careerbuilder.vn/thong-bao-viec-lam" title="Tạo Ngay">
                            Tạo Ngay
                        </a>
                    </div>
                </div>
            </div>
            <div class="main-login"
            <?php
                if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                    echo 'hidden';
                }
                ?>>
                <div class="title-login">
                    <a class="" href="{{ route('user.pages.login_page') }}"><span
                            class="mdi mdi-account-circle"></span>&nbsp;Đăng nhập</a>
                </div>


            </div>
            <div class="main-register"
            <?php
                if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                    echo 'hidden';
                }
                ?>
            >
                <a class="" href="{{route('user.pages.register_page')}}" title="Đăng ký">Đăng ký</a>
            </div>
            <div class="main-login logged dropdown"
            <?php
                if (Auth::check() == false || Auth::user()->id_nhomquyen == 1) {
                    echo 'hidden';
                }
                ?>>
                <a href="{{ route('profile') }}" rel="nofollow">
                    <span class="mdi mdi-account-circle"></span>
                    Chào
                    <span class="name">
                            <?php
                        if (Auth::check() == true && Auth::user()->id_nhomquyen == 0) {
                            echo Auth::user()->ten;
                        }?>
                    </span>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        @if(isset(Auth::user()->id_nhomquyen))
                            @if(Auth::user()->id_nhomquyen == 0)
                                <li><a style="font-weight: 700;" href="{{ route('profile') }}"> &nbsp; Quản Lí Hồ
                                        Sơ</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('CV') }}"> &nbsp; Hồ sơ xin việc</a>
                                </li>
                                <li><a style="font-weight: 700;" href="{{ route('viec-lam-da-luu') }}"> &nbsp; Việc
                                        làm đã lưu</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('viec-lam-da-nop') }}"> &nbsp; Việc
                                        làm đã ứng tuyển</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('information') }}"> &nbsp; Tài
                                        khoản</a></li>
                                <li><a style="font-weight: 700;" href="{{ route('logout') }}"> &nbsp; Đăng xuất</a></li>

                            @endif
                        @endif

                    </ul>
                </div>
            </div>
            <div id="employer" class="main-employer dropdown"><a href="{{ route('employer.home') }}"
                                                                 title="Đăng tuyển, Tìm ứng viên">
                    <div class="dropdown-toggle">
                        <h4>Nhà tuyển dụng<em class="mdi mdi-chevron-down"></em></h4>
                        <p>Đăng tuyển, Tìm ứng viên</p>
                    </div>
                </a>
                <div class="dropdown-menu">
                    <ul>
                        <li><a href="https://careerbuilder.vn/vi/employers/login" title="Đăng nhập">Đăng nhập</a>
                        </li>
                        <li><a href="https://careerbuilder.vn/vi/employers/postjobs" title="Đăng Tuyển Dụng">Đăng Tuyển
                                Dụng</a>
                        </li>
                        <li><a href="https://careerbuilder.vn/vi/resume-search.html" title="Tìm Ứng Viên">Tìm Ứng
                                Viên</a>
                        </li>
                        <li><a href="https://careerbuilder.vn/vi/employers/products-and-services"
                               title="Sản phẩm và Dịch vụ">Sản phẩm và Dịch vụ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header><!-- End Header -->
<style>
    @media screen and (max-width: 1200px) {
        #logo {
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            position: absolute;
            top: 50%;
            left: 50%;
            padding-left: 0;
            transform: translate(-50%, -50%);
        }
    }

    @media (max-width: 1200px) {
        .mobile-nav-toggle {
            display: block;
        }

        .navbar ul {
            display: none;
        }

        .navbar-mobile ul {
            display: block;
        }
        header .container-fluid {
            padding: 15px 15px;
        }
    }
    @media (min-width: 1200px) {
        .navbar ul li.mobile-li-toggle{
            display: none;
        }
    }

        .dropdown-toggle::after {
        content: none;
    }
</style>
