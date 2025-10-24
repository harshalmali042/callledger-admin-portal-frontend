@extends('layouts.main', ['title' => 'Dashboard'])

@section('content')
    <div class="row layout-top-spacing">

        <!-- Box 1: Total Earn -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card component-card_1 h-100 shadow-sm">
                <div class="card-body d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3 bg-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width:50px; height:50px;">
                            <svg fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.9494914,6 C13.4853936,6.52514205 13.8531598,7.2212202 13.9645556,8 L17.5,8 C17.7761424,8 18,8.22385763 18,8.5 C18,8.77614237 17.7761424,9 17.5,9 L13.9645556,9 C13.7219407,10.6961471 12.263236,12 10.5,12 L7.70710678,12 L13.8535534,18.1464466 C14.0488155,18.3417088 14.0488155,18.6582912 13.8535534,18.8535534 C13.6582912,19.0488155 13.3417088,19.0488155 13.1464466,18.8535534 L6.14644661,11.8535534 C5.83146418,11.538571 6.05454757,11 6.5,11 L10.5,11 C11.709479,11 12.7183558,10.1411202 12.9499909,9 L6.5,9 C6.22385763,9 6,8.77614237 6,8.5 C6,8.22385763 6.22385763,8 6.5,8 L12.9499909,8 C12.7183558,6.85887984 11.709479,6 10.5,6 L6.5,6 C6.22385763,6 6,5.77614237 6,5.5 C6,5.22385763 6.22385763,5 6.5,5 L10.5,5 L17.5,5 C17.7761424,5 18,5.22385763 18,5.5 C18,5.77614237 17.7761424,6 17.5,6 L12.9494914,6 L12.9494914,6 Z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="card-title mb-1">Total Earn</h5>
                            <p class="card-text fw-bold mb-0 fs-5" data-key="totalEarn" id="totalEarnings">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       

        <!-- Box 3: Total Client -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card component-card_1 h-100 shadow-sm">
                <div class="card-body d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3 bg-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width:50px; height:50px;">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 12.25C13.2583 12.25 12.5333 12.0301 11.9166 11.618C11.2999 11.206 10.8193 10.6203 10.5355 9.93506C10.2516 9.24984 10.1774 8.49584 10.3221 7.76841C10.4668 7.04098 10.8239 6.3728 11.3484 5.84835C11.8728 5.3239 12.541 4.96675 13.2684 4.82206C13.9958 4.67736 14.7498 4.75162 15.4351 5.03545C16.1203 5.31928 16.706 5.79993 17.118 6.41661C17.5301 7.0333 17.75 7.75832 17.75 8.5C17.75 9.49456 17.3549 10.4484 16.6517 11.1517C15.9484 11.8549 14.9946 12.25 14 12.25Z"
                                    fill="#000000"></path>
                                <path
                                    d="M21 19.25C20.8019 19.2474 20.6126 19.1676 20.4725 19.0275C20.3324 18.8874 20.2526 18.6981 20.25 18.5C20.25 16.55 19.19 15.25 14 15.25C8.81 15.25 7.75 16.55 7.75 18.5C7.75 18.6989 7.67098 18.8897 7.53033 19.0303C7.38968 19.171 7.19891 19.25 7 19.25C6.80109 19.25 6.61032 19.171 6.46967 19.0303C6.32902 18.8897 6.25 18.6989 6.25 18.5C6.25 13.75 11.68 13.75 14 13.75C16.32 13.75 21.75 13.75 21.75 18.5C21.7474 18.6981 21.6676 18.8874 21.5275 19.0275C21.3874 19.1676 21.1981 19.2474 21 19.25Z"
                                    fill="#000000"></path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="card-title mb-1">Total Client</h5>
                            <p class="card-text fw-bold mb-0 fs-5" data-key="totalClient" id="totalClients">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

        <!-- Box 3: Total Client -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card component-card_1 h-100 shadow-sm">
                <div class="card-body d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3 bg-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width:50px; height:50px;">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 12.25C13.2583 12.25 12.5333 12.0301 11.9166 11.618C11.2999 11.206 10.8193 10.6203 10.5355 9.93506C10.2516 9.24984 10.1774 8.49584 10.3221 7.76841C10.4668 7.04098 10.8239 6.3728 11.3484 5.84835C11.8728 5.3239 12.541 4.96675 13.2684 4.82206C13.9958 4.67736 14.7498 4.75162 15.4351 5.03545C16.1203 5.31928 16.706 5.79993 17.118 6.41661C17.5301 7.0333 17.75 7.75832 17.75 8.5C17.75 9.49456 17.3549 10.4484 16.6517 11.1517C15.9484 11.8549 14.9946 12.25 14 12.25Z"
                                    fill="#000000"></path>
                                <path
                                    d="M21 19.25C20.8019 19.2474 20.6126 19.1676 20.4725 19.0275C20.3324 18.8874 20.2526 18.6981 20.25 18.5C20.25 16.55 19.19 15.25 14 15.25C8.81 15.25 7.75 16.55 7.75 18.5C7.75 18.6989 7.67098 18.8897 7.53033 19.0303C7.38968 19.171 7.19891 19.25 7 19.25C6.80109 19.25 6.61032 19.171 6.46967 19.0303C6.32902 18.8897 6.25 18.6989 6.25 18.5C6.25 13.75 11.68 13.75 14 13.75C16.32 13.75 21.75 13.75 21.75 18.5C21.7474 18.6981 21.6676 18.8874 21.5275 19.0275C21.3874 19.1676 21.1981 19.2474 21 19.25Z"
                                    fill="#000000"></path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="card-title mb-1">Total Member</h5>
                            <p class="card-text fw-bold mb-0 fs-5" data-key="totalClient" id="totalClients">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Box 3: Total Client -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card component-card_1 h-100 shadow-sm">
                <div class="card-body d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3 bg-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width:50px; height:50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640"><!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M598.1 139.4C608.8 131.6 611.2 116.6 603.4 105.9C595.6 95.2 580.6 92.8 569.9 100.6L495.4 154.8L485.5 148.2C465.8 135 442.6 128 418.9 128L359.7 128L359.3 128L215.7 128C189 128 163.2 136.9 142.3 153.1L70.1 100.6C59.4 92.8 44.4 95.2 36.6 105.9C28.8 116.6 31.2 131.6 41.9 139.4L129.9 203.4C139.5 210.3 152.6 209.3 161 201L164.9 197.1C178.4 183.6 196.7 176 215.8 176L262.1 176L170.4 267.7C154.8 283.3 154.8 308.6 170.4 324.3L171.2 325.1C218 372 294 372 340.9 325.1L368 298L465.8 395.8C481.4 411.4 481.4 436.7 465.8 452.4L456 462.2L425 431.2C415.6 421.8 400.4 421.8 391.1 431.2C381.8 440.6 381.7 455.8 391.1 465.1L419.1 493.1C401.6 503.5 381.9 509.8 361.5 511.6L313 463C303.6 453.6 288.4 453.6 279.1 463C269.8 472.4 269.7 487.6 279.1 496.9L294.1 511.9L290.3 511.9C254.2 511.9 219.6 497.6 194.1 472.1L65 343C55.6 333.6 40.4 333.6 31.1 343C21.8 352.4 21.7 367.6 31.1 376.9L160.2 506.1C194.7 540.6 241.5 560 290.3 560L342.1 560L343.1 561L344.1 560L349.8 560C398.6 560 445.4 540.6 479.9 506.1L499.8 486.2C501 485 502.1 483.9 503.2 482.7C503.9 482.2 504.5 481.6 505.1 481L609 377C618.4 367.6 618.4 352.4 609 343.1C599.6 333.8 584.4 333.7 575.1 343.1L521.3 396.9C517.1 384.1 510 372 499.8 361.8L385 247C375.6 237.6 360.4 237.6 351.1 247L307 291.1C280.5 317.6 238.5 319.1 210.3 295.7L309 197C322.4 183.6 340.6 176 359.6 175.9L368.1 175.9L368.3 175.9L419.1 175.9C433.3 175.9 447.2 180.1 459 188L482.7 204C491.1 209.6 502 209.3 510.1 203.4L598.1 139.4z"/></svg>
                        </div>
                        <div>
                            <h5 class="card-title mb-1">Total Partner</h5>
                            <p class="card-text fw-bold mb-0 fs-5" data-key="totalClient" id="totalClients">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Paid Clients -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card component-card_1 h-100 shadow-sm">
                <div class="card-body d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3 bg-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width:50px; height:50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#28a745" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                                viewBox="0 0 24 24">
                                <path d="M12 1v22M5 12h14" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="card-title mb-1">Paid Clients</h5>
                            <p class="card-text fw-bold mb-0 fs-5" data-key="totalPaid" id="paidClients">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Free Trial Clients -->
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card component-card_1 h-100 shadow-sm">
                <div class="card-body d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3 bg-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width:50px; height:50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#17a2b8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 6v6l4 2" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="card-title mb-1">Free Trial Clients</h5>
                            <p class="card-text fw-bold mb-0 fs-5" data-key="totalFreeTrial" id="freeTrialClients">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card component-card_1 h-100 shadow-sm">
                <div class="card-body d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3 bg-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width:50px; height:50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#ff0909ff" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 6v6l4 2" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="card-title mb-1">Expired Plans</h5>
                            <p class="card-text fw-bold mb-0 fs-5" data-key="totalFreeTrial" id="freeTrialClients">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 mb-4">
            <div class="card component-card_1 h-100 shadow-sm">
                <div class="card-body d-flex align-items-center justify-content-between p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3 bg-light rounded-circle d-flex align-items-center justify-content-center"
                            style="width:50px; height:50px;">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#17a2b8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" width="24" height="24"
                                viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M12 6v6l4 2" />
                            </svg>
                        </div>
                        <div>
                            <h5 class="card-title mb-1">Expired Plans in (next 15 days) </h5>
                            <p class="card-text fw-bold mb-0 fs-5" data-key="totalFreeTrial" id="freeTrialClients">0</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @push('scripts')
        <!-- ✅ AJAX Script -->
            <script>
                $(document).ready(function() {

                    $(".card-text").text("Loading...");




                    $.ajax({
                        url: '/dashboard-data', // ✅ internal Laravel route
                        method: 'GET',
                        dataType: 'json',

                        success: function(res) {

                            if (res.success && res.data) {
                                const data = res.data;
                                $("#totalEarnings").text(`₹${data.total_earn}`);
                                $("#toBeSettle").text(`₹${data.to_be_settle}`);
                                $("#totalClients").text(data.total_clients);
                                $("#paidClients").text(data.total_paid_clients);
                                $("#freeTrialClients").text(data.free_trial_clients);
                            } else {
                                $(".card-text").text("No Data");
                            }
                        },
                        error: function(xhr, status, error) {

                         {{--   $(".card-text").text("Error"); --}}
                            $(".card-text").text("0"); 
                        }
                    });

                });
            </script>
    @endpush
@endsection
