<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="http://localhost:8080/php-mvc/public/css/boostrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/php-mvc/public/css/style.css">

    <style>

    </style>

    <script>
    var tablinks = document.getElementsByClassName('tab-links');
    var tabcontents = document.getElementsByClassName('tab-contents');

    function opentab(tabname) {
        for (tablink of tablinks) {
            tablink.classList.remove("active-link");
        }
        for (tabcontent of tabcontents) {
            tabcontent.classList.remove("active-tab");
        }
        event.curentTarget.classList.add("active-tab");
        document.getElementById(tabname).classList.add("active-tab");
    }
    </script>
    <script>
    var sidemeu = document.getElementById("sidemeu");

    function openmenu() {
        sidemeu.style.right = "0";
    }

    function closemenu() {
        sidemeu.style.right = "-200px";
    }
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed">
        <div class="container">
            <a class="navbar-brand text-warning" href="http://localhost:8080/php-mvc/public/Home">SMEKANEDA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="http://localhost:8080/php-mvc/public/Home">Home</a>
                    <a class="nav-item nav-link" href="http://localhost:8080/php-mvc/public/jurusan">Kompetensi
                        Keahlian</a>
                    <!-- <div class="dropdown">
                        <a href="http://localhost:8080/php-mvc/public/jurusan" class="nav-item nav-link dropdown-toggle"
                            id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">Kompetensi Keahlian
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="#">Kuliner</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Desain Pemodelan dan <br> Informasi Bangunan</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Rekayasa Perangkat <br> Lunak</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Tehknik Pemanasan, Tata Udara<br> dan
                                    Pendinginan</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Akutansi</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Tehknik Konstruksi dan Perumahan </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Tekhnik Pengelasan</a></li>
                        </ul>
                    </div> -->
                    <a class=" nav-item nav-link" href="http://localhost:8080/php-mvc/public/blog">Data Guru</a>
                    <a class="nav-item nav-link" href="http://localhost:8080/php-mvc/public/siswa">Data Siswa</a>
                    <a class="nav-item nav-link" href="http://localhost:8080/php-mvc/public/user/profile">About</a>
                </div>
            </div>
        </div>
    </nav>