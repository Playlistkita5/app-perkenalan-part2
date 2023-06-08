<!DOCTYPE html>
<html>
  <head>
   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin&family=Pacifico&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&family=Roboto:ital,wght@0,500;1,400&display=swap"
      rel="stylesheet"
    />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <h1>Input Data</h1>
    <div class="form-container">
      <form id="form_taaruf" action="input_proses.php" method="post">
        <fieldset>
        <legend>Formulir Perkenalan Lebih Lanjut</legend>
          <p>
            <div class="input-group"></div>
            <label for="id">ID Form : </label>
            <input type="text" name="id" id="id" placeholder="Contoh: 12345678">
          </p>
          
          <p>
            <label for="tipe_perangkat">Nama Lengkap Kamu Siapa ? </label>
            <input type="text" name="nama_lengkap" id="nama_lengkap"">
          </p>
          
          <p>
            <label for="nama_komputer">Hobby Kamu Apa? </label>
            <input type="text" name="hobby" id="hobby">
          </p>
          
          <p >
            <label for="sn">Kesibukan Saat ini ?  </label>
            <input type="text" name="aktifitas" id="aktifitas" placeholder="Contoh: f78s3b467c">
          </p>
          <p >
            <label for="ip">Motto Hidup ? </label>
            <input type="text" name="ip" id="ip" placeholder="Contoh: 192.168.1.3">
          </p>
          <p >
            <label for="lan">Target Tahun ini ?</label>
            <input type="text" name="lan" id="lan" placeholder="Contoh: 44-39-C4-36-F3-2C">
          </p>
          <p >
            <label for="wifi">Cita Cita untuk masa depan apa ?</label>
            <input type="text" name="wifi" id="wifi" placeholder="Contoh: 7C-5C-F8-1F-B5-76">
          </p>
          <p >
            <label for="tahun">Tahun Lahirnya kapan ? </label>
            <input type="text" name="tahun" id="tahun" placeholder="Contoh: 2016">
          </p>
          <p >
            <label for="processor">Punya target Menikah umur berapa? </label>
            <input type="text" name="processor" id="processor" placeholder="Contoh: Intel Core I% 3.0 Ghz">
          </p>
          <p >
            <label for="hardisk"> Anak Keberapa dari berapa saudara ? </label>
            <input type="text" name="hardisk" id="hardisk" placeholder="Contoh: 1">
          </p>
          <p >
            <label for="ram"> Punya Pandangan tentang Islam? menurut kamu islam seperyi apa ?</label>
            <input type="text" name="ram" id="ram" placeholder="Contoh: 8">
          </p>

           <p>
            <label for="id">Tokoh yang jadi panutan dan motivasi ketika sedang down</label>
            <input type="text" name="nipg" id="nipg" placeholder="Contoh: 12345678">
          </p>
          <p>
            <label for="nama_komputer">alasan memilih tokoh tersebut kenapa ? </label>
            <input type="text" name="nama" id="nama">
          </p>
          

          </p>
          <p>
            <label for="jabatan"> suka memasak ? </label>
            <input type="text" name="jabatan" id="jabatan">
          </p>
          

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>
