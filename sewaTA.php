<!DOCTYPE html>
<html>
  <head>
    <title> SEWADNS.COM</title>
      <link rel="stylesheet" href="style.css"/>
      
  </head>

  <body>
      <div class="container">
          <div class="daftar">
            <form method="post" action="hasilsewa.php" id="form">
               <h2> Selamat Datang di SEWA DOMAIN ! silahkan isi form di bawah ini : </h2><hr/>

               <label> Nama ID penyewa : </label><br/><br/>
                <input type="text" name="fnama" placeholder="ISI NAMA" id="fnama" required/><br/><br/>

               <label> Email penyewa : </label><br/>
                <input type="email" name="femail" placeholder="ISI EMAIL" id="femail" required/><br/><br/>

               <label> DOMAIN ANDA : </label><br/><br/>
                <input type="text" name="fdomain" placeholder="ISI DOMAIN" id="fdomain" required/><br/><br/>
                <hr>
                <h3> ISI PILIHAN WAKTU SEWA </h3>
                  
                  <label>
                    <select name="waktu" required>
                      <option value=""> silahkan pilih waktu</option>
                      <option value="RP.50.000/per-minggu" > RP.50.000/per-minggu </option>
                      <option value="RP.175.000/per-bulan" > RP.175.000/per-bulan </option>
                      <option value="RP.1.0000.000/per-tahun" > RP.1.0000.000/per-tahun </option>
                  
                    </select><br/><br/>
                     <input type="submit" name="submit" value="proses">


              </form>
        </div>
      </div>
</body>
</html>