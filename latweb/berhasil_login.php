<?php
session_start();

if (!isset($session['username'])) {
    header("location:index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penanggalan</title>
</head>
<body>

    <div id="test"></div>
    <hr> 
    <script type="text/javascript">
        var tanggal = new Date();
        
        // document.write(tanggal);
        document.write(tanggal.getDate()+"/");
        document.write(tanggal.getMonth()+1+"/");
        document.write(tanggal.getFullYear())
        document.write("<br>")

        var tgl = tanggal.getDate()+"/"+ (tanggal.getMonth()+1)+"/"+tanggal.getFullYear();
        document.getElementById('test').innerHTML = tanggal;

        document.write(tgl)
        document.write("<br>")
        document.write(tanggal.getHours()+"sss/");
        document.write(tanggal.getMinutes()+"/");
        document.write(tanggal.getSeconds()+"////////////");
        document.write(tanggal.getDay());
        document.write(tanggal.getMonth()+1);
        document.write("<hr>");
        var hari = ["minggu","senin","selasa","rabu","kamis","jumat","sabtu","minggu"];
        var bulan = ["desember","januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","november","desember",]
        var jam = tanggal.getHours();
        if (jam <=10) {
            document.write("selamat pagi");
        }else if (jam <=17) {
            document.write("selamat siang")
        } else if (jam <=23) {
            document.write("selamat malam")            
        }
        
        document.write("<hr>")
        document.write(hari[tanggal.getDay()]+"//");
        document.write(tanggal.getDate());
        document.write(bulan[tanggal.getMonth()+1]);
        document.write(tanggal.get)
        


    </script>
    <div>

                <a href="logout.php">logout</a>
    </div>

</body>
</html>