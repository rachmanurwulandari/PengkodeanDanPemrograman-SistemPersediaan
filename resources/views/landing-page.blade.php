@extends('layouts.main')

@section('container')
    <section>
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center">

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1>Optimalkan Persediaan dan Keuntungan Bisnis</h1>
                        <h2>Kelola stok, monitor penjualan, dan atur keuangan dengan lebih mudah dan efisien. Coba sekarang
                            untuk meningkatkan keuntungan toko anda !!</h2>
                        <div>
                            <a href="/inventory" class="btn-get-started scrollto">Coba Inventory</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="assets/img/section-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- End Hero -->

        <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
                <div class="container">

                    <div class="row justify-content-between">
                        <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                            <img src="assets/img/tentang-kami.png" class="img-fluid" alt="" data-aos="zoom-in">
                        </div>
                        <div class="col-lg-6 pt-5 pt-lg-0">
                            <h3 data-aos="fade-up">Tentang Kami</h3>
                            <p data-aos="fade-up" data-aos-delay="100">
                                Mbah Jiwo adalah sebuah sistem informasi yang dirancang untuk membantu pengelolaan barang,
                                penjualan, dan keuangan pada toko secara efektif dan efisien. Aplikasi ini akan memberikan
                                kemudahan bagi pemilik toko untuk mengelola stok barang, memonitor penjualan, serta mengatur
                                keuangan dengan lebih mudah. Dengan demikian, Mbah Jiwo ini dapat membantu pemilik toko
                                untuk mengoptimalkan kinerja toko serta meningkatkan keuntungan bisnis.
                            </p>
                            <div class="row">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <i class="bi bi-box-seam-fill"></i>
                                    <h4>Kelola Persediaan</h4>
                                    <p>Kelola inventaris dengan efisien dan mudah menggunakan platform kami untuk meningkatkan produktivitas
                                    </p>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-wallet"></i>
                                    <h4>Kelola Keuangan</h4>
                                    <p>Mudahkan proses pembayaran Anda dengan platform kami yang aman dan dapat diandalkan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End About Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title2">
                        <h2>Layanan Kami</h2>
                        <p>Lihatlah layanan hebat yang kami tawarkan!</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-handbag"></i></div>
                                <h4 class="title"><a href="">Inventaris</a></h4>
                                <p class="description">Melacak dan mengelola stok produk secara efisien, memastikan ketersediaan barang yang akurat dan memberikan informasi terkini mengenai jumlah dan jenis produk yang tersedia.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-wallet2"></i></div>
                                <h4 class="title"><a href="">Pembayaran</a></h4>
                                <p class="description">Mengefisiensi pembelian produk melalui berbagai metode pembayaran yang aman dan terpercaya, memastikan pengalaman berbelanja yang nyaman dan tanpa hambatan.</p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bi bi-currency-dollar"></i></div>
                                <h4 class="title"><a href="">Keuangan</a></h4>
                                <p class="description">Pelacakan dan analisis secara real-time terhadap transaksi, pendapatan, dan pengeluaran, membantu pengguna dalam mengelola dan mengoptimalkan keuangan mereka dengan lebih efektif dan efisien.</p>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Services Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
                <div class="container">

                    <div class="section-title" data-aos="fade-up">
                        <h2>Tim</h2>
                        <p>Tim Kami yang senantiasa membantu</p>
                    </div>

                    <div class="row">

                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                            <div class="member">
                                <img src="{{ asset("assets/img/faris.png") }}" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Faris Faikar R.</h4>
                                        <span>Chief Executive Officer</span>
                                    </div>
                                    <div class="social">
                                        <a href="https://www.twitter.com/farisfaikar_r"><i class="bi bi-twitter"></i></a>
                                        <a href="https://www.facebook.com/farisfaikar.r"><i class="bi bi-facebook"></i></a>
                                        <a href="https://www.instagram.com/farisfaikar_r"><i class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/farisfaikar"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                            <div class="member">
                                <img src="{{ asset("assets/img/adit.png") }}" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Aditya Kurniawan</h4>
                                        <span>Product Manager</span>
                                    </div>
                                    <div class="social">
                                        <a href="https://www.twitter.com/adityakurniawan"><i class="bi bi-twitter"></i></a>
                                        <a href="https://www.facebook.com/Aditya_Kurniawan"><i class="bi bi-facebook"></i></a>
                                        <a href="https://www.instagram.com/adit_k01"><i class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/aditya_kurniawan"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                            <div class="member">
                                <img src="{{ asset("assets/img/dzaki.png") }}" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>M. Dzaki Arrozaq</h4>
                                        <span>CTO</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href="https://www.facebook.com/dzakijoo"><i class="bi bi-facebook"></i></a>
                                        <a href="https://www.instagram.com/dzakijoo"><i class="bi bi-instagram"></i></a>
                                        <a href="https://www.linkedin.com/in/muhammad-dzaki-arrozaq-62718021b"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                            <div class="member">
                                <img src="{{ asset("assets/img/team/team-4.jpg") }}" class="img-fluid" alt="">
                                <div class="member-info">
                                    <div class="member-info-content">
                                        <h4>Dea Putri A.</h4>
                                        <span>Accountant</span>
                                    </div>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Team Section -->

            <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Mitra</h2>
                        <p>Mereka mempercayai kami</p>
                    </div>

                    <div class="clients-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid"
                                    alt=""></div>
                            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid"
                                    alt=""></div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Clients Section -->

            <!-- ======= Contact Us Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact Us</h2>
                        <p>Contact us the get started</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Kampus UNNES, Sekaran, Gunungpati, Kota Semarang, 50229, Jawa Tengah</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>farisfaikar.r@gmail.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+62 896-4645-8649</p>
                                </div>

                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.647557853069!2d110.38984787450579!3d-7.050635592951611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b3a1e3a1529%3A0x4cda1f81771c5e97!2sUNNES%20-%20Universitas%20Negeri%20Semarang!5e0!3m2!1sen!2sid!4v1686494061516!5m2!1sen!2sid" 
                                    frameborder="0" style="border:0; width: 100%; height: 290px;"
                                    allowfullscreen>
                                </iframe>
                            </div>

                        </div>

                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="200">
                            <form action="{{ route('store-contact-us') }}" method="POST" role="form" class="php-email-form">
                                @csrf
                                <div class="row">
                                    <div class="form-group">
                                      <label for="nama">Nama</label>
                                      <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama" required>
                                    </div>
                                  </div>
                                  <div class="form-group mt-3 mb-3">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" required>
                                  </div>
                                  <label for="perihal">Perihal</label>
                                  <select class="form-select rounded-0 mb-3" aria-label="Default select example" name="perihal" required>
                                    <option value="Pelayanan Pelanggan" selected>Pelayanan Pelanggan</option>
                                    <option value="Umpan Balik">Umpan Balik</option>
                                  </select>
                                  <div class="form-group mt-3 mb-3">
                                    <label for="judul">Judul</label>
                                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan judul" required>
                                  </div>
                                  <div class="form-group mt-3 mb-3">
                                    <label for="pesan">Keluhan / Masukan</label>
                                    <textarea class="form-control" name="pesan" rows="10" placeholder="Tulis pesan" required></textarea>
                                  </div>
                                  <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                  </div>
                                  <div class="text-center"><button type="submit">Kirim</button></div>
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Us Section -->

        </main><!-- End #main -->
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>
    </section>
@endsection
