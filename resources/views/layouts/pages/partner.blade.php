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
                    <button class="btn btn-primary" id="copyReferralBtn" data-link="https://example.com/referral">
                        Copy Referral Link
                    </button>
                </div>
                <div class="card-body table-responsive">
                   <table class="table table-bordered table-hover align-middle">
  <thead class="text-center text-black">
    <tr>
      <th>#</th>
      <th>Partner Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Join Date</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td><strong>ABC Technologies Pvt Ltd</strong></td>
      <td>rohan@abc.com</td>
      <td>+91 9876543210</td>
      <td>20/08/2025</td>
      <td><span class="badge bg-success">Active</span></td>
      <td class="text-center">
        <button class="btn btn-sm btn-info">View Details</button>
      </td>
    </tr>

    <tr>
       <td>2</td>
      <td><strong>ABC Technologies Pvt Ltd</strong></td>
      <td>rohan@abc.com</td>
      <td>+91 9876543210</td>
      <td>20/08/2025</td>
      <td><span class="badge bg-success">Active</span></td>
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

            // Referral copy logic
            $('#copyReferralBtn').on('click', function() {
                // Example: your referral base URL
                const link = "https://callledger.com/signup?ref";

                $.get('/get-refer-id', function(data) {
                    const refer_id = data.refer_id;
                    navigator.clipboard.writeText(link + '=' + refer_id)
                        .then(() => {
                            const messageBox = document.getElementById('referralMessage');
                            messageBox.textContent = 'Referral link copied: ' + link + '=' +
                                refer_id;
                            messageBox.classList.remove('d-none');

                            // Auto-hide after 2.5 seconds
                            setTimeout(() => {
                                messageBox.classList.add('d-none');
                            }, 2500);
                        })
                        .catch(err => console.error('Failed to copy:', err));
                }).fail(function() {
                    const messageBox = document.getElementById('referralMessage');
                    messageBox.textContent = 'Unable to copy referral link.';
                    messageBox.classList.remove('d-none');
                    setTimeout(() => {
                        messageBox.classList.add('d-none');
                    }, 2500);
                });

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
