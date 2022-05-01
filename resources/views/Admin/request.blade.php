@extends('SuperAdmin.master')
@section('title')
Request Page
@endsection

@section('section')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<div class="container">
    <h1 style="text-align: center; color:navy">Request Policy</h1>
    <br>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr style="background: rgb(230, 161, 32);">
                    <th>User id  </th>
                    <th>Policy id </th>
                    <th>Risk</th>
                    <th>Premium Price</th>
                    <th>Insure Price</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($purchases as $purchase)
                <tr>
                    <td>{{ $purchase['userid'] }}</td>
                    <td>{{ $purchase['policyid'] }}</td>
                    <td>{{ $purchase['risk'] }}</td>
                    <td>{{ $purchase['p_price'] }}</td>
                    <td>{{ $purchase['c_price'] }}</td>
                    <td style="margin-left:5px">
                        <a href="/accept/{{ $purchase['id'] }}" style="margin-right: 20px"><button class="btn btn-primary">Accept</button></a>
                        <a href="/reject/{{ $purchase['id'] }}"><button class="btn btn-primary">Reject</button></a>

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
    });

</script>

@endsection
