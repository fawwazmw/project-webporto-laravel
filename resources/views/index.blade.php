@extends('layout.layout')

@yield('content')
@section('content')
    <!-- Start Header Section -->
    <header class="cs_site_header cs_style_1 cs_type_1 cs_sticky_header cs_site_header_full_width">
        <div class="cs_main_header">
            <div class="container">
                <div class="cs_main_header_in">
                    <div class="cs_main_header_left">
                        <a class="cs_site_branding" href="{{ url('index') }}">
                            <img src="assets/img/logo-arfan.svg" alt="Logo">
                        </a>
                    </div>
                    <div class="cs_main_header_center">
                        <div class="cs_nav cs_primary_font font-medium">
                            <ul class="cs_nav_list font-medium uppercase">
                                <!-- Add onclick handlers for smooth scrolling -->
                                <li><a href="javascript:void(0);" onclick="scrollToSection(1)">Home</a></li>
                                <li><a href="javascript:void(0);" onclick="scrollToSection(2)">About</a></li>
                                <li><a href="javascript:void(0);" onclick="scrollToSection(3)">Skills</a></li>
                                <li><a href="javascript:void(0);" onclick="scrollToSection(4)">Projects</a></li>
                                <li><a href="javascript:void(0);" onclick="scrollToSection(5)">Clients</a></li>
                                <li><a href="javascript:void(0);" onclick="scrollToSection(6)">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="cs_main_header_right">
                        <div class="cs_toolbox">
                            <div class="cs_header_contact">
                                <div class="cs_header_contact_icon text-accent">
                                    <!-- Icon SVG (unchanged) -->
                                </div>
                                <div class="cs_header_contact_right">
                                    <h3 class="text-white font-normal cs_mb_6 cs_fs_13">Need help? Call me:</h3>
                                    <h3 class="text-white m-0 cs_fs_13">+62 852-5772-2817</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Section -->

    <!-- Start Hero -->
    <section
        class="cs_hero cs_style_1 cs_type_1 position-relative d-flex align-items-center justify-content-center background-filled position-relative overflow-hidden bg-primary"
        id="section-1" data-src="assets/img/hero_bg.jpeg">
        <div class="cs_hero_imagebox rounded-circle position-absolute">
            <div class="cs_hero_imagebox_mini position-absolute">
                <img src="assets/img/hero-image.svg" alt="Hero" class="w-100 h-100">
            </div>
            <div
                class="cs_hero_imagebox_in overflow-hidden h-100 w-100 rounded-circle d-flex align-items-center justify-content-center position-relative">
                <img src="assets/img/arfan-utama.jpg" alt="main photo">
            </div>
            <div class="cs_hero_imagebox_shape_1 position-absolute">
                <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.6995 0.486699L15.5455 17.8835L0.0564146 9.91778L14.6995 0.486699Z" fill="#5B4100" />
                </svg>
            </div>
            <div class="cs_hero_imagebox_shape_2 position-absolute moving_x"></div>
            <div class="cs_hero_imagebox_shape_3 position-absolute"></div>
        </div>
        <div class="container">
            <div class="cs_hero_text position-relative cs_zindex_5 d-inline-block">
                <h1 class="text-white cs_mb_16 cs_fs_60 cs_fs_lg_46">
                    Hello I'am <br>Arfan Romadhani<br>UI / UX Designer
                </h1>
                <p class="text-white cs_mb_20">
                    Welcome to My Webporto, y'all can look all my things<br>
                </p>
                <div class="cs_hero_btn">
                    <a href="{{ url('index') }}"
                        class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get
                            Started</span></a>
                </div>
            </div>
        </div>
        <div class="cs_hero_shape_1 position-absolute bottom-0 d-flex align-items-end h-100 cs_zindex_1">
            <svg width="870" height="1000" viewBox="0 0 870 1000" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M316.364 0H870L566.818 1000H0L316.364 0Z" fill="url(#paint0_linear_506_265)" />
                <defs>
                    <linearGradient id="paint0_linear_506_265" x1="191.136" y1="337.945" x2="637.701" y2="972.542"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#D9D9D9" stop-opacity="0" offset="0" />
                        <stop offset="1" stop-color="#E9A132" stop-opacity="0.7" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Start About Section -->
    <section class="cs_pb_140 cs_pt_140 cs_pb_lg_80 cs_pt_lg_80 position-relative" id="section-2">
        <div class="container">
            <div class="row align-items-center cs_gap_y_40">
                <div class="col-xxl-6 col-xl-6">
                    <div class="cs_experience cs_style_1 cs_type_1 position-relative">
                        <div class="cs_experience_thumb">
                            <img src="assets/img/arfan-about-us.svg" alt="Thumb"
                                class="position-relative cs_zindex_3 cs_rounded_15">
                        </div>
                        <div class="cs_experience_box background-filled text-center bg-white cs_rounded_10 position-absolute cs_zindex_3 d-flex flex-column justify-content-center align-items-center"
                            data-src="assets/img/arfan-about-us-2.svg">
                            <img src="assets/img/experience_icon.svg" alt="Icon" class="cs_mb_5">
                            <h3 class="text-white cs_fs_60 cs_fs_lg_46 fw-bold lh_1 mb-0 d-flex justify-content-between">
                                <span data-count-to="1" class="odometer"></span>
                                <span class="fw-light">+</span>
                            </h3>
                            <h2 class="cs_fs_18 fw-normal text-white m-0">Work Experience</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xxl-1">
                    <div class="cs_about cs_style_1">
                        <div class="cs_section_heading cs_style_1 cs_mb_25">
                            <div class="cs_section_heading_in">
                                <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInLeft"
                                    data-wow-duration="0.8s" data-wow-delay="0.2s">About Me</h3>
                                <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Trusted UI/UX Design for Your<span
                                        class="text-accent"> Project</span></h2>
                                <p class="m-0">I am Arfan Romadhani, originally from Pamekasan, Madura. Currently, I am
                                    studying in the Information Technology Department of Brawijaya University. I have a
                                    great interest in the field of UI/UX Design, and continue to hone my skills in creating
                                    intuitive interface designs that focus on user experience. I am committed to always
                                    learning and innovating in the world of information technology, especially in providing
                                    effective and user-centered design solutions.
                                </p>
                            </div>
                        </div>
                        <div class="cs_mb_40">
                            <div class="cs_about_icon_box d-flex align-items-center cs_mb_30">
                                <div
                                    class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 flex-none cs_mr_20 bg-gray rounded-circle">
                                    <i class="fa-solid fa-magnifying-glass" style="font-size: 40px; color: #E9A132;"></i>
                                </div>
                                <div>
                                    <h2 class="cs_fs_20 cs_mb_8">User Research</h2>
                                    <p class="m-0">Conduct in-depth analysis to understand user needs and behavior, so
                                        that the design is always user-oriented.</p>
                                </div>
                            </div>
                            <div class="cs_about_icon_box d-flex align-items-center cs_mb_30">
                                <div
                                    class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 flex-none cs_mr_20 bg-gray rounded-circle">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_510_5882)">
                                            <path
                                                d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z"
                                                fill="#E9A132" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_510_5882">
                                                <rect width="40" height="40" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="cs_fs_20 cs_mb_8">Interface Design</h2>
                                    <p class="m-0">Create an aesthetic and functional interface, making it easy for
                                        users to explore your product.</p>
                                </div>
                            </div>
                            <div class="cs_about_icon_box d-flex align-items-center cs_mb_30">
                                <div
                                    class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 flex-none cs_mr_20 bg-gray rounded-circle">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_510_5809)">
                                            <path
                                                d="M22.5 40H17.5C17.3342 40 17.1753 39.9342 17.0581 39.8169C16.9408 39.6997 16.875 39.5408 16.875 39.375V22.5C16.875 22.1685 17.0067 21.8505 17.2411 21.6161C17.4755 21.3817 17.7935 21.25 18.125 21.25H21.875C22.2065 21.25 22.5245 21.3817 22.7589 21.6161C22.9933 21.8505 23.125 22.1685 23.125 22.5V39.375C23.125 39.5408 23.0592 39.6997 22.9419 39.8169C22.8247 39.9342 22.6658 40 22.5 40ZM18.125 38.75H21.875V22.5H18.125V38.75Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M14.375 40H9.375C9.20924 40 9.05027 39.9342 8.93306 39.8169C8.81585 39.6997 8.75 39.5408 8.75 39.375V30C8.75 29.6685 8.8817 29.3505 9.11612 29.1161C9.35054 28.8817 9.66848 28.75 10 28.75H13.75C14.0815 28.75 14.3995 28.8817 14.6339 29.1161C14.8683 29.3505 15 29.6685 15 30V39.375C15 39.5408 14.9342 39.6997 14.8169 39.8169C14.6997 39.9342 14.5408 40 14.375 40ZM10 38.75H13.75V30H10V38.75Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M6.25 40H1.25C1.08424 40 0.925268 39.9342 0.808058 39.8169C0.690848 39.6997 0.625 39.5408 0.625 39.375V35C0.625 34.6685 0.756696 34.3505 0.991117 34.1161C1.22554 33.8817 1.54348 33.75 1.875 33.75H5.625C5.95652 33.75 6.27446 33.8817 6.50888 34.1161C6.7433 34.3505 6.875 34.6685 6.875 35V39.375C6.875 39.5408 6.80915 39.6997 6.69194 39.8169C6.57473 39.9342 6.41576 40 6.25 40ZM1.875 38.75H5.625V35H1.875V38.75Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M30.625 40H25.625C25.4592 40 25.3003 39.9342 25.1831 39.8169C25.0658 39.6997 25 39.5408 25 39.375V13.75C25 13.4185 25.1317 13.1005 25.3661 12.8661C25.6005 12.6317 25.9185 12.5 26.25 12.5H30C30.3315 12.5 30.6495 12.6317 30.8839 12.8661C31.1183 13.1005 31.25 13.4185 31.25 13.75V39.375C31.25 39.5408 31.1842 39.6997 31.0669 39.8169C30.9497 39.9342 30.7908 40 30.625 40ZM26.25 38.75H30V13.75H26.25V38.75Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M38.75 40H33.75C33.5842 40 33.4253 39.9342 33.3081 39.8169C33.1908 39.6997 33.125 39.5408 33.125 39.375V6.25C33.125 5.91848 33.2567 5.60054 33.4911 5.36612C33.7255 5.1317 34.0435 5 34.375 5H38.125C38.4565 5 38.7745 5.1317 39.0089 5.36612C39.2433 5.60054 39.375 5.91848 39.375 6.25V8.75H38.125V6.25H34.375V38.75H38.125V12.5H39.375V39.375C39.375 39.5408 39.3092 39.6997 39.1919 39.8169C39.0747 39.9342 38.9158 40 38.75 40Z"
                                                fill="#E9A132" />
                                            <path d="M38.125 10H39.375V11.2506H38.125V10Z" fill="#E9A132" />
                                            <path
                                                d="M18.6721 8.83203C18.6194 8.43794 18.5401 8.04787 18.4346 7.66453L19.6396 7.33203C19.7604 7.77052 19.851 8.21677 19.9108 8.66766L18.6721 8.83203Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M9.99989 20.0002C8.03098 20.0001 6.10588 19.4189 4.46595 18.3293C2.82602 17.2397 1.54423 15.6902 0.781286 13.8751C0.0183417 12.06 -0.191807 10.0601 0.177185 8.12607C0.546178 6.19204 1.47789 4.40997 2.85551 3.00329C4.00118 1.83308 5.41671 0.962149 6.97773 0.46702C8.53874 -0.0281087 10.1975 -0.132282 11.8082 0.163653C13.4189 0.459587 14.9322 1.14657 16.2153 2.16425C17.4984 3.18192 18.5119 4.49914 19.1668 6.00016L18.0218 6.50016C17.3418 4.93851 16.2202 3.60962 14.795 2.6769C13.3699 1.74417 11.7032 1.24826 9.99989 1.25016H9.90739C8.18086 1.26841 6.49832 1.79706 5.07161 2.76956C3.6449 3.74205 2.5378 5.1149 1.88969 6.71528C1.24159 8.31565 1.08145 10.072 1.42945 11.7632C1.77744 13.4544 2.61801 15.0048 3.84532 16.2193C5.07263 17.4338 6.63182 18.258 8.32658 18.5882C10.0213 18.9184 11.7759 18.7398 13.3694 18.0749C14.9629 17.41 16.324 16.2885 17.2814 14.8516C18.2389 13.4148 18.7498 11.7268 18.7499 10.0002H19.9999C19.9918 12.6319 18.9498 15.1551 17.0986 17.0257C15.2473 18.8963 12.7352 19.9646 10.1036 20.0002H9.99989Z"
                                                fill="#E9A132" />
                                            <path d="M9.375 3.75H10.625V5.625H9.375V3.75Z" fill="#E9A132" />
                                            <path
                                                d="M10.9375 15H7.5V13.75H10.9375C11.3519 13.75 11.7493 13.5854 12.0424 13.2924C12.3354 12.9993 12.5 12.6019 12.5 12.1875C12.5 11.7731 12.3354 11.3757 12.0424 11.0826C11.7493 10.7896 11.3519 10.625 10.9375 10.625H9.0625C8.31658 10.625 7.60121 10.3287 7.07376 9.80124C6.54632 9.27379 6.25 8.55842 6.25 7.8125C6.25 7.06658 6.54632 6.35121 7.07376 5.82376C7.60121 5.29632 8.31658 5 9.0625 5H12.5V6.25H9.0625C8.6481 6.25 8.25067 6.41462 7.95765 6.70765C7.66462 7.00067 7.5 7.3981 7.5 7.8125C7.5 8.2269 7.66462 8.62433 7.95765 8.91735C8.25067 9.21038 8.6481 9.375 9.0625 9.375H10.9375C11.6834 9.375 12.3988 9.67132 12.9262 10.1988C13.4537 10.7262 13.75 11.4416 13.75 12.1875C13.75 12.9334 13.4537 13.6488 12.9262 14.1762C12.3988 14.7037 11.6834 15 10.9375 15Z"
                                                fill="#E9A132" />
                                            <path d="M9.375 14.375H10.625V16.25H9.375V14.375Z" fill="#E9A132" />
                                            <path d="M0.625 38.75H39.375V40H0.625V38.75Z" fill="#E9A132" />
                                            <path
                                                d="M3.56637 30.442L2.68262 29.5583L9.55762 22.6833C9.6748 22.566 9.83375 22.5002 9.99949 22.5001H13.4732L25.7857 8.95451C25.8445 8.88995 25.9161 8.83841 25.996 8.80321C26.0758 8.76801 26.1622 8.74993 26.2495 8.75014H27.837L35.1501 0.218262L36.0989 1.03076L28.5989 9.78076C28.5403 9.8494 28.4676 9.90455 28.3857 9.94242C28.3038 9.98028 28.2147 9.99998 28.1245 10.0001H26.5257L14.212 23.5458C14.1534 23.6102 14.082 23.6616 14.0023 23.6968C13.9227 23.732 13.8366 23.7502 13.7495 23.7501H10.2582L3.56637 30.442Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M0.179688 32.0552L1.4295 30.8054L2.31338 31.6892L1.06357 32.9391L0.179688 32.0552Z"
                                                fill="#E9A132" />
                                            <path
                                                d="M36.25 3.75H35V1.25H32.5V0H35.625C35.7908 0 35.9497 0.065848 36.0669 0.183058C36.1842 0.300269 36.25 0.45924 36.25 0.625V3.75Z"
                                                fill="#E9A132" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_510_5809">
                                                <rect width="40" height="40" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div>
                                    <h2 class="cs_fs_20 cs_mb_8">Prototyping and Testing</h2>
                                    <p class="m-0">Develop interactive prototypes to test design ideas directly with
                                        users, helping to identify and fix issues before launch.</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="d-flex align-items-center cs_row_gap_20 cs_column_gap_30 cs_column_gap_lg_20 flex-wrap">
                            <a href="{{ url('contact') }}"
                                class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>My
                                    Skill</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Brand Section -->
    <div class="cs_pb_140 cs_pb_lg_80">
        <div class="container">
            <div
                class="cs_brands d-flex justify-content-xl-between align-items-center cs_column_gap_25 cs_row_gap_25 flex-wrap justify-content-center">
                <div class="cs_brand">
                    <img class="brand-image" src="assets/img/1.svg" alt="Brand">
                </div>
                <div class="cs_brand">
                    <img class="brand-image" src="assets/img/2.svg" alt="Brand">
                </div>
                <div class="cs_brand">
                    <img class="brand-image" src="assets/img/3.svg" alt="Brand">
                </div>
                <div class="cs_brand">
                    <img class="brand-image" src="assets/img/4.svg" alt="Brand">
                </div>
                <div class="cs_brand">
                    <img class="brand-image" src="assets/img/5.svg" alt="Brand">
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Section -->

    <!-- Start Service Section -->
    <section class="background-filled cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80 cs_gray_bg" id="section-3"
        data-src="assets/img/services_bg.png">
        <div class="container">
            <div class="cs_service_slider cs_gap_24">
                <div
                    class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
                    <div class="cs_section_heading_in">
                        <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft"
                            data-wow-duration="0.8s" data-wow-delay="0.2s">My Skill List</h3>
                        <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Take a look for <br>My currently skill</h2>
                    </div>
                    <div class="cs_section_heading_right">
                        <div class="d-flex cs_column_gap_15 justify-content-lg-end justify-content-start">
                            <div
                                class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                                <svg width="20" height="8" viewBox="0 0 20 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z"
                                        fill="black" />
                                    <path
                                        d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z"
                                        fill="black" />
                                </svg>
                            </div>
                            <div
                                class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                                <svg width="20" height="8" viewBox="0 0 20 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z"
                                        fill="#18191D" />
                                    <path
                                        d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z"
                                        fill="#18191D" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cs_slider_activate">
                    <div class="cs_slide">
                        <div
                            class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                            <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                                <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                    data-src="assets/img/skill1.svg"></div>
                            </div>
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.44607 10.4345C7.69334 10.65 8.06841 10.62 8.27881 10.3706L9.70521 8.6801C9.91388 8.43275 9.88255 8.06315 9.63521 7.8544C9.38779 7.64572 9.01818 7.67713 8.80951 7.9244L7.76701 9.15994L7.40154 8.84158C7.15755 8.62893 6.78748 8.65432 6.57482 8.89846C6.36224 9.14244 6.38771 9.51252 6.63177 9.7251L7.44607 10.4345Z"
                                            fill="white" />
                                        <path
                                            d="M9.63521 18.7069C9.38779 18.4983 9.01818 18.5297 8.80951 18.7769L7.76701 20.0125L7.40154 19.6941C7.15755 19.4815 6.78748 19.5069 6.57482 19.751C6.36224 19.995 6.38771 20.3651 6.63177 20.5776L7.44607 21.2871C7.69334 21.5026 8.06841 21.4726 8.27881 21.2233L9.70521 19.5327C9.91388 19.2854 9.88248 18.9157 9.63521 18.7069Z"
                                            fill="white" />
                                        <path
                                            d="M9.63521 29.5595C9.38779 29.3508 9.01818 29.3822 8.80951 29.6295L7.76701 30.865L7.40154 30.5467C7.15755 30.334 6.78748 30.3594 6.57482 30.6035C6.36224 30.8475 6.38771 31.2176 6.63177 31.4302L7.44607 32.1396C7.69334 32.3552 8.06841 32.3252 8.27881 32.0758L9.70521 30.3853C9.91388 30.1379 9.88248 29.7682 9.63521 29.5595Z"
                                            fill="white" />
                                        <path
                                            d="M15.2129 8.30664H27.5983C27.922 8.30664 28.1842 8.04438 28.1842 7.7207C28.1842 7.39703 27.922 7.13477 27.5983 7.13477H15.2129C14.8892 7.13477 14.627 7.39703 14.627 7.7207C14.627 8.04438 14.8892 8.30664 15.2129 8.30664Z"
                                            fill="white" />
                                        <path
                                            d="M15.2129 11.1606H27.5983C27.922 11.1606 28.1842 10.8984 28.1842 10.5747C28.1842 10.251 27.922 9.98877 27.5983 9.98877H15.2129C14.8892 9.98877 14.627 10.251 14.627 10.5747C14.627 10.8984 14.8892 11.1606 15.2129 11.1606Z"
                                            fill="white" />
                                        <path
                                            d="M10.7185 4.84326H5.5559C4.6059 4.84326 3.83301 5.61615 3.83301 6.56615V7.72045C3.83301 8.04412 4.09527 8.30639 4.41895 8.30639C4.74262 8.30639 5.00488 8.04412 5.00488 7.72045V6.56615C5.00488 6.26232 5.25207 6.01514 5.5559 6.01514H10.7185C11.0223 6.01514 11.2694 6.26232 11.2694 6.56615V11.7287C11.2694 12.0326 11.0223 12.2797 10.7185 12.2797H5.5559C5.25207 12.2797 5.00488 12.0326 5.00488 11.7287V10.5169C5.00488 10.1933 4.74262 9.931 4.41895 9.931C4.09527 9.931 3.83301 10.1933 3.83301 10.5169V11.7287C3.83301 12.6787 4.6059 13.4515 5.5559 13.4515H10.7185C11.6684 13.4515 12.4413 12.6787 12.4413 11.7287V6.56615C12.4412 5.61615 11.6684 4.84326 10.7185 4.84326Z"
                                            fill="white" />
                                        <path
                                            d="M10.7185 15.6958H5.5559C4.6059 15.6958 3.83301 16.4687 3.83301 17.4187V22.5813C3.83301 23.5312 4.6059 24.3041 5.5559 24.3041H10.7185C11.6684 24.3041 12.4413 23.5312 12.4413 22.5813V17.4187C12.4412 16.4687 11.6684 15.6958 10.7185 15.6958ZM11.2693 22.5813C11.2693 22.8851 11.0222 23.1322 10.7184 23.1322H5.5559C5.25207 23.1322 5.00488 22.8851 5.00488 22.5813V17.4187C5.00488 17.1149 5.25207 16.8677 5.5559 16.8677H10.7185C11.0223 16.8677 11.2694 17.1149 11.2694 17.4187L11.2693 22.5813Z"
                                            fill="white" />
                                        <path
                                            d="M10.7185 26.5483H5.5559C4.6059 26.5483 3.83301 27.3212 3.83301 28.2712V33.4338C3.83301 34.3837 4.6059 35.1566 5.5559 35.1566H10.7185C11.6684 35.1566 12.4413 34.3837 12.4413 33.4338V28.2712C12.4412 27.3212 11.6684 26.5483 10.7185 26.5483ZM11.2693 33.4338C11.2693 33.7376 11.0222 33.9847 10.7184 33.9847H5.5559C5.25207 33.9847 5.00488 33.7376 5.00488 33.4338V28.2712C5.00488 27.9674 5.25207 27.7202 5.5559 27.7202H10.7185C11.0223 27.7202 11.2694 27.9674 11.2694 28.2712L11.2693 33.4338Z"
                                            fill="white" />
                                        <path
                                            d="M36.0414 5.19195C34.5098 4.52484 32.721 5.22773 32.0537 6.7593L31.8784 7.16164V4.14C31.8784 1.85719 30.0212 0 27.7384 0H4.27867C1.99586 0 0.138672 1.85719 0.138672 4.14V35.86C0.138672 38.1428 1.99586 40 4.27867 40H27.7384C30.0212 40 31.8784 38.1428 31.8784 35.86V22.3316C32.1787 21.6423 37.2757 9.94398 37.6087 9.17969C38.2777 7.64445 37.5766 5.86086 36.0414 5.19195ZM21.1896 31.6934H15.213C14.8894 31.6934 14.6271 31.9557 14.6271 32.2794C14.6271 32.603 14.8894 32.8653 15.213 32.8653H20.6816C20.4048 33.5308 20.2655 34.2334 20.2702 34.9561V34.9562L20.2962 38.8281H4.27867C2.64203 38.8281 1.31055 37.4966 1.31055 35.86V4.14C1.31055 2.50336 2.64203 1.17188 4.27867 1.17188H27.7384C29.375 1.17188 30.7065 2.50336 30.7065 4.14V9.85125C29.9661 11.5505 27.8855 16.3256 27.1616 17.9872H15.2131C14.8895 17.9872 14.6272 18.2495 14.6272 18.5731C14.6272 18.8968 14.8895 19.1591 15.2131 19.1591H26.651L25.9182 20.841H15.2131C14.8895 20.841 14.6272 21.1033 14.6272 21.427C14.6272 21.7506 14.8895 22.0129 15.2131 22.0129H25.4076L22.4331 28.8396H15.2131C14.8895 28.8396 14.6272 29.1019 14.6272 29.4255C14.6272 29.7492 14.8895 30.0115 15.2131 30.0115H21.9225L21.1896 31.6934ZM21.4421 34.9483C21.4409 34.7615 21.4532 34.5766 21.4762 34.3937C21.9887 34.617 21.2743 34.3057 24.572 35.7425C24.4537 35.8839 24.3267 36.0188 24.1891 36.1451L21.4669 38.642L21.4421 34.9483ZM30.7065 35.86C30.7065 37.4966 29.375 38.8281 27.7384 38.8281H22.9977L24.9812 37.0088C25.5362 36.4996 25.9702 35.8914 26.2712 35.2008L30.7065 25.0211V35.86ZM25.1968 34.7327C25.1963 34.7337 25.1958 34.7347 25.1953 34.7358L24.0294 34.2278L26.7874 27.8978C26.9166 27.6011 26.7809 27.2559 26.4843 27.1266C26.1875 26.9974 25.8423 27.1331 25.713 27.4297L22.955 33.7597L21.7891 33.2517C21.7896 33.2507 21.7899 33.2496 21.7904 33.2486L30.7481 12.6898L31.9141 13.1977L26.8071 24.9187C26.6779 25.2155 26.8136 25.5607 27.1102 25.69C27.4086 25.8199 27.7529 25.682 27.8815 25.3869L32.9884 13.6658L34.1544 14.1737C34.0119 14.5009 25.3323 34.4216 25.1968 34.7327ZM34.6226 13.0994L31.2162 11.6153L31.7977 10.2808L35.2041 11.7649L34.6226 13.0994ZM36.5344 8.71156L35.6721 10.6905L32.2658 9.20641L33.128 7.22742C33.5371 6.28828 34.6341 5.85711 35.5733 6.26633C36.5145 6.67633 36.9448 7.77 36.5344 8.71156Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="#"
                                        class="inline-block">User Research & Analysis</a></h2>
                            </div>
                            <p class="cs_mb_20">Understand user needs and behaviors through comprehensive research methods.
                                I uncover key insights to inform design decisions, ensuring that the final product meets
                                both user expectations and objectives.</p>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div
                            class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                            <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                                <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                    data-src="assets/img/skill2.svg"></div>
                            </div>
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_516_334)">
                                            <path
                                                d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z"
                                                fill="white" />
                                            <path
                                                d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z"
                                                fill="white" />
                                            <path
                                                d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z"
                                                fill="white" />
                                            <path
                                                d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z"
                                                fill="white" />
                                            <path
                                                d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z"
                                                fill="white" />
                                            <path
                                                d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_516_334">
                                                <rect width="40" height="40" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="#" class="inline-block">UI
                                        Designer</a></h2>
                            </div>
                            <p class="cs_mb_20">Create visually engaging and user-friendly interfaces that balance
                                aesthetics with functionality. Every design is crafted to enhance the user experience while
                                achieving business goals.</p>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div
                            class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                            <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                                <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                    data-src="assets/img/skill3.svg"></div>
                            </div>
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_516_349)">
                                            <path
                                                d="M8.75 26.875C6.3375 26.875 4.375 28.8375 4.375 31.25C4.375 33.6625 6.3375 35.625 8.75 35.625C11.1625 35.625 13.125 33.6625 13.125 31.25C13.125 28.8375 11.1625 26.875 8.75 26.875ZM8.75 34.375C7.02688 34.375 5.625 32.9731 5.625 31.25C5.625 29.5269 7.02688 28.125 8.75 28.125C10.4731 28.125 11.875 29.5269 11.875 31.25C11.875 32.9731 10.4731 34.375 8.75 34.375Z"
                                                fill="white" />
                                            <path
                                                d="M8.75 29.375C7.71625 29.375 6.875 30.2162 6.875 31.25C6.875 32.2838 7.71625 33.125 8.75 33.125C9.78375 33.125 10.625 32.2838 10.625 31.25C10.625 30.2162 9.78375 29.375 8.75 29.375ZM8.75 31.875C8.40562 31.875 8.125 31.5944 8.125 31.25C8.125 30.9056 8.40562 30.625 8.75 30.625C9.09437 30.625 9.375 30.9056 9.375 31.25C9.375 31.5944 9.09437 31.875 8.75 31.875Z"
                                                fill="white" />
                                            <path
                                                d="M36.8662 12.7744L38.1488 11.4956L38.1475 11.2344C38.1325 8.83063 36.1656 6.875 33.75 6.875H33.4912L32.23 8.13625C30.6225 7.09375 28.8144 6.33438 26.875 5.93937V4.375C27.9088 4.375 28.75 3.53375 28.75 2.5C28.75 1.46625 27.9088 0.625 26.875 0.625H20.625C19.5912 0.625 18.75 1.46625 18.75 2.5C18.75 3.53375 19.5912 4.375 20.625 4.375V5.93937C18.6906 6.33375 16.8875 7.08938 15.2838 8.12813L14.2138 7.05813L14.0188 6.875H13.76C11.3563 6.875 9.38937 8.83063 9.375 11.2344L9.37375 11.4956L10.6425 12.7612C9.0525 15.2075 8.125 18.1213 8.125 21.25C8.125 21.8738 8.1775 22.5069 8.255 23.1394C7.50125 23.2119 6.85375 23.7156 6.61313 24.4475C6.55125 24.6363 6.41562 24.7838 6.24062 24.8512C6.15875 24.8831 6.0775 24.9163 5.99625 24.9519C5.82562 25.0256 5.62687 25.0175 5.45062 24.9281C4.70812 24.5525 3.81375 24.6956 3.225 25.2844L2.785 25.725C2.19625 26.3131 2.05312 27.2081 2.42875 27.9506C2.51812 28.1269 2.52625 28.3256 2.4525 28.4969C2.4175 28.5775 2.38375 28.6594 2.35188 28.7406C2.28437 28.9156 2.13625 29.0513 1.94687 29.1131C1.15625 29.3731 0.625 30.1069 0.625 30.9387V31.5613C0.625 32.3931 1.15625 33.1269 1.9475 33.3869C2.13625 33.4487 2.28375 33.5844 2.35125 33.7581C2.38313 33.8406 2.41625 33.9225 2.45188 34.0037C2.52563 34.1744 2.51688 34.3731 2.42813 34.5494C2.0525 35.2919 2.19562 36.1869 2.78437 36.775L3.22438 37.2156C3.81312 37.8044 4.7075 37.9469 5.45 37.5719C5.62563 37.4825 5.82437 37.4738 5.99625 37.5481C6.07687 37.5831 6.15875 37.6169 6.24 37.6488C6.415 37.7162 6.55062 37.8644 6.6125 38.0537C6.87313 38.8438 7.60687 39.375 8.43875 39.375H9.06125C9.89313 39.375 10.6269 38.8438 10.8869 38.0525C10.9488 37.8638 11.0844 37.7162 11.2581 37.6488C11.3406 37.6169 11.4225 37.5838 11.5037 37.5481C11.6737 37.4738 11.8731 37.4825 12.0494 37.5719C12.7919 37.9469 13.6869 37.8044 14.275 37.2156L14.7156 36.7756C15.3044 36.1875 15.4475 35.2925 15.0719 34.55C15.0138 34.435 15.0031 34.3119 15.0144 34.1919C17.5994 35.9425 20.5994 36.875 23.75 36.875C32.3656 36.875 39.375 29.8656 39.375 21.25C39.375 18.1275 38.4506 15.2181 36.8662 12.7744ZM34 8.13375C35.525 8.24937 36.7544 9.46688 36.8856 10.99L36.135 11.7387C35.3063 10.6625 34.3412 9.6975 33.2656 8.86875L34 8.13375ZM20 2.5C20 2.15562 20.2806 1.875 20.625 1.875H26.875C27.2194 1.875 27.5 2.15562 27.5 2.5C27.5 2.84437 27.2194 3.125 26.875 3.125H20.625C20.2806 3.125 20 2.84437 20 2.5ZM25.625 4.375V5.74125C25.01 5.6675 24.385 5.625 23.75 5.625C23.115 5.625 22.49 5.6675 21.875 5.74125V4.375H25.625ZM10.6369 10.99C10.7675 9.47 11.9919 8.255 13.5231 8.135L14.2475 8.85938C13.1706 9.68688 12.205 10.6519 11.3756 11.7269L10.6369 10.99ZM15.625 31.5613C15.625 31.8519 15.4394 32.1081 15.1625 32.1994C14.6175 32.3781 14.1875 32.7819 13.9838 33.3069C13.9575 33.3737 13.93 33.4406 13.9019 33.5056C13.6794 34.0181 13.6987 34.6037 13.9563 35.1131C14.0875 35.3725 14.0375 35.685 13.8319 35.8906L13.3913 36.3312C13.1856 36.5375 12.8731 36.5869 12.6137 36.4556C12.1044 36.1981 11.5188 36.1794 11.0069 36.4012C10.9412 36.4294 10.8744 36.4569 10.8063 36.4837C10.2819 36.6875 9.87875 37.1175 9.69938 37.6631C9.60875 37.9394 9.35188 38.125 9.06125 38.125H8.43875C8.14812 38.125 7.89187 37.9394 7.80062 37.6625C7.62187 37.1175 7.21812 36.6875 6.69312 36.4837C6.62625 36.4575 6.55937 36.43 6.49437 36.4019C6.25812 36.2988 6.00625 36.2475 5.75313 36.2475C5.4575 36.2475 5.16125 36.3175 4.88687 36.4556C4.62625 36.5869 4.315 36.5369 4.10938 36.3312L3.66875 35.8906C3.46312 35.685 3.41313 35.3725 3.54437 35.1131C3.80188 34.6037 3.82125 34.0181 3.59875 33.5062C3.57062 33.4406 3.54312 33.3738 3.51625 33.3056C3.3125 32.7812 2.8825 32.3781 2.33688 32.1988C2.06063 32.1088 1.875 31.8519 1.875 31.5613V30.9387C1.875 30.6481 2.06063 30.3919 2.33688 30.3006C2.8825 30.1219 3.3125 29.7181 3.51625 29.1931C3.5425 29.1262 3.57 29.0594 3.59812 28.9944C3.82063 28.4819 3.80125 27.8962 3.54375 27.3869C3.4125 27.1275 3.4625 26.8144 3.66812 26.6088L4.10812 26.1687C4.31375 25.9625 4.62563 25.9125 4.88625 26.0444C5.39563 26.3019 5.9825 26.3212 6.49312 26.0987C6.55937 26.07 6.62625 26.0425 6.69312 26.0169C7.2175 25.8125 7.62125 25.3825 7.80062 24.8375C7.89125 24.5606 8.14812 24.375 8.43875 24.375H9.06125C9.35188 24.375 9.60812 24.5606 9.69938 24.8375C9.87875 25.3825 10.2819 25.8125 10.8063 26.0163C10.8731 26.0425 10.94 26.07 11.0056 26.0981C11.5175 26.3206 12.1038 26.3006 12.6131 26.0437C12.8725 25.9119 13.185 25.9625 13.3913 26.1681L13.8312 26.6081C14.0369 26.8138 14.0869 27.1269 13.9556 27.3862C13.6981 27.8956 13.6788 28.4813 13.9013 28.9931C13.9294 29.0588 13.9569 29.1256 13.9838 29.1937C14.1875 29.7181 14.6175 30.1213 15.1631 30.3006C15.4394 30.3912 15.625 30.6481 15.625 30.9387V31.5613ZM11.9069 20.625C12.0538 17.8225 13.1719 15.2794 14.9363 13.32L16.6794 15.0631L17.5631 14.1794L15.82 12.4363C17.7794 10.6713 20.3225 9.55375 23.125 9.40687V11.875H24.375V9.40687C27.1775 9.55375 29.7206 10.6719 31.68 12.4363L29.9369 14.1794L30.8206 15.0631L32.5638 13.32C34.3288 15.2794 35.4463 17.8225 35.5931 20.625H33.125V21.875H35.5931C35.4463 24.6775 34.3281 27.2206 32.5638 29.18L30.8206 27.4369L29.9369 28.3206L31.68 30.0638C29.7206 31.8288 27.1775 32.9463 24.375 33.0931V30.625H23.125V33.1C20.8713 32.9825 18.7275 32.2306 16.8725 30.9044C16.8631 30.3931 16.655 29.9212 16.3081 29.5762L17.5631 28.3212L16.6794 27.4375L15.2413 28.8756C15.2087 28.8319 15.1694 28.7925 15.1494 28.7419C15.1175 28.6594 15.0844 28.5775 15.0487 28.4963C14.975 28.3256 14.9837 28.1269 15.0725 27.9506C15.4481 27.2081 15.305 26.3131 14.7162 25.725L14.6156 25.625H33.125V24.375H30.625V18.125H26.875V24.375H25.625V14.375H21.875V24.375H20.625V16.875H16.875V24.375H14.375V25.3844L14.275 25.2844C13.7856 24.795 13.0863 24.6187 12.4369 24.7869C12.135 23.83 11.9563 22.8556 11.9031 21.8744H14.375V20.6244L11.9069 20.625ZM18.125 24.375V18.125H19.375V24.375H18.125ZM23.125 24.375V15.625H24.375V24.375H23.125ZM28.125 24.375V19.375H29.375V24.375H28.125ZM23.75 35.625C20.91 35.625 18.2019 34.8037 15.8569 33.2556C16.2469 33.0481 16.5456 32.7131 16.7156 32.315C18.8244 33.665 21.2356 34.375 23.75 34.375C30.9875 34.375 36.875 28.4875 36.875 21.25C36.875 14.0125 30.9875 8.125 23.75 8.125C16.5125 8.125 10.625 14.0125 10.625 21.25C10.625 22.4281 10.7906 23.6013 11.1131 24.7513C11.0138 24.6731 10.9288 24.5756 10.8869 24.4462C10.6763 23.8056 10.1525 23.3412 9.52 23.1862C9.43125 22.5375 9.375 21.8881 9.375 21.25C9.375 13.3237 15.8237 6.875 23.75 6.875C31.6763 6.875 38.125 13.3237 38.125 21.25C38.125 29.1763 31.6763 35.625 23.75 35.625Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_516_349">
                                                <rect width="40" height="40" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="#"
                                        class="inline-block">Wireframing & Prototyping</a></h2>
                            </div>
                            <p class="cs_mb_20">Visualize the structure of digital products through detailed wireframes and
                                interactive prototypes. This process allows for early testing and validation of ideas before
                                moving to full design and development.</p>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div
                            class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                            <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                                <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                    data-src="assets/img/skill4.svg"></div>
                            </div>
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.44607 10.4345C8.69334 10.65 9.06841 10.62 9.27881 10.3706L10.7052 8.6801C10.9139 8.43275 10.8826 8.06315 10.6352 7.8544C10.3878 7.64572 10.0182 7.67713 9.80951 7.9244L8.76701 9.15994L8.40154 8.84158C8.15755 8.62893 7.78748 8.65432 7.57482 8.89846C7.36224 9.14244 7.38771 9.51252 7.63177 9.7251L8.44607 10.4345Z"
                                            fill="white" />
                                        <path
                                            d="M10.6352 18.7069C10.3878 18.4983 10.0182 18.5297 9.80951 18.7769L8.76701 20.0125L8.40154 19.6941C8.15755 19.4815 7.78748 19.5069 7.57482 19.751C7.36224 19.995 7.38771 20.3651 7.63177 20.5776L8.44607 21.2871C8.69334 21.5026 9.06841 21.4726 9.27881 21.2233L10.7052 19.5327C10.9139 19.2854 10.8825 18.9157 10.6352 18.7069Z"
                                            fill="white" />
                                        <path
                                            d="M10.6352 29.5595C10.3878 29.3508 10.0182 29.3822 9.80951 29.6295L8.76701 30.865L8.40154 30.5467C8.15755 30.334 7.78748 30.3594 7.57482 30.6035C7.36224 30.8475 7.38771 31.2176 7.63177 31.4302L8.44607 32.1396C8.69334 32.3552 9.06841 32.3252 9.27881 32.0758L10.7052 30.3853C10.9139 30.1379 10.8825 29.7682 10.6352 29.5595Z"
                                            fill="white" />
                                        <path
                                            d="M16.2129 8.30664H28.5983C28.922 8.30664 29.1842 8.04438 29.1842 7.7207C29.1842 7.39703 28.922 7.13477 28.5983 7.13477H16.2129C15.8892 7.13477 15.627 7.39703 15.627 7.7207C15.627 8.04438 15.8892 8.30664 16.2129 8.30664Z"
                                            fill="white" />
                                        <path
                                            d="M16.2129 11.1606H28.5983C28.922 11.1606 29.1842 10.8984 29.1842 10.5747C29.1842 10.251 28.922 9.98877 28.5983 9.98877H16.2129C15.8892 9.98877 15.627 10.251 15.627 10.5747C15.627 10.8984 15.8892 11.1606 16.2129 11.1606Z"
                                            fill="white" />
                                        <path
                                            d="M11.7185 4.84326H6.5559C5.6059 4.84326 4.83301 5.61615 4.83301 6.56615V7.72045C4.83301 8.04412 5.09527 8.30639 5.41895 8.30639C5.74262 8.30639 6.00488 8.04412 6.00488 7.72045V6.56615C6.00488 6.26232 6.25207 6.01514 6.5559 6.01514H11.7185C12.0223 6.01514 12.2694 6.26232 12.2694 6.56615V11.7287C12.2694 12.0326 12.0223 12.2797 11.7185 12.2797H6.5559C6.25207 12.2797 6.00488 12.0326 6.00488 11.7287V10.5169C6.00488 10.1933 5.74262 9.931 5.41895 9.931C5.09527 9.931 4.83301 10.1933 4.83301 10.5169V11.7287C4.83301 12.6787 5.6059 13.4515 6.5559 13.4515H11.7185C12.6684 13.4515 13.4413 12.6787 13.4413 11.7287V6.56615C13.4412 5.61615 12.6684 4.84326 11.7185 4.84326Z"
                                            fill="white" />
                                        <path
                                            d="M11.7185 15.6958H6.5559C5.6059 15.6958 4.83301 16.4687 4.83301 17.4187V22.5813C4.83301 23.5312 5.6059 24.3041 6.5559 24.3041H11.7185C12.6684 24.3041 13.4413 23.5312 13.4413 22.5813V17.4187C13.4412 16.4687 12.6684 15.6958 11.7185 15.6958ZM12.2693 22.5813C12.2693 22.8851 12.0222 23.1322 11.7184 23.1322H6.5559C6.25207 23.1322 6.00488 22.8851 6.00488 22.5813V17.4187C6.00488 17.1149 6.25207 16.8677 6.5559 16.8677H11.7185C12.0223 16.8677 12.2694 17.1149 12.2694 17.4187L12.2693 22.5813Z"
                                            fill="white" />
                                        <path
                                            d="M11.7185 26.5483H6.5559C5.6059 26.5483 4.83301 27.3212 4.83301 28.2712V33.4338C4.83301 34.3837 5.6059 35.1566 6.5559 35.1566H11.7185C12.6684 35.1566 13.4413 34.3837 13.4413 33.4338V28.2712C13.4412 27.3212 12.6684 26.5483 11.7185 26.5483ZM12.2693 33.4338C12.2693 33.7376 12.0222 33.9847 11.7184 33.9847H6.5559C6.25207 33.9847 6.00488 33.7376 6.00488 33.4338V28.2712C6.00488 27.9674 6.25207 27.7202 6.5559 27.7202H11.7185C12.0223 27.7202 12.2694 27.9674 12.2694 28.2712L12.2693 33.4338Z"
                                            fill="white" />
                                        <path
                                            d="M37.0414 5.19195C35.5098 4.52484 33.721 5.22773 33.0537 6.7593L32.8784 7.16164V4.14C32.8784 1.85719 31.0212 0 28.7384 0H5.27867C2.99586 0 1.13867 1.85719 1.13867 4.14V35.86C1.13867 38.1428 2.99586 40 5.27867 40H28.7384C31.0212 40 32.8784 38.1428 32.8784 35.86V22.3316C33.1787 21.6423 38.2757 9.94398 38.6087 9.17969C39.2777 7.64445 38.5766 5.86086 37.0414 5.19195ZM22.1896 31.6934H16.213C15.8894 31.6934 15.6271 31.9557 15.6271 32.2794C15.6271 32.603 15.8894 32.8653 16.213 32.8653H21.6816C21.4048 33.5308 21.2655 34.2334 21.2702 34.9561V34.9562L21.2962 38.8281H5.27867C3.64203 38.8281 2.31055 37.4966 2.31055 35.86V4.14C2.31055 2.50336 3.64203 1.17188 5.27867 1.17188H28.7384C30.375 1.17188 31.7065 2.50336 31.7065 4.14V9.85125C30.9661 11.5505 28.8855 16.3256 28.1616 17.9872H16.2131C15.8895 17.9872 15.6272 18.2495 15.6272 18.5731C15.6272 18.8968 15.8895 19.1591 16.2131 19.1591H27.651L26.9182 20.841H16.2131C15.8895 20.841 15.6272 21.1033 15.6272 21.427C15.6272 21.7506 15.8895 22.0129 16.2131 22.0129H26.4076L23.4331 28.8396H16.2131C15.8895 28.8396 15.6272 29.1019 15.6272 29.4255C15.6272 29.7492 15.8895 30.0115 16.2131 30.0115H22.9225L22.1896 31.6934ZM22.4421 34.9483C22.4409 34.7615 22.4532 34.5766 22.4762 34.3937C22.9887 34.617 22.2743 34.3057 25.572 35.7425C25.4537 35.8839 25.3267 36.0188 25.1891 36.1451L22.4669 38.642L22.4421 34.9483ZM31.7065 35.86C31.7065 37.4966 30.375 38.8281 28.7384 38.8281H23.9977L25.9812 37.0088C26.5362 36.4996 26.9702 35.8914 27.2712 35.2008L31.7065 25.0211V35.86ZM26.1968 34.7327C26.1963 34.7337 26.1958 34.7347 26.1953 34.7358L25.0294 34.2278L27.7874 27.8978C27.9166 27.6011 27.7809 27.2559 27.4843 27.1266C27.1875 26.9974 26.8423 27.1331 26.713 27.4297L23.955 33.7597L22.7891 33.2517C22.7896 33.2507 22.7899 33.2496 22.7904 33.2486L31.7481 12.6898L32.9141 13.1977L27.8071 24.9187C27.6779 25.2155 27.8136 25.5607 28.1102 25.69C28.4086 25.8199 28.7529 25.682 28.8815 25.3869L33.9884 13.6658L35.1544 14.1737C35.0119 14.5009 26.3323 34.4216 26.1968 34.7327ZM35.6226 13.0994L32.2162 11.6153L32.7977 10.2808L36.2041 11.7649L35.6226 13.0994ZM37.5344 8.71156L36.6721 10.6905L33.2658 9.20641L34.128 7.22742C34.5371 6.28828 35.6341 5.85711 36.5733 6.26633C37.5145 6.67633 37.9448 7.77 37.5344 8.71156Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="#"
                                        class="inline-block">Interaction Design</a></h2>
                            </div>
                            <p class="cs_mb_20">Design seamless and intuitive interactions that guide users through a
                                product with ease. I focus on creating meaningful experiences that ensure every action feels
                                natural and purposeful.</p>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div
                            class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                            <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                                <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                    data-src="assets/img/skill5.svg"></div>
                            </div>
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg width="38" height="40" viewBox="0 0 38 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.44607 10.4345C7.69334 10.65 8.06841 10.62 8.27881 10.3706L9.70521 8.6801C9.91388 8.43275 9.88255 8.06315 9.63521 7.8544C9.38779 7.64572 9.01818 7.67713 8.80951 7.9244L7.76701 9.15994L7.40154 8.84158C7.15755 8.62893 6.78748 8.65432 6.57482 8.89846C6.36224 9.14244 6.38771 9.51252 6.63177 9.7251L7.44607 10.4345Z"
                                            fill="white" />
                                        <path
                                            d="M9.63521 18.7069C9.38779 18.4983 9.01818 18.5297 8.80951 18.7769L7.76701 20.0125L7.40154 19.6941C7.15755 19.4815 6.78748 19.5069 6.57482 19.751C6.36224 19.995 6.38771 20.3651 6.63177 20.5776L7.44607 21.2871C7.69334 21.5026 8.06841 21.4726 8.27881 21.2233L9.70521 19.5327C9.91388 19.2854 9.88248 18.9157 9.63521 18.7069Z"
                                            fill="white" />
                                        <path
                                            d="M9.63521 29.5595C9.38779 29.3508 9.01818 29.3822 8.80951 29.6295L7.76701 30.865L7.40154 30.5467C7.15755 30.334 6.78748 30.3594 6.57482 30.6035C6.36224 30.8475 6.38771 31.2176 6.63177 31.4302L7.44607 32.1396C7.69334 32.3552 8.06841 32.3252 8.27881 32.0758L9.70521 30.3853C9.91388 30.1379 9.88248 29.7682 9.63521 29.5595Z"
                                            fill="white" />
                                        <path
                                            d="M15.2129 8.30664H27.5983C27.922 8.30664 28.1842 8.04438 28.1842 7.7207C28.1842 7.39703 27.922 7.13477 27.5983 7.13477H15.2129C14.8892 7.13477 14.627 7.39703 14.627 7.7207C14.627 8.04438 14.8892 8.30664 15.2129 8.30664Z"
                                            fill="white" />
                                        <path
                                            d="M15.2129 11.1606H27.5983C27.922 11.1606 28.1842 10.8984 28.1842 10.5747C28.1842 10.251 27.922 9.98877 27.5983 9.98877H15.2129C14.8892 9.98877 14.627 10.251 14.627 10.5747C14.627 10.8984 14.8892 11.1606 15.2129 11.1606Z"
                                            fill="white" />
                                        <path
                                            d="M10.7185 4.84326H5.5559C4.6059 4.84326 3.83301 5.61615 3.83301 6.56615V7.72045C3.83301 8.04412 4.09527 8.30639 4.41895 8.30639C4.74262 8.30639 5.00488 8.04412 5.00488 7.72045V6.56615C5.00488 6.26232 5.25207 6.01514 5.5559 6.01514H10.7185C11.0223 6.01514 11.2694 6.26232 11.2694 6.56615V11.7287C11.2694 12.0326 11.0223 12.2797 10.7185 12.2797H5.5559C5.25207 12.2797 5.00488 12.0326 5.00488 11.7287V10.5169C5.00488 10.1933 4.74262 9.931 4.41895 9.931C4.09527 9.931 3.83301 10.1933 3.83301 10.5169V11.7287C3.83301 12.6787 4.6059 13.4515 5.5559 13.4515H10.7185C11.6684 13.4515 12.4413 12.6787 12.4413 11.7287V6.56615C12.4412 5.61615 11.6684 4.84326 10.7185 4.84326Z"
                                            fill="white" />
                                        <path
                                            d="M10.7185 15.6958H5.5559C4.6059 15.6958 3.83301 16.4687 3.83301 17.4187V22.5813C3.83301 23.5312 4.6059 24.3041 5.5559 24.3041H10.7185C11.6684 24.3041 12.4413 23.5312 12.4413 22.5813V17.4187C12.4412 16.4687 11.6684 15.6958 10.7185 15.6958ZM11.2693 22.5813C11.2693 22.8851 11.0222 23.1322 10.7184 23.1322H5.5559C5.25207 23.1322 5.00488 22.8851 5.00488 22.5813V17.4187C5.00488 17.1149 5.25207 16.8677 5.5559 16.8677H10.7185C11.0223 16.8677 11.2694 17.1149 11.2694 17.4187L11.2693 22.5813Z"
                                            fill="white" />
                                        <path
                                            d="M10.7185 26.5483H5.5559C4.6059 26.5483 3.83301 27.3212 3.83301 28.2712V33.4338C3.83301 34.3837 4.6059 35.1566 5.5559 35.1566H10.7185C11.6684 35.1566 12.4413 34.3837 12.4413 33.4338V28.2712C12.4412 27.3212 11.6684 26.5483 10.7185 26.5483ZM11.2693 33.4338C11.2693 33.7376 11.0222 33.9847 10.7184 33.9847H5.5559C5.25207 33.9847 5.00488 33.7376 5.00488 33.4338V28.2712C5.00488 27.9674 5.25207 27.7202 5.5559 27.7202H10.7185C11.0223 27.7202 11.2694 27.9674 11.2694 28.2712L11.2693 33.4338Z"
                                            fill="white" />
                                        <path
                                            d="M36.0414 5.19195C34.5098 4.52484 32.721 5.22773 32.0537 6.7593L31.8784 7.16164V4.14C31.8784 1.85719 30.0212 0 27.7384 0H4.27867C1.99586 0 0.138672 1.85719 0.138672 4.14V35.86C0.138672 38.1428 1.99586 40 4.27867 40H27.7384C30.0212 40 31.8784 38.1428 31.8784 35.86V22.3316C32.1787 21.6423 37.2757 9.94398 37.6087 9.17969C38.2777 7.64445 37.5766 5.86086 36.0414 5.19195ZM21.1896 31.6934H15.213C14.8894 31.6934 14.6271 31.9557 14.6271 32.2794C14.6271 32.603 14.8894 32.8653 15.213 32.8653H20.6816C20.4048 33.5308 20.2655 34.2334 20.2702 34.9561V34.9562L20.2962 38.8281H4.27867C2.64203 38.8281 1.31055 37.4966 1.31055 35.86V4.14C1.31055 2.50336 2.64203 1.17188 4.27867 1.17188H27.7384C29.375 1.17188 30.7065 2.50336 30.7065 4.14V9.85125C29.9661 11.5505 27.8855 16.3256 27.1616 17.9872H15.2131C14.8895 17.9872 14.6272 18.2495 14.6272 18.5731C14.6272 18.8968 14.8895 19.1591 15.2131 19.1591H26.651L25.9182 20.841H15.2131C14.8895 20.841 14.6272 21.1033 14.6272 21.427C14.6272 21.7506 14.8895 22.0129 15.2131 22.0129H25.4076L22.4331 28.8396H15.2131C14.8895 28.8396 14.6272 29.1019 14.6272 29.4255C14.6272 29.7492 14.8895 30.0115 15.2131 30.0115H21.9225L21.1896 31.6934ZM21.4421 34.9483C21.4409 34.7615 21.4532 34.5766 21.4762 34.3937C21.9887 34.617 21.2743 34.3057 24.572 35.7425C24.4537 35.8839 24.3267 36.0188 24.1891 36.1451L21.4669 38.642L21.4421 34.9483ZM30.7065 35.86C30.7065 37.4966 29.375 38.8281 27.7384 38.8281H22.9977L24.9812 37.0088C25.5362 36.4996 25.9702 35.8914 26.2712 35.2008L30.7065 25.0211V35.86ZM25.1968 34.7327C25.1963 34.7337 25.1958 34.7347 25.1953 34.7358L24.0294 34.2278L26.7874 27.8978C26.9166 27.6011 26.7809 27.2559 26.4843 27.1266C26.1875 26.9974 25.8423 27.1331 25.713 27.4297L22.955 33.7597L21.7891 33.2517C21.7896 33.2507 21.7899 33.2496 21.7904 33.2486L30.7481 12.6898L31.9141 13.1977L26.8071 24.9187C26.6779 25.2155 26.8136 25.5607 27.1102 25.69C27.4086 25.8199 27.7529 25.682 27.8815 25.3869L32.9884 13.6658L34.1544 14.1737C34.0119 14.5009 25.3323 34.4216 25.1968 34.7327ZM34.6226 13.0994L31.2162 11.6153L31.7977 10.2808L35.2041 11.7649L34.6226 13.0994ZM36.5344 8.71156L35.6721 10.6905L32.2658 9.20641L33.128 7.22742C33.5371 6.28828 34.6341 5.85711 35.5733 6.26633C36.5145 6.67633 36.9448 7.77 36.5344 8.71156Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="#"
                                        class="inline-block">Usability Testing</a></h2>
                            </div>
                            <p class="cs_mb_20">Identify potential issues through rigorous testing with real users. I
                                analyze feedback to make informed improvements, ensuring the final product is efficient,
                                effective, and enjoyable to use.</p>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div
                            class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                            <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                                <div class="cs_service_thumb-in position-relative-in background-filled h-100"
                                    data-src="assets/img/skill6.svg"></div>
                            </div>
                            <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                                <div
                                    class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_516_3345)">
                                            <path
                                                d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z"
                                                fill="white" />
                                            <path
                                                d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z"
                                                fill="white" />
                                            <path
                                                d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z"
                                                fill="white" />
                                            <path
                                                d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z"
                                                fill="white" />
                                            <path
                                                d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z"
                                                fill="white" />
                                            <path
                                                d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_516_3345">
                                                <rect width="40" height="40" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="#"
                                        class="inline-block">Responsive Design</a></h2>
                            </div>
                            <p class="cs_mb_20">Craft designs that adapt beautifully across devices and screen sizes. From
                                mobile to desktop, I ensure a consistent and high-quality experience for users, no matter
                                how they access the product.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- Start Latest Project -->
    <section class="cs_pt_133 cs_pt_lg_73 cs_pb_140 cs_pb_lg_80 background-filled" id="section-4"
        data-src="assets/img/faq_bg_2.jpeg">
        <div class="container">
            <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
                <div class="cs_section_heading_in">
                    <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp"
                        data-wow-duration="0.8s" data-wow-delay="0.2s">My Latest Project</h3>
                    <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Explore My Best <br>Recent Work Projects</h2>
                </div>
            </div>
            <div class="cs_project_slider_2 cs_gap_24">
                <div class="cs_slider_activate">
                    <div class="cs_slide">
                        <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                            <a href="#"
                                class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                            <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6"
                                data-src="assets/img/project1.svg"></div>
                            <h3
                                class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4">
                                <a href="#">Coffeeshop Appdesign</a>
                            </h3>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                            <a href="#"
                                class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                            <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6"
                                data-src="assets/img/project2.svg"></div>
                            <h3
                                class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4">
                                <a href="#">EcoOiL Appdesign</a>
                            </h3>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                            <a href="#"
                                class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                            <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6"
                                data-src="assets/img/project3.svg"></div>
                            <h3
                                class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4">
                                <a href="#">EcoOiL Webdesign</a>
                            </h3>
                        </div>
                    </div>
                    {{-- <div class="cs_slide">
                        <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                            <a href="{{ url('project-details') }}"
                                class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                            <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6"
                                data-src="assets/img/portfolio_4.jpeg"></div>
                            <h3
                                class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4">
                                <a href="{{ url('project-details') }}">Marketing Webdesign</a>
                            </h3>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                            <a href="{{ url('project-details') }}"
                                class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                            <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6"
                                data-src="assets/img/portfolio_1.jpeg"></div>
                            <h3
                                class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4">
                                <a href="{{ url('project-details') }}">Marketing Webdesign</a>
                            </h3>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                            <a href="{{ url('project-details') }}"
                                class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                            <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6"
                                data-src="assets/img/portfolio_2.jpeg"></div>
                            <h3
                                class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4">
                                <a href="{{ url('project-details') }}">Marketing Webdesign</a>
                            </h3>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                            <a href="{{ url('project-details') }}"
                                class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                            <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6"
                                data-src="assets/img/portfolio_3.jpeg"></div>
                            <h3
                                class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4">
                                <a href="{{ url('project-details') }}">Marketing Webdesign</a>
                            </h3>
                        </div>
                    </div>
                    <div class="cs_slide">
                        <div class="cs_portfolio cs_style_1 position-relative overflow-hidden">
                            <a href="{{ url('project-details') }}"
                                class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
                            <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6"
                                data-src="assets/img/portfolio_4.jpeg"></div>
                            <h3
                                class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4">
                                <a href="{{ url('project-details') }}">Marketing Webdesign</a>
                            </h3>
                        </div>
                    </div> --}}
                </div>
                <div
                    class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4 position-absolute">
                    <svg width="20" height="8" viewBox="0 0 20 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z"
                            fill="black" />
                        <path
                            d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z"
                            fill="black" />
                    </svg>
                </div>
                <div
                    class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4 position-absolute">
                    <svg width="20" height="8" viewBox="0 0 20 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z"
                            fill="#18191D" />
                        <path
                            d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z"
                            fill="#18191D" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- End Latest Project -->

    <!-- Start Testimonial Section -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_pb_140 cs_pb_lg_80 background-filled" id="section-5"
        data-src="assets/img/testimonial_bg_1.jpeg">
        <div class="container">
            <div class="position-relative">
                <div class="cs_testimonial_thumb">
                    <div class="cs_testimonial_thumb-item">
                        <div class="cs_rating text-accent cs_mb_30" data-rating="5">
                            <div class="cs_rating_percentage"></div>
                        </div>
                        <blockquote class="cs_testimonial_text cs_fs_26 cs_fs_lg_22 text-white fw-medium">Working with
                            Arfan was a game-changer for our product. The UI/UX design not only improved the look of our
                            platform but also made it much easier for our users to navigate. The attention to detail and
                            user-centric approach truly set Arfan apart!
                        </blockquote>
                        <div class="cs_testimonial_info d-flex cs_mt_16 cs_column_gap_13">
                            <h2 class="cs_fs_18 fw-medium text-white m-0">Septian Wali</h2>
                            <h3 class="cs_fs_18 fw-normal text-accent m-0">Web design</h3>
                        </div>
                    </div>
                    <div class="cs_testimonial_thumb-item">
                        <div class="cs_rating text-accent cs_mb_30" data-rating="5">
                            <div class="cs_rating_percentage"></div>
                        </div>
                        <blockquote class="cs_testimonial_text cs_fs_26 cs_fs_lg_22 text-white fw-medium">The user
                            experience design created by Arfan exceeded our expectations. The usability testing and
                            thoughtful design iterations helped us build a product that resonates with our audience. We’ve
                            seen a significant increase in user engagement since implementing the new design.
                        </blockquote>
                        <div class="cs_testimonial_info d-flex cs_mt_16 cs_column_gap_13">
                            <h2 class="cs_fs_18 fw-medium text-white m-0">Bayu Setiawan</h2>
                            <h3 class="cs_fs_18 fw-normal text-accent m-0">App design</h3>
                        </div>
                    </div>
                    <div class="cs_testimonial_thumb-item">
                        <div class="cs_rating text-accent cs_mb_30" data-rating="5">
                            <div class="cs_rating_percentage"></div>
                        </div>
                        <blockquote class="cs_testimonial_text cs_fs_26 cs_fs_lg_22 text-white fw-medium">From wireframing
                            to final prototypes, Arfan guided us through every step of the design process. The interface is
                            both beautiful and functional, and our team is incredibly happy with the results. Highly
                            recommended for anyone looking to elevate their digital products!
                        </blockquote>
                        <div class="cs_testimonial_info d-flex cs_mt_16 cs_column_gap_13">
                            <h2 class="cs_fs_18 fw-medium text-white m-0">Dwi Puspita</h2>
                            <h3 class="cs_fs_18 fw-normal text-accent m-0">Web design</h3>
                        </div>
                    </div>
                </div>
                <div class="cs_testimonial_nav-active">
                    <div class="cs_testimonial_nav cs_gap_24">
                        <div class="cs_testimonial_nav-item">
                        </div>
                        <div class="cs_testimonial_nav-item">
                        </div>
                        <div class="cs_testimonial_nav-item">
                        </div>
                    </div>
                    <div class="d-flex cs_column_gap_15 justify-content-center cs_mt_50 cs_mt_lg_20">
                        <div
                            class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                            <svg width="20" height="8" viewBox="0 0 20 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z"
                                    fill="black" />
                                <path
                                    d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z"
                                    fill="black" />
                            </svg>
                        </div>
                        <div
                            class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                            <svg width="20" height="8" viewBox="0 0 20 8" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z"
                                    fill="#18191D" />
                                <path
                                    d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z"
                                    fill="#18191D" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start Contact Section  -->
    <section class="background-filled cs_pt_80 cs_pt_lg_75 cs_pb_110 cs_pb_lg_80" id="section-6"
        data-src="assets/img/contact_bg.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="cs_section_heading cs_style_1 cs_mb_40">
                        <div class="cs_section_heading_in">
                            <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInLeft" data-wow-duration="0.8s"
                                data-wow-delay="0.2s">Contact With Me</h3>
                            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Let’s Work Together?</h2>
                            <p class="m-0">Providing user research, interface design, usability testing, prototyping,
                                interaction design, and other UX/UI support for digital products.
                                <br>Focused on creating intuitive, user-centered experiences that enhance both functionality
                                and aesthetics.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center cs_mb_30">
                                <div
                                    class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M31.6128 24.7786C30.7939 23.9259 29.8062 23.47 28.7593 23.47C27.7209 23.47 26.7247 23.9175 25.8721 24.7701L23.2043 27.4295C22.9848 27.3113 22.7653 27.2015 22.5543 27.0918C22.2503 26.9398 21.9633 26.7963 21.7185 26.6443C19.2196 25.0572 16.9486 22.9888 14.7705 20.3126C13.7152 18.9787 13.006 17.8559 12.4911 16.7162C13.1833 16.083 13.8249 15.4245 14.4497 14.7914C14.6861 14.555 14.9224 14.3102 15.1588 14.0738C16.9317 12.3009 16.9317 10.0046 15.1588 8.23172L12.8541 5.92698C12.5924 5.66527 12.3222 5.39512 12.0689 5.12497C11.5624 4.60155 11.0305 4.06124 10.4818 3.5547C9.6629 2.74425 8.6836 2.31369 7.65364 2.31369C6.62368 2.31369 5.62749 2.74425 4.78327 3.5547C4.77482 3.56315 4.77482 3.56315 4.76638 3.57159L1.89601 6.46729C0.815398 7.5479 0.199112 8.86489 0.0640356 10.3929C-0.138579 12.8581 0.587457 15.1544 1.14465 16.6571C2.5123 20.3464 4.55533 23.7655 7.60299 27.4295C11.3007 31.8448 15.7498 35.3314 20.832 37.7881C22.7738 38.7083 25.3655 39.7974 28.2612 39.9831C28.4385 39.9916 28.6242 40 28.7931 40C30.7433 40 32.3811 39.2993 33.6643 37.9063C33.6727 37.8894 33.6896 37.881 33.6981 37.8641C34.1371 37.3322 34.6436 36.851 35.1755 36.3361C35.5385 35.9899 35.9099 35.6269 36.2729 35.247C37.1087 34.3774 37.5477 33.3644 37.5477 32.326C37.5477 31.2791 37.1003 30.2745 36.2476 29.4303L31.6128 24.7786ZM34.6351 33.6683C34.6267 33.6683 34.6267 33.6767 34.6351 33.6683C34.3059 34.0229 33.9682 34.3437 33.6052 34.6983C33.0564 35.2217 32.4993 35.7704 31.9758 36.3867C31.1232 37.2985 30.1185 37.729 28.8015 37.729C28.6749 37.729 28.5398 37.729 28.4132 37.7206C25.9058 37.5602 23.5758 36.5809 21.8282 35.7451C17.0499 33.4319 12.8541 30.1479 9.36742 25.9858C6.48861 22.5161 4.56377 19.308 3.28898 15.8635C2.50385 13.7614 2.21682 12.1236 2.34345 10.5787C2.42787 9.59093 2.80777 8.77203 3.50848 8.07132L6.3873 5.19251C6.80097 4.80416 7.23997 4.5931 7.67052 4.5931C8.20239 4.5931 8.63294 4.91391 8.9031 5.18406C8.91154 5.19251 8.91998 5.20095 8.92842 5.20939C9.4434 5.6906 9.93305 6.18869 10.448 6.72056C10.7097 6.99071 10.9799 7.26086 11.25 7.53946L13.5548 9.8442C14.4497 10.7391 14.4497 11.5664 13.5548 12.4613C13.31 12.7061 13.0736 12.951 12.8288 13.1873C12.1196 13.9134 11.4442 14.5888 10.7097 15.2473C10.6929 15.2641 10.676 15.2726 10.6675 15.2895C9.9415 16.0155 10.0766 16.7247 10.2285 17.2059C10.237 17.2312 10.2454 17.2565 10.2539 17.2818C10.8533 18.7339 11.6975 20.1016 12.9807 21.7309L12.9892 21.7394C15.3192 24.6097 17.7759 26.8469 20.4859 28.5607C20.832 28.7802 21.1866 28.9575 21.5243 29.1264C21.8282 29.2783 22.1153 29.4218 22.3601 29.5738C22.3938 29.5907 22.4276 29.616 22.4614 29.6329C22.7484 29.7764 23.0186 29.8439 23.2972 29.8439C23.9979 29.8439 24.4369 29.4049 24.5804 29.2614L27.4677 26.3742C27.7547 26.0871 28.2106 25.741 28.7424 25.741C29.2659 25.741 29.6964 26.0702 29.9581 26.3573C29.9666 26.3657 29.9666 26.3657 29.975 26.3742L34.6267 31.0259C35.4963 31.887 35.4963 32.7734 34.6351 33.6683Z"
                                            fill="white" />
                                        <path
                                            d="M21.6168 9.51496C23.8287 9.88642 25.838 10.9333 27.442 12.5373C29.046 14.1413 30.0844 16.1506 30.4643 18.3625C30.5572 18.9197 31.0384 19.308 31.5872 19.308C31.6547 19.308 31.7138 19.2996 31.7813 19.2911C32.4061 19.1898 32.8197 18.5989 32.7184 17.9741C32.2625 15.2979 30.9962 12.8581 29.0629 10.9248C27.1296 8.99154 24.6898 7.7252 22.0136 7.26932C21.3889 7.16801 20.8064 7.58168 20.6966 8.19797C20.5869 8.81425 20.9921 9.41365 21.6168 9.51496Z"
                                            fill="white" />
                                        <path
                                            d="M39.9542 17.6449C39.2028 13.238 37.126 9.22793 33.9349 6.03675C30.7437 2.84557 26.7336 0.768768 22.3267 0.017406C21.7104 -0.0923436 21.1279 0.32977 21.0182 0.946056C20.9169 1.57078 21.3305 2.1533 21.9553 2.26305C25.8894 2.92999 29.4773 4.79573 32.3308 7.64078C35.1843 10.4943 37.0416 14.0822 37.7086 18.0163C37.8014 18.5735 38.2826 18.9619 38.8314 18.9619C38.8989 18.9619 38.958 18.9534 39.0256 18.945C39.6418 18.8521 40.0639 18.2612 39.9542 17.6449Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-accent cs_mb_10">Have Any Question?</p>
                                    <h2 class="m-0 fw-medium cs_fs_22 cs_lh_base">+62 852-5772-2817</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center cs_mb_30">
                                <div
                                    class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M34.1388 5H5.86125C4.63868 5.00132 3.46656 5.48758 2.60207 6.35207C1.73758 7.21656 1.25132 8.38868 1.25 9.61125V30.3888C1.25132 31.6113 1.73758 32.7834 2.60207 33.6479C3.46656 34.5124 4.63868 34.9987 5.86125 35H34.1388C35.3613 34.9987 36.5334 34.5124 37.3979 33.6479C38.2624 32.7834 38.7487 31.6113 38.75 30.3888V9.61125C38.7487 8.38868 38.2624 7.21656 37.3979 6.35207C36.5334 5.48758 35.3613 5.00132 34.1388 5ZM5.86125 7.5H34.1388C34.6985 7.50066 35.2351 7.72331 35.6309 8.1191C36.0267 8.51489 36.2493 9.05151 36.25 9.61125V10.5675L20 21.0138L3.75 10.5675V9.61125C3.75066 9.05151 3.97331 8.51489 4.3691 8.1191C4.76489 7.72331 5.30151 7.50066 5.86125 7.5ZM34.1388 32.5H5.86125C5.30151 32.4993 4.76489 32.2767 4.3691 31.8809C3.97331 31.4851 3.75066 30.9485 3.75 30.3888V13.54L19.3237 23.5512C19.5254 23.681 19.7602 23.75 20 23.75C20.2398 23.75 20.4746 23.681 20.6763 23.5512L36.25 13.54V30.3888C36.2493 30.9485 36.0267 31.4851 35.6309 31.8809C35.2351 32.2767 34.6985 32.4993 34.1388 32.5Z"
                                            fill="white" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-accent cs_mb_10">Send Email</p>
                                    <h2 class="m-0 fw-medium cs_fs_22 cs_lh_base">arfanromadhani@gmail.com</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1">
                    <div class="cs_contact_wrap cs_type_1 position-relative">
                        <form id="contactForm"
                            class="cs_contact_form bg-white cs_pt_64 cs_pl_80 cs_pr_80 cs_pb_80 cs_pl_lg_30 cs_pr_lg_30 position-relative cs_rounded_20 filter-lg"
                            data-src="assets/img/contact_bg_pattern.svg">
                            <div class="cs_section_heading cs_style_1 text-center cs_mb_30">
                                <div class="cs_section_heading_in">
                                    <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Contact Me</h2>
                                </div>
                            </div>
                            <input id="name" class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15"
                                type="text" placeholder="Your Name" required>
                            <input id="email" class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15"
                                type="email" placeholder="Your Email" required>
                            <textarea id="message" class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_30" placeholder="Message here ..."
                                cols="30" rows="4" required></textarea>
                            <button type="submit"
                                class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden">
                                <span>Submit Now</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section  -->
