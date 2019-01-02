<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
    <div id="container">
     
        <div class="header"></div>
             <ul>
                <li><a href="index.php">Home</a></li>
                <li><a class="link" href="galeri.php">Galeri</a></li>
                <li class="dropdown">
                  <a href="javascript:void(0)" class="dropbtn">Profil</a>
                  <div class="dropdown-content">
                    <a class="link" href="sejarah.php">Sejarah</a>
                    <a class="link" href="prestasi.php">Prestasi</a>
                    <a class="link" href="visi.php">VISI & MISI</a>
                  </div>
                </li>
              </ul>                    
        <div class="kiri">
            
            <div class="tgl">
              Pemberitahuan
            </div>
            <div class="kepsek"> <h3>Pendaftaran</h3>

                <div>
                  <form action="/action_page.php">
                    <label for="fname">Nama Depan</label>
                    <input type="text" id="fname" name="firstname" placeholder="Ketik Disini..">
                
                    <label for="lname">Nama Belakang</label>
                    <input type="text" id="lname" name="lastname" placeholder="Ketik Disini..">
                
                    <label for="country">Asal</label>
                    <select id="country" name="country">
                      <option value="australia">Semarang</option>
                      <option value="canada">Ungaran</option>
                      <option value="usa">Temanggung</option>
                    </select>
                  
                    <input type="submit" value="Submit">
                  </form>
                </div> </div>
        </div>
        <div class="kanan"><h2>Home</h2>

            <div class="stori">
            <img src="kepsek.JPG" width="20%" height="20%" alt="">
            Assalamu'alaikum Wr. Wb.

<p>Puji syukur kehadirat Allah SWT atas segala ridhonya, SMP 34 Semarang menghadirkan Website baru smpn34-semarang.sch.id Website ini mempublikasikan informasi dan dokumentasi tentang pelayanan di Satuan pendidikan di SMP 34 Semarang dan perkembangan terkini yang dilaksanakan serta dicapai oleh SMP 34 Semarang .</p> <p>Optimalisasi publikasi dan manajemen Sekolah berbasis pada teknologi, informasi dan komunikasi (TIK) ini dilakukan untuk mendukung pengembangan SMP 34 Semarang. Hal ini sebagai bentuk perwujudan keterbukaan informasi publik yang dilakukan di SMP 34 Semarang.</p><p> Sebagai media informasi dan publikasi yang dapat diakses melalui internet, tentu website ini merupakan solusi yang efektif dan efisien untuk pencarian berbagai info dan pelayanan publik yang dibutuhkan masyarakat tanpa batas waktu dan tempat. Sekaligus merupakan bentuk transparansi dan akuntabilitas SMP 34 Semarang dalam penyelenggaraan Pendidikan.</p>

<p>Website ini tidak hanya menyajikan informasi dan pelayanan publik tetapi juga menampilkan berbagai informasi terkait dengan penyelenggaraan Pendidikan di SMP 34 Semarang. Dengan harapan masyarakat umum dapat mencari atau mengakses segala informasi yang dibutuhkan.</p>

<p>Demikian sambutan ini dan mengharap warga masyarakat untuk terus berperan aktif dalam mengawal pelaksanaan. pengelolaan dan penyelenggaran Pendidikan di SMP 34 Semarang. Akhir kata, tidak lupa saya ucapkan terima kasih dan penghargaan setinggi-tingginya pada semua pihak yang turut serta berkontribusi dalam pengembangan website ini. Semoga Allah SWT selalu meridhoi niat baik kita semua. Amin.</p>

<p>Wassalamu'alaikum Wr. Wb.</p>

                <button id="tombol" onclick="ganti()">click</button>
                <div class="halaman">SMP 34 SEMARANG</div>
                <form name="formprestasi" action="mboh.php">
                  <input type="text" name="nama">
                  <input type="text" name="mboh">
                  
                </form>
            </div>
            <div class="flexi">
              <div class="kotak"><img src="guru.JPG" width="100%" height="100%" alt=""></div>
              <div class="kotak"><img src="paskib.JPG" width="100%" height="100%" alt=""></div>
              <div class="kotak"><img src="taman.JPG" width="100%" height="100%" alt=""></div>
              
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="footer"> 
              <h2>SMP 34 SEMARANG</h2>
        </div>
    </div>

    <script>
     
      function ganti(){
        //fungsi ganti dengan java script
        //JSON
        var DataJSONrumah=[
                {
                no : 6710576,
                alamat : 'tembalang',
                },
                {
                no : 12,
                alamat : 'Jl. Tlogomulyo Pedurungan',
                },
                {
                no : 99,
                alamat : 'undip',
                },
        ];
        var angka1=10;
        var angka2=11;
        var jumlah=angka1+angka2;
        //IKI DOM seng nganggo titik titik iki jengenge dom
        document.formprestasi.nama.value=DataJSONrumah[0].no;
        document.formprestasi.mboh.value=DataJSONrumah[1].alamat;
        
      }

      //jquery
      $(document).ready(function () {
        $('#tombol').click(function (e) { 
          e.preventDefault();
          $('.halaman').html('SMP 34 SEMARANG');
        
        });
        $(".link").click(function (e) { 
          e.preventDefault();
          $.get($(this).attr("href"),
            function (data, textStatus, jqXHR) {
              $(".kanan").html(data);
            }
          );
        });
      });
        
    </script>
      
</body>

</html>