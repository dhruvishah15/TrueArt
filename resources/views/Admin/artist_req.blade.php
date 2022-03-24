@extends('partials.adminLayout')
@section('name')
    Artist Req.
@endsection

@section('adminContent')
    <div style="overflow-x:auto;" class="resp-table">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <!-- <th scope="col">#</th> -->
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($artist as $person)
            <tr>
                <td>{{ $person->name }}</td>
                <td>{{ $person->gender }}</td>
                <td>{{ $person->phone }}</td>
                <td>{{ $person->email }}</td>
                <td><button class="btn btn-success">Accept</button></td>
                <td><button class="btn btn-warning">Decline</button></td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
        const element = document.getElementById('req');

        element.classList.add('active');
    </script>
@endsection
