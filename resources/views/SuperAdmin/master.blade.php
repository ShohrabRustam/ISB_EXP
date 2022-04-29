<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="CSS/dashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/dashboardAnimation.css">
    <title>@yield('title')</title>
</head>


<body style="background-color:white">
    <input type="checkbox" id="nav-toggle">
    @include('SuperAdmin.sidenavbar')

    <div class="main-content">
        @include('SuperAdmin.header')
        <main>
            <div id="mainCoantiner">
                <div class="main-header">
                    <div class="folio-btn">
                    </div>
                </div>
                <div>
                    <div class="starsec"></div>
                    <div class="starthird"></div>
                    <div class="starfourth"></div>
                    <div class="starfifth"></div>
                </div>
            </div>
            <div class="container">
                @yield('section')
            </div>
        </div>
    </main>
    <script src="JS/superadmindashboard.js"></script>
    </div>
    @include('SuperAdmin.footer')
</html>
