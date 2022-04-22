@extends('Admin.master')
@section('title')
Policies
@endsection

@section('section')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<div class="container">
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
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
                    <a href="/addPolicy/{{ $policy['id'] }}'"><i class="fas fa fa-plus fa-x"
                            style="margin-left: 25px"></i></a>
                    <a href="/updateCompany/{{ $policy['id'] }}"><i class="fas fa fa-edit fa-x"
                            style="margin-left: 25px"></i></a>
                    <a href="/showPolicies/{{ $policy['id'] }}"><i class="fa fa-eye" aria-hidden="true"
                            style="margin-left: 25px"></i></a>
                    <a href="/deleteCompany/{{ $policy['id']}}"><i class="fa fa-trash" style="margin-left: 25px"></i></a>
                </td>

            </tr>
            @endforeach
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>
<script>
    $(document).ready(function() {
$('#example').DataTable();
} );
</script>

@endsection