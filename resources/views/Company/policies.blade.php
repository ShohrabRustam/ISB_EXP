@extends('Admin.master')
@section('title')
Policies
@endsection

@section('section')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<div class="container">
    <h1 style="text-align: center; color:navy">Policies Details</h1>

    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('fail') }}
    </div>
    @endif
    <div class="table-responsive">

        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr style="background: rgb(230, 161, 32);">
                    <th>Name </th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Claim Price</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($policies as $policy)
                <tr>
                    <td>{{ $policy['policyname']}}</td>
                    <td>{{ $policy['policytype'] }}</td>
                    <td>{{ $policy['p_price'] }}</td>
                    <td>{{ $policy['c_price'] }}</td>
                    <td>{{ $policy['policy_period'] }}</td>
                    <td style="margin-left:5px">
                        <a href="/updatePolicy/{{ $policy['id'] }}"><i class="fas fa fa-edit fa-x"
                                style="margin-left: 25px"></i></a>
                        <a href="/deletePolicy/{{ $policy['id']}}"><i class="fa fa-trash"
                                style="margin-left: 25px"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function() {
$('#example').DataTable();
} );
</script>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Lato', 'Arial', sans-serif;
    }

    /* HEADINGS */

    h1,
    p {
        color: #fff;
        text-align: center;
        line-height: 1.4;
    }

    h1 {
        font-size: 2.2rem;
    }

    h2 {
        color: #000;
        font-size: 1.3rem;
        text-align: center;
        line-height: 1.4;
        margin-bottom: 10px;
    }

    /* BASIC SETUP */

    .page-wrapper {
        width: 100%;
        height: auto;
    }

    .nav-wrapper {
        width: 100%;
        position: -webkit-sticky;
        /* Safari */
        position: sticky;
        top: 0;
        background-color: #fff;
    }

    .grad-bar {
        width: 100%;
        height: 5px;
        background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);
        background-size: 400% 400%;
        -webkit-animation: gradbar 15s ease infinite;
        -moz-animation: gradbar 15s ease infinite;
        animation: gradbar 15s ease infinite;
    }

    /* NAVIGATION */

    .navbar {
        display: grid;
        grid-template-columns: 1fr 3fr;
        align-items: center;
        height: 50px;
        overflow: hidden;
    }

    .navbar img {
        height: 30px;
        width: auto;
        justify-self: start;
        margin-left: 20px;
    }

    .navbar ul {
        list-style: none;
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        justify-self: end;

    }

    .nav-item a {
        color: #000;
        font-size: 0.9rem;
        font-weight: 400;
        text-decoration: none;
        transition: color 0.3s ease-out;
    }

    .nav-item a:hover {
        color: #3498db;
    }


    .features {
        width: 100%;
        height: auto;
        background-color: #f1f1f1;
        display: flex;
        padding: 50px 20px;
        justify-content: space-around;
    }

    .feature-container {
        flex-basis: 30%;
        margin-top: 10px;
    }

    .feature-container p {
        color: #000;
        text-align: center;
        line-height: 1.4;
        margin-bottom: 15px;
    }

    .feature-container img {
        width: 100%;
        margin-bottom: 15px;
    }

    /* SEARCH FUNCTION */

    #search-icon {
        font-size: 0.9rem;
        margin-top: 3px;
        margin-left: 15px;
        transition: color 0.3s ease-out;
    }

    #search-icon:hover {
        color: #3498db;
        cursor: pointer;
    }

    .search {
        transform: translate(-35%);
        -webkit-transform: translate(-35%);
        transition: transform 0.7s ease-in-out;
        color: #3498db;
    }

    .no-search {
        transform: translate(0);
        transition: transform 0.7s ease-in-out;
    }

    .search-input {
        position: absolute;
        top: -4px;
        right: -125px;
        opacity: 0;
        z-index: -1;
        transition: opacity 0.6s ease;
    }

    .search-active {
        opacity: 1;
        z-index: 0;
    }

    input {
        border: 0;
        border-left: 1px solid #ccc;
        border-radius: 0;
        /* FOR SAFARI */
        outline: 0;
        padding: 5px;
    }

    /* MOBILE MENU & ANIMATION */

    .menu-toggle .bar {
        width: 25px;
        height: 3px;
        background-color: #3f3f3f;
        margin: 5px auto;
        -webkit-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    .menu-toggle {
        justify-self: end;
        margin-right: 25px;
        display: none;
    }

    .menu-toggle:hover {
        cursor: pointer;
    }

    #mobile-menu.is-active .bar:nth-child(2) {
        opacity: 0;
    }

    #mobile-menu.is-active .bar:nth-child(1) {
        -webkit-transform: translateY(8px) rotate(45deg);
        -ms-transform: translateY(8px) rotate(45deg);
        -o-transform: translateY(8px) rotate(45deg);
        transform: translateY(8px) rotate(45deg);
    }

    #mobile-menu.is-active .bar:nth-child(3) {
        -webkit-transform: translateY(-8px) rotate(-45deg);
        -ms-transform: translateY(-8px) rotate(-45deg);
        -o-transform: translateY(-8px) rotate(-45deg);
        transform: translateY(-8px) rotate(-45deg);
    }

    /* KEYFRAME ANIMATIONS */

    @-webkit-keyframes gradbar {
        0% {
            background-position: 0% 50%
        }

        50% {
            background-position: 100% 50%
        }

        100% {
            background-position: 0% 50%
        }
    }

    @-moz-keyframes gradbar {
        0% {
            background-position: 0% 50%
        }

        50% {
            background-position: 100% 50%
        }

        100% {
            background-position: 0% 50%
        }
    }

    @keyframes gradbar {
        0% {
            background-position: 0% 50%
        }

        50% {
            background-position: 100% 50%
        }

        100% {
            background-position: 0% 50%
        }
    }

    /* Media Queries */

    /* Mobile Devices - Phones/Tablets */

    @media only screen and (max-width: 720px) {
        .features {
            flex-direction: column;
            padding: 50px;
        }

        /* MOBILE HEADINGS */

        h1 {
            font-size: 1.9rem;
        }

        h2 {
            font-size: 1rem;
        }

        p {
            font-size: 0.8rem;
        }

        /* MOBILE NAVIGATION */

        .navbar ul {
            display: flex;
            flex-direction: column;
            position: fixed;
            justify-content: start;
            top: 55px;
            background-color: #fff;
            width: 100%;
            height: calc(100vh - 55px);
            transform: translate(-101%);
            text-align: center;
            overflow: hidden;
        }

        .navbar li {
            padding: 15px;
        }

        .navbar li:first-child {
            margin-top: 50px;
        }

        .navbar li a {
            font-size: 1rem;
        }

        .menu-toggle,
        .bar {
            display: block;
            cursor: pointer;
        }

        .mobile-nav {
            transform: translate(0%) !important;
        }

        /* SECTIONS */

        .headline {
            height: 20vh;
        }

        .feature-container p {
            margin-bottom: 25px;
        }

        .feature-container {
            margin-top: 20px;
        }

        .feature-container:nth-child(2) {
            order: -1;
        }

        /* SEARCH DISABLED ON MOBILE */

        #search-icon {
            display: none;
        }

        .search-input {
            display: none;
        }

    }

    .contact h1 {

        clear: both;
        color: gray;
    }

    .contact p {
        clear: both;
        color: blue;
    }

    body {
        background-color: #181828;
    }
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');

