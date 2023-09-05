<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="http://localhost:8080/php-mvc/public/css/boostrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="http://localhost:8080/php-mvc/public/css/style.css"> -->

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
    <nav style="" class="border-bottom border-2">
        <div class="container">
            <div class="container">
                <div class="row my-2 fw-bold">
                    <div class="col-2">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path
                                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                        </svg>
                        0821-4009-6790
                    </div>
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                            <path
                                d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                        </svg>
                        smkduatrenggalek@yahoo.co.id
                    </div>

                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="my-3">
            <div class="d-flex justify-center items-center">
                <a class="navbar-brand text-warning fw-bold" href="http://localhost:8080/php-mvc/public/Home"><img
                        src="http://localhost:8080/php-mvc/public/img/logosmk.png" style="height: 50px" alt=""></a>
                <h5 class="pt-3 fw-bold text-uppercase" style="color:rgb(0, 0, 151);">Sekolah Menengah Kejuruan Negeri 2
                    Trenggalek</h5>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg border-top border-bottom" style="background-color:rgb(0, 0, 151);">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link text-light text-center"
                        href="http://localhost:8080/php-mvc/public/home">Home</a>
                    <div class="dropdown">
                        <a href="http://localhost:8080/php-mvc/public/jurusan"
                            class="text-light nav-item nav-link dropdown-toggle" id="dropdownMenuButton2"
                            data-bs-toggle="dropdown" aria-expanded="false">Kompetensi Keahlian
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item" href="http://localhost:8080/php-mvc/public/kuliner">Kuliner</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="http://localhost:8080/php-mvc/public/dpib">Desain
                                    Pemodelan dan <br> Informasi Bangunan</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="http://localhost:8080/php-mvc/public/rpl">Rekayasa
                                    Perangkat <br> Lunak</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="http://localhost:8080/php-mvc/public/tptu">Tehknik
                                    Pemanasan, Tata Udara<br> dan
                                    Pendinginan</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="http://localhost:8080/php-mvc/public/akl">Akutansi</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="http://localhost:8080/php-mvc/public/kgsp">Tehknik
                                    Konstruksi dan Perumahan </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="http://localhost:8080/php-mvc/public/tp">Tekhnik
                                    Pengelasan</a></li>
                        </ul>
                    </div>
                    <a class=" nav-item nav-link text-light" href="http://localhost:8080/php-mvc/public/blog">Data
                        Guru</a>
                    <a class="nav-item nav-link text-light" href="http://localhost:8080/php-mvc/public/siswa">Data
                        Siswa</a>
                    <a class="nav-item nav-link text-light"
                        href="http://localhost:8080/php-mvc/public/user/profile">About</a>
                </div>
            </div>
        </div>
    </nav>