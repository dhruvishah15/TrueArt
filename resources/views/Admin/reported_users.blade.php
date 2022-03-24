@extends('partials.adminLayout')
@section('name')
    Reported User
@endsection

@section('adminContent')
    <div style="overflow-x:auto;" class="resp-table">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact No.</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="{{asset('images/profile.jpg')}}" alt="Artist Image"></td>
                <td>Jill</td>
                <td>Smith</td>
                <td>50</td>
                <td>50</td>
                <td><button class="btn btn-success">Accept</button></td>
                <td><button class="btn btn-warning">Decline</button></td>
            </tr>
            <tr>
                <td><img src="{{asset('images/profile.jpg')}}" alt="Artist Image"></td>
                <td>Eve</td>
                <td>Jackson</td>
                <td>94</td>
                <td>94</td>
                <td><button class="btn btn-success">Accept</button></td>
                <td><button class="btn btn-warning">Decline</button></td>
            </tr>
            <tr>
                <td><img src="{{asset('images/profile.jpg')}}" alt="Artist Image"></td>
                <td>Adam</td>
                <td>Johnson</td>
                <td>67</td>
                <td>67</td>
                <td><button class="btn btn-success">Accept</button></td>
                <td><button class="btn btn-warning">Decline</button></td>
            </tr>
            </tbody>
        </table>
    </div>
    <script>
        const element = document.getElementById('report_user');

        element.classList.add('active');
    </script>
@endsection
