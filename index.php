<?php

  

include "koneksi.php";
$ambildata = mysqli_query($koneksi,"select * from aas_project");
$jumlahDonatur = mysqli_num_rows($ambildata);



$query = "SELECT SUM(barang) AS count FROM aas_project WHERE kategori='uang'";

$duration = $koneksi->query($query);
$record = $duration->fetch_array();
$total = $record['count'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Website Masjid </title>
    <link rel="stylesheet" href="st.css">
</head>
<body>



    <header id = "home" class= "header">

        <nav class= "navbar">
            <img src="images/logowk.png" alt="" srcset="" style="width: 50px; height:50px;">
            <div class="logo">
                <div class="logo-text">
                    <h1><b>SMK WIKRAMA</b></h1>
                  <div>
                    <h1><b>BOGOR</b></h1>
                  </div>
                </div>
              </div>
    
           <ul>
            <li><a href= "#home"><b>Beranda</b></a></li>
            <li><a href= "#carawakaf"><b>Cara Wakaf</b></a></li>
            <li><a href= "#datawakaf"><b>Data Wakaf</b></a></li>
            <li><a href= "#gallery"><b>Gallery</b></a></li>
            <li><a href= "#webwikrama"><b>Web Wikrama</b></a></li>
           </ul>
        </nav>
    </header>
    <div class="content">
            <div class="text">
                    
                <div class="kesatu">
                    <h3> Masjid Besar SMK Wikrama Bogor </h3>
                </div>

                <div class="kedua">
                    <h1> Mari <span> Tingkatkan </span></h1>
                </div>

                <div class="ketiga">
                    <h1><span> Keimanan </span> Masyarakat </h1>
                </div>

                <div class="keempat">
                    <h1> SMK Wikrama Bogor </h1>
                </div>
                

               <br> <div class="tombol">
                    <a href="input.php"><button type="button">Beri Bantuan Shadaqah</button></a>
                  </div>   
            </div>
        </div>
    </header>
    

     
    <div class="masjid">
        <img src="images/masjid.jpg">
    </div>


<!-- 
    <div class="total">
        <li><span>Total Target Dana</span><br> <p> <b><h2>Rp.40.000.000</h2></b></p></li>
        <li><span>Total Dana Terkumpul</span> <br> <p> <b><h2>Rp.4.000.000</h2></b></p></li> 
        <li><span>Total Donatur</span><br> <p> <b><h2>34 Orang</h2></b></p></li>
            
    </div>  -->

    <div class="total">
    <ul>
      <?php $targetDana = 40000000 ?>
      <li><span>Total Target Dana</span><br>
        <p> <b>
            <h2>Rp. <?= number_format($targetDana); ?></h2>
          </b></p>
      </li>
      <li><span>Total Dana Terkumpul</span> <br>
        <p> <b>
            <h2>Rp. <?= number_format($total); ?></h2>
          </b></p>
      </li>
      <li><span>Total Donatur</span><br>
        <p> <b>
            <h2><?= $jumlahDonatur; ?> Orang</h2>
          </b></p>
      </li>
    </ul>

    

    <?php $percent = ($total / 40000000) * 100; ?>

    <div class="processing">
      <div class="processing-bar" data-bar = "<?= $percent; ?>"><p style="color: white;"><?= $percent ?>%</p></div>
    </div>



  </div>
   

    <div class="banner">
     <div class="text-berjalan">
        

     <marquee direction="left">

<!-- YANG DIUBAH  -->

<span style = "opacity:30%;"> &nbsp; • &nbsp; </span>
 <?php foreach ($ambildata as $data): ?>
 <?= $data["nama"]; ?> -
<span style = "color:#FFF500;"> 
 <?= $data["kategori"]; ?> : <?= $data["barang"]; ?>
</span>

<span style = "opacity:30%;"> &nbsp; • &nbsp; </span>
<?php endforeach; ?>




</marquee>

     </div>
    </div>
    <br>

    <div class="spanduk">
        <h1>Banner</h1>
    </div> 

    <div class="content2">
        <div class="text2">
                
            <div class="satu">
                <h1> <span>Manfaat</span> Wakaf, Infaq</h1>
            </div>

            <div class="dua">
                <h1> Shadaqoh.</h1>
            </div>

            <div class="tiga">
                <h6><p> Berikut Adalah Beberapa Keutamaan Wakaf, Infaq</p>
                  <p> Shadaqoh yang akan anda dapatkan</p></h6>
            </div>  
        </div>
    </div>

    



<div class="card4">
  <div class="container">
    <div class="card">
       <div class="items">
        <img src="images/love.jpg" alt="Gambar 1" />
       </div> 
        <h2>Menjadikan Hati <br> Lebih Tenang</h2>
        <p>kami berikan harga yang <br> terbaik dibandingkan <br>kompetitor kami</p>
    </div>

    
    <div class="card">
        <div class="items">
            <img src="images/bunga.jpg" alt="Gambar 2" />   
        </div>
        <h2>Terbukanya <br> Pintu Rezeki</h2>
        <p>Allah SWT akan membuka <br> pintu rezeki dari arah yang<br>tidak di kira sebelumnya</p>
     </div>
  </div>

  <div class="container">
    <div class="card">
        <div class="items">
            <img src="images/perisai.jpg" alt="Gambar 3" />
        </div>
        <h2>Menjauhkan Dari  <br> Bahaya </h2>
        <p>Rasulullah SAW pernah <br> bersabda: “Bersegeralah <br> untuk bersedekah, karena <br> musibah dan bencana tidak <br> bisa mendahului sedekah."</p>
    </div>

    <div class="card">
        <div class="items">
             <img src="images/bintang.jpg" alt="Gambar 4" />
        </div>
        <h2>Pahala Yang Tak<br> Terputus</h2>
        <p>Ini akan menolong kita di <br> akhirat nantinya, juga  <br> dapat menyelamatkannya <br> dari api neraka.</p>
      </div>
  </div>

  <div class="tangan">
    <img src="images/tangan.jpg" alt="" srcset="">
  </div>

</div>

<div id = "carawakaf" class="content3">
    <div class="text3">
            
        <div class="one">
            <h1> <span> Cara Melakukan</span> Wakaf, Infaq</h1>
        </div>

        <div class="two">
            <h1> Shadaqoh.</h1>
        </div>

        <div class="three">
            <h6><p> Berikut Adalah Cara Melakukan Wakaf,Infaq</p>
              <p> Shadaqoh Untuk Membantu Pembangunan Masjid Besar SMK Wikrama Bogor</p></h6>
        </div>  
    </div>
</div>

<div class="card5">
    <div class="container1">
      <div class="card2">
         <div class="icon">
         <h1>O1</h1>
         </div> 
          <h2>  Isi Form Data Diri</h2>
          <p>Isikan form pengisian yang disediakan di form <br> data diri, isikan dengan <br> data diri anda dengan teliti.</p>
      </div>
  
      
      <div class="card2">
          <div class="icon">
            <h1>O2</h1>
          </div>
          <h2>Isikan Nominal Shadaqah </h2>
          <p>Isikan nominal yang akan anda shodaqohkan, <br> pastikan isi nominal dengan seiklasnya tanpa ada  <br>paksaan apapun.</p>
       </div>
    </div>
  
    <div class="container1">
      <div class="card2">
          <div class="icon">
              <h1>O3</h1>
          </div>
          <h2>Upload Bukti Pembayaran</h2>
          <p>Pilih motode pembayaran dan upload bukti <br> pembayaranya.</p>
      </div>
  
      <div class="card2">
          <div class="icon">
              <h1>O4</h1>
          </div>
          <h2> Verifikasi Pembayaran</h2>
          <p>Pembayaran anda akan di verifikasi oleh admin <br> dan jika terverifikasi nama anda akan tampil.</p>
        </div>
    </div>
  </div>

  <div id="datawakaf" class="content3">
    <div class="text3">
            
        <div class="one">
            <h1> <span>Data Donatur</span> Wakaf, Infaq</h1>
        </div>

        <div class="two">
            <h1> Shadaqoh.</h1>
        </div>

        <div class="three">
            <h6><p>  Berikut adalah data donatur wakaf, infaq shodaqoh untuk </p>
              <p> Shadaqoh yang akan anda dapatkan</p></h6>
        </div>  
    </div>
</div>


 

<table border="1" cellpadding="6" cellspacing= "0">
    <tr>
        <th>Nama Donatur</th>
        <th>Donatur ID</th>
        <th>Paket</th>
        <th>Kategori</th>
        <th>Nominal / Barang</th>
    </tr>

          <!-- YANG DIUBAH  -->

    <?php foreach ($ambildata as $row) : ?>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["id"]; ?></td>
      <td><?= $row["paket"]; ?></td>
      <td><?= $row["kategori"]; ?></td>
      <td><?= $row["barang"]; ?></td>
      <tr>
    <?php endforeach; ?>






</table>

<br>
<br>
<br>
<br>

<div id="gallery" class="content3">
    <div class="text3">
            
        <div class="one">
            <h1> <span>Gallery</span> Masjid Besar SMK</h1>
        </div>

        <div class="twoo">
            <h1> Wikrama Bogor.</h1>
        </div>

        <div class="three">
            <h6>Berikut adalah gallery masjid besar SMK Wikrama.</h6>
        </div>  
    </div>
</div>

<br>
<br>
<br>
<br>

<div class="gallery">
        <img src="images/masjid1.jpg" >
        <img src="images/masjid2.jpg" >
        <img src="images/masjid3.jpg" >
        
    </div>

    <div class="gallery1">
        <img src="images/masjid4.jpg" >
        <img src="images/masjid5.jpg" >
        <a href="gallery.php">
        <img src="images/klik.jpg" alt="Deskripsi Gambar">
        </a>
      
  </div>

</div>


<footer id = "webwikrama" class="footer">
    <div class="footer-container">
      <div class="footer-row">
        <div class="footer-content">
          <div class="footer-col">
            <div class="footer-brand">
              <img src="images/logowk.png" alt="">
              <h3>SMK WIKRAMA BOGOR</h3>
            </div>  
            <br>
            <h4>alamat</h4>
            <p>
              jl.raya wangun <br>
              kelurahan sindangsari <br>
              bogor timur 16720
            </p>
            <hr>
            <h4>telepon</h4>
            <p>
              0251-8242411/<br>
              082221718035 (Whatsapp)
            </p>
            <hr>

            <ul class="footer-links">
              <li><a href="https://www.facebook.com/smkwikrama?_rdc=1&_rdr" target="_blank"><img src="images/fb.png" alt=""></a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank"><img src="images/twt.png" alt=""></a></li>
              <li><a href="https://www.instagram.com/smkwikrama/" target="_blank"><img src="images/ig.png" alt=""></a></li>
              <li><a href="https://www.youtube.com/@multimediawikrama7482" target="_blank"><img src="images/yt.png" alt=""></a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>tentang wikrama</h4>
            <ul>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">sejarah</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">peraturan sekolah</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">rencana strategi & prestasi</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">yayasan</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">struktur organisasi</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">cabang</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">penghargaan</a></li>
              <li><a href="https://smkwikrama.sch.id/" target="_blank">kerjasama</a></li>
            </ul>
          </div>
        </div>

        <div class="footer-form">
          <div class="footer-col">
            <h4>Kirim Pesan</h4>
            <form action="">
              <input type="text" placeholder="Nama" require>
              <input type="email" placeholder="Email" require> 
              <textarea placeholder="Pesan Anda" require></textarea>

              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    
  </footer>


  <!-- YANG DIUBAH  -->


  <script>

const processing = document.querySelector ('.processing-bar');

setTimeout(() => {
  processing.style.opacity = 1;
  processing.style.width = processing.getAttribute('data-bar') + '%';

}, 500)

</script>



</body>
</html>