
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
                <a href="{{URL::to('/adminHome') }}"><span class="fa fa-home"></span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/requestPage') }}"><span class="fa fa-rocket"></span>
                    <span>Request</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/claimPage') }}"><span class="fas fa-exclamation"></span>
                    <span>Claims</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/companies') }}"><span class="fas fa-building"></span>
                    <span>Companies</span>
                </a>
            </li>
            <li>
                <a href="{{ URL::to('/helpMessage') }}"><span class="fa fa-question-circle"></span>
                    <span>Help</span>
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
