@extends('Layout.master')
@section('title')
transaction
@endsection
@section('section')
<style>
    body {
      text-align: center;
      padding: 40px 0;
      background: #EBF0F5;
    }
      .payment {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
      }
      .payment-para {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size:20px;
        margin: 0;
      }
    i {
      color: #9ABC66;
      font-size: 100px;
      line-height: 200px;
      margin-left:-15px;
    }
    .card {
      background: white;
      padding: 60px;
      border-radius: 4px;
      box-shadow: 0 2px 3px #C8D0D8;
      display: inline-block;
      margin: 0 auto;
    }
  </style>
  <body>
    <div class="card">
        <p class="payment-para">{{ $transactionid }}</p>
    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
      <i class="checkmark">✓</i>
    </div>
    <h2 class="payment">{{ $price }}</h2>
      <h1 class="payment">Your Payment Success</h1>
      <p class="payment-para">We received your policy purchase request;<br/> we'll be in touch shortly!</p>
    </div>
  </body>
@endsection
