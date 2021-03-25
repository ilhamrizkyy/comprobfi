<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    <title>BFI Tech</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            padding-top: 54px;
        }

        .nav-link {
            color: black;
            font-size: 14pt;
        }

        .nav-link:hover {
            color: #182B6D;
            border-bottom: dotted 2px #182B6D;
        }

        .intro {
            background-image: url("/img/background_intro.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 600px;
        }

        .intro-content {
            align-items: center;
            align-content: center;
            margin-left: 35%;
            margin-top: 15%;
            position: absolute;
            max-width: 550px;
            padding: 30px;
            background-color: #F2F2F2;
            border-radius: 10px;
        }

        .btn-danger {
            margin-left: 30%;
            margin-top: 5%;
            background-color: #F20C0C;
        }

        .produk {
            background-color: #182B6D;
            color: white;
            padding: 70px 100px;
        }

        .produk-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
        }

        .produk-content {
            width: 450px;
            background-color: white;
            color: black;
            text-align: center;
            padding: 20px;
        }

        .flex-container {
            display: flex;
            margin-bottom: 2%;
        }

        .flex-child {
            flex: 1;
        }


        .flex-child-2 {
            flex: 1;
        }

        .flex-child:first-child {
            margin-right: 20px;
        }

        .tentang {
            padding: 70px 100px;
        }

        .domain-kerja {
            width: 300px;
            background-color: #f2f2f2;
            color: black;
            padding: 30px;
            margin: 2% 2% 2% 0;
        }

        .kontak {
            background-color: #182B6D;
            color: white;
            padding: 70px 100px;
            text-align: center;
        }

        #foot1,
        #foot2 {
            display: inline-block;
            margin-top: 3%;
        }

        #foot1 {
            margin-left: 7%;
        }

        #foot2 {
            text-align: right;
            margin-left: 45%;
        }

        @media (min-width: 992px) {
            body {
                padding-top: 56px;
            }
        }

    </style>
</head>

