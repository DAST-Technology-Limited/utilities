<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>

    <style>
        .preload_area {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: white;
            z-index: 100000000;
            opacity: 0.9;
        }

        .preload_bg {
            background-color: white;
        }
    </style>
</head>

<body>

    <div class="preload_area">
        <img class="preload_img" src="{{asset('images/preloader.gif')}}" alt="">
        <!-- <div class="preload_bg">Hello</div> -->
    </div>

    <script>
        window.addEventListener("load", () => {
            document.querySelector(".preload_area").style.display = "none";
        })
    </script>
</body>

</html>