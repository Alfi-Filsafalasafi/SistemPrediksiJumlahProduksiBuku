<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/Adminlte/dist/img/icon_videf11.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;700&display=swap');
        *{
            font-family: 'Inter', sans-serif;
        }
        .row{
            background: white;
            border-radius : 20px;
        }
        body{
            background : #D7DDE7;
        }
        h4{
            
            font-weight:500;
        }
        .keterangan{
            font-size:12px;
            font-weight:300;
            margin-bottom: 5px;
        }
        .judul{
            font-size:10px;
            letter-spacing:2px;
        }
        .deskripsi{
            font-weight:200;
        }
        .btn-masuk{
            background:#3C37FF;
            border : none;
            padding: 10px;
            width :160px;
            border-radius:10px;
            font-weight:500;
        }
        .msk{
            font-weight:700;
            font-size:24px;
        }
        .textIN{
            margin-top:20px;
            margin-bottom:10px;
            font-size:14px;
            font-weight:700;
            color:#5E5E60;
        }
        .peringatan{
            font-size:14px;
            border : none;
            background: #f5f5f5;
        }
        @media (min-width:991px){
            .msk{
                margin-top:100px;
            }
            .deskripsi{
                margin-bottom:70px;
            }
        }
        @media (max-width:991px){
            .msk{
                margin-top:20px;
            }
        }
    </style>

</head>

<body>
<section class="Form my-5">
    <div class="container px-lg-5">
        <div class="row">
            <div class="col-lg-4 text-white">
                <div class="card my-3 p-4" style="border-radius:20px; background:#3C37FF">
                <div class="judul pb-lg-5 mt-2">PrediksiBuku</div>
                <h4 class="pt-lg-5 pt-2">Sistem Prediksi <br> Jumlah Produksi Buku</h4>
                    <div class="pb-2 pt-1 deskripsi">Menggunakan Algoritma Fuzzy Logic Tsukamoto</div>
                    <div class="card mt-5 p-3 border-0" style="background:rgba(37, 32, 227, 1)">
                        <div class="text keterangan mb-2">
                        Merupakan Tugas Akhir Mata Kuliah Kompotasi Cerdas
                        </div>
                        <ul class="keterangan">
                            <li>Alfi Filsafalasafi</li>
                            <li>Lintang Novianti Ramadani</li>
                            <li>Maharani Anisa Pasha</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form action="<?php echo base_url("login"); ?>" class="m-4 mb-lg-5" method="post">
                    <div class="form-row">
                        <div class="msk">Masuk</div>
                        <p class="">Silahkan Masukkan Username dan Password Anda</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <div class="textIN">Username</div>
                            <input type="text" name="username" class="form-control" placeholder="masukkan username">
                        </div>
                        <div class="col-md-6">
                            <div class="textIN">Password</div>
                            <input type="password" name="password" class="form-control" placeholder="masukkan password">
                        </div>
                    </div>
                    <div class="form-row mt-3">
                        <div class="col-lg-7">
                        <button type="submit" class="btn-masuk text-white mt-3">Masuk</button>
                        </div>
                    </div>
                </form>
                <div class="card mx-4 mb-3 border-none px-4 pt-3 peringatan">
                    <div>Website ini digunakan untuk :</div>
                    <ul>
                        <li>Menerapkan metode Fuzzy Tsukamoto dalam menentukan jumlah produksi buku berdasarkan data persediaan dan jumlah permintaan.</li>
                        <li>Mengembangkan sebuah sistem informasi berbasis website dengan metode Fuzzy Tsukamoto untuk menentukan jumlah produksi buku berdasarkan data persediaan dan jumlah permintaan</li>
                    </ul>
                </div>
                
            </div>
            
        </div>
    </div>
</section>


    <!-- <div class="container-login">

        <div class="logo">
            <img src="<?php echo base_url(); ?>assets/img/buku.png" alt="buku">
            <p>SISTEM PREDIKSI JUMLAH PRODUKSI BUKU</p>
            <span>DENGAN ALGORITMA FUZZY LOGIC TSUKAMOTO</span>
        </div>
        <div class="login-form">
            <form action="<?php echo base_url("login"); ?>" method="post">

                <p>Masukkan Username dan Password untuk Login</p>
                <input type="text" name="username" class="" placeholder="USERNAME">
                <input type="password" name="password" class="" placeholder="PASSWORD">
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </div> -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>


</html>