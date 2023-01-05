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

{{-- Javascript Propper --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    


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
    
<!-- Need: Apexcharts -->
<script src="{{asset('template')}}/dist/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('template')}}/dist/assets/js/pages/dashboard.js"></script>

{{-- Parsley Form --}}
<script src="{{asset('template')}}/dist/assets/extensions/jquery/jquery.min.js"></script>
<script src="{{asset('template')}}/dist/assets/extensions/parsleyjs/parsley.min.js"></script>
<script src="{{asset('template')}}/dist/assets/js/pages/parsley.js"></script>

{{-- DataTables --}}
<script src="{{asset('template')}}/dist/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="{{asset('template')}}/dist/assets/js/pages/simple-datatables.js"></script>

{{-- FileUploader --}}
<script src="{{asset('template')}}/dist/assets/extensions/filepond/filepond.js"></script>
<script src="{{asset('template')}}/dist/assets/extensions/toastify-js/src/toastify.js"></script>
<script src="{{asset('template')}}/dist/assets/js/pages/filepond.js"></script>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{-- Iconify --}}
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>

{{-- CKEDITOR --}}
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script src="{{asset('template')}}/dist/assets/js/pages/ckeditor.js"></script>
</body>

</html>
