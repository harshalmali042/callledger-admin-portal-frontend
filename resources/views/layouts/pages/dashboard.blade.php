@extends('layouts.main', ['title' => 'Dashboard'])

@section('content')
<div class="row layout-top-spacing g-4">

    {{-- ====================== GRAPH SECTION (LEFT SIDE) ====================== --}}
    <div class="col-xl-6 col-lg-12">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0 text-primary">📊 Client Growth Analytics</h5>
                <div>
                    <button class="btn btn-outline-primary btn-sm active" id="dailyBtn">Daily</button>
                    <button class="btn btn-outline-primary btn-sm" id="monthlyBtn">Monthly</button>
                    <button class="btn btn-outline-primary btn-sm" id="yearlyBtn">Yearly</button>
                </div>
            </div>
            <div class="card-body" style="height: 300px;">
                <canvas id="clientChart" style="width: 100%; height: 100%;"></canvas>
            </div>
        </div>
    </div>

    {{-- ====================== DASHBOARD CARDS (RIGHT SIDE) ====================== --}}
    <div class="col-xl-6 col-lg-12">
        <div class="row g-3">
            @php
                $cards = [
                    ['title' => 'Total Earn', 'id' => 'totalEarnings', 'iconColor' => '#0d6efd', 'icon' => '₹'],
                    ['title' => 'Total Clients', 'id' => 'totalClients', 'iconColor' => '#000', 'icon' => '👥'],
                    ['title' => 'Total Members', 'id' => 'totalMembers', 'iconColor' => '#6610f2', 'icon' => '👨‍👩‍👧'],
                    ['title' => 'Total Partners', 'id' => 'totalPartners', 'iconColor' => '#fd7e14', 'icon' => '🤝'],
                    ['title' => 'Paid Clients', 'id' => 'paidClients', 'iconColor' => '#198754', 'icon' => '💰'],
                    ['title' => 'Free Trial Clients', 'id' => 'freeTrialClients', 'iconColor' => '#17a2b8', 'icon' => '🕒'],
                    ['title' => 'Expired Plans', 'id' => 'expiredPlans', 'iconColor' => '#dc3545', 'icon' => '⛔'],
                    ['title' => 'Expiring (15 days)', 'id' => 'expiringSoon', 'iconColor' => '#ffc107', 'icon' => '⚠️'],
                    ['title' => 'Total Calls', 'id' => 'totalCalls', 'iconColor' => '#6f42c1', 'icon' => '📞'],
                ];
            @endphp

            @foreach ($cards as $card)
            <div class="col-md-6 col-sm-12">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body d-flex align-items-center justify-content-between p-3">
                        <div class="d-flex align-items-center">
                            <div class="icon me-3 bg-light rounded-circle d-flex align-items-center justify-content-center"
                                style="width:45px; height:45px; font-size: 20px; color: {{ $card['iconColor'] }}">
                                {{ $card['icon'] }}
                            </div>
                            <div>
                                <h6 class="card-title mb-1">{{ $card['title'] }}</h6>
                                <p class="card-text fw-bold mb-0 fs-6" id="{{ $card['id'] }}">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
$(document).ready(function() {
    $(".card-text").text("Loading...");

    // === Fetch Dashboard Data ===
    $.ajax({
        url: '/dashboard-data',
        method: 'GET',
        dataType: 'json',
        success: function(res) {
            if (res.success && res.data) {
                const d = res.data;
                $("#totalEarnings").text(`₹${d.total_earn}`);
                $("#totalClients").text(d.total_clients);
                $("#paidClients").text(d.total_paid_clients);
                $("#freeTrialClients").text(d.free_trial_clients);
                $("#expiredPlans").text(d.expired_plans);
                $("#expiringSoon").text(d.expiring_soon);
                $("#totalMembers").text(d.total_members);
                $("#totalPartners").text(d.total_partners);
                $("#totalCalls").text(d.total_calls);
            } else $(".card-text").text("0");
        },
        error: () => $(".card-text").text("0")
    });

    // === Chart.js Setup ===
    const ctx = document.getElementById('clientChart').getContext('2d');
    const dataSets = {
        daily: { labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'], data: [5, 8, 4, 10, 6, 12, 9] },
        monthly: { labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'], data: [30, 45, 28, 60, 70, 95] },
        yearly: { labels: ['2021', '2022', '2023', '2024', '2025'], data: [250, 400, 520, 680, 740] }
    };

    let chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: dataSets.daily.labels,
            datasets: [{
                label: 'New Clients',
                data: dataSets.daily.data,
                borderColor: '#0d6efd',
                backgroundColor: 'rgba(13,110,253,0.2)',
                fill: true,
                tension: 0.3
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            scales: { y: { beginAtZero: true } },
            plugins: {
                legend: { display: true, position: 'top' },
                title: { display: true, text: 'Clients Joined (Daily)' }
            }
        }
    });

    // === Chart Toggle ===
    function updateChart(type) {
        chart.data.labels = dataSets[type].labels;
        chart.data.datasets[0].data = dataSets[type].data;
        chart.options.plugins.title.text = `Clients Joined (${type.charAt(0).toUpperCase() + type.slice(1)})`;
        chart.update();
        $('button').removeClass('active');
        $(`#${type}Btn`).addClass('active');
    }

    $("#dailyBtn").click(() => updateChart('daily'));
    $("#monthlyBtn").click(() => updateChart('monthly'));
    $("#yearlyBtn").click(() => updateChart('yearly'));
});
</script>
@endpush