:root{
  --main-color: #11101d;
  --color-dark: #1D2231;
  --text-grey:  #8390A2;
}

*{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Poppins' ,sans-serif;
}

.sidebar{
  width: 345px;
  position: fixed;
  left: 0;
  top: 0;
  height: 100%;
  z-index: 100;
  background: var(--main-color);
  transition: width 300ms;

}
.sidebar-brand{
  height: 90px;
  padding: 1rem 0rem 1rem 2rem;
  color: #fff;
}
.sidebar-brand span{
  display: inline-block;
  padding-right: 1rem;
}
.sidebar-menu li{
  width: 100%;
  margin-bottom: 1.7rem;
  padding-left: 1rem;

}
.sidebar-menu{
  margin-top: 1rem;
}
.sidebar-menu a{
  padding-left: 1rem;
  display: block;
  color: #fff;
  font-size: 1.1rem;
}
#nav-toggle:checked + .sidebar {
  width: 70px ;

}
#nav-toggle:checked + .sidebar .sidebar-brand,
#nav-toggle:checked + .sidebar li
{
  padding-left: 1rem;
  text-align: center;
}
#nav-toggle:checked + .sidebar li a
{
  padding-left: 0rem;
}
#nav-toggle:checked + .sidebar .sidebar-brand h1 span:last-child,
#nav-toggle:checked + .sidebar li a span:last-child{
  display: none;

}
.sidebar-menu a span:first-child{
  font-size: 1.5rem;
  padding-right: 1rem;
}
.sidebar-menu a.active{
  background: #fff;
  padding-top: 1rem;
  padding-bottom: 1rem;
  color: var(--main-color);
  border-radius: 30px 0px 0px 30px;

}
#nav-toggle:checked ~ .main-content {
  margin-left: 70px;

}
#nav-toggle:checked ~ .main-content  header{
  width: calc(100% - 70px);
  left:70px;

}
.main-content{
  transition: margin-left 300ms;
  margin-left: 345px;
}
header{
  background: #fff;
  display: flex;
  justify-content: space-between;
  padding: 1rem 1.5rem;
  box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
  position: fixed;
  left: 345px;
  top:0;
  z-index: 100;
  width: calc(100% - 345px);
  transition: left 300ms;
  }

