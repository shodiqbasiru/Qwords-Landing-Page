@extends('layouts.main')

@section('section')
    <div class="row justify-content-center text-center mx-0">
        <div class="col-lg-6 py-1">
            <h1 class="judul">{{ $data['header'] }}</h1>
            <h1 class="subcolor typewrite" data-period="1000" data-type='[ "Promo Menarik", "Pelayanan Terbaik", "Resource Terbaik" ]'>
                  <span class="wrap">I</span>
            </h1>
            <p class="pt-2">{{ $data['text'] }}.</p>
        </div>
    </div>
    <div class="row justify-content-center search mx-0">
        <div class="col-lg-5">
            <form action="">
                <div class="row text-center">
                    <div class="col-sm-12">
                        <h5 class="title-search">Cari nama domain aja dulu</h3>
                    </div>
                </div>
                <div class="row input-rounded">
                    <div class="col-sm-7 col-7 pe-0">
                      <input type="text" class="form-control input-search" placeholder="Search" aria-label="search">
                    </div>
                    <div class="col-sm-2 col-5 px-0">
                        <label class="visually-hidden" for="inlineFormSelectPref">domain</label>
                        <select class="form-select" id="inlineFormSelectPref">
                          <option value="1">.com</option>
                          <option value="2">.id</option>
                          <option value="3">.org</option>
                        </select>
                    </div>
                    <div class="col-sm-3 col-12 px-0">
                        <button type="submit" class="btn btn-search">Cari</button>
                    </div>
                </div>
                <div class="row justify-content-center text-center domain">
                    <div class="col-sm-3 col-12">
                        <p>
                            <span class="name-domain">.com</span> Rp.165.000
                        </p>
                    </div>
                    <div class="col-sm-3 col-12">
                        <p>
                            <span class="name-domain">.id</span> Rp.225.000
                        </p>
                    </div>
                    <div class="col-sm-3 col-12">
                        <p>
                            <span class="name-domain">.info</span> Rp.77.000
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('section-2')
    <div class="row justify-content-center">
        <div class="col-lg-9 text-center py-4">
            <h2 class="subcolor">{{ $data2['header'] }}</h2>
            <p>{{ $data2['text'] }}</p>
        </div>
    </div>
    <div class="content-card">
        <div class="card card-1">
            <div class="imgBx">
                <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-vhp.svg" alt="">
            </div>
            <div class="contentBx">
                <h3 class="discount-price">Rp.24.500</h3>
                <h2 class="price">Rp.14.500</h2>
                <h3>Value Cloud Hosting</h3>
                <h2>VCH1</h2>
                    <div class="detail pt-5">
                        <div class="ket">  
                            <p>Disk : 3GB</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Bandwidth : Unlimited</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Core CPU : 0.5 Core</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Addon/parked domain : No</p>
                        </div>
                    </div>
                    <a href="#">Order Sekarang</a>
            </div>
        </div>
        <div class="card card-2">
            <div class="imgBx">
                <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-signature.svg" alt="">
            </div>
            <div class="contentBx">
                <h3 class="discount-price">Rp.109.000</h3>
                <h2 class="price">Rp.84.900</h2>
                <h3>Unlimited Hosting</h3>
                <h2>Signature</h2>
                    <div class="detail pt-5">
                        <div class="ket">  
                            <p>Disk : Unlimited</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Bandwidth : Unlimited</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Core CPU : 1 Core</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Addon/parked domain : 5/5</p>
                        </div>
                    </div>
                    <a href="#">Order Sekarang</a>
            </div>
        </div>
        <div class="card card-3">
            <div class="imgBx">
                <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-hpch.svg" alt="">
            </div>
            <div class="contentBx">
                <h3 class="discount-price">Rp.80.000</h3>
                <h2 class="price">Rp.69.000</h2>
                <h3>High Performance</h3>
                <h2>HPCH Bisnis 1</h2>
                    <div class="detail pt-5">
                        <div class="ket">  
                            <p>Disk : 3GB</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Bandwidth : Unlimited</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Core CPU : 1 Core</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Addon/parked domain : -</p>
                        </div>
                    </div>
                    <a href="#">Order Sekarang</a>
            </div>
        </div>
        <div class="card card-4">
            <div class="imgBx">
                <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/ic-startup.svg" alt="">
            </div>
            <div class="contentBx">
                <h3 class="discount-price">Rp.135.000</h3>
                <h2 class="price">Rp.75.000</h2>
                <h3>Cloud VPS KVM SSD</h3>
                <h2>VPS SC1</h2>
                    <div class="detail pt-5">
                        <div class="ket">  
                            <p>Disk : 25GB</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Bandwidth : Unlimited</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Core CPU : 1 Core</p>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="ket">
                            <p>Addon/parked domain : Unlimited</p>
                        </div>
                    </div>
                    <a href="#">Order Sekarang</a>
            </div>
        </div>
    </div>
