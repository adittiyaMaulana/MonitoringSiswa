<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/content.css')}}">
    <link rel="stylesheet" href="{{asset('css/tentangsekolah.css')}}">
    <title>Tentang Sekolah</title>
</head>

<body>
    <!-- ============================================================================================= -->
    <!-- sidebar -->
    <div class="sidebar">
        <ul>
            <li class="list">
                <a href="/homepage">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Home</span>
                </a>
            </li>

            <li class="list">
                <a href="/jadwalKelas">
                    <span class="icon">
                        <ion-icon name="calendar-outline"></ion-icon>
                    </span>
                    <span class="title">Jadwal</span>
                </a>
            </li>

            <li class="list">
                <a href="/finansial">
                    <span class="icon">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </span>
                    <span class="title">Finansial</span>
                </a>
            </li>

            <li class="list">
                <a href="/berita">
                    <span class="icon">
                        <ion-icon name="newspaper-outline"></ion-icon>
                    </span>
                    <span class="title">Berita</span>
                </a>
            </li>

            <li class="list">
                <a href="/nilai">
                    <span class="icon">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </span>
                    <span class="title">Nilai</span>
                </a>
            </li>

            <li class="list">
                <a href="/kehadiran">
                    <span class="icon">
                        <ion-icon name="create-outline"></ion-icon>
                    </span>
                    <span class="title">Kehadiran</span>
                </a>
            </li>

            <li class="list">
                <a href="/fiturBantuan">
                    <span class="icon">
                        <ion-icon name="download-outline"></ion-icon>
                    </span>
                    <span class="title">Fitur Bantuan</span>
                </a>
            </li>

            <li class="list active">
                <a href="/tentangSekolah">
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

        <!-- gambar -->
        <div class="gambar">
            <img class=" mt-3 mr-3" src="{{asset('image/school1.jpg')}}" alt="">
        </div>

        <!-- tentang sekolah -->
        <div class="container-tentang-sekolah">
            <div class="box-tentang-sekolah">
                <div class="center">
                    <p>Tentang Kami</p>
                </div>
            </div>

            <div class="box-tentang-sekolah">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga aperiam soluta laudantium numquam nam asperiores quidem, eveniet dolor atque ducimus at ullam saepe? Vero magnam, quod odit dolore quidem illum.
                Odio inventore ut dolor reprehenderit quae! Libero quisquam cum cumque saepe vel, dolores labore neque consequuntur alias tempora obcaecati, sed explicabo totam repudiandae molestiae consectetur, veritatis suscipit iure facilis nulla?</p>
            </div>
        </div>
        

        <!-- visi misi -->
        <div class="visi-misi">
            <div class="box-visi-misi">
                <div class="judul-visi-misi">
                    <p>Visi</p>    
                </div>

                <div class="isi-visi-misi">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam repellat corporis voluptas quam at pariatur dolorem nemo atque, laborum id molestiae assumenda animi! Voluptatum excepturi pariatur perspiciatis, repudiandae vel suscipit.</p>
                </div>
            </div>
            
            <div class="box-visi-misi">
                <div class="judul-visi-misi">
                    <p>Misi</p>
                </div>

                <div class="isi-visi-misi">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia cum soluta sed eos porro laborum, quas quod cumque debitis sunt? Ullam, qui ad! Natus nostrum minus nam voluptatibus placeat possimus?
                </div>
            </div>

        </div>

        <div class="struktur-organisasi">
            <p>Struktur organisasi</p>



        </div>





    </div>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script>
        // menambahkan active class di select list item (agar bisa di select)
        let list = document.querySelectorAll(".list");
        for (let i = 0; i < list.length; i++) {
            list[i].onclick = function() {
                let j = 0;
                while (j < list.length) {
                    list[j++].className = "list";
                }
                list[i].className = "list active";
            };
        }
    </script>

</body>

</html>