<!doctype html>

<html lang="en" class=" layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-skin="default"
    data-bs-theme="light" data-assets-path="{{ asset('backend') }}/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Dashboard</title>

    <meta name="description"
        content="Vuexy is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease." />
    <!-- Canonical SEO -->
    <meta name="keywords"
        content="Vuexy bootstrap dashboard, vuexy bootstrap 5 dashboard, themeselection, html dashboard, web dashboard, frontend dashboard, responsive bootstrap theme" />
    <meta property="og:title" content="Vuexy bootstrap Dashboard by Pixinvent" />
    <meta property="og:type" content="product" />
    <meta property="og:url"
        content="https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599" />
    <meta property="og:image" content="https://pixinvent.com/wp-content/uploads/2023/06/vuexy-hero-image.png" />
    <meta property="og:description"
        content="Vuexy is the best bootstrap 5 dashboard for responsive web apps. Streamline your app development process with ease." />
    <meta property="og:site_name" content="Pixinvent" />
    <link rel="canonical"
        href="https://themeforest.net/item/vuexy-vuejs-html-laravel-admin-dashboard-template/23328599" />

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5J3LMKC');
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('backend') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/iconify-icons.css" />
    <script src="{{ asset('backend') }}/assets/vendor/libs/@algolia/autocomplete-js.js"></script>
    <!-- Core CSS -->

    <!-- build:css assets/vendor/css/theme.css  -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/pickr/pickr-themes.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/core.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- endbuild -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet"
        href="{{ asset('backend') }}/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/fonts/flag-icons.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/select2/select2.css" />
    <link rel="stylesheet"
        href="{{ asset('backend') }}/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/quill/typography.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/quill/katex.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/quill/editor.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/dropzone/dropzone.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/flatpickr/flatpickr.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/tagify/tagify.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/@form-validation/form-validation.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/animate-css/animate.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/libs/sweetalert2/sweetalert2.css" />

    <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/pages/cards-advance.css" />
    <link rel="stylesheet" href="{{ asset('backend') }}/assets/vendor/css/pages/page-profile.css" />

    <!-- Helpers -->
    <script src="{{ asset('backend') }}/assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/template-customizer.js"></script>
    <script src="{{ asset('backend') }}/assets/js/config.js"></script>

    {{-- summernote --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet">

</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5J3LMKC" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu -->

            @include('backend.layouts.includes.sidebar')

            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('backend.layouts.includes.header')

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    @yield('content')

                    <!-- / Content -->

                    <!-- Footer -->

                    @include('backend.layouts.includes.footer')

                    <!-- / Footer -->


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/theme.js  -->
    <script src="{{ asset('backend') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/pickr/pickr.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/hammer/hammer.js"></script>

    <script src="{{ asset('backend') }}/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/js/menu.js"></script>

    <!-- endbuild -->
    <!-- Vendors JS -->
    <script src="{{ asset('backend') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/swiper/swiper.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/select2/select2.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/cleave-zen/cleave-zen.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/quill/katex.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/quill/quill.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/dropzone/dropzone.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/tagify/tagify.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/moment/moment.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/@form-validation/auto-focus.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/sweetalert2/sweetalert2.js"></script>
    <script src="{{ asset('backend') }}/assets/vendor/libs/pickr/pickr.js"></script>

    <script src="{{ asset('js/iziToast.js') }}"></script>
    @include('vendor.lara-izitoast.toast')



    <!-- Main JS -->
    <script src="{{ asset('backend') }}/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('backend') }}/assets/js/dashboards-analytics.js"></script>
    <script src="{{ asset('backend') }}/assets/js/app-ecommerce-settings.js"></script>
    <script src="{{ asset('backend') }}/assets/js/app-ecommerce-product-list.js"></script>
    <script src="{{ asset('backend') }}/assets/js/app-ecommerce-product-add.js"></script>
    <script src="{{ asset('backend') }}/assets/js/app-user-list.js"></script>
    <script src="{{ asset('backend') }}/assets/js/app-user-view-account.js"></script>
    <script src="{{ asset('backend') }}/assets/js/pages-account-settings-account.js"></script>
    <script src="{{ asset('backend') }}/assets/js/forms-pickers.js"></script>

    {{-- summernote --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.js"></script>


    @stack('scripts')

</body>

</html>

<!-- beautify ignore:end -->
