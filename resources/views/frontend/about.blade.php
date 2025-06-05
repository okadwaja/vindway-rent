@extends('frontend.layout')

@section('content')
    <div class="mt-4">
      <div class="container">
        <div class="row align-items-end ">
          <div class="col-lg-5">

            <div class="intro" data-aos="fade-right">
              <h1><strong>Tentang Kami</strong></h1>
              <div class="custom-breadcrumbs">
                <a href="{{ route('homepage') }}">Home</a> <span class="mx-2">/</span>
                <strong>Tentang Kami</strong>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-custom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
            <img src="{{ asset('frontend/images/hero_2.jpg') }}" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-lg-4 mr-auto" data-aos="fade-right">
            <h2>Car Company</h2>
            <p>{{ $setting->tentang_perusahaan }}</p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-custom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <img src="{{ asset('frontend/images/hero_1.jpg') }}" alt="Image" class="img-fluid rounded">
          </div>
          <div class="col-lg-4 ml-auto" data-aos="fade-left">
            <h2>Our History</h2>
              <p>{{ $setting->sejarah_perusahaan }}</p>
            </div>
        </div>
      </div>
    </div>
@endsection