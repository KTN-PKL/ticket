<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulinyuk</title>
    
    <link rel="stylesheet" href="{{asset('template')}}/dist/assets/css/main/app.css">
    <link rel="stylesheet" href="{{asset('template')}}/dist/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="{{asset('template')}}/dist/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('template')}}/dist/assets/images/logo/favicon.png" type="image/png">
    
<link rel="stylesheet" href="{{asset('template')}}/dist/assets/css/shared/iconly.css">

{{-- datatable --}}
<link rel="stylesheet" href="{{asset('template')}}/dist/assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="{{asset('template')}}/dist/assets/css/pages/simple-datatables.css">

{{-- fileuploader --}}
<link rel="stylesheet" href="{{asset('template')}}/dist/assets/extensions/filepond/filepond.css">
<link rel="stylesheet" href="{{asset('template')}}/dist/assets/extensions/filepond-plugin-image-preview/filepond-plugin-image-preview.css">
<link rel="stylesheet" href="{{asset('template')}}/dist/assets/extensions/toastify-js/src/toastify.css">
<link rel="stylesheet" href="{{asset('template')}}/dist/assets/css/pages/filepond.css">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @include('layouts/sidebar')     
        </div>


        <div id="main">
            <header class="mb-3">
                <a href="{{asset('template')}}/dist/#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
{{-- <div class="page-heading">
    <h3>Selamat Datang, Admin</h3>
</div> --}}
<div class="page-content">
    
    <section class="row">
        @yield('content')
    </section>
</div>

            {{-- <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="{{asset('template')}}/dist/https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer> --}}
        </div>
    </div>
    <script src="{{asset('template')}}/dist/assets/js/bootstrap.js"></script>
    <script src="{{asset('template')}}/dist/assets/js/app.js"></script>
    
{{-- <!-- Need: Apexcharts -->
<script src="{{asset('template')}}/dist/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('template')}}/dist/assets/js/pages/dashboard.js"></script> --}}

{{-- DataTables --}}
<script src="{{asset('template')}}/dist/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="{{asset('template')}}/dist/assets/js/pages/simple-datatables.js"></script>

{{-- FileUploader --}}
<script src="{{asset('template')}}/dist/assets/extensions/filepond/filepond.js"></script>
<script src="{{asset('template')}}/dist/assets/extensions/toastify-js/src/toastify.js"></script>
<script src="{{asset('template')}}/dist/assets/js/pages/filepond.js"></script>

</body>

</html>
