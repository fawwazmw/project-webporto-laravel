@extends('layout.layout')

@section('content')
    <!-- Start Header Section -->
    <header class="cs_site_header cs_style_1 cs_sticky_header cs_site_header_full_width">
      <div class="cs_main_header">
        <div class="container">
          <div class="cs_main_header_in">
            <div class="cs_main_header_left">
              <a class="cs_site_branding" href="{{ url('index') }}">
                <img src="assets/img/logo.svg" alt="Logo">
              </a>
              <div class="cs_nav cs_primary_font fw-medium">
                <ul class="cs_nav_list fw-medium text-uppercase">
                  <li class="menu-item-has-children">
                    <a href="{{ url('index') }}">Home</a>
                    <ul>
                      <li><a href="{{ url('index') }}">Business</a></li>
                      <li><a href="{{ url('corporate') }}">Corporate</a></li>
                      <li><a href="{{ url('finance') }}">Financial institute</a></li>
                      <li><a href="{{ url('insurance') }}">Insurance Company</a></li>
                      <li><a href="{{ url('consulting') }}">Consulting Agency</a></li>
                      <li><a href="{{ url('business-with-ecommerce') }}">Business With E-Commerce</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('about') }}">About</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul>
                      <li><a href="{{ url('project-details') }}">Project Details</a></li>
                      <li><a href="{{ url('services-details') }}">Service Details</a></li>
                      <li><a href="{{ url('team') }}">Team </a></li>
                      <li><a href="{{ url('team-details') }}">Team Member</a></li>
                      <li><a href="{{ url('pricing') }}">Pricing Page</a></li>
                      <li><a href="{{ url('shop') }}">Our Store</a></li>
                      <li><a href="{{ url('shop-product-details') }}">Product Details</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('service') }}">Services</a></li>
                  <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul>
                      <li><a href="{{ url('blog-grid') }}">Blog Grid</a></li>
                      <li><a href="{{ url('blog-list-with-sidebar') }}">Blog List With Sidebar</a></li>
                      <li><a href="{{ url('blog-details') }}">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="cs_main_header_right">
              <div class="cs_toolbox">
                <div class="cs_header_search_wrap position-relative">
                  <span class="cs_header_search_btn d-flex">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24.7628 23.6399L18.3082 17.2884C19.9984 15.452 21.037 13.0234 21.037 10.3509C21.0362 4.63387 16.3273 0 10.5181 0C4.70891 0 0 4.63387 0 10.3509C0 16.0678 4.70891 20.7017 10.5181 20.7017C13.0281 20.7017 15.3301 19.8335 17.1384 18.3902L23.618 24.7667C23.9338 25.0777 24.4463 25.0777 24.7621 24.7667C25.0785 24.4557 25.0785 23.9509 24.7628 23.6399ZM10.5181 19.1092C5.60289 19.1092 1.61836 15.1879 1.61836 10.3509C1.61836 5.51376 5.60289 1.59254 10.5181 1.59254C15.4333 1.59254 19.4178 5.51376 19.4178 10.3509C19.4178 15.1879 15.4333 19.1092 10.5181 19.1092Z" fill="currentColor"/>
                    </svg>                    
                  </span>
                  <form class="cs_header_search_form position-absolute bg-white cs_transition_3 cs_rounded_5 end-0 cs_pt_20 cs_pb_20 cs_pl_20 cs_pr_20">
                    <input type="text" placeholder="Type your keywork  ...">
                    <button class="cs_header_search_sumbit_btn">
                      <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.7628 23.6399L18.3082 17.2884C19.9984 15.452 21.037 13.0234 21.037 10.3509C21.0362 4.63387 16.3273 0 10.5181 0C4.70891 0 0 4.63387 0 10.3509C0 16.0678 4.70891 20.7017 10.5181 20.7017C13.0281 20.7017 15.3301 19.8335 17.1384 18.3902L23.618 24.7667C23.9338 25.0777 24.4463 25.0777 24.7621 24.7667C25.0785 24.4557 25.0785 23.9509 24.7628 23.6399ZM10.5181 19.1092C5.60289 19.1092 1.61836 15.1879 1.61836 10.3509C1.61836 5.51376 5.60289 1.59254 10.5181 1.59254C15.4333 1.59254 19.4178 5.51376 19.4178 10.3509C19.4178 15.1879 15.4333 19.1092 10.5181 19.1092Z" fill="currentColor"/>
                        </svg>                        
                    </button>
                  </form>
                </div>
                <div class="cs_header_contact">
                  <div class="cs_header_contact_icon text-accent">
                    <svg width="35" height="36" viewBox="0 0 35 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_81_254)">
                      <path d="M18.1846 18.6831C18.1846 19.0607 17.8786 19.3667 17.501 19.3667C17.1234 19.3667 16.8174 19.0607 16.8174 18.6831C16.8174 18.3055 17.1234 17.9995 17.501 17.9995C17.8786 17.9995 18.1846 18.3055 18.1846 18.6831Z" fill="currentColor"/>
                      <path d="M28.9669 19.1887C28.2043 18.4264 26.9696 18.425 26.2069 19.1885L23.9057 21.4892C23.4576 21.9378 22.7657 22.0294 22.2608 21.7065C21.5959 21.282 20.9029 20.7818 20.2015 20.2197C19.9067 19.9837 19.4765 20.0312 19.2404 20.3257C19.0044 20.6205 19.0519 21.0507 19.3467 21.2868C20.0861 21.879 20.8188 22.408 21.5246 22.8588C22.566 23.5242 23.9743 23.3549 24.8726 22.4558L27.1741 20.1551C27.3989 19.93 27.7672 19.9225 28.0022 20.1575L33.4626 25.5697C33.6904 25.7974 33.6901 26.1683 33.4626 26.3961L32.0615 27.7975C30.0521 29.8061 26.8756 30.3396 24.3361 29.0944C13.2881 23.6775 7.80304 13.9181 6.38512 11.0561C5.12742 8.51667 5.64999 5.44317 7.68555 3.40761L9.05487 2.03722C9.28292 1.80944 9.65382 1.80944 9.88159 2.03695L15.2964 7.45176C15.5244 7.6798 15.5247 8.04937 15.2964 8.27741L12.9954 10.5787C12.0963 11.4777 11.927 12.8858 12.5925 13.9267C13.212 14.8965 13.9687 15.9037 14.8414 16.9206C15.0873 17.2068 15.5188 17.24 15.8056 16.994C16.0919 16.7481 16.125 16.3166 15.8791 16.0298C15.0478 15.0615 14.3298 14.1064 13.7444 13.1902C13.4219 12.6858 13.5135 11.9942 13.9623 11.5453L16.2633 9.24432C17.0257 8.48195 17.0259 7.24748 16.2633 6.48511L10.8482 1.07004C10.088 0.310076 8.85006 0.309809 8.08823 1.07031L6.71837 2.44096C4.26812 4.89149 3.64167 8.59731 5.15999 11.6628C6.62625 14.6225 12.2995 24.7154 23.7342 30.322C24.8373 30.8627 26.0344 31.1383 27.2555 31.1383C27.2694 31.1383 27.2833 31.1375 27.2972 31.1372C27.0993 32.8214 25.6641 34.1325 23.9278 34.1325H19.5117C18.218 34.1325 17.0551 33.4136 16.4767 32.2563L15.5648 30.4333C15.4489 30.2015 15.2123 30.0555 14.9533 30.0555C14.6945 30.0555 14.4577 30.2018 14.342 30.4333L12.9148 33.2876L11.4878 30.4333C11.3719 30.2015 11.1353 30.0555 10.8763 30.0555C10.6175 30.0555 10.3807 30.2018 10.265 30.4333L8.83778 33.2876L7.41078 30.4333C7.29489 30.2015 7.0583 30.0555 6.79928 30.0555C6.54053 30.0555 6.30368 30.2018 6.18805 30.4333L4.76079 33.2876L3.33379 30.4333C3.21789 30.2015 2.98131 30.0555 2.72229 30.0555C2.46354 30.0555 2.22668 30.2018 2.11106 30.4333L0.072297 34.5106C-0.0964651 34.8481 0.0402536 35.2588 0.378045 35.4276C0.717171 35.5971 1.12706 35.4583 1.29529 35.1218L2.72229 32.2678L4.14929 35.1218C4.26518 35.3536 4.50177 35.4996 4.76079 35.4996C5.0198 35.4996 5.25639 35.3533 5.37228 35.1218L6.79928 32.2678L8.22628 35.1218C8.34217 35.3536 8.57876 35.4996 8.83778 35.4996C9.0968 35.4996 9.33339 35.3533 9.44928 35.1218L10.8763 32.2678L12.3033 35.1218C12.4192 35.3536 12.6558 35.4996 12.9148 35.4996C13.1738 35.4996 13.4104 35.3533 13.5263 35.1218L14.9535 32.2675L15.2537 32.8678C16.0649 34.4913 17.6965 35.4996 19.5117 35.4996H23.9278C26.4609 35.4996 28.5376 33.5111 28.6801 31.013C30.3435 30.7222 31.846 29.9457 33.0282 28.7641L34.4298 27.3622C35.19 26.6012 35.1898 25.3632 34.4274 24.6006L28.9669 19.1887Z" fill="currentColor"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_81_254">
                      <rect width="35" height="35" fill="white" transform="translate(0 0.5)"/>
                      </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <div class="cs_header_contact_right">
                    <h3 class="text-white fw-normal cs_mb_6 cs_fs_13">Need help?  Call us:</h3>
                    <h3 class="text-white m-0 cs_fs_13">(+800) 1234 5678 90</h3>
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
    <section class="cs_hero cs_style_4 bg-primary position-relative d-flex align-items-center justify-content-center overflow-hidden youtube-bg" data-src="assets/img/hero_video_bg.jpeg">
      <div id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/embed/I2SeBj6R-mc', containment:'.youtube-bg',autoPlay:true, mute:true, startAt:1, opacity:1, showControls:false, loop:true}"></div>
      <div class="container position-relative cs_zindex_2">
        <div class="cs_hero_text">
          <h1 class="text-white cs_mb_28 cs_fs_60 cs_fs_lg_46">Strategic Solutions for Business Growth Your Path to Success</h1>
          <p class="text-white cs_mb_40">Welcome to BizServe, your one-stop destination for comprehensive <br>financial insights and top-notch services.</p>
          <div class="cs_hero_btn">
            <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
            <a href="{{ url('contact') }}" class="cs_btn cs_style_2 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_9 cs_pb_9 overflow-hidden"><span>Learn More</span></a>
          </div>
        </div>
      </div>
      <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5">
        <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
        <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#" class="d-flex align-items-center justify-content-center cs_height_35 cs_width_35 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
      </div>
    </section>
    <!-- End Hero -->

    <!-- Start About Section -->
    <section class="cs_pt_135 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80 position-relative">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 cs_mb_lg_55">
            <div class="cs_experience cs_style_1 position-relative">
              <div class="cs_experience_thumb">
                <img src="assets/img/experience_img.jpeg" alt="Thumb" class="position-relative cs_zindex_3 cs_rounded_15">
                <div class="cs_experience_shape"><img src="assets/img/experience_shape_1.png" alt="Shape" class="moving_x"></div>
              </div>
              <div class="cs_experience_box background-filled text-center bg-white cs_rounded_10 position-absolute bottom-0 end-0 cs_zindex_3 d-flex flex-column justify-content-center align-items-center" data-src="assets/img/experience_bg.jpeg">
                <img src="assets/img/experience_icon.svg" alt="Icon" class="cs_mb_5">
                <h3 class="text-white cs_fs_60 cs_fs_lg_46 fw-bold lh_1 mb-0 d-flex justify-content-between">
                  <span data-count-to="40" class="odometer"></span>
                  <span class="fw-light">+</span>
                </h3>
                <h2 class="cs_fs_18 fw-normal text-white m-0">Work Experience</h2>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_about cs_style_1">
              <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_15">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">About Us</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Get Ready for Success with <span class="text-accent">Bizmax</span> Your Path to Growth.</h2>
                  <p class="m-0">Providing legal advice, contract drafting, compliance assistance, intellectual property protection, and other legal support for businesses. Creating visual content, such as logos, brochures, infographics, and other branding materials.</p>
                </div>
              </div>
              <div class="cs_progressbar cs_style_1 cs_mb_20">
                <div class="cs_progressbar_heading d-flex justify-content-between align-items-center cs_mb_8">
                  <h3 class="fw-medium m-0 cs_fs_18">Web development</h3>
                  <p class="cs_fs_14 cs_lh_base m-0">90%</p>
                </div>
                <div class="cs_progress cs_rounded_8 overflow-hidden" data-progress="90">
                  <div class="cs_progress_in bg-accent cs_rounded_8 h-100 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s"></div>
                </div>
              </div><!-- .cs_progressbar -->
              <div class="row cs_mb_15">
                <div class="col-lg-6">
                  <div class="cs_about-icon-box position-relative cs_mb_25">
                    <span class="position-absolute cs_height_20 cs_width_20 top-0 start-0 cs_mt_5 bg-accent text-white cs_fs_10 d-flex align-items-center justify-content-center cs_rounded_30"><i class="fa-solid fa-angles-right"></i></span>
                    <h3 class="cs_fs_16 cs_pl_35 cs_mb_12 cs_lh_lg">Accounting and Bookkeeping</h3>
                    <p class="m-0">Services related to financial record-keeping, bookkeeping.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="cs_about-icon-box position-relative cs_mb_25">
                    <span class="position-absolute cs_height_20 cs_width_20 top-0 start-0 cs_mt_5 bg-accent text-white cs_fs_10 d-flex align-items-center justify-content-center cs_rounded_30"><i class="fa-solid fa-angles-right"></i></span>
                    <h3 class="cs_fs_16 cs_pl_35 cs_mb_12 cs_lh_lg">Human Resources (HR) Consulting</h3>
                    <p class="m-0">Assistance with HR-related tasks such as recruitment.</p>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center cs_row_gap_20 cs_column_gap_30 cs_column_gap_lg_20 flex-wrap">
                <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Get A Quote</span></a>
                <a href="https://www.youtube.com/embed/VStvZjykQ00" class="cs_video_open d-flex align-items-center">
                  <span class="cs_player_btn cs_width_45 cs_height_45 rounded-circle d-flex align-items-center justify-content-center text-white bg-primary position-relative cs_pl_5">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M1.71401 16C1.61636 16 1.51868 15.9748 1.43054 15.9246C1.25251 15.8231 1.14258 15.6339 1.14258 15.4285V0.570579C1.14258 0.365193 1.25251 0.176009 1.43054 0.0744495C1.61022 -0.026561 1.82844 -0.0243301 2.00475 0.0783627L14.5762 7.50735C14.7503 7.6106 14.8569 7.79755 14.8569 7.99957C14.8569 8.20159 14.7503 8.38855 14.5762 8.49179L2.00475 15.9207C1.9149 15.9732 1.81443 16 1.71401 16ZM2.28544 1.57172V14.4274L13.1621 7.99957L2.28544 1.57172Z" fill="white"/>
                    </svg>   
                  </span>
                  <span class="cs_ml_15">Watch the video</span>               
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_section_shape-1 position-absolute semi_rotate">
        <svg width="182" height="177" viewBox="0 0 182 177" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M94.4478 96.1115C106.99 105.211 120.6 111.159 132.748 112.86C132.823 112.871 132.894 112.876 132.967 112.886L150.387 27.5688C151.002 24.552 147.98 22.0838 145.148 23.2887L63.8438 57.8735C67.5196 70.1011 78.6592 84.6548 94.4478 96.1115Z" fill="#888888" fill-opacity="0.2"/>
          <path d="M128.155 120.487C115.612 118.057 102.053 111.863 89.5833 102.815C72.3806 90.3334 60.5954 75.0018 56.1891 61.1295L14.8513 78.7143C11.6218 80.0876 11.7968 84.724 15.1212 85.8483L74.9037 106.09C78.4203 107.281 81.3895 109.706 83.2572 112.915L115.015 167.46C116.78 170.492 121.358 169.74 122.061 166.301L131.308 121.013C130.265 120.863 129.215 120.692 128.155 120.487Z" fill="#888888" fill-opacity="0.2"/>
          <path d="M129.41 114.012C116.866 111.583 103.307 105.387 90.8381 96.3405C61.4995 75.0532 47.8833 45.4701 59.84 28.9897C71.7975 12.512 104.146 16.278 133.483 37.5651C143.082 44.5285 151.409 52.7615 157.564 61.3736C158.895 63.2352 158.464 65.8208 156.603 67.1511C154.742 68.4799 152.156 68.0495 150.827 66.1896C145.184 58.2942 137.505 50.7138 128.621 44.2672C103.894 26.326 75.466 21.5559 66.5447 33.8531C57.6235 46.1491 70.9766 71.6938 95.7041 89.6352C108.246 98.7348 121.848 104.686 134.005 106.383C145.234 107.955 153.677 105.705 157.78 100.049C162.059 94.1524 160.568 86.183 158.563 80.5345C157.799 78.3788 158.926 76.0123 161.081 75.2472C163.236 74.4823 165.604 75.6089 166.369 77.7657C170.142 88.3972 169.474 98.04 164.484 104.915C158.497 113.168 147.265 116.603 132.859 114.587C131.719 114.43 130.568 114.237 129.41 114.012Z" fill="#888888" fill-opacity="0.2"/>
        </svg>          
      </div>
    </section>
    <!-- End About Section -->

    <!-- Start Service Section -->
    <section class="cs_pb_140 cs_pb_lg_80">
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Service List</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">We Provide Various <br>Insurance For Our Clients</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="cs_service_slider_2 cs_gap_24">
          <div class="cs_slider_activate">
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_9.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_558_1348)">
                      <path d="M0 29.3084C0.203483 29.076 0.399139 28.8436 0.610448 28.6189C2.23048 26.9455 3.85834 25.2798 5.48621 23.6064C6.00274 23.0718 6.39405 23.0563 6.91058 23.5754C7.20798 23.8776 7.47408 24.2184 7.78713 24.5826C7.96713 24.3579 8.05322 24.2494 8.13931 24.141C9.56369 22.3513 11.3089 21.0343 13.6099 20.5307C14.9638 20.2363 16.3021 20.3138 17.6247 20.6702C18.8926 21.011 20.1761 21.1427 21.4831 21.1427C23.3457 21.1427 25.2084 21.1582 27.071 21.135C28.2528 21.1195 29.2154 21.4914 29.8963 22.5373C30.0137 22.4366 30.1154 22.3436 30.2094 22.2506C31.5789 20.9103 32.9407 19.5623 34.3181 18.2298C35.7269 16.874 38.0043 16.9824 39.2878 18.4622C40.2191 19.5391 40.2191 20.9258 39.2409 22.0957C38.106 23.4515 36.9399 24.7917 35.7816 26.1398C34.866 27.2089 33.919 28.2625 33.0346 29.3549C31.9076 30.7417 30.4128 31.3847 28.6832 31.4467C26.7501 31.5242 24.8014 31.4854 22.8683 31.4932C21.0057 31.5087 19.143 31.5087 17.2882 31.5397C16.6934 31.5474 16.1064 31.6481 15.4412 31.7178C15.5664 31.8573 15.6447 31.9503 15.7308 32.0355C16.2317 32.5313 16.2395 32.9264 15.7464 33.43C14.4786 34.7238 13.2029 36.0099 11.9272 37.3037C11.4811 37.753 11.0428 38.2101 10.5889 38.6594C10.1585 39.0855 9.75934 39.0933 9.3289 38.6904C6.33927 35.8704 3.32616 33.0349 0.328703 30.1994C0.203483 30.0754 0.109568 29.9127 0 29.7733C0 29.6183 0 29.4634 0 29.3084ZM9.04715 25.6207C10.6046 27.1159 12.1464 28.5879 13.6803 30.0832C13.8916 30.2923 14.0951 30.3466 14.369 30.3078C16.3021 30.0367 18.2508 29.9282 20.2074 29.9515C22.8996 29.9747 25.5997 29.9669 28.2919 29.9437C29.7946 29.9282 31.0468 29.4014 32.025 28.1851C33.379 26.5039 34.8268 24.9002 36.2356 23.2578C36.8538 22.5373 37.4799 21.8323 38.0747 21.104C38.6461 20.399 38.513 19.694 37.7539 19.1982C36.9869 18.6868 36.0634 18.7643 35.3982 19.4073C33.7781 20.9878 32.1581 22.576 30.5459 24.172C30.4441 24.2727 30.3581 24.4199 30.3346 24.5593C30.0685 26.3722 28.9885 27.3174 27.1415 27.3251C25.4745 27.3329 23.8075 27.3251 22.1405 27.3251C22.0387 27.3251 21.9292 27.3251 21.8274 27.3174C21.4518 27.2786 21.1779 27.0075 21.1387 26.6433C21.0996 26.2715 21.2952 25.9461 21.6553 25.8299C21.8118 25.7834 21.984 25.7756 22.1561 25.7756C23.8779 25.7679 25.5919 25.7679 27.3136 25.7756C27.8693 25.7756 28.3076 25.5742 28.5737 25.0861C29.1919 23.9473 28.4797 22.7387 27.1884 22.7387C25.3414 22.7387 23.4944 22.7309 21.6474 22.7387C20.1448 22.7464 18.6578 22.5992 17.2099 22.2041C13.6412 21.2125 10.7376 23.0796 9.04715 25.6207ZM14.2281 32.7637C11.5437 30.1839 8.89063 27.6427 6.2297 25.0861C4.76619 26.5891 3.34964 28.0534 1.90178 29.5408C4.60184 32.082 7.27059 34.5998 9.94717 37.1177C11.395 35.6535 12.7959 34.2202 14.2281 32.7637Z" fill="white"/>
                      <path d="M12.7025 7.30575C13.1955 7.72411 13.6651 8.12697 14.0956 8.49884C14.5416 8.11922 15.0112 7.72411 15.4808 7.32125C13.6808 4.87309 14.6512 2.26225 16.1617 1.03042C17.8678 -0.348598 20.3644 -0.317609 22.0157 1.10015C23.5653 2.43269 24.3245 5.01255 22.6105 7.3135C23.0801 7.70861 23.5497 8.11147 24.0036 8.49884C24.4419 8.12697 24.9036 7.73185 25.4045 7.30575C24.5201 6.1514 24.2071 4.83436 24.5671 3.37786C24.8332 2.32423 25.428 1.48752 26.3123 0.852236C28.0498 -0.395082 30.4446 -0.247883 32.0255 1.20087C33.489 2.52566 34.2012 5.05128 32.4794 7.35224C32.5577 7.40647 32.6438 7.46845 32.722 7.52268C33.9742 8.33615 34.6473 9.48275 34.6708 10.978C34.6864 12.1633 34.6786 13.3487 34.6708 14.534C34.663 15.5721 33.9429 16.3701 32.8942 16.4243C31.9316 16.4786 30.969 16.4476 30.0063 16.4476C28.4959 16.4476 26.9854 16.4708 25.4749 16.4321C25.021 16.4243 24.5749 16.2539 24.121 16.1687C24.0271 16.1532 23.9332 16.1532 23.8392 16.1764C23.4401 16.2617 23.041 16.4321 22.6418 16.4398C20.2313 16.4631 17.8287 16.4631 15.4182 16.4398C15.0269 16.4398 14.6434 16.2694 14.2521 16.1919C14.1425 16.1687 14.0173 16.1764 13.9077 16.1919C13.5164 16.2694 13.1329 16.4321 12.7416 16.4321C10.3311 16.4553 7.92846 16.4476 5.51797 16.4398C4.14838 16.4321 3.40488 15.6883 3.40488 14.3248C3.40488 13.2944 3.42054 12.264 3.40488 11.2336C3.3814 9.56797 4.06229 8.30516 5.50232 7.43746C5.53363 7.42196 5.5571 7.39097 5.61189 7.34449C4.74317 6.20563 4.39099 4.94282 4.70404 3.53281C4.93883 2.46368 5.51015 1.58823 6.39451 0.921962C8.18673 -0.418324 10.6285 -0.286619 12.2564 1.24735C13.8216 2.6961 14.2912 5.22947 12.7025 7.30575ZM28.9498 14.8671C30.1707 14.8671 31.3994 14.8671 32.6203 14.8671C32.9255 14.8671 33.129 14.7974 33.1212 14.441C33.1134 13.2402 33.1368 12.0471 33.1055 10.8463C33.0742 9.7694 32.3073 8.84747 31.2585 8.56856C31.1177 8.52983 30.9455 8.53758 30.8203 8.59181C29.5837 9.11088 28.3472 9.11088 27.1106 8.59181C26.9776 8.53758 26.8054 8.52983 26.6723 8.56856C25.5454 8.86296 24.8175 9.83912 24.8019 11.0709C24.7862 12.1633 24.794 13.2634 24.8019 14.3558C24.8019 14.7897 24.8801 14.8671 25.3341 14.8671C26.5315 14.8671 27.7445 14.8671 28.9498 14.8671ZM9.14153 14.8671C10.3781 14.8671 11.6146 14.8594 12.8512 14.8671C13.1564 14.8671 13.3208 14.7664 13.3208 14.4488C13.3129 13.2247 13.3442 12.0006 13.2973 10.7766C13.2581 9.73841 12.5146 8.86296 11.5051 8.58406C11.3485 8.53758 11.1372 8.54532 10.9885 8.6073C9.7598 9.11088 8.53891 9.11088 7.31019 8.59955C7.16931 8.54532 6.98148 8.53758 6.83278 8.57631C5.76841 8.87071 5.01709 9.81588 5.00144 10.9083C4.98579 12.0549 4.99361 13.2015 4.99361 14.3481C4.99361 14.8052 5.05622 14.8671 5.51015 14.8671C6.71539 14.8671 7.92846 14.8671 9.14153 14.8671ZM19.0496 14.8671C20.2705 14.8671 21.4914 14.8594 22.7201 14.8671C23.0566 14.8671 23.221 14.7587 23.221 14.4023C23.2053 13.2325 23.2288 12.0549 23.2053 10.885C23.1818 9.79264 22.4305 8.85522 21.3583 8.56856C21.2174 8.52983 21.0453 8.53758 20.92 8.59181C19.6835 9.11088 18.4469 9.11088 17.2104 8.59955C17.0695 8.54532 16.8817 8.53758 16.733 8.58406C15.6921 8.87071 14.9486 9.7694 14.9173 10.8385C14.886 12.0084 14.9017 13.1782 14.9017 14.3558C14.9017 14.8129 14.9643 14.8671 15.426 14.8671C16.6313 14.8671 17.8365 14.8671 19.0496 14.8671ZM19.0496 7.42196C20.6774 7.42196 22.0079 6.11267 22.0157 4.50122C22.0235 2.88203 20.6618 1.54175 19.0339 1.5495C17.4061 1.55724 16.0834 2.88203 16.0912 4.49348C16.0912 6.11267 17.4217 7.42971 19.0496 7.42196ZM12.1077 4.48573C12.0999 2.87429 10.7694 1.55724 9.14936 1.55724C7.52932 1.55724 6.19103 2.88203 6.1832 4.48573C6.17538 6.10492 7.52932 7.42971 9.17283 7.42196C10.7929 7.42196 12.1155 6.09717 12.1077 4.48573ZM25.9993 4.47798C25.9915 6.09717 27.2984 7.42196 28.9263 7.42971C30.5776 7.43746 31.9238 6.12041 31.9238 4.49348C31.9238 2.88978 30.5855 1.56499 28.9654 1.55724C27.3376 1.5495 26.0071 2.86654 25.9993 4.47798Z" fill="white"/>
                      <path d="M19.4795 26.5193C19.4873 26.9686 19.1508 27.3018 18.7047 27.3095C18.2664 27.3095 17.922 26.9686 17.9064 26.527C17.8986 26.1009 18.2507 25.7446 18.689 25.7368C19.1351 25.7368 19.4716 26.0699 19.4795 26.5193Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_558_1348">
                      <rect width="40" height="39" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Human Resources <br>Consulting</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                <div class="text-primary">
                  <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_10.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_516_334)">
                      <path d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z" fill="white"/>
                      <path d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z" fill="white"/>
                      <path d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z" fill="white"/>
                      <path d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z" fill="white"/>
                      <path d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z" fill="white"/>
                      <path d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_516_334">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Strategy <br>Consulting</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                <div class="text-primary">
                  <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_11.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_558_1335)">
                      <path d="M39.9993 21.646C39.791 22.0314 39.6348 22.4585 39.3743 22.7918C38.9785 23.2814 38.4056 23.4897 37.7806 23.5002C36.9785 23.5106 36.166 23.5106 35.3639 23.5002C34.7389 23.4897 34.3014 23.0835 34.3118 22.5314C34.3223 21.9897 34.7389 21.6043 35.3535 21.5939C36.1035 21.5835 36.8639 21.5835 37.6139 21.5939C37.9681 21.6043 38.1035 21.4481 38.1035 21.1043C38.0931 20.3752 38.0931 19.646 38.1035 18.9168C38.1139 18.5418 37.9473 18.4168 37.5827 18.4168C36.791 18.4272 35.9993 18.4272 35.1973 18.4168C34.4889 18.4168 34.1764 18.1772 34.041 17.4585C33.6452 15.4064 32.8743 13.5314 31.6868 11.8127C31.3118 11.271 31.3743 10.8543 31.8431 10.3856C32.4056 9.82308 32.9681 9.26058 33.5306 8.69808C33.8639 8.36475 33.8535 8.271 33.5202 7.92725C33.0202 7.42725 32.5202 6.93766 32.0306 6.42725C31.7806 6.15641 31.5827 6.146 31.3223 6.41683C30.7702 7.00016 30.1868 7.56266 29.6139 8.13558C29.1243 8.61475 28.7181 8.66683 28.1556 8.28141C26.4368 7.09391 24.5514 6.32308 22.4993 5.93766C21.8223 5.81266 21.5827 5.48975 21.5723 4.80225C21.5723 4.00016 21.5618 3.18766 21.5723 2.38558C21.5827 2.03141 21.4368 1.896 21.0827 1.896C20.3535 1.90641 19.6243 1.90641 18.8952 1.896C18.5202 1.88558 18.3952 2.05225 18.3952 2.41683C18.4056 3.2085 18.4056 4.00016 18.3952 4.80225C18.3952 5.521 18.1452 5.82308 17.4368 5.9585C15.4056 6.34391 13.5306 7.11475 11.8223 8.29183C11.2389 8.69808 10.8431 8.646 10.3327 8.13558C9.79102 7.55225 9.20768 6.98975 8.64518 6.41683C8.41602 6.17725 8.22852 6.16683 7.99935 6.40641C7.47852 6.94808 6.93685 7.47933 6.39518 8.01058C6.16602 8.22933 6.17643 8.42725 6.39518 8.646C6.97852 9.21891 7.56185 9.80225 8.13477 10.3856C8.61393 10.8752 8.66602 11.2814 8.2806 11.8439C7.0931 13.5627 6.32227 15.4481 5.93685 17.5002C5.81185 18.1772 5.48893 18.4272 4.80143 18.4272C3.99935 18.4272 3.18685 18.4377 2.38477 18.4272C2.0306 18.4168 1.88477 18.5627 1.89518 18.9168C1.9056 19.646 1.9056 20.3752 1.89518 21.1043C1.88477 21.4793 2.05143 21.6147 2.41602 21.6043C3.20768 21.5835 3.99935 21.5939 4.80143 21.6043C5.52018 21.6043 5.82227 21.8439 5.95768 22.5522C6.3431 24.5835 7.11393 26.4585 8.29102 28.1668C8.69727 28.7502 8.64518 29.146 8.13477 29.6564C7.57227 30.2189 7.02018 30.7918 6.44727 31.3335C6.17643 31.5939 6.18685 31.8022 6.45768 32.0522C6.97852 32.5522 7.4681 33.0627 7.97852 33.5731C8.30143 33.896 8.36393 33.896 8.70768 33.5627C9.2806 32.9897 9.8431 32.4168 10.416 31.8543C10.8639 31.4064 11.2806 31.3752 11.8223 31.7085C12.4368 32.0939 13.0618 32.4585 13.6973 32.8231C14.2493 33.146 14.4577 33.6564 14.1973 34.1564C13.9473 34.6564 13.3848 34.8022 12.8223 34.5106C12.3118 34.2502 11.8223 33.9585 11.2806 33.6668C10.8535 34.0939 10.4368 34.5314 9.99935 34.9585C8.98893 35.9585 7.68685 35.9689 6.67643 34.9689C6.13477 34.4272 5.58268 33.8856 5.05143 33.3335C4.07227 32.3335 4.07227 31.0418 5.06185 30.0418C5.48893 29.6043 5.92643 29.1877 6.38477 28.7397C5.36393 27.1147 4.63477 25.396 4.2181 23.5106C3.7181 23.5106 3.22852 23.5106 2.72852 23.5106C1.12435 23.5106 0.593099 23.146 0.00976562 21.6564C0.00976562 20.5314 0.00976562 19.4168 0.00976562 18.2918C0.030599 18.271 0.0514323 18.2606 0.061849 18.2397C0.520182 16.9897 1.18685 16.5106 2.52018 16.5106C3.08268 16.5106 3.63477 16.5106 4.20768 16.5106C4.63477 14.6356 5.35352 12.9064 6.37435 11.2918C5.9056 10.8231 5.45768 10.396 5.02018 9.94808C4.07227 8.97933 4.08268 7.67725 5.0306 6.7085C5.54102 6.18766 6.06185 5.67725 6.57227 5.15641C7.68685 4.04183 8.97852 4.04183 10.1035 5.16683C10.4993 5.56266 10.8848 5.96891 11.2806 6.37516C12.916 5.3335 14.6556 4.62516 16.5098 4.19808C16.5098 3.53141 16.5098 2.90641 16.5098 2.28141C16.5202 1.53141 16.7806 0.895996 17.3952 0.458496C17.6868 0.250163 18.041 0.145996 18.3639 -0.0102539C19.4577 -0.0102539 20.5514 -0.0102539 21.6452 -0.0102539C23.1035 0.541829 23.4993 1.12516 23.4993 2.71891C23.4993 3.2085 23.4993 3.69808 23.4993 4.13558C24.4473 4.4585 25.3431 4.71891 26.2077 5.07308C27.0723 5.42725 27.8848 5.88558 28.7702 6.32308C29.1764 5.90641 29.6035 5.44808 30.0514 5.021C30.9993 4.09391 32.3535 4.09391 33.3014 5.021C33.8535 5.56266 34.3952 6.10433 34.9264 6.646C35.9473 7.67725 35.9368 8.9585 34.916 10.0002C34.4993 10.4272 34.0618 10.8335 33.6556 11.2293C33.666 11.3127 33.666 11.3439 33.6764 11.3647C34.6139 12.896 35.3223 14.521 35.7389 16.271C35.7598 16.3647 35.9473 16.4897 36.0618 16.4897C36.6243 16.5106 37.1764 16.4897 37.7389 16.5002C38.7077 16.521 39.4993 17.0627 39.8431 17.9168C39.8952 18.0627 39.9473 18.2085 39.9993 18.3543C39.9993 19.4585 39.9993 20.5522 39.9993 21.646Z" fill="white"/>
                      <path d="M17.4266 40.0001C16.7807 39.823 16.1766 39.5626 15.7287 39.0314C14.9266 38.0834 14.8328 36.8439 15.4995 35.6876C17.4578 32.2918 19.4162 28.9064 21.3745 25.5209C22.6141 23.3751 23.8432 21.2084 25.1037 19.073C26.0099 17.5209 28.0099 17.1772 29.3328 18.323C29.5932 18.5522 29.812 18.8334 29.9891 19.1355C33.1974 24.6668 36.3953 30.2084 39.5828 35.7605C39.7703 36.0834 39.8641 36.448 39.9995 36.8022C39.9995 37.0939 39.9995 37.3751 39.9995 37.6668C39.8016 38.0834 39.6557 38.5314 39.4057 38.9064C38.9995 39.5314 38.3432 39.8126 37.6557 40.0105C30.9162 40.0001 24.1662 40.0001 17.4266 40.0001ZM27.5203 38.1043C30.1662 38.1043 32.8016 38.1043 35.4474 38.1043C36.0203 38.1043 36.5932 38.1147 37.1662 38.0939C37.937 38.0626 38.312 37.3959 37.9474 36.7189C37.9057 36.6459 37.8641 36.5834 37.8328 36.5209C35.4787 32.4376 33.1141 28.3439 30.7599 24.2605C29.9578 22.8647 29.1557 21.4689 28.3432 20.073C27.937 19.3855 27.1557 19.3855 26.7391 20.0626C26.687 20.1355 26.6453 20.2189 26.6037 20.3022C24.2912 24.3126 21.9787 28.323 19.6557 32.3334C18.812 33.7814 17.9787 35.2397 17.1453 36.6876C16.7287 37.4272 17.1141 38.0834 17.9682 38.1147C18.0724 38.1147 18.1766 38.1147 18.2807 38.1147C21.3432 38.1043 24.4266 38.1043 27.5203 38.1043Z" fill="white"/>
                      <path d="M37.6562 40C38.3542 39.8021 39.0104 39.5208 39.4062 38.8958C39.6562 38.5104 39.8021 38.0729 40 37.6562C40 38.4375 40 39.2188 40 40C39.2188 40 38.4375 40 37.6562 40Z" fill="white"/>
                      <path d="M8.8946 19.99C8.91543 14.4796 12.8842 9.86498 18.3633 9.01082C22.7384 8.32332 27.3425 10.5212 29.5613 14.3442C29.8842 14.9067 29.8009 15.4483 29.3217 15.7504C28.8321 16.0525 28.28 15.8962 27.9363 15.3337C26.5196 13.0317 24.4988 11.5837 21.8633 11.0004C16.8946 9.89623 11.7592 13.3858 10.9467 18.4067C10.2696 22.615 12.28 26.49 16.1133 28.3546C16.4258 28.5108 16.7071 28.6775 16.8008 29.0421C16.8946 29.4067 16.8217 29.7504 16.53 30.0004C16.2071 30.2921 15.8321 30.3129 15.4363 30.1358C14.2071 29.5733 13.1029 28.8129 12.155 27.8546C10.0613 25.7712 8.88418 22.9275 8.8946 19.99Z" fill="white"/>
                      <path d="M28.4681 27.6043C28.4681 28.5002 28.4785 29.396 28.4681 30.3022C28.4473 31.0522 27.8118 31.5106 27.166 31.2397C26.7806 31.0835 26.5723 30.771 26.5723 30.3543C26.5618 28.5106 26.5618 26.6564 26.5723 24.8127C26.5723 24.2606 26.9993 23.8647 27.5098 23.8647C28.0202 23.8647 28.4473 24.2502 28.4577 24.8022C28.4889 25.7293 28.4681 26.6668 28.4681 27.6043Z" fill="white"/>
                      <path d="M28.478 34.1981C28.478 34.7189 28.0718 35.146 27.551 35.1564C27.0197 35.1668 26.5718 34.7189 26.5822 34.1981C26.5926 33.6877 27.0197 33.271 27.5301 33.271C28.051 33.271 28.4676 33.6772 28.478 34.1981Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_558_1335">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                                                       
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Risk Management <br>Consulting</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                <div class="text-primary">
                  <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_12.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_558_1320)">
                      <path d="M16.875 0C17.8438 0.21875 18.5417 0.84375 19.2188 1.52083C21.1875 3.52083 23.1979 5.48958 25.1771 7.48958C26.7812 9.11458 26.3125 11.7604 24.2396 12.6042C23.7396 12.8021 23.1563 12.8229 22.6042 12.8229C22.3125 12.8229 22.0938 12.8438 21.8958 13.0729C21.7083 13.2813 21.4688 13.4479 21.2396 13.6563C22.7188 14.5521 23.0208 16.1667 21.9792 17.4688C23.2604 18.5833 24.5417 19.7083 25.8229 20.8333C28.5729 23.2292 31.3125 25.625 34.0625 28.0208C35.4167 29.1979 36.75 30.3958 38.125 31.5521C39.1458 32.4062 39.7708 33.4688 40.0104 34.7708C40.0104 35.1354 40.0104 35.5 40.0104 35.8646C39.9792 35.9583 39.9583 36.0625 39.9375 36.1563C39.5625 37.8958 38.5417 39.0833 36.8854 39.7292C36.5625 39.8542 36.2083 39.9167 35.875 40.0104C35.4792 40.0104 35.0938 40.0104 34.6979 40.0104C34.6771 39.9896 34.6562 39.9688 34.6354 39.9583C33.3438 39.7708 32.3542 39.0938 31.5208 38.125C28.2813 34.375 25.0208 30.6354 21.7604 26.8958C20.3333 25.2604 18.9063 23.6146 17.4792 21.9792C16 23.1042 14.4583 22.5729 13.6563 21.2188C13.4688 21.4479 13.3125 21.6875 13.1146 21.8646C12.8646 22.0833 12.8021 22.3125 12.8542 22.6458C13 23.6458 12.6771 24.5208 11.9583 25.2396C10.7083 26.4792 8.78125 26.4479 7.47917 25.1563C5.5 23.1979 3.55208 21.2083 1.5625 19.25C0.864583 18.5625 0.21875 17.8646 0 16.875C0 16.5625 0 16.25 0 15.9375C0.0208333 15.9063 0.0416667 15.8646 0.0520833 15.8333C0.572917 13.9375 1.84375 13.0833 3.76042 13.3229C3.875 13.3333 4.03125 13.2604 4.11458 13.1771C7.13542 10.1667 10.1563 7.14583 13.1667 4.125C13.2604 4.03125 13.3125 3.83333 13.2917 3.69792C13.0833 2.33333 13.6979 1.02083 14.9167 0.385417C15.2396 0.21875 15.5938 0.135417 15.9375 0.0104167C16.25 0 16.5625 0 16.875 0ZM14.1875 5.42708C11.2708 8.34375 8.33333 11.2812 5.44792 14.1667C7.61458 16.3333 9.8125 18.5313 11.9688 20.6875C14.875 17.7813 17.8021 14.8542 20.7188 11.9375C18.5521 9.78125 16.3646 7.60417 14.1875 5.42708ZM18.5938 20.8854C21.375 24.0833 24.1667 27.2812 26.9167 30.4479C28.1042 29.2708 29.2708 28.1146 30.4479 26.9375C27.2708 24.1667 24.0625 21.3646 20.8854 18.5938C20.1146 19.3646 19.375 20.1042 18.5938 20.8854ZM34.1042 30.1146C32.75 31.4688 31.4375 32.7812 30.1042 34.1146C31.1146 35.25 32.0938 36.4688 33.1875 37.5729C34.375 38.7813 36.3125 38.6979 37.5104 37.5C38.7188 36.2917 38.8021 34.3958 37.5833 33.1875C36.4688 32.1146 35.25 31.125 34.1042 30.1146ZM16.2917 1.5625C15.7083 1.60417 15.2083 1.89583 14.9583 2.5C14.6875 3.13542 14.7917 3.72917 15.2917 4.22917C17.4896 6.4375 19.6979 8.64583 21.9167 10.8542C22.5521 11.4896 23.5104 11.4792 24.125 10.8646C24.7292 10.25 24.75 9.29167 24.1146 8.65625C21.9167 6.4375 19.7083 4.23958 17.5 2.03125C17.1771 1.71875 16.8021 1.5625 16.2917 1.5625ZM3.1875 14.7292C3.16667 14.7604 3.15625 14.7917 3.13542 14.8333C2.5 14.8333 1.96875 15.1667 1.70833 15.7396C1.4375 16.3333 1.53125 16.9896 2 17.4688C4.20833 19.6875 6.42708 21.9063 8.64583 24.1146C9.28125 24.7396 10.25 24.7188 10.8542 24.1146C11.4688 23.5 11.4792 22.5521 10.8333 21.9063C8.64583 19.6875 6.4375 17.4792 4.21875 15.2917C3.94792 15.0208 3.54167 14.9167 3.1875 14.7292ZM15.0521 20.1354C15.0625 20.5938 15.2292 20.8333 15.5313 20.9583C15.8646 21.1042 16.1667 21.0104 16.4271 20.7604C17.875 19.3125 19.3229 17.875 20.7604 16.4271C21.1146 16.0729 21.1146 15.5938 20.8021 15.2812C20.4792 14.9688 20.0104 14.9792 19.6562 15.3438C18.2188 16.7708 16.7812 18.2083 15.3542 19.6562C15.1875 19.8021 15.1146 20.0313 15.0521 20.1354ZM31.7604 28.0833C30.5208 29.3229 29.3021 30.5417 28.0729 31.7708C28.375 32.1146 28.6979 32.4896 29 32.8229C30.2917 31.5417 31.5417 30.2813 32.8229 29.0104C32.4583 28.6979 32.0833 28.3646 31.7604 28.0833Z" fill="white"/>
                      <path d="M0 37.8957C0.135417 37.4894 0.25 37.0728 0.427083 36.6873C0.739583 36.0103 1.11458 35.6457 2.04167 34.9894C1.90625 34.6665 1.73958 34.3644 1.65625 34.0311C1.21875 32.3019 2.5 30.6353 4.29167 30.6353C8.71875 30.6248 13.1458 30.6248 17.5729 30.6353C19.7083 30.6457 20.9896 32.8644 19.9583 34.729C19.9167 34.8019 19.875 34.8853 19.8333 34.9686C20.0625 35.1353 20.2917 35.2811 20.5 35.4582C21.7083 36.479 22.0208 37.8332 21.8646 39.3332C21.8437 39.5728 21.5312 39.7811 21.3542 40.0103C14.2396 40.0103 7.13542 40.0103 0.0208333 40.0103C0 39.2915 0 38.5936 0 37.8957ZM20.2917 38.4269C20.2917 37.0936 19.25 36.104 17.8854 36.0936C13.7708 36.0936 9.65625 36.0936 5.54167 36.0936C4.95833 36.0936 4.36458 36.0832 3.78125 36.104C2.54167 36.1457 1.46875 37.2915 1.60417 38.4269C7.82292 38.4269 14.0417 38.4269 20.2917 38.4269ZM10.9792 32.1873C8.80208 32.1873 6.63542 32.1769 4.45833 32.1978C4.1875 32.1978 3.88542 32.2707 3.64583 32.3957C3.20833 32.6353 3.03125 33.1769 3.15625 33.6457C3.3125 34.1978 3.75 34.5311 4.38542 34.5311C8.73958 34.5311 13.1042 34.5311 17.4583 34.5311C17.5312 34.5311 17.6146 34.5311 17.6875 34.5207C18.1458 34.4478 18.4792 34.2082 18.6562 33.7707C18.9688 32.979 18.3854 32.1873 17.4896 32.1873C15.3229 32.1873 13.1562 32.1873 10.9792 32.1873Z" fill="white"/>
                      <path d="M35.8643 39.9998C36.1976 39.9061 36.5518 39.8436 36.8747 39.7186C38.5309 39.0728 39.5518 37.8853 39.9268 36.1457C39.9476 36.0519 39.9788 35.9478 39.9997 35.854C39.9997 37.2394 39.9997 38.6144 39.9997 39.9998C38.6247 39.9998 37.2393 39.9998 35.8643 39.9998Z" fill="white"/>
                      <path d="M14.1456 7.80225C14.781 7.88558 15.1352 8.51058 14.8435 9.021C14.781 9.13558 14.6872 9.22933 14.5935 9.32308C13.5727 10.3439 12.5518 11.3647 11.531 12.3856C11.4685 12.4481 11.406 12.5106 11.3227 12.5627C10.9893 12.8022 10.5622 12.771 10.2914 12.4897C9.99974 12.1877 9.98933 11.7606 10.281 11.4272C10.6039 11.0731 10.9581 10.7397 11.2914 10.396C12.031 9.65641 12.7602 8.91683 13.5102 8.18766C13.6872 8.04183 13.9372 7.93766 14.1456 7.80225Z" fill="white"/>
                      <path d="M8.6669 14.9377C8.2294 14.9481 7.89606 14.6252 7.87523 14.1981C7.86481 13.7502 8.20856 13.396 8.64606 13.396C9.06273 13.396 9.4169 13.7502 9.42731 14.1668C9.43773 14.5835 9.09398 14.9377 8.6669 14.9377Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_558_1320">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Legal <br>Consulting</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                <div class="text-primary">
                  <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_9.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="39" viewBox="0 0 40 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#ww231234)">
                      <path d="M0 29.3084C0.203483 29.076 0.399139 28.8436 0.610448 28.6189C2.23048 26.9455 3.85834 25.2798 5.48621 23.6064C6.00274 23.0718 6.39405 23.0563 6.91058 23.5754C7.20798 23.8776 7.47408 24.2184 7.78713 24.5826C7.96713 24.3579 8.05322 24.2494 8.13931 24.141C9.56369 22.3513 11.3089 21.0343 13.6099 20.5307C14.9638 20.2363 16.3021 20.3138 17.6247 20.6702C18.8926 21.011 20.1761 21.1427 21.4831 21.1427C23.3457 21.1427 25.2084 21.1582 27.071 21.135C28.2528 21.1195 29.2154 21.4914 29.8963 22.5373C30.0137 22.4366 30.1154 22.3436 30.2094 22.2506C31.5789 20.9103 32.9407 19.5623 34.3181 18.2298C35.7269 16.874 38.0043 16.9824 39.2878 18.4622C40.2191 19.5391 40.2191 20.9258 39.2409 22.0957C38.106 23.4515 36.9399 24.7917 35.7816 26.1398C34.866 27.2089 33.919 28.2625 33.0346 29.3549C31.9076 30.7417 30.4128 31.3847 28.6832 31.4467C26.7501 31.5242 24.8014 31.4854 22.8683 31.4932C21.0057 31.5087 19.143 31.5087 17.2882 31.5397C16.6934 31.5474 16.1064 31.6481 15.4412 31.7178C15.5664 31.8573 15.6447 31.9503 15.7308 32.0355C16.2317 32.5313 16.2395 32.9264 15.7464 33.43C14.4786 34.7238 13.2029 36.0099 11.9272 37.3037C11.4811 37.753 11.0428 38.2101 10.5889 38.6594C10.1585 39.0855 9.75934 39.0933 9.3289 38.6904C6.33927 35.8704 3.32616 33.0349 0.328703 30.1994C0.203483 30.0754 0.109568 29.9127 0 29.7733C0 29.6183 0 29.4634 0 29.3084ZM9.04715 25.6207C10.6046 27.1159 12.1464 28.5879 13.6803 30.0832C13.8916 30.2923 14.0951 30.3466 14.369 30.3078C16.3021 30.0367 18.2508 29.9282 20.2074 29.9515C22.8996 29.9747 25.5997 29.9669 28.2919 29.9437C29.7946 29.9282 31.0468 29.4014 32.025 28.1851C33.379 26.5039 34.8268 24.9002 36.2356 23.2578C36.8538 22.5373 37.4799 21.8323 38.0747 21.104C38.6461 20.399 38.513 19.694 37.7539 19.1982C36.9869 18.6868 36.0634 18.7643 35.3982 19.4073C33.7781 20.9878 32.1581 22.576 30.5459 24.172C30.4441 24.2727 30.3581 24.4199 30.3346 24.5593C30.0685 26.3722 28.9885 27.3174 27.1415 27.3251C25.4745 27.3329 23.8075 27.3251 22.1405 27.3251C22.0387 27.3251 21.9292 27.3251 21.8274 27.3174C21.4518 27.2786 21.1779 27.0075 21.1387 26.6433C21.0996 26.2715 21.2952 25.9461 21.6553 25.8299C21.8118 25.7834 21.984 25.7756 22.1561 25.7756C23.8779 25.7679 25.5919 25.7679 27.3136 25.7756C27.8693 25.7756 28.3076 25.5742 28.5737 25.0861C29.1919 23.9473 28.4797 22.7387 27.1884 22.7387C25.3414 22.7387 23.4944 22.7309 21.6474 22.7387C20.1448 22.7464 18.6578 22.5992 17.2099 22.2041C13.6412 21.2125 10.7376 23.0796 9.04715 25.6207ZM14.2281 32.7637C11.5437 30.1839 8.89063 27.6427 6.2297 25.0861C4.76619 26.5891 3.34964 28.0534 1.90178 29.5408C4.60184 32.082 7.27059 34.5998 9.94717 37.1177C11.395 35.6535 12.7959 34.2202 14.2281 32.7637Z" fill="white"/>
                      <path d="M12.7025 7.30575C13.1955 7.72411 13.6651 8.12697 14.0956 8.49884C14.5416 8.11922 15.0112 7.72411 15.4808 7.32125C13.6808 4.87309 14.6512 2.26225 16.1617 1.03042C17.8678 -0.348598 20.3644 -0.317609 22.0157 1.10015C23.5653 2.43269 24.3245 5.01255 22.6105 7.3135C23.0801 7.70861 23.5497 8.11147 24.0036 8.49884C24.4419 8.12697 24.9036 7.73185 25.4045 7.30575C24.5201 6.1514 24.2071 4.83436 24.5671 3.37786C24.8332 2.32423 25.428 1.48752 26.3123 0.852236C28.0498 -0.395082 30.4446 -0.247883 32.0255 1.20087C33.489 2.52566 34.2012 5.05128 32.4794 7.35224C32.5577 7.40647 32.6438 7.46845 32.722 7.52268C33.9742 8.33615 34.6473 9.48275 34.6708 10.978C34.6864 12.1633 34.6786 13.3487 34.6708 14.534C34.663 15.5721 33.9429 16.3701 32.8942 16.4243C31.9316 16.4786 30.969 16.4476 30.0063 16.4476C28.4959 16.4476 26.9854 16.4708 25.4749 16.4321C25.021 16.4243 24.5749 16.2539 24.121 16.1687C24.0271 16.1532 23.9332 16.1532 23.8392 16.1764C23.4401 16.2617 23.041 16.4321 22.6418 16.4398C20.2313 16.4631 17.8287 16.4631 15.4182 16.4398C15.0269 16.4398 14.6434 16.2694 14.2521 16.1919C14.1425 16.1687 14.0173 16.1764 13.9077 16.1919C13.5164 16.2694 13.1329 16.4321 12.7416 16.4321C10.3311 16.4553 7.92846 16.4476 5.51797 16.4398C4.14838 16.4321 3.40488 15.6883 3.40488 14.3248C3.40488 13.2944 3.42054 12.264 3.40488 11.2336C3.3814 9.56797 4.06229 8.30516 5.50232 7.43746C5.53363 7.42196 5.5571 7.39097 5.61189 7.34449C4.74317 6.20563 4.39099 4.94282 4.70404 3.53281C4.93883 2.46368 5.51015 1.58823 6.39451 0.921962C8.18673 -0.418324 10.6285 -0.286619 12.2564 1.24735C13.8216 2.6961 14.2912 5.22947 12.7025 7.30575ZM28.9498 14.8671C30.1707 14.8671 31.3994 14.8671 32.6203 14.8671C32.9255 14.8671 33.129 14.7974 33.1212 14.441C33.1134 13.2402 33.1368 12.0471 33.1055 10.8463C33.0742 9.7694 32.3073 8.84747 31.2585 8.56856C31.1177 8.52983 30.9455 8.53758 30.8203 8.59181C29.5837 9.11088 28.3472 9.11088 27.1106 8.59181C26.9776 8.53758 26.8054 8.52983 26.6723 8.56856C25.5454 8.86296 24.8175 9.83912 24.8019 11.0709C24.7862 12.1633 24.794 13.2634 24.8019 14.3558C24.8019 14.7897 24.8801 14.8671 25.3341 14.8671C26.5315 14.8671 27.7445 14.8671 28.9498 14.8671ZM9.14153 14.8671C10.3781 14.8671 11.6146 14.8594 12.8512 14.8671C13.1564 14.8671 13.3208 14.7664 13.3208 14.4488C13.3129 13.2247 13.3442 12.0006 13.2973 10.7766C13.2581 9.73841 12.5146 8.86296 11.5051 8.58406C11.3485 8.53758 11.1372 8.54532 10.9885 8.6073C9.7598 9.11088 8.53891 9.11088 7.31019 8.59955C7.16931 8.54532 6.98148 8.53758 6.83278 8.57631C5.76841 8.87071 5.01709 9.81588 5.00144 10.9083C4.98579 12.0549 4.99361 13.2015 4.99361 14.3481C4.99361 14.8052 5.05622 14.8671 5.51015 14.8671C6.71539 14.8671 7.92846 14.8671 9.14153 14.8671ZM19.0496 14.8671C20.2705 14.8671 21.4914 14.8594 22.7201 14.8671C23.0566 14.8671 23.221 14.7587 23.221 14.4023C23.2053 13.2325 23.2288 12.0549 23.2053 10.885C23.1818 9.79264 22.4305 8.85522 21.3583 8.56856C21.2174 8.52983 21.0453 8.53758 20.92 8.59181C19.6835 9.11088 18.4469 9.11088 17.2104 8.59955C17.0695 8.54532 16.8817 8.53758 16.733 8.58406C15.6921 8.87071 14.9486 9.7694 14.9173 10.8385C14.886 12.0084 14.9017 13.1782 14.9017 14.3558C14.9017 14.8129 14.9643 14.8671 15.426 14.8671C16.6313 14.8671 17.8365 14.8671 19.0496 14.8671ZM19.0496 7.42196C20.6774 7.42196 22.0079 6.11267 22.0157 4.50122C22.0235 2.88203 20.6618 1.54175 19.0339 1.5495C17.4061 1.55724 16.0834 2.88203 16.0912 4.49348C16.0912 6.11267 17.4217 7.42971 19.0496 7.42196ZM12.1077 4.48573C12.0999 2.87429 10.7694 1.55724 9.14936 1.55724C7.52932 1.55724 6.19103 2.88203 6.1832 4.48573C6.17538 6.10492 7.52932 7.42971 9.17283 7.42196C10.7929 7.42196 12.1155 6.09717 12.1077 4.48573ZM25.9993 4.47798C25.9915 6.09717 27.2984 7.42196 28.9263 7.42971C30.5776 7.43746 31.9238 6.12041 31.9238 4.49348C31.9238 2.88978 30.5855 1.56499 28.9654 1.55724C27.3376 1.5495 26.0071 2.86654 25.9993 4.47798Z" fill="white"/>
                      <path d="M19.4795 26.5193C19.4873 26.9686 19.1508 27.3018 18.7047 27.3095C18.2664 27.3095 17.922 26.9686 17.9064 26.527C17.8986 26.1009 18.2507 25.7446 18.689 25.7368C19.1351 25.7368 19.4716 26.0699 19.4795 26.5193Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="ww231234">
                      <rect width="40" height="39" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Human Resources <br>Consulting</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                <div class="text-primary">
                  <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_10.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_516_3342)">
                      <path d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z" fill="white"/>
                      <path d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z" fill="white"/>
                      <path d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z" fill="white"/>
                      <path d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z" fill="white"/>
                      <path d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z" fill="white"/>
                      <path d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_516_3342">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Strategy <br>Consulting</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                <div class="text-primary">
                  <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_11.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_558_w1335)">
                      <path d="M39.9993 21.646C39.791 22.0314 39.6348 22.4585 39.3743 22.7918C38.9785 23.2814 38.4056 23.4897 37.7806 23.5002C36.9785 23.5106 36.166 23.5106 35.3639 23.5002C34.7389 23.4897 34.3014 23.0835 34.3118 22.5314C34.3223 21.9897 34.7389 21.6043 35.3535 21.5939C36.1035 21.5835 36.8639 21.5835 37.6139 21.5939C37.9681 21.6043 38.1035 21.4481 38.1035 21.1043C38.0931 20.3752 38.0931 19.646 38.1035 18.9168C38.1139 18.5418 37.9473 18.4168 37.5827 18.4168C36.791 18.4272 35.9993 18.4272 35.1973 18.4168C34.4889 18.4168 34.1764 18.1772 34.041 17.4585C33.6452 15.4064 32.8743 13.5314 31.6868 11.8127C31.3118 11.271 31.3743 10.8543 31.8431 10.3856C32.4056 9.82308 32.9681 9.26058 33.5306 8.69808C33.8639 8.36475 33.8535 8.271 33.5202 7.92725C33.0202 7.42725 32.5202 6.93766 32.0306 6.42725C31.7806 6.15641 31.5827 6.146 31.3223 6.41683C30.7702 7.00016 30.1868 7.56266 29.6139 8.13558C29.1243 8.61475 28.7181 8.66683 28.1556 8.28141C26.4368 7.09391 24.5514 6.32308 22.4993 5.93766C21.8223 5.81266 21.5827 5.48975 21.5723 4.80225C21.5723 4.00016 21.5618 3.18766 21.5723 2.38558C21.5827 2.03141 21.4368 1.896 21.0827 1.896C20.3535 1.90641 19.6243 1.90641 18.8952 1.896C18.5202 1.88558 18.3952 2.05225 18.3952 2.41683C18.4056 3.2085 18.4056 4.00016 18.3952 4.80225C18.3952 5.521 18.1452 5.82308 17.4368 5.9585C15.4056 6.34391 13.5306 7.11475 11.8223 8.29183C11.2389 8.69808 10.8431 8.646 10.3327 8.13558C9.79102 7.55225 9.20768 6.98975 8.64518 6.41683C8.41602 6.17725 8.22852 6.16683 7.99935 6.40641C7.47852 6.94808 6.93685 7.47933 6.39518 8.01058C6.16602 8.22933 6.17643 8.42725 6.39518 8.646C6.97852 9.21891 7.56185 9.80225 8.13477 10.3856C8.61393 10.8752 8.66602 11.2814 8.2806 11.8439C7.0931 13.5627 6.32227 15.4481 5.93685 17.5002C5.81185 18.1772 5.48893 18.4272 4.80143 18.4272C3.99935 18.4272 3.18685 18.4377 2.38477 18.4272C2.0306 18.4168 1.88477 18.5627 1.89518 18.9168C1.9056 19.646 1.9056 20.3752 1.89518 21.1043C1.88477 21.4793 2.05143 21.6147 2.41602 21.6043C3.20768 21.5835 3.99935 21.5939 4.80143 21.6043C5.52018 21.6043 5.82227 21.8439 5.95768 22.5522C6.3431 24.5835 7.11393 26.4585 8.29102 28.1668C8.69727 28.7502 8.64518 29.146 8.13477 29.6564C7.57227 30.2189 7.02018 30.7918 6.44727 31.3335C6.17643 31.5939 6.18685 31.8022 6.45768 32.0522C6.97852 32.5522 7.4681 33.0627 7.97852 33.5731C8.30143 33.896 8.36393 33.896 8.70768 33.5627C9.2806 32.9897 9.8431 32.4168 10.416 31.8543C10.8639 31.4064 11.2806 31.3752 11.8223 31.7085C12.4368 32.0939 13.0618 32.4585 13.6973 32.8231C14.2493 33.146 14.4577 33.6564 14.1973 34.1564C13.9473 34.6564 13.3848 34.8022 12.8223 34.5106C12.3118 34.2502 11.8223 33.9585 11.2806 33.6668C10.8535 34.0939 10.4368 34.5314 9.99935 34.9585C8.98893 35.9585 7.68685 35.9689 6.67643 34.9689C6.13477 34.4272 5.58268 33.8856 5.05143 33.3335C4.07227 32.3335 4.07227 31.0418 5.06185 30.0418C5.48893 29.6043 5.92643 29.1877 6.38477 28.7397C5.36393 27.1147 4.63477 25.396 4.2181 23.5106C3.7181 23.5106 3.22852 23.5106 2.72852 23.5106C1.12435 23.5106 0.593099 23.146 0.00976562 21.6564C0.00976562 20.5314 0.00976562 19.4168 0.00976562 18.2918C0.030599 18.271 0.0514323 18.2606 0.061849 18.2397C0.520182 16.9897 1.18685 16.5106 2.52018 16.5106C3.08268 16.5106 3.63477 16.5106 4.20768 16.5106C4.63477 14.6356 5.35352 12.9064 6.37435 11.2918C5.9056 10.8231 5.45768 10.396 5.02018 9.94808C4.07227 8.97933 4.08268 7.67725 5.0306 6.7085C5.54102 6.18766 6.06185 5.67725 6.57227 5.15641C7.68685 4.04183 8.97852 4.04183 10.1035 5.16683C10.4993 5.56266 10.8848 5.96891 11.2806 6.37516C12.916 5.3335 14.6556 4.62516 16.5098 4.19808C16.5098 3.53141 16.5098 2.90641 16.5098 2.28141C16.5202 1.53141 16.7806 0.895996 17.3952 0.458496C17.6868 0.250163 18.041 0.145996 18.3639 -0.0102539C19.4577 -0.0102539 20.5514 -0.0102539 21.6452 -0.0102539C23.1035 0.541829 23.4993 1.12516 23.4993 2.71891C23.4993 3.2085 23.4993 3.69808 23.4993 4.13558C24.4473 4.4585 25.3431 4.71891 26.2077 5.07308C27.0723 5.42725 27.8848 5.88558 28.7702 6.32308C29.1764 5.90641 29.6035 5.44808 30.0514 5.021C30.9993 4.09391 32.3535 4.09391 33.3014 5.021C33.8535 5.56266 34.3952 6.10433 34.9264 6.646C35.9473 7.67725 35.9368 8.9585 34.916 10.0002C34.4993 10.4272 34.0618 10.8335 33.6556 11.2293C33.666 11.3127 33.666 11.3439 33.6764 11.3647C34.6139 12.896 35.3223 14.521 35.7389 16.271C35.7598 16.3647 35.9473 16.4897 36.0618 16.4897C36.6243 16.5106 37.1764 16.4897 37.7389 16.5002C38.7077 16.521 39.4993 17.0627 39.8431 17.9168C39.8952 18.0627 39.9473 18.2085 39.9993 18.3543C39.9993 19.4585 39.9993 20.5522 39.9993 21.646Z" fill="white"/>
                      <path d="M17.4266 40.0001C16.7807 39.823 16.1766 39.5626 15.7287 39.0314C14.9266 38.0834 14.8328 36.8439 15.4995 35.6876C17.4578 32.2918 19.4162 28.9064 21.3745 25.5209C22.6141 23.3751 23.8432 21.2084 25.1037 19.073C26.0099 17.5209 28.0099 17.1772 29.3328 18.323C29.5932 18.5522 29.812 18.8334 29.9891 19.1355C33.1974 24.6668 36.3953 30.2084 39.5828 35.7605C39.7703 36.0834 39.8641 36.448 39.9995 36.8022C39.9995 37.0939 39.9995 37.3751 39.9995 37.6668C39.8016 38.0834 39.6557 38.5314 39.4057 38.9064C38.9995 39.5314 38.3432 39.8126 37.6557 40.0105C30.9162 40.0001 24.1662 40.0001 17.4266 40.0001ZM27.5203 38.1043C30.1662 38.1043 32.8016 38.1043 35.4474 38.1043C36.0203 38.1043 36.5932 38.1147 37.1662 38.0939C37.937 38.0626 38.312 37.3959 37.9474 36.7189C37.9057 36.6459 37.8641 36.5834 37.8328 36.5209C35.4787 32.4376 33.1141 28.3439 30.7599 24.2605C29.9578 22.8647 29.1557 21.4689 28.3432 20.073C27.937 19.3855 27.1557 19.3855 26.7391 20.0626C26.687 20.1355 26.6453 20.2189 26.6037 20.3022C24.2912 24.3126 21.9787 28.323 19.6557 32.3334C18.812 33.7814 17.9787 35.2397 17.1453 36.6876C16.7287 37.4272 17.1141 38.0834 17.9682 38.1147C18.0724 38.1147 18.1766 38.1147 18.2807 38.1147C21.3432 38.1043 24.4266 38.1043 27.5203 38.1043Z" fill="white"/>
                      <path d="M37.6562 40C38.3542 39.8021 39.0104 39.5208 39.4062 38.8958C39.6562 38.5104 39.8021 38.0729 40 37.6562C40 38.4375 40 39.2188 40 40C39.2188 40 38.4375 40 37.6562 40Z" fill="white"/>
                      <path d="M8.8946 19.99C8.91543 14.4796 12.8842 9.86498 18.3633 9.01082C22.7384 8.32332 27.3425 10.5212 29.5613 14.3442C29.8842 14.9067 29.8009 15.4483 29.3217 15.7504C28.8321 16.0525 28.28 15.8962 27.9363 15.3337C26.5196 13.0317 24.4988 11.5837 21.8633 11.0004C16.8946 9.89623 11.7592 13.3858 10.9467 18.4067C10.2696 22.615 12.28 26.49 16.1133 28.3546C16.4258 28.5108 16.7071 28.6775 16.8008 29.0421C16.8946 29.4067 16.8217 29.7504 16.53 30.0004C16.2071 30.2921 15.8321 30.3129 15.4363 30.1358C14.2071 29.5733 13.1029 28.8129 12.155 27.8546C10.0613 25.7712 8.88418 22.9275 8.8946 19.99Z" fill="white"/>
                      <path d="M28.4681 27.6043C28.4681 28.5002 28.4785 29.396 28.4681 30.3022C28.4473 31.0522 27.8118 31.5106 27.166 31.2397C26.7806 31.0835 26.5723 30.771 26.5723 30.3543C26.5618 28.5106 26.5618 26.6564 26.5723 24.8127C26.5723 24.2606 26.9993 23.8647 27.5098 23.8647C28.0202 23.8647 28.4473 24.2502 28.4577 24.8022C28.4889 25.7293 28.4681 26.6668 28.4681 27.6043Z" fill="white"/>
                      <path d="M28.478 34.1981C28.478 34.7189 28.0718 35.146 27.551 35.1564C27.0197 35.1668 26.5718 34.7189 26.5822 34.1981C26.5926 33.6877 27.0197 33.271 27.5301 33.271C28.051 33.271 28.4676 33.6772 28.478 34.1981Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_558_w1335">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                                                       
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Risk Management <br>Consulting</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                <div class="text-primary">
                  <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_service cs_style_1 cs_type_1 cs_pt_25 cs_pl_25 cs_pr_25 cs_pb_15 bg-white cs_transition_4 shadow cs_mb_25">
                <div class="cs_service_thumb position-relative cs_rounded_5 cs_mb_25">
                  <div class="cs_service_thumb-in position-relative-in background-filled h-100" data-src="assets/img/service_12.jpeg"></div>
                </div>
                <div class="cs_service_iconbox d-flex align-items-center cs_mb_20">
                  <div class="cs_service_icon d-flex align-items-center justify-content-center cs_rounded_5 cs_mr_15 cs_transition_4 flex-none">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_2558_1320)">
                      <path d="M16.875 0C17.8438 0.21875 18.5417 0.84375 19.2188 1.52083C21.1875 3.52083 23.1979 5.48958 25.1771 7.48958C26.7812 9.11458 26.3125 11.7604 24.2396 12.6042C23.7396 12.8021 23.1563 12.8229 22.6042 12.8229C22.3125 12.8229 22.0938 12.8438 21.8958 13.0729C21.7083 13.2813 21.4688 13.4479 21.2396 13.6563C22.7188 14.5521 23.0208 16.1667 21.9792 17.4688C23.2604 18.5833 24.5417 19.7083 25.8229 20.8333C28.5729 23.2292 31.3125 25.625 34.0625 28.0208C35.4167 29.1979 36.75 30.3958 38.125 31.5521C39.1458 32.4062 39.7708 33.4688 40.0104 34.7708C40.0104 35.1354 40.0104 35.5 40.0104 35.8646C39.9792 35.9583 39.9583 36.0625 39.9375 36.1563C39.5625 37.8958 38.5417 39.0833 36.8854 39.7292C36.5625 39.8542 36.2083 39.9167 35.875 40.0104C35.4792 40.0104 35.0938 40.0104 34.6979 40.0104C34.6771 39.9896 34.6562 39.9688 34.6354 39.9583C33.3438 39.7708 32.3542 39.0938 31.5208 38.125C28.2813 34.375 25.0208 30.6354 21.7604 26.8958C20.3333 25.2604 18.9063 23.6146 17.4792 21.9792C16 23.1042 14.4583 22.5729 13.6563 21.2188C13.4688 21.4479 13.3125 21.6875 13.1146 21.8646C12.8646 22.0833 12.8021 22.3125 12.8542 22.6458C13 23.6458 12.6771 24.5208 11.9583 25.2396C10.7083 26.4792 8.78125 26.4479 7.47917 25.1563C5.5 23.1979 3.55208 21.2083 1.5625 19.25C0.864583 18.5625 0.21875 17.8646 0 16.875C0 16.5625 0 16.25 0 15.9375C0.0208333 15.9063 0.0416667 15.8646 0.0520833 15.8333C0.572917 13.9375 1.84375 13.0833 3.76042 13.3229C3.875 13.3333 4.03125 13.2604 4.11458 13.1771C7.13542 10.1667 10.1563 7.14583 13.1667 4.125C13.2604 4.03125 13.3125 3.83333 13.2917 3.69792C13.0833 2.33333 13.6979 1.02083 14.9167 0.385417C15.2396 0.21875 15.5938 0.135417 15.9375 0.0104167C16.25 0 16.5625 0 16.875 0ZM14.1875 5.42708C11.2708 8.34375 8.33333 11.2812 5.44792 14.1667C7.61458 16.3333 9.8125 18.5313 11.9688 20.6875C14.875 17.7813 17.8021 14.8542 20.7188 11.9375C18.5521 9.78125 16.3646 7.60417 14.1875 5.42708ZM18.5938 20.8854C21.375 24.0833 24.1667 27.2812 26.9167 30.4479C28.1042 29.2708 29.2708 28.1146 30.4479 26.9375C27.2708 24.1667 24.0625 21.3646 20.8854 18.5938C20.1146 19.3646 19.375 20.1042 18.5938 20.8854ZM34.1042 30.1146C32.75 31.4688 31.4375 32.7812 30.1042 34.1146C31.1146 35.25 32.0938 36.4688 33.1875 37.5729C34.375 38.7813 36.3125 38.6979 37.5104 37.5C38.7188 36.2917 38.8021 34.3958 37.5833 33.1875C36.4688 32.1146 35.25 31.125 34.1042 30.1146ZM16.2917 1.5625C15.7083 1.60417 15.2083 1.89583 14.9583 2.5C14.6875 3.13542 14.7917 3.72917 15.2917 4.22917C17.4896 6.4375 19.6979 8.64583 21.9167 10.8542C22.5521 11.4896 23.5104 11.4792 24.125 10.8646C24.7292 10.25 24.75 9.29167 24.1146 8.65625C21.9167 6.4375 19.7083 4.23958 17.5 2.03125C17.1771 1.71875 16.8021 1.5625 16.2917 1.5625ZM3.1875 14.7292C3.16667 14.7604 3.15625 14.7917 3.13542 14.8333C2.5 14.8333 1.96875 15.1667 1.70833 15.7396C1.4375 16.3333 1.53125 16.9896 2 17.4688C4.20833 19.6875 6.42708 21.9063 8.64583 24.1146C9.28125 24.7396 10.25 24.7188 10.8542 24.1146C11.4688 23.5 11.4792 22.5521 10.8333 21.9063C8.64583 19.6875 6.4375 17.4792 4.21875 15.2917C3.94792 15.0208 3.54167 14.9167 3.1875 14.7292ZM15.0521 20.1354C15.0625 20.5938 15.2292 20.8333 15.5313 20.9583C15.8646 21.1042 16.1667 21.0104 16.4271 20.7604C17.875 19.3125 19.3229 17.875 20.7604 16.4271C21.1146 16.0729 21.1146 15.5938 20.8021 15.2812C20.4792 14.9688 20.0104 14.9792 19.6562 15.3438C18.2188 16.7708 16.7812 18.2083 15.3542 19.6562C15.1875 19.8021 15.1146 20.0313 15.0521 20.1354ZM31.7604 28.0833C30.5208 29.3229 29.3021 30.5417 28.0729 31.7708C28.375 32.1146 28.6979 32.4896 29 32.8229C30.2917 31.5417 31.5417 30.2813 32.8229 29.0104C32.4583 28.6979 32.0833 28.3646 31.7604 28.0833Z" fill="white"/>
                      <path d="M0 37.8957C0.135417 37.4894 0.25 37.0728 0.427083 36.6873C0.739583 36.0103 1.11458 35.6457 2.04167 34.9894C1.90625 34.6665 1.73958 34.3644 1.65625 34.0311C1.21875 32.3019 2.5 30.6353 4.29167 30.6353C8.71875 30.6248 13.1458 30.6248 17.5729 30.6353C19.7083 30.6457 20.9896 32.8644 19.9583 34.729C19.9167 34.8019 19.875 34.8853 19.8333 34.9686C20.0625 35.1353 20.2917 35.2811 20.5 35.4582C21.7083 36.479 22.0208 37.8332 21.8646 39.3332C21.8437 39.5728 21.5312 39.7811 21.3542 40.0103C14.2396 40.0103 7.13542 40.0103 0.0208333 40.0103C0 39.2915 0 38.5936 0 37.8957ZM20.2917 38.4269C20.2917 37.0936 19.25 36.104 17.8854 36.0936C13.7708 36.0936 9.65625 36.0936 5.54167 36.0936C4.95833 36.0936 4.36458 36.0832 3.78125 36.104C2.54167 36.1457 1.46875 37.2915 1.60417 38.4269C7.82292 38.4269 14.0417 38.4269 20.2917 38.4269ZM10.9792 32.1873C8.80208 32.1873 6.63542 32.1769 4.45833 32.1978C4.1875 32.1978 3.88542 32.2707 3.64583 32.3957C3.20833 32.6353 3.03125 33.1769 3.15625 33.6457C3.3125 34.1978 3.75 34.5311 4.38542 34.5311C8.73958 34.5311 13.1042 34.5311 17.4583 34.5311C17.5312 34.5311 17.6146 34.5311 17.6875 34.5207C18.1458 34.4478 18.4792 34.2082 18.6562 33.7707C18.9688 32.979 18.3854 32.1873 17.4896 32.1873C15.3229 32.1873 13.1562 32.1873 10.9792 32.1873Z" fill="white"/>
                      <path d="M35.8643 39.9998C36.1976 39.9061 36.5518 39.8436 36.8747 39.7186C38.5309 39.0728 39.5518 37.8853 39.9268 36.1457C39.9476 36.0519 39.9788 35.9478 39.9997 35.854C39.9997 37.2394 39.9997 38.6144 39.9997 39.9998C38.6247 39.9998 37.2393 39.9998 35.8643 39.9998Z" fill="white"/>
                      <path d="M14.1456 7.80225C14.781 7.88558 15.1352 8.51058 14.8435 9.021C14.781 9.13558 14.6872 9.22933 14.5935 9.32308C13.5727 10.3439 12.5518 11.3647 11.531 12.3856C11.4685 12.4481 11.406 12.5106 11.3227 12.5627C10.9893 12.8022 10.5622 12.771 10.2914 12.4897C9.99974 12.1877 9.98933 11.7606 10.281 11.4272C10.6039 11.0731 10.9581 10.7397 11.2914 10.396C12.031 9.65641 12.7602 8.91683 13.5102 8.18766C13.6872 8.04183 13.9372 7.93766 14.1456 7.80225Z" fill="white"/>
                      <path d="M8.6669 14.9377C8.2294 14.9481 7.89606 14.6252 7.87523 14.1981C7.86481 13.7502 8.20856 13.396 8.64606 13.396C9.06273 13.396 9.4169 13.7502 9.42731 14.1668C9.43773 14.5835 9.09398 14.9377 8.6669 14.9377Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_2558_1320">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <h2 class="cs_lh_base cs_fs_20 cs_fs_lg_18 m-0"><a href="{{ url('services-details') }}" class="inline-block">Legal <br>Consulting</a></h2>
                </div>
                <p class="cs_mb_20">Our expert consultants work closely with you to develop tailored financial strategies that align with your short-term and long-term aspirations.</p>
                <div class="text-primary">
                  <a href="{{ url('services-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10">
                    <span class="cs_post_btn-text">Read More</span>
                    <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"></path>
                    </svg>                                  
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex cs_column_gap_15 justify-content-center cs_pt_50">
            <div class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
              <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"/>
                <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"/>
              </svg>             
            </div>
            <div class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
              <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"/>
                <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"/>
              </svg>          
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Service Section -->

    <!-- Animated Text -->
    <div class="cs_moving_wrap background-filled text-uppercase text-white d-flex align-items-center" data-src="assets/img/moving_text_shape.png">
      <div class="cs_moving_text cs_fs_30 cs_fs_lg_26 d-flex align-items-center text-nowrap">
        <span>* Creative Business & Finance</span>
        <span>* Business Inspired Template</span>
        <span>* Innovation Creative Design </span>
        <span>* Creative Business & Finance</span>
      </div>
      <div class="cs_moving_text cs_fs_30 d-flex align-items-center text-nowrap">
        <span>* Creative Business & Finance</span>
        <span>* Business Inspired Template</span>
        <span>* Innovation Creative Design </span>
        <span>* Creative Business & Finance</span>
      </div>
      <div class="cs_moving_text cs_fs_30 d-flex align-items-center text-nowrap">
        <span>* Creative Business & Finance</span>
        <span>* Business Inspired Template</span>
        <span>* Innovation Creative Design </span>
        <span>* Creative Business & Finance</span>
      </div>
    </div>
    <!-- End Animated Text -->

    <!-- Start Our Latest Project -->
    <section class="background-top-filled cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80" data-src="assets/img/gallery_bg.jpeg">
      <div class="container">
        <div class="cs_section_heading cs_style_1 text-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Latest Project</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Explore Our Best <br>Recent Work Projects</h2>
          </div>
        </div>
        <ul class="cs_isotop_filter cs_style_1 d-flex justify-content-center flex-wrap m-0 cs_pl_0 cs_pb_30">
          <li class="active"><a href="#" data-filter="*">All</a></li>
          <li><a href="#" data-filter=".graphics">Graphics</a></li>
          <li><a href="#" data-filter=".website">Website</a></li>
          <li><a href="#" data-filter=".digital">Digital</a></li>
          <li><a href="#" data-filter=".marketing">Marketing</a></li>
        </ul>
        <div class="cs_isotop cs_style_1 cs_isotop_col_3 cs_has_gutter_24">
          <div class="cs_grid_sizer"></div>
          <div class="cs_isotop_item website">
            <div class="cs_portfolio cs_style_1 cs_size_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_1.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
          <div class="cs_isotop_item marketing">
            <div class="cs_portfolio cs_style_1 cs_size_2 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_2.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
          <div class="cs_isotop_item graphics">
            <div class="cs_portfolio cs_style_1 cs_size_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_3.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
          <div class="cs_isotop_item digital">
            <div class="cs_portfolio cs_style_1 cs_size_1 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_4.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
          <div class="cs_isotop_item website">
            <div class="cs_portfolio cs_style_1 cs_size_2 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_5.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
          <div class="cs_isotop_item graphics">
            <div class="cs_portfolio cs_style_1 cs_size_2 position-relative overflow-hidden">
              <a href="{{ url('project-details') }}" class="cs_portfolio_overlay cs_transition_4 position-absolute h-100 w-100 start-0 top-0 cs_zindex_1 d-block"></a>
              <div class="cs_portfolio_thumb d-block h-100 w-100 background-filled cs_transition_6" data-src="assets/img/project_6.jpeg"></div>
              <h3 class="cs_portfolio_title m-0 cs_fs_26 text-white cs_pl_50 cs_pb_45 cs_mr_50 position-relative cs_zindex_4 position-absolute start-0 bottom-0 w-100 cs_transition_4"><a href="{{ url('project-details') }}">Marketing Webdesign</a></h3>
            </div>
          </div><!-- .cs_isotop_item -->
        </div>
      </div>
    </section>
    <!-- End Our Latest Project -->

    <!-- Start Testimonial Section -->
    <section class="cs_pt_133 cs_pt_lg_73 cs_pb_133 cs_pb_lg_75">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Our Latest Project</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">What They’re Saying?</h2>
            <p class="mb-0">Providing legal advice, contract drafting, compliance assistance, intellectual <br> property protection, and other legal support for businesses.</p>
          </div>
        </div>
        <div class="cs_testimonial_slider_2 cs_gap_24">
          <div class="cs_slider_activate">
            <div class="cs_slide">
              <div class="cs_testimonial cs_style_1 cs_pt_20">
                <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                  <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_1.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                  <div class="cs_rating text-accent cs_mb_15" data-rating="4.5">
                    <div class="cs_rating_percentage"></div>
                  </div>
                  <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                  <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Darlene Robertson</h3>
                  <p class="m-0 cs_fs_14 cs_lh_base">Web design</p>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_testimonial cs_style_1 cs_pt_20">
                <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                  <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_2.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                  <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                    <div class="cs_rating_percentage"></div>
                  </div>
                  <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                  <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Carol McCarthy</h3>
                  <p class="m-0 cs_fs_14 cs_lh_base">Product manager</p>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_testimonial cs_style_1 cs_pt_20">
                <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                  <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_3.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                  <div class="cs_rating text-accent cs_mb_15" data-rating="4">
                    <div class="cs_rating_percentage"></div>
                  </div>
                  <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                  <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Peter Johnson</h3>
                  <p class="m-0 cs_fs_14 cs_lh_base">Web developer</p>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_testimonial cs_style_1 cs_pt_20">
                <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                  <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_4.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                  <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                    <div class="cs_rating_percentage"></div>
                  </div>
                  <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                  <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Max Lawrence</h3>
                  <p class="m-0 cs_fs_14 cs_lh_base">Digital marketing</p>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_testimonial cs_style_1 cs_pt_20">
                <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                  <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_1.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                  <div class="cs_rating text-accent cs_mb_15" data-rating="4.5">
                    <div class="cs_rating_percentage"></div>
                  </div>
                  <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                  <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Darlene Robertson</h3>
                  <p class="m-0 cs_fs_14 cs_lh_base">Web design</p>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_testimonial cs_style_1 cs_pt_20">
                <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                  <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_2.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                  <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                    <div class="cs_rating_percentage"></div>
                  </div>
                  <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                  <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Carol McCarthy</h3>
                  <p class="m-0 cs_fs_14 cs_lh_base">Product manager</p>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_testimonial cs_style_1 cs_pt_20">
                <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                  <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_3.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                  <div class="cs_rating text-accent cs_mb_15" data-rating="4">
                    <div class="cs_rating_percentage"></div>
                  </div>
                  <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                  <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Peter Johnson</h3>
                  <p class="m-0 cs_fs_14 cs_lh_base">Web developer</p>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_testimonial cs_style_1 cs_pt_20">
                <div class="cs_testimonial_in bg-white shadow-sm cs_pl_30 cs_pr_30 cs_pb_27 cs_pt_1 cs_rounded_10">
                  <div class="cs_testimonial_img cs_mb_15"><img src="assets/img/avatar_4.png" alt="Avatar" class="cs_height_75 cs_width_75 rounded-circle"></div>
                  <div class="cs_rating text-accent cs_mb_15" data-rating="5">
                    <div class="cs_rating_percentage"></div>
                  </div>
                  <p class="cs_mb_14">I've been using [business name] for the past year and I'm so glad I did. Their products and services are top-notch and their customer service is amazing. I would highly recommend them to anyone</p>
                  <h3 class="cs_fs_18 cs_mb_2 cs_lh_base">Max Lawrence</h3>
                  <p class="m-0 cs_fs_14 cs_lh_base">Digital marketing</p>
                </div>
              </div>
            </div>
          </div>
          <div class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4 position-absolute">
            <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"/>
              <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"/>
            </svg>             
          </div>
          <div class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4 position-absolute">
            <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"/>
              <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"/>
            </svg>          
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- Start Team Section -->
    <section class="cs_pb_55 cs_pb_lg_0">
      <div class="container">
        <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_60 cs_mb_lg_40">
          <div class="cs_section_heading_in">
            <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Meet Our Team Member</h3>
            <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Meet the professional team <br>behind the success</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_member position-relative">
                <img class="w-100" src="assets/img/team_member_1.jpeg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Ralph Edwards</h2>
                <p class="text-white m-0">Web designer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_member position-relative">
                <img class="w-100" src="assets/img/team_member_2.jpeg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Wade Warren</h2>
                <p class="text-white m-0">Marketing Coordinator</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_member position-relative">
                <img class="w-100" src="assets/img/team_member_3.jpeg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Jane Cooper</h2>
                <p class="text-white m-0">Creative Designer</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="cs_team cs_style_1 text-center cs_mb_25 overflow-hidden">
              <div class="cs_team_member position-relative">
                <img class="w-100" src="assets/img/team_member_5.jpeg" alt="Member">
                <div class="cs_social_btns d-flex flex-wrap cs_column_gap_15 cs_row_gap_15 cs_transition_5 cs_fs_20 cs_fs_lg_18 position-absolute">
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#" class="d-flex align-items-center justify-content-center cs_height_45 cs_width_45 border-0 text-white rounded-circle"><i class="fa-brands fa-dribbble"></i></a>
                </div>
              </div>
              <div class="cs_team_info cs_pt_127 cs_pl_15 cs_pr_15 cs_pb_25 cs_transition_4">
                <h2 class="text-white m-0 cs_fs_26 cs_mb_3">Bindo Jamal</h2>
                <p class="text-white m-0">Head of Marketer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Team Section -->

    <!-- Start Company Statistic -->
    <section class="cs_pb_140 cs_pb_lg_80 cs_pt_140 cs_pt_lg_50">
      <div class="container">
        <div class="row align-items-center cs_gap_y_40">
          <div class="col-lg-6">
            <div class="cs_statis_text_section">
              <div class="cs_section_heading cs_style_1 cs_mb_50">
                <div class="cs_section_heading_in">
                  <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Company’s Statistic</h3>
                  <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20">Achievements of Our Bizmax Finance</h2>
                  <p class="m-0">Providing legal advice, contract drafting, compliance assistance, intellectual property protection, and other legal support.</p>
                </div>
              </div>
              <div class="row cs_row_gap_24">
                <div class="col-lg-6">
                  <div class="cs_funfact cs_style_1 d-flex cs_column_gap_20 align-items-center cs_rounded_5">
                    <div class="cs_funfact_icon d-flex align-items-center justify-content-between">
                      <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_526_249)">
                        <path d="M0 50.1562C0.5 48.6719 1.17188 47.2656 2.20312 46.0625C3.3125 44.7656 4.64062 43.7812 6.21875 43.1094C6.35938 43.0469 6.48438 42.9844 6.6875 42.9063C5.17188 41.5625 4.39062 39.9531 4.5 37.9688C4.59375 36.3594 5.25 35 6.46875 33.9219C8.78125 31.8594 12.3438 31.9844 14.5312 34.2031C16.6094 36.3125 17.0625 40.1875 14.0156 42.9219C15.8437 43.625 17.3906 44.7187 18.625 46.2187C21.4375 43.0937 21.7969 42.7969 25.7344 41.0313C21.2969 37.7031 21.9375 32.1719 24.7188 29.4531C27.6875 26.5625 32.3438 26.5625 35.3281 29.4531C38.1562 32.2031 38.7188 37.7344 34.3125 41.0313C38.4688 42.8594 38.8594 43.3594 41.4219 46.2187C42.6562 44.7344 44.1719 43.6406 46.0469 42.9219C44.4062 41.4688 43.6406 39.7031 43.8906 37.5781C44.0625 36.0781 44.7656 34.8437 45.9062 33.8594C48.1719 31.9062 51.5781 32 53.75 34.0937C55.0156 35.3125 55.6094 36.8281 55.5625 38.5625C55.5156 40.0781 55.125 40.7969 53.4844 42.8594C54.4219 43.4375 55.4063 43.9375 56.2812 44.5938C58.0938 45.9688 59.2969 47.7812 59.9375 49.9687C59.9531 50.0469 60.0156 50.0938 60.0469 50.1719C60.0469 50.5625 60.0469 50.9531 60.0469 51.3438C59.1562 53.4375 58.4375 53.9062 56.125 53.9062C52.2969 53.9062 48.4688 53.9062 44.6406 53.9062C44.4062 53.9062 44.1875 53.9062 43.8906 53.9062C43.8906 54.5781 43.9062 55.1875 43.8906 55.7812C43.8125 57.6875 42.5781 59.2656 40.7812 59.8125C40.5938 59.875 40.4219 59.9375 40.25 60C33.4531 60 26.6562 60 19.8594 60C19.8281 59.9688 19.8125 59.9375 19.7812 59.9219C17.2656 59.1562 16.2031 57.7344 16.2031 55.125C16.2031 54.7187 16.2031 54.3281 16.2031 53.8906C15.875 53.8906 15.6406 53.8906 15.4062 53.8906C11.3906 53.8906 7.35938 53.8906 3.34375 53.8906C1.79688 53.8906 0.65625 53.0469 0.1875 51.5781C0.15625 51.4844 0.109375 51.4062 0.0625 51.3281C0 50.9375 0 50.5469 0 50.1562ZM29.9531 58.125C33.0938 58.125 36.2344 58.125 39.3906 58.125C40.7188 58.125 41.8438 57.2344 41.9375 56C42.0156 54.8437 42.0781 53.6406 41.9062 52.5C41.2188 47.5938 37.375 43.5625 32.5625 42.5625C27.5312 41.5156 22.4688 43.6406 19.7812 47.9062C18.3438 50.1875 17.8594 52.6719 18 55.3438C18.0938 57.1094 19.0469 58.125 20.8281 58.125C23.8594 58.125 26.9062 58.125 29.9531 58.125ZM30.0156 29.1406C26.9063 29.125 24.375 31.625 24.3594 34.7344C24.3437 37.8438 26.8438 40.375 29.9375 40.4063C33.0156 40.4375 35.5938 37.9062 35.625 34.8281C35.6562 31.6875 33.1562 29.1562 30.0156 29.1406ZM43.9062 52C43.875 52 43.9375 52.0156 44 52.0156C48.25 52.0156 52.5156 52.0312 56.7656 52.0156C57.7969 52.0156 58.3594 51.2031 58.0312 50.2188C57.2031 47.7812 55.625 46 53.2969 44.9375C49.625 43.25 45.1406 44.375 42.7344 47.5938C42.6094 47.7656 42.5156 48.0625 42.5781 48.25C42.9688 49.4687 43.4219 50.6875 43.9062 52ZM16.1094 52.0156C16.5469 50.7656 16.9219 49.5781 17.3906 48.4219C17.5312 48.0625 17.5312 47.8281 17.2969 47.5469C15.0937 44.8594 12.25 43.7188 8.82812 44.3125C5.53125 44.875 3.28125 46.8281 2.09375 49.9687C1.59375 51.2656 2.14062 52.0156 3.53125 52.0156C7.57812 52.0156 11.6094 52.0156 15.6562 52.0156C15.8281 52.0156 16.0156 52.0156 16.1094 52.0156ZM45.6875 38.2969C45.6875 40.5 47.4688 42.2969 49.6562 42.2969C51.8281 42.2969 53.6406 40.5 53.6562 38.3125C53.6562 36.125 51.8594 34.3281 49.6719 34.3281C47.4531 34.3281 45.6875 36.0938 45.6875 38.2969ZM14.3125 38.3281C14.3281 36.1094 12.5625 34.3437 10.375 34.3281C8.17188 34.3125 6.375 36.0781 6.35938 38.2812C6.34375 40.4531 8.14062 42.2813 10.3281 42.2969C12.5 42.3125 14.2969 40.5156 14.3125 38.3281Z" fill="#E9A132"/>
                        <path d="M0 14.0625C0.421875 13.3438 1.0625 13.1406 1.85937 13.125C3.17187 13.1094 4.46875 13 5.78125 12.9531C6.125 12.9375 6.29687 12.8125 6.40625 12.4844C6.89062 11.1719 7.40625 9.85938 7.89062 8.54688C8.125 7.90625 8.5 7.45312 9.23437 7.4375C9.85937 7.42187 10.2969 7.78125 10.5781 8.53125C11.0781 9.84375 11.5937 11.1563 12.0625 12.4688C12.1875 12.8125 12.375 12.9531 12.7344 12.9688C14.1406 13.0156 15.5469 13.0937 16.9531 13.1562C17.5781 13.1875 18.1094 13.375 18.375 14C18.625 14.5781 18.4687 15.1563 17.9062 15.6094C16.7969 16.5312 15.6719 17.4375 14.5312 18.3125C14.1875 18.5781 14.1562 18.8125 14.2656 19.2031C14.6562 20.5469 15.0156 21.9062 15.375 23.2656C15.5625 24 15.4219 24.5469 14.9062 24.875C14.3281 25.2656 13.7812 25.1562 13.2187 24.7812C12.0312 23.9844 10.8281 23.2188 9.65625 22.4375C9.375 22.25 9.15625 22.25 8.875 22.4375C7.6875 23.2344 6.48437 24 5.3125 24.7812C4.76562 25.1406 4.20312 25.2656 3.625 24.875C3.09375 24.5156 2.95312 24 3.17187 23.2031C3.51562 21.9219 3.82812 20.6406 4.23437 19.375C4.40625 18.8125 4.28125 18.5 3.82812 18.1562C2.82812 17.4062 1.85937 16.6094 0.90625 15.8125C0.578125 15.5469 0.328125 15.2031 0.046875 14.8906C0 14.6094 0 14.3438 0 14.0625ZM5.25 22.5469C6.26562 21.8906 7.20312 21.3437 8.04687 20.7031C8.89062 20.0781 9.625 20.125 10.4375 20.7188C11.2812 21.3438 12.1875 21.875 13.2031 22.5312C12.875 21.3281 12.625 20.2656 12.2969 19.2344C12.0156 18.3281 12.2031 17.6719 13 17.0938C13.875 16.4688 14.6875 15.75 15.6719 14.9688C14.3125 14.8906 13.125 14.8125 11.9531 14.7812C11.2656 14.75 10.8125 14.4375 10.5781 13.7969C10.4687 13.4844 10.3437 13.1719 10.2187 12.875C9.90625 12.0625 9.59375 11.25 9.23437 10.2969C8.76562 11.5156 8.34375 12.5781 7.96875 13.6563C7.70312 14.4063 7.21875 14.7812 6.40625 14.7969C5.26562 14.8125 4.125 14.9063 2.82812 14.9844C3.85937 15.8281 4.76562 16.5625 5.67187 17.2812C6.23437 17.7344 6.4375 18.2656 6.23437 18.9844C5.89062 20.1094 5.60937 21.2656 5.25 22.5469Z" fill="#E9A132"/>
                        <path d="M60 14.8905C59.7031 15.2187 59.4375 15.578 59.0937 15.8593C58.1719 16.6405 57.2344 17.4218 56.2656 18.1249C55.7656 18.4843 55.625 18.8124 55.8281 19.4218C56.2187 20.6249 56.5156 21.8593 56.8437 23.078C57.0781 23.9687 56.9687 24.4843 56.4219 24.8593C55.7969 25.2812 55.2187 25.0937 54.6406 24.703C53.5156 23.9374 52.3437 23.2187 51.2187 22.453C50.8906 22.2343 50.6562 22.2343 50.3437 22.453C49.2031 23.2343 48.0156 23.9687 46.875 24.7343C46.3125 25.1093 45.7344 25.2655 45.1406 24.8593C44.6094 24.4999 44.4844 23.953 44.7031 23.1249C45.0625 21.8124 45.3906 20.4843 45.7969 19.1718C45.9219 18.7343 45.8281 18.5155 45.4844 18.2499C44.3906 17.4062 43.3281 16.5155 42.2344 15.6562C41.7187 15.2499 41.4375 14.7499 41.6406 14.078C41.8125 13.4999 42.2812 13.1718 43.0469 13.1405C44.4687 13.0624 45.8906 12.9999 47.3125 12.953C47.6719 12.9374 47.8594 12.8124 47.9844 12.453C48.4531 11.1405 48.9687 9.82805 49.4687 8.51555C49.7656 7.74992 50.1875 7.39055 50.8125 7.4218C51.5312 7.45305 51.9219 7.89055 52.1562 8.53117C52.6406 9.84367 53.1562 11.1562 53.6406 12.4687C53.7656 12.7968 53.9219 12.9218 54.2656 12.9374C55.5781 12.9843 56.875 13.078 58.1875 13.1093C58.9844 13.1249 59.625 13.328 60.0469 14.0468C60 14.3437 60 14.6093 60 14.8905ZM57.1875 14.9843C55.8906 14.9062 54.7656 14.8124 53.6562 14.7968C52.7812 14.7812 52.2969 14.3905 52.0156 13.5937C51.6562 12.5312 51.2187 11.4999 50.7656 10.3124C50.2969 11.5155 49.875 12.578 49.5 13.6562C49.2344 14.4218 48.75 14.7812 47.9375 14.7968C46.7969 14.828 45.6562 14.9062 44.3437 14.9843C45.2656 15.7343 46.0312 16.4218 46.875 17.0155C47.7969 17.6562 48 18.4062 47.6406 19.4374C47.3125 20.4062 47.0937 21.4218 46.7969 22.5468C47.7812 21.9062 48.6562 21.4062 49.4531 20.7812C50.375 20.0624 51.1875 20.0937 52.0937 20.7812C52.9062 21.3905 53.7812 21.9062 54.7344 22.5312C54.4219 21.3749 54.2031 20.3437 53.8594 19.3593C53.5156 18.3593 53.7344 17.6562 54.6094 17.0312C55.4687 16.4374 56.25 15.7499 57.1875 14.9843Z" fill="#E9A132"/>
                        <path d="M30.3597 0C30.844 0.328125 30.9847 0.78125 30.9534 1.35938C30.9222 2.3125 30.9534 3.26562 30.9378 4.23438C30.9378 4.92188 30.5628 5.3125 29.969 5.29688C29.4065 5.28125 29.0628 4.89062 29.0628 4.23438C29.0472 3.28125 29.094 2.3125 29.0472 1.35938C29.0315 0.78125 29.1565 0.328125 29.6409 0C29.8909 0 30.1253 0 30.3597 0Z" fill="#E9A132"/>
                        <path d="M34.6875 25.1094C34.5469 25.0469 34.2344 24.9375 33.9687 24.7656C32.7969 24.0156 31.6406 23.2656 30.5 22.4844C30.1406 22.2344 29.875 22.25 29.5156 22.5C28.375 23.2813 27.2031 24.0156 26.0469 24.7813C25.5 25.1563 24.9375 25.2656 24.3594 24.875C23.8281 24.5156 23.7031 23.9844 23.9062 23.2031C24.2656 21.8906 24.5937 20.5625 24.9844 19.25C25.1094 18.8125 25.0625 18.5469 24.6875 18.2656C23.5781 17.4219 22.5156 16.5469 21.4375 15.6719C20.8125 15.1719 20.6406 14.7031 20.8437 14.1094C21.0625 13.4375 21.5781 13.1875 22.2344 13.1563C23.6406 13.0938 25.0469 13.0156 26.4375 12.9688C26.8437 12.9531 27.0469 12.8281 27.1875 12.4219C27.6562 11.0938 28.1719 9.7969 28.6719 8.4844C28.9531 7.76565 29.375 7.4219 29.9844 7.43752C30.5937 7.43752 31.0156 7.78127 31.2969 8.50002C31.7969 9.7969 32.3125 11.0781 32.7656 12.375C32.9219 12.8281 33.1562 12.9688 33.6094 12.9844C35 13.0313 36.375 13.0938 37.7656 13.1719C38.8906 13.2344 39.5469 14.1875 39.0781 15.0781C38.9531 15.3125 38.75 15.5156 38.5469 15.6875C37.4531 16.5781 36.375 17.4688 35.2656 18.3281C34.9531 18.5625 34.875 18.7656 34.9844 19.1563C35.3906 20.5625 35.7656 21.9688 36.1406 23.3906C36.3906 24.3125 35.7812 25.1094 34.6875 25.1094ZM23.5781 14.9844C24.6406 15.8438 25.5469 16.5781 26.4531 17.2969C27 17.7344 27.2031 18.2656 27 18.9531C26.75 19.7969 26.5312 20.6406 26.3125 21.4844C26.2344 21.7656 26.1719 22.0625 26.0625 22.5313C27.1719 21.7969 28.1406 21.1875 29.0937 20.5469C29.7187 20.125 30.3125 20.125 30.9375 20.5469C31.7656 21.1094 32.5937 21.6406 33.4375 22.1875C33.5625 22.2656 33.7187 22.3281 33.9687 22.4688C33.6406 21.25 33.375 20.1719 33.0625 19.125C32.8281 18.3281 32.9844 17.7188 33.6719 17.2344C34.2656 16.7969 34.8281 16.3125 35.4062 15.8438C35.7187 15.5938 36.0156 15.3438 36.4375 15C35.0937 14.9219 33.9375 14.8438 32.7656 14.8125C32.0156 14.7969 31.5625 14.4375 31.3125 13.7656C31.0625 13.0938 30.8125 12.4219 30.5469 11.7344C30.3906 11.3125 30.2187 10.8906 29.9844 10.3438C29.5156 11.5938 29.0937 12.6719 28.6875 13.7656C28.4375 14.4531 27.9687 14.7813 27.2344 14.8125C26.0781 14.8281 24.9062 14.9063 23.5781 14.9844Z" fill="#E9A132"/>
                        <path d="M40.3441 5.81241C40.1566 6.14053 40.0629 6.40616 39.8754 6.57803C38.641 7.71866 37.391 8.84366 36.141 9.95303C35.7035 10.3437 35.141 10.3124 34.7816 9.92178C34.4222 9.53116 34.4535 8.96866 34.891 8.56241C36.1254 7.43741 37.3754 6.31241 38.6254 5.18741C38.9379 4.90616 39.3285 4.76553 39.6879 5.01553C39.9535 5.21866 40.1254 5.53116 40.3441 5.81241Z" fill="#E9A132"/>
                        <path d="M25.5777 9.32824C25.359 9.60949 25.2183 9.96887 24.9683 10.0782C24.6871 10.1876 24.2027 10.2032 23.9996 10.0314C22.6246 8.87512 21.3121 7.65637 19.984 6.43762C19.6402 6.10949 19.6871 5.54699 19.9996 5.21887C20.359 4.84387 20.8746 4.79699 21.3121 5.17199C22.1715 5.90637 22.9996 6.67199 23.8433 7.43762C24.2496 7.79699 24.6715 8.15637 25.0465 8.54699C25.2652 8.73449 25.3746 9.00012 25.5777 9.32824Z" fill="#E9A132"/>
                        <path d="M16.1097 52.0156C16.016 52.0156 15.8285 52.0156 15.641 52.0156C11.5941 52.0156 7.56283 52.0156 3.51596 52.0156C2.12533 52.0156 1.57846 51.2656 2.07846 49.9687C3.26596 46.8281 5.51596 44.8749 8.81283 44.3124C12.2347 43.7343 15.0628 44.8593 17.2816 47.5468C17.516 47.8437 17.5316 48.0624 17.3753 48.4218C16.9378 49.5937 16.5472 50.7656 16.1097 52.0156Z" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_526_249">
                        <rect width="60" height="60" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                        
                    </div>
                    <div class="cs_funfact_right">
                      <h2 class="cs_funfact_number cs_fs_32 cs_mb_0"><span data-count-to="50" class="odometer"></span>K</h2>
                      <h3 class="cs_funfact_title cs_fs_16 cs_mb_0 fw-normal">Happy Clients</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="cs_funfact cs_style_1 d-flex cs_column_gap_20 align-items-center cs_rounded_5">
                    <div class="cs_funfact_icon d-flex align-items-center justify-content-between">
                      <svg width="60" height="71" viewBox="0 0 60 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_526_331)">
                        <path d="M31.4243 0C32.0947 0.304913 32.8209 0.526668 33.4075 0.942458C34.5807 1.77404 35.0975 2.99369 35.1114 4.42124C35.1114 4.76773 35.1114 5.11422 35.1114 5.55773C35.4047 5.55773 35.6561 5.55773 35.8936 5.55773C39.1058 5.55773 42.3181 5.55773 45.5304 5.55773C47.9746 5.55773 49.3712 6.9437 49.3712 9.39686C49.3712 9.56318 49.3852 9.71563 49.3712 9.88195C49.3014 10.3532 49.4969 10.6027 49.9578 10.8244C50.9075 11.2541 51.8014 11.7946 52.8768 12.3767C53.212 12.0025 53.5891 11.5312 54.0081 11.1155C55.5025 9.67405 57.6114 9.64633 58.9941 11.06C60.3489 12.4321 60.307 14.5249 58.8684 15.9663C54.7623 20.055 50.6422 24.1436 46.522 28.2183C44.9997 29.729 42.9606 29.7151 41.4383 28.2044C39.5528 26.3472 37.6813 24.49 35.8098 22.619C34.3293 21.136 34.2734 19.0571 35.6701 17.6711C37.0528 16.2851 39.1757 16.3128 40.6561 17.7681C41.7455 18.8353 42.8209 19.9164 43.8405 20.9281C46.2427 18.5442 48.631 16.1742 51.0332 13.7904C49.7762 12.8479 48.226 12.2104 46.536 11.947C39.7762 10.8798 33.8265 15.6337 33.4075 22.425C33.0165 28.8836 38.7567 34.4967 45.2651 34.0255C51.117 33.6097 55.4327 29.3271 55.8377 23.5337C55.8936 22.716 56.2846 22.2864 56.955 22.3279C57.6114 22.3557 58.0025 22.8407 57.9327 23.6585C57.4997 28.8558 54.9159 32.6257 50.1952 34.9125C49.5248 35.2313 49.3572 35.5639 49.3712 36.2431C49.3852 46.3745 49.3572 56.5198 49.4131 66.6512C49.4271 68.7717 48.7288 70.2686 46.6477 70.9754C32.0248 70.9754 17.4159 70.9754 2.793 70.9754C1.43825 70.518 0.404733 69.7558 0.0974708 68.2728C0.0276383 67.954 0.0136719 67.6352 0.0136719 67.3164C0.0136719 47.9545 0.0136719 28.6064 0.0136719 9.2444C0.0136719 6.99914 1.45222 5.57159 3.72876 5.57159C5.89356 5.57159 8.05836 5.57159 10.2232 5.57159C11.0332 5.57159 11.4941 5.98738 11.4802 6.65264C11.4662 7.24861 11.0193 7.65054 10.293 7.65054C8.15613 7.6644 6.00529 7.65054 3.86842 7.65054C2.56954 7.65054 2.10864 8.10791 2.10864 9.41072C2.10864 28.648 2.10864 47.8852 2.10864 67.1363C2.10864 68.4529 2.55557 68.8964 3.85445 68.8964C17.7511 68.8964 31.6477 68.8964 45.5444 68.8964C46.8293 68.8964 47.3042 68.4529 47.3042 67.2056C47.3042 56.9771 47.3042 46.7348 47.3042 36.5064C47.3042 36.3262 47.2762 36.146 47.2623 35.9104C42.4159 36.6588 38.2399 35.4115 34.874 31.8634C32.388 29.2301 31.2148 26.0423 31.3405 22.4527C31.6198 14.3586 39.1617 8.31581 47.1924 9.86809C47.5695 8.46826 46.969 7.65054 45.5444 7.65054C42.3042 7.65054 39.0779 7.65054 35.8377 7.65054C35.6282 7.65054 35.4327 7.6644 35.1254 7.69212C35.1254 8.21879 35.1394 8.71774 35.1254 9.21668C35.0835 10.7828 34.1059 11.7669 32.5137 11.7669C27.3042 11.7807 22.0807 11.7807 16.8712 11.7669C15.2651 11.7669 14.2595 10.7274 14.2595 9.14739C14.2455 7.6644 14.2595 6.19527 14.2595 4.71229C14.2595 2.32843 15.3908 0.817721 17.7092 0.124737C17.7651 0.110877 17.8209 0.0554387 17.8768 0.0138597C22.388 0 26.9131 0 31.4243 0ZM24.7204 9.66019C27.2343 9.66019 29.7483 9.64633 32.2483 9.67405C32.8209 9.67405 33.0304 9.49388 33.0304 8.91177C33.0025 7.42879 33.0444 5.95966 33.0165 4.47668C32.9885 2.97983 32.0528 2.07895 30.5444 2.06509C26.6338 2.05123 22.7371 2.05123 18.8265 2.06509C17.3042 2.06509 16.3545 3.02141 16.3545 4.54597C16.3405 5.97352 16.3824 7.41493 16.3405 8.84247C16.3265 9.49388 16.564 9.67405 17.1924 9.67405C19.6924 9.64633 22.2064 9.66019 24.7204 9.66019ZM38.2818 18.669C37.9885 18.7383 37.8489 18.7521 37.7092 18.7937C36.6896 19.1402 36.4662 20.3044 37.3042 21.136C39.1059 22.9378 40.9215 24.7395 42.7371 26.5274C43.6869 27.4699 44.3153 27.4699 45.279 26.5136C49.2455 22.5774 53.212 18.6413 57.1785 14.7051C57.3321 14.5527 57.4857 14.4141 57.6114 14.2477C58.0165 13.6934 57.9606 12.9311 57.4857 12.4737C56.9969 12.0025 56.2707 11.9609 55.712 12.4044C55.5165 12.5569 55.3349 12.7509 55.1533 12.9311C51.7595 16.299 48.3796 19.6669 44.9857 23.0209C44.2455 23.7555 43.7707 23.7555 43.0304 23.0209C41.7734 21.7874 40.5444 20.5262 39.2734 19.3065C38.9662 19.0155 38.5472 18.8492 38.2818 18.669Z" fill="#E9A132"/>
                        <path d="M13.1568 42.2582C13.1288 44.5589 11.2434 46.4161 8.92492 46.4161C6.57855 46.4022 4.69308 44.5034 4.72101 42.1612C4.74894 39.8604 6.64838 37.9894 8.95285 38.0033C11.2992 38.0171 13.1707 39.9159 13.1568 42.2582ZM6.81598 42.2305C6.81598 43.3947 7.77967 44.351 8.95285 44.3371C10.1121 44.3233 11.0618 43.3669 11.0618 42.2027C11.0618 41.0385 10.0841 40.0822 8.92492 40.0822C7.75174 40.0961 6.80202 41.0662 6.81598 42.2305Z" fill="#E9A132"/>
                        <path d="M4.70703 29.4519C4.70703 27.1373 6.56457 25.2524 8.88301 25.2247C11.2433 25.1969 13.1568 27.068 13.1568 29.4103C13.1707 31.7526 11.2573 33.6514 8.92491 33.6375C6.60647 33.6375 4.721 31.7664 4.70703 29.4519ZM11.0618 29.4519C11.0757 28.2877 10.126 27.3175 8.96681 27.3036C7.79362 27.2898 6.82994 28.2322 6.81597 29.3964C6.802 30.5606 7.75172 31.5308 8.91094 31.5447C10.0702 31.5724 11.0478 30.6161 11.0618 29.4519Z" fill="#E9A132"/>
                        <path d="M4.72043 54.7735C4.76233 52.4728 6.67574 50.6156 8.99418 50.6572C11.3545 50.6988 13.1981 52.5837 13.1562 54.9398C13.1143 57.2682 11.2009 59.0977 8.81261 59.0423C6.50814 59.0007 4.67853 57.0881 4.72043 54.7735ZM11.0612 54.8844C11.0752 53.7063 10.1394 52.75 8.96624 52.7361C7.79306 52.7223 6.82937 53.6647 6.8154 54.8289C6.80144 56.007 7.73719 56.9495 8.91038 56.9633C10.0975 56.9772 11.0472 56.0486 11.0612 54.8844Z" fill="#E9A132"/>
                        <path d="M24.4553 38.7794C27.1928 38.7794 29.9442 38.7655 32.6816 38.7932C33.0587 38.7932 33.5336 38.9457 33.785 39.209C34.2738 39.6941 33.9945 40.5534 33.3101 40.7613C33.0587 40.8444 32.7654 40.8444 32.4861 40.8444C27.0671 40.8444 21.662 40.8444 16.2431 40.8444C16.1034 40.8444 15.9637 40.8444 15.8241 40.8444C15.1397 40.789 14.7067 40.3316 14.7347 39.7357C14.7766 39.1536 15.1956 38.7794 15.8799 38.7794C18.7291 38.7655 21.5922 38.7794 24.4553 38.7794Z" fill="#E9A132"/>
                        <path d="M24.371 56.2426C27.1364 56.2426 29.9018 56.2288 32.6671 56.2565C33.0442 56.2565 33.5191 56.4089 33.7705 56.6584C34.2593 57.1435 33.98 58.0028 33.3096 58.2246C33.0302 58.3216 32.723 58.3216 32.4157 58.3216C27.0526 58.3216 21.6755 58.3216 16.3124 58.3216C16.1448 58.3216 15.9911 58.3354 15.8235 58.3216C15.1392 58.2661 14.6923 57.8088 14.7342 57.2128C14.7621 56.6445 15.1811 56.2426 15.8654 56.2426C18.3794 56.2288 20.8794 56.2288 23.3934 56.2288C23.7146 56.2288 24.0498 56.2426 24.371 56.2426Z" fill="#E9A132"/>
                        <path d="M22.1372 51.4055C24.1903 51.4055 26.2294 51.4055 28.2825 51.4055C29.1065 51.4055 29.5813 51.7797 29.5953 52.4173C29.6093 53.0687 29.1065 53.4845 28.2545 53.4845C24.1763 53.4845 20.1121 53.4845 16.0339 53.4845C15.2238 53.4845 14.735 53.0964 14.721 52.4589C14.707 51.7936 15.1819 51.4055 16.0618 51.4055C18.0869 51.4055 20.1121 51.4055 22.1372 51.4055Z" fill="#E9A132"/>
                        <path d="M22.1648 33.0275C20.0419 33.0275 17.933 33.0414 15.8101 33.0275C15.1397 33.0275 14.7207 32.5979 14.7207 32.0158C14.7207 31.4475 15.1397 31.0317 15.7961 30.9763C15.9637 30.9624 16.1174 30.9624 16.2849 30.9624C17.3045 30.9624 18.338 30.9624 19.3576 30.9624C22.2207 30.9624 25.0838 30.9624 27.947 30.9624C28.1844 30.9624 28.4079 30.9486 28.6453 30.9901C29.2458 31.0733 29.6509 31.5445 29.595 32.0712C29.5252 32.6533 29.19 32.9998 28.5894 33.0275C27.9609 33.0552 27.3324 33.0414 26.7039 33.0414C25.1956 33.0275 23.6732 33.0275 22.1648 33.0275Z" fill="#E9A132"/>
                        <path d="M22.0949 28.2182C20.1396 28.2182 18.1843 28.2182 16.229 28.2182C15.9776 28.2182 15.6424 28.2736 15.4888 28.135C15.1815 27.8717 14.8463 27.5252 14.7625 27.1649C14.6647 26.6798 15.0139 26.2917 15.5446 26.1808C15.796 26.1254 16.0474 26.1392 16.3128 26.1392C20.2234 26.1392 24.134 26.1392 28.0307 26.1392C28.0726 26.1392 28.1284 26.1392 28.1703 26.1392C29.1061 26.1531 29.6089 26.5134 29.6089 27.1787C29.6089 27.8578 29.12 28.2182 28.1703 28.2182C26.1312 28.2182 24.1061 28.2182 22.0949 28.2182Z" fill="#E9A132"/>
                        <path d="M20.0283 45.6814C18.7014 45.6814 17.3746 45.6952 16.0478 45.6814C15.2098 45.6675 14.7489 45.2933 14.721 44.6696C14.707 44.0044 15.1959 43.6024 16.0618 43.6024C18.7433 43.5886 21.4109 43.5886 24.0925 43.6024C24.9305 43.6024 25.3914 43.9905 25.4193 44.6142C25.4333 45.2656 24.9445 45.6814 24.0785 45.6814C22.7238 45.6814 21.383 45.6814 20.0283 45.6814Z" fill="#E9A132"/>
                        <path d="M10.2093 17.4631C9.11995 17.4631 8.0166 17.4631 6.92721 17.4631C6.11716 17.4631 5.65626 17.0612 5.67023 16.3959C5.6842 15.7722 6.13112 15.3842 6.91325 15.3842C9.11995 15.3703 11.3267 15.3703 13.5473 15.3842C14.3574 15.3842 14.8183 15.8 14.8043 16.4514C14.7903 17.0751 14.3294 17.4631 13.5613 17.4631C12.444 17.477 11.3267 17.4631 10.2093 17.4631Z" fill="#E9A132"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_526_331">
                        <rect width="60" height="70.9615" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                   
                    </div>
                    <div class="cs_funfact_right">
                      <h2 class="cs_funfact_number cs_fs_32 cs_mb_0"><span data-count-to="35" class="odometer"></span>K</h2>
                      <h3 class="cs_funfact_title cs_fs_16 cs_mb_0 fw-normal">Project Done</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="cs_funfact cs_style_1 d-flex cs_column_gap_20 align-items-center cs_rounded_5">
                    <div class="cs_funfact_icon d-flex align-items-center justify-content-between">
                      <svg width="60" height="73" viewBox="0 0 60 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_526_327)">
                        <path d="M31.8449 0C33.2073 0.227058 34.6075 0.359508 35.9509 0.700095C44.9386 2.91391 51.4286 8.26868 54.8156 16.878C58.8269 27.0956 56.9916 36.5374 49.896 44.9007C49.5365 45.3169 49.5743 45.5818 49.8203 45.9981C53.0748 51.6556 56.3482 57.3321 59.6027 63.0085C59.7541 63.2734 59.9244 63.5572 59.9812 63.8411C60.1325 64.6168 59.4514 65.1845 58.581 64.9953C56.4996 64.5601 54.4372 64.087 52.3558 63.6329C51.5043 63.4437 50.6529 63.2734 49.7446 63.0653C49.2148 64.7304 48.704 66.3387 48.1742 67.947C47.7957 69.158 47.3984 70.369 47.0199 71.5989C46.8686 72.1097 46.6037 72.5071 46.0171 72.5639C45.4305 72.6206 45.1089 72.299 44.844 71.8259C44.352 70.9177 43.8033 70.0284 43.2924 69.1201C42.914 68.4579 43.0654 67.8335 43.6141 67.5307C44.1628 67.228 44.7115 67.3983 45.1089 68.0416C45.2602 68.2687 45.3927 68.5147 45.6008 68.8931C46.2252 66.9063 46.8118 65.0899 47.3984 63.2545C47.5687 62.7058 47.72 62.176 47.9093 61.6272C48.1742 60.8704 48.5904 60.6433 49.3851 60.8136C51.7882 61.3434 54.1723 61.8543 56.7645 62.4219C53.756 57.1996 50.8232 52.1097 47.8525 46.9253C44.5412 49.8392 40.7948 51.8638 36.4807 52.9991C36.6131 53.245 36.7267 53.4721 36.8402 53.6802C38.6567 56.8401 40.4731 59.9811 42.2896 63.141C42.4031 63.3491 42.5356 63.5572 42.6112 63.7654C42.8194 64.3141 42.6302 64.7682 42.1571 65.0331C41.6652 65.3169 41.1921 65.2223 40.8137 64.7871C40.6623 64.6168 40.5488 64.3898 40.4353 64.1816C38.4864 60.7758 36.5185 57.3888 34.5696 53.983C34.3236 53.5667 34.0777 53.4342 33.6235 53.5099C31.1827 53.8884 28.7229 53.8884 26.282 53.5099C25.79 53.4342 25.5819 53.6235 25.3549 54.0208C21.9868 59.9054 18.5999 65.771 15.2129 71.6367C15.0048 72.0151 14.6453 72.299 14.3615 72.6395C14.1155 72.6395 13.8884 72.6395 13.6425 72.6395C13.3965 72.2611 13.037 71.9205 12.9045 71.5042C12.0531 68.9309 11.2394 66.3387 10.4258 63.7464C10.369 63.5572 10.2934 63.3491 10.1988 63.122C7.28485 63.7654 4.40878 64.3709 1.53272 65.0331C1.00292 65.1466 0.548801 65.1466 0.189293 64.6925C-0.151294 64.2384 -0.0566865 63.7843 0.208214 63.3113C1.79762 60.5676 3.3681 57.824 4.9575 55.0804C5.3927 54.3425 5.94142 54.1343 6.52799 54.456C7.11455 54.7777 7.22808 55.421 6.79289 56.1779C5.75221 57.9943 4.6926 59.8297 3.65192 61.6462C3.51947 61.8732 3.40594 62.1003 3.19781 62.4598C4.08712 62.2706 4.8629 62.1381 5.61976 61.9678C7.19024 61.6272 8.76072 61.2677 10.3123 60.9082C11.3908 60.6622 11.7692 60.8893 12.1098 61.9489C12.8288 64.2195 13.5479 66.4901 14.3426 68.9499C17.4268 63.5762 20.4542 58.3349 23.5195 52.9991C19.2432 51.8827 15.4778 49.8959 12.1666 46.9631C12.0531 47.1145 11.9395 47.2469 11.8449 47.3983C11.1259 48.6471 10.4069 49.8959 9.68787 51.1447C9.15807 52.0719 8.68504 52.299 8.02278 51.9394C7.36053 51.5799 7.30377 51.0312 7.83357 50.123C8.72288 48.5714 9.61219 47.0009 10.5393 45.4115C10.1231 44.9196 9.68787 44.4276 9.2716 43.9167C4.74937 38.2781 2.70585 31.8638 3.31134 24.6547C3.91682 17.3888 7.03887 11.3718 12.4883 6.52791C13.1316 5.94134 13.7938 5.9035 14.229 6.41438C14.6831 6.94418 14.5885 7.53075 13.9074 8.11731C9.42297 12.053 6.58475 16.9536 5.67652 22.8382C4.38986 31.2015 6.73612 38.5052 12.7153 44.4844C17.8619 49.6121 24.1817 51.9773 31.4286 51.5989C42.4599 51.0123 51.7882 42.9896 54.1344 32.1665C57.0862 18.6566 48.3634 5.29801 34.7967 2.59224C29.1391 1.4948 23.7465 2.30842 18.6188 4.91958C18.4485 5.01419 18.2971 5.1088 18.1269 5.18448C17.4835 5.48723 16.878 5.33586 16.5942 4.78713C16.3104 4.25733 16.5185 3.63292 17.124 3.29234C19.6595 1.89215 22.3653 0.946074 25.2224 0.435194C26.1496 0.264901 27.0767 0.151372 28.0039 0C29.2905 0 30.5583 0 31.8449 0Z" fill="#E9A132"/>
                        <path d="M49.5935 26.9632C49.461 28.1741 49.3475 29.3283 49.1772 30.4636C49.0448 31.4097 48.5717 31.807 47.8527 31.6557C47.1905 31.5232 46.9256 30.9556 47.0769 30.0852C48.3825 23.0275 45.2226 15.8562 39.1299 12.0719C28.4961 5.46835 14.5131 12.0152 12.7912 24.4277C11.4289 34.229 18.3541 43.2924 28.1744 44.2006C35.5348 44.8818 41.2113 41.8733 45.0902 35.5346C45.2416 35.2697 45.374 34.9859 45.5632 34.7399C45.9038 34.2858 46.3768 34.1722 46.8877 34.4371C47.4175 34.721 47.5878 35.194 47.3797 35.7616C47.3229 35.913 47.2472 36.0644 47.1526 36.2158C43.3305 43.2545 35.8187 47.247 27.8149 46.3387C19.2434 45.3737 12.7534 39.054 10.9937 31.334C8.53389 20.5109 15.2321 10.0474 26.093 7.70109C36.5755 5.43051 47.3797 12.6964 49.1583 23.2545C49.3664 24.5034 49.4421 25.7522 49.5935 26.9632Z" fill="#E9A132"/>
                        <path d="M30.2935 14.3235C30.4449 14.4749 30.8423 14.7208 31.0126 15.0803C31.9586 16.9157 32.8479 18.7511 33.7372 20.6054C33.9454 21.0217 34.1724 21.2298 34.6833 21.3055C36.7268 21.5515 38.7514 21.8353 40.776 22.1948C41.1545 22.2705 41.6653 22.6489 41.7789 22.9895C41.8924 23.2923 41.6464 23.8788 41.3815 24.1437C39.9246 25.6385 38.4298 27.0766 36.9161 28.5146C36.6322 28.7795 36.5187 29.0255 36.5944 29.4417C36.9728 31.5042 37.3512 33.5855 37.6351 35.6669C37.6918 36.0453 37.5026 36.5562 37.2566 36.84C36.9161 37.2374 36.4052 37.1049 35.9511 36.8779C34.1346 35.9129 32.3181 34.9668 30.5206 33.9829C30.1232 33.7558 29.8205 33.7748 29.4042 33.9829C27.6256 34.9479 25.8091 35.894 24.0305 36.84C23.5575 37.086 23.1034 37.2185 22.6303 36.859C22.1951 36.5373 22.1573 36.1021 22.2519 35.5912C22.6303 33.5477 22.9331 31.4853 23.3115 29.4417C23.3872 29.0255 23.2926 28.7795 23.0088 28.5146C21.5329 27.0955 20.057 25.6385 18.5811 24.2194C18.2027 23.8599 17.9189 23.4815 18.127 22.9138C18.3162 22.3651 18.7704 22.2137 19.2812 22.1381C21.2869 21.8542 23.2926 21.5515 25.3172 21.2866C25.7524 21.2298 25.9794 21.0595 26.1497 20.6811C27.039 18.8079 27.9851 16.9536 28.8744 15.0803C29.1772 14.6073 29.4799 14.3235 30.2935 14.3235ZM24.7306 34.0586C25.7335 33.5288 26.6417 33.0368 27.5688 32.5827C30.5395 31.069 29.461 31.0311 32.4695 32.5827C33.3777 33.0557 34.267 33.5288 35.2699 34.0586C34.9861 32.4313 34.7779 30.9365 34.4563 29.4607C34.267 28.5524 34.4373 27.8713 35.1564 27.2658C35.97 26.5846 36.689 25.7899 37.4648 25.052C37.8054 24.7303 38.1649 24.4465 38.6379 24.0302C36.7836 23.7653 35.2131 23.4815 33.6048 23.3112C32.8858 23.2355 32.4506 22.8949 32.1668 22.2516C31.5613 20.946 30.9179 19.6593 30.2746 18.3727C30.1989 18.2213 30.0854 18.0889 29.953 17.8618C29.1961 19.3944 28.4771 20.8136 27.7959 22.2705C27.5121 22.8949 27.0958 23.2166 26.4146 23.2923C24.8063 23.4815 23.2169 23.7464 21.741 23.9545C22.7628 25.052 23.7656 26.2062 24.8631 27.2658C25.5253 27.8902 25.7145 28.5335 25.5442 29.4039C25.2226 30.9176 25.0144 32.4313 24.7306 34.0586Z" fill="#E9A132"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_526_327">
                        <rect width="60" height="72.6585" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                    
                    </div>
                    <div class="cs_funfact_right">
                      <h2 class="cs_funfact_number cs_fs_32 cs_mb_0"><span data-count-to="20" class="odometer"></span>K</h2>
                      <h3 class="cs_funfact_title cs_fs_16 cs_mb_0 fw-normal">Awards Win</h3>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="cs_funfact cs_style_1 d-flex cs_column_gap_20 align-items-center cs_rounded_5">
                    <div class="cs_funfact_icon d-flex align-items-center justify-content-between">
                      <svg width="60" height="61" viewBox="0 0 60 61" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_526_306)">
                        <path d="M4.01404 58.5395C4.01404 55.6327 4.01404 52.8099 4.01404 49.9703C4.01404 48.7605 4.28056 48.4749 5.46323 48.4749C7.81193 48.4749 10.1606 48.4749 12.526 48.4749C13.742 48.4749 14.0085 48.7437 14.0085 50.0039C14.0085 52.6083 14.0085 55.2126 14.0085 57.817C14.0085 58.0354 14.0085 58.2706 14.0085 58.5227C15.3411 58.5227 16.6237 58.5227 18.0063 58.5227C18.0063 58.2874 18.0063 58.0522 18.0063 57.8002C18.0063 52.4906 18.0063 47.1811 18.0063 41.8548C18.0063 40.6954 18.2894 40.4097 19.4388 40.3929C21.8541 40.3929 24.2695 40.3929 26.6848 40.3929C27.6676 40.3929 28.0007 40.729 28.0007 41.7035C28.0007 47.0299 28.0007 52.373 28.0007 57.6994C28.0007 57.9514 28.0007 58.2034 28.0007 58.4891C29.3333 58.4891 30.6326 58.4891 31.9985 58.4891C31.9985 58.2202 31.9985 57.985 31.9985 57.733C31.9985 49.7519 31.9985 41.7707 31.9985 33.7896C31.9985 32.5967 32.2817 32.311 33.4643 32.311C35.863 32.311 38.245 32.311 40.6437 32.311C41.6598 32.311 41.9763 32.6471 41.9763 33.672C41.9763 41.6699 41.9763 49.6678 41.9763 57.6826C41.9763 57.9346 41.9763 58.1866 41.9763 58.4891C43.3089 58.4891 44.5915 58.4891 45.9741 58.4891C45.9741 58.2538 45.9741 58.0018 45.9741 57.7666C45.9741 47.0971 45.9741 36.4276 45.9741 25.7581C45.9741 24.5483 46.2406 24.2627 47.4233 24.2627C49.8219 24.2627 52.2039 24.2627 54.6026 24.2627C55.652 24.2627 55.9685 24.5819 55.9685 25.6573C55.9685 26.8167 55.9685 27.9592 55.9685 29.1186C55.9685 29.8747 55.602 30.2947 54.9691 30.2947C54.3361 30.2947 53.9696 29.8747 53.9696 29.1186C53.9696 28.1944 53.9696 27.2703 53.9696 26.3126C51.9707 26.3126 50.0052 26.3126 48.0063 26.3126C48.0063 37.0325 48.0063 47.7356 48.0063 58.4891C49.9552 58.4891 51.9208 58.4891 53.9696 58.4891C53.9696 58.2538 53.9696 58.0186 53.9696 57.7666C53.9696 49.8695 53.9696 41.9724 53.9696 34.0753C53.9696 33.924 53.9696 33.7896 53.9696 33.6384C53.9696 32.7815 54.3194 32.3278 54.9691 32.3278C55.6187 32.3278 55.9685 32.7815 55.9685 33.6384C55.9685 41.6531 55.9685 49.6846 55.9685 57.6994C55.9685 57.9514 55.9685 58.2034 55.9685 58.5395C56.9679 58.5395 57.9507 58.5227 58.9169 58.5395C59.6831 58.5563 60.1828 59.1444 59.933 59.8165C59.8164 60.1189 59.4499 60.3373 59.1501 60.5222C58.9835 60.623 58.7003 60.5558 58.4671 60.5558C39.4777 60.5558 20.4882 60.5558 1.49877 60.5558C1.33219 60.5558 1.16562 60.5558 0.999046 60.5558C0.366064 60.5222 -0.000398805 60.1693 -0.0170562 59.598C-0.0337136 58.9931 0.349407 58.5731 0.982388 58.5563C1.84857 58.5227 2.73142 58.5563 3.5976 58.5395C3.73086 58.5731 3.83081 58.5563 4.01404 58.5395ZM34.0307 34.3945C34.0307 42.4764 34.0307 50.508 34.0307 58.5059C36.0462 58.5059 37.9952 58.5059 39.9441 58.5059C39.9441 50.4408 39.9441 42.426 39.9441 34.3945C37.9785 34.3945 36.0296 34.3945 34.0307 34.3945ZM20.0385 42.4596C20.0385 47.8532 20.0385 53.1963 20.0385 58.5395C22.0374 58.5395 24.0029 58.5395 25.9518 58.5395C25.9518 53.1627 25.9518 47.8196 25.9518 42.4596C23.9696 42.4596 22.0374 42.4596 20.0385 42.4596ZM11.9763 50.5416C9.96073 50.5416 7.99516 50.5416 6.0629 50.5416C6.0629 53.2299 6.0629 55.8847 6.0629 58.5227C8.06179 58.5227 10.0107 58.5227 11.9763 58.5227C11.9763 55.8679 11.9763 53.2299 11.9763 50.5416Z" fill="#E9A132"/>
                        <path d="M52.6035 6.13288C50.7712 6.13288 49.0055 6.14968 47.2398 6.11608C46.89 6.11608 46.4403 5.93125 46.2237 5.67922C46.0405 5.47759 46.0072 4.92311 46.1571 4.72148C46.357 4.43584 46.8067 4.16701 47.1565 4.1502C48.8056 4.0998 50.438 4.1166 52.0871 4.1166C53.0033 4.1166 53.9194 4.0998 54.8356 4.1166C55.6018 4.1334 55.985 4.50305 55.985 5.29276C55.985 7.84672 55.985 10.4175 55.985 12.9714C55.985 13.7275 55.6185 14.1644 55.0022 14.1644C54.3858 14.1644 54.0027 13.7443 53.9861 12.9882C53.9861 11.4928 53.9861 10.0142 53.9861 8.51881C53.9861 8.31718 53.9861 8.11556 53.9861 7.82992C52.7701 9.20771 51.654 10.5351 50.4714 11.7953C42.9922 19.81 34.5136 26.4637 24.4525 30.8995C18.0061 33.7391 11.2931 35.3186 4.24703 35.369C3.48079 35.369 3.08102 35.1001 3.01439 34.512C2.9311 33.8063 3.34753 33.4199 4.14709 33.3527C6.49578 33.1679 8.84448 33.0838 11.1599 32.7478C17.4897 31.8069 23.3697 29.5385 28.9333 26.4133C37.9117 21.3726 45.5741 14.7189 52.1704 6.78817C52.287 6.63695 52.4036 6.48573 52.5202 6.35131C52.5369 6.31771 52.5535 6.2841 52.6035 6.13288Z" fill="#E9A132"/>
                        <path d="M13.0424 0C19.822 0.117616 25.3855 5.34315 25.9686 12.2321C26.5349 18.7682 21.8542 24.8843 15.3744 26.0772C7.0624 27.6063 -0.41678 20.9693 0.0329702 12.4673C0.149572 10.0814 0.899156 7.8635 2.23175 5.86402C2.51492 5.42716 2.86473 5.14152 3.43108 5.29274C4.14735 5.49437 4.38055 6.21687 3.94746 6.90576C3.11459 8.19954 2.53158 9.59414 2.21509 11.1232C0.982443 17.3064 5.34668 23.4057 11.5766 24.1786C18.3062 25.0187 24.1196 19.81 23.9697 12.9882C23.8697 8.77082 21.9541 5.52797 18.2895 3.49489C14.6082 1.445 10.8769 1.64663 7.22897 3.76373C7.04574 3.86454 6.87917 3.99896 6.69594 4.09977C6.12958 4.41902 5.59655 4.3014 5.28006 3.79733C4.98022 3.31006 5.08017 2.80599 5.59655 2.43634C6.91248 1.51221 8.34502 0.840117 9.89416 0.487268C10.9269 0.268838 11.993 0.151221 13.0424 0Z" fill="#E9A132"/>
                        <path d="M13.9919 6.06553C14.7248 6.5864 15.3911 6.97285 15.9408 7.49373C16.6404 8.16582 16.9569 9.05634 16.9902 10.0477C17.0069 10.7198 16.6571 11.1398 16.0741 11.1734C15.4744 11.2238 15.0746 10.8374 14.9913 10.1317C14.8747 9.00594 14.1751 8.23303 13.1757 8.14902C12.1596 8.08181 11.2934 8.7371 11.0602 9.72844C10.7604 11.0222 11.6765 12.1312 13.109 12.1984C14.9913 12.2824 16.5072 13.5594 16.9069 15.3572C17.34 17.2895 16.3572 19.1714 14.4916 19.9443C14.1085 20.0955 13.9752 20.2803 14.0085 20.6668C14.0419 20.902 14.0252 21.1372 14.0085 21.3557C13.9419 21.9269 13.5421 22.2966 13.0091 22.263C12.4594 22.2294 11.993 21.9269 12.0596 21.3893C12.1762 20.3979 11.7265 20.0115 10.9269 19.5914C9.71094 18.9361 9.11127 17.7768 9.04464 16.3822C9.01133 15.6597 9.36113 15.2396 9.97746 15.206C10.6104 15.1724 10.9769 15.5252 11.0435 16.2477C11.1601 17.4743 11.9763 18.2808 13.109 18.2472C14.1751 18.2136 15.0247 17.3231 15.0413 16.2477C15.058 15.1052 14.2084 14.2651 12.9591 14.2147C10.9269 14.1139 9.4111 12.7697 9.0613 10.8038C8.74481 9.02274 9.76091 7.17448 11.5266 6.45198C11.8931 6.30076 12.0596 6.13274 12.0097 5.72948C11.9763 5.47744 11.9763 5.22541 12.0263 4.97337C12.1096 4.4189 12.4428 4.11646 13.0091 4.11646C13.5588 4.11646 13.9253 4.4189 13.9919 4.97337C14.0252 5.39343 13.9919 5.81349 13.9919 6.06553Z" fill="#E9A132"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_526_306">
                        <rect width="60" height="60.6061" fill="white"/>
                        </clipPath>
                        </defs>
                      </svg>                 
                    </div>
                    <div class="cs_funfact_right">
                      <h2 class="cs_funfact_number cs_fs_32 cs_mb_0"><span data-count-to="500" class="odometer"></span>K</h2>
                      <h3 class="cs_funfact_title cs_fs_16 cs_mb_0 fw-normal">Profit Gain</h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="cs_with_shape_image_box_1 position-relative">
              <img class="position-relative cs_zindex_2" src="assets/img/statistic_img.png" alt="Thumb">
              <img class="cs_shape_1 position-absolute moving_x" src="assets/img/shape_1.png" alt="Shape">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Company Statistic -->
    <!-- Start Contact Section  -->
    <section class="background-filled overflow-hidden cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80" data-src="assets/img/cta_bg.jpeg">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-xl-5 col-lg-6">
            <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_40">
              <div class="cs_section_heading_in">
                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Contact With Us</h3>
                <h2 class="cs_fs_48 cs_fs_lg_36 cs_mb_20 text-white">Let’s Work Together?</h2>
                <p class="text-white m-0">Providing legal advice, contract drafting, compliance assistance, intellectual property protection, and other legal support for businesses.</p>
              </div>
            </div>
            <div class="d-flex align-items-center cs_mb_30">
              <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M31.6128 24.7786C30.7939 23.9259 29.8062 23.47 28.7593 23.47C27.7209 23.47 26.7247 23.9175 25.8721 24.7701L23.2043 27.4295C22.9848 27.3113 22.7653 27.2015 22.5543 27.0918C22.2503 26.9398 21.9633 26.7963 21.7185 26.6443C19.2196 25.0572 16.9486 22.9888 14.7705 20.3126C13.7152 18.9787 13.006 17.8559 12.4911 16.7162C13.1833 16.083 13.8249 15.4245 14.4497 14.7914C14.6861 14.555 14.9224 14.3102 15.1588 14.0738C16.9317 12.3009 16.9317 10.0046 15.1588 8.23172L12.8541 5.92698C12.5924 5.66527 12.3222 5.39512 12.0689 5.12497C11.5624 4.60155 11.0305 4.06124 10.4818 3.5547C9.6629 2.74425 8.6836 2.31369 7.65364 2.31369C6.62368 2.31369 5.62749 2.74425 4.78327 3.5547C4.77482 3.56315 4.77482 3.56315 4.76638 3.57159L1.89601 6.46729C0.815398 7.5479 0.199112 8.86489 0.0640356 10.3929C-0.138579 12.8581 0.587457 15.1544 1.14465 16.6571C2.5123 20.3464 4.55533 23.7655 7.60299 27.4295C11.3007 31.8448 15.7498 35.3314 20.832 37.7881C22.7738 38.7083 25.3655 39.7974 28.2612 39.9831C28.4385 39.9916 28.6242 40 28.7931 40C30.7433 40 32.3811 39.2993 33.6643 37.9063C33.6727 37.8894 33.6896 37.881 33.6981 37.8641C34.1371 37.3322 34.6436 36.851 35.1755 36.3361C35.5385 35.9899 35.9099 35.6269 36.2729 35.247C37.1087 34.3774 37.5477 33.3644 37.5477 32.326C37.5477 31.2791 37.1003 30.2745 36.2476 29.4303L31.6128 24.7786ZM34.6351 33.6683C34.6267 33.6683 34.6267 33.6767 34.6351 33.6683C34.3059 34.0229 33.9682 34.3437 33.6052 34.6983C33.0564 35.2217 32.4993 35.7704 31.9758 36.3867C31.1232 37.2985 30.1185 37.729 28.8015 37.729C28.6749 37.729 28.5398 37.729 28.4132 37.7206C25.9058 37.5602 23.5758 36.5809 21.8282 35.7451C17.0499 33.4319 12.8541 30.1479 9.36742 25.9858C6.48861 22.5161 4.56377 19.308 3.28898 15.8635C2.50385 13.7614 2.21682 12.1236 2.34345 10.5787C2.42787 9.59093 2.80777 8.77203 3.50848 8.07132L6.3873 5.19251C6.80097 4.80416 7.23997 4.5931 7.67052 4.5931C8.20239 4.5931 8.63294 4.91391 8.9031 5.18406C8.91154 5.19251 8.91998 5.20095 8.92842 5.20939C9.4434 5.6906 9.93305 6.18869 10.448 6.72056C10.7097 6.99071 10.9799 7.26086 11.25 7.53946L13.5548 9.8442C14.4497 10.7391 14.4497 11.5664 13.5548 12.4613C13.31 12.7061 13.0736 12.951 12.8288 13.1873C12.1196 13.9134 11.4442 14.5888 10.7097 15.2473C10.6929 15.2641 10.676 15.2726 10.6675 15.2895C9.9415 16.0155 10.0766 16.7247 10.2285 17.2059C10.237 17.2312 10.2454 17.2565 10.2539 17.2818C10.8533 18.7339 11.6975 20.1016 12.9807 21.7309L12.9892 21.7394C15.3192 24.6097 17.7759 26.8469 20.4859 28.5607C20.832 28.7802 21.1866 28.9575 21.5243 29.1264C21.8282 29.2783 22.1153 29.4218 22.3601 29.5738C22.3938 29.5907 22.4276 29.616 22.4614 29.6329C22.7484 29.7764 23.0186 29.8439 23.2972 29.8439C23.9979 29.8439 24.4369 29.4049 24.5804 29.2614L27.4677 26.3742C27.7547 26.0871 28.2106 25.741 28.7424 25.741C29.2659 25.741 29.6964 26.0702 29.9581 26.3573C29.9666 26.3657 29.9666 26.3657 29.975 26.3742L34.6267 31.0259C35.4963 31.887 35.4963 32.7734 34.6351 33.6683Z" fill="white"/>
                  <path d="M21.6168 9.51496C23.8287 9.88642 25.838 10.9333 27.442 12.5373C29.046 14.1413 30.0844 16.1506 30.4643 18.3625C30.5572 18.9197 31.0384 19.308 31.5872 19.308C31.6547 19.308 31.7138 19.2996 31.7813 19.2911C32.4061 19.1898 32.8197 18.5989 32.7184 17.9741C32.2625 15.2979 30.9962 12.8581 29.0629 10.9248C27.1296 8.99154 24.6898 7.7252 22.0136 7.26932C21.3889 7.16801 20.8064 7.58168 20.6966 8.19797C20.5869 8.81425 20.9921 9.41365 21.6168 9.51496Z" fill="white"/>
                  <path d="M39.9542 17.6449C39.2028 13.238 37.126 9.22793 33.9349 6.03675C30.7437 2.84557 26.7336 0.768768 22.3267 0.017406C21.7104 -0.0923436 21.1279 0.32977 21.0182 0.946056C20.9169 1.57078 21.3305 2.1533 21.9553 2.26305C25.8894 2.92999 29.4773 4.79573 32.3308 7.64078C35.1843 10.4943 37.0416 14.0822 37.7086 18.0163C37.8014 18.5735 38.2826 18.9619 38.8314 18.9619C38.8989 18.9619 38.958 18.9534 39.0256 18.945C39.6418 18.8521 40.0639 18.2612 39.9542 17.6449Z" fill="white"/>
                </svg>                  
              </div>
              <div>
                <p class="text-accent cs_mb_7">Have Any Question?</p>
                <h2 class="text-white m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base">+ 070 4531 9507 </h2>
              </div>
            </div>
            <div class="d-flex align-items-center cs_mb_30">
              <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M34.1388 5H5.86125C4.63868 5.00132 3.46656 5.48758 2.60207 6.35207C1.73758 7.21656 1.25132 8.38868 1.25 9.61125V30.3888C1.25132 31.6113 1.73758 32.7834 2.60207 33.6479C3.46656 34.5124 4.63868 34.9987 5.86125 35H34.1388C35.3613 34.9987 36.5334 34.5124 37.3979 33.6479C38.2624 32.7834 38.7487 31.6113 38.75 30.3888V9.61125C38.7487 8.38868 38.2624 7.21656 37.3979 6.35207C36.5334 5.48758 35.3613 5.00132 34.1388 5ZM5.86125 7.5H34.1388C34.6985 7.50066 35.2351 7.72331 35.6309 8.1191C36.0267 8.51489 36.2493 9.05151 36.25 9.61125V10.5675L20 21.0138L3.75 10.5675V9.61125C3.75066 9.05151 3.97331 8.51489 4.3691 8.1191C4.76489 7.72331 5.30151 7.50066 5.86125 7.5ZM34.1388 32.5H5.86125C5.30151 32.4993 4.76489 32.2767 4.3691 31.8809C3.97331 31.4851 3.75066 30.9485 3.75 30.3888V13.54L19.3237 23.5512C19.5254 23.681 19.7602 23.75 20 23.75C20.2398 23.75 20.4746 23.681 20.6763 23.5512L36.25 13.54V30.3888C36.2493 30.9485 36.0267 31.4851 35.6309 31.8809C35.2351 32.2767 34.6985 32.4993 34.1388 32.5Z" fill="white"/>
                </svg>               
              </div>
              <div>
                <p class="text-accent cs_mb_7">Send Email</p>
                <h2 class="text-white m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base">pixcelsthemes@gmail.com</h2>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center justify-content-center cs_height_90 cs_width_90 cs_height_lg_80 cs_width_lg-80 cs_rounded_10 flex-none cs_mr_20 bg-accent">
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.0002 0C12.0123 0 5.51367 6.49859 5.51367 14.4864C5.51367 24.3995 18.4777 38.9526 19.0296 39.5673C19.548 40.1447 20.4532 40.1437 20.9707 39.5673C21.5227 38.9526 34.4866 24.3995 34.4866 14.4864C34.4865 6.49859 27.988 0 20.0002 0ZM20.0002 36.6976C15.6371 31.5149 8.12242 21.29 8.12242 14.4866C8.12242 7.93703 13.4507 2.60875 20.0002 2.60875C26.5496 2.60875 31.8779 7.93703 31.8779 14.4865C31.8778 21.2902 24.3643 31.5133 20.0002 36.6976Z" fill="white"/>
                  <path d="M20.0004 7.19797C15.9814 7.19797 12.7119 10.4676 12.7119 14.4865C12.7119 18.5054 15.9815 21.775 20.0004 21.775C24.0192 21.775 27.2887 18.5054 27.2887 14.4865C27.2887 10.4676 24.0192 7.19797 20.0004 7.19797ZM20.0004 19.1662C17.4199 19.1662 15.3207 17.067 15.3207 14.4865C15.3207 11.906 17.42 9.80672 20.0004 9.80672C22.5807 9.80672 24.68 11.906 24.68 14.4865C24.68 17.067 22.5807 19.1662 20.0004 19.1662Z" fill="white"/>
                </svg>                              
              </div>
              <div>
                <p class="text-accent cs_mb_7">Address</p>
                <h2 class="text-white m-0 fw-medium cs_fs_22 cs_fs_lg_18 cs_lh_base">Yewtree Cottage, Kings Pyon, <br>HR4 8PZ</h2>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-lg-6 offset-xl-1 cs_mt_lg_55">
            <div class="cs_contact_wrap position-relative">
              <form action="#" class="cs_contact_form bg-white cs_pt_64 cs_pl_80 cs_pr_80 cs_pb_80 cs_pl_lg_30 cs_pr_lg_30 position-relative cs_rounded_20" data-src="assets/img/contact_bg_pattern.svg">
                <div class="cs_section_heading cs_style_1 d-flex align-items-center text-center cs_mb_30">
                  <div class="cs_section_heading_in">
                    <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Contact Us</h2>
                  </div>
                </div>
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15 bg-gray" type="text" placeholder="Your Name">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15 bg-gray" type="email" placeholder="Your Email">
                <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_30 bg-gray" placeholder="Message here ..." cols="30" rows="4"></textarea>
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Submit Now</span></button>
              </form>
              <div class="cs_contact_image d-none d-xl-block wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.4s"><img src="assets/img/contact_img_1.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section  -->
    <!-- Start Blog Section -->
    <section class="cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80">
      <div class="container">
        <div class="cs_service_slider cs_gap_24">
          <div class="cs_section_heading cs_style_1 d-flex align-items-center cs_mb_60 cs_mb_lg_40 cs_column_gap_15 cs_row_gap_15">
            <div class="cs_section_heading_in">
              <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">Find The Blogs</h3>
              <h2 class="cs_fs_48 cs_fs_lg_36 m-0">Find Out Latest News <br>And Articles</h2>
            </div>
            <div class="cs_section_heading_right">
              <div class="d-flex cs_column_gap_15 justify-content-lg-end justify-content-start">
                <div class="cs_slider_prev filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.461063 4.4077H19.538C19.7649 4.4077 19.9482 4.22437 19.9482 3.99745C19.9482 3.77052 19.7649 3.58719 19.538 3.58719H1.45209L3.94183 1.09745C4.10209 0.937189 4.10209 0.676933 3.94183 0.516677C3.78158 0.35642 3.52132 0.35642 3.36106 0.516677L0.170038 3.7077C0.0520878 3.82565 0.0174732 4.00129 0.0815754 4.15514C0.145678 4.3077 0.295677 4.4077 0.461063 4.4077Z" fill="black"/>
                    <path d="M3.65549 7.60253C3.76062 7.60253 3.86575 7.56278 3.94524 7.48202C4.10549 7.32176 4.10549 7.0615 3.94524 6.90125L0.750365 3.70637C0.590108 3.54612 0.329853 3.54612 0.169597 3.70637C0.00934029 3.86663 0.00934029 4.12689 0.169597 4.28714L3.36447 7.48202C3.44524 7.56278 3.55036 7.60253 3.65549 7.60253Z" fill="black"/>
                  </svg>             
                </div>
                <div class="cs_slider_next filter cs_height_45 cs_width_45 bg-white rounded-circle d-flex align-items-center justify-content-center bg-accent-hover cs_transition_4">
                  <svg width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.5389 4.4077H0.462014C0.235091 4.4077 0.0517578 4.22437 0.0517578 3.99745C0.0517578 3.77052 0.235091 3.58719 0.462014 3.58719H18.5479L16.0582 1.09745C15.8979 0.937189 15.8979 0.676933 16.0582 0.516677C16.2184 0.35642 16.4787 0.35642 16.6389 0.516677L19.83 3.7077C19.9479 3.82565 19.9825 4.00129 19.9184 4.15514C19.8543 4.3077 19.7043 4.4077 19.5389 4.4077Z" fill="#18191D"/>
                    <path d="M16.3445 7.60253C16.2394 7.60253 16.1342 7.56278 16.0548 7.48202C15.8945 7.32176 15.8945 7.0615 16.0548 6.90125L19.2496 3.70637C19.4099 3.54612 19.6701 3.54612 19.8304 3.70637C19.9907 3.86663 19.9907 4.12689 19.8304 4.28714L16.6355 7.48202C16.5548 7.56278 16.4496 7.60253 16.3445 7.60253Z" fill="#18191D"/>
                  </svg>          
                </div>
              </div>
            </div>
          </div>
          <div class="cs_slider_activate">
            <div class="cs_slide">
              <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
                <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                  <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_1.jpeg"></div>
                </a>
                <div class="cs_post_in">
                  <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                    <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                      <li>
                        <span><i class="fa-solid fa-user"></i> By </span> 
                        <a href="">admin</a>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-comment-dots"></i></span> 
                        <a href="">3 comments</a>
                      </li>
                    </ul>
                    <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                    <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                    <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                      <span class="cs_post_btn-text">Read More</span>
                      <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                      </svg>                                  
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
                <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                  <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_2.jpeg"></div>
                </a>
                <div class="cs_post_in">
                  <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                    <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                      <li>
                        <span><i class="fa-solid fa-user"></i> By </span> 
                        <a href="">admin</a>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-comment-dots"></i></span> 
                        <a href="">3 comments</a>
                      </li>
                    </ul>
                    <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                    <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                    <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                      <span class="cs_post_btn-text">Read More</span>
                      <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                      </svg>                                  
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
                <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                  <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_3.jpeg"></div>
                </a>
                <div class="cs_post_in">
                  <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                    <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                      <li>
                        <span><i class="fa-solid fa-user"></i> By </span> 
                        <a href="">admin</a>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-comment-dots"></i></span> 
                        <a href="">3 comments</a>
                      </li>
                    </ul>
                    <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                    <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                    <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                      <span class="cs_post_btn-text">Read More</span>
                      <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                      </svg>                                  
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
                <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                  <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_12.jpeg"></div>
                </a>
                <div class="cs_post_in">
                  <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                    <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                      <li>
                        <span><i class="fa-solid fa-user"></i> By </span> 
                        <a href="">admin</a>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-comment-dots"></i></span> 
                        <a href="">3 comments</a>
                      </li>
                    </ul>
                    <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                    <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                    <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                      <span class="cs_post_btn-text">Read More</span>
                      <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                      </svg>                                  
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
                <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                  <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_1.jpeg"></div>
                </a>
                <div class="cs_post_in">
                  <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                    <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                      <li>
                        <span><i class="fa-solid fa-user"></i> By </span> 
                        <a href="">admin</a>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-comment-dots"></i></span> 
                        <a href="">3 comments</a>
                      </li>
                    </ul>
                    <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                    <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                    <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                      <span class="cs_post_btn-text">Read More</span>
                      <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                      </svg>                                  
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
                <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                  <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_2.jpeg"></div>
                </a>
                <div class="cs_post_in">
                  <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                    <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                      <li>
                        <span><i class="fa-solid fa-user"></i> By </span> 
                        <a href="">admin</a>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-comment-dots"></i></span> 
                        <a href="">3 comments</a>
                      </li>
                    </ul>
                    <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                    <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                    <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                      <span class="cs_post_btn-text">Read More</span>
                      <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                      </svg>                                  
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
                <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                  <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_3.jpeg"></div>
                </a>
                <div class="cs_post_in">
                  <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                    <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                      <li>
                        <span><i class="fa-solid fa-user"></i> By </span> 
                        <a href="">admin</a>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-comment-dots"></i></span> 
                        <a href="">3 comments</a>
                      </li>
                    </ul>
                    <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                    <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                    <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                      <span class="cs_post_btn-text">Read More</span>
                      <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                      </svg>                                  
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_post cs_style_1 bg-white shadow-sm cs_mb_30">
                <a href="{{ url('blog-details') }}" class="cs_post_thumb d-block position-relative overflow-hidden">
                  <div class="cs_post_thumb-in cs_transition_5 background-filled h-100 w-100" data-src="assets/img/post_12.jpeg"></div>
                </a>
                <div class="cs_post_in">
                  <div class="cs_post_info cs_pl_33 cs_pr_33 cs_pt_40 cs_pb_35">
                    <ul class="cs_post_meta d-flex flex-wrap cs_fs_12 p-0 cs_mb_16">
                      <li>
                        <span><i class="fa-solid fa-user"></i> By </span> 
                        <a href="">admin</a>
                      </li>
                      <li>
                        <span><i class="fa-solid fa-comment-dots"></i></span> 
                        <a href="">3 comments</a>
                      </li>
                    </ul>
                    <h2 class="cs_post_title cs_lh_base cs_fs_20 cs_fs_lg_18 cs_mb_10"><a href="{{ url('blog-details') }}">What services does your business provide?</a></h2>
                    <div class="cs_post_subtitle cs_mb_25">We provide a range of digital marketing lutions including website design.</div>
                    <a href="{{ url('blog-details') }}" class="cs_post_btn_2 d-inline-flex justify-content-between align-items-center cs_column_gap_10 ">
                      <span class="cs_post_btn-text">Read More</span>
                      <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.9505 5.44725C14.9547 5.44105 14.9583 5.43463 14.9621 5.42827C14.9656 5.42241 14.9692 5.41669 14.9725 5.41066C14.9759 5.40418 14.9789 5.39751 14.982 5.3909C14.985 5.38461 14.9881 5.37844 14.9908 5.372C14.9934 5.36559 14.9956 5.35902 14.9979 5.3525C15.0004 5.34559 15.003 5.33877 15.0052 5.3317C15.0071 5.32519 15.0086 5.31857 15.0102 5.312C15.0121 5.3048 15.0141 5.29767 15.0155 5.29034C15.017 5.28274 15.0179 5.27507 15.019 5.26744C15.02 5.26099 15.0212 5.25466 15.0218 5.24814C15.0232 5.23406 15.0239 5.21991 15.024 5.20576C15.024 5.20554 15.024 5.20532 15.024 5.20512C15.024 5.20492 15.024 5.20469 15.024 5.20448C15.0239 5.19035 15.0232 5.17621 15.0218 5.1621C15.0212 5.15556 15.02 5.14925 15.019 5.1428C15.0179 5.13517 15.017 5.12749 15.0155 5.1199C15.0141 5.11256 15.0121 5.10544 15.0102 5.09824C15.0086 5.09167 15.0071 5.08505 15.0052 5.07854C15.003 5.07149 15.0004 5.06465 14.9979 5.05774C14.9956 5.05122 14.9934 5.04467 14.9908 5.03824C14.9881 5.0318 14.985 5.02562 14.982 5.01934C14.9789 5.01272 14.9759 5.00606 14.9725 4.99958C14.9692 4.99355 14.9656 4.98781 14.9621 4.98197C14.9583 4.97561 14.9547 4.96918 14.9505 4.96299C14.9462 4.9565 14.9414 4.9504 14.9367 4.94415C14.9328 4.93902 14.9293 4.93373 14.9252 4.92872C14.916 4.91758 14.9064 4.90689 14.8962 4.89672L10.887 0.88748C10.7167 0.717156 10.4405 0.717155 10.2702 0.88748C10.0999 1.0578 10.0999 1.33395 10.2702 1.50427L13.5349 4.76894L1.01817 4.76893C0.777297 4.76893 0.582021 4.96421 0.582021 5.20508C0.582021 5.44595 0.777297 5.64123 1.01817 5.64123L13.5349 5.64122L10.2702 8.9059C10.0999 9.07622 10.0999 9.35236 10.2702 9.52269C10.4405 9.69301 10.7167 9.69303 10.887 9.5227L14.8962 5.51349C14.9064 5.50333 14.916 5.49264 14.9251 5.48153C14.9292 5.47652 14.9328 5.47125 14.9367 5.46609C14.9414 5.45984 14.9462 5.45374 14.9505 5.44725Z" fill="currentColor"/>
                      </svg>                                  
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blog Section -->
    @endsection