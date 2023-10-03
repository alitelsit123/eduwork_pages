<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage Eduwork</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/53f19c6b27.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <style>  
        *{
            font-family: 'Poppins';
        }
        .swiper {
          width: 100%;
          height: 100%;
        } 
        .swiper-wrapper{
            width: 100%;
            display: flex;
            flex-direction: row;
            margin-top:34px;
        }
        .swiper-slide{
            width: 317px;
            height: 401px;
            border-radius: 20px;
            padding-left: 22px;
            padding-right: 22px;
            padding-top: 22px;
            padding-bottom: 45px;
            background-color: #fff;
            margin-left: 30px;
            margin-right: 30;
        }
        .swiper-slide-active{
            width: 317px;
        }
        .swiper-slide .img-profile{
            width: 77px;
            height: 70px;
            object-fit: cover;
            border-radius: 10px;
            float: left;
        }
        .swiper-slide .identitas{
            text-align: left;
            margin-left: 0;
        }
        .swiper-slide-active p{
            display: block;
        }
        @media only screen and (max-width:760px){
            .swiper{
                width:80%;
                gap: 0px;
            }
            .swiper-wrapper{
                width: 80%;
                margin-bottom: 20px;
                gap: 0;
            }
            .swiper-slide{
                width: 100%;
                margin-left: 0;
                margin-right: 0;
            }
            .swiper-slide-active{
                width: 100%;
            }

        }
      </style>

</head>
<body class="bg-[#f6fcff] text-[#404040] font-['Poppins']">
<?php include("include/navbar.php");?>
    <?php include("include/section/hero.php");?>
    <?php include("include/section/login.php");?>
    <?php include("include/section/register.php");?>
    <?php include("include/section/partner.php");?>
    <?php include("include/section/categories.php");?>
    <?php include("include/section/thumbnails.php");?>
    <?php include("include/section/program.php");?>
    <?php include("include/section/benefit.php");?>
    <?php include("include/section/info.php");?>
    <?php include("include/section/isa.php");?>
    <?php include("include/section/komunitas-fasilitas.php");?>
    <?php include("include/section/biaya.php");?>
    <?php include("include/section/testimoni.php");?>
    <?php include("include/section/faq.php");?>
<?php include("include/footer.php")?>

<!-- JS -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="./public/app.js"></script>
      <!-- Swiper JS -->
      <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
    effect:'slide',    
    direction: 'horizontal',
    centerdSlides:true,
    loop:true,
    slideToClickedSlide:true,
    autoplay:{
        delay: 5000,
    },
    breakpoints:{
        0:{
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 1,

        },
        720:{
            slidesPerView: 'auto',
        },
    },
    grabCursor:true,
    slidesPerGroup: 1,
    navigation: {
        nextEl: ".swiper-Button-next",
        prevEl: ".swiper-Button-prev",
    },
    });

</script>    
</body>
</html>