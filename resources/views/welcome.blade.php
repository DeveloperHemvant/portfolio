<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <!--header site-->
    <header>
        <div class="logo"><span>H</span>emvant.</div>
        <ul class="navlist">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div id="menu-icon" class="bx bx-menu"></div>
        
    </header>

<!--Home section start here-->
    <section id="home" class="home">
        <div class="home-content">
            <h1>Hii.. I'm Hemvant</h1>
            <div class="change-text">
                <h3>And I'm</h3>
                <h3>
                    <span class="word">Laravel Developer</span>
                </h3>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat delectus nam hic, labore dignissimos distinctio ducimus neque minima iusto. Esse quam mollitia ipsam quod facere! Optio, dolorem aliquam. Iusto, commodi!</p>
            <div class="info-box">
                <div class="email-info">
                    <h5>Email:<span>developer.hemvant@gmail.com</span></h5>
                </div>
            </div>
            <div class="btn-box"><a href="#" class="btn">Download CV</a>
                <a href="#" class="btn">Hire Me Now!</a></div>

            <div class="social-icons"><a href="#"><i class='bx bxl-meta'></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-linkedin' ></i></a></div>
        </div>

        <div class="home-image">
            <div class="img-box"><img src="{{ asset('image.png') }}" alt=""></div>
        </div>
    </section>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="script.js"></script>
</body>
</html>