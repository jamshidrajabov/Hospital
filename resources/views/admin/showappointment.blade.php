<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Murojatlar</title>
</head>
<body>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
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
                      <th>T/R</th>
                        <th style="padding:10px">Murojatchi ismi</th>
                        <th style="padding:10px">Elektron pochta</th>
                        <th style="padding:10px">Shifokor ismi</th>
                        <th style="padding:10px">Holati</th>
                    </tr>

                    @foreach ($data as $appoints)
                    <?php
                    if ($appoints->status=="Rad etildi")
                    {
                      $status_color='red';
                    }

                    if ($appoints->status=="Tasdiqlandi")
                    {
                      $status_color='green';
                    }

                    if ($appoints->status=="Jarayonda")
                    {
                      $status_color='black';
                    }

                    ?>                    
                    <tr align="center" style="border: 3px solid black; background-color: rgb(213, 240, 207); color: green">
                        <td style="border: 1px solid black; padding: 10px;"><a href="{{url('completeinformation',$appoints->id)}}">{{($data->currentpage()-1)*$data->perpage()+$loop->index+1}}</a></td>
                        <td style="border: 1px solid black; padding: 10px;"><a href="{{url('completeinformation',$appoints->id)}}">{{$appoints->name}}</a> </td>
                        <td style="border: 1px solid black; padding: 10px;"><a href="{{url('completeinformation',$appoints->id)}}">{{$appoints->email}}</a></td>
                        <td style="border: 1px solid black; padding: 10px;"><a href="{{url('completeinformation',$appoints->id)}}">{{$appoints->doctor}}</a></td>
                        <td style="border: 1px solid black; padding: 10px;  color:{{$status_color}}"> <a href="{{url('completeinformation',$appoints->id)}}">{{$appoints->status}}</a></td>
                        
                    </tr>
                    @endforeach
                    
                </table> <br>
                {{$data->links()}}
                <br>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->

</body>
</html>