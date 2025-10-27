@extends('layouts.main', ['title' => 'My Profile'])

@section('content')
    <div class="container mt-5">

        <div id="toast-container"
            style="
        position: fixed; 
        top: 100px; 
        left: 50%; 
        transform: translateX(-50%);
        z-index: 1050;
     ">
        </div>

        <div class="row">
            <!-- Left: Personal Info -->
            <div class="col-lg-6 mb-4">
                <form id="profileForm" class="card p-4 shadow">
                    <h5 class="mb-4">👤 Personal Details</h5>

                    <div class="text-center mb-3">
                        <img src="{{ asset('images/logo.png') }}" class="rounded-circle img-thumbnail" width="120"
                            height="120" alt="Profile Image">
                    </div>

                    <div class="mb-3">
                        <label for="profile_img" class="form-label">Change Profile Image</label>
                        <input type="file" id="profile_img" name="profile_img" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Full Name <span class="text-danger">*</span></label>
                        <input type="text" id="full_name" name="full_name" class="form-control" value="" disabled>
                    </div>

                    <div class="mb-3">
                        <label>Email <span class="text-danger">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" value="" required>
                    </div>

                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" id="mobile" name="mobile" class="form-control" value="" disabled>
                    </div>

                    <div class="text-end">
                        <button type="button" id="updateProfileBtn" class="btn btn-primary">Update Details</button>
                    </div>
                </form>
            </div>

            <!-- Right: Password Change -->
            <div class="col-lg-6 mb-4">
                <form id="passwordForm" class="card p-4 shadow">
                    <h5 class="mb-4">🔐 Change Password</h5>

                    <div class="mb-3">
                        <label>Old Password <span class="text-danger">*</span></label>
                        <input type="password" id="old_password" name="old_password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>New Password <span class="text-danger">*</span></label>
                        <input type="password" id="new_password" name="new_password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Confirm Password <span class="text-danger">*</span></label>
                        <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                    </div>

                    <div class="text-end">
                        <button type="button" id="changePasswordBtn" class="btn btn-warning">Change Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // 
                // ===== Helper Functions =====
                const showError = (input, msg) => {
                    $(input).addClass('is-invalid');
                    if (!$(input).siblings('.invalid-feedback').length)
                        $(input).after(`<div class="invalid-feedback d-block">${msg}</div>`);
                };

                const clearError = (input) => {
                    $(input).removeClass('is-invalid');
                    $(input).siblings('.invalid-feedback').remove();
                };

                const showToast = (msg, type = 'info') => {
                    const colors = {
                        success: '#28a745',
                        danger: '#dc3545',
                        warning: '#ffc107',
                        info: '#0dcaf0'
                    };
                    const toast = $(`
            <div style="
                background:${colors[type]};
                color:white; 
                padding:10px 15px;
                border-radius:8px;
                box-shadow:0 2px 6px rgba(0,0,0,0.2);
                margin-top:10px;
                animation:fadeInOut 3s ease-in-out forwards;
            ">
                ${msg}
            </div>
        `);
                    $('#toast-container').append(toast);
                    setTimeout(() => toast.remove(), 3000);
                };




                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });



                $.ajax({
                    url: '/profile-proxy', // backend proxy route
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response.success && response.data) {
                            const data = response.data;
                            $("#full_name").val(data.partner_name || "N/A");
                            $("#email").val(data.partner_email || "N/A");
                            $("#mobile").val(data.partner_mobile || "N/A");
                        }
                    },
                    error: function(xhr) {
                        console.error('❌ Failed to load profile:', xhr.responseText);
                    }
                });

                // ===== Profile Validation =====
                $('#updateProfileBtn').click(function() {
                    let valid = true;
                    $('.form-control').each(function() {
                        clearError(this);
                    });

                    const name = $('#full_name').val().trim();
                    const email = $('#email').val().trim();
                    const mobile = $('#mobile').val().trim();

                    if (!name) {
                        showError('#full_name', 'Full name is required');
                        valid = false;
                    }
                    if (!email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
                        showError('#email', 'Enter a valid email');
                        valid = false;
                    }
                    if (mobile && !/^[6-9]\d{9}$/.test(mobile)) {
                        showError('#mobile', 'Enter valid 10-digit mobile');
                        valid = false;
                    }

                    if (!valid) {
                        showToast('Please correct the highlighted fields.', 'danger');
                        return;
                    }

                    // You can send AJAX request here





                    $.ajax({
                        url: '/change-email-proxy',
                        method: 'POST',
                        data: JSON.stringify({
                            email
                        }),
                        contentType: 'application/json',
                        dataType: 'json',
                        success: function(res) {
                            showToast('Email updated successfully!', 'success');
                        },
                        error: function(xhr) {
                            showToast('Failed to update email', 'danger');
                        }
                    });


                });

                // ===== Password Validation =====
                $('#changePasswordBtn').click(function() {
                    let valid = true;
                    $('#passwordForm .form-control').each(function() {
                        clearError(this);
                    });

                    const oldPass = $('#old_password').val().trim();
                    const newPass = $('#new_password').val().trim();
                    const confirmPass = $('#confirm_password').val().trim();

                    if (!oldPass) {
                        showError('#old_password', 'Old password is required');
                        valid = false;
                    }
                    if (newPass.length < 6) {
                        showError('#new_password', 'Password must be at least 6 characters');
                        valid = false;
                    }
                    if (confirmPass !== newPass) {
                        showError('#confirm_password', 'Passwords do not match');
                        valid = false;
                    }

                    if (!valid) {
                        showToast('Please fix the errors before proceeding.', 'danger');
                        return;
                    }
                    // AJAX for password change can go here



                    $.ajax({
                        url: '/change-password-proxy',
                        method: 'POST',
                        data: JSON.stringify({
                            oldPass,
                            newPass
                        }),
                        contentType: 'application/json',
                        dataType: 'json',
                        success: function(res) {
                            showToast('Password changed successfully!', 'success');
                        },
                        error: function(xhr) {
                            showToast('Old password is incorrect!', 'danger');
                        }
                    });
                });

                // Add fade animation

            });
        </script>
    @endpush('scripts')
@endsection
