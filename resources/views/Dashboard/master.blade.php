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
    @include('Dashboard.sidenavbar')

    <div class="main-content">
        @include('Dashboard.header')
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


    {{-- @include('Dashboard.theme') --}}

    {{-- <h1>Hello Dashboard </h1> --}}
    {{-- <div class="cards">
        <div class="card-single">
            <div>
                <h1>50</h1>
                <span>Customers</span>
            </div>
            <div>
                <span class="fas fa-users"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h1>12</h1>
                <span>Projects</span>
            </div>
            <div>
                <span class="fas fa-clipboard-list"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h1>15</h1>
                <span>Orders</span>
            </div>
            <div>
                <span class="fas fa-shopping-cart"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h1>$50K</h1>
                <span>Income</span>
            </div>
            <div>
                <span class="fas fa-wallet"></span>
            </div>
        </div>

    </div>

    <div class="recent-grid">
        <div class="projects">
            <div class="card">
                <div class="card-header">
                    <h2>Recent Projects</h2>
                    <button>See all <span class="fas fa-arrow-right"></span> </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>Project Title</td>
                                    <td>Department</td>
                                    <td>Status</td>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Website</td>
                                    <td>Frontend</td>
                                    <td>
                                        <span class="status purple"></span>
                                        Review
                                    </td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>Frontend</td>
                                    <td>
                                        <span class="status orange"></span>
                                        Pending
                                    </td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>Frontend</td>
                                    <td>
                                        <span class="status pink"></span>
                                        In Progress
                                    </td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>Frontend</td>
                                    <td>
                                        <span class="status purple"></span>
                                        Review
                                    </td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td>Frontend</td>
                                    <td>
                                        <span class="status pink"></span>
                                        In Progress
                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="customers">
            <div class="card">
                <div class="card-header">
                    <h2>New Customers</h2>
                    <button>See all <span class="fas fa-arrow-right"></span> </button>
                </div>
                <div class="card-body">
                    <div class="customer">
                        <div class="info">
                            <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                            <div>
                                <h4>Malik Abushabab</h4>
                                <small>CEO</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="fas fa-user-circle"></span>
                            <span class="fas fa-comment"></span>
                            <span class="fas fa-phone-alt"></span>
                        </div>
                    </div>
                    <div class="customer">
                        <div class="info">
                            <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                            <div>
                                <h4>Malik Abushabab</h4>
                                <small>CEO</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="fas fa-user-circle"></span>
                            <span class="fas fa-comment"></span>
                            <span class="fas fa-phone-alt"></span>
                        </div>
                    </div>
                    <div class="customer">
                        <div class="info">
                            <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                            <div>
                                <h4>Malik Abushabab</h4>
                                <small>CEO</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="fas fa-user-circle"></span>
                            <span class="fas fa-comment"></span>
                            <span class="fas fa-phone-alt"></span>
                        </div>
                    </div>
                    <div class="customer">
                        <div class="info">
                            <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                            <div>
                                <h4>Malik Abushabab</h4>
                                <small>CEO</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="fas fa-user-circle"></span>
                            <span class="fas fa-comment"></span>
                            <span class="fas fa-phone-alt"></span>
                        </div>
                    </div>
                    <div class="customer">
                        <div class="info">
                            <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                            <div>
                                <h4>Malik Abushabab</h4>
                                <small>CEO</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="fas fa-user-circle"></span>
                            <span class="fas fa-comment"></span>
                            <span class="fas fa-phone-alt"></span>
                        </div>
                    </div>
                    <div class="customer">
                        <div class="info">
                            <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                            <div>
                                <h4>Malik Abushabab</h4>
                                <small>CEO</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="fas fa-user-circle"></span>
                            <span class="fas fa-comment"></span>
                            <span class="fas fa-phone-alt"></span>
                        </div>
                    </div>
                    <div class="customer">
                        <div class="info">
                            <img src="https://bit.ly/3bvT89p" height="40px" width="40px" alt="customer">
                            <div>
                                <h4>Malik Abushabab</h4>
                                <small>CEO</small>
                            </div>
                        </div>
                        <div class="contact">
                            <span class="fas fa-user-circle"></span>
                            <span class="fas fa-comment"></span>
                            <span class="fas fa-phone-alt"></span>
                        </div>
                    </div>
                </div>
            </div>
            <script src="JS/dashboard.js"></script>
        </div>

    </div> --}}

    </main>
    <script src="JS/dashboard.js"></script>
    </div>
    @include('Dashboard.footer')

</html>
