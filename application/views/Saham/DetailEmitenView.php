<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Saham</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">



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
    font-size: 14px; /* Increased text to enable scrolling */
    padding: 0px 10px;
  }

  .navbar {
    margin-left: 180px; /* Same as the width of the sidenav */
    padding: 0px 10px;
    height: 30px;
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
</style>

  <script src="assets/chart/Chart.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
  
  <link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">

</head>
<body>
<!--   <nav class="navbar navbar-expand-md">
  </nav>
  <hr> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<!-- Sidebar section -->
<div class="sidenav">
  <h2>SAHAM</h2>
  <a href="http://localhost/Formulashm/index.php/Dashboard/FormInput"><i class="fas fa-plus"></i>  Input Data</a>
</div>

<!-- Main Section -->
<style type="text/css">
#btnAddEmiten{
  position: absolute;;
  right: 33px;
  top: 13px;
}
</style>

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
      <div class="col-sm-6" style="background-color:white;">
       <!--  <a href="#">
          <button  type="button" id="btnAddEmiten"  onClick='showMessage()'  class="btn btn-info btn-sm">Add Data Emiten</button></a> -->
        </div>
        <br>
      </div>

      <div class="row" >
       <div class="col" style="background-color:white; ">
         <div class="container content">
          <p style="padding-top: 5px; padding-bottom: 20px; font-size: 28px; margin-bottom: -10px;">Hitung Persentase(%)</p>
          <div class="row">
           <div class="input-group-addon col-sm-5">
            <div class="input-group">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-calendar"></i></span>
              <input placeholder="Pilih Tanggal" type="text" id="TglSekarang" class="form-control datepicker">
            </div>
          </div>
          <div class="input-group-addon col-sm-5">
            <div class="input-group">
              <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-calendar"></i></span>
              <input placeholder="Pilih Tanggal" id="TglKemarin" type="text" class="form-control datepicker">
            </div>
          </div>
          <div class="col-sm-2" style="padding-bottom: 20px;">
            <button class="btn btn-info btn-sm" style="width: 100%;" id="btnFilter">Filter</button>
          </div>
        </div>

        <table id="tabel-data" class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Nama Emiten</th>
              <th>Sektor</th>
              <th>%</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Nama Emiten</th>
              <th>Sektor</th>
              <th>%</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>

          </tbody>
        </table>
    </div>
    <div class="col-sm-6" style="background-color:white;">
      <P>Pasar</P>
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
</div>


<script>
  //Datatable
  
  var table;
  $(document).ready(function() {

        //datatables
        table = $('#tabel-data').DataTable({ 

          "processing": true, 
          "serverSide": true, 
          "order": [], 

          "ajax": {
            "url": "<?php echo site_url('Emiten/get_data_saham')?>",
            "type": "POST"
          },

          "columnDefs": [
          { 
            "targets": [ 4,5 ], 
            "orderable": false, 
          },
          ],

        });

      });


  //datapicker
  $(function(){
    $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
    });
  });


//Get data tanggal sekarang
$(document).ready(function() {
  $('#TglSekarang').datepicker('setDate', 'today');
  $('#TglKemarin').datepicker();
  // $('#TglKemarin').datepicker('setDate', 'yesterday');


});

$('#btnFilter').click(function(){
  // var to_date = $('#TglSekarang').val();
  // var from_date = $('#TglKemarin').val();
  var to_date = '2019-03-03';
  var from_date = '2019-03-04';

  if(to_date !='' && from_date !=''){
    alert(to_date+' '+from_date);
    if (to_date > from_date){
      alert("Tanggal tidak boleh lebih besar");
      $('#to_date').val('').datepicker("refresh");
    }else{
      $.ajax({
        type:"POST",
        data:{to_date:to_date,from_date:from_date},
        url:'<?=  base_url()."index.php/Emiten/getSelisih"?>',
        dataType:'json',
        success:function(data){
          // console.log(data);
          var str = JSON.stringify(data);
          var obj = JSON.parse(str);
          var data2 =[];
          var data1 =[];
          var hasil = [];
          var data = [];
          for (var i = obj.length - 1; i >= 0; i--) {
            if (obj[i].tanggal==to_date){
              data1.push(obj[i]);
            } 
            else{
              data2.push(obj[i]);
            }
          }
          
          if (data1.length!=data2.length){
            alert('Panjang data Beda');
            console.log(data1.length, data2.length);
          }else{
            alert('Panjang data sama');
            console.log(data1.length, data2.length);
            }
          var data_baru = [];
          // for (var i = data1.length - 1; i >= 0; i--) {
               // data.push(data2[i].nilai_saham-data1[i].nilai_saham);
          // }
             // console.log(data);
          // for (var i = data.length - 1; i >= 0; i--) {
               // console.log(data[i]);
          // }

        }
      });
    }

  } else{
    alert("Please Select Date")
  }
});

function showMessage(){
  alert("Hello friends, this is message.");
}
</script>



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
</body>
