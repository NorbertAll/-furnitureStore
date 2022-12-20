<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php include 'header.php'; ?>

    <div class="heading">
        <h3>about us</h3>
        <p> <a href="home.php">home</a> / about </p>
    </div>

    <section class="about">

        <div class="flex">

            <div class="image">
                <img src="images/about-img.jpg" alt="">
            </div>

            <div class="content">
                <h3>why choose us?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet voluptatibus aut hic molestias,
                    reiciendis natus fuga, cumque excepturi veniam ratione iure. Excepturi fugiat placeat iusto facere
                    id officia assumenda temporibus?</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia
                    corporis ratione saepe sed adipisci?</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>

        </div>

    </section>

    <section class="reviews">

        <h1 class="title">client's reviews</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic-1.jpg" alt="">
                <p>Beutifull chair, very comfortable</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Karol Woźniak</h3>
            </div>

            <div class="box">
                <img src="images/pic-2.jpg" alt="">
                <p>I love that chiar</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Zygmunt Szpara</h3>
            </div>

            <div class="box">
                <img src="images/pic-3.jpg" alt="">
                <p>My wife love this bed</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Karol Marks</h3>
            </div>

            <div class="box">
                <img src="images/pic-4.jpg" alt="">
                <p>The best table</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Jan Koler</h3>
            </div>

            <div class="box">
                <img src="images/pic-5.jpg" alt="">
                <p>Good sofa, no comments ;)</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Kaja Wojta</h3>
            </div>

            <div class="box">
                <img src="images/pic-6.jpg" alt="">
                <p>Roomy, solid, nice wardrobe</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>Anna Lubicka</h3>
            </div>

        </div>

    </section>

    <section class="authors">

        <h1 class="title">greate authors</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/author-1.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Norbert Gutkowski</h3>
            </div>

            <div class="box">
                <img src="images/author-2.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Dawid Gutkowska</h3>
            </div>

            <div class="box">
                <img src="images/author-3.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Bożena Gutkowski</h3>
            </div>

            <div class="box">
                <img src="images/author-4.jpg" alt="">
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
                <h3>Alicja Gutkowska</h3>
            </div>





        </div>

    </section>







    <?php include 'footer.php'; ?>

    <script src="js/script.js"></script>

</body>

</html>