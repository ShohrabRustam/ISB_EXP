<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="CSS/dashboard.css">
    <title>@yield('title')</title>
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    @include('Dashboard.sidenavbar')
    <div class="main-wrapper">
        <div class="main-content">
            @include('Dashboard.header')
            <main>
                <!-- <div id="pop-wrap">
                    <h1 class="pop-up">Light Mode Activated</h1>
                </div> -->
                @include('Dashboard.theme')
                @yield('section')
            </main>
            @include('Dashboard.footer')
        </div>
    </div>
    <video class="video-1" src="https://heptagonindustries.com.ng/wp-content/uploads/2022/04/abstract.mp4" loop muted
        autoplay></video>
    <video class="video-2" src="https://heptagonindustries.com.ng/wp-content/uploads/2022/04/dark-wave.mp4" loop muted
        autoplay></video>
    <!-- <div class="dis-wrap">
            <p class="display">[Some text here for refrence]</p>
        </div> -->
        <script src="JS/dashboard.js"></script>
</body>

</html>
