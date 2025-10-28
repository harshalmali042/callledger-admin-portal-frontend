@extends('layouts.main', ['title' => 'Total Clients'])

@section('content')
    <div class="row layout-top-spacing">
        <div id="referralMessage" class="alert alert-success d-none" role="alert">
            Referral link copied successfully!
        </div>

        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Total Clients</h5>
                    <button class="btn btn-primary" id="Add Client" data-bs-toggle="modal" data-bs-target="#addClientModal" >
                        Add Client
                    </button>
                </div>
                <div class="card-body table-responsive">
                   <table class="table table-bordered table-hover align-middle">
  <thead class="text-center text-black">
    <tr>
      <th>#</th>
      <th>Company Name</th>
      <th>Client Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Plan</th>
      <th>Payment</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td><strong>ABC Technologies Pvt Ltd</strong></td>
      <td>Rohan Mehta</td>
      <td>rohan@abc.com</td>
      <td>+91 9876543210</td>
      <td>Pro Plan</td>
      <td><span class="badge bg-success">Paid</span></td>
      <td><span class="badge bg-success">Active</span></td>
      <td class="text-center">
      <a href="/clientdetail">
        <button class="btn btn-sm btn-info">View Details</button>
        </a>
      </td>
    </tr>

    <tr>
      <td>2</td>
      <td><strong>XYZ Pvt Ltd</strong></td>
      <td>Neha Patil</td>
      <td>neha@xyz.com</td>
      <td>+91 9898989898</td>
      <td>Basic Plan</td>
      <td><span class="badge bg-warning text-dark">Pending</span></td>
      <td><span class="badge bg-danger">Inactive</span></td>
      <td class="text-center">
        <button class="btn btn-sm btn-info">View Details</button>
      </td>
    </tr>
  </tbody>
</table>

                </div>
            </div>
        </div>

    </div>



     <!-- Add Client Modal -->
<div class="modal fade" id="addClientModal" tabindex="-1" aria-labelledby="addClientModal" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="addClientModal">Add New Client</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="addClientModal">
        <div class="modal-body">

          <div class="row g-3">
            <div class="col-md-6">
              <label for="client_name" class="form-label">Client Name</label>
              <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Enter Client name" required>
            </div>

            <div class="col-md-6">
              <label for="company_name" class="form-label">Company Name</label>
              <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter company name" required>
            </div>

            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" required>
            </div>

            <div class="col-md-6">
              <label for="mobile" class="form-label">Mobile Number</label>
              <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile number" required>
            </div>

             <div class="col-md-6">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>

            <div class="col-md-6">
              <label for="plan_type" class="form-label">Plan Type</label>
              <select class="form-select" id="plan_type" name="plan_type" required>
                <option value="">-- Select Plan --</option>
                <option value="Free">Free</option>
                <option value="Basic">Basic</option>
                <option value="Premium">Premium</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="status" class="form-label">Status</label>
              <select class="form-select" id="status" name="status" required>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
              </select>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter address"></textarea>
            </div>
          </div>

        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Client</button>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
@push('scripts')
   <script>
        $(document).ready(function() {

            // Setup CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            // Fetch merchants via backend proxy
            $.ajax({
                url: '/total-clients-proxy',
                method: 'GET',
                contentType: 'application/json',
                dataType: 'json',
                data: JSON.stringify({}),
                success: function(res) {
                    const tbody = $('table tbody');
                    tbody.empty();

                    if (res.status === 'success' && res.data.length > 0) {
                        res.data.forEach((client, index) => {
                            tbody.append(`
                        <tr>
                            <td>${index + 1}</td>
                            <td>${client.user_name}</td>
                            <td>${client.company_name}</td>
                            <td>${client.mobile}</td>
                            <td>${new Date().toLocaleDateString()}</td>
                            <td>
                                <span class="badge ${client.status === 'Active' ? 'bg-success' : 'bg-warning'}">
                                    ${client.status}
                                </span>
                            </td>
                            <td>${client.plan_type}</td>
                        </tr>
                    `);
                        });
                    } else {
                        tbody.html(`
                    <tr>
                        <td colspan="100%" class="text-center text-muted py-4 text-red">
                            No More Clients
                        </td>
                    </tr>
                `);
                    }
                },
                error: function(xhr, status, error) {
                    let errMsg = "Something went wrong while fetching merchants.";

                    try {
                        const res = JSON.parse(xhr.responseText);
                        errMsg = res.message || errMsg;
                    } catch (e) {}

                    alert(errMsg);
                }
            });

        });
    </script> 
@endpush
