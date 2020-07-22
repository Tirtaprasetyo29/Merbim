 <!-- info panel -->
      <?php
        include "lib/koneksi.php";
      ?>
  
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid" >
      <div class="container">
        <h1 class="display-4"><span> Masa depanmu </span> <br> adalah apa yang kamu lakukan <span>Hari ini </span></h1>
        <button href=""class="btn btn-warning tombol" id="login">Login</button>
        <script>
          const login = document.querySelector('#login');
          login.addEventListener('click',function(){
            swal.fire({
                title : 'berhasil',
                text : 'terimkasih',
                type : 'success'
            });
          });
        </script>
      </div>
  </div>
 <!-- <div class="row justify-content-center">
        <class class="col-10 info-panel">  
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="file/img/SD1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="file/img/smp.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="file/img/sma.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </class>
      </div>
 -->
    <!-- container info panel
  </div> -->

      <!-- container kenapa pilih merbim -->
  <section class="pilih" id="pilih">
    <div class="container">
        <div class="row pilih0">
          <div class="col text-center huruf">
            <h2>KENAPA PILIH MERIS</h2>
          </div>
        </div>
        <div class="row pilih1 slideanim">
          <div class="col-lg-6 ">
                <img src="file/img/pilih1.jpg" alt="" class="img-fluid img1">
          </div>
          <div class="col-lg-6  huruf">
                <h2>Tempat Nyaman</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fugiat blanditiis voluptas cupiditate minus ipsam mollitia quam nesciunt facilis alias, architecto velit! Quo explicabo harum officia veritatis, a in dignissimos.</p>
          </div>
        </div>
          <div class="row pilih2 slideanim">
            <div class="col-lg-6  huruf">
                <h2>Tentor Berkualitas</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fugiat blanditiis voluptas cupiditate minus ipsam mollitia quam nesciunt facilis alias, architecto velit! Quo explicabo harum officia veritatis, a in dignissimos.</p>   
            </div>
            <div class="col-lg-6 ">
              <img src="file/img/pilih2.jpg" alt="" class="img-fluid img2">
            </div>
          </div>
          <div class="row pilih3 slideanim mb-5">
            <div class="col-lg-6 ">
                  <img src="file/img/pilih3.jpg" alt="" class="img-fluid img3">
            </div>
            <div class="col-lg-6  huruf">
                  <h2>+500 lebih telah <br> cita-cita</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fugiat blanditiis voluptas cupiditate minus ipsam mollitia quam nesciunt facilis alias, architecto velit! Quo explicabo harum officia veritatis, a in dignissimos.</p>
            </div>
          </div>
    <!-- akhir container pilih --> 
    </div>
  </section>

  <section class="prestasi" id="prestasi">
    <div class="container text-center">
        <div class="row mb-4 pt-5 prestasi">
          <div class="col text-center  huruf">
            <h2>PRESTASI MERIS</h2>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="row slideanim">
            <div class="col-sm-6">
              <i class="icofont-certificate-alt-1 icofont-4x" style="color: orange;"></i>
              <h4>Nilai sempurna untuk ulangan</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non natus necessitatibus, pariatur doloribus perspiciatis ad, quis fuga impedit ipsum, libero asperiores. Molestiae consectetur placeat natus non facere hic! Deserunt, ipsum?</p>
            </div>
            <div class="col-sm-6">
              <i class="icofont-medal icofont-4x " style="color: orange;"></i>
              <h4>Peringkat saat PTS, PAS, dan PAT</h4>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequatur accusamus quasi iusto ea ratione laboriosam ex possimus, necessitatibus, neque dolores consectetur soluta? Qui illo est ad temporibus! Aliquam, harum corporis.</p>
            </div>
          </div>
          <div class="row pres slideanim ">
            <div class="col-sm-6">
              <i class="icofont-electron icofont-4x" style="color: orange;"></i>
              <h4>Lolos STAN</h4>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Exercitationem atque ipsam corporis quaerat fuga quam quidem unde. Animi sapiente amet rerum eveniet cumque laudantium quasi, maxime consequuntur mollitia ea tenetur.</p>
            </div>
            <div class="col-sm-6">
              <i class="icofont-university icofont-4x" style="color: orange;"></i>
              <h4>Lolos PTN</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nobis voluptatem modi, illo commodi esse dolorem blanditiis, accusantium numquam non earum a nostrum placeat optio adipisci molestiae, facilis debitis eius.</p>
            </div>  
          </div>
         <!-- akhir kontainer prestasi -->
    </div>
  </section>

       <!-- container program -->
  <section class="program" id="program">
    <div class="container">
          <div class="row mb-4 pt-2 slideanim">
            <div class="col text-center huruf pt-4">
              <h2>PROGRAM</h2>
              <P>Kami memiliki beberapa program dalam membantu meningkatkan kualitas pendidikan anda</P>
            </div>
          </div>
          <div class="row slideanim" >
                <div class="col-sm-6">
                  <div class="wrimagecard wrimagecard-topimage bg1">
                      <a href="#">
                      <div class="wrimagecard-topimage_header" >
                      </div>
                      <div class="wrimagecard-topimage_title">
                        <h3>SD
                        <div class="pull-right badge" id="WrControls"></div></h3>
                      </div>
                    </a>
                  </div>
            </div>

              <div class="col-sm-6">
                  <div class="wrimagecard wrimagecard-topimage bg2">
                      <a href="#">
                      <div class="wrimagecard-topimage_header" >
                        
                      </div>
                      <div class="wrimagecard-topimage_title">
                        <h3>SMP
                        <div class="pull-right badge" id="WrGridSystem"></div></h3>
                      </div>
                      
                    </a>
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="wrimagecard wrimagecard-topimage bg3">
                    <a href="#">
                      <div class="wrimagecard-topimage_header" >
                         
                      </div>
                      <div class="wrimagecard-topimage_title">
                        <h3>SMA
                        <div class="pull-right badge" id="WrInformation"></div></h3>
                      </div>
                    </a>
                </div>
              </div>
              <div class="col-sm-6">
                  <div class="wrimagecard wrimagecard-topimage bg4">
                      <a href="#">
                        <div class="wrimagecard-topimage_header" >
                       
                      </div>
                      <div class="wrimagecard-topimage_title">
                        <h3>Alumni
                        <div class="pull-right badge" id="WrNavigation"></div></h3>
                      </div>
                      
                    </a>
                  </div>
              </div>
            </div>
            <!-- akhir row   -->
          </div>
    <!-- akhir container program-->
    </div>
  </section>

  <section class="testimoni" id="testimoni">
    <div class="container">
      <div class="row mb-4 slideanim">
        <div class="col text-center huruf pt-4">
          <h2>Apa Kata Mereka</h2>
          <P>setelah mengikuti pembelajaran bersama meris bimbel</P>
        </div>
      </div>
      <div class="wrapper">
          <div class="testimonial-carousel section-padding owl-carousel">
            <div class="single-testi">
              <div class="img-area">
                <img src="../Merbim/file/img/testimonials-1.jpg" alt="">
              </div>
              <div class="img-text">
                <h2>john doe</h2>
                <h5>SD N Tambun 03</h5>
                <hr>
                <p>"Belajar asyik dan menyenangkan"</p>
              </div>
            </div>
            <div class="single-testi">
              <div class="img-area">
                <img src="../Merbim/file/img/testimonials-2.jpg" alt="">
              </div>
              <div class="img-text">
                <h2>john doe</h2>
                <h5>SD N Tambun 03</h5>
                <hr>
                <p>"Belajar asyik dan menyenangkan"</p>
              </div>
            </div>
            <div class="single-testi">
              <div class="img-area">
                <img src="../Merbim/file/img/testimonials-3.jpg" alt="">
              </div>
              <div class="img-text">
                <h2>john doe</h2>
                <h5>SD N Tambun 03</h5>
                <hr>
                <p>"Belajar asyik dan menyenangkan"</p>
              </div>
            </div>
            <div class="single-testi">
              <div class="img-area">
                <img src="../Merbim/file/img/testimonials-4.jpg" alt="">
              </div>
              <div class="img-text">
                <h2>john doe</h2>
                <h5>SD N Tambun 03</h5>
                <hr>
                <p>"Belajar asyik dan menyenangkan"</p>
              </div>
            </div>
            <div class="single-testi">
              <div class="img-area">
                <img src="../Merbim/file/img/testimonials-5.jpg" alt="">
              </div>
              <div class="img-text">
                <h2>john doe</h2>
                <h5>SD N Tambun 03</h5>
                <hr>
                <p>"Belajar asyik dan menyenangkan"</p>
              </div>
            </div>
          </div> 
          <!-- container testimoni -->
          </div>
      </div>
  </section>