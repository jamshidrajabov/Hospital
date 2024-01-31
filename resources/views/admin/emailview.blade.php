<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xabar jo`natish</title>
</head>
<body>
    <base href="/public">
    @include('admin.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
      <body>
        <div class="container-scroller">
          <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
              <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                <div class="ps-lg-1">
                  <div class="d-flex align-items-center justify-content-between">
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                  <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
                  <button id="bannerClose" class="btn border-0 p-0">
                    <i class="mdi mdi-close text-white me-0"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- partial:partials/_sidebar.html -->
          @include('admin.sidebar')
          <!-- partial -->
          @include('admin.navbar')
            <!-- partial -->
            
            <div class="container-fluid page-body-wrapper">
              @include('admin.form_email_doctor')
            </div>
    
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
    
</body>
</html>