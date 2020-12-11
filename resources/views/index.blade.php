@extends('layout/bootstrap')
@section('title', 'Auto Fish')
    
@section('container');
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Get work done <span>faster</span> <br> and <span>better</span> with us </h1>
    <a href="" class="btn btn-primary tombol">Our Work</a>
    <p></p>
  </div>
</div>
<div class="container">

  {{-- Info Panel --}}
  <div class="row justify-content-center">
    <div class="col-10 info-panel">
      <div class="row">
        <div class="col-lg">
          <img src="../img/employee.png" alt="Employee" class="float-left">
          <h4>24 Hours</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-lg">
          <img src="../img/hires.png" alt="High Res" class="float-left">
          <h4>High-Res</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-lg">
          <img src="../img/security.png" alt="Security"class="float-left">
          <h4>Security</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
    </div>
  </div>

  {{-- Working Space --}}
  <div class="row workingspace">
    <div class="col-lg-6">
      <img src="../img/workingspace.png" alt="Workingspace" class="img-fluid">
    </div>
    <div class="col-lg-6">
      <h3>You <span>Work</span> Like At <span>Home</span></h3>
        <p>Bekerja Dengan suasana hati yang lebih asik dan mempelajari hal baru setiap harinya.</p>
        <a href="" class="btn btn-primary tombol">Galery</a>
    </div>
  </div>

  {{-- Testimonial --}}
  <section class="testimonial">
    <div class="row justify-content-center quote">
      <div class="col-lg-8">
        <h5>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis, corrupti."</h5>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-6 justify-content-center d-flex">
        <figure class="figure">
          <img src="../img/img1.png" class="figure-img img-fluid rounded-circle" alt="Testi 1">
        </figure>
        <figure class="figure">
          <img src="../img/img2.png" class="figure-img img-fluid rounded-circle utama" alt="Testi 2">
          <figcaption class="figure-caption">
            <h5>Sunny Yee</h5>
            <p>Designer</p>
          </figcaption>
        </figure>
        <figure class="figure">
          <img src="../img/img3.png" class="figure-img img-fluid rounded-circle" alt="Testi 3">
        </figure>
      </div>
    </div>
  </section>

</div>
@endsection