@extends('frontend.layout')

@section('content')
<!-- Hero Section -->
<div class="hero hero-section position-relative d-flex flex-column justify-content-start">

  <!-- ✅ Logo di kiri atas -->
  <div>
    <img
      src="{{ asset('storage/logo/logo-removebg.png') }}"
      alt="Vindway Rent"
      style="max-height: 200px; width: auto; margin-left: 10rem; margin-top: 3rem; filter: 
        drop-shadow(0 0 3px white)
        drop-shadow(0 0 6px white)
        drop-shadow(0 0 12px white);"
      data-aos="zoom-out-down" />
  </div>

  <!-- ✅ Konten Hero -->
  <div class="hero-content text-start text-white"
    data-aos="zoom-out-up"
    style="max-width: 600px; margin-left: 10rem;">

    <h1 class="fw-bold mb-3" style="font-size: 3.5rem; color: white;">
      <strong>Solusi Sewa Mobil Terbaik & Terjangkau</strong>
    </h1>

    <p class="fw-semibold mb-4" style="font-size: 1rem; color: white;">
      <strong>Temukan mobil terbaik untuk perjalanan Anda bersama Vindway.</strong>
    </p>

    <a href="#sewa" class="btn btn-main px-4 py-2" style="font-size: 1rem;">
      <strong>Sewa Sekarang</strong>
    </a>
  </div>
</div>

<!-- <form class="trip-form" method="get" action="{{ route('car.index') }}" data-aos="fade-up">
                <div class="row align-items-center">
                  <div class="mb-3 mb-md-0 col-md-4">
                    <select name="category_id" id="category_id" class="custom-select form-control">
                      <option value="">Pilih Kategori Mobil</option>
                      @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->nama }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3 mb-md-0 col-md-4">
                    <select name="penumpang" id="penumpang" class="custom-select form-control">
                      <option value="">Jumlah Penumpang</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </div>

                  <div class="mb-3 mb-md-0 col-md-4">
                    <input
                      type="submit"
                      value="Cari"
                      class="btn btn-primary btn-block py-3"
                    />
                  </div>
                </div>
              </form> -->

<div class="site-section">
  <div class="container">
    <h2 class="text-main section-heading"><strong>Cara Pemesanan</strong></h2>
    <p class="text-main mb-5">Langkah yang mudah untuk menyewa mobil</p>

    <div class="row mb-5">
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="step d-flex align-items-start" data-aos="flip-down" data-aos-delay="100">
          <div class="step-inner ms-3">
            <span class="number-display text-main">1</span>
            <h3>Pilih Mobil</h3>
            <p>Telusuri dan pilih mobil yang sesuai dengan kebutuhan perjalananmu.</p>
            <div style="height: 34px; opacity: 0;"></div> <!--  Element kosong untuk menyamakan panjang-->
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="step d-flex align-items-start" data-aos="flip-down" data-aos-delay="100">
          <div class="step-inner ms-3">
            <span class="number-display text-main">2</span>
            <h3>Hubungi Admin melalui WhatsApp</h3>
            <p>Klik tombol WhatsApp dan langsung terhubung dengan admin untuk cek ketersediaan dan detail sewa.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="step d-flex align-items-start" data-aos="flip-down" data-aos-delay="100">
          <div class="step-inner ms-3">
            <span class="number-display text-main">3</span>
            <h3>Lakukan Transaksi</h3>
            <p>Setelah konfirmasi, lakukan pembayaran sesuai instruksi dan mobil siap digunakan sesuai jadwal.</p>
            <div style="height: 10px; opacity: 0;"></div> <!--  Element kosong untuk menyamakan panjang-->
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 text-center order-lg-2">
        <div class="img-wrap-1 mb-5" data-aos="zoom-out">
          <img
            src="{{ asset('frontend/images/feature_01.png') }}"
            alt="Image"
            class="img-fluid" />
        </div>
      </div>
      <div class="col-lg-4 ml-auto order-lg-1" data-aos="fade-right">
        <h3 class="mb-4 section-heading">
          <strong>Kami berkomitmen untuk memberikan pelayanan terbaik</strong>
        </h3>
        <p class="mb-5">
          Setiap pelanggan adalah prioritas kami. Dengan armada yang selalu prima dan tim yang profesional,
          kami siap memastikan pengalaman sewa mobil Anda berjalan lancar, nyaman, dan memuaskan.
        </p>

        <p><a href="#" class="btn btn-main">Kontak Kami</a></p>
      </div>
    </div>
    <!-- ✅ Section Keunggulan -->
    <div class="py-5">
      <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="d-flex align-items-start bg-light p-4 h-100 rounded shadow-sm" data-aos="zoom-in">
            <i class="bi bi-cash-coin text-main fs-1 me-3" style="font-size: 4rem; height: 100%; display: flex; align-items: center;"></i>
            <div class="ml-3">
              <h5 class="mb-1"><strong>Harga Terjangkau</strong></h5>
              <p class="text-muted small mb-0">Kami menawarkan tarif sewa yang kompetitif dan bersahabat di semua jenis kendaraan.</p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="d-flex align-items-start bg-light p-4 h-100 rounded shadow-sm" data-aos="zoom-in">
            <i class="bi bi-emoji-laughing-fill text-main fs-1 me-3" style="font-size: 4rem; height: 100%; display: flex; align-items: center;"></i>
            <div class="ml-3">
              <h5 class="mb-1"><strong>Layanan Terbaik</strong></h5>
              <p class="text-muted small mb-0">Pelayanan ramah, responsif, dan profesional untuk kenyamanan Anda.</p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="d-flex align-items-start bg-light p-4 h-100 rounded shadow-sm" data-aos="zoom-in">
            <i class="bi bi-car-front-fill text-main fs-1 me-3" style="font-size: 4rem; height: 100%; display: flex; align-items: center;"></i>
            <div class="ml-3">
              <h5 class="mb-1"><strong>Mobil Terawat</strong></h5>
              <p class="text-muted small mb-0">Setiap mobil rutin diperiksa dan dirawat agar selalu dalam kondisi prima.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section bg-light pt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Daftar Mobil</strong></h2>
            <p class="mb-5">
              Pilih mobil terbaik sesuai kebutuhan perjalananmu!
            </p>
          </div>
        </div>

        <div class="row">
          @foreach($cars as $car)
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
            <div class="listing d-block align-items-stretch">
              <div class="listing-img h-100 mr-4">
                <img src="{{ Storage::url($car->image) }}" alt="Image" class="img-fluid" />
              </div>
              <div class="listing-contents h-100">
                <h3>{{ $car->nama_mobil }}</h3>
                <div class="text-main">
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
                    {{ $car->description}}
                  </p>
                  <p>
                    <a href="{{ route('car.show', $car) }}" class="btn btn-main">Sewa Sekarang</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <div class="site-section bg-light pt-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <h2 class="section-heading"><strong>Testimonial</strong></h2>
            <p class="mb-5">
              Apa kata mereka yang sudah menyewa di Vindway?
            </p>
          </div>
        </div>
        <div class="row">
          @foreach($testimonials as $testimonial)
          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>
                  {{ $testimonial->pesan }}
                </p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img
                  src="{{ Storage::url($testimonial->profile) }}"
                  alt="Image"
                  style="object-fit:cover;width: 80px;height:80px;"
                  class="img-fluid mr-3" />
                <div class="author-name">
                  <span class="d-block">{{ $testimonial->name }}</span>
                  <span>{{ $testimonial->pekerjaan }}</span>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @endsection