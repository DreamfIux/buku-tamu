<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Persona 5 Royal — Login</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Anton&family=Rajdhani:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <style>

        /* =====================================================
           PERSONA 5 ROYAL INSPIRED LOGIN
           ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            height: 100%;
        }

        body {
            background: #080808;
            color: white;

            font-family: 'Rajdhani', sans-serif;

            overflow: hidden;

            cursor: none;
        }


        /* =====================================================
           CUSTOM CURSOR
           ===================================================== */

        .cursor {
            position: fixed;

            width: 24px;
            height: 24px;

            pointer-events: none;

            z-index: 9999;

            transform: rotate(-15deg);

            transition:
                width 0.15s ease,
                height 0.15s ease,
                transform 0.15s ease;
        }

        .cursor::before {
            content: "";

            position: absolute;

            left: 3px;
            top: 1px;

            width: 0;
            height: 0;

            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 21px solid white;

            filter:
                drop-shadow(2px 2px 0 black)
                drop-shadow(-1px -1px 0 black);
        }

        .cursor::after {
            content: "";

            position: absolute;

            left: 10px;
            top: 5px;

            width: 5px;
            height: 13px;

            background: #e40012;

            transform: rotate(-20deg);
        }

        body.hovering .cursor {
            width: 32px;
            height: 32px;

            transform:
                rotate(-15deg)
                scale(1.15);
        }


        /* =====================================================
           BACKGROUND
           ===================================================== */

        .background {
            position: fixed;

            inset: 0;

            background: #080808;

            z-index: -3;
        }

        .background-video {
            position: absolute;

            inset: 0;

            width: 100%;
            height: 100%;

            object-fit: cover;
        }



        /* Diagonal background shapes */

        .slash {
            position: absolute;

            z-index: 1;

            width: 150vw;
            height: 160px;

            background: #e60012;

            transform: rotate(-13deg);

            opacity: 0.08;

            animation: drift 10s infinite alternate ease-in-out;
        }

        .slash.one {
            top: 8%;
            left: -30%;
        }

        .slash.two {
            top: 58%;
            left: -20%;

            background: white;

            opacity: 0.025;

            animation-delay: 2s;
        }

        .slash.three {
            top: 82%;
            left: 10%;

            opacity: 0.05;

            animation-delay: 4s;
        }


        @keyframes drift {

            from {
                transform:
                    translateX(-30px)
                    rotate(-13deg);
            }

            to {
                transform:
                    translateX(30px)
                    rotate(-13deg);
            }
        }


        /* =====================================================
           MAIN CONTAINER
           ===================================================== */

        .screen {
            width: 100%;
            height: 100%;

            display: flex;

            align-items: center;
            justify-content: center;

            position: relative;
        }


        /* =====================================================
           LOGIN PANEL
           ===================================================== */

        .login-container {

            position: relative;

            width: min(900px, 90vw);
            min-height: 520px;

            display: grid;

            grid-template-columns: 42% 58%;

            transform: rotate(-2deg);

            filter:
                drop-shadow(20px 20px 0 rgba(0,0,0,0.6));

        }


        /* =====================================================
           LEFT SIDE
           ===================================================== */

        .brand {

            position: relative;

            background: #e60012;

            padding: 50px;

            display: flex;

            flex-direction: column;

            justify-content: center;

            overflow: hidden;

            clip-path: polygon(
                8% 0,
                100% 0,
                92% 100%,
                0 100%
            );
        }


        .brand::before {

            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            border: 25px solid rgba(0,0,0,0.13);

            border-radius: 50%;

            right: -150px;
            top: -100px;
        }


        .brand::after {

            content: "WELCOME";

            position: absolute;

            bottom: 10px;
            right: 25px;

            font-family: 'Anton';

            font-size: 90px;

            color: rgba(0,0,0,0.12);

            transform: rotate(-10deg);
        }


        .royal {

            font-family: 'Anton', sans-serif;

            font-size: clamp(55px, 8vw, 95px);

            line-height: 0.8;

            color: white;

            letter-spacing: -4px;

            transform: rotate(-4deg);

            text-shadow:
                5px 5px 0 #000;
        }


        .subtitle {

            margin-top: 20px;

            font-weight: 700;

            font-size: 18px;

            letter-spacing: 4px;

            transform: skew(-8deg);
        }


        /* =====================================================
           RIGHT SIDE
           ===================================================== */

        .login-panel {

            background: white;

            color: black;

            padding: 55px;

            position: relative;

            clip-path: polygon(
                5% 0,
                100% 0,
                94% 100%,
                0 100%
            );

            display: flex;

            flex-direction: column;

            justify-content: center;
        }


        .login-panel::before {

            content: "";

            position: absolute;

            top: 0;
            right: 0;

            width: 55px;
            height: 100%;

            background: #111;

            clip-path: polygon(
                45% 0,
                100% 0,
                100% 100%,
                0 100%
            );
        }


        /* =====================================================
           TITLE
           ===================================================== */

        .login-title {

            font-family: 'Anton', sans-serif;

            font-size: 55px;

            text-transform: uppercase;

            transform: skew(-8deg);

            margin-bottom: 35px;

            letter-spacing: 1px;
        }

        .login-title span {

            color: #e60012;
        }


        /* =====================================================
           INPUTS
           ===================================================== */

        .field {

            position: relative;

            margin-bottom: 25px;
        }


        .field label {

            display: block;

            font-weight: 700;

            font-size: 14px;

            letter-spacing: 3px;

            margin-bottom: 6px;

            text-transform: uppercase;
        }


        .field input {

            width: 100%;

            border: none;

            border-bottom: 4px solid #111;

            outline: none;

            padding: 10px 5px;

            font-family: 'Rajdhani';

            font-size: 22px;

            font-weight: 600;

            background: transparent;

            transition: 0.2s;
        }


        .field input:focus {

            border-bottom-color: #e60012;

            padding-left: 12px;

            background:
                linear-gradient(
                    90deg,
                    rgba(230, 0, 18, 0.08),
                    transparent
                );
        }


        /* =====================================================
           PASSWORD TOGGLE
           ===================================================== */

        .password-wrapper {

            position: relative;
        }

        .toggle-password {

            position: absolute;

            right: 5px;
            bottom: 10px;

            border: none;

            background: transparent;

            font-family: 'Rajdhani';

            font-weight: 700;

            cursor: none;

            text-transform: uppercase;

            font-size: 13px;
        }


        /* =====================================================
           LOGIN BUTTON
           ===================================================== */

        .login-button {

            position: relative;

            width: 100%;

            margin-top: 10px;

            padding: 15px 20px;

            border: none;

            background: #111;

            color: white;

            font-family: 'Anton';

            font-size: 25px;

            letter-spacing: 2px;

            cursor: none;

            transform: skew(-8deg);

            overflow: hidden;

            transition:
                transform 0.2s,
                background 0.2s;
        }


        .login-button span {

            position: relative;

            z-index: 2;
        }


        /* Red selection bar */

        .login-button::before {

            content: "";

            position: absolute;

            left: -110%;

            top: 0;

            width: 110%;

            height: 100%;

            background: #e60012;

            transform: skew(-15deg);

            transition: left 0.3s ease;
        }


        .login-button:hover::before,
        .login-button:focus::before {

            left: -5%;
        }


        .login-button:hover,
        .login-button:focus {

            transform:
                skew(-8deg)
                translateX(6px);
        }


        /* =====================================================
           FOOTER
           ===================================================== */

        .footer {

            margin-top: 25px;

            display: flex;

            justify-content: space-between;

            font-size: 13px;

            font-weight: 700;

            letter-spacing: 1px;
        }


        .footer a {

            color: #111;

            text-decoration: none;

            position: relative;
        }


        .footer a::after {

            content: "";

            position: absolute;

            left: 0;
            bottom: -4px;

            width: 0;

            height: 3px;

            background: #e60012;

            transition: width 0.2s;
        }


        .footer a:hover::after {

            width: 100%;
        }


        /* =====================================================
           TOP UI
           ===================================================== */

        .top-left {

            position: absolute;

            top: 25px;
            left: 30px;

            font-family: 'Anton';

            font-size: 18px;

            transform: rotate(-4deg);

            color: white;
        }


        .top-left span {

            color: #e60012;
        }


        .version {

            position: absolute;

            bottom: 20px;
            right: 30px;

            font-size: 11px;

            letter-spacing: 2px;

            color: rgba(255,255,255,0.45);
        }


        .music-toggle {

            position: fixed;

            top: 25px;
            right: 30px;

            z-index: 10;

            padding: 8px 12px;

            border: 1px solid #e60012;

            background: #111;

            color: #ffffff;

            font-family: 'Rajdhani', sans-serif;

            font-size: 14px;

            font-weight: 700;

            letter-spacing: 1px;

            cursor: none;
        }


        .music-toggle:focus-visible {

            outline: 2px solid white;

            outline-offset: 3px;
        }


        /* =====================================================
           RESPONSIVE
           ===================================================== */

        @media (max-width: 750px) {

            .login-container {

                width: 92vw;

                grid-template-columns: 1fr;

                transform: rotate(0);
            }

            .brand {

                min-height: 190px;

                padding: 35px;

                clip-path: none;
            }

            .royal {

                font-size: 60px;
            }

            .login-panel {

                padding: 40px 30px;

                clip-path: none;
            }

            .login-title {

                font-size: 45px;
            }

        }


    </style>
