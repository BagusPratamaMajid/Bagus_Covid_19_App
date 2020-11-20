<?php  

function get_CURL($url)
  {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
  
    return json_decode($result, true);
  }

  // API Berdasarkan Provinsi
  $result = get_CURL('https://api.kawalcorona.com/indonesia/provinsi/');

  // API Negara Indonesia
  $result_2 = get_CURL('https://api.kawalcorona.com/indonesia/');

  // API Global
  $result_3 = get_CURL('https://api.kawalcorona.com/');

  // API Global Total
  $result_4 = get_CURL('https://api.kawalcorona.com/confirmed/'); //Positif
  $result_5 = get_CURL('https://api.kawalcorona.com/recovered/'); //Sembuh
  $result_6 = get_CURL('https://api.kawalcorona.com/deaths/'); //Meninggal


  // Data Api Covid Global
  $globals = $result_3;
  $globals_positif = $result_4[0]['TotalConfirmed'];
  $globals_sembuh = $result_5[0]['TotalRecovered'];
  $globals_meninggal = $result_6[0]['TotalDeaths'];
  
  
  // Data Api Covid Tiap Provinsi

  // 1. DKI JAKARTA
  $jakarta1 = $result[0]['attributes']['Provinsi'];
  $jakarta2 = $result[0]['attributes']['Kasus_Posi'];
  $jakarta3 = $result[0]['attributes']['Kasus_Semb'];
  $jakarta4 = $result[0]['attributes']['Kasus_Meni'];
  
  // 2. JAWA TIMUR
  $jatim1 = $result[1]['attributes']['Provinsi'];
  $jatim2 = $result[1]['attributes']['Kasus_Posi'];
  $jatim3 = $result[1]['attributes']['Kasus_Semb'];
  $jatim4 = $result[1]['attributes']['Kasus_Meni'];

  // 3. JAWA BARAT
  $jabar1 = $result[2]['attributes']['Provinsi'];
  $jabar2 = $result[2]['attributes']['Kasus_Posi'];
  $jabar3 = $result[2]['attributes']['Kasus_Semb'];
  $jabar4 = $result[2]['attributes']['Kasus_Meni'];

  // 4. JAWA TENGAH
  $jateng1 = $result[3]['attributes']['Provinsi'];
  $jateng2 = $result[3]['attributes']['Kasus_Posi'];
  $jateng3 = $result[3]['attributes']['Kasus_Semb'];
  $jateng4 = $result[3]['attributes']['Kasus_Meni'];

  // 5. SULAWESI SELATAN
  $sulsel1 = $result[4]['attributes']['Provinsi'];
  $sulsel2 = $result[4]['attributes']['Kasus_Posi'];
  $sulsel3 = $result[4]['attributes']['Kasus_Semb'];
  $sulsel4 = $result[4]['attributes']['Kasus_Meni'];

  // 6. SUMATERA BARAT
  $sumbar1 = $result[5]['attributes']['Provinsi'];
  $sumbar2 = $result[5]['attributes']['Kasus_Posi'];
  $sumbar3 = $result[5]['attributes']['Kasus_Semb'];
  $sumbar4 = $result[5]['attributes']['Kasus_Meni'];

  // 7. Riau
  $riau1 = $result[6]['attributes']['Provinsi'];
  $riau2 = $result[6]['attributes']['Kasus_Posi'];
  $riau3 = $result[6]['attributes']['Kasus_Semb'];
  $riau4 = $result[6]['attributes']['Kasus_Meni'];

  // 8. Kalimantan Timur
  $kaltim1 = $result[7]['attributes']['Provinsi'];
  $kaltim2 = $result[7]['attributes']['Kasus_Posi'];
  $kaltim3 = $result[7]['attributes']['Kasus_Semb'];
  $kaltim4 = $result[7]['attributes']['Kasus_Meni'];

  // 9. Sumatera Utara
  $sumut1 = $result[8]['attributes']['Provinsi'];
  $sumut2 = $result[8]['attributes']['Kasus_Posi'];
  $sumut3 = $result[8]['attributes']['Kasus_Semb'];
  $sumut4 = $result[8]['attributes']['Kasus_Meni'];

  
  // 10. Bali
  $bali1 = $result[9]['attributes']['Provinsi'];
  $bali2 = $result[9]['attributes']['Kasus_Posi'];
  $bali3 = $result[9]['attributes']['Kasus_Semb'];
  $bali4 = $result[9]['attributes']['Kasus_Meni'];
  
  // 11. Kalimantan Selatan
  $kalsel1 = $result[10]['attributes']['Provinsi'];
  $kalsel2 = $result[10]['attributes']['Kasus_Posi'];
  $kalsel3 = $result[10]['attributes']['Kasus_Semb'];
  $kalsel4 = $result[10]['attributes']['Kasus_Meni'];

  // 12. Banten
  $banten1 = $result[11]['attributes']['Provinsi'];
  $banten2 = $result[11]['attributes']['Kasus_Posi'];
  $banten3 = $result[11]['attributes']['Kasus_Semb'];
  $banten4 = $result[11]['attributes']['Kasus_Meni'];

  // 13. Papua
  $papua1 = $result[12]['attributes']['Provinsi'];
  $papua2 = $result[12]['attributes']['Kasus_Posi'];
  $papua3 = $result[12]['attributes']['Kasus_Semb'];
  $papua4 = $result[12]['attributes']['Kasus_Meni'];

  // 14. Sumatera Selatan
  $sumsel1 = $result[13]['attributes']['Provinsi'];
  $sumsel2 = $result[13]['attributes']['Kasus_Posi'];
  $sumsel3 = $result[13]['attributes']['Kasus_Semb'];
  $sumsel4 = $result[13]['attributes']['Kasus_Meni'];

  // 15. Aceh
  $aceh1 = $result[14]['attributes']['Provinsi'];
  $aceh2 = $result[14]['attributes']['Kasus_Posi'];
  $aceh3 = $result[14]['attributes']['Kasus_Semb'];
  $aceh4 = $result[14]['attributes']['Kasus_Meni'];

  // 16. Suluwesi Utara
  $sulut1 = $result[15]['attributes']['Provinsi'];
  $sulut2 = $result[15]['attributes']['Kasus_Posi'];
  $sulut3 = $result[15]['attributes']['Kasus_Semb'];
  $sulut4 = $result[15]['attributes']['Kasus_Meni'];

  // 17. Sulawesi Tenggara
  $sultenggara1 = $result[16]['attributes']['Provinsi'];
  $sultenggara2 = $result[16]['attributes']['Kasus_Posi'];
  $sultenggara3 = $result[16]['attributes']['Kasus_Semb'];
  $sultenggara4 = $result[16]['attributes']['Kasus_Meni'];

  // 18. Kalimantan Tengah
  $kalteng1 = $result[17]['attributes']['Provinsi'];
  $kalteng2 = $result[17]['attributes']['Kasus_Posi'];
  $kalteng3 = $result[17]['attributes']['Kasus_Semb'];
  $kalteng4 = $result[17]['attributes']['Kasus_Meni'];

  // 19. Papua Barat
  $pabar1 = $result[18]['attributes']['Provinsi'];
  $pabar2 = $result[18]['attributes']['Kasus_Posi'];
  $pabar3 = $result[18]['attributes']['Kasus_Semb'];
  $pabar4 = $result[18]['attributes']['Kasus_Meni'];

  // 20. Kepulauan Riau
  $kepri1 = $result[19]['attributes']['Provinsi'];
  $kepri2 = $result[19]['attributes']['Kasus_Posi'];
  $kepri3 = $result[19]['attributes']['Kasus_Semb'];
  $kepri4 = $result[19]['attributes']['Kasus_Meni'];

  // 21. Nusa Tenggara Barat
  $ntb1 = $result[20]['attributes']['Provinsi'];
  $ntb2 = $result[20]['attributes']['Kasus_Posi'];
  $ntb3 = $result[20]['attributes']['Kasus_Semb'];
  $ntb4 = $result[20]['attributes']['Kasus_Meni'];

  // 22. Yogyakarta
  $yogyakarta1 = $result[21]['attributes']['Provinsi'];
  $yogyakarta2 = $result[21]['attributes']['Kasus_Posi'];
  $yogyakarta3 = $result[21]['attributes']['Kasus_Semb'];
  $yogyakarta4 = $result[21]['attributes']['Kasus_Meni'];

  // 23. Maluku
  $maluku1 = $result[22]['attributes']['Provinsi'];
  $maluku2 = $result[22]['attributes']['Kasus_Posi'];
  $maluku3 = $result[22]['attributes']['Kasus_Semb'];
  $maluku4 = $result[22]['attributes']['Kasus_Meni'];

  // 24. Gorontalo
  $gorontalo1 = $result[23]['attributes']['Provinsi'];
  $gorontalo2 = $result[23]['attributes']['Kasus_Posi'];
  $gorontalo3 = $result[23]['attributes']['Kasus_Semb'];
  $gorontalo4 = $result[23]['attributes']['Kasus_Meni'];

  // 25. Maluku Utara
  $malut1 = $result[24]['attributes']['Provinsi'];
  $malut2 = $result[24]['attributes']['Kasus_Posi'];
  $malut3 = $result[24]['attributes']['Kasus_Semb'];
  $malut4 = $result[24]['attributes']['Kasus_Meni'];

  // 26. Lampung
  $lampung1 = $result[25]['attributes']['Provinsi'];
  $lampung2 = $result[25]['attributes']['Kasus_Posi'];
  $lampung3 = $result[25]['attributes']['Kasus_Semb'];
  $lampung4 = $result[25]['attributes']['Kasus_Meni'];

  // 27. Kalimantan Barat
  $kalbar1 = $result[26]['attributes']['Provinsi'];
  $kalbar2 = $result[26]['attributes']['Kasus_Posi'];
  $kalbar3 = $result[26]['attributes']['Kasus_Semb'];
  $kalbar4 = $result[26]['attributes']['Kasus_Meni'];

  // 28. Jambi
  $jambi1 = $result[27]['attributes']['Provinsi'];
  $jambi2 = $result[27]['attributes']['Kasus_Posi'];
  $jambi3 = $result[27]['attributes']['Kasus_Semb'];
  $jambi4 = $result[27]['attributes']['Kasus_Meni'];

  // 29. Bengkulu
  $bengkulu1 = $result[28]['attributes']['Provinsi'];
  $bengkulu2 = $result[28]['attributes']['Kasus_Posi'];
  $bengkulu3 = $result[28]['attributes']['Kasus_Semb'];
  $bengkulu4 = $result[28]['attributes']['Kasus_Meni'];

  // 30. Sulawesi Barat
  $sulbar1 = $result[29]['attributes']['Provinsi'];
  $sulbar2 = $result[29]['attributes']['Kasus_Posi'];
  $sulbar3 = $result[29]['attributes']['Kasus_Semb'];
  $sulbar4 = $result[29]['attributes']['Kasus_Meni'];

  // 31. Sulawesi Tengah
  $sulteng1 = $result[30]['attributes']['Provinsi'];
  $sulteng2 = $result[30]['attributes']['Kasus_Posi'];
  $sulteng3 = $result[30]['attributes']['Kasus_Semb'];
  $sulteng4 = $result[30]['attributes']['Kasus_Meni'];

  // 32. Kalimantan Utara
  $kalut1 = $result[31]['attributes']['Provinsi'];
  $kalut2 = $result[31]['attributes']['Kasus_Posi'];
  $kalut3 = $result[31]['attributes']['Kasus_Semb'];
  $kalut4 = $result[31]['attributes']['Kasus_Meni'];

  // 33. Bangka Belitung
  $bangka1 = $result[32]['attributes']['Provinsi'];
  $bangka2 = $result[32]['attributes']['Kasus_Posi'];
  $bangka3 = $result[32]['attributes']['Kasus_Semb'];
  $bangka4 = $result[32]['attributes']['Kasus_Meni'];

  // 34. Nusa Tenggara Timur
  $ntt1 = $result[33]['attributes']['Provinsi'];
  $ntt2 = $result[33]['attributes']['Kasus_Posi'];
  $ntt3 = $result[33]['attributes']['Kasus_Semb'];
  $ntt4 = $result[33]['attributes']['Kasus_Meni'];

  // Data Api Covid Keseluruhan Indonesia
  $nama_negara = $result_2[0]['name'];
  $total_positif = $result_2[0]['positif'];
  $total_sembuh = $result_2[0]['sembuh'];
  $total_meninggal = $result_2[0]['meninggal'];
  $total_dirawat = $result_2[0]['dirawat'];
  
  date_default_timezone_set('Asia/Jakarta');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Beranda Page</title>
  </head>

  

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top" id="nav">
      <a class="navbar-brand" href="#">COVID 19</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search.." aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
     </nav>

 <!-- Carousel -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel/virus.png" class="d-block w-100" alt="corona">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/distancing.png" class="d-block w-100" alt="distance">
    </div>
    <div class="carousel-item">
      <img src="img/carousel/hand_wash.png" class="d-block w-100" alt="wash">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- HEADER -->
