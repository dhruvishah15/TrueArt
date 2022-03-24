@extends('partials.adminLayout')
@section('name')
    Dashboard
@endsection

@section('adminContent')
    <div class="overview-boxes">
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Users</div>
                <div class="number">40,876</div>
                <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Sales</div>
                <div class="number">38,876</div>
                <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bxs-cart-add cart two'></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Profit</div>
                <div class="number">$12,876</div>
                <div class="indicator">
                    <i class='bx bx-up-arrow-alt'></i>
                    <span class="text">Up from yesterday</span>
                </div>
            </div>
            <i class='bx bx-cart cart three'></i>
        </div>
        <div class="box">
            <div class="right-side">
                <div class="box-topic">Total Artists</div>
                <div class="number">110</div>
                <div class="indicator">
                    <i class='bx bx-up-arrow-alt down'></i>
                    <span class="text">Up From Today</span>
                </div>
            </div>
            <i class='bx bxs-cart-download cart four'></i>
        </div>

    </div>

    <div class="row">

        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-6">

            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/1600x900/?artist,person" class="card-img-top" alt="...">
                <center>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <table>
                        <tr class="artist-info">
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                        </tr>
                    </table>
                    <!-- <div class="row">
                              <div class="col-sm-4 col-xs-4 col-md-4">a</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">b</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">c</div>
                          </div> -->
                </center>



                <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                <!-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div> -->
            </div>

        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-6">

            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/1600x900/?person,artwork" class="card-img-top" alt="...">
                <center>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <table>
                        <tr class="artist-info">
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                        </tr>
                    </table>
                    <!-- <div class="row">
                              <div class="col-sm-4 col-xs-4 col-md-4">a</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">b</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">c</div>
                          </div> -->
                </center>



                <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                <!-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div> -->
            </div>

        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-6">

            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/1600x900/?painter,woman" class="card-img-top" alt="...">
                <center>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <table>
                        <tr class="artist-info">
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                        </tr>
                    </table>
                    <!-- <div class="row">
                              <div class="col-sm-4 col-xs-4 col-md-4">a</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">b</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">c</div>
                          </div> -->
                </center>



                <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                <!-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div> -->
            </div>

        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-6">

            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/1600x900/?creative,person" class="card-img-top" alt="...">
                <center>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <table>
                        <tr class="artist-info">
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                        </tr>
                    </table>
                    <!-- <div class="row">
                              <div class="col-sm-4 col-xs-4 col-md-4">a</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">b</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">c</div>
                          </div> -->
                </center>



                <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                <!-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div> -->
            </div>

        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-6">

            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/1600x900/?nature,people" class="card-img-top" alt="...">
                <center>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <table>
                        <tr class="artist-info">
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                        </tr>
                    </table>
                    <!-- <div class="row">
                              <div class="col-sm-4 col-xs-4 col-md-4">a</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">b</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">c</div>
                          </div> -->
                </center>



                <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                <!-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div> -->
            </div>

        </div>

        <div class="col-xl-4 col-lg-4 col-md-6 col-xs-6">

            <div class="card" style="width: 18rem;">
                <img src="https://source.unsplash.com/1600x900/?painter,nature" class="card-img-top" alt="...">
                <center>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <table>
                        <tr class="artist-info">
                            <td>a</td>
                            <td>b</td>
                            <td>c</td>
                        </tr>
                    </table>
                    <!-- <div class="row">
                              <div class="col-sm-4 col-xs-4 col-md-4">a</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">b</div>
                              <div class="col-sm-4 col-xs-4 col-md-4">c</div>
                          </div> -->
                </center>



                <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul> -->
                <!-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div> -->
            </div>

        </div>

    </div>





    <div class="row">
        <div class="col-lg-8">

        </div>
        <div class="col-lg-4">

        </div>
    </div>
    <script>
        const element = document.getElementById('dashboard')

        element.classList.add('active')
    </script>
@endsection
