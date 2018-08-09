
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="15x15" href="assets/images/logo-bantul.png">
    <title>EIS DPMPT KOTA BANTUL</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Online -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        /*hr {
            display: block;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            margin-left: auto;
            margin-right: auto;
            border-style: inset;
            border-width: 3px;
            background: #00a4da;
        }*/
        tbody tr td {
            font-family: 'Poppins', sans-serif;
            color: #000;
        }
        .alert-primary {
            background-color: #477ef8;
            border-color: #a2bfff;
            color: #fff;
        }
    </style>
</head>

<body class="fix-header fix-sidebar">

    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
       <!-- header header  -->
        <div class="header">
            <a href="">
                <!-- Logo icon -->
               <!--  <b><img src="assets/images/bantul.png" alt="" class="dark-logo" height="40px"/></b> -->
                <!--End Logo icon -->
                <!-- Logo text -->
                <span style="color: #fff;">&nbsp; Dashboard DPMPT KOTA BANTUL</span>
                <span style="float: right; color: #fff; padding-right: 50px;" id="last"></span>
            </a>
        </div>
        <!-- End header header -->
        <!-- Container fluid  -->
        <div class="container">              
            <div class="row">
                <!-- SLide Show -->
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="panel-body">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="assets/images/slide1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/slide1.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="assets/images/slide1.jpg" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div>
                        </div>
                    </div>
                </div>
                 <!-- Pendaftaran -->
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>Pendaftaran</h5><hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card" style="background-color: #ff6600; padding: 5px;">
                                <div class="card-body text-center">
                                   <p style="color: #000; margin-bottom: -1rem;">Hari Ini</p> <hr>
                                   <h1 style="color: #fff;" id="p_hari_ini"></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="background-color: #66ff33; padding: 5px;">
                                <div class="card-body text-center">
                                   <p style="color: #000; margin-bottom: -1rem;">Bulan Ini</p> <hr>
                                   <h1 style="color: #fff;" id="p_bulan_ini"></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="background-color: #00ffff; padding: 5px;">
                                <div class="card-body text-center">
                                   <p style="color: #000; margin-bottom: -1rem;">Tahun Ini</p> <hr>
                                   <h1 style="color: #fff;" id="p_tahun_ini"></h1>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>Izin Terbit</h5><hr>
                            </div>
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card" style="background-color: #cc66ff; padding: 5px;">
                                <div class="card-body text-center">
                                   <p style="color: #000; margin-bottom: -1rem;">Hari Ini</p> <hr>
                                    <h1 style="color: #fff;" id="i_hari_ini"></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="background-color: #99ccff; padding: 5px;">
                                <div class="card-body text-center">
                                    <p style="color: #000; margin-bottom: -1rem;">Bulan Ini</p> <hr>
                                    <h1 style="color: #fff;" id="i_bulan_ini"></h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card" style="background-color: #6699ff; padding: 5px;">
                                <div class="card-body text-center">
                                    <p style="color: #000; margin-bottom: -1rem;">Tahun Ini</p> <hr>
                                    <h1 style="color: #fff;" id="i_tahun_ini"></h1>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="row">
                <!-- Proses Izin -->
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h5>Peoses Izin</h5>
                                <hr>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="alert" role="alert" style="background: #ffff00;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td><h3 style="color: #ff0000;">Verifikasi Pendaftaran</h3></td>
                                                <td><h1 id="v_pendaftaran" style="color: #ff0000;"></h1></td>
                                            </tr>
                                      </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #66ff33; margin-top: -25px;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td style="color: #fff;"><h3 style="color: #fff;">Validasi Pendaftaran</h3></td>
                                                <td><h1 id="val_pendaftaran" style="color: #fff;"></h1></td>
                                             </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #99ccff; margin-top: -25px;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td><h3 style="color: #fff;">Pendataan (Backoffice)</h3></td>
                                                <td><h1 id="pendataan" style="color: #fff;"></h1></td>
                                        </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #ff99cc; margin-top: -25px;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td><h3 style="color: #fff;">Entry Hasil Tinjauan (Tim Teknis)</h3></td>
                                                <td><h1 id="e_teknis" style="color: #fff;"></h1></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #ffcc66; margin-top: -25px;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td><h3 style="color: #fff;">Validasi Pendataan (Kasi Pendataan)</h3></td>
                                                <td><h1 id="val_pendataan" style="color: #fff;"></h1></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #cc6600; margin-top: -25px;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td><h3 style="color: #fff;">Penetapan Izin (Kasi Penetapan)</h3></td>
                                                <td><h1 id="si_penetapan" style="color: #fff;"></h1></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #808080; margin-top: -25px;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td><h3 style="color: #fff;">Penetapan Izin (Kabid Penetapan)</h3></td>
                                                <td><h1 id="bid_penetapan" style="color: #fff;"></h1></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #006699; margin-top: -25px;">
                                  <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td><h3 style="color: #fff;">Pembayaran</h3></td>
                                                <td><h1 id="pembayaran" style="color: #fff;"></h1></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #669900; margin-top: -25px;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td><h3 style="color: #fff;">Pembuatan Izin</h3></td>
                                                <td><h1 id="p_izin" style="color: #fff;"></h1></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #cc00cc; margin-top: -25px;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                             <tr>
                                                <td><h3 style="color: #fff;">Pembuatan SKRD</h3></td>
                                                <td><h1 id="p_skrd" style="color: #fff;"></h1></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #ff6600; margin-top: -25px;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td><h3 style="color: #fff;">Tanda Tangan Izin</h3></td>
                                                <td><h1 id="ttd_izin" style="color: #fff;"></h1></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="alert" role="alert" style="background: #ff0000; margin-top: -25px; padding-bottom: -70px;">
                                    <div class="table-responsive">
                                        <table width="495px">
                                            <tr>
                                                <td><h3 style="color: #fff;">Penyerahan Izin</h3></td>
                                                <td><h1 id="serah_izin" style="color: #fff;"></h1></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Prioritas -->
                <div class="col-sm-6">
                    <div class="panel" style="border: 1px solid #dee2e6!important;">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-header" style="background: #00ffff;">
                                            <div class="table-responsive">
                                                <table width="495px">
                                                    <tr>
                                                        <td><h5 style="color: #000;">Daftar Prioritas ( 1 hari sebelum tanggal selesai )</h5></td>
                                                        <td><h1 id="jml_p1"></h1></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> <br>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <marquee direction="up" style="height: 150px; color: #000;">
                                    <ul class="list-group list-group-flush" id="p1">
                                    </ul>
                                </marquee>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="panel"  style="border: 1px solid #dee2e6!important;">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-header" style="background: #ffff00;">
                                            <div class="table-responsive">
                                                <table width="495px">
                                                    <tr>
                                                        <td><h5 style="color: #000;">Daftar Prioritas ( Tanggal selesai hari ini )</h5></td>
                                                        <td><h1 id="jml_p2"></h1></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> <br>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <marquee direction="up" style="height: 150px; color: #000;">
                                    <ul class="list-group list-group-flush" id="p2">
                                    </ul>
                                </marquee>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="panel"  style="border: 1px solid #dee2e6!important;">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card-header" style="background: #ff0000;">
                                             <div class="table-responsive">
                                                <table width="495px">
                                                    <tr>
                                                        <td><h5 style="color: #fff;">Daftar Prioritas ( Lebih dari tanggal selesai )</h5></td>
                                                        <td><h1 id="jml_p3" style="color: #fff;"></h1></td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div> <br>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <marquee direction="up" style="height: 150px; color: #000;">
                                    <ul class="list-group list-group-flush" id="p3">
                                    </ul>
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End PAge Content -->
        </div>
        <!-- End Container fluid  -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <script src="assets/js/lib/jquery/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/leafo/sticky-kit/v1.1.2/jquery.sticky-kit.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
    <!--Custom JavaScript -->
    <script src="assets/js/custom.min.js"></script>

    <script type="text/javascript">     
        var url = 'http://izinonline.bantulkab.go.id/index.php/ws/front/dashboard/';
        $(document).ready(function(){
            var tanggal = new Date();
            arrbulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
            date = new Date();
            millisecond = date.getMilliseconds();
            detik = date.getSeconds();
            menit = date.getMinutes();
            jam = date.getHours();
            hari = date.getDay();
            tanggal = date.getDate();
            bulan = date.getMonth();
            tahun = date.getFullYear();
            $("#last").html("Last update "+tanggal+"-"+arrbulan[bulan]+"-"+tahun+" "+jam+":"+menit+":"+detik);
            //get pendaftaran
            $.ajax({
                url: url+'pendaftaran',
                type: 'GET',
                dataType : 'JSON',
                success:function(data){
                    console.log(data);
                    $("#p_hari_ini").empty();
                    $("#p_bulan_ini").empty();
                    $("#p_tahun_ini").empty();
                    for (row in data) {
                        $("#p_hari_ini").html("<center>"+data.hari_ini+"</center>");
                        $("#p_bulan_ini").html("<center>"+data.bulan_ini+"</center>");
                        $("#p_tahun_ini").html("<center>"+data.tahun_ini+"</center>");
                    }
                }       
            });
            //get izin terbit
            $.ajax({
                url: url+'izin_terbit',
                type: 'GET',
                dataType : 'JSON',
                success:function(data){
                    console.log(data);
                    $("#i_hari_ini").empty();
                    $("#i_bulan_ini").empty();
                    $("#i_tahun_ini").empty();
                    for (row in data) {
                        $("#i_hari_ini").html("<center>"+data.hari_ini+"</center>");
                        $("#i_bulan_ini").html("<center>"+data.bulan_ini+"</center>");
                        $("#i_tahun_ini").html("<center>"+data.tahun_ini+"</center>");
                    }
                }         
            });
            //get proses izin
            $.ajax({
                url: url+'proses_izin',
                type: 'GET',
                dataType : 'JSON',
                success:function(data){
                    $("#v_pendaftaran").empty();
                    $("#val_pendaftaran").empty();
                    $("#pendataan").empty();
                    $("#e_teknis").empty();
                    $("#val_pendataan").empty();
                    $("#si_penetapan").empty();
                    $("#bid_penetapan").empty();
                    $("#pembayaran").empty();
                    $("#p_izin").empty();
                    $("#p_skrd").empty();
                    $("#ttd_izin").empty();
                    $("#serah_izin").empty();
                    console.log(data);
                    $("#v_pendaftaran").html(data.verifikasi_pendaftaran);
                    $("#val_pendaftaran").html(data.validasi_pendaftaran);
                    $("#pendataan").html(data.pendataan);
                    $("#e_teknis").html(data.entry_hasil_tinjauan);
                    $("#val_pendataan").html(data.validasi_pendataan);
                    $("#si_penetapan").html(data.penetapan_izin_kasi);
                    $("#bid_penetapan").html(data.penetapan_izin_kabid);
                    $("#pembayaran").html(data.pembayaran);
                    $("#p_izin").html(data.pembuatan_izin);
                    $("#p_skrd").html(data.pembuatan_skrd);
                    $("#ttd_izin").html(data.tanda_tangan_izin);
                    $("#serah_izin").html(data.penyerahan_izin);
                }      
            });
            //get prioritas 1
            $.ajax({
                url: url+'prioritas1',
                type: 'GET',
                dataType : 'JSON',
                success:function(data){
                    console.log(data);
                    $("#jml_p1").html(data.jumlah);
                    $("#p1").empty();
                    var i;
                    for(i = 0; i <= data.detail.length; i++) {
                        var markup = "<li class='list-group-item'>"+data.detail[i].nama_pemohon+" - "+data.detail[i].jenis_izin+" ("+data.detail[i].proses_izin+")</li>";
                        $("#p1").append(markup);
                    }
                }
            });
            //get prioritas 2
            $.ajax({
                url: url+'prioritas2',
                type: 'GET',
                dataType : 'JSON',
                success:function(data){
                    console.log(data);
                    $("#jml_p2").html(data.jumlah);
                    $("#p2").empty();
                    var i;
                    for(i = 0; i <= data.detail.length; i++) {
                        var markup = "<li class='list-group-item'>"+data.detail[i].nama_pemohon+" - "+data.detail[i].jenis_izin+" ("+data.detail[i].proses_izin+")</li>";
                        $("#p2").append(markup);
                    }
                }   
            });
            //get prioritas 3
            $.ajax({
                url: url+'prioritas3',
                type: 'GET',
                dataType : 'JSON',
                success:function(data){
                    console.log(data);
                    $("#jml_p3").html(data.jumlah);
                    $("#p3").empty();
                    var i;
                    for(i = 0; i <= data.detail.length; i++) {
                        var markup = "<li class='list-group-item'>"+data.detail[i].nama_pemohon+" - "+data.detail[i].jenis_izin+" ("+data.detail[i].proses_izin+")</li>";
                        $("#p3").append(markup);
                    }
                }        
            });

            // var sTimeOut = setTimeout(function () {
            setInterval(function() {
                var tanggal = new Date();
                arrbulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
                date = new Date();
                millisecond = date.getMilliseconds();
                detik = date.getSeconds();
                menit = date.getMinutes();
                jam = date.getHours();
                hari = date.getDay();
                tanggal = date.getDate();
                bulan = date.getMonth();
                tahun = date.getFullYear();
                $("#last").html("Last update "+tanggal+"-"+arrbulan[bulan]+"-"+tahun+" "+jam+":"+menit+":"+detik);
                //get pendaftaran
                $.ajax({
                    url: url+'pendaftaran',
                    type: 'GET',
                    dataType : 'JSON',
                    success:function(data){
                        console.log(data);
                        $("#p_hari_ini").empty();
                        $("#p_bulan_ini").empty();
                        $("#p_tahun_ini").empty();
                        for (row in data) {
                            $("#p_hari_ini").html("<center>"+data.hari_ini+"</center>");
                            $("#p_bulan_ini").html("<center>"+data.bulan_ini+"</center>");
                            $("#p_tahun_ini").html("<center>"+data.tahun_ini+"</center>");
                        }
                    }       
                });
                //get izin terbit
                $.ajax({
                    url: url+'izin_terbit',
                    type: 'GET',
                    dataType : 'JSON',
                    success:function(data){
                        console.log(data);
                        $("#i_hari_ini").empty();
                        $("#i_bulan_ini").empty();
                        $("#i_tahun_ini").empty();
                        for (row in data) {
                            $("#i_hari_ini").html("<center>"+data.hari_ini+"</center>");
                            $("#i_bulan_ini").html("<center>"+data.bulan_ini+"</center>");
                            $("#i_tahun_ini").html("<center>"+data.tahun_ini+"</center>");
                        }
                    }         
                });
                //get proses izin
                $.ajax({
                    url: url+'proses_izin',
                    type: 'GET',
                    dataType : 'JSON',
                    success:function(data){
                        $("#v_pendaftaran").empty();
                        $("#val_pendaftaran").empty();
                        $("#pendataan").empty();
                        $("#e_teknis").empty();
                        $("#val_pendataan").empty();
                        $("#si_penetapan").empty();
                        $("#bid_penetapan").empty();
                        $("#pembayaran").empty();
                        $("#p_izin").empty();
                        $("#p_skrd").empty();
                        $("#ttd_izin").empty();
                        $("#serah_izin").empty();
                        console.log(data);
                        $("#v_pendaftaran").html(data.verifikasi_pendaftaran);
                        $("#val_pendaftaran").html(data.validasi_pendaftaran);
                        $("#pendataan").html(data.pendataan);
                        $("#e_teknis").html(data.entry_hasil_tinjauan);
                        $("#val_pendataan").html(data.validasi_pendataan);
                        $("#si_penetapan").html(data.penetapan_izin_kasi);
                        $("#bid_penetapan").html(data.penetapan_izin_kabid);
                        $("#pembayaran").html(data.pembayaran);
                        $("#p_izin").html(data.pembuatan_izin);
                        $("#p_skrd").html(data.pembuatan_skrd);
                        $("#ttd_izin").html(data.tanda_tangan_izin);
                        $("#serah_izin").html(data.penyerahan_izin);
                    }      
                });
                //get prioritas 1
                $.ajax({
                    url: url+'prioritas1',
                    type: 'GET',
                    dataType : 'JSON',
                    success:function(data){
                        console.log(data);
                        $("#jml_p1").html(data.jumlah);
                        $("#p1").empty();
                        var i;
                        for(i = 0; i <= data.detail.length; i++) {
                            var markup = "<li class='list-group-item'>"+data.detail[i].nama_pemohon+" - "+data.detail[i].jenis_izin+" ("+data.detail[i].proses_izin+")</li>";
                            $("#p1").append(markup);
                        }
                    }
                });
                //get prioritas 2
                $.ajax({
                    url: url+'prioritas2',
                    type: 'GET',
                    dataType : 'JSON',
                    success:function(data){
                        console.log(data);
                        $("#jml_p2").html(data.jumlah);
                        $("#p2").empty();
                        var i;
                        for(i = 0; i <= data.detail.length; i++) {
                            var markup = "<li class='list-group-item'>"+data.detail[i].nama_pemohon+" - "+data.detail[i].jenis_izin+" ("+data.detail[i].proses_izin+")</li>";
                            $("#p2").append(markup);
                        }
                    }   
                });
                //get prioritas 3
                $.ajax({
                    url: url+'prioritas3',
                    type: 'GET',
                    dataType : 'JSON',
                    success:function(data){
                        console.log(data);
                        $("#jml_p3").html(data.jumlah);
                        $("#p3").empty();
                        var i;
                        for(i = 0; i <= data.detail.length; i++) {
                            var markup = "<li class='list-group-item'>"+data.detail[i].nama_pemohon+" - "+data.detail[i].jenis_izin+" ("+data.detail[i].proses_izin+")</li>";
                            $("#p3").append(markup);
                        }
                    }        
                });
            }, 60000);
        });
    </script>

</body>

</html>