<div class="container-fluid">
 <div class="card text-center mt-5 border-0">
   <div class="card-body">
     <h1 class="card-title font-weight-bold"><img src="img/emoji_gif/bendera.gif" alt="flag" class="card-img" style="width:7rem; height:12vh"> Data Pemantauan COVID 19 di <?= $nama_negara; ?> <img src="img/emoji_gif/bendera.gif" alt="flag" class="card-img" style="width:7rem; height:12vh"></h1>
     <h3 class="card-text font-weight-light">Dari 2 Maret 2020 sampai <?= date('d F Y'); ?></h3>


    <!-- Card API Data Keseluruhan -->
      <div class="card-deck mt-5 text-white">
       <div class="card bg-warning">
         <div class="card-body">
           <img src="img/emoji_gif/sad.gif" class="card-img" alt="Sad"
           style="width:5rem; height:12vh">
           <h2 class="card-title">Positif</h2>
           <h4 class="card-text"><?= $total_positif; ?></h4>
         </div>
       </div>

       <div class="card bg-success">
         <div class="card-body">
           <img src="img/emoji_gif/smile.gif" class="card-img" alt="Sad"
           style="width:5rem; height:12vh">
           <h2 class="card-title">Sembuh</h2>
           <h4 class="card-text"><?= $total_sembuh; ?></h4>
         </div>
       </div>

       <div class="card bg-danger">
         <div class="card-body">
           <img src="img/emoji_gif/loudly_cry.gif" class="card-img" alt="Sad"
           style="width:5rem; height:12vh">
           <h2 class="card-title">Meninggal</h2>
           <h4 class="card-text"><?= $total_meninggal; ?></h4>
         </div>
       </div>

       <div class="card bg-info">
         <div class="card-body">
           <img src="img/emoji_gif/crying in tears.gif" class="card-img" alt="Sad"
           style="width:5rem; height:12vh">
           <h2 class="card-title">Dirawat</h2>
           <h4 class="card-text"><?= $total_dirawat; ?></h4>
         </div>
       </div>
     </div>

    <!-- End of Card API Data Keseluruhan -->
   </div>
