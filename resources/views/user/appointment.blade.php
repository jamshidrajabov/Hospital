<div class="page-section">
    <div class="container">
      <h1 style="font-size:200%; color: rgb(49, 192, 49)" class="text-center wow fadeInUp">Shifokor bilan uchrashuv belgilash</h1>

      <form class="main-form" action="{{url('appointment')}}" method="post" >
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" required="" name="name" class="form-control" placeholder="To`liq Ism va Familiya kiriting..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text"required="" name="email" class="form-control" placeholder="Elektron pochta kiriting..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date"required="" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" required="" id="doctor" class="custom-select">

              <option value="general">- - Shifokor tanlang - -</option>
              @foreach ($doctor as $doctors)
                <option value="{{$doctors->name}}">{{$doctors->name}}---Mutaxassislik---{{$doctors->specialty}}</option>
              @endforeach
              
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text"required="" name="number" class="form-control" placeholder="Telefon raqam..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message"required="" id="message" class="form-control" rows="6" placeholder="Xabar matnini kiriting.."></textarea>
          </div>
        </div>

        <button style="background: green" type="submit" class="btn btn-success mt-3 wow zoomIn">Jo`natish</button>
      </form>
    </div>
  </div> <!-- .page-section -->