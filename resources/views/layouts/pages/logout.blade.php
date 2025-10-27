@extends('layouts.main', ['title' => 'Dashboard'])

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height:70vh;">
    <div class="card component-card_1 shadow-lg" style="max-width:500px; width:100%;">
        
   

        <!-- Card Body -->
        <div class="card-body d-flex flex-column align-items-center text-center p-4">

            <!-- Icon -->
            <div class="icon mb-3 bg-light rounded-circle d-flex align-items-center justify-content-center" style="width:70px; height:70px;">
                <!-- Logout SVG Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="red" viewBox="0 0 24 24">
                    <path d="M16 17l5-5-5-5M21 12H9M12 19H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2h7"/>
                </svg>
            </div>

            <!-- Text -->
            <h4 class="card-title mb-2">Logout</h4>
            <p class="card-text text-muted mb-4">Click the button below to sign out from your account.</p>

            <!-- Button -->
                    <a href="{{-- route('partner.logout') --}}" class="btn btn-danger">Logout</a>

         
        </div>

    </div>
</div>


@endsection