</div>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 1 ) -->
<div class="container-fluid mt-4">
 <!-- Card API Data Tiap Provinsi ( Baris 1 ) -->
  <div class="card-deck text-center">

  <!-- DKI Jakarta -->
   <div class="card" id="transform">
     <div class="container" id="background_jakarta">
       <img src="img/provinsi/dki_jakarta.png" class="card-img-top mt-3 mb-3" alt="jakarta" style="width:10rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $jakarta1; ?></h5>

       <!-- Card info di dalam card -->
       
        <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($jakarta2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($jakarta3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($jakarta4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       
       <!-- End of Card info di dalam card -->

     </div>
     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
   </div>

   <!-- End of DKI Jakarta -->

   <!-- Jawa Timur -->
   <div class="card" id="transform">
     <div class="container" id="background_jatim">
      <img src="img/provinsi/jawa_timur.png" class="card-img-top mt-3" alt="...">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $jatim1; ?></h5>

       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($jatim2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($jatim3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($jatim4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       
       <!-- End of Card info di dalam card -->
      
     </div>
     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
   </div>
   <!-- End Of Jawa Timur -->

   <!-- Jawa Barat -->
   <div class="card" id="transform">
     <div class="container" id="background_jabar">
      <img src="img/provinsi/jawa_barat.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $jabar1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($jabar2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($jabar3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($jabar4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     <!-- End of Jawa Barat -->

   </div>
  </div>
  <!-- End of Card API Data Tiap Provinsi (Baris 1) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 1) -->

<!-- ============================================================================================================== -->

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 2 ) -->
<div class="container-fluid mt-4">
 <!-- Card API Data Tiap Provinsi ( Baris 2 ) -->
  <div class="card-deck text-center">

  <!-- Jawa Tengah -->
   <div class="card" id="transform">
     <div class="container" id="background_jateng">
      <img src="img/provinsi/jawa_tengah.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $jateng1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($jateng2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($jateng3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($jateng4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Jawa Tengah -->


     <!-- Sulawesi Selatan -->
   <div class="card" id="transform">
     <div class="container" id="background_sulsel">
      <img src="img/provinsi/sulawesi_selatan.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $sulsel1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($sulsel2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($sulsel3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($sulsel4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     <!-- End of Sulawesi Selatan -->
    </div>

    
    <!-- Sumatera Barat -->
   <div class="card" id="transform">
     <div class="container" id="background_sumbar">
      <img src="img/provinsi/sumatera_barat.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $sumbar1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($sumbar2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($sumbar3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($sumbar4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     <!-- End of Sumatera Barat -->
    </div>

  </div>
  <!-- End of Card API Data Tiap Provinsi (Baris 2) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 2) -->

<!-- =============================================================================================================== -->

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 3 ) -->
<div class="container-fluid mt-4">
 <!-- Card API Data Tiap Provinsi ( Baris 3 ) -->
  <div class="card-deck text-center">

  <!-- Riau -->
   <div class="card" id="transform">
     <div class="container" id="background_riau">
      <img src="img/provinsi/riau.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $riau1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($riau2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($riau3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($riau4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of  Riau -->

    <!-- Kalimantan Timur -->
   <div class="card" id="transform">
     <div class="container" id="background_kaltim">
      <img src="img/provinsi/kalimantan_timur.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $kaltim1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($kaltim2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($kaltim3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($kaltim4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Kalimantan Timur -->

    <!-- Sumatera Utara -->
   <div class="card" id="transform">
     <div class="container" id="background_sumut">
      <img src="img/provinsi/sumatera_utara.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $sumut1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($sumut2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($sumut3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($sumut4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Riau -->

  </div>
  <!-- End of Card API Data Tiap Provinsi (Baris 3) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 3) -->

<!-- =============================================================================================================== -->

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 4 ) -->
<div class="container-fluid mt-4">
 <!-- Card API Data Tiap Provinsi ( Baris 4 ) -->
  <div class="card-deck text-center">

  <!-- Bali -->
  <div class="card" id="transform">
     <div class="container" style="background:#FF4500;">
      <img src="img/provinsi/bali.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $bali1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($bali2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($bali3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($bali4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Bali -->

     <!-- Kalimantan Selatan -->
   <div class="card" id="transform">
     <div class="container" style="background:#191970;">
      <img src="img/provinsi/kalimantan_selatan.png" class="card-img-top mt-3 mb-3" alt="..." style="width:20rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $kalsel1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($kalsel2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($kalsel3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($kalsel4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Kalimantan Selatan -->

    <!-- Banten -->
   <div class="card" id="transform">
     <div class="container" style="background:#DA70D6;">
      <img src="img/provinsi/banten.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $banten1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($banten2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($banten3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($banten4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Banten -->

  </div>
  <!-- End of Card API Data Tiap Provinsi (Baris 4) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 4) -->

