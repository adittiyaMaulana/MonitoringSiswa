@extends('layouts.default')

@section('title','Homepage')

@section('content')
    <!-- ============================================================================================= -->
    <!-- sidebar -->
    <div class="sidebar">
        <ul>
            <li class="list active">
                <a href="/homepageAdmin">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>

            <li class="list">
                <a href="/jadwalKelasSiswa">
                    <span class="icon">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </span>
                    <span class="title">Jadwal</span>
                </a>
            </li>

            <li class="list">
                <a href="/finansialSiswa">
                    <span class="icon">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </span>
                    <span class="title">Finansial</span>
                </a>
            </li>

            <li class="list">
                <a href="/beritaAdmin">
                    <span class="icon">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </span>
                    <span class="title">Berita</span>
                </a>
            </li>

            <li class="list">
                <a href="/data">
                    <span class="icon">
                        <ion-icon name="clipboard-outline"></ion-icon>
                    </span>
                    <span class="title">Data</span>
                </a>
            </li>

            <li class="list">
                <a href="/dokumenFiturBantuan">
                    <span class="icon">
                        <ion-icon name="download-outline"></ion-icon>
                    </span>
                    <span class="title">Fitur Bantuan</span>
                </a>
            </li>

            <li class="list">
                <a href="/tentangSekolahAdmin">
                    <span class="icon">
                        <ion-icon name="alert-circle-outline"></ion-icon>
                    </span>
                    <span class="title">Tentang</span>
                </a>
            </li>

            <li class="list">
                <a href="#">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>

        </ul>
    </div>

    <!-- contentt -->

    <div class="my-content">

        <!-- ====================================================================================== -->
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light ">
            <!-- Container wrapper -->
            <div class="container-fluid">

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2">
                        <h4>MOS</h4>
                    </a>
                </div>

                <!-- Right elements -->
                <div class="d-flex align-items-center">
                    <!-- Icon pengaduan -->
                    <a class=" d-flex align-items-center mr-3 mt-2" href="/saranDanMasukanAdmin">
                        <span class="icon">
                            <ion-icon name="chatbox-ellipses" style="font-size: 1.3em; color: #D6C8C8;"></ion-icon>
                        </span>
                    </a>
                    
                    <!-- Icon pesan -->
                    <a class=" d-flex align-items-center mr-3 mt-2" href="/pesanAdmin">
                        <span class="icon">
                            <ion-icon name="mail" style="font-size: 1.3em; color: #D6C8C8;"></ion-icon>
                        </span>
                    </a>

                    <!-- gambar user -->
                    <a class=" d-flex align-items-center">
                        <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-circle" height="25" alt="" loading="lazy" />
                    </a>

                    <!-- nama user -->
                    <a class=" d-flex align-items-center ml-3 mt-3" style="text-decoration: none; color: #404040;">
                        <p>Admin</p>
                    </a>

                </div>
            </div>
        </nav>

        <div class="content">
            <div class="judul">
                <p>Selamat Datang!!!!!</p>
            </div>
            <div class="note">
                <p>Silahkan memulai aktivitas anda</p>
            </div>

            <img src="image/chracter.svg" style="margin-top: 20px;">

        </div>


        <!-- end my-content / semua content -->
    </div>

@endsection