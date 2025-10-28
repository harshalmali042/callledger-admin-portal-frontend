<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Callledger | Partner Login</title>
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}" />

    <!-- CSS -->
    <link href="{{ asset('layouts/vertical-dark-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('layouts/vertical-dark-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('layouts/vertical-dark-menu/loader.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('layouts/vertical-dark-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('src/assets/css/light/authentication/auth-boxed.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .error-text {
            color: #d9534f;
            font-size: 13px;
            margin-top: 3px;
            display: none;
        }

        .is-invalid {
            border-color: #d9534f !important;
            box-shadow: 0 0 5px rgba(217, 83, 79, 0.5);
        }

        .is-valid {
            border-color: #28a745 !important;
            box-shadow: 0 0 5px rgba(40, 167, 69, 0.5);
        }

        /* Toast container */
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }

        .toast {
            background-color: #333;
            color: #fff;
            padding: 12px 20px;
            margin-bottom: 10px;
            border-radius: 6px;
            min-width: 250px;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.5s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .toast.show {
            opacity: 1;
            transform: translateX(0);
        }

        .toast.success {
            background-color: #28a745;
        }

        .toast.error {
            background-color: #d9534f;
        }

        .loading-spinner {
            display: inline-block;
            width: 18px;
            height: 18px;
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s linear infinite;
            vertical-align: middle;
            margin-left: 8px;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }
    </style>



</head>

<body class="form">
    <div class="toast-container"></div>

    <!-- Loader -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>

    <div class="auth-container d-flex">
        <div class="container mx-auto align-self-center">
            <div class="row">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                    <div class="card mt-3 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <h2>Sign In</h2>
                                    <p>Enter your email and password to login</p>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email">
                                        <small id="emailError" class="error-text ">Please enter a valid
                                            email.</small>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-4">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password">
                                        <small id="passwordError" class="error-text">Password is
                                            required.</small>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-check form-check-primary form-check-inline">
                                            <input class="form-check-input me-3" type="checkbox"
                                                id="form-check-default">
                                            <label class="form-check-label" for="form-check-default">Remember me</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-4">
                                        <button id="loginBtn" class="btn btn-secondary w-100">SIGN IN</button>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="text-center">
                                        <p class="mb-0">Don’t have an account?
                                            <a href="{{ url('signup') }}" class="text-warning">Sign Up</a>
                                        </p>
                                    </div>
                                </div>

                            </div> <!-- row -->
                        </div> <!-- card-body -->
                    </div> <!-- card -->
                </div> <!-- col -->
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- auth-container -->



    <!-- JS -->
    <script src="{{ asset('src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>
        //    const user = JSON.parse(sessionStorage.getItem('user')); // Get user from sessionStorage
        // if (user) {

        //  if (user.status == "pending_verification") {
        //     window.location.href = "/verification-status";
        //} else {
        //    window.location.href = "/dashboard";

        //    }
        // }
    </script>
    <script>
        function showToast(message, type = 'success', duration = 4000) {
            const toast = document.createElement('div');
            toast.classList.add('toast', type);
            toast.textContent = message;
            document.querySelector('.toast-container').appendChild(toast);

            // Show toast
            setTimeout(() => toast.classList.add('show'), 100);

            // Hide toast
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => toast.remove(), 500);
            }, duration);
        }

        function validateEmail(email) {
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }

        function validateFields() {
            let valid = true;
            const email = $('#email').val().trim();
            const password = $('#password').val().trim();

            // Reset all states
            $('.error-text').hide();
            $('#email, #password').removeClass('is-invalid is-valid');

            // Email validation
            if (email === "") {
                $('#emailError').text("Email is required.").show();
                $('#email').addClass('is-invalid');
                valid = false;
            } else if (!validateEmail(email)) {
                $('#emailError').text("Please enter a valid email address.").show();
                $('#email').addClass('is-invalid');
                valid = false;
            } else {
                $('#email').addClass('is-valid');
            }

            // Password validation
            if (password === "") {
                $('#passwordError').text("Password is required.").show();
                $('#password').addClass('is-invalid');
                valid = false;
            } else if (password.length < 6) {
                $('#passwordError').text("Password must be at least 6 characters.").show();
                $('#password').addClass('is-invalid');
                valid = false;
            } else {
                $('#password').addClass('is-valid');
            }

            return valid;
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#loginBtn').on('click', function() {
            if (!validateFields()) return;

            const email = $('#email').val().trim();
            const password = $('#password').val().trim();

            $('#loginBtn').prop('disabled', true).html('Signing in <span class="loading-spinner"></span>');

            $.ajax({
                url: "{{-- route('login.submit') --}}",
                method: 'POST',
                data: {
                    email,
                    password
                },
                dataType: 'json',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(res) {
                    if (res.status === 'success') {
                        showToast('Login successful! Redirecting...', 'success');
                        setTimeout(() => window.location.href = res.redirect, 800);
                    } else if (res.status === 'error') {
                        showToast(res.message || 'Login failed!', 'error');
                    } else {
                        showToast('Unexpected server response!', 'error');
                    }
                },
                error: function(xhr) {
                    let errMsg = "Something went wrong. Check console.";

                    // Try to parse JSON response
                    try {
                        const res = JSON.parse(xhr.responseText);

                        if (res.message) {
                            errMsg = res.message; // ✅ This is what toast should show
                        }
                        // Optional: show validation errors too
                        if (res.errors) {
                            errMsg = Object.entries(res.errors)
                                .map(([key, val]) => val.join(', '))
                                .join('<br>');
                        }
                    } catch (e) {
                        console.log("Non-JSON error response:", xhr.responseText);
                    }

                    showToast(errMsg, 'error'); // ✅ Proper message from server
                },

                complete: function() {
                    $('#loginBtn').prop('disabled', false).text('SIGN IN');
                }
            });
        });

        // Live validation
        $('#email, #password').on('input', function() {
            validateFields();
        });

        window.addEventListener('pageshow', function(event) {
            if (event.persisted || window.performance.getEntriesByType("navigation")[0].type === "back_forward") {
                // Page loaded from back/forward cache
                location.reload(); // forced reload, session check will kick in
            }
        });
    </script>



</body>

</html>