<!-- =============================================================================================================== -->

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 5 ) -->
<div class="container-fluid mt-4">
 <!-- Card API Data Tiap Provinsi ( Baris 5 ) -->
  <div class="card-deck text-center">
        
  <!-- Papua -->
   <div class="card" id="transform">
     <div class="container" style="background:#663399;">
      <img src="img/provinsi/papua.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $papua1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($papua2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($papua3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($papua4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Papua -->


   <!-- Sumatera Selatan -->
   <div class="card" id="transform">
     <div class="container" style="background:#008080;">
      <img src="img/provinsi/sumsel.png" class="card-img-top mt-3 mb-3" alt="Sumsel" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $sumsel1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($sumsel2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($sumsel3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($sumsel4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Sumatera Selatan -->

   <!-- Aceh -->
   <div class="card" id="transform">
     <div class="container" style="background:#00FF7F;">
      <img src="img/provinsi/aceh.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $aceh1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($aceh2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($aceh3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($aceh4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Aceh -->



  </div>
  <!-- End of Card API Data Tiap Provinsi (Baris 5) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 5) -->

<!-- =============================================================================================================== -->

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 6 ) -->
<div class="container-fluid mt-4">
 <!-- Card API Data Tiap Provinsi ( Baris 6 ) -->
  <div class="card-deck text-center">

  <!-- Sulawesi Utara -->
   <div class="card" id="transform">
     <div class="container" style="background:#FA8072;">
      <img src="img/provinsi/sulawesi_utara.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $sulut1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($sulut2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($sulut3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($sulut4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Sulawesi Utara -->


    <!-- Sulawesi Tenggara -->
   <div class="card" id="transform">
     <div class="container" style="background:#CD853F;">
      <img src="img/provinsi/sulawesi_tenggara.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $sultenggara1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($sultenggara2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($sultenggara3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($sultenggara4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Sulawesi Tenggara -->

  <!-- Kalimantan Tengah -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/kalimantan_tengah.png" class="card-img-top mt-3 mb-3" alt="..." style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $kalteng1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($kalteng2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($kalteng3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($kalteng4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Kalimantan Tengah -->

  </div>
  <!-- End of Card API Data Tiap Provinsi (Baris 6) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 6) -->