<header>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: white">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/img/Logo_BFITech.png" alt="logo" style="height: 95px"></a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Publikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>
    <div id="app">
        <div class="home">
            <div class="intro">
                <div class="intro-content">
                    <h4 style="color: #182B6D">BFI Tech</h4>
                    <p>Bentara Fraktal Indonesia Teknologi, telah memulai kerja-kerja yang berkaitan dengan ilmu data.
                        Karakteristik data akan menentukan metodologi apa yang akan diterapkan demi mengambil saripati
                        indormasi dari seliweran dan tumpukan data itu.
                    </p>
                    <a role="button" class="btn btn-danger" href="#tentang">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="produk" id="produk">
                <h4 style="margin-bottom: 5%">Produk Kami</h4>
                <div class="flex-container">
                    <div class="produk-content flex-child">
                        <img src="/img/Logo_PDBI.png" alt="logo" style="height: 95px; margin-bottom: 5%;">
                        <p><strong>Perpustakaan Data Budaya Indonesia</strong></p>
                        <p>Situs partisipatif pendataan budaya tradisional Indonesia. Dibangun bersama sejak 2007, untuk
                            tujuan preservasi informasi budaya secara digital.
                        </p>
                        <a role="button" class="btn btn-primary btn-situs"
                            onclick="window.open('https://budaya-indonesia.org/','_blank')" style="color: white">Menuju
                            Situs</a>
                    </div>
                    <div class="produk-content flex-child">
                        <img src="/img/Logo_BFINews02.png" alt="logo"
                            style="height: 50px; margin-bottom: 5%; margin-top: 7%;">
                        <p><strong>BFINEWS</strong></p>
                        <p>Portal jurnalisme data sains yang menghadirkan reportase investigasi ilmiah atas data demi
                            cara pandang baru melihat Indonesia.
                        </p>
                        <a role="button" class="btn btn-primary btn-situs"
                            onclick="window.open('https://bfinews.com/','_blank')" style="color: white">Menuju
                            Situs</a>
                    </div>
                </div>
                <div class="flex-container">
                    <div class="produk-content flex-child">
                        <img src="/img/Logo_DataInsight.png" alt="logo" style="height: 60px; margin-bottom: 5%;">
                        <p><strong>DATAINSIGHT</strong></p>
                        <p>Pemantauan percakapan yang sedang tren di media sosial, menggunakan beragam aplikasi
                            teknologi “big data” yang dibuat dan dikembangkan sendiri. Mengulas serta menalaah informasi
                            yang menjadi perhatian publik.
                        </p>
                        <a role="button" class="btn btn-primary btn-situs"
                            onclick="window.open('https://http://datainsight.id//','_blank')"
                            style="color: white">Menuju
                            Situs</a>
                    </div>
                    <div class="produk-content flex-child">
                        <img src="/img/Logo_infobudaya.png" alt="logo" style="height: 60px; margin-bottom: 5%;">
                        <p><strong>INFOBUDAYA</strong></p>
                        <p>Situs pemberitaan terkait budaya tradisional Indonesia. Menjadi ruang bertukar serta
                            mewartakan informasi dan terkait kegiatan atau perhelatan yang mengundang publik secara
                            luas.
                        </p>
                        <a role="button" class="btn btn-primary btn-situs"
                            onclick="window.open('https://www.infobudaya.net/','_blank')" style="color: white">Menuju
                            Situs</a>
                    </div>
                </div>
                <div class="flex-container">
                    <div class="produk-content flex-child">
                        <img src="/img/Logo_Archtics.png" alt="logo" style="height: 95px; margin-bottom: 5%;">
                        <p><strong>ARCHTICS</strong></p>
                        <p>Lini usaha untuk pengembangan dan pemeliharaan situs web. Fokus pada teknologi web untuk
                            produk yang perlu disesuaikan secara penuh maupun yang sudah dengan pondasi framework atau
                            CMS tertentu.
                        </p>
                        <a role="button" class="btn btn-primary btn-situs"
                            onclick="window.open('https://archtics.id/','_blank')" style="color: white">Menuju
                            Situs</a>
                    </div>
                    <div class="produk-content flex-child">
                        <img src="/img/acrobatik-300x300.png" alt="logo" style="height: 95px; margin-bottom: 5%;">
                        <p><strong>ACROBATIK</strong></p>
                        <p>Lini usaha yang menggunakan teknologi Batik Fraktal (Batik Fisika) untuk implementasi sains,
                            komputer dan budaya tradisi ke dalam berbagai media seperti: busana, produk kriya maupun
                            produk digital kreatif.
                        </p>
                        <a role="button" class="btn btn-primary btn-situs"
                            onclick="window.open('http://acrobatik.biz/','_blank')" style="color: white">Menuju
                            Situs</a>
                    </div>
                </div>
                <div class="flex-container">
                    <div class="produk-content flex-child">
                        <img src="/img/LOGO_Scate01.png" alt="logo" style="height: 95px; margin-bottom: 5%;">
                        <p><strong>SCATE</strong></p>
                        <p>Sistem kerja serta integrasi teknologi untuk mendukung kampanye maupun pemberdayaan advokasi,
                            menggunakan kemampuan komputasi dan analitik yang komprehensif.
                        </p>
                    </div>
                    <div class="produk-content flex-child" style="visibility: hidden">
                        <img src="/img/Logo_PDBI.png" alt="logo" style="height: 60px; margin-bottom: 5%;">
                        <p><strong>Perpustakaan Data Budaya Indonesia</strong></p>
                        <p>Situs partisipatif pendataan budaya tradisional Indonesia. Dibangun bersama sejak 2007, untuk
                            tujuan preservasi informasi budaya secara digital.
                        </p>
                        <a role="button" class="btn btn-primary btn-situs"
                            onclick="window.open('https://budaya-indonesia.org/','_blank')" style="color: white">Menuju
                            Situs</a>
                    </div>
                </div>
            </div>
            <div class="tentang" id="tentang">
                <h4 style="color: #182B6D">Tentang Kami</h4>
                <br>
                <div class="flex-container">
                    <div class="tentang-content flex-child">
                        <p>
                            Era informasi di awal milenia telah memberikan perubahan yang sangat signifikan dalam
                            kehidupan modern. Kehausan akan informasi melonjak.
                            <br>
                            <br>
                            Penyelidikan atas data dan informasi telah menjadi bagian dari strategi bisnis, dinamika
                            sosial dan pengambilan kebijakan publik. Pemenang bukan lagi yang tercepat, terkuat, dan
                            terkaya, melainkan siapapun yang mendapatkan informasi yang tepat atas telaah data.
                            <br>
                            <br>
                            Bentara Fraktal Indonesia Teknologi telah memulai kerja-kerja yang berkaitan dengan ilmu dan
                            teknologi terkait data. Karakteristik data akan menentukan metodologi apa yang akan
                            diterapkan demi mengambil saripati informasi dari arus deras dan kelimpahan data.
                            <br>
                            <br>
                            Domain Kerja:
                            <br>
                            <br>
                        </p>
                    </div>
                    <div class="produk-content flex-child">
                        <img src="/img/Logo_BFITech.png" alt="logo">
                    </div>
                </div>
                <div class="flex-container">
                    <div class="domain-kerja flex-child-2">
                        <p style="text-align: center; color: #182B6D"><strong>KONSULTASI</strong></p>
                        <p>Kami berpengalaman dalam kerja-kerja yang terkait ilmu data, data besar dan machine learning.
                            Karakteristik data akan menentukan metodologi apa yang akan diterapkan demi mengambil inti
                            informasi dari tumpukan data itu sehingga menajamkan pengambilan kebijakan.
                        </p>
                    </div>
                    <div class="domain-kerja flex-child-2">
                        <p style="text-align: center; color: #182B6D"><strong>PENGEMBANGAN DAN PEMELIHARAAN WEB</strong>
                        </p>
                        <p>Perusahaan kami berpengalaman dalam membangun sebuah web untuk berbagai organisasi publik dan
                            swasta. Dengan skill dan pengalaman, kami menyajikan website yang akan menjadi etalase anda
                            di dunia digital.
                        </p>
                    </div>
                    <div class="domain-kerja flex-child-2">
                        <p style="text-align: center; color: #182B6D"><strong>PENGEMBANGAN ATAU INTEGRASI
                                SISTEM</strong></p>
                        <p>Mulai dari sistem sederhana hingga kompleks, dibangun dengan prinsip antisipasi pemanfaatan
                            data dan teknologi di masa depan. Sehingga, sistem yang dibangun akan dibuat segesit mungkin
                            terhadap adaptasi teknologi dan segranular mungkin terhadap berbagai kebutuhan analisis.
                        </p>
                    </div>
                    <div class="domain-kerja flex-child-2">
                        <p style="text-align: center; color: #182B6D"><strong>ANALITIK</strong></p>
                        <p>Berbagai peralatan yang kami gunakan merupakan hasil kreasi kami demi mendapatkan sebuah
                            analisa yang kokoh dan berdasarkan data-data yang kami peroleh.
                        </p>
                    </div>
                </div>
            </div>
            <div class="kontak" id="kontak">
                <h2>Hubungi Kami</h2>

                <form action="kontak@bfitech.co.id" method="post" enctype="text/plain">
                    Name:<br>
                    <input type="text" name="name"><br>
                    E-mail:<br>
                    <input type="text" name="mail"><br>
                    Comment:<br>
                    <input type="text" name="comment" size="50"><br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

    </div>
    <footer class="py-5">
        <div class="container-footer">
            <p style="color: #182B6D; margin-left: 8%;">
                <strong> PT Bentara Fraktal Indonesia Teknologi</strong>
                <br><br>
                Jl. Sarimadu Permai Blok 24 No. 175 Bandung 40164
                <br><br>
                Telp: 022-82000390
                <br><br>
                Email: kontak@bfitech.co.id
                <br><br>
            </p>
            <hr style="border-top: 2px solid #182B6D; width: 85%">
            <a class="navbar-brand text-left" id="foot1"><img src="/img/Logo_BFITech.png" alt="logo"
                    style="height: 95px"></a>
            <p class="text-right" id="foot2" style="color: #182B6D;">Copyright &copy; 2021 BFI Technologies. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>