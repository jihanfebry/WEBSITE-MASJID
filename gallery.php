<!DOCTYPE html>
<html>
<head>
<style>
    body{
        padding:1%;
    }
    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        grid-gap: 10px;
        padding: 20%;
    }
    
    .gallery img {
        width: 100%;
        height: auto;
    }

    .content3 {
    position: absolute;
    margin-top: 8%;
    left: 7%;
    transform: translateY(-50%);
    margin-left:25%;

    }

    .text3 {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 30px;
        line-height: 0.8;
        color: black;
        justify-content: space-between;
    }

    .text3 span{
        color: darkblue;
    }

    .two {
        margin-right: 70%;
    }

    .navbar img {
    width: 100px;
    height: 100px;
    margin-left: 45%;
    padding: auto;
    margin-top:2%;
    }

    .gallery {
    display: flex;
    margin-right: 12%;
    margin-left: -15%;
    margin-top: 5%;
    }

    .gallery img {
        width: 350px;
        height: 550px;
        object-fit: cover;
        margin: 10px;
        border-radius: 3%;
    }


    .gallery1 {
    display: flex;
    margin-right: 12%;
    margin-left: 5%;
    margin-top: -15%;
    }

    .gallery1 img {
        width: 350px;
        height: 550px;
        object-fit: cover;
        margin: 14px;
        border-radius: 3%;
    }

    button{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding: 10px 15px;
    width: 230px;
    height: 35px;
    background-color: darkblue;
    text-decoration: none;
    color: white;
    border-radius: 5px;
    font-size: 16px;
    text-align: center;
    height: 200%;
    margin-left: 80%;
    margin-top:8%;

    }
        
    .tombol a .button{
        margin-top: 40px;
        margin-left: 50%;
    }


</style>
</head>
<body>


    
        <nav class= "navbar">
        <img src="images/logo.jpg" alt="" srcset="">
        </nav>

    <div class="content3">
    <div class="text3">
            
        <div class="one">
            <h1> <span>Gallery</span> Masjid Besar </h1>
        </div>

        <div class="twoo">
            <h1> SMK  <span>Wikrama</span> Bogor.</h1>
        </div>
    </div>
    </div>

    <div class="gallery">
        <img src="images/gallery1.jpg" alt="gallery 1">
        <img src="images/gallery2.jpg" alt="gallery 2">
        <img src="images/gallery3.jpg" alt="gallery 3">
        <img src="images/gallery4.jpg" alt="Gambar 4"> 
        <!-- Tambahkan gambar lainnya di sini -->
    </div>

    <div class="gallery1">
      <img src="images/gallery5.jpg" alt="Gambar 1">
      <img src="images/gallery6.jpg" alt="Gambar 2">
      <img src="images/gallery7.jpg" alt="Gambar 3">
      <img src="images/gallery8.jpg" alt="Gambar 4"> 
      <!-- Tambahkan gambar lainnya di sini -->
  </div>

                <div class="tombol">
                    <a href="index.php"><button type="button">kembali</button></a>
                  </div> 
</body>
</html>
