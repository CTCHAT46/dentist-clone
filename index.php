<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connect failed');
if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name,email,number,date)
    VALUES('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $message[] = 'appointment made successfully!';
    } else {
        $message[] = 'appointment failed';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dentist Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">DENTIST<span>CTCHAT</span></a>
                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">service</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contact</a>
                </nav>
                <a href="#contact" class="link-btn">make appoinment</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>

    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>Let us brighten your smile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem autem voluptatibus
                        voluptatem,
                    </p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>


    <section class="about" id="about">
        <div class="container">

            <div class="row align-items-center">


                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0">
                </div>
                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Healthcare For Your Family</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur provident, rem nisi
                        dolorum
                        amet error perspiciatis corporis commodi iure quaerat porro unde dolores. Neque, optio
                        perspiciatis eum nobis laborum doloremque.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>

            </div>

    </section>


    <section class="services" id="services">
        <h1 class="heading"> Our Services</h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Alignmenet Specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia aliquam exercitationem nesciunt
                    placeat
                    vel
                    repellat! Tempora reprehenderit laborum quia quisquam adipisci consequatur eos ipsam, porro
                    mollitia
                    accusantium quod.
                </p>
            </div>

            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia aliquam exercitationem nesciunt
                    placeat
                    vel
                    repellat! Tempora reprehenderit laborum quia quisquam adipisci consequatur eos ipsam, porro
                    mollitia
                    accusantium quod.
                </p>
            </div>

            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia aliquam exercitationem nesciunt
                    placeat
                    vel
                    repellat! Tempora reprehenderit laborum quia quisquam adipisci consequatur eos ipsam, porro
                    mollitia
                    accusantium quod.
                </p>
            </div>

            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia aliquam exercitationem nesciunt
                    placeat
                    vel
                    repellat! Tempora reprehenderit laborum quia quisquam adipisci consequatur eos ipsam, porro
                    mollitia
                    accusantium quod.
                </p>
            </div>

            <div class="box">
                <img src="images/icon-5.svg" alt="">
                <h3>cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia aliquam exercitationem nesciunt
                    placeat
                    vel
                    repellat! Tempora reprehenderit laborum quia quisquam adipisci consequatur eos ipsam, porro
                    mollitia
                    accusantium quod.
                </p>
            </div>
            <div class="box">
                <img src="images/icon-6.svg" alt="">
                <h3>cosmetic Dentistry</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia aliquam exercitationem nesciunt
                    placeat
                    vel
                    repellat! Tempora reprehenderit laborum quia quisquam adipisci consequatur eos ipsam, porro
                    mollitia
                    accusantium quod.
                </p>
            </div>

        </div>

    </section>

    <section class="process">
        <h1 class="heading">Work Process</h1>
        <div class="box-container container">

            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, consectetur.</p>
            </div>

            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, consectetur.</p>
            </div>

            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, consectetur.</p>
            </div>
        </div>

    </section>



    <section class="reviews" id="reviews">
        <h1 class="heading"> statisfied </h1>

        <div class="box-container container">

            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum consequuntur est eius facere quasi
                    magnam dolorum eaque tempore porro deserunt.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>join</h3>
                <span>statisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum consequuntur est eius facere quasi
                    magnam dolorum eaque tempore porro deserunt.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>join</h3>
                <span>statisfied client</span>
            </div>

            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum consequuntur est eius facere quasi
                    magnam dolorum eaque tempore porro deserunt.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>join</h3>
                <span>statisfied client</span>
            </div>
        </div>


    </section>

    <section class="contact" id="contact">

        <h1 class="heading"> make appointment </h1>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

            <?php
            if (isset($message)) {
                foreach ($message as $message) {
                    echo '<p class="message">' . $message . '</p>';
                }
            }
            ?>
            <span>your name : </span>
            <input type="text" name="name" placeholder="enter your name" class="box">
            <span>your email : </span>
            <input type="email" name="email" placeholder="enter your email" class="box">
            <span>your number: </span>
            <input type="nunber" name="number" placeholder="enter your number" class="box">
            <span>appointment date : </span>
            <input type="datetime-local" name="date" class="box">

            <input type="submit" value="make appointment" name="submit" class="link-btn">
        </form>

    </section>

    <section class="footer">

        <div class="box-container container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+66-97-928-9871</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>Phetchabun 67000</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>07:00 AM - 10:00 PM</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>C.Tiwaphad.ton.1993@gmail.com</p>
            </div>
        </div>

        <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> <span>CT CHAT</span>

        </div>

    </section>

    <script src="js/script.js"></script>
</body>

</html>