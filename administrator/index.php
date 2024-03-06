<?php
    session_start();
    //cek session 
    if ($_SESSION['login'] != 'admin') {
      //kembali ke halaman login
      header('location: ../index.php');
    }
    include('../config.php');
    include('header.php');
    include('inavbar.php');

    
    
    ?>

<section class="hero" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 m-auto">
                            <div class="hero-text">

                                <h1 class="text-white mb-4"><u class="text-info">Selamat Datang </u> di wesite ini</h1>

                                <div class="d-flex justify-content-center align-items-center">
                                    <span class="date-text">Nama : <?= $_SESSION['nama']; ?> </span>

                                    <span class="location-text"><?= $_SESSION['status']; ?></span>
                                </div>

                               </div>
                        </div>
                    </div>
                </div>

                <div class="video-wrap">
                    <video autoplay="" loop="" muted="" class="custom-video" poster="">
                        <source src="../videos/pexels-pavel-danilyuk-8716790.mp4" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>

            






    


    <?php
     




    include('footer.php');