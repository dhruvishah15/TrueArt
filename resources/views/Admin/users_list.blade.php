@extends('partials.adminLayout')
@section('name')
    Users List
@endsection

@section('adminContent')
    <div style="overflow-x:auto;" class="resp-table">
        <table class="table table-hover table-striped table-light">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>
            @foreach($user as $person)
            <tr>
                @if($person->role == 1)
                <td>{{ $person->id }}</td>
                <td>{{ $person->name }}</td>
                <td>{{ $person->email }}</td>
                <td><button class="btn btn-danger">Remove User</button></td>
                @else
                @endif
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <script>
        const element = document.getElementById('user');

        element.classList.add('active');
    </script>
@endsection
