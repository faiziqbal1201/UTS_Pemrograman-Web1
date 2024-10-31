<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Muhammad Faiz Iqbal</title>
    <style>
    /* CSS untuk styling foto dan teks */
    .profile-container {
        text-align: center;
        margin-top: 20px;
    }

    .profile-img {
        width: 150px;
        /* ukuran foto */
        height: 150px;
        border-radius: 50%;
        /* membuat foto menjadi bulat */
        object-fit: cover;
        border: 3px solid #007bff;
        /* warna border */
    }

    .profile-name {
        font-size: 1.5em;
        font-weight: bold;
    }

    .profile-university {
        font-size: 1em;
        color: #555;
    }
    </style>
</head>

<body>

    <div class="profile-container">
        <!-- Foto Profil -->
        <img src="image/WhatsApp Image 2024-10-30 at 17.23.29_13ddb942.jpg" class="profile-img"
            alt="Foto Muhammad Faiz Iqbal">

        <!-- Nama dan Universitas -->
        <h2 class="profile-name">Muhammad Faiz Iqbal</h2>
        <p class="profile-university">Jl. Saranjana, Kota Modern</p>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/yayasan-soebono-mantofani-tingkatkan-kreativitas-siswa-dengan-jambore-ekskul-27022024-225929.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Junior High School</h5>
                    <p>Soebono Mantofani.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/1.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Vocation School</h5>
                    <p>Yapin 02.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/WhatsApp-Image-2023-05-24-at-10.44.20-1-e1684901045657.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>College</h5>
                    <p>Pelita Bangsa University.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</body>

</html>