#nav-toggle{
  display: none;
}
header h2{
  color: #222;
}
header label span{
  font-size: 1.7rem;
  padding-right: 1rem;
}
/* .search-wrapper {
  border: solid 1px #ccc;
  border-radius: 30px;
  height: 50px;
  display: flex;
  align-items: center;
  overflow-x: hidden;
}
.search-wrapper span{
  display: inline-block;
  padding: 0rem 1rem;
  font-size: 1.5rem;
}
.search-wrapper input{
  height: 100%;
  padding: .5rem;
  border: none;
  outline: none;

} */
.user-wrapper{
  display: flex;
  align-items: center;
}
.user-wrapper img{
  border-radius: 50%;
  margin-right: .5rem;
}

.user-wrapper small{
  display: inline-block;
  color: var(--text-grey);
  margin-top: -1px !important;

}
main{
  margin-top: 85px;
  padding: 2rem 1.5rem;
  background: #f1f5f9;
  min-height: calc(100vh - 90px);
}
.cards{
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 2rem;
  margin-top: 1rem;
}
.card-single{
  display: flex;
  justify-content: space-between;
  background: #fff;
  padding: 2rem;
  border-radius: 12px;
}
.card-single div:last-child span{
  color: var(--main-color);
  font-size: 3rem;

}
.card-single div:first-child span{
  color: var(--text-grey);


}
.card-single:last-child{
  background: var(--main-color);
}
.card-single:last-child h1,
.card-single:last-child div:first-child span,
.card-single:last-child div:last-child span
{
  color: #fff;
}

.recent-grid{
  margin-top: 3.5rem;
  display: grid;
  grid-gap: 2rem;
  grid-template-columns: 65% auto;
}
.card{
  background: #fff;
  border-radius: 12px;
}
.card-header
{
  padding: 1rem;
}
.card-header{
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid #f0f0f0;
}
.card-header button{
  background: var(--main-color);
  border-radius: 10px;
  color: #fff;
  font-size: .8rem;
  padding: .5rem 1rem;
  border:1px solid var(--main-color);
}
table{
  border-collapse: collapse;
}
thead tr{
  border-top: 1px solid #f0f0f0;
  border-bottom:2px solid #f0f0f0;

}
thead td{
  font-weight: 700;
}
td{
  padding: .5rem 1rem ;
  font-size: .9rem ;
  color: #222;

}
tr td:last-child{
  display: flex;
  align-items: center;


}
td .status{
  display: inline-block;
  height: 10px;
  width: 10px;
  border-radius: 50%;
  margin-right: 1rem;
}
.status.purple {
  background: rebeccapurple;
}
.status.pink{
  background: deeppink;
}
.status.orange{
  background: orangered;
}
.table-responsive{
  width: 100%;
  overflow-x: auto;
}
.customer{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: .5rem .7rem;
}
.info{
  display: flex;
  align-items: center;
}
.info img{
  border-radius: 50%;
  margin-right: 1rem;
}
.info h4{
  font-size: .8rem;
  font-weight: 700;
  color: #222;
}
.info small{
  font-weight: 600;
  color: var(--text-grey);
}
.contact span{
  font-size: 1.2rem;
  display: inline-block;
  margin-left: .5rem;
  color:  var(--main-color);

}

