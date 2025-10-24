<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
<title>Callledger | {{ $title ?? 'My App' }} </title>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}"/>
<link href="{{ asset('layouts/vertical-dark-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('layouts/vertical-dark-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('layouts/vertical-dark-menu/loader.js') }}"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{ asset('src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('layouts/vertical-dark-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('layouts/vertical-dark-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{ asset('src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('src/assets/css/light/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('src/assets/css/dark/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />

<link href="{{ asset('src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('src/assets/css/light/components/modal.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('src/assets/css/light/users/account-setting.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('src/assets/css/dark/components/modal.css') }}" rel="stylesheet" type="text/css" />