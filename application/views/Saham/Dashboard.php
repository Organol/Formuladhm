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
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">

</head>
<body>
<!--   <nav class="navbar navbar-expand-md">
  </nav>
  <hr> -->
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<!-- Sidebar section -->
<div class="sidenav">
  <div class="logo" style="padding: 10px 10px 6px 16px;">
   <h2>SAHAM</h2>
 </div>
 <a href="http://localhost/Formulashm/Dashboard/DataEmiten"><i class="fas fa-archive"></i>  Data Emiten</a>
 <a href="#"><i class="fas fa-plus"></i>  Input Data</a>
 <a href="http://localhost/Formulashm/index.php/Dashboard/DetailEmiten"><i class="fas fa-plus"></i> Detail Emiten</a>
</div>

<!-- Main section -->
<div class="main">
  <div class="col-lg-12" ">
    <div class="row" style="padding-bottom: 10px;">
      <div class="col" style="background-color:white;">
        <h3>BBNI</h3>
        <P class="text">Bank Negara Indonesia tbk</P>
      </div>
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
    </div>
    <div class="col-sm-6" style="background-color:white;">
      <P>Profit Revenue</P>
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="myChart1"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="container content"">
  <h4 style="padding-top: 12px;"></h4>
  <div class="row" style="padding-bottom: 20px;">
    <div class="col-sm-8" style="background-color:white; ">
      <div style="width: 100%;margin: 0px auto;">
        <P>Nilai Saham</P>
        <canvas id="grafikBatang1"></canvas>
      </div>
    </div>
    <div class="col" style="background-color:white;">
      <div style="padding-top: 50px; padding-right: 4px;">
        <h5>Hitung Selisih</h5>
        <div class="input-group date">
          <input placeholder="Pilih Tanggal" type="text" class="form-control datepicker">
          <i class="fas fa-calendar-alt" style="padding-left: 5px;"></i>
        </div>
        <div class="input-group date" style="padding-top: 5px; padding-bottom: 10px;">
          <input placeholder="Pilih Tanggal" type="text" class="form-control datepicker">
          <i class="fas fa-calendar-alt" style="padding-left: 5px;"></i>
        </div>
        <h2 class="text-center" style="color: blue;">-54%</h2>
      </div>
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
<script type="text/javascript" src="assets/table.js"></script>