@media only screen and (max-width: 1200px){

  .sidebar{
    width: 70px ;
  }
  .sidebar .sidebar-brand,
  .sidebar li
  {
    padding-left: 1rem;
    text-align: center;
  }
  #nav-toggle:checked + .sidebar li a
  {
    padding-left: 0rem;
  }
  .sidebar .sidebar-brand h1 span:last-child,
  .sidebar li a span:last-child{
    display: none;

  }

  .main-content {
  margin-left: 70px;

  }
  .main-content  header{
    width: calc(100% - 70px);
    left:70px;

  }
}

@media only screen and (max-width: 960px){
  .cards{
    grid-template-columns: repeat(3, 1fr);
  }
  .recent-grid{
    grid-template-columns: 60% 40%;
  }
}

@media only screen and (max-width: 768px){
  .cards{
    grid-template-columns: repeat(2, 1fr);
  }
  .recent-grid{
    grid-template-columns: 100%;
  }
  .search-wrapper{
    display: none;
  }
  .sidebar {

    left: -100% !important;
  }
  header h2{
    display: flex;
    align-items: center;
  }
  header h2 label{
    display: inline-block;
    text-align: center;
    background: var(--main-color);
    padding-right: 0rem;
    margin-right: 1rem;
    height: 40px;
    width: 40px;
    border-radius: 50%;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center !important;
  }
  header h2 span{
    text-align: center;
    padding-right: 0rem;
  }
  header h2{
    font-size: 1.1rem;
  }
  .main-content{
    width: 100%;
    margin-left: 0rem;
  }
  header{
    width: 100% !important;
    left: 0 !important;
  }
  #nav-toggle:checked + .sidebar{
    left: 0 !important;
    z-index: 100;
    width: 345px;
  }

  #nav-toggle:checked .sidebar .sidebar-brand,
  #nav-toggle:checked + .sidebar li
  {
    padding-left: 2rem;
    text-align: left;
  }

  #nav-toggle:checked + .sidebar li a
  {
    padding-left: 1rem;
  }
  #nav-toggle:checked  + .sidebar .sidebar-brand h1 span:last-child,
  #nav-toggle:checked + .sidebar li a span:last-child{
    display: inline;

  }
  #nav-toggle:checked ~ .main-content{
    margin-left: 0rem !important;
  }
}
@media only screen and (max-width: 560px){
  .cards{
    grid-template-columns: 100%;
  }
}


.sidebar {
    width: 250px;
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    background: rgba(0, 0, 0, .2);
    backdrop-filter: blur(6px);
    box-shadow: 5px 0 10px rgba(0, 0, 0, .3);
    z-index: 100;
    transition: width 300ms;
}

.sidebar-brand {
    height: 90px;
    padding: 1rem 0rem 1rem 2rem;
    /* 	color:#fff; */
}

.sidebar-brand span {
    display: inline-block;
    padding-right: 1rem;
}


.sidebar-brand h2 span:last-child,
.sidebar-brand h2 span:first-child {
    filter: brightness(140%);
    background: var(--pink);
    -webkit-text-fill-color: transparent;
    -webkit-background-clip: text;
    background-clip: text;
    text-transform: uppercase;
}

.sidebar-menu li {
    width: 100%;
    margin-bottom: 1.7rem;
    padding-left: 1rem;
}

.sidebar-menu a {
    padding-left: 1rem;
    display: block;
    color: var(--off-white);
    text-transform: uppercase;
    font-weight: 500;
    font-size: 1.1rem;
    overflow: hidden;
}

.sidebar-menu a:hover {
    /* background: var(--off-white); */
    /* color: var(--icon-color); */
    padding-top: .7rem;
    padding-bottom: 1rem;
    border: 1px solid rgba(255, 255, 255, 0.62);
    background: rgba(0, 0, 0, .2);
    backdrop-filter: blur(6px);
    border-radius: 30px 0 0 30px;
}

.sidebar-menu a span:first-child {
    font-size: 1.5rem;
    padding-right: 1rem;
    transform: translatey(5px);
}

.sidebar-menu {
    margin-top: 1rem;

}

#nav-toggle:checked+.sidebar {
    width: 100px;
}

#nav-toggle:checked+.sidebar {
    width: 100px;
}

#nav-toggle:checked+.sidebar .sidebar-brand,
#nav-toggle:checked+.sidebar li {
    padding-left: 1rem;
    text-align: center;
}

#nav-toggle:checked+.sidebar li a {
    padding-left: 0rem;
}

#nav-toggle:checked+.sidebar .sidebar-brand h2 span:last-child,
#nav-toggle:checked+.sidebar li a span:last-child {
    display: none;
}

</style>
@endsection
