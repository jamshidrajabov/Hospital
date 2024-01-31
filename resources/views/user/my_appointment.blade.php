<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Mening murojatlarim</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>
  

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  
@include('user.user_header')


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div align="center" style="padding:100px">
    <table class="table table-hover table-dark table-striped" >
        <tr style="text-align: center">
            <th >Shifokor</th>
            <th >Sana</th>
            <th >Jo`natilgan matn</th>
            <th >Holati</th>
            <th >Amallar</th>
        </tr>
        @foreach ($appoint as $appoints)
        <?php
        if ($appoints->status=='Tasdiqlandi')
        {
          $status_color='green';
        }
        else {
        if ($appoints->status=='Rad etildi')
        {
          $status_color='red';
        }
        else 
        {
          $status_color='white';
        }
      }
        ?>
        <tr>
            <td style="text-align: center; " >{{$appoints->doctor}}</td>
            <td style="text-align: center; color: rgb(232, 185, 185)">{{$appoints->date}}</td>
            <td style="color: rgb(194, 194, 150)">{{$appoints->message}}</td>
            <td style="text-align: center; color:{{$status_color}}">{{$appoints->status}}</td>
            <td style="text-align: center"><a onclick="return confirm('Haqiqatdan ham murojatni bekor qilmoqchimisiz?')" 
                style="btn" href="{{url('cancel_appoint',$appoints->id)}}"><i style="font-size:30px" class="bi bi-trash"></i></a></td>
            
            
        </tr>
        @endforeach
    </table>
</div>
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  


</body>
</html>