@endsection

@section('section-3')
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="subcolor">Lihat Juga Layanan Kami Yang Lain</h2>
            <p>Layanan unggulan dengan teknologi terbaik untuk website anda</p>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card text-center" style="width: 18rem;">
              <img src="asset/img/icon_layanan_5.png" alt="">
              <h5 class="card-title">SSL</h5>
                      <div class="card-body">
                <p class="card-text  text-start">
                    Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.
                </p>
                <h6>Mulai dari</h6>
                <p class="card-price">Rp.112.000 /thn</p>
                <a href="#" class="btn buttons">Order Sekarang</a>
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card text-center" style="width: 18rem;">
              <img src="asset/img/icon_layanan_4.png" alt="">
              <h5 class="card-title">Dedicated Server</h5>
                      <div class="card-body">
                <p class="card-text  text-start">
                    Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas
                </p>
                <h6>Mulai dari</h6>
                <p class="card-price">Rp.499.000 /thn</p>
                <a href="#" class="btn buttons">Order Sekarang</a>
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card card-3 text-center" style="width: 18rem;">
              <img src="asset/img/icon_layanan_3.png" alt="">
              <h5 class="card-title">Colocation Server</h5>
                      <div class="card-body">
                <p class="card-text  text-start">
                    Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher
                </p>
                <h6>Mulai dari</h6>
                <p class="card-price">Rp.500.000 /thn</p>
                <a href="#" class="btn buttons">Order Sekarang</a>
              </div>
            </div>
        </div>
    </div>
@endsection

@section('section-4')
    <div class="row justify-content-center text-center py-5">
        <div class="col-lg-8">
            <h2 class="subcolor">Solusi Terbaik dari Kami
            </h2>
            <p>
                Kami menawarkan solusi terbaik untuk segala kebutuhan website dan sistem anda. Mulai dari blog hingga website bisnis dan perusahaan.
            </p>
        </div>
    </div>
    <div class="row justify-content-center ">
        <div class="box col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="a-box">
                <div class="container-box text-center">
                    <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-corporate.png">
                    <div class="text-box">
                      <h3>Perusahaan</h3>
                      <p>Wujudkan perusahaan profesional dan berkelas dengan dukungan website terbaik dan fitur keamanan ekstra</p>
                    </div>
                    <a href="#" class="btn buttons">Selengkapnya..</a>
                </div>
            </div>
        </div>
        <div class="box col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="a-box">
                <div class="container-box text-center">
                    <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-organisasi.png">
                    <div class="text-box">
                        <h3>Organisasi dan Komunitas</h3>
                        <p>Website sebagai wadah perkumpulan komunitas atau organisasi di internet</p>
                    </div>
                    <a href="#" class="btn buttons">Selengkapnya..</a>
                </div>
            </div>
        </div>
        <div class="box col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="a-box">
                <div class="container-box text-center">
                    <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-umkm.png">
                    <div class="text-box">
                        <h3>UMKM dan Toko Online</h3>
                        <p>Mendukung kebutuhan website yang fokus dalam pemasaran barang/ jasa secara online/p>
                    </div>
                    <a href="#" class="btn buttons">Selengkapnya..</a>
                </div>
            </div>
        </div>
        <div class="box col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="a-box">
                <div class="container-box text-center">
                    <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-sekolah.png">
                    <div class="text-box">
                        <h3>Sekolah</h3>
                        <p>Infrastruktur terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring.</p>
                    </div>
                    <a href="#" class="btn buttons">Selengkapnya..</a>
                </div>
            </div>
        </div>
        <div class="box col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="a-box">
                <div class="container-box text-center">
                    <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-developer.png">
                    <div class="text-box">
                        <h3>Developer</h3>
                        <p>Tersedia paket hosting dengan spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version Control.</p>
                    </div>
                    <a href="#" class="btn buttons">Selengkapnya..</a>
                </div>
            </div>
        </div>
        <div class="box col-xl-4 col-lg-6 col-md-6 col-12">
            <div class="a-box">
                <div class="container-box text-center">
                    <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/product/img-blogger.png">
                    <div class="text-box">
                        <h3>Blogger dan Personal</h3>
                        <p>Memfasilitasi blogger dengan infrastruktur website terbaik serta template website premium untuk tampil lebih profesional.</p>
                    </div>
                    <a href="#" class="btn buttons">Selengkapnya..</a>
                </div>
            </div>
        </div>
    </div>
      
