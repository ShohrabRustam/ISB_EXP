{{-- <div class="sidebar">
    <div class="sidebar-brand">
        <h2><span id="kleenpulse">mPolicy</span></h2>
    </div>
    <div class="sidebar-menu">
        <ul> --}}
            {{-- <li>
                <a href="#" class="active"><span class="fas fa-cubes"></span>
                    <span>Dashboard</span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="#" class="active"><span class="fa fa-home"></span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="#"><span class="fas fa-user-md	"></span>
                    <span>Health Insurance</span>
                </a>
            </li>
            <li>
                <a href="#"><span class="fas fa-heartbeat"></span>
                    <span>Life Insurance</span>
                </a>
            </li>
            <li>
                <a href="#"><span class="fa fa-motorcycle"></span>
                    <span>Bike Insurance</span>
                </a>
            </li>
            <li>
                <a href="#"><span class="fas fa-car	"></span>
                    <span>Car Insurance </span>
                </a>
            </li> --}}
            {{-- <li>
                <a href="#"><span class="fa fa-user-circle"></span>
                    <span>Accounts</span>
                </a>
            </li>
            <li>
                <a href="#"><span class="fas fa-clipboard"></span>
                    <span>Task</span>
                </a>
            </li> --}}
        {{-- </ul>
    </div>
</div> --}}

<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span id="kleenpulse"  style="    text-transform: uppercase;
            background: linear-gradient(-140deg, rgb(238, 8, 8), rgb(0, 47, 255), #0aee56, #120ee4, #0ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 200%;
            animation: anime 6s linear infinite;">mPolicy</span></h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        {{-- <li>
          <a href="#" class="active">
            <span class="fas fa-tachometer-alt"></span>
            <span>Dashboard</span>
          </a>
        </li> --}}
        <li>
            <a href="{{ URL::to('/dashboard') }}" ><span class="fa fa-home"></span>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="{{ URL::to('/healthPolicy') }}"><span class="fas fa-user-md	"></span>
                <span>Health Insururance</span>
            </a>
        </li>
        <li>
            <a href="{{ URL::to('/lifePolicy') }}"><span class="fas fa-heartbeat"></span>
                <span>Life Insurance</span>
            </a>
        </li>
        <li>
            <a href="{{ URL::to('/bikePolicy') }}"><span class="fa fa-motorcycle"></span>
                <span>Bike Insururance</span>
            </a>
        </li>
        <li>
            <a href=" {{ URL::to('/carPolicy') }}"><span class="fas fa-car	"></span>
                <span>Car Insururance</span>
            </a>
        </li>
      </ul>
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
</div>
