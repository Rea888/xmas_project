<!DOCTYPE html>
<head>
    <meta charset="utf-8">

    <title>Xmas</title>
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Archivo+Black&display=swap'>
    <style>

        body {
            background-image: url({{url('/images/xmas.jpg')}});
            background-size: cover;
           // background-position: center;
            background-repeat: no-repeat;
            background-color: #bb1939;


        }

        :root {
            --shadow-color: #FF9E9E;
            --shadow-color-light: white;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Archivo", sans-serif;
            background-color: #192824;
        }

        p {
            margin: calc(43vh - 40px) auto 0 auto;
            font-size: 180px;
            text-transform: uppercase;
            font-family: "Archivo Black", "Archivo", sans-serif;
            font-weight: normal;
            display: block;
            height: auto;
            text-align: center;
        }

        .demo {
            color: white;
            animation: neon 3s infinite;
        }

        @keyframes neon {
            0% {
                text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
                0 0 3px var(--shadow-color-light), 0 0 10px var(--shadow-color-light), 0 0 20px var(--shadow-color-light),
                0 0 30px var(--shadow-color), 0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 70px var(--shadow-color), 0 0 100px var(--shadow-color), 0 0 200px var(--shadow-color);
            }
            50% {
                text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
                0 0 5px var(--shadow-color-light), 0 0 15px var(--shadow-color-light), 0 0 25px var(--shadow-color-light),
                0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 60px var(--shadow-color), 0 0 80px var(--shadow-color), 0 0 110px var(--shadow-color), 0 0 210px var(--shadow-color);
            }
            100% {
                text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
                0 0 3px var(--shadow-color-light), 0 0 10px var(--shadow-color-light), 0 0 20px var(--shadow-color-light),
                0 0 30px var(--shadow-color), 0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 70px var(--shadow-color), 0 0 100px var(--shadow-color), 0 0 200px var(--shadow-color);
            }
        }


    </style>
</head>
<body>
<p id="demo" class="demo"></p>

    <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Dec 24, 2022 20:30:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML = days + "D " + hours + "H "
            + minutes + "m " + seconds + "s ";


        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "Let's get started!";

        }
    }, 1000);
</script>

</body>
