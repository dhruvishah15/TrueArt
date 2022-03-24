<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Artist</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/Dashboard/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    @include("Artist.Mark Smith.sideNavbar")

    <div class="main-content">
    @include("Artist.Mark Smith.topNavbar")

        <main>
            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>&#8377 5000</h1>
                        <span>Total Sales</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>8</h1>
                        <span>Total Orders</span>
                    </div>
                    <div>
                        <span class="las la-stethoscope"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Total Customers</span>
                    </div>
                    <div>
                        <span class="las la-wheelchair"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>1</h1>
                        <span>Pending orders</span>
                    </div>
                    <div>
                        <span class="lab la-wpforms"></span>
                    </div>
                </div>

                <div></div>
            </div>
            <h1>Analysis</h1>
            <!-- <canvas id="myChart" style="margin-top:40px;background-color:rgba(0, 0, 0, 0.2);width:100%;max-width:600px"></canvas> -->


            <div class="recent-grid">
                
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Order Details</h3>

                            <button>Mostrar todo <span class="las la-arrow-right">
                                </span></button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Painting name</td>
                                            <td>Customer email</td>
                                            <td>Address</td>
                                            <td>Contact Number</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $item)
                                        <tr>
                                            <td>{{ $item->painting_name }}</td>
                                            <td>{{ $item->user_id }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->phone }}</td>
                                        </tr>
                                    @endforeach
                                        <!-- <tr>
                                            <td>Victor Manuel</td>
                                            <td>Ciro Ledesma</td>
                                            <td>
                                                <span class="status red"></span> Malo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Julian Andres</td>
                                            <td>Quesada Carmona</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Andres</td>
                                            <td>Hernandez</td>
                                            <td>
                                                <span class="status green"></span> Bueno
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Manuel</td>
                                            <td>Chicangana</td>
                                            <td>
                                                <span class="status red"></span> Malo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Julieta</td>
                                            <td>Quesad</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Marleny</td>
                                            <td>Salazar Orozco</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kelly</td>
                                            <td>Gil Ortiz</td>
                                            <td>
                                                <span class="status green"></span> Bueno
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bilma</td>
                                            <td>Ortiz Bermudez</td>
                                            <td>
                                                <span class="status red"></span> Malo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Julian Andres</td>
                                            <td>Salazar Rayo</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jhonatan</td>
                                            <td>Velazco</td>
                                            <td>
                                                <span class="status yellow"></span> Intermdio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Samir</td>
                                            <td>Vidal Carmona</td>
                                            <td>
                                                <span class="status green"></span> Bueno
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Karen</td>
                                            <td>Orozco Sanches</td>
                                            <td>
                                                <span class="status red"></span> Malo
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Emiliano</td>
                                            <td>Chicaganda</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jhon Jairo</td>
                                            <td>Salazar Gallego</td>
                                            <td>
                                                <span class="status yellow"></span> Intermedio
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- <div class="customers">

                    <div class="card">
                        <div class="card-header">
                            <h3>Customer Details</h3>

                            <button>Mostrar todo <span class="las la-arrow-right">
                                </span></button>
                        </div>

                        <div class="card-body">

                            <div class="customer">
                                <div class="info">
                                    <img src="avatars/1.png" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Ana Maria Acosta</h4>
                                        <small>Diarrea</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle"></span>
                                    <span class="lab la-whatsapp"></span>
                                    <span class="las la-phone"></span>
                                </div>
                            </div> -->

                            <!-- <div class="customer">
                                <div class="info">
                                    <img src="avatars/2.png" 40px " height=" 40px " alt=" ">
                                    <div>
                                        <h4>Karen Orozco</h4>
                                        <small>Gripa</small>
                                    </div>
                                </div>
                                <div class=" contact ">
                                    <span class=" las la-user-circle "></span>
                                    <span class=" lab la-whatsapp "></span>
                                    <span class=" las la-phone "></span>
                                </div>
                            </div>

                            <div class=" customer ">
                                <div class=" info ">
                                    <img src=" avatars/3.png " width=" 40px " height=" 40px " alt=" ">
                                    <div>
                                        <h4>Kelly Ortiz</h4>
                                        <small>Intoxicación</small>
                                    </div>
                                </div>
                                <div class=" contact ">
                                    <span class=" las la-user-circle "></span>
                                    <span class=" lab la-whatsapp "></span>
                                    <span class=" las la-phone "></span>
                                </div>
                            </div>

                            <div class=" customer ">
                                <div class=" info ">
                                    <img src=" avatars/4.png " width=" 40px " height=" 40px " alt=" ">
                                    <div>
                                        <h4>Julian Quesada</h4>
                                        <small>Malestar general</small>
                                    </div>
                                </div>
                                <div class=" contact ">
                                    <span class=" las la-user-circle "></span>
                                    <span class=" lab la-whatsapp "></span>
                                    <span class=" las la-phone "></span>
                                </div>
                            </div>

                            <div class=" customer ">
                                <div class=" info ">
                                    <img src=" avatars/5.png " width=" 40px " height=" 40px " alt=" ">
                                    <div>
                                        <h4>Nelson Stiven</h4>
                                        <small>Bartolinitis</small>
                                    </div>
                                </div>
                                <div class=" contact ">
                                    <span class=" las la-user-circle "></span>
                                    <span class=" lab la-whatsapp "></span>
                                    <span class=" las la-phone "></span>
                                </div>
                            </div>

                            <div class=" customer ">
                                <div class=" info ">
                                    <img src=" avatars/6.png " width=" 40px " height=" 40px " alt=" ">
                                    <div>
                                        <h4>Sara Cortez</h4>
                                        <small>Acné</small>
                                    </div>
                                </div>
                                <div class=" contact ">
                                    <span class=" las la-user-circle "></span>
                                    <span class=" lab la-whatsapp "></span>
                                    <span class=" las la-phone "></span>
                                </div>
                            </div>

                            <div class=" customer ">
                                <div class=" info ">
                                    <img src=" avatars/7.png " width=" 40px " height=" 40px " alt=" ">
                                    <div>
                                        <h4>Mario Ortiz</h4>
                                        <small>Demencia</small>
                                    </div>
                                </div>
                                <div class=" contact ">
                                    <span class=" las la-user-circle "></span>
                                    <span class=" lab la-whatsapp "></span>
                                    <span class=" las la-phone "></span>
                                </div>
                            </div>

                            <div class=" customer ">
                                <div class=" info ">
                                    <img src=" avatars/8.png " width=" 40px " height=" 40px " alt=" ">
                                    <div>
                                        <h4>Leopoldo Sas</h4>
                                        <small>Eccema</small>
                                    </div>
                                </div>
                                <div class=" contact ">
                                    <span class=" las la-user-circle "></span>
                                    <span class=" lab la-whatsapp "></span>
                                    <span class=" las la-phone "></span>
                                </div>
                            </div>

                            <div class=" customer ">
                                <div class=" info ">
                                    <img src=" avatars/9.png " width=" 40px " height=" 40px " alt=" ">
                                    <div>
                                        <h4>Stiven Alrboleda</h4>
                                        <small>Encefalitis</small>
                                    </div>
                                </div>
                                <div class=" contact ">
                                    <span class=" las la-user-circle "></span>
                                    <span class=" lab la-whatsapp "></span>
                                    <span class=" las la-phone "></span>
                                </div>
                            </div>

                            <div class=" customer ">
                                <div class=" info ">
                                    <img src=" avatars/10.png " width=" 40px " height=" 40px " alt=" ">
                                    <div>
                                        <h4>Brandon Carnadona</h4>
                                        <small>Faringitis</small>
                                    </div>
                                </div>
                                <div class=" contact ">
                                    <span class=" las la-user-circle "></span>
                                    <span class=" lab la-whatsapp "></span>
                                    <span class=" las la-phone "></span>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
                
            </div>
        </main>

    </div>

    <script>
var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>
</body>

</html>