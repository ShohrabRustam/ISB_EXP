@extends('Layout.master')
@section('title')
Risk vehicle
@endsection
@section('section')
<div class="container py-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <span class="anchor" id="formContact"></span>
            <hr class="my-5">
            <!-- form contact -->
            <div class="card card-outline-secondary">
                <p class="description custom" style="margin-top: 30px">Please provide the correct details for best price
                    it will be varified.
                </p>

                <div class="card-header">
                    <h3 class="mb-0">Vehicle Details </h3>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('suceess') }}
                    </div>
                    @endif
                    @if (Session::has('fail'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('fail') }}
                    </div>
                    @endif
                    <form autocomplete="off" action=" {{ URL::to('/riskAnalysisVehicle') }} " method="POST" class="form"
                        role="form">
                        @csrf
                        <fieldset>
                            @error('vehicle')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror

                            <label class="mb-0" for="vehicle"> Vehicle Number ? </label>
                            <div class="row mb-1">
                                <div class="col-lg-12">
                                    <input class="form-control" type="text" name="vehicle" placeholder="DL 01 AA 1111" value="{{ old('vehicle') }}">
                                </div>
                            </div>
                            <br>
                            <label class="mb-0" for="service">Do You Service Every Year ? </label>
                            <div class="row mb-1">
                                <div class="col-lg-12">
                                    <select class="form-control" name="service" required>
                                        <option class="form-control" value="">Select Field</option>
                                        <option class="form-control" value="0">Yes</option>
                                        <option class="form-control" value="10">No</option>
                                        <option class="form-control" value="5">Sometimes</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <label class="mb-0" for="damage">Is it Damage ? </label>
                            <div class="row mb-1">
                                <div class="col-lg-12">
                                    <select class="form-control" name="damage" placeholder="Select Policy" required>
                                        <option class="form-control" value="">Select Field</option>
                                        <option class="form-control" value="10">Yes</option>
                                        <option class="form-control" value="0">No</option>
                                        <option class="form-control" value="5">Little bit </option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            @error('price')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror

                            <label class="mb-0" for="price"> Price ? </label>
                            <div class="row mb-1">
                                <div class="col-lg-12">
                                    <input class="form-control" type="number" name="price" placeholder="Price" min="0">
                                </div>
                            </div>

                            <br>
                            <label class="mb-0" for="dop">Date of purchase </label>
                            <div class="row mb-1">
                                <div class="col-lg-12">
                                    <input name="dop" class="form-control" type="date" value="{{ old('dop') }}"
                                        required>
                                </div>
                            </div>
                            <br>
                            <br><br>
                            <button class="btn btn-secondary btn-lg float-right" type="submit">Submit Details</button>
                            <br>
                        </fieldset>
                    </form>
                </div>
            </div><!-- /form contact -->
        </div>
        <!--/col-->
    </div>
</div>
@endsection
