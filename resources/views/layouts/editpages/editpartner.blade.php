<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partner Details - Admin Central</title>
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
      <h2 class="fw-bold text-primary"><i class="fa fa-user-circle"></i> Partner Details</h2>
      <a href="clients.html" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    

    <!-- Tab Content -->
    <div class="tab-content" id="clientTabsContent">

      <!-- Profile Tab -->
      <div class="tab-pane fade show active" id="profile" role="tabpanel">
        <form>
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="mb-3"><i class="fa fa-user"></i> Basic Information</h5>
              <div class="row g-3">
                <div class="col-md-6">
                  <label>Client Name</label>
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
                  <label>Contact Person</label>
                  <input type="text" class="form-control" value="Rohan Mehta">
                </div>
                <div class="col-md-6">
                  <label>Email</label>
                  <input type="email" class="form-control" value="rohan@abc.com">
                </div>
                <div class="col-md-6">
                  <label>Mobile Number</label>
                  <input type="text" class="form-control" value="+91 9876543210">
                </div>
                <div class="col-md-6">
                  <label>Alternate Mobile Number</label>
                  <input type="text" class="form-control" value="+91 9876543211">
                </div>
                <div class="col-md-6">
                  <label>Address</label>
                  <textarea class="form-control" rows="2">Office 204, MG Road, Pune</textarea>
                </div>
                <div class="col-md-6">
                  <label>Account Status</label>
                  <select class="form-select">
                    <option selected>Pending Verification</option>
                    <option>Temp Blocked</option>
                    <option>Blocked</option>
                    <option>Verified</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="card mb-4">
            <div class="card-body">
              <h5 class="mb-3"><i class="fa fa-bank"></i> Bank Details</h5>
              <div class="row g-3">
                <div class="col-md-6">
                  <label>Bank Holder Name</label>
                  <input type="text" class="form-control" value="Siddhant Pawar">
                </div>
                <div class="col-md-6">
                  <label>Bank Name</label>
                  <input type="text" class="form-control" value="Kotak Bank">
                </div>
                <div class="col-md-6">
                  <label>Account Number</label>
                  <input type="text" class="form-control" value="415451411648">
                </div>
                <div class="col-md-6">
                  <label>IFSC Code</label>
                  <input type="text" class="form-control" value="IFSC20153">
                </div>
                <div class="col-md-6">
                  <label>Branch Name</label>
                  <input type="text" class="form-control" value="Thane">
                </div>
                <div class="col-md-6">
                  <label>Verification Status</label>
 <select class="form-select">
                    <option selected>Pending Verification</option>
                    <option>Temp Blocked</option>
                    <option>Blocked</option>
                    <option>Verified</option>
                  </select>                </div>
              </div>
            </div>
          </div>

          <div class="text-end mb-4">
            <button type="reset" class="btn btn-secondary"><i class="fa fa-rotate-left"></i> Reset</button>
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Save Changes</button>
          </div>
        </form>
      </div>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
