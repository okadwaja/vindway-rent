@extends('frontend.layout')

@section('content')
      <div class="mt-4">
        <div class="container">
          <div class="row align-items-end">
            <div class="col-lg-5">
              <div class="intro" data-aos="fade-right">
                <h1><strong>Daftar Mobil</strong></h1>
                <div class="custom-breadcrumbs">
                  <a href="{{ route('homepage') }}">Home</a> <span class="mx-2">/</span>
                  <strong>Daftar Mobil</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-section bg-custom">
        <div class="row mb-4">
          <div class="col-md-6 mx-auto">
            <form action="{{ route('car.index') }}" method="GET">
              <div class="input-group mb-4">
                <input type="text" name="q" class="form-control" placeholder="Cari nama mobil..." value="{{ request('q') }}">
                <div class="input-group-append">
                  <button class="btn btn-main" type="submit"><i class="fa fa-search"></i> Cari</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="container">

        @php
            $waNumber = preg_replace('/[^0-9]/', '', $setting->phone ?? '');
        @endphp

          <div class="row">
            @forelse($cars as $car)
              <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                  <div class="listing d-block align-items-stretch">
                    <div class="listing-img h-100 mr-4">
                      <img src="{{ Storage::url($car->image) }}" alt="Image" class="img-fluid" />
                    </div>
                    <div class="listing-contents h-100">
                      <h3>{{ $car->nama_mobil }}</h3>
                      <div class="rent-price">
                        <strong>Rp{{ number_format($car->price,0,",",".") }}</strong><span class="mx-1">/</span>hari
                      </div>
                      <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                        <div class="listing-feature pr-4">
                          <span class="caption">Pintu:</span>
                          <span class="number">{{ $car->pintu }}</span>
                        </div>
                        <div class="listing-feature pr-4">
                          <span class="caption">Penumpang:</span>
                          <span class="number">{{ $car->penumpang }}</span>
                        </div>
                      </div>
                      <div>
                        <p>
                        {{ $car->description }}
                        </p>

                        @php
                          $message = urlencode("Halo Vindway, saya tertarik untuk menyewa mobil *{$car->nama_mobil}*. Apakah unit ini masih tersedia? Terima kasih!");
                        @endphp
                        <p>
                          <a href="https://wa.me/{{ $waNumber }}?text={{ $message }}" target="_blank" class="btn btn-main"><i class="fa-brands fa-whatsapp"></i>  Sewa Sekarang</a>
                        </p>
                      </div>
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