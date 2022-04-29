
<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span id="kleenpulse" style="    text-transform: uppercase;
            background: linear-gradient(-140deg, rgb(238, 8, 8), rgb(0, 47, 255), #0aee56, #120ee4, #0ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 200%;
            animation: anime 6s linear infinite;">mPolicy</span></h2>
    </div>

    <div class="sidebar-menu">
        @if(Session::has('user'))
        <ul class="nav navbar-nav navbar-navi">
            <li>
                <a href="{{URL::to('/superadminHome') }}"><span class="fa fa-home"></span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/usersList') }}"><span class="fas fa-users"></span>
                    <span>Users</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/adminsList') }}"><span class="fas fa-users"></span>
                    <span>Admins</span>
                </a>
            </li>
        </ul>
        @endif

    </div>
    <script>
        const currentLocation=location.href;
        const menuItem = document.querySelectorAll('a');
        const menuLength = menuItem.length
        for(let i=0;i<menuLength;i++){
            if(menuItem[i].href===currentLocation){
                menuItem[i].className = 'active';
            }
        }
    </script>
</div>
