<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
    <body>
        <header>
            <a href="#" class="logo">Shop<span>Now</span></a>
            <div class="menuToggle" onclick="toggleMenu()"></div>
            <ul class="navigation">
                <li><a href="index.html#banner" onclick="toggleMenu()">Home</a></li>
                <li><a href="index.html#about" onclick="toggleMenu()">About</a></li>
                <li><a href="index.html#menu" onclick="toggleMenu()">Menu</a></li>
                <li><a href="index.html#testimonials" onclick="toggleMenu()">Testimonials</a></li>
                <li><a href="index.html#contact" onclick="toggleMenu()">Contact</a></li>
                <li id="listbreak">|</li>
                <li><a href="manage.html" onclick="toggleMenu()">Manage Products</a></li>
            </ul>
        </header>

            <section class="cards" id="cards">
                <div class="dimlight"></div>
                <div class="content">
                    <div class="box">
                        <div class="imgBx"><img src="Images/Car 1.jpg"></div>
                        <div class="whiteBG">
                            <ul>
                                <li>Category: Xample</li>
                                <li>Title: Example 1</li>
                                <li>Quantity: 10</li>
                                <li>Price: 100€</li>
                            </ul>
                        </div>
                    </div>

                    <div class="box">
                        <div class="imgBx"><img src="Images/Car 1.jpg"></div>
                        <div class="whiteBG">
                            <ul>
                                <li>Category: Xample</li>
                                <li>Title: Example 1</li>
                                <li>Quantity: 10</li>
                                <li>Price: 100€</li>
                            </ul>
                        </div>
                    </div>

                    <div class="box">
                        <div class="imgBx"><img src="Images/Car 1.jpg"></div>
                        <div class="whiteBG">
                            <ul>
                                <li>Category: Xample</li>
                                <li>Title: Example 1</li>
                                <li>Quantity: 10</li>
                                <li>Price: 100€</li>
                            </ul>
                        </div>
                    </div>

                    <div class="box">
                        <div class="imgBx"><img src="Images/Car 1.jpg"></div>
                        <div class="whiteBG">
                            <ul>
                                <li>Category: Xample</li>
                                <li>Title: Example 1</li>
                                <li>Quantity: 10</li>
                                <li>Price: 100€</li>
                            </ul>
                        </div>
                    </div>

                    <div class="box">
                        <div class="imgBx"><img src="Images/Car 1.jpg"></div>
                        <div class="whiteBG">
                            <ul>
                                <li>Category: Xample</li>
                                <li>Title: Example 1</li>
                                <li>Quantity: 10</li>
                                <li>Price: 100€</li>
                            </ul>
                        </div>
                    </div>

                    <div class="box">
                        <div class="imgBx"><img src="Images/Car 1.jpg"></div>
                        <div class="whiteBG">
                            <ul>
                                <li>Category: Xample</li>
                                <li>Title: Example 1</li>
                                <li>Quantity: 10</li>
                                <li>Price: 100€</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>

       

        <div class="copyrightText">
            <p>© Copyright 2022 <a href="#">Online</a>. All Right Reserved</p>
        </div>

        <script type="text/javascript">
            window.addEventListener("scroll", function(){
                const header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY>0);
            })

            function toggleMenu(){
                const menuToggle = document.querySelector(".menuToggle");
                const navigation = document.querySelector(".navigation");
                menuToggle.classList.toggle("active");
                navigation.classList.toggle("active");
            }
        </script>
    </body>
</html>