</head>


<body>

    <!-- Custom cursor -->
    <div class="cursor"></div>

    <audio id="backgroundMusic" loop preload="none">
        <source src="/buku-tamu/assets/background_music.mp3/1-02.%20Phantom.mp3" type="audio/mpeg">
    </audio>

    <button
        type="button"
        class="music-toggle"
        id="musicToggle"
        aria-pressed="false"
    >
        PLAY MUSIC
    </button>


    <!-- Background -->
    <div class="background">

        <video class="background-video" autoplay muted loop playsinline>
            <source src="/buku-tamu/assets/background.mp4/Sterne.mp4" type="video/mp4">
        </video>

        <div class="background-shade"></div>

        <div class="slash one"></div>
        <div class="slash two"></div>
        <div class="slash three"></div>

    </div>


    <!-- Small UI text -->
    <div class="top-left">
        <span>PHANTOM</span> LOGIN
    </div>


    <!-- Main screen -->
    <main class="screen">

        <section class="login-container">


            <!-- =================================================
                 LEFT BRAND
                 ================================================= -->

            <div class="brand">

                <div class="royal">
                    VISITORY<br>
                    SYSTEM
                </div>

                <div class="subtitle">
                    PLEASE LOGIN AS A PHANTOM RECEPTIONIST OR A PHANTOOM ADMIN.<br>
                    IF YOU ARE NOT A PHANTOM WORKER, PLEASE LEAVE IMMEDIATELY!
                </div>

            </div>


            <!-- =================================================
                 LOGIN FORM
                 ================================================= -->

            <div class="login-panel">

                <h1 class="login-title">
                    LOGIN<span>.</span>
                </h1>


                <form id="loginForm" action="localhost/buku-tamu/login" method="POST">


                    <!-- Username -->

                    <div class="field">

                        <label for="username">
                            Codename
                        </label>

                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Enter your codename"
                            autocomplete="username"
                            required
                        >

                    </div>


                    <!-- Password -->

                    <div class="field">

                        <label for="password">
                            Password
                        </label>

                        <div class="password-wrapper">

                            <input
                                type="password"
                                id="password"
                                name="password"
                                placeholder="Enter your password"
                                autocomplete="current-password"
                                required
                            >

                            <button
                                type="button"
                                class="toggle-password"
                                id="togglePassword"
                            >
                                SHOW
                            </button>

                        </div>

                    </div>


                    <!-- Login -->

                    <button
                        type="submit"
                        class="login-button"
                        id="loginButton"
                    >
                        <span>START</span>
                    </button>


                    <div class="footer">

                        <a href="#">
                            CREATE ACCOUNT
                        </a>

                        <a href="#">
                            FORGOT PASSWORD?
                        </a>

                    </div>


                </form>

            </div>

        </section>

    </main>


    <div class="version">
        PHANTOM WORKERS// SYSTEM ONLINE
    </div>


    <script>

        /* =====================================================
           CUSTOM CURSOR
           ===================================================== */

        const cursor = document.querySelector(".cursor");

        const backgroundMusic =
            document.getElementById("backgroundMusic");

        const musicToggle =
            document.getElementById("musicToggle");

        musicToggle.addEventListener("click", async () => {

            if (backgroundMusic.paused) {
                try {
                    await backgroundMusic.play();
                    musicToggle.textContent = "PAUSE MUSIC";
                    musicToggle.setAttribute("aria-pressed", "true");
                } catch (error) {
                    musicToggle.textContent = "MUSIC UNAVAILABLE";
                }
                return;
            }

            backgroundMusic.pause();
            musicToggle.textContent = "PLAY MUSIC";
            musicToggle.setAttribute("aria-pressed", "false");
        });

        document.addEventListener("mousemove", (event) => {

            cursor.style.left = event.clientX + "px";
            cursor.style.top = event.clientY + "px";

        });


        /* =====================================================
           HOVER CURSOR EFFECT
           ===================================================== */

        const interactiveElements =
            document.querySelectorAll(
                "input, button, a"
            );


        interactiveElements.forEach(element => {

            element.addEventListener(
                "mouseenter",
                () => {
                    document.body.classList.add("hovering");
                }
            );

            element.addEventListener(
                "mouseleave",
                () => {
                    document.body.classList.remove("hovering");
                }
            );

        });


        /* =====================================================
           PASSWORD SHOW / HIDE
           ===================================================== */

        const password =
            document.getElementById("password");

        const togglePassword =
            document.getElementById("togglePassword");


        togglePassword.addEventListener(
            "click",
            () => {

                const hidden =
                    password.type === "password";

                password.type =
                    hidden ? "text" : "password";

                togglePassword.textContent =
                    hidden ? "HIDE" : "SHOW";

            }
        );


        /* =====================================================
           LOGIN
           ===================================================== */

        const loginForm =
            document.getElementById("loginForm");


        loginForm.addEventListener(
            "submit",
            (event) => {

                event.preventDefault();

                const username =
                    document.getElementById("username").value;

                const button =
                    document.getElementById("loginButton");


                button.querySelector("span")
                    .textContent = "ENTERING...";


                setTimeout(() => {

                    alert(
                        `Welcome, ${username}!`
                    );

                    button.querySelector("span")
                        .textContent = "START";

                }, 800);

            }
        );


    </script>

</body>
</html>
