{{-- resources/views/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.includes.head');

</head>

<body class=" layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    @include('layouts.includes.navbar');
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('layouts.includes.sidebar');
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="middle-content container-xxl p-0">
                    <!--  BEGIN BREADCRUMBS  -->
                    <div class="secondary-nav">
                        <div class="breadcrumbs-container" data-page-heading="{{-- $active_page --}}">
                            <header class="header navbar navbar-expand-sm">
                                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse"
                                    data-placement="bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                                        <line x1="3" y1="12" x2="21" y2="12"></line>
                                        <line x1="3" y1="6" x2="21" y2="6"></line>
                                        <line x1="3" y1="18" x2="21" y2="18"></line>
                                    </svg>
                                </a>
                                <div class="d-flex breadcrumb-content">
                                    <div class="page-header">
                                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <a href="#">{{ $title ?? 'My App' }}</a>
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>

                    @yield('content')

                </div>
            </div>

            <!--  BEGIN FOOTER  -->
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Developed By <a target="_blank" href="https://dmstech.tech">DMS Computers and
                            Technology</a></p>
                </div>
            </div>
            <!--  END FOOTER  -->

        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->






    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('layouts/vertical-dark-menu/app.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- ajax link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('src/plugins/src/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('src/assets/js/dashboard/dash_2.js') }}"></script>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <script>
        Mode();

        function Mode() {
            document.body.classList.remove('dark');
        }

        window.addEventListener('pageshow', function(event) {
            if (event.persisted || window.performance.getEntriesByType("navigation")[0].type === "back_forward") {
                // Page loaded from back/forward cache
                location.reload(); // forced reload, session check will kick in
            }
        });
    </script>

    @stack('scripts')

</body>

</html>
