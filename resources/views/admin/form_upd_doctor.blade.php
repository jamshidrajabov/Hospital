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
                <form action="{{url('editdoctor',$data->id)}}" method="post" enctype='multipart/form-data'>
                  @csrf
                     <!-- ====================Name============================ -->
                    <div class="input-group container">
                        <span class="input-group-text"> Shifokor ismnini kiriting</span>
                        <input type="text" name="name" value="{{$data->name}}" class="form-control" required="" placeholder="Ism kiriting">
                    </div>
                    <br>
                    <!-- ====================Number============================ -->
                    <div class="input-group container">
                        <span class="input-group-text">Telefon raqamini kiriting</span>
                        <input type="number" name="number" value="{{$data->phone}}" required="" class="form-control" placeholder="Telefon raqam kiriting">
                    </div>

                    <br>
                    <!-- ====================Speciality============================ -->
                    <div class="input-group container">
                        <span class="input-group-text">Mutaxassislikni tanlang</span>
                        <select required="" class="form-select" name="specialty">
                            <option value="{{$data->specialty}}">{{$data->specialty}}</option>
                            <option value="Teri">Teri</option>
                            <option value="Yurak">yurak</option>
                            <option value="Ko`z">ko`z</option>
                            <option value="Burun">burun</option>
                          </select>
                    </div>

                    <br>
                    <!-- ====================Room number============================ -->
                    <div class="input-group container">
                        <span class="input-group-text">Xona raqamini kiriting</span>
                        <input type="text" name="room" value="{{$data->room}}" required="" class="form-control" placeholder="Xona raqamini kiriting">
                    </div>

                    <br>
                    <!-- ====================Doctor Image============================ --> 
                    <h3 align="center">Oldingi Rasm</h1>
                    <img  style="height: 200px" src="doctorimages/{{$data->image}}" alt="">  
                      <br>
                                   
                      <div class="input-group mb-3">
                        <input type="file"  class="form-control" name="file"  id="file">
                        <label class="input-group-text" for="inputGroupFile02">Shifokor rasmini yuklang</label>
                      </div>      
                      <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">Jo`natish</button>
                      </div>
                </form>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>