@endsection

@section('section-5')
    <div class="row">
        <div class="col-lg-6 col-12 banner">
            
        </div>
        <div class="col-lg-6 col-12 banner-text">
            <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/banner/logo_bikin_website.png" alt="logo-bikin-website">
            <h3>Bikin website impian dengan mudah disini</h3>
            <p>Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin Website Impian dengan mudah disini, desain website elegan dan mudah dikelola.</p>
            <h3>Hanya 1 Jutaan!</h3>
            <a href="" class="btn buttons">Selengkapnya</a>
        </div>
    </div>
@endsection

@section('section-6')

    <div class="row">
        <div class="col-sm-12  mt-5 mx-auto">
            <div class="subtitle text-center py-3">
                <h2 class="subcolor">Komitmen Qwords</h2>
                <p>Berbagai Alasan Mengapa Pelanggan memilih Qwords</p>
            </div>  

          
          <div id="flex-container" class="solutions">
            <div id="left-zone">
              <ul class="list">
                <li class="item">
                  <input type="radio" id="radio_solution-1" name="basic_carousel" checked="checked" />
                  <label class="label_solution-1 " for="radio_solution-1">Layanan 24/7</label>
                  <div class="content-test content_solution-1">
                    <span class="picto"></span>
                    <h1>Layanan 24/7</h1>
                    <p>Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_solution-2" name="basic_carousel" />
                  <label class="label_solution-2 " for="radio_solution-2">Panduan Manual Lengkap</label>
                  <div class="content-test content_solution-2">
                    <span class="picto"></span>
                    <h1>Panduan Manual Lengkap</h1>
                    <p>Qwords dilengkapi dengan halaman knowledge base yang berisi tutorial dan tips seputar pengelolaan website. Dapat diakses dengan mudah dan solutif.</p>
                    <br>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_solution-3" name="basic_carousel" />
                  <label class="label_solution-3 " for="radio_solution-3">Uptime 99.99%</label>
                  <div class="content-test content_solution-3">
                    <span class="picto"></span>
                    <h1>Uptime 99.99%</h1>
                    <p>Uptime Network & Server di atas 99.99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering.”</p>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_solution-4" name="basic_carousel" />
                  <label class="label_solution-4 " for="radio_solution-4">Jaminan keamanan</label>
                  <div class="content-test content_solution-4">
                    <span class="picto"></span>
                    <h1>Jaminan keamanan</h1>
                    <p>Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.</p>
                    <br>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_solution-5" name="basic_carousel" />
                  <label class="label_solution-5 " for="radio_solution-5">Clustered DNS</label>
                  <div class="content-test content_solution-5">
                    <span class="picto"></span>
                    <h1>Clustered DNS</h1>
                    <p>DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.</p>
                    <br>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_solution-6" name="basic_carousel" />
                  <label class="label_solution-6 " for="radio_solution-6">High Enterprise Server</label>
                  <div class="content-test content_solution-6">
                    <span class="picto"></span>
                    <h1>High Enterprise Server</h1>
                    <p>Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka.</p>
                    <br>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_solution-7" name="basic_carousel" />
                  <label class="label_solution-7 " for="radio_solution-7">Tier 1 Network</label>
                  <div class="content-test content_solution-7">
                    <span class="picto"></span>
                    <h1>Tier 1 Network</h1>
                    <p>Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.</p>
                    <br>
                  </div>
                </li>
                <li class="item">
                  <input type="radio" id="radio_solution-8" name="basic_carousel" />
                  <label class="label_solution-8 " for="radio_solution-8">Peering Network</label>
                  <div class="content-test content_solution-8">
                    <span class="picto"></span>
                    <h1>Peering Network</h1>
                    <p>Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.</p>
                    <br>
                  </div>
                </li>
              </ul>
            </div>
            <div id="right-zone"></div>
          </div>
        </div>
    </div>    

