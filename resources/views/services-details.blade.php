@extends('layout.layout')

@section('content')
<x-header pageTitle="Accounting and Bookkeeping" breadcrumbItem="Accounting and Bookkeeping" />

    <!-- Start Service Details Section -->
    <section class="cs_pt_140 cs_pt_lg_80 cs_pb_115 cs_pb_lg_55">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 cs_mb_lg_60">
            <div class="cs_service_list cs_mb_40">
              <h2 class="cs_fs_20 text-white text-uppercase bg-accent cs_pl_30 cs_pr_30 cs_pt_23 cs_pb_23 m-0">All Services</h2>
              <ul class="m-0 cs_pl_30 cs_pr_30 cs_pt_30 cs_pb_30">
                <li><a href="{{ url('services-details') }}" class="active">Accounting and Bookkeeping <i class="fa-solid fa-arrow-right-long"></i></a></li>
                <li><a href="{{ url('services-details') }}">Marketing and Advertising <i class="fa-solid fa-arrow-right-long"></i></a></li>
                <li><a href="{{ url('services-details') }}">IT Support and Consulting <i class="fa-solid fa-arrow-right-long"></i></a></li>
                <li><a href="{{ url('services-details') }}">Human Resources <i class="fa-solid fa-arrow-right-long"></i></a></li>
                <li><a href="{{ url('services-details') }}">Web Development <i class="fa-solid fa-arrow-right-long"></i></a></li>
                <li><a href="{{ url('services-details') }}">SEO & Content Writing <i class="fa-solid fa-arrow-right-long"></i></a></li>
              </ul>
            </div>
            <div class="cs_quick_contact_card background-filled cs_mb_40 text-center" data-src="assets/img/service-list-card.jpeg">
              <div class="cs_quick_contact_card_in">
                <div class="cs_quick_contact_card_icon cs_height_100 cs_width_100 bg-accent d-flex align-items-center justify-content-center rounded-circle cs_mb_24">
                  <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_81_8759)">
                    <path d="M28.4609 0C27.9215 0 27.4844 0.437164 27.4844 0.976561C27.4844 1.51596 27.9215 1.95312 28.4609 1.95312C39.2607 1.95312 48.0467 10.7395 48.0467 21.5389C48.0467 22.0783 48.4843 22.5155 49.0233 22.5155C49.5627 22.5155 49.9998 22.0783 49.9998 21.5389C49.9998 9.66261 40.3376 0 28.4609 0Z" fill="white"/>
                    <path d="M43.1486 22.5157C43.688 22.5157 44.1252 22.0782 44.1252 21.5392C44.1252 12.9016 37.0982 5.87451 28.4609 5.87451C27.9215 5.87451 27.4844 6.31206 27.4844 6.85107C27.4844 7.39047 27.9215 7.82763 28.4609 7.82763C36.0213 7.82763 42.1721 13.9784 42.1721 21.5392C42.1721 22.0782 42.6092 22.5157 43.1486 22.5157Z" fill="white"/>
                    <path d="M36.2963 21.5395C36.2963 22.0785 36.7335 22.516 37.2729 22.516C37.8123 22.516 38.2494 22.0785 38.2494 21.5395C38.2494 16.1421 33.8583 11.751 28.4609 11.751C27.9215 11.751 27.4844 12.1881 27.4844 12.7272C27.4844 13.2666 27.9215 13.7037 28.4609 13.7037C32.7815 13.7037 36.2963 17.2186 36.2963 21.5395Z" fill="white"/>
                    <path d="M27.4844 18.602C27.4844 19.1411 27.9215 19.5782 28.4609 19.5782C29.542 19.5782 30.4217 20.4579 30.4217 21.5394C30.4217 22.0784 30.8589 22.5159 31.3982 22.5159C31.9373 22.5159 32.3748 22.0784 32.3748 21.5394C32.3748 19.381 30.6189 17.6255 28.4609 17.6255C27.9215 17.6255 27.4844 18.0627 27.4844 18.602Z" fill="white"/>
                    <path d="M18.3047 31.707C18.3047 32.2464 17.8675 32.6836 17.3281 32.6836C16.7887 32.6836 16.3516 32.2464 16.3516 31.707C16.3516 31.168 16.7887 30.7305 17.3281 30.7305C17.8675 30.7305 18.3047 31.168 18.3047 31.707Z" fill="white"/>
                    <path d="M26.7609 48.8141C31.2077 50.9935 36.5574 50.0867 40.0738 46.5703L42.0929 44.5512C43.1893 43.456 43.1897 41.6818 42.0933 40.5858L34.2915 32.7848C33.1971 31.6888 31.4225 31.6873 30.3269 32.7844L27.0119 36.0998C26.3627 36.749 25.3606 36.8814 24.6297 36.4149C23.438 35.6531 22.2787 34.8131 21.1842 33.9181C20.7665 33.5767 20.1516 33.6385 19.8102 34.0558C19.4688 34.4736 19.5306 35.0889 19.9479 35.4299C21.1011 36.3729 22.3222 37.2579 23.5783 38.0605C25.0756 39.0169 27.1004 38.7731 28.3929 37.4807L31.7086 34.1649C32.0401 33.8331 32.5772 33.8323 32.9102 34.1653L40.7124 41.9668C41.0447 42.2994 41.0454 42.8373 40.7124 43.1695L38.6929 45.1894C35.7636 48.1187 31.3142 48.8706 27.6204 47.0605C14.0885 40.4249 6.72617 29.9032 2.93284 22.2448C1.11819 18.5823 1.8716 14.1496 4.80776 11.2142L6.78301 9.23937C7.11413 8.90749 7.65162 8.90635 7.98426 9.23975L15.7872 17.0423C16.1176 17.3723 16.121 17.9102 15.7864 18.2439L12.4715 21.5593C11.1791 22.8517 10.9353 24.8766 11.8916 26.3742C12.4551 27.2558 13.0624 28.1255 13.6971 28.959C14.0237 29.3882 14.6363 29.471 15.0655 29.1444C15.4946 28.8179 15.5778 28.2053 15.2509 27.7757C14.6489 26.9849 14.0721 26.1594 13.5373 25.3229C13.0708 24.5916 13.2031 23.5895 13.8524 22.9402L17.167 19.6256C18.2629 18.5312 18.2641 16.7562 17.1677 15.661L9.36556 7.85921C8.2715 6.76325 6.49653 6.76173 5.40133 7.85883L3.42685 9.83332C-0.102507 13.3615 -1.0043 18.6979 1.18266 23.1119C5.11065 31.0415 12.7362 41.937 26.7609 48.8141Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_81_8759">
                    <rect width="50" height="50" fill="white"/>
                    </clipPath>
                    </defs>
                  </svg>                  
                </div>
                <h2 class="cs_fs_48 cs_fs_lg_36 text-white cs_mb_40">Have Any Query Feel Free Contact</h2>
                <a href="{{ url('contact') }}" class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Contact Us</span></a>
              </div>
            </div>
            <div class="bg-gray cs_pl_30 cs_pr_30 cs_pt_55 cs_pb_60">
              <h2 class="cs_fs_26 cs_mb_25">Quick Contact</h2>
              <form action="#">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15 bg-white" type="text" placeholder="Your Name">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_15 bg-white" type="text" placeholder="Your Email">
                <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_25 bg-white resize-none" placeholder="Message here ..." cols="5" rows="6"></textarea>
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden w-100"><span>Send Message</span></button>
              </form>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7">
            <img src="assets/img/service-details-img-1.jpeg" alt="Thumb" class="cs_mb_40">
            <h2 class="cs_fs_26 cs_mb_20">Business & finance</h2>
            <p class="cs_mb_40">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
            <blockquote class="cs_blockquote fw-semibold cs_pt_35 cs_pb_35 cs_pl_40 cs_pr_40 bg-white shadow-lg cs_rounded_5 cs_mb_40">“ Lorem Ipsum is simply free text not dummy available typesetting industry been the industry standard Lorem ipsum is simply free text ”</blockquote>
            <p class="cs_mb_40">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,</p>
            <div class="row cs_mb_30">
              <div class="col-xl-6">
                <img src="assets/img/service-details-img-2.jpeg" alt="" class="cs_rounded_15 cs_mb_30">
              </div>
              <div class="col-xl-6">
                <h3 class="cs_fs_26 cs_mb_15">Our benefits</h3>
                <p class="cs_mb_40">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>
                <div class="d-flex align-items-center cs_mb_30">
                  <div class="d-flex align-items-center justify-content-center cs_height_70 cs_width_70 cs_rounded_10 flex-none cs_mr_15 bg-primary">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.44509 10.4345C8.69236 10.65 9.06744 10.62 9.27783 10.3706L10.7042 8.6801C10.9129 8.43275 10.8816 8.06315 10.6342 7.8544C10.3868 7.64572 10.0172 7.67713 9.80853 7.9244L8.76603 9.15994L8.40056 8.84158C8.15658 8.62893 7.7865 8.65432 7.57384 8.89846C7.36127 9.14244 7.38673 9.51252 7.6308 9.7251L8.44509 10.4345Z" fill="white"/>
                      <path d="M10.6342 18.7069C10.3868 18.4983 10.0172 18.5297 9.80853 18.7769L8.76603 20.0125L8.40056 19.6941C8.15658 19.4815 7.7865 19.5069 7.57384 19.751C7.36127 19.995 7.38673 20.3651 7.6308 20.5776L8.44509 21.2871C8.69236 21.5026 9.06744 21.4726 9.27783 21.2233L10.7042 19.5327C10.9129 19.2854 10.8815 18.9157 10.6342 18.7069Z" fill="white"/>
                      <path d="M10.6342 29.559C10.3868 29.3503 10.0172 29.3817 9.80853 29.629L8.76603 30.8645L8.40056 30.5462C8.15658 30.3335 7.7865 30.3589 7.57384 30.603C7.36127 30.847 7.38673 31.2171 7.6308 31.4297L8.44509 32.1391C8.69236 32.3547 9.06744 32.3247 9.27783 32.0753L10.7042 30.3848C10.9129 30.1374 10.8815 29.7677 10.6342 29.559Z" fill="white"/>
                      <path d="M16.2129 8.30664H28.5983C28.922 8.30664 29.1842 8.04438 29.1842 7.7207C29.1842 7.39703 28.922 7.13477 28.5983 7.13477H16.2129C15.8892 7.13477 15.627 7.39703 15.627 7.7207C15.627 8.04438 15.8892 8.30664 16.2129 8.30664Z" fill="white"/>
                      <path d="M16.2129 11.1606H28.5983C28.922 11.1606 29.1842 10.8984 29.1842 10.5747C29.1842 10.251 28.922 9.98877 28.5983 9.98877H16.2129C15.8892 9.98877 15.627 10.251 15.627 10.5747C15.627 10.8984 15.8892 11.1606 16.2129 11.1606Z" fill="white"/>
                      <path d="M11.7175 4.84375H6.55492C5.60492 4.84375 4.83203 5.61664 4.83203 6.56664V7.72094C4.83203 8.04461 5.0943 8.30688 5.41797 8.30688C5.74164 8.30688 6.00391 8.04461 6.00391 7.72094V6.56664C6.00391 6.26281 6.25109 6.01563 6.55492 6.01563H11.7175C12.0213 6.01563 12.2684 6.26281 12.2684 6.56664V11.7292C12.2684 12.033 12.0213 12.2802 11.7175 12.2802H6.55492C6.25109 12.2802 6.00391 12.033 6.00391 11.7292V10.5174C6.00391 10.1938 5.74164 9.93149 5.41797 9.93149C5.0943 9.93149 4.83203 10.1938 4.83203 10.5174V11.7292C4.83203 12.6791 5.60492 13.452 6.55492 13.452H11.7175C12.6674 13.452 13.4403 12.6791 13.4403 11.7292V6.56664C13.4402 5.61664 12.6674 4.84375 11.7175 4.84375Z" fill="white"/>
                      <path d="M11.7175 15.6958H6.55492C5.60492 15.6958 4.83203 16.4687 4.83203 17.4187V22.5813C4.83203 23.5312 5.60492 24.3041 6.55492 24.3041H11.7175C12.6674 24.3041 13.4403 23.5312 13.4403 22.5813V17.4187C13.4402 16.4687 12.6674 15.6958 11.7175 15.6958ZM12.2684 22.5813C12.2684 22.8851 12.0212 23.1322 11.7174 23.1322H6.55492C6.25109 23.1322 6.00391 22.8851 6.00391 22.5813V17.4187C6.00391 17.1149 6.25109 16.8677 6.55492 16.8677H11.7175C12.0213 16.8677 12.2684 17.1149 12.2684 17.4187L12.2684 22.5813Z" fill="white"/>
                      <path d="M11.7175 26.5483H6.55492C5.60492 26.5483 4.83203 27.3212 4.83203 28.2712V33.4338C4.83203 34.3837 5.60492 35.1566 6.55492 35.1566H11.7175C12.6674 35.1566 13.4403 34.3837 13.4403 33.4338V28.2712C13.4402 27.3212 12.6674 26.5483 11.7175 26.5483ZM12.2684 33.4338C12.2684 33.7376 12.0212 33.9847 11.7174 33.9847H6.55492C6.25109 33.9847 6.00391 33.7376 6.00391 33.4338V28.2712C6.00391 27.9674 6.25109 27.7202 6.55492 27.7202H11.7175C12.0213 27.7202 12.2684 27.9674 12.2684 28.2712L12.2684 33.4338Z" fill="white"/>
                      <path d="M37.0414 5.19195C35.5098 4.52484 33.721 5.22773 33.0537 6.7593L32.8784 7.16164V4.14C32.8784 1.85719 31.0212 0 28.7384 0H5.27867C2.99586 0 1.13867 1.85719 1.13867 4.14V35.86C1.13867 38.1428 2.99586 40 5.27867 40H28.7384C31.0212 40 32.8784 38.1428 32.8784 35.86V22.3316C33.1787 21.6423 38.2757 9.94398 38.6087 9.17969C39.2777 7.64445 38.5766 5.86086 37.0414 5.19195ZM22.1896 31.6934H16.213C15.8894 31.6934 15.6271 31.9557 15.6271 32.2794C15.6271 32.603 15.8894 32.8653 16.213 32.8653H21.6816C21.4048 33.5308 21.2655 34.2334 21.2702 34.9561V34.9562L21.2962 38.8281H5.27867C3.64203 38.8281 2.31055 37.4966 2.31055 35.86V4.14C2.31055 2.50336 3.64203 1.17188 5.27867 1.17188H28.7384C30.375 1.17188 31.7065 2.50336 31.7065 4.14V9.85125C30.9661 11.5505 28.8855 16.3256 28.1616 17.9872H16.2131C15.8895 17.9872 15.6272 18.2495 15.6272 18.5731C15.6272 18.8968 15.8895 19.1591 16.2131 19.1591H27.651L26.9182 20.841H16.2131C15.8895 20.841 15.6272 21.1033 15.6272 21.427C15.6272 21.7506 15.8895 22.0129 16.2131 22.0129H26.4076L23.4331 28.8396H16.2131C15.8895 28.8396 15.6272 29.1019 15.6272 29.4255C15.6272 29.7492 15.8895 30.0115 16.2131 30.0115H22.9225L22.1896 31.6934ZM22.4421 34.9483C22.4409 34.7615 22.4532 34.5766 22.4762 34.3937C22.9887 34.617 22.2743 34.3057 25.572 35.7425C25.4537 35.8839 25.3267 36.0188 25.1891 36.1451L22.4669 38.642L22.4421 34.9483ZM31.7065 35.86C31.7065 37.4966 30.375 38.8281 28.7384 38.8281H23.9977L25.9812 37.0088C26.5362 36.4996 26.9702 35.8914 27.2712 35.2008L31.7065 25.0211V35.86ZM26.1968 34.7327C26.1963 34.7337 26.1958 34.7347 26.1953 34.7358L25.0294 34.2278L27.7874 27.8978C27.9166 27.6011 27.7809 27.2559 27.4843 27.1266C27.1875 26.9974 26.8423 27.1331 26.713 27.4297L23.955 33.7597L22.7891 33.2517C22.7896 33.2507 22.7899 33.2496 22.7904 33.2486L31.7481 12.6898L32.9141 13.1977L27.8071 24.9187C27.6779 25.2155 27.8136 25.5607 28.1102 25.69C28.4086 25.8199 28.7529 25.682 28.8815 25.3869L33.9884 13.6658L35.1544 14.1737C35.0119 14.5009 26.3323 34.4216 26.1968 34.7327ZM35.6226 13.0994L32.2162 11.6153L32.7977 10.2808L36.2041 11.7649L35.6226 13.0994ZM37.5344 8.71156L36.6721 10.6905L33.2658 9.20641L34.128 7.22742C34.5371 6.28828 35.6341 5.85711 36.5733 6.26633C37.5145 6.67633 37.9448 7.77 37.5344 8.71156Z" fill="white"/>
                    </svg>                                      
                  </div>
                  <div>
                    <h2 class="m-0 fw-medium cs_fs_20 cs_lh_base">Accounting and Bookkeeping</h2>
                  </div>
                </div>
                <div class="d-flex align-items-center cs_mb_30">
                  <div class="d-flex align-items-center justify-content-center cs_height_70 cs_width_70 cs_rounded_10 flex-none cs_mr_15 bg-primary">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_81_8811)">
                      <path d="M34.375 39.2187V34.5312C34.375 34.0997 34.0253 33.75 33.5937 33.75C33.1622 33.75 32.8125 34.0997 32.8125 34.5312V38.4375H28.9062C28.4747 38.4375 28.125 38.7872 28.125 39.2187C28.125 39.6503 28.4747 40 28.9062 40H33.5937C34.0253 40 34.375 39.6503 34.375 39.2187Z" fill="white"/>
                      <path d="M17.9687 36.4062C17.9687 36.8378 17.619 37.1875 17.1875 37.1875C16.756 37.1875 16.4062 36.8378 16.4062 36.4062C16.4062 35.9747 16.756 35.625 17.1875 35.625C17.619 35.625 17.9687 35.9747 17.9687 36.4062Z" fill="white"/>
                      <path d="M13.5254 36.7947C13.5815 36.8069 13.6374 36.813 13.6926 36.813C14.0518 36.813 14.3756 36.5634 14.4549 36.1978C14.5468 35.776 14.2795 35.3598 13.858 35.2682C6.73339 33.7161 1.5625 27.2949 1.5625 20C1.5625 11.3843 8.57177 4.375 17.1875 4.375C24.1446 4.375 30.3119 9.08386 32.2116 15.7031H32.1875C31.9946 15.7031 31.8081 15.7745 31.665 15.9036L29.5022 17.8497C28.4833 11.9839 23.3575 7.5 17.1875 7.5C10.2948 7.5 4.6875 13.1076 4.6875 20C4.6875 26.8924 10.2948 32.5 17.1875 32.5C23.3575 32.5 28.4839 28.0154 29.5016 22.1496L31.6647 24.0964C31.8081 24.2254 31.9943 24.2969 32.1875 24.2969H32.2116C30.6396 29.7873 26.1435 34.042 20.517 35.2679C20.0952 35.3598 19.8282 35.776 19.9197 36.1978C19.9994 36.5634 20.3229 36.8127 20.6824 36.8127C20.7376 36.8127 20.7934 36.8069 20.8496 36.7947C27.185 35.4144 32.218 30.5435 33.8315 24.2969H39.2187C39.5068 24.2969 39.7714 24.1382 39.9075 23.8843C40.0433 23.6304 40.0287 23.3221 39.8687 23.0823L37.814 20L39.8687 16.9177C40.0287 16.6782 40.0436 16.3696 39.9075 16.1157C39.7714 15.8618 39.5068 15.7031 39.2187 15.7031H33.8305C31.8817 8.17779 25.0555 2.8125 17.1875 2.8125C7.71026 2.8125 0 10.5228 0 20C0 28.1991 5.78704 35.1092 13.5254 36.7947ZM17.1875 30.9375C11.1566 30.9375 6.24999 26.0309 6.24999 20C6.24999 13.9691 11.1566 9.0625 17.1875 9.0625C22.9193 9.0625 27.6394 13.4521 28.0896 19.1217L27.9815 19.2187H24.9588C24.5654 15.2774 21.2301 12.189 17.1875 12.189C12.8805 12.189 9.37652 15.693 9.37652 20C9.37652 24.3069 12.8805 27.811 17.1875 27.811C21.2304 27.811 24.5654 24.7229 24.9588 20.7812H27.9812L28.089 20.878C27.6397 26.5478 22.9202 30.9375 17.1875 30.9375ZM20.2136 19.2187C19.8657 17.8723 18.641 16.875 17.1875 16.875C15.4645 16.875 14.0625 18.277 14.0625 20C14.0625 21.723 15.4645 23.125 17.1875 23.125C18.641 23.125 19.8657 22.1268 20.2136 20.7803H23.3844C22.9986 23.8583 20.3677 26.2485 17.1875 26.2485C13.7421 26.2485 10.939 23.4454 10.939 20C10.939 16.5546 13.7421 13.7515 17.1875 13.7515C20.3677 13.7515 22.9986 16.141 23.3844 19.2187H20.2136ZM18.75 20C18.75 20.8615 18.049 21.5625 17.1875 21.5625C16.326 21.5625 15.625 20.8615 15.625 20C15.625 19.1385 16.326 18.4375 17.1875 18.4375C18.049 18.4375 18.75 19.1385 18.75 20ZM36.2249 20.4333L37.7591 22.7344H32.4872L29.6063 20.1416C29.5761 20.0763 29.5373 20.0159 29.4909 19.9618L32.4872 17.2656H37.7591L36.2249 19.5666C36.0501 19.8291 36.0501 20.1709 36.2249 20.4333Z" fill="white"/>
                      <path d="M0.781249 6.24999C1.21277 6.24999 1.5625 5.90026 1.5625 5.46875V1.5625H5.46875C5.90026 1.5625 6.24999 1.21277 6.24999 0.781249C6.24999 0.349731 5.90026 0 5.46875 0H0.781249C0.349731 0 0 0.349731 0 0.781249V5.46875C0 5.90026 0.349731 6.24999 0.781249 6.24999Z" fill="white"/>
                      <path d="M33.5937 6.24999C34.0253 6.24999 34.375 5.90026 34.375 5.46875V0.781249C34.375 0.349731 34.0253 0 33.5937 0H28.9062C28.4747 0 28.125 0.349731 28.125 0.781249C28.125 1.21277 28.4747 1.5625 28.9062 1.5625H32.8125V5.46875C32.8125 5.90026 33.1622 6.24999 33.5937 6.24999Z" fill="white"/>
                      <path d="M0.781249 40H5.46875C5.90026 40 6.24999 39.6503 6.24999 39.2187C6.24999 38.7872 5.90026 38.4375 5.46875 38.4375H1.5625V34.5312C1.5625 34.0997 1.21277 33.75 0.781249 33.75C0.349731 33.75 0 34.0997 0 34.5312V39.2187C0 39.6503 0.349731 40 0.781249 40Z" fill="white"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_81_8811">
                      <rect width="40" height="40" fill="white"/>
                      </clipPath>
                      </defs>
                    </svg>                      
                  </div>
                  <div>
                    <h2 class="m-0 fw-medium cs_fs_20 cs_lh_base">IT Support and Consulting</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="cs_section_heading cs_style_1 cs_mb_30">
              <div class="cs_section_heading_in">
                <h3 class="cs_fs_20 text-accent fw-normal cs_lh_base cs_mb_15">frequently asked questions</h3>
                <h2 class="cs_fs_36 cs_mb_0">Questions & Answers</h2>
              </div>
            </div>
            <div class="cs_accordians cs_style_1">
              <div class="cs_accordian active">
                <div class="cs_accordian_head bg-gray">
                  <h2 class="cs_accordian_title cs_transition_3 cs_fs_16 fw-medium m-0 cs_pl_25 cs_pt_18 cs_pb_18 cs_pr_35">What services does your business provide?</h2>
                  <span class="cs_accordian_toggle"></span>
                </div>
                <div class="cs_accordian_body">
                  <p class="m-0 cs_pl_25 cs_pr_25 cs_pb_20">Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us.</p>
                </div>
              </div><!-- .cs_accordian -->
              <div class="cs_accordian">
                <div class="cs_accordian_head bg-gray">
                  <h2 class="cs_accordian_title cs_transition_3 cs_fs_16 fw-medium m-0 cs_pl_25 cs_pt_18 cs_pb_18 cs_pr_35">How much do your services cost?</h2>
                  <span class="cs_accordian_toggle"></span>
                </div>
                <div class="cs_accordian_body">
                  <p class="m-0 cs_pl_25 cs_pr_25 cs_pb_20">Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us.</p>
                </div>
              </div><!-- .cs_accordian -->
              <div class="cs_accordian">
                <div class="cs_accordian_head bg-gray">
                  <h2 class="cs_accordian_title cs_transition_3 cs_fs_16 fw-medium m-0 cs_pl_25 cs_pt_18 cs_pb_18 cs_pr_35">Do you offer any guarantees or refunds?</h2>
                  <span class="cs_accordian_toggle"></span>
                </div>
                <div class="cs_accordian_body">
                  <p class="m-0 cs_pl_25 cs_pr_25 cs_pb_20">Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us.</p>
                </div>
              </div><!-- .cs_accordian -->
              <div class="cs_accordian">
                <div class="cs_accordian_head bg-gray">
                  <h2 class="cs_accordian_title cs_transition_3 cs_fs_16 fw-medium m-0 cs_pl_25 cs_pt_18 cs_pb_18 cs_pr_35">How do I get started with your services?</h2>
                  <span class="cs_accordian_toggle"></span>
                </div>
                <div class="cs_accordian_body">
                  <p class="m-0 cs_pl_25 cs_pr_25 cs_pb_20">Our pricing varies depending on the specific services you require and the scope of your project. We offer customized solutions to fit each client's unique needs and budget. Please contact us.</p>
                </div>
              </div><!-- .cs_accordian -->
            </div><!-- .cs_accordians -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Service Details Section -->
    

    <!-- Start Contact Section -->
    <section class="cs_pt_133 cs_pt_lg_75 cs_pb_140 cs_pb_lg_80 background-filled" data-src="assets/img/contact_bg_2.jpeg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="cs_section_heading cs_style_1 d-flex align-items-center  cs_mb_60 cs_mb_lg_40 text-center">
              <div class="cs_section_heading_in">
                <h3 class="cs_fs_20 cs_fs_lg_18 text-accent fw-normal cs_lh_base cs_mb_10">Meet Our Team Member</h3>
                <h2 class="cs_fs_48 cs_fs_lg_36 m-0 text-white">Feel Free to Get in Touch <br>with Ralph</h2>
              </div>
            </div>
            <form class="row">
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-input-dark" type="text" placeholder="Your Name">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-input-dark" type="text" placeholder="Email Address">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-input-dark" type="text" placeholder="Phone">
              </div>
              <div class="col-lg-6">
                <input class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_35 bg-input-dark" type="text" placeholder="Subject">
              </div>
              <div class="col-lg-12">
                <textarea class="form-control cs_fs_14 cs_rounded_5 border-0 cs_mb_40 bg-input-dark" placeholder="Message here ..." cols="35" rows="7"></textarea>
              </div>
              <div class="col-lg-12">
                <button class="cs_btn cs_style_1 cs_fs_16 cs_rounded_5 cs_pl_30 cs_pr_30 cs_pt_10 cs_pb_10 overflow-hidden"><span>Send A Message</span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
    
    @endsection
