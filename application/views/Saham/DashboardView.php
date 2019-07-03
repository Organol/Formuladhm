<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Saham</title>

  <!-- CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/dashboard.css");?>">

  <!-- JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <script src="<?php echo base_url("assets/chart/Chart.js");?>"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
  <script src="https://www.chartjs.org/samples/latest/utils.js"></script>




</head>
<body>
<!--   <nav class="navbar navbar-expand-md">
  </nav>
  <hr> -->
</body>
<!-- Sidebar section -->
<div class="sidenav">
  <div class="logo" style="padding: 10px 10px 6px 16px;">
   <h2>SAHAM</h2>
 </div>
 <a href="<?php echo base_url("index.php/Dashboard");?>"><i class="fa fa-archive"></i> Data Emiten</a>
 <a href="http://localhost/Formulashm/index.php/Dashboard/FormInput"><i class="fas fa-plus"></i>  Input Data</a>
</div>

<!-- Main section -->
<div class="main">
  <div class="col-lg-12" ">
    <div class="row" style="padding-bottom: 10px;">
      <div class="col" style="background-color:white;">
       <?php
       foreach ($detail as $post)
       {
        ?>
        <h3><?php echo $post->kode ?></h3>
        <P class="text"><?php echo $post->nama ?></P>
      </div>
      <div class="col-sm-6 text-center" style="background-color:white; padding-left: 12px;">
        <h3>Sektor</h3>
        <P style="font-size: 20px; color: blue;" class="text"><?php echo $post->sektor ?></P>
        <?php
      }
      ?>
    </div>
    <div class="col" style="background-color:white; padding-left: 12px;">
      <a href="http://localhost/Formulashm/index.php/Dashboard/InputDataForm">
        <button  type="button" id="addDataButton" class="btn btn-info btn-sm" >Add Data Emiten</button></a>
      </div>
      <br>
    </div>

    <div class="row" style="font-size: 20px;">
      <div class="col" style="background-color:white;">
        <!-- <P class="text">Saham Hari Ini</P> -->
        <P class="text">Saham Kemarin</P>
        <div class="row">
          <div class="col">
           <p style="margin-top: -15px; padding-top: 0px;">Rp.</p>
         </div>
         <div class="col">
           <p style="margin-top: -15px; padding-top: 0px;" id="SahamHariIni">0</p>
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
         <p style="margin-top: -15px; padding-top: 0px;" id="KapitalisasiHTML" >0</p>
       </div>
     </div>
   </div>
   <div class="col" style="background-color:white;">
    <P class="text">Saham Beredar</P>
    <div class="row">
      <div class="col">
       <p style="margin-top: -15px; padding-top: 0px;" id="sahamBeredarHTML">0</p>
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
      <div style="width: 90%;margin: 0px auto;">
        <P>Nilai Saham</P>
        <canvas id="grafikBatang1" style=" margin-top: -60px;"></canvas>
      </div>
    </div>
    <div class="col" style="background-color:white;">
      <div style="padding-top: 50px; padding-right: 4px;">
        <h5>Hitung Selisih</h5>
        <div class="input-group date"> 
          <input placeholder="Pilih Tanggal" type="datetime" class="form-control" id="start_date" name="start_date">
          <i class="fas fa-calendar-alt" style="padding-left: 5px;"></i>
        </div>
        <div class="input-group date" style="padding-top: 5px; padding-bottom: 10px;">
          <input placeholder="Pilih Tanggal" type="datetime" class="form-control" id="end_date" name="end_date">
          <i class="fas fa-calendar-alt" style="padding-left: 5px;"></i>
        </div>
        <button class="btn btn-info btn-sm" style="width: 90px;" id="filter">Filter</button>
        <h2 class="text-center" style="color: blue;" id="GetVal">0%</h2>
      </div>
    </div>
  </div>
</div>


<!-- Profit and Revenue-->
<div class="container content">
  <h4 style="padding-top: 12px">Profit and Revenue</h4>
  <p style="font-size: 16px; margin-top: -5px;">Mata Uang: <a style="color: red;">Rupiah</a></p>
  <p style="font-size: 16px; margin-top: -19px;">Satuan: <a style="color: red;">Penuh</a></p>
  <div class="row">
    <div class="col" style="background:white;">
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="Q1Chart"></canvas>
      </div>
    </div>
    <div class="col" style="background: white;">
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="Q2Chart"></canvas>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col" style="background: white;">
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="Q3Chart"></canvas>
      </div>
    </div>
    <div class="col" style="background: white;">
      <div style="width: 500px;margin: 0px auto;">
        <canvas id="TahunanChart"></canvas>
      </div>
    </div>     
  </div>
