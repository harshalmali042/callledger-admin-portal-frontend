<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Details | Admin Central</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 1rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .nav-tabs .nav-link.active {
            background-color: #0d6efd;
            color: #fff !important;
        }
    </style>
</head>

<body>
    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-primary"><i class="fa fa-user-circle"></i> Partner Details</h3>
            <a href="/dashboard" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
        </div>

        <div class="card p-3">
            <!-- Tabs -->
            <ul class="nav nav-tabs mb-3" id="clientTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab">
                        <i class="fa fa-id-card"></i> Profile Details
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="transactions-tab" data-bs-toggle="tab" data-bs-target="#transactions"
                        type="button" role="tab">
                        <i class="fa fa-money-bill"></i> Transactions
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="referrals-tab" data-bs-toggle="tab" data-bs-target="#referrals"
                        type="button" role="tab">
                        <i class="fa fa-users"></i> Referral Clients
                    </button>
                </li>

            </ul>

            <div class="tab-content" id="clientTabContent">

                <!-- Profile Tab -->
                <div class="tab-pane fade show active" id="profile" role="tabpanel">

                    <div class="container my-4">
                        <!-- 🔹 Overview Summary -->
                        <div class="row mb-4 justify-content-center">
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="card text-center p-3 shadow-sm border-0 bg-light">
                                    <div class="card-body">
                                        <i class="fa fa-wallet fa-2x text-success mb-2"></i>
                                        <h6 class="fw-bold text-muted">Total Earnings</h6>
                                        <h4 class="fw-bold text-dark">₹75,000</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="card text-center p-3 shadow-sm border-0 bg-light">
                                    <div class="card-body">
                                        <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                        <h6 class="fw-bold text-muted">Referral Clients</h6>
                                        <h4 class="fw-bold text-dark">12</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 mb-3">
                                <div class="card text-center p-3 shadow-sm border-0 bg-light">
                                    <div class="card-body">
                                        <i class="fa fa-exchange-alt fa-2x text-info mb-2"></i>
                                        <h6 class="fw-bold text-muted">Total Transactions</h6>
                                        <h4 class="fw-bold text-dark">48</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="fw-bold text-primary"><i class="fa fa-user"></i> Profile Details</h2>
                            <div>
                            <a href="editpartner" class="text-decoration-none">
                                <button class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
                               </a>
                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                            </div>
                        </div>

                        <!-- Basic Info -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="section-title"><i class="fa fa-id-card"></i> Basic Information</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span class="label">Client Name:</span> ABC Technologies Pvt Ltd</p>
                                        <p><span class="label">Type:</span> <span
                                                class="badge bg-primary">Partner</span></p>
                                        <p><span class="label">Contact Person:</span> Rohan Mehta</p>
                                        <p><span class="label">Email:</span> rohan@abc.com</p>
                                        <p><span class="label">Phone:</span> +91 9876543210</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="label">Client Code:</span> CLT001</p>
                                        <p><span class="label">Account Status:</span> <span
                                                class="badge bg-success badge-status">Active</span></p>
                                        <p><span class="label">Registered On:</span> 01-Jan-2025</p>

                                        <p><span class="label">Address:</span> Office 204, MG Road, Pune, Maharashtra
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Address & Billing -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="section-title"><i class="fa fa-map-marker-alt"></i> Bank Info</h5>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><span class="label">Bank Holder Name:</span> Siddhant </p>
                                        <p><span class="label">Account Number : </span> 27AAACA1234A1ZV</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="label">Bank Name:</span> billing@abc.com</p>
                                        <p><span class="label">Bank Branch:</span> Thane</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="label">IFSC Code:</span> billing@abc.com</p>

                                    </div>
                                    <div class="col-md-6">
                                        <p><span class="label">Bank Status:</span> <span class="badge bg-success">
                                                Verified</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

                <!-- Transactions Tab -->
                <div class="tab-pane fade table-responsive" id="transactions" role="tabpanel">
                    <table class="table table-bordered mt-3">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Invoice ID</th>
                                <th>Amount</th>
                                <th>Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2025-01-01</td>
                                <td>INV001</td>
                                <td>₹12,000</td>
                                <td><span class="badge bg-success">Paid</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>2025-09-01</td>
                                <td>INV002</td>
                                <td>₹12,000</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Referral Clients Tab -->
                <div class="tab-pane fade table-responsive" id="referrals" role="tabpanel">
                    <table class="table table-bordered mt-3">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Referral Name</th>
                                <th>Email</th>
                                <th>Joined On</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Pratik Deshmukh</td>
                                <td>pratik@xyz.com</td>
                                <td>2025-04-15</td>
                                <td><span class="badge bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Neha Kulkarni</td>
                                <td>neha@xyz.com</td>
                                <td>2025-06-22</td>
                                <td><span class="badge bg-danger">Inactive</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>




            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
