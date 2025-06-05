@extends('frontend.layout')

@section('content')

      <div class="mt-4">
        <div class="container">
          <div class="row align-items-end ">
            <div class="col-lg-5">

              <div class="intro" data-aos="fade-right">
                <h1><strong>Syarat & Ketentuan</strong></h1>
                <div class="custom-breadcrumbs">
                  <a href="{{ route('homepage') }}">Home</a> <span class="mx-2">/</span>
                  <strong>Syarat & Ketentuan</strong></div>
              </div>

            </div>
          </div>
        </div>
      </div>

    

    <div class="site-section bg-custom">
      <div class="container">
        <div class="row">

        @forelse($blogs as $blog)
          <div class="col-lg-12 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <div class="post-entry-1-contents">
                
                <h2><strong>{{ $blog->title }}</strong></h2>
                <div>{!! $blog->description !!}</div>
                <span class="meta d-inline-block mb-3">{{ date('M d, Y', strtotime($blog->created_at)) }}</span>
              </div>
            </div>
          </div>
        @empty
            <p class="display-4 text-center mx-auto">Data yang anda cari kosong !</p>
        @endforelse

        </div>

      </div>
    </div>
@endsection