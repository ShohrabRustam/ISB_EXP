@extends('Layout.master')
@section('title')
Life Insurace
@endsection
@section('section')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<div class="container">
    <center>
        <h1 class="custom">Life Insurance </h1>
    </center>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr style="background: rgb(196, 201, 201);">
                    <th> Name </th>
                    <th>Premium Amount</th>
                    <th>Insured Amount </th>
                    <th>Policy Period</th>
                    <th>View Details</th>
                    <th>Buy</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($policies as $policy)
                <tr>
                    <td>{{ $policy['policyname'] }}</td>
                    <td>{{ $policy['p_price'] }}</td>
                    <td>{{ $policy['c_price'] }}</td>
                    <td>{{ $policy['policy_period'] }}</td>
                    <td style="margin-left:5px;">
                        <a href="viewPolicy/{{ $policy['id'] }}"> <button class="btn btn-primary" type="button">View
                                Details</button></a>

                    </td>
                    <td>
                        <form action="{{ URL::to('purchasePolicy') }}" method="POST">
                            @csrf
                            <input type="hidden" name="userid" value="{{ Session::get('user')['id'] }}">
                            <input type="hidden" name="policyid" value="{{ $policy['id'] }}">
                            <input type="hidden" name="p_price"
                                value="{{ $policy['p_price'] * ((100+Session::get('risks')) / 100) }}">
                            <input type="hidden" name="c_price" value="{{  $policy['c_price'] }}">
                            <button class="btn btn-primary" type="submit">Buy</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
$('#example').DataTable();
} );
</script>

@endsection
