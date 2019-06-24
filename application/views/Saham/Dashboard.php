<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Saham</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


  <script src="assets/chart/Chart.js"></script>

  <style>
  body{
    background: #f7f6f3;
  }
  .sidenav {
    height: 100%;
    width: 180px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #1E7373;
    overflow-x: hidden;
    padding-top: 20px;
  }

  .sidenav a {
    padding: 6px 8px 2px 12px;
    text-decoration: none;
    font-size: 16px;
    color: #fff;
    display: block;
  }

  .sidenav a:hover {
    color: #F5C639;
  }

  .sidenav h2{
    padding: 6px 8px 6px 16px;
    color: white;
  }

  .main {
    margin-left: 180px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
  }

  .navbar {
    margin-left: 180px; /* Same as the width of the sidenav */
    padding: 0px 10px;
    height: 50px;
    background: white;
  }

  .text{
    padding-top: 0px;
    font-size: 17px;
  }

  @media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
  }

  .btn{
    float: right;
  }
  .btn:hover{
    color: #0056b3;
  }

</style>

  <script src="assets/chart/Chart.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">

</head>
<body>
  <nav class="navbar navbar-expand-md">
    <div>
      <button class="btn" onclick="window.location.href='<?=base_url()?>index.php/Dashboard/inputan'"><i class="fas fa-plus"></i>Input Data</button>
    </div>
  </nav>
  <hr>
</body>
<div class="sidenav">

  <h2>SAHAM</h2>
  <a href="#"><i class="fas fa-archive"></i> Data Emiten</a>
  <a href="#"><i class="fas fa-plus"></i> Input Data</a>
</div>

  <div class="logo" style="padding: 10px 10px 6px 16px;">
   <h2>SAHAM</h2>
 </div>
 <a href="http://localhost/Formulashm/index.php/Dashboard/DataEmiten"><i class="fas fa-archive"></i>  Data Emiten</a>
 <a href="http://localhost/Formulashm/index.php/Dashboard/FormInput"><i class="fas fa-plus"></i>  Input Data</a>
 <a href="http://localhost/Formulashm/index.php/Dashboard/DetailEmiten"><i class="fas fa-plus"></i> Detail Emiten</a>
</div>

<!-- Main section -->

<div class="main">
  <div class="col-lg-12" ">
    <div class="row" style="padding-bottom: 10px;">
      <div class="col-sm-6" style="background-color:white;">
        <h3>BBNI</h3>
        <P class="text">Bank Negara Indonesia tbk</P>
      </div>

      <div class="col-sm-6" style="background-color:white;">
        <P style="text-align: right; padding-right: 20px;" class="text">Sektor: Finance</P>

      <div class="col-sm-6 text-center" style="background-color:white; padding-left: 12px;">
        <h3>Sektor</h3>
        <P style="font-size: 20px; color: blue;" class="text">Finance</P>
      </div>
      <div class="col" style="background-color:white; padding-left: 12px;">
        <a href="http://localhost/Formulashm/index.php/Dashboard/InputDataForm">
          <button  type="button" id="addDataButton" class="btn btn-info btn-sm">Add Data Emiten</button></a>
        </div>
        <br>
      </div>

      <div class="row">
        <div class="col" style="background-color:white;">
          <P class="text">Saham Hari Ini</P>
          <div class="row">
            <div class="col">
             <p style="margin-top: -15px; padding-top: 0px;">Rp.</p>
           </div>
           <div class="col">
             <p style="margin-top: -15px; padding-top: 0px;">1.200</p>
           </div>
         </div>
       </div>
       <div class="col" style="background-color:white;">
        <P class="text">Kapitalisasi Pasar</P>
        <div class="row">
          <div class="col">
           <p style="margin-top: -15px; padding-top: 0px;">Rp.</p>
         </div>
         <div class="col">
           <p style="margin-top: -15px; padding-top: 0px;">284.397.000.000.000</p>
         </div>
       </div>
     </div>
     <div class="col" style="background-color:white;">
      <P class="text">Saham Beredar</P>
      <div class="row">
        <div class="col">
         <p style="margin-top: -15px; padding-top: 0px;">300.000.000</p>
       </div>
       <div class="col">
         <p style="margin-top: -15px; font-size: 20px; padding-top: 0px; text-align: right;">lembar</p>
       </div>
     </div>
   </div>
 </div>

 <div class="container content"">
  <h4 style="padding-top: 12px;"></h4>
  <div class="row" style="padding-bottom: 20px;">
    <div class="col-sm-6" style="background-color:white; ">
      <div style="width: 500px;margin: 0px auto;">
        <P>Neraca</P>
        <canvas id="myChart"></canvas>

      </div>
      <br>
    </div>

    <div class="col-sm-6" style="background-color:white;">
      <P>Pasar</P>
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="myChart1"></canvas>
      </div>
    </div>
  </div>
</div>


    <div class="row" >
      <div class="col-sm-6" style="background-color:white;">
        <div style="width: 800px;margin: 0px auto;">
          <canvas id="myChart"></canvas>
        </div>
      </div>

      <div class="col-sm-6" style="background-color:white;">
        <P class="text">Sektor: Finance</P>
   </div>
  </div>
</div>


<!-- Selisih section-->
<div class="container content">
  <h4 style="padding-top: 12px">Selisih</h4>
  <div class="row">
    <div class="col" style="background:white;">
      <div style="height: 150px;">
      </div>
      
    </div>
    <div class="col" style="background: white;">
      <P>Persentase (%)</P>
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="grafikBatang"></canvas>
      </div>
    </div>      
  </div>
</div>


<!-- Profit and Revenue-->
<div class="container content">
  <h4 style="padding-top: 12px">Profit and Revenue</h4>
  <div class="row">
    <div class="col" style="background:white;">
      <p>Q1</p>
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="Q1Chart"></canvas>
      </div>
    </div>
    <div class="col" style="background: white;">
      <p>Q2</p>
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="Q2Chart"></canvas>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col" style="background: white;">
      <p>Q3</p>
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="Q3Chart"></canvas>
      </div>
    </div>
    <div class="col" style="background: white;">
      <p>Tahunan</p>
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="TahunanChart"></canvas>
      </div>
    </div>     
  </div>
</div>
  </div>
</div>


<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 23, 2, 3],
          backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
          ],
          borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>

</div>
<script type="text/javascript" src="assets/table.js"></script>