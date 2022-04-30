@extends('Dashboard.master')
@section('title')
Dashboard
@endsection
@section('section')
<center>
<section class="headline" style="margin-bottom: 5rem">
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <h1>Insurance  Broking System</h1>
    <p class="headPara">“Term life insurance is a good defensive game plan”</p>
    <p class="headPara">Life insurance offers you Long-term Savings which will give huge benefit later, feel allowed to make inquiry.</p>
    <p class="headPara">I don’t call it “Life Insurance,” I call it “Love Insurance.” We buy it because we want to leave a legacy for those we love.</p>
  </section>
</center>

<div class="container-fluid">
    <div class="d-flex flex-row flex-wrap justify-content-center">
        <div class="card" style="width: 40rem; margin-bottom:10rem">
            <div class="card-header">
              <h1>Your Details</h1>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="margin-bottom: 1rem"><strong> Name :</strong> <i> {{ Session::get('user')['name'] }}</i></li>
              <li class="list-group-item" style="margin-bottom: 1rem"><strong> Email :</strong> <i> {{ Session::get('user')['email'] }}</i></li>
              <li class="list-group-item" style="margin-bottom: 1rem"><strong> Mobile :</strong> <i> {{ Session::get('user')['mobile'] }}</i></li>

            </ul>
          </div>
        {{-- <div class="d-flex flex-column">

            <img src="https://images.unsplash.com/photo-1485963631004-f2f00b1d6606?auto=format&fit=crop&w=668&q=80" class="img-fluid">

            <img src="https://images.unsplash.com/photo-1502865787650-3f8318917153?auto=format&fit=crop&w=334&q=80" class="img-fluid">
        </div>

        <div class="d-flex flex-column">
            <img src="https://images.unsplash.com/photo-1500816558239-6b91f4256ead?auto=format&fit=crop&w=331&q=80" class="img-fluid">

            <img src="https://images.unsplash.com/photo-1487376318617-f43c7b41e2e2?auto=format&fit=crop&w=750&q=80" class="img-fluid scale">
        </div>

        <div class="d-flex flex-column">
            <img src="https://images.unsplash.com/photo-1497888329096-51c27beff665?auto=format&fit=crop&w=751&q=80" class="img-fluid scale mb-2">
            <img src="https://images.unsplash.com/photo-1505253468034-514d2507d914?auto=format&fit=crop&w=334&q=80"  class="img-fluid">
        </div>

        <div class="d-flex flex-column">
            <img src="https://images.unsplash.com/photo-1502550900787-e956c314a221?auto=format&fit=crop&w=334&q=80" class="img-fluid m-1 p-1">
              <img src="https://images.unsplash.com/photo-1455853659719-4b521eebc76d?auto=format&fit=crop&w=750&q=80" class="img-fluid image m-1 p-1">
        </div> --}}
    </div>
</div>
<style>
    .container {
            background: #f9f9f9;
        }

        .flex-column {
            max-width: 260px;
        }

        img {
            margin: 5px;
        }

        .scale {
            transform: scaleY(1.05);
            padding-top: 5px;
        }
</style>
@endsection
