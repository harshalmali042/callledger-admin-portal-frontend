@extends('layouts.main', ['title' => 'Total Clients'])

@section('content')
    <div class="row layout-top-spacing">


        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Total Member</h5>

                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>#</th> 
                                <th>Company Name</th> 
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>Joined On</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>DMS </td>
                                <td>Ravi Patil</td>
                                <td>ravi@abc.com</td>
                                <td>9874561230</td>
                                <td>2025-02-10</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                  <td>1</td>
                                <td>DMS </td>
                                <td>Ravi Patil</td>
                                <td>ravi@abc.com</td>
                                <td>9874561230</td>
                                <td>2025-02-10</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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