@endsection

<style>
    .cs_brand img {
        width: 230px;
        /* Enlarge image */
        height: auto;
        filter: grayscale(100%);
        /* Make image grayscale */
        transition: all 0.3s ease;
        /* Smooth transition */
        cursor: pointer;
    }

    /* Restore color on click */
    .cs_brand img:active,
    .cs_brand img:focus {
        filter: grayscale(0%);
        /* Remove grayscale on click */
    }

    /* Optionally restore color on hover instead of click */
    .cs_brand img:hover {
        filter: grayscale(0%);
    }
</style>

<script>
    // GSAP ScrollTo Functionality
    document.addEventListener('DOMContentLoaded', function() {
        gsap.registerPlugin(ScrollToPlugin);

        window.scrollToSection = function(id) {
            const section = document.getElementById(`section-${id}`);
            const navbarHeight = document.querySelector(".cs_site_header").offsetHeight;

            if (section) {
                const sectionTop = section.offsetTop - navbarHeight;
                gsap.to(window, {
                    scrollTo: {
                        y: sectionTop,
                        autoKill: false
                    },
                    duration: 1.5,
                    ease: "power2.inOut",
                });
            }
        };
    });

    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah perilaku submit default

        // Mengambil data form
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var message = document.getElementById('message').value;

        // Memeriksa apakah semua field diisi
        if (name === '' || email === '' || message === '') {
            alert("Please fill in all the fields.");
            return; // Menghentikan fungsi jika validasi gagal
        }

        // Membuat pesan untuk WhatsApp
        var whatsappMessage = 'Hello, my name is ' + name + '.%0A' +
            'My email is: ' + email + '.%0A' +
            'Message: ' + message;

        // URL API WhatsApp (tanpa tanda + di depan nomor telepon)
        var whatsappURL = 'https://api.whatsapp.com/send?phone=6285257722817&text=' + encodeURIComponent(
            whatsappMessage);

        // Redirect ke URL WhatsApp (di tab yang sama)
        window.location.href = whatsappURL;
    });
</script>
