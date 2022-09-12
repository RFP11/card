<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <title>Challange biodata</title>
    <!-- Open Sans Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Fontawesome Icons v6.1.1 -->
    <script src="https://kit.fontawesome.com/7c8801c017.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="card">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="card-inner">
            <div class="profile">
                <div class="pp">
                    <img src="Media/kaguyapp.png" alt="...">
                    <h2>Shinomiya Kaguya</h2>
                </div>
                <div class="proff">

                    <p class="bio">
                        <?php
                        $bio = "Kaguya Shinomiya (四宮 かぐや Shinomiya Kaguya)<br>
                    Pengisi suara: Aoi Koga<br><br>
                    Karakter utama dari manga ini, Kaguya adalah wakil ketua OSIS di Akademi Shuchiin. Ia dikenal atas kecantikan, kecerdasan dan kekayaan, serta keluarganya yang memiliki salah satu bisnis konglomerat terbesar di Jepang.Karena dilahirkan dalam keluarga kelas elit, cara Kaguya dibesarkan menyebabkannya menjadi sombong, dingin, dan penuh perhitungan, tetapi dia benar-benar seorang gadis remaja yang polos, baik hati, dan tidak berat sebelah. Untuk membuat Miyuki mengakui cintanya secara langsung atau tidak langsung, Kaguya biasanya melakukan rencana untuk menciptakan keadaan yang menguntungkannya. Selain terlibat di OSIS, dia adalah anggota klub Panahan.";
                        echo $bio;

                        ?></p>

                    <div class="social-icons">
                        <i class="fab fa-linkedin-in"></i>
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-google"></i>

                    </div>
</body>

</html>