@extends('partials.adminLayout')
@section('name')
    Artist List
@endsection

    @section('adminContent')
        <div style="overflow-x:auto;" class="resp-table">
            <table class="table table-hover table-striped table-light">
                <thead>
                <tr>
                    <!-- <th scope="col">#</th> -->
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user as $person)
                <tr>
                    @if($person->role == 2)
                    <td>{{ $person->id }}</td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->email }}</td>
                    <td><button class="btn btn-danger">Remove Artist</button></td>
                    @else
                    @endif
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <script>
            const element = document.getElementById('artist');

            element.classList.add('active');
        </script>
    @endsection
