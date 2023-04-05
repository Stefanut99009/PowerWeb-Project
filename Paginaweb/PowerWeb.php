<style>
    /* CORE STYLES */
    :root {
        --primary-color: rgba(13, 110, 139, 0.75);
        --overlay-color: rgba(24, 39, 51, 0.85);
        --menu-speed: 0.75s;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Roboto', sans-serif;
        line-height: 1.4;
    }

    .container {
        max-width: 960px;
        margin: auto;
        overflow: hidden;
        padding: 0 3rem;
    }

    .showcase {
        background: var(--primary-color);
        color: #fff;
        height: 100vh;
        position: relative;
    }

    .showcase:before {
        content: '';
        background: url('https://media.istockphoto.com/id/1345318720/video/abstract-colorful-geometric-fluid-gradient-loop-background.jpg?s=640x640&k=20&c=C0XFPOXeWIEr6EfHWoG_0FjYyW7AfderZEFBeVmL-Ps=') no-repeat center center/cover;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .showcase .showcase-inner {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 100%;
    }

    .showcase h1 {
        font-size: 4rem;
    }

    .showcase p {
        font-size: 1.3rem;
    }


    .btn {

        border: none;
        background: var(--primary-color);
        color: #fff;
        padding: 1rem 1.5rem;
        margin-top: 1rem;
        transition: opacity 1s ease-in-out;
        text-decoration: none;
        width: 200px;

        display: inline-block;

        margin-right: 10px;
    }



    .btn:hover {
        opacity: 0.7;
    }

    /* MENU STYLES */
    .menu-wrap {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1;
    }

    .menu-wrap .toggler {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
        cursor: pointer;
        width: 50px;
        height: 50px;
        opacity: 0;
    }

    .menu-wrap .hamburger {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
        width: 60px;
        height: 60px;
        padding: 1rem;
        background: var(--primary-color);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Hamburger Line */
    .menu-wrap .hamburger>div {
        position: relative;
        flex: none;
        width: 100%;
        height: 2px;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s ease;
    }

    /* Hamburger Lines - Top & Bottom */
    .menu-wrap .hamburger>div::before,
    .menu-wrap .hamburger>div::after {
        content: '';
        position: absolute;
        z-index: 1;
        top: -10px;
        width: 100%;
        height: 2px;
        background: inherit;
    }

    /* Moves Line Down */
    .menu-wrap .hamburger>div::after {
        top: 10px;
    }

    /* Toggler Animation */
    .menu-wrap .toggler:checked+.hamburger>div {
        transform: rotate(135deg);
    }

    /* Turns Lines Into X */
    .menu-wrap .toggler:checked+.hamburger>div:before,
    .menu-wrap .toggler:checked+.hamburger>div:after {
        top: 0;
        transform: rotate(90deg);
    }

    /* Rotate On Hover When Checked */
    .menu-wrap .toggler:checked:hover+.hamburger>div {
        transform: rotate(225deg);
    }

    /* Show Menu */
    .menu-wrap .toggler:checked~.menu {
        visibility: visible;
    }

    .menu-wrap .toggler:checked~.menu>div {
        transform: scale(1);
        transition-duration: var(--menu-speed);
    }

    .menu-wrap .toggler:checked~.menu>div>div {
        opacity: 1;
        transition: opacity 0.4s ease 0.4s;
    }

    .menu-wrap .menu {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        visibility: hidden;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .menu-wrap .menu>div {
        background: var(--overlay-color);
        border-radius: 50%;
        width: 200vw;
        height: 200vw;
        display: flex;
        flex: none;
        align-items: center;
        justify-content: center;
        transform: scale(0);
        transition: all 0.4s ease;
    }

    .menu-wrap .menu>div>div {
        text-align: center;
        max-width: 90vw;
        max-height: 100vh;
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .menu-wrap .menu>div>div>ul>li {
        list-style: none;
        color: #fff;
        font-size: 1.5rem;
        padding: 1rem;
    }

    .menu-wrap .menu>div>div>ul>li>a {
        color: inherit;
        text-decoration: none;
        transition: color 0.4s ease;
    }


    .buttons {
        text-align: center;
    }



    .element1,
    .element2 {
        display: inline-block;
    }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>PowerSocial</title>
    <link rel="icon" type="image/x-icon" href="Poze/PS-favicon.png">
</head>

<body>
    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger">
            <div></div>
        </div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <li><a href="About.php">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="showcase">
        <div class="container showcase-inner">
            <h1>Welcome to PowerSocial! </h1>
            <p>PowerSocial: Post and engage with friends and family. Share your life with ease.
                <br></br>Thanks for choosing PowerSocial!<br></br>
            </p>
            <div class="buttons">
                <button class="element1 btn" onclick="window.location.href='Login.php'">Login</button>
                <button class="element1 btn" onclick="window.location.href='Signup.php'">Signup</button>
            </div>
        </div>
    </header>
</body>

</html>