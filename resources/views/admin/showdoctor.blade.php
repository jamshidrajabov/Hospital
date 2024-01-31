<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Shifokorlar ro`yxati</title>
</head>
<body>
  
  @include('admin.css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            
            <div align="center" style="padding-top: 100px">
                <table style="background-color: black; text-align:center;">
                    <tr>
                        <th style="padding:10px">Shifokor ismi</th>
                        <th style="padding:10px">Telefon raqami</th>
                        <th style="padding:10px">Mutaxassislik</th>
                        <th style="padding:10px">Xona raqami</th>
                        <th style="padding:10px">Surati</th>
                        <th style="padding:10px">O`chirish</th>
                        <th style="padding:10px">Tahrirlash</th>
                    </tr>

                    @foreach ($data as $doctors)                   
                    <tr align="center" style="border: 3px solid black; background-color: rgb(213, 240, 207); color: green">
                        <td style="border: 1px solid black; padding: 10px;">{{$doctors->name}}</td>
                        <td style="border: 1px solid black; padding: 10px;">{{$doctors->phone}}</td>
                        <td style="border: 1px solid black; padding: 10px;">{{$doctors->specialty}}</td>
                        <td style="border: 1px solid black; padding: 10px;">{{$doctors->room}}</td>
                        <td style="border: 1px solid black; padding: 10px;"><img style="height:150px; height:100px" src="../doctorimages/{{$doctors->image}}" alt=""></td>
                        <td style="border: 1px solid black; padding: 10px;"><a onclick=" return confirm('Haqiqatdan ham shifokorni o`chirmoqchimisiz?')" class="btn" style="color: rgb(237, 18, 47); font-size:22px;" href="{{url('deletedoctor',$doctors->id)}}"><i class="bi bi-trash"></i></a></td>
                        <td style="border: 1px solid black; padding: 10px;"><a class="btn" style="color: rgb(63, 33, 210); font-size:22px;" href="{{url('updatedoctor',$doctors->id)}}"><i class="bi bi-pen"></i></a></td>
                    </tr>
                    @endforeach
                    
                </table>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  
</body>
</html>