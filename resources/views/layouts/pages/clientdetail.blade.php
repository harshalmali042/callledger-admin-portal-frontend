<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client Details - Admin Central</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .card { border-radius: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
    .section-title { font-weight: 600; margin-bottom: 10px; color: #343a40; }
    .label { font-weight: 600; color: #6c757d; width: 160px; display: inline-block; }
    .badge-status { padding: 6px 10px; font-size: 12px; }
    .info-box { border: 1px solid #dee2e6; border-radius: 10px; padding: 15px; margin-bottom: 15px; background: #fff; }
  </style>
</head>

<body>
  <div class="container my-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold text-primary"><i class="fa fa-user"></i> Client Details</h2>
      <div>
        <button class="btn btn-warning"><i class="fa fa-edit"></i> Edit</button>
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
            <p><span class="label">Type:</span> <span class="badge bg-primary">Partner</span></p>
            <p><span class="label">Contact Person:</span> Rohan Mehta</p>
            <p><span class="label">Email:</span> rohan@abc.com</p>
            <p><span class="label">Phone:</span> +91 9876543210</p>
          </div>
          <div class="col-md-6">
            <p><span class="label">Client Code:</span> CLT001</p>
            <p><span class="label">Account Status:</span> <span class="badge bg-success badge-status">Active</span></p>
            <p><span class="label">Registered On:</span> 01-Jan-2025</p>
            <p><span class="label">Last Login:</span> 23-Oct-2025</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Address & Billing -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="section-title"><i class="fa fa-map-marker-alt"></i> Address & Billing Info</h5>
        <div class="row">
          <div class="col-md-6">
            <p><span class="label">Address:</span> Office 204, MG Road, Pune, Maharashtra</p>
            <p><span class="label">GST Number:</span> 27AAACA1234A1ZV</p>
          </div>
          <div class="col-md-6">
            <p><span class="label">Billing Contact:</span> billing@abc.com</p>
            <p><span class="label">Payment Method:</span> Online (Razorpay)</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Subscription Details -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="section-title"><i class="fa fa-credit-card"></i> Subscription Details</h5>
        <div class="row">
          <div class="col-md-6">
            <p><span class="label">Plan Name:</span> Pro Annual Plan</p>
            <p><span class="label">Start Date:</span> 01-Jan-2025</p>
            <p><span class="label">End Date:</span> 31-Dec-2025</p>
          </div>
          <div class="col-md-6">
            <p><span class="label">Payment Status:</span> <span class="badge bg-success">Paid</span></p>
            <p><span class="label">Amount:</span> ₹1,20,000</p>
            <p><span class="label">Renewal Date:</span> 01-Jan-2026</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Documents Section -->
    <div class="card mb-4">
      <div class="card-body">
        <h5 class="section-title"><i class="fa fa-file"></i> Documents</h5>
        <ul class="list-group">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            Contract Agreement
            <a href="#" class="btn btn-sm btn-outline-primary"><i class="fa fa-download"></i> Download</a>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            NDA Document
            <a href="#" class="btn btn-sm btn-outline-primary"><i class="fa fa-download"></i> Download</a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Activity Logs -->
    <div class="card">
      <div class="card-body">
        <h5 class="section-title"><i class="fa fa-clock"></i> Recent Activity</h5>
        <ul class="list-group">
          <li class="list-group-item">23-Oct-2025 - Logged in</li>
          <li class="list-group-item">20-Oct-2025 - Updated Billing Info</li>
          <li class="list-group-item">15-Oct-2025 - Payment received (₹1,20,000)</li>
        </ul>
      </div>
    </div>

  </div>
</body>
</html>
