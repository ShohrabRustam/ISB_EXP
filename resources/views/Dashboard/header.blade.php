{{-- <header>
    <h2 class="heading" id="dashboard" style="    text-transform: uppercase;
    background: linear-gradient(-140deg, #fff, #0ff, #ff004c, #ffcc00, #0ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-size: 200% 200%;
    animation: anime 6s linear infinite;">
        Dashboard
    </h2>
    <label for=" nav-toggle">
        <span class="fas fa-bars"></span>
    </label>

    <div class="user-wrapper">
        <img src="https://w7.pngwing.com/pngs/831/88/png-transparent-user-profile-computer-icons-user-interface-mystique-miscellaneous-user-interface-design-smile-thumbnail.png"
            alt="user" style="width: 25px; height:25px">
        <a href="#" style="color: black">
            <li>Log out</li>
        </a> --}}
        {{-- <h4>MPOLICY</h4>
        <b>C E O</b></small> --}}
        {{--
    </div>
    </div>
</header> --}}
<header>
    <h2> <label for="nav-toggle">
            <span class="fas fa-bars"></span>
        </label>
        <span id="dashboard" style="    text-transform: uppercase;
       background: linear-gradient(-140deg, #fff, #0ff, #ff004c, #ffcc00, #0ff);
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;
       background-size: 200% 200%;
       animation: anime 6s linear infinite;"> Dashboard</span>
    </h2>

    {{-- <div class="search-wrapper">
        <span class="fas fa-search"> </span>
        <input type="search" placeholder="Search..." />

    </div> --}}
    @if(Session::has('user'))

    <div class="user-wrapper">
        <img src="https://w7.pngwing.com/pngs/831/88/png-transparent-user-profile-computer-icons-user-interface-mystique-miscellaneous-user-interface-design-smile-thumbnail.png"
            alt="user" style="width: 25px; height:25px">

        <a href="{{ URL::to('/logout') }}" style="color: black">
            <button type="button" class="btn btn-primary">Logout</button>
        </a>
    </div>
    @endif
</header>
