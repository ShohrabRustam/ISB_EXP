@extends('Admin.master')
@section('title')
Help Message
@endsection

@section('section')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<div class="container">
    <h1 style="text-align: center; color:navy">Help Message</h1>
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
                    <th>Name </th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($helps as $help)
                <tr>
                    <td>{{ $help['name'] }}</td>
                    <td>{{ $help['email'] }}</td>
                    <td>{{ $help['message'] }}</td>
                    <td style="margin-left:5px">
                        <a href="#"><button type="button" class="btn btn-primary">Reply</button>
                        </a>
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
