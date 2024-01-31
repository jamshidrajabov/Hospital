<div class="page-section">
    <div class="container">
      <h1 style="font-size:200%; color: rgb(49, 192, 49)" class="text-center mb-5 wow fadeInUp">Bizning Shifokorlar</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach ($doctor as $doctors)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img style="height: 100%; width:100%" src="doctorimages/{{$doctors->image}}" alt="">
              <div class="meta">
                <a href="tel:{{$doctors->phone}}"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctors->name}}</p>
              <span class="text-sm text-grey">{{$doctors->specialty}} shifokori</span>
            </div>
          </div>
        </div>
        @endforeach
  


      </div>
    </div>
  </div>