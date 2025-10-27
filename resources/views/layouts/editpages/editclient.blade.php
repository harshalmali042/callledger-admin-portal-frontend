<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Client - Admin Central</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    body { background-color: #f8f9fa; }
    .card { border-radius: 1rem; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
    label { font-weight: 600; color: #495057; }
    .form-control, .form-select { border-radius: 0.6rem; }
  </style>
</head>

<body>
  <div class="container my-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-bold text-primary"><i class="fa fa-edit"></i> Edit Client</h2>
      <a href="client-details.html" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form>
      <!-- Basic Information -->
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="mb-3"><i class="fa fa-id-card"></i> Basic Information</h5>
          <div class="row g-3">
            <div class="col-md-6">
              <label>Company Name</label>
              <input type="text" class="form-control" value="ABC Technologies Pvt Ltd">
            </div>
            <div class="col-md-6">
              <label>Client Type</label>
              <select class="form-select">
                <option selected>Partner</option>
                <option>Client</option>
              </select>
            </div>
            <div class="col-md-6">
              <label>Client Name</label>
              <input type="text" class="form-control" value="Rohan Mehta">
            </div>
            <div class="col-md-6">
              <label>Email</label>
              <input type="email" class="form-control" value="rohan@abc.com">
            </div>
            <div class="col-md-6">
              <label>Phone</label>
              <input type="text" class="form-control" value="+91 9876543210">
            </div>
            <div class="col-md-6">
              <label>Referral Code</label>
              <input type="text" class="form-control" value="+91 9876543210">
            </div>
             <div class="col-md-6">
              <label>Address</label>
              <textarea class="form-control" rows="2">Office 204, MG Road, Pune, Maharashtra</textarea>
            </div>
            <div class="col-md-6">
              <label>Team Size</label>
              <input type="text" class="form-control" value="50">
            </div>
             <div class="col-md-6">
              <label>Payment Method</label>
              <select class="form-select">
                <option selected>Online (Razorpay)</option>
                <option>Bank Transfer</option>
                <option>UPI</option>
              </select>
            </div>
            <div class="col-md-6">
              <label>Account Status</label>
              <select class="form-select">
                <option selected>Active</option>
                <option>Inactive</option>
                <option>Suspended</option>
              </select>
            </div>
            
          </div>
        </div>
      </div>


      <!-- Subscription Details -->
      <div class="card mb-4">
        <div class="card-body">
          <h5 class="mb-3"><i class="fa fa-credit-card"></i> Subscription Details</h5>
          <div class="row g-3">
            <div class="col-md-6">
              <label>Plan Name</label>
              <input type="text" class="form-control" value="Pro Annual Plan">
            </div>
            <div class="col-md-3">
              <label>Start Date</label>
              <input type="date" class="form-control" value="2025-01-01">
            </div>
            <div class="col-md-3">
              <label>End Date</label>
              <input type="date" class="form-control" value="2025-12-31">
            </div>
            <div class="col-md-4">
              <label>Payment Status</label>
              <select class="form-select">
                <option selected>Paid</option>
                <option>Pending</option>
                <option>Overdue</option>
              </select>
            </div>
            <div class="col-md-4">
              <label>Amount</label>
              <input type="number" class="form-control" value="120000">
            </div>
            <div class="col-md-4">
              <label>Renewal Date</label>
              <input type="date" class="form-control" value="2026-01-01">
            </div>
          </div>
        </div>
      </div>

      <!-- Buttons -->
      <div class="text-end mb-4">
        <button type="reset" class="btn btn-secondary"><i class="fa fa-rotate-left"></i> Reset</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save Changes</button>
      </div>
    </form>

  </div>
</body>
</html>
