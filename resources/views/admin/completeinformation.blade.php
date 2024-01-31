<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <base href="/public">
@include('admin.css')
  </head>
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
              <button id="bannerClose" class="btn border-0 p-0"> <i class="mdi mdi-close text-white me-0"></i>
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
      
        
        <div  class="container-fluid page-body-wrapper">
         
         <h1 style="text-align: center">Murojat haqida ma`lumot</h1>
         <table class="table">
          <tr>
            <td>
              <a style="width:200px" class="btn btn-success" style="color: green; font-size:17px;" href="{{url('approved',$appoints->id)}}">Tasdiqlash</a>
              <br><br>
               <a style="width:200px" class="btn btn-danger" style="color: rgb(225, 27, 57); font-size:17px;" href="{{url('canceled',$appoints->id)}}">Rad qilish</a>
               <br><br>
                <a style="width:200px" class="btn btn-primary" style="color: #f1f1f3; font-size:17px;" href="{{url('emailview',$appoints->id)}}">Javob berish</a>
             
            </td>
          </tr>
         </table>
         
        </div>
    
  
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
    </div>
  </body>
</html>