</div>


</div>
</div>
<!-- datasaham -->
<script type="text/javascript">
 getSaham();
 function getSaham(){
  var segment = window.location.pathname.split('/');
  var kodeEmiten = segment.pop();  
  $.ajax({
    type:'POST',
    data:'kode='+kodeEmiten,
    url:'<?php echo base_url()."index.php/Emiten/getDataSaham"?>',
    dataType:'json',
    success:function(data){
      console.log("databatang"+data);
      var data_tanggal = [];
      var data_saham = [];
      var str = JSON.stringify(data);
      var obj = JSON.parse(str);
      $.each(obj,function(label,item){
        data_tanggal.push(item.tanggal);
        data_saham.push(item.nilai_saham);
      });

      var ctx_live = document.getElementById("grafikBatang1");
      var config = new Chart(ctx_live,{
        type: 'line',
        data: {
          labels: data_tanggal,
          datasets: [{
            label: 'Nilai Saham',
            fill: false,
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data:data_saham,
          }],
        },
        options: {
          responsive: true,
          title: {
            display: true,
          },
          scales: {
            xAxes: [{
              ticks: {}
            }],
            yAxes: [{
              ticks: {
                beginAtZero: true,
                stepSize: 5000,
                userCallback: function(value, index, values) {

                  value = value.toString();
                  value = value.split(/(?=(?:...)*$)/);

                  value = value.join('.');
                  return 'Rp ' + value;
                }
              }
            }]
          },



        }
      });
    }
  });  
};
</script>

<!-- formula tanggal -->
<script type="text/javascript">
  //datapicker
  $(document).ready(function(){
    var segment = window.location.pathname.split('/');
    var kodeEmiten = segment.pop();

    $(function(){
      $("#start_date").datepicker({
       format: 'yyyy-mm-dd',
       autoclose: true,
       todayHighlight: true,
     });

      $("#end_date").datepicker({
       format: 'yyyy-mm-dd',
       autoclose: true,
       todayHighlight: true,
     });

    });
    $("#filter").click(function(){
     var start_date = $('#start_date').val();
     var end_date = $('#end_date').val();
     console.log(start_date);
     console.log(end_date);
     console.log(kodeEmiten);
     if(start_date !='' && end_date !='')
     {
      if (start_date > end_date){
        alert("Tanggal tidak boleh lebih besar");
        $('#start_date').val('').datepicker("refresh");
      } else {
        $.ajax({
          type:"POST",
          data:{kodeEmiten:kodeEmiten,start_date:start_date,end_date:end_date},
          url:'<?=  base_url()."index.php/Emiten/filterTgl"?>',
          dataType:'json',
          success:function(data){
            var data_tanggal = [];
            var data_saham = [];
            var str = JSON.stringify(data);
            var obj = JSON.parse(str);
            console.log(obj.length);
            if ($.isEmptyObject(obj) || obj.length==1){
              alert("Salah Satu Data Kosong atau semua data kosong");
              console.log(data);
            }else{
              console.log(data);
              var data1 = obj[0].nilai_saham;
              console.log(data1);
              var data2 = obj[1].nilai_saham;
              console.log(data2);
              var coba = data2-data1;
              var coba1 = coba/data2;
              var coba2 = coba1 * 100;
              if (coba > 0) {
                document.getElementById("GetVal").innerHTML = coba2.toPrecision(4) +'%';
                document.getElementById("GetVal").style.color = "green";
              }else{
                document.getElementById("GetVal").innerHTML = coba2.toPrecision(4) +'%';
              }
            }
          }
        });
      }
    }
    else
    {
      alert("Silahkan pilih tanggal terlebih dahulu")
    }

  });

  });
