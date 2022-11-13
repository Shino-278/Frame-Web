<html>
<head>
 <style>
        .table1 {
            font-family:'Century gothic';
            color: #444;
            border-collapse: collapse;
            width: 50%;
            border: 1px solid #f2f5f7;
        }

        .table1 tr th{
            background: #35A9DB;
            color: #fff;
            font-weight: normal;
        }

        .table1, th, td {
            padding: 8px 20px;
            text-align: left;
        }

        .table1 tr:hover {
            background-color: #f5f5f5;
        }

        .table1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }
 </style>

</head>
    <body style="text-align:left; font-family: century gothic;">

        <?php 

         $konek = mysqli_connect("localhost","root","","siswa");

        ?>

       

         <h2>Data Siswa</h2><br>
             <table style="width:100%" class="table1">
                  <tr>
                       <th>No</th>
                       <th>Nama</th>
                       <th>Jenis Kelamin</th>
                       <th>NIK</th>
                       <th>NISN</th>
                       <th>Tempat Tanggal Lahir</th>
                  </tr>
      
  <?php
    if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $data = mysqli_query($konek,"select * from datasiswa where Nama like '%".$cari."%'");
    }else{
    $data = mysqli_query($konek,"select * from datasiswa"); 
    }
  
    $no         = 1;
    //$data       = mysqli_query($konek,"select * from datasiswa");

    while($r = mysqli_fetch_array($data)){

    $nama   = $r['Nama'];
    $jk     = $r['Jenis_Kelamin'];
    $NIK    = $r['NIK'];
    $NISN   = $r['NISN'];
    $ttl    = $r['TTL'];
  ?>
      <tr><td><?php echo $no++; ?></td>
       <td><?php echo $nama; ?></td>
       <td><?php echo $jk; ?></td>
       <td><?php echo $NIK; ?></td>
       <td><?php echo $NISN; ?></td>
       <td><?php echo $ttl; ?></td>
      </tr>
  <?php 
  }
  ?>
 </table> 

 <br><br>

 <form action="datasiswa2.php" method="get">
            <label>Cari Data Siswa <br></label>
            <input type="text" name="cari">
            <input type="submit" value="cari">
        </form>

     <?php  
            if (isset($_GET['cari'])) {
                $cari = $_GET['cari'];
                echo "Hasil Pencarian : ".$cari;
            }
        ?>

</body>
</html>