<!-- =============================================================================================================== -->

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 7 ) -->
<div class="container-fluid mt-4">
 <!-- Card API Data Tiap Provinsi ( Baris 7 ) -->
  <div class="card-deck text-center">

  <!-- Papua Barat -->
   <div class="card" id="transform">
     <div class="container" style="background:#FFD700;">
      <img src="img/provinsi/papua_barat.png" class="card-img-top mt-3 mb-3" alt="pabar" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $pabar1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($pabar2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($pabar3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($pabar4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Papua Barat -->


    <!-- Kepulauan Riau -->
   <div class="card" id="transform">
     <div class="container" style="background:#CD5C5C;">
      <img src="img/provinsi/kepulauan_riau.png" class="card-img-top mt-3 mb-3" alt="kepri" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $kepri1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($kepri2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($kepri3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($kepri4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Kepulauan Riau -->


  <!-- Nusa Tenggara Barat -->
   <div class="card" id="transform">
     <div class="container" style="background:#7CFC00;">
      <img src="img/provinsi/nusa_tenggara_barat.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $ntb1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($ntb2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($ntb3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($ntb4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Nusa Tenggara Barat -->


  </div>
  <!-- End of Card API Data Tiap Provinsi (Baris 7) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 7) -->

<!-- =============================================================================================================== -->

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 8 ) -->
<div class="container-fluid mt-4">
 <!-- Card API Data Tiap Provinsi ( Baris 8 ) -->
  <div class="card-deck text-center">

  <!-- Yogyakarta -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/Yogyakarta.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $yogyakarta1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($yogyakarta2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($yogyakarta3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($yogyakarta4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Yogyakarta -->


    <!-- Maluku -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/maluku.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $maluku1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($maluku2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($maluku3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($maluku4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Maluku -->


  <!-- Gorontalo -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/gorontalo.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $gorontalo1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($gorontalo2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($gorontalo3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($gorontalo4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Gorontalo -->


  </div>
  <!-- End of Card API Data Tiap Provinsi (Baris 8) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 8) -->

<!-- =============================================================================================================== -->

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 9 ) -->
<div class="container-fluid mt-4">
 <!-- Card API Data Tiap Provinsi ( Baris 9 ) -->
  <div class="card-deck text-center">

  <!-- Maluku Utara -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/maluku_utara.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $malut1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($malut2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($malut3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($malut4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Maluku Utara -->

    <!-- Lampung -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/lampung.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $lampung1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($lampung2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($lampung3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($lampung4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Lampung -->


    <!-- Kalimantan Barat -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/kalimantan_barat.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $kalbar1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($kalbar2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($kalbar3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($kalbar4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Kalimantan Barat -->


  </div>
  <!-- End of Card API Data Tiap Provinsi (Baris 9) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 9) -->

<!-- =============================================================================================================== -->

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 10 ) -->
<div class="container-fluid mt-4">
 <!-- Card API Data Tiap Provinsi ( Baris 10 ) -->
  <div class="card-deck text-center">

  <!-- Jambi -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/jambi.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $jambi1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($jambi2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($jambi3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($jambi4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Jambi -->

    <!-- Bengkulu -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/bengkulu.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $bengkulu1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($bengkulu2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($bengkulu3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($bengkulu4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Bengkulu -->

    <!-- Sulawesi Barat -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/sulawesi_barat.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $sulbar1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($sulbar2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($sulbar3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($sulbar4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Sulawesi Barat -->

  </div>
  <!-- End of Card API Data Tiap Provinsi (Baris 10) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 10) -->

<!-- =============================================================================================================== -->

<!-- Wrapper Card API Data Tiap Provinsi ( Baris 11 ) -->
<div class="container-fluid mt-4">
  <!-- Card API Data Tiap Provinsi ( Baris 11 ) -->
  <div class="card-deck text-center">
    
  <!-- Sulawesi Tengah -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/sulawesi_tengah.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $sulteng1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($sulteng2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($sulteng3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($sulteng4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Sulawesi Tengah -->

  <!-- Kalimantan Utara -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/kalimantan_utara.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $kalut1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($kalut2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($kalut3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($kalut4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Kalimantan Utara -->

  <!-- Bangka Belitung -->
   <div class="card" id="transform">
     <div class="container" style="background:#2E8B57;">
      <img src="img/provinsi/bangka_belitung.png" class="card-img-top mt-3 mb-3" alt="NTB" style="width:13rem; height:40vh">
     </div>
     <div class="card-body">
       <h5 class="card-title"><?= $bangka1; ?></h5>
      
       <!-- Card info di dalam card -->
       
       <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($bangka2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($bangka3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($bangka4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

     <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>
    <!-- End of Bangka Belitung -->

  </div>
    <!-- End of Card API Data Tiap Provinsi (Baris 11) -->
</div>
<!-- End of wrapper Card API Data Tiap Provinsi (Baris 11) -->
  
<!-- =============================================================================================================== -->

<!-- Card API Data Tiap Provinsi ( Baris 12 ) -->

<div class="card mt-5 ml-3 text-center" style="width: 25.5rem;" id="transform">
  <div class="container-md" id="background_ntt">
    <img src="img/provinsi/nusa_tenggara_timur.png" class="card-img-top mt-3 mb-3" alt="NTT" style="width:13rem; height:40vh">
  </div>
  <div class="card-body">
    <h5 class="card-title"><?= $ntt1; ?></h5>
     
     <!-- Card info di dalam card -->
       
     <div class="card-group">
          <div class="card border-top-0 border-bottom-0 border-left-0 border-right-1">
            <div class="card-body">
              <h6 class="card-title">Positif</h6>
              <p class="card-text font-weight-bold text-warning"><?= number_format($ntt2,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 ">
            <div class="card-body">
              <h6 class="card-title">Sembuh</h6>
              <p class="card-text font-weight-bold text-success"><?= number_format($ntt3,0,',','.'); ?></p>
            </div>
          </div>
          <div class="card border-top-0 border-bottom-0 border-right-0">
            <div class="card-body">
              <h6 class="card-title">Mening</h6>
              <p class="card-text font-weight-bold text-danger"><?= number_format($ntt4,0,',','.'); ?></p>
            </div>
          </div>
        </div>
       </div>

       <!-- End of Card info di dalam card -->

       <div class="card-footer">
       <h6 class="text-muted">Last update <?= date('d F Y'); ?></h6>
     </div>
     
    </div>

  </div>
</div>

<!-- End of Card API Data Tiap Provinsi (Baris 12) -->

<!-- =============================================================================================================== -->

<!-- Wrapper Data API Global -->
<div class="container-fluid ml-1 mt-5">

  <!-- Card API Data Global -->
  <div class="card">
    <h5 class="card-header text-white bg-danger"><img src="img/emoji_gif/earth.gif" alt="flag" class="card-img" style="width:6rem; height:12vh"> Kasus Covid 19 Global</h5>
    <marquee class="text-muted font-weight-bold mt-4 ml-4"><h1>Last update <?= date('d F Y'); ?></h1></marquee>

       <!-- Card deck API Global -->

       <div class="container-fluid">
        <div class="card text-center border-0">
          <div class="card-body">

            <!-- Card API Data Keseluruhan -->
              <div class="card-deck text-white">
              <div class="card bg-warning">
                <div class="card-body">
                  <img src="img/emoji_gif/sad.gif" class="card-img" alt="Sad"
                  style="width:5rem; height:12vh">
                  <h2 class="card-title">Positif</h2>
                  <h4 class="card-text"><?= $globals_positif; ?></h4>
                </div>
              </div>

              <div class="card bg-success">
                <div class="card-body">
                  <img src="img/emoji_gif/smile.gif" class="card-img" alt="Sad"
                  style="width:5rem; height:12vh">
                  <h2 class="card-title">Sembuh</h2>
                  <h4 class="card-text"><?= $globals_sembuh; ?></h4>
                </div>
              </div>

              <div class="card bg-danger">
                <div class="card-body">
                  <img src="img/emoji_gif/loudly_cry.gif" class="card-img" alt="Sad"
                  style="width:5rem; height:12vh">
                  <h2 class="card-title">Meninggal</h2>
                  <h4 class="card-text"><?= $globals_meninggal; ?></h4>
                </div>
              </div>

            <!-- End of Card API Data Global -->
          </div>
        </div>

        <!-- Divider -->
        <hr class="sidebar-divider">


    <!-- End of Card API Global -->

    <div class="card-body">
     
        <!-- Table Data API -->

          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="text-center">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Negara</th>
                  <th scope="col">Positif</th>
                  <th scope="col">Sembuh</th>
                  <th scope="col">Meninggal</th>
                  <th scope="col">Dirawat</th>
                </tr>
              </thead>
              <tbody class="text-center"> 
                <?php $no = 1; foreach ( $globals as $global) : ?>
                <tr>
                  <th scope="row"><?= $no; ?></th>
                  <td><?= $global['attributes']['Country_Region']; ?></td>
                  <td><?= $global['attributes']['Confirmed']; ?></td>
                  <td><?= $global['attributes']['Recovered']; ?></td>
                  <td><?= $global['attributes']['Deaths']; ?></td>
                  <td><?= $global['attributes']['Active']; ?></td>
                </tr>
                <?php $no++; endforeach; ?>
              </tbody>
            </table>
          </div>

        <!-- End of Data API -->

    </div>
  </div>
    <!-- End of Card API Data Global  -->
</div>
<!-- End of wrapper Card API Data Global  -->

<!-- Footer -->

 <div class=" card-footer mt-5 text-center bg-info">
    <h6 class="text-white">
      © 2020 Personal Website of Bagus Pratama Majid Made in <img src="img/emoji_gif/bendera.gif" alt="flag" style="width:6rem; height:6vh"> and Designed with <img src="img/emoji_gif/heart.gif" alt="flag" style="width:5rem; height:8vh"> by Bagus Pratama Majid
    </h6>

    <h2 class="text-white">
      #HIDUPSEHAT &nbsp; #KICKCOVID &nbsp; #PAKAIMASKER
    </h2>
 </div>

<!-- =============================================================================================================== -->
     <!-- Font Awesome -->
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>