</script>
<!-- data profit dan revenue -->
<script type="text/javascript">
 ambildataq1();
 ambildataq2();
 ambildataq3();
 ambildatatahunan();
 function ambildataq1(){
  var segment = window.location.pathname.split('/');
  var kodeEmiten = segment.pop();  
  $.ajax({
    type:'POST',
    data:'kode='+kodeEmiten,
    url:'<?php echo base_url()."index.php/Emiten/getDataq1"?>',
    dataType:'json',
    success:function(data){
      console.log(data);
      var data_tahun = [];
      var data_profit = [];
      var data_revenue = [];
      var str = JSON.stringify(data);
      var obj = JSON.parse(str);
      $.each(obj,function(label,item){
        data_tahun.push(item.tahun);
        data_profit.push(item.profit);
        data_revenue.push(item.revenue);
      });

      var ctx_live = document.getElementById("Q1Chart");
      var config = new Chart(ctx_live,{
        type: 'line',
        data: {
          labels: data_tahun,
          datasets: [{
            label: 'Profit',
            fill: false,
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data:data_revenue,
          },{
            label: 'Revenue',
            fill: false,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            data:data_profit,
          }]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Data Profit dan Revenue Q1'
          },
        }
      });
    }
  });  
};
function ambildataq2(){
  var segment = window.location.pathname.split('/');
  var kodeEmiten = segment.pop();  
  $.ajax({
    type:'POST',
    data:'kode='+kodeEmiten,
    url:'<?php echo base_url()."index.php/Emiten/getDataq2"?>',
    dataType:'json',
    success:function(data){
      console.log(data);
      var data_tahun = [];
      var data_profit = [];
      var data_revenue = [];
      var str = JSON.stringify(data);
      var obj = JSON.parse(str);
      $.each(obj,function(label,item){
        data_tahun.push(item.tahun);
        data_profit.push(item.profit);
        data_revenue.push(item.revenue);
      });

      var ctx_live = document.getElementById("Q2Chart");
      var config = new Chart(ctx_live,{
        type: 'line',
        data: {
          labels: data_tahun,
          datasets: [{
            label: 'Profit',
            fill: false,
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data:data_revenue,
          },{
            label: 'Revenue',
            fill: false,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            data:data_profit,
          }]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Data Profit dan Revenue Q2'
          },
        }
      });
    }
  });  
};
function ambildataq3(){
  var segment = window.location.pathname.split('/');
  var kodeEmiten = segment.pop();  
  $.ajax({
    type:'POST',
    data:'kode='+kodeEmiten,
    url:'<?php echo base_url()."index.php/Emiten/getDataq3"?>',
    dataType:'json',
    success:function(data){
      console.log(data);
      var data_tahun = [];
      var data_profit = [];
      var data_revenue = [];
      var str = JSON.stringify(data);
      var obj = JSON.parse(str);
      $.each(obj,function(label,item){
        data_tahun.push(item.tahun);
        data_profit.push(item.profit);
        data_revenue.push(item.revenue);
      });

      var ctx_live = document.getElementById("Q3Chart");
      var config = new Chart(ctx_live,{
        type: 'line',
        data: {
          labels: data_tahun,
          datasets: [{
            label: 'Profit',
            fill: false,
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data:data_revenue,
          },{
            label: 'Revenue',
            fill: false,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            data:data_profit,
          }]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Data Profit dan Revenue Q3'
          },
        }
      });
    }
  });  
};
function ambildatatahunan(){
  var segment = window.location.pathname.split('/');
  var kodeEmiten = segment.pop();  
  $.ajax({
    type:'POST',
    data:'kode='+kodeEmiten,
    url:'<?php echo base_url()."index.php/Emiten/getDataTahunan"?>',
    dataType:'json',
    success:function(data){
      console.log(data);
      var data_tahun = [];
      var data_profit = [];
      var data_revenue = [];
      var str = JSON.stringify(data);
      var obj = JSON.parse(str);
      $.each(obj,function(label,item){
        data_tahun.push(item.tahun);
        data_profit.push(item.profit);
        data_revenue.push(item.revenue);
      });

      var ctx_live = document.getElementById("TahunanChart");
      var config = new Chart(ctx_live,{
        type: 'line',
        data: {
          labels: data_tahun,
          datasets: [{
            label: 'Profit',
            fill: false,
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            data:data_revenue,
          },{
            label: 'Revenue',
            fill: false,
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            data:data_profit,
          }]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Data Profit dan Revenue Tahunan'
          },
        }
      });
    }
  });  
};
</script>