@endsection

@section('section-7')
    <div class="row my-3 justify-content-center">
        <div class="col-lg-5 col-12 banner pb-4">
            <img src="https://www.qwords.com/wp-content/themes/qwords_v10/assets/images/illustration/img_money_back_guarantee.svg" alt="" class="mx-auto d-block">
        </div>
        <div class="col-lg-5 col-12 banner-text">
            <h3>Garansi 30 Hari Uang Kembali</h3>
            <p>Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku hingga 30 hari setelah hosting aktif.</p>
        </div>
    </div>
@endsection

@section('section-8')
    <div class="row text-center">
        <div class="col-lg-12">
            <h2 class="subcolor">Telah Dipercaya oleh 45.000+ Pelanggan Aktif</h2>
        </div>
        <div class="col-lg-12">
            <div class="feedback">
                  <div class="rating">
                    <input type="radio" name="rating" id="rating-5">
                    <label for="rating-5"></label>
                    <input type="radio" name="rating" id="rating-4">
                    <label for="rating-4"></label>
                    <input type="radio" name="rating" id="rating-3">
                    <label for="rating-3"></label>
                    <input type="radio" name="rating" id="rating-2">
                    <label for="rating-2"></label>
                    <input type="radio" name="rating" id="rating-1">
                    <label for="rating-1"></label>
                    <div class="emoji-wrapper">
                      <div class="emoji">
                        <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                          <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534" />
                          <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff" />
                          <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347" />
                          <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63" />
                          <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff" />
                          <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347" />
                          <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63" />
                          <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347" />
                        </svg>
                        <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                          <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347" />
                          <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534" />
                          <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff" />
                          <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347" />
                          <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff" />
                          <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534" />
                          <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff" />
                          <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347" />
                          <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff" />
                        </svg>
                        <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                          <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347" />
                          <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff" />
                          <circle cx="340" cy="260.4" r="36.2" fill="#3e4347" />
                          <g fill="#fff">
                            <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10" />
                            <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z" />
                          </g>
                          <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347" />
                          <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff" />
                        </svg>
                        <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                          <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347" />
                          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                          <g fill="#fff">
                            <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z" />
                            <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81" />
                          </g>
                          <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347" />
                          <g fill="#fff">
                            <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1" />
                            <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81" />
                          </g>
                          <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347" />
                          <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff" />
                        </svg>
                        <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                          <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                          <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b" />
                          <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f" />
                          <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff" />
                          <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b" />
                          <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f" />
                          <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff" />
                          <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347" />
                          <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b" />
                        </svg>
                        <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <g fill="#ffd93b">
                            <circle cx="256" cy="256" r="256" />
                            <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z" />
                          </g>
                          <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4" />
                          <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea" />
                          <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88" />
                          <g fill="#38c0dc">
                            <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z" />
                          </g>
                          <g fill="#d23f77">
                            <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z" />
                          </g>
                          <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347" />
                          <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b" />
                          <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2" />
                        </svg>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection
