@extends('Layout.master')
@section('title')
View Policy
@endsection
@section('section')
{{-- @include('Company.style') --}}

<div class="card" style="width: 430px;">
    <div class="card-header">
      <h1 style="color: navy">Policy</h1>
    </div>
    <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <div style="float:left;"><img src="{{ $company['logo'] }}" alt="Logo" width="150px" height="50px"> </div>
        <div style="float:right;"><strong>Company Name : </strong> <i>{{ $company['name'] }}</i></div>
        </li>
    <li class="list-group-item">
        <div style="float:left;"><strong> Company About : </strong> </div>
        <div style="float:right;"><i> {{ $company['about'] }}</i></div>

    </li>

    <li class="list-group-item">
        <div style="float:left;"><strong> Policy Name : </strong> </div>
        <div style="float:right;"><i> {{  $policy['policyname'] }}</i></div>

    </li>
    <li class="list-group-item">
        <div style="float:left;"><strong>Policy Desc : </strong> </div>
        <div style="float:right; "><i> {{ $policy['p_desc'] }} </i></div>

    </li>

    <li class="list-group-item">
        <div style="float:left;"><strong>Premimum Price :  </strong> </div>
        @if(  $policy['policytype'] == 'Car' || $policy['policytype'] == 'Bike')
        <div style="float:right;"><i> {{ $policy['p_price'] * ((100+Session::get('risk')) / 100) }}</i></div>
            @else
            <div style="float:right;"><i> {{ $policy['p_price'] * ((100+Session::get('risks')) / 100) }}</i></div>
        @endif

    </li>

    <li class="list-group-item">
        <div style="float:left;"><strong>Insured Price : </strong> </div>
        <div style="float:right; "><i> {{  $policy['c_price'] }}</i></div>

    </li>


    <li class="list-group-item">
        <div style="float:left;"><strong>Policy Period: </strong> </div>
        <div style="float:right;"><i> {{ $policy['policy_period'] }} <strong> Months</strong></i></div>
    </li>

    <form action="{{ URL::to('purchasePolicy') }}" method="POST">
        @csrf
        <input type="hidden" name="userid"  value="{{ Session::get('user')['id'] }}">
        <input type="hidden" name="policyid"  value="{{ $policy['id'] }}">
        @if(  $policy['policytype'] == 'Car' || $policy['policytype'] == 'Bike')
        <input type="hidden" name="p_price"  value="{{ $policy['p_price'] * ((100+Session::get('risk')) / 100) }}">
        @else
        <input type="hidden" name="p_price"  value="{{ $policy['p_price'] * ((100+Session::get('risks')) / 100) }}">
        @endif
        <input type="hidden" name="c_price"  value="{{  $policy['c_price'] }}">
        <li class="list-group-item">

            <div style="float:right;"><button type="submit" class="btn btn-primary" style="width: 100px">Buy</button></div>
        </li>
    </form>
      {{-- <li class="list-group-item"> <strong>Policy Name : </strong> <i> {{ $policy['policyname'] }} </i></li>
      <li class="list-group-item"> <strong>Policy Desc : </strong> <i> {{ $policy['p_desc'] }} </i></li>
      <li class="list-group-item"> <strong>Policy Desc : </strong> <i> {{ $policy['p_desc'] }} </i></li>
      <li class="list-group-item"> <strong>Premimum Price : </strong>  <i>{{ $policy['p_price'] * ((100+Session::get('risks')) / 100)  }}  </i></li>
      <li class="list-group-item"> <strong>Insured Price : </strong>  <i>{{ $policy['c_price'] }} </i></li>
      <li class="list-group-item">  <strong>Policy Period: </strong><i> {{ $policy['policy_period'] }}  <strong>Months</strong></i> </li>
      <li class="list-group-item">  </li> --}}
    </ul>
  </div>


<script>
    $("#search-icon").click(function() {
    $(".nav").toggleClass("search");
    $(".nav").toggleClass("no-search");
    $(".search-input").toggleClass("search-active");
  });

  $('.menu-toggle').click(function(){
     $(".nav").toggleClass("mobile-nav");
     $(this).toggleClass("is-active");
  });

</script>
<style>
  /* HEADINGS */

  h1, p {
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

  .bg {
    animation:slide 3s ease-in-out infinite alternate;
    background-image: linear-gradient(-60deg, rgb(233, 118, 51) 60%,rgb(22, 36, 238) 80%);
    bottom:0;
    left:-50%;
    opacity:.5;
    position:fixed;
    right:-50%;
    top:0;
    z-index:-1;
  }

  .bg2 {
    animation-direction:alternate-reverse;
    animation-duration:4s;
  }

  .bg3 {
    animation-duration:5s;
  }

  .content {
    background-color:rgba(255,255,255,.8);
    border-radius:.25em;
    box-shadow:0 0 .25em rgba(0,0,0,.25);
    box-sizing:border-box;
    left:50%;
    padding:10vmin;
    position:fixed;
    text-align:center;
    top:50%;
    transform:translate(-50%, -50%);
  }

  h1 {
    font-family:monospace;
  }

  @keyframes slide {
    0% {
      transform:translateX(-25%);
    }
    100% {
      transform:translateX(25%);
    }
  }
  .headPara{
    margin-top: 20px;
    font-weight: bold;
}

  /* SECTIONS */

  .headline {
    width: 100%;
    height: 50vh;
    min-height: 350px;
    background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.7)), url('https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/jPLiQ-9/mountains-background-for-titles-intro-projects-and-etc_ew22rur3l__F0000.png');
    background-size: cover;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }


  .page-wrapper {
    width: 100%;
    height: auto;
  }

  .nav-wrapper {
    width: 100%;
    position: -webkit-sticky; /* Safari */
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
    grid-template-columns: repeat(6,1fr);
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
    border-radius: 0; /* FOR SAFARI */
    outline: 0;
    padding: 5px;
  }

  /* MOBILE MENU & ANIMATION */

  .menu-toggle .bar{
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

  .menu-toggle:hover{
    cursor: pointer;
  }

  #mobile-menu.is-active .bar:nth-child(2){
    opacity: 0;
  }

  #mobile-menu.is-active .bar:nth-child(1){
    -webkit-transform: translateY(8px) rotate(45deg);
    -ms-transform: translateY(8px) rotate(45deg);
    -o-transform: translateY(8px) rotate(45deg);
    transform: translateY(8px) rotate(45deg);
  }

  #mobile-menu.is-active .bar:nth-child(3){
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

    .menu-toggle, .bar {
      display: block;
      cursor: pointer;
    }

    .mobile-nav {
    transform: translate(0%)!important;
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

  .contact h1{

        clear: both;
        color: gray;
  }
  .contact p{
    clear: both;
    color: blue;
}



</style>
@endsection
