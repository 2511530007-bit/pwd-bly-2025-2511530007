<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>judul halaman</title>
    <link rel="stylesheet" href="style.css">
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>judul halaman</title>
    <style>
      #about {
        background-color: #f4f5f7;
        border-radius: 10%;
        padding: 20px;
        max-width: 700px;
        margin: 20px auto;
        box-shadow: 0 2px 5px rgba(0, 0, 0.1);
      }

      #contact {
        background-color:black;
        border-radius: 10%;
        padding: 20px;
        max-width: 700px;
        margin: 20px auto;
        box-shadow: 0 2px 5px rgba(0, 0, 0.1);
      }

      #about,
      #contact {
        background-color: #90c7fd;
        border-radius: 10%;
        padding: 20px;
        max-width: 700px;
        margin: 20px auto;
        box-shadow: 0 2px 5px rgba(0, 0, 0.1);
      }

      #about h2,
      #contact h2{
        color:black ;
        border-bottom: 2px solid #12131a;
        padding-bottom: 6px;
        margin-top: 0;
        margin-bottom: 16px;
      }

      #contact button {
        margin-top: 10px;
        display: inline-block;
        padding: 10px 24px;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        border: none;
        transition: all 0.3s ease;
        margin-right: 8px;
      }

      #contact button[type="submit"] {
        background-color: #d1d2d4;
        color: #131316;
        font-weight: 600;
      }

      #contact button [type="reset"] {
        background-color: white;
        color: black;
        font-weight: 500;
      }

      #contact button [type="submit"] :hover {
        background-color: #e5ece5ee;
        transform: translateY(-1px);
        box-shadow: 0 2px 6px rgba(0, 0, 0.1);
      }

      #contact button [type="reset"] :hover {
        background-color: #f7f6f6;
        transform: translateY(-1px);
      }

      #about h2 {
        color: rgba(9, 10, 14);
        border-bottom: 2px solid #050607;
        padding-bottom: 6px;
        margin-top: 0;
        margin-bottom: 16px;
      }

      #about p{
        display: flex;
        justify-content: flex-start;
        align-items: baseline;
        margin: 0;
        padding: 6px 0;
        border-bottom: 1px solid #050507;
      }

      #about strong {
        min-width: 180px;
        color:black;
        font-weight: 600;
        text-align: right;
        padding-right: 16px;
        flex-shrink: 0;
      }

      @media (max-width: 600px) {
        #about p{
            flex-direction: column;
            align-items: flex-start;
        }

        #about strong {
            text-align: left;
            padding-right: 0;

            margin-bottom: 2px;
        }
      }

      #about strong,
      #contact label>span {
        min-width: 180px;
        color: black;
        font-weight: 600;
        text-align: right;
        padding-right: 16px;
        flex-shrink: 0;
      }

       #contact input,
      #contact textarea {
        flex: 1;
        border: 1px solid #1a1111;
        border-radius: 6px;
        padding: 8px;
        color: #000;
        font-weight: normal;
        margin: 0;
        box-sizing: border-box;
      }

      @media (max-width: 600px) {
        #about p,
        #contact label {
          flex-direction: column;
          align-items: flex-start;
        }
      }
        #about strong,
        #contact label>span {
          text-align: left;
          padding-right: 0;
          margin-bottom: 2px;
        }

        @media (max-width: 600px) {}
          #contact input,
          #contact textarea,
          #contact button {
            width: 100%;
          }

    </style>
</head>

<body>
    <header>
        <h1>ini header</h1>
        <nav>
            <ul>
                <li><a href="#home">beranda</a></li>
                <li><a href="#about">tentang</a></li>
                <li><a href="#contact">kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
    </main>
    <section id="home">
        <h2>selamat datang</h2>
        <p>hallo aku putri melati</p>
        <?php
        echo "hallo dunia!"
        ?>
    </section>
    
    <section id="about">
      <?php
        $NIM = "2511530007";
        $nim = "2511530007";
        $nim = "";
        $NamaLengkap = "Putri Melati";
        $TempatLahir = "Belinyu";
        $TanggalLahir = "19 Juni 2007";
        $Hobi = "Berolahraga";
        $Pasangan = "Belum Ada";
        $Pekerjaan = "Belum Bekerja";
        $NamaOrangTua = "Bpk Jasmin dan Ibu sudiana";
        $NamaKakak = "-";
        $NamaAdik = "-";
      ?>
        <h2>tentang aku</h2>
        <p><strong>NIM:</strong> <?php echo $NIM ?></p>
        <p><strong>Nama Lengkap:</strong> <?php echo $NamaLengkap ?></p>
        <p><strong>Tempat Lahir:</strong> <?php echo $TempatLahir ?></p>
        <p><strong>Tanggal Lahir:</strong> <?php echo $TanggalLahir ?></p>
        <p><strong>Hobi:</strong> <?php echo $Hobi ?></p>
        <p><strong>Pasangan:</strong> <?php echo $Pasangan ?></p>
        <p><strong>Pekerjaan:</strong> <?php echo $Pekerjaan ?></p>
        <p><strong>Nama Orang Tua:</strong> <?php echo $NamaOrangTua ?></p>
        <p><strong>Nama Kakak:</strong><?php echo $NamaKakak ?></p>  
        <p><strong>Nama Adik:</strong><?php echo $NamaAdik ?></p>  
        </p>
    </section>
    <section id="contact">
  <h2>kontak kami</h2>
  <form action="" method="GET">
    <label for="txtnama"><span>Nama:</span>
      <input type="text" id="txtNama" name="txtNama" placeholder="Masukan nama" required autocomplete="name">
    </label> 
    <label for="txtemail"><span>Email:</span>
      <input type="email" id="txtemail" name="txtemail" placeholder="Masukan Email" required autocomplete="email">
    </label>
    <label for="txtpesan"><span>pesan anda:</span>
      <textarea id="txtpesan" name="txtpesan" rows="4" placeholder="Tulis Pesan Anda..." required></textarea>
    </label>
    <button type="submit">kirim</button>
    <button type="reset">batal</button>
  </form>
</section> 
</main>
<footer>
    <p>&copy; putri melati [2511530007]</p>
</footer>
</body>
</html>


