<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Xabar Jo`natish</title>
</head>
<body>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">

<div class="container" align="center" style="padding-top: 100px"> 
  @if (session()->has('message'))
  <div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif
<br>
                <form action="{{url('sendemail',$data->id)}}" method="post" enctype='multipart/form-data'>
                  @csrf
                     <!-- ====================Greeting============================ -->
                    <div class="input-group container">
                        <span class="input-group-text"> Greeting</span>
                        <input type="text" name="greeting" class="form-control" required="" placeholder="Greeting">
                    </div>
                    <br>
                    <!-- ====================Body============================ -->
                    <div class="input-group container">
                        <span class="input-group-text">Body</span>
                        <input type="text" name="body" required="" class="form-control" placeholder="Body">
                    </div>


                    <br>
                    <!-- ====================Action Text============================ -->
                    <div class="input-group container">
                        <span class="input-group-text">Action Text</span>
                        <input type="text" name="actiontext" required="" class="form-control" placeholder="Action Text">
                    </div>
                    <br>
                    <!-- ====================Action Url============================ -->
                    <div class="input-group container">
                        <span class="input-group-text">Action Url</span>
                        <input type="text" name="actionurl" required="" class="form-control" placeholder="Action Url">
                    </div>
                    <br>
                    <!-- ====================End Part============================ -->
                    <div class="input-group container">
                        <span class="input-group-text">End Part</span>
                        <input type="text" name="endpart" required="" class="form-control" placeholder="End Part">
                    </div>
<br>
                        
                      <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">Jo`natish</button>
                      </div>
                </form>
            </div>
</body>
</html>