<!-- Get saham kemaren -->
<script type="text/javascript">
  getSahamToday();
  function getSahamToday(){
    var segment = window.location.pathname.split('/');
    var kodeEmiten = segment.pop();
    var now = new Date();
    var dateString = moment().subtract(1, 'days').format('YYYY-MM-DD');
    // var dateString = '2019-03-04'
    console.log(dateString);
    $.ajax({
      type:'POST',
      data:{kodeEmiten:kodeEmiten,dateString:dateString},
      url:'<?php echo base_url()."index.php/Emiten/getSahamToday"?>',
      dataType:'json',
      success:function(data){
        var str = JSON.stringify(data);
        var obj = JSON.parse(str);
        console.log(obj);
        if ($.isEmptyObject(obj)||obj.length<1){
          document.getElementById("SahamHariIni").innerHTML = 'Data belum Masuk';
          document.getElementById("SahamHariIni").style.fontSize = "15px";
          document.getElementById("SahamHariIni").style.color = "red";
        }else{
          document.getElementById("SahamHariIni").innerHTML = parseFloat(obj[0].nilai_saham).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        }
      }
    });
  }
</script>

<!-- data Kapitalisasi dan saham bereredar -->
<script type="text/javascript">
  getSahamBeredar();
  function getSahamBeredar(){
    var segment = window.location.pathname.split('/');
    var kodeEmiten = segment.pop();
    var now = new Date();
    // var dateString = moment().subtract(1, 'days').format('YYYY-MM-DD');
    var dateString = '2019-03-04';
    $.ajax({
      type:'POST',
      data:{kodeEmiten:kodeEmiten,dateString:dateString},
      url:'<?php echo base_url()."index.php/Emiten/getSahamBeredar"?>',
      dataType:'json',
      success:function(data){
        var str = JSON.stringify(data);
        var obj = JSON.parse(str);
        console.log(obj);
        if ($.isEmptyObject(obj)||obj.length<1){
          document.getElementById("sahamBeredarHTML").innerHTML = 'Data belum Masuk';
          document.getElementById("sahamBeredarHTML").style.fontSize = "15px";
          document.getElementById("sahamBeredarHTML").style.color = "red";
          document.getElementById("KapitalisasiHTML").innerHTML = 'Data belum Masuk';
          document.getElementById("KapitalisasiHTML").style.fontSize = "15px";
          document.getElementById("KapitalisasiHTML").style.color = "red";
        }else{
          document.getElementById("sahamBeredarHTML").innerHTML = parseFloat(obj[0].saham_beredar).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
          var Kapitalisasi = obj[0].nilai_saham * obj[0].saham_beredar;
          document.getElementById("KapitalisasiHTML").innerHTML = parseFloat(Kapitalisasi).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
        }
      }
    });
  }
</script>

<script type="text/javascript">
  ambildataneraca();
  function ambildataneraca(){
    var segment = window.location.pathname.split('/');
    var kodeEmiten = segment.pop();  
    $.ajax({
      type:'POST',
      data:'kode='+kodeEmiten,
      url:'<?php echo base_url()."index.php/Emiten/getDataNeraca"?>',
      dataType:'json',
      success:function(data){
        console.log(data);
        var data_tahun = [];
        var data_aset = [];
        var data_modal = [];
        var data_libilitas = [];
        var str = JSON.stringify(data);
        var obj = JSON.parse(str);
        $.each(obj,function(label,item){
          data_tahun.push(item.tahun);
          data_libilitas.push(item.liabilitas);
          data_modal.push(item.modal);
          data_aset.push(item.aset);
        });

        var ctx_live = document.getElementById("myChart");
        var config = new Chart(ctx_live,{
          type: 'bar',
          data: {
            labels: data_tahun,
            datasets: [{
              label: 'Liabilitas',
              fill: false,
              backgroundColor: window.chartColors.red,
              borderColor: window.chartColors.red,
              data:data_libilitas,
            },{
              label: 'Aset',
              fill: false,
              backgroundColor: window.chartColors.blue,
              borderColor: window.chartColors.blue,
              data:data_aset,
            },{
              label: 'Modal',
              fill: false,
              backgroundColor: window.chartColors.green,
              borderColor: window.chartColors.green,
              data:data_modal,
            }]
          },
          options: {
            responsive: true,
            title: {
              display: false
            },
              scales: {
                xAxes: [{
                  ticks: {}
                }],
                yAxes: [{
                  ticks: {
                    beginAtZero: true,
                    // stepSize: data_libilitas,
                    userCallback: function(value, index, values) {

                      value = value.toString();
                      value = value.split(/(?=(?:...)*$)/);

                      value = value.join('.');
                      return value;
                    }
                  }
                }]
              },

            }
          });
      }
    });  
  };

  function checkRoof(){
    if(Roof.isEmpty()){
      return false;
    }else{
      return true;
    }
}
</script>
