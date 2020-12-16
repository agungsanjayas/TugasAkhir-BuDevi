@extends('layouts.master')

@section('title','Contact')

@section('container')
<!-- SLIDER CONTACT -->
<div class="containt-contact">
  <div class="slide-one-item home-slider owl-carousel">
    <div class="site-blocks-cover overlay" style="background-image: url('frontend/images/hero_bg_2.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-12 text-center text-md-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">OUR CAMPGROUND</h1>
            <p><a href="#contact" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url('frontend/images/hero_bg_4.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-12 text-center text-md-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">OUR CAMPGROUND</h1>
            <p><a href="#contact" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover overlay" style="background-image: url('frontend/images/hero_bg_3.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-12 text-center text-md-center" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">OUR CAMPGROUND</h1>
            <p><a href="#contact" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END SLIDER CONTACT -->

<div id="contact" class="section db">
  <div class="justify-content-center">
    <div class="section-title text-center contact-title">
      <h3>OUR CAMPGROUND</h3>
      <p>Kunjungi kami SEGERA di alamat ini atau ANDA akan menyesal</p>
    </div><!-- end title -->

    <div class="bg-image overlay-success rounded mb-5" style="background-image: url('frontend/images/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">

      <div class="container-fluid containt-maps">
        <div class="row align-items-center">
          <div class="col">
            <h3>RAKA'S HOUSE</h3>
            <p>Rumah Edeg Ada Kolam Renang</p>
            <p>Jl. Maju Mundur Entot</p>
            <p>Bekasi Barat - 17421</p>
            <p>Indonesia</p>
            <br><br>
            <p>+62 812 3456 1234</>
              <p>+62 812 3456 3456</p>
              <p>(021) 14045 </p>
              <i class="fab fa-instagram fa-2x"><a href="https://www.instagram.com/indonesianliverpool_/">LIVERPOOL INDONESIA</a></i>
          </div>
          <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.9686805343426!2d106.95450601449377!3d-6.267849463104586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d0a55ea8877%3A0x93c3f3fde5993e3!2sCluster%20Mediterania%20Regency%20Cikunir!5e0!3m2!1sen!2sid!4v1607658365171!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include ('layouts.partials.footer')
@endsection