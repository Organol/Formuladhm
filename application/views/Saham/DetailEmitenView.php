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


</head>
<body>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
</body>
<div class="sidenav">
  <h2>SAHAM</h2>
  <a href="#"><i class="fas fa-archive"></i> Data Emiten</a>
  <a href="#"><i class="fas fa-plus"></i> Input Data</a>
</div>
<div class="main">
  <div class="col-lg-12" ">
    <div class="row" style="padding-bottom: 5px; padding-top: 5px;">
      <div class="col-sm-6" style="background-color:white; height: 60px;">
        <h3 style="margin-top: 10px;">Formula Saham</h3>
      </div>
      <div class="col-sm-6" style="background-color:white;">
      </div>
      <br>
    </div>

    <div class="row" >
     <div class="col" style="background-color:white; ">
       <div class="container content" style="background: white">
        <p style="padding-top: 5px; padding-bottom: 20px; font-size: 28px; margin-bottom: -10px;">Hitung Persentase(%)</p>
        <div class="input-group-addon">
          <div class="input-group">
            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-calendar"></i></span>
            <input placeholder="Pilih Tanggal" type="text" class="form-control datepicker">
          </div>
        </div>
        <div class="input-group-addon" style="padding-bottom: 10px;">
          <div class="input-group">
            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fas fa-calendar"></i></span>
            <input placeholder="Pilih Tanggal" type="text" class="form-control datepicker">
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
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Nama Emiten</th>
              <th>Sektor</th>
              <th>%</th>
            </tr>
          </tfoot>
          <tbody>
           <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Finance</td>
            <td>-34%</td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Finance</td>
            <td>-34%</td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Finance</td>
            <td>-34%</td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Finance</td>
            <td>-34%</td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Finance</td>
            <td>-34%</td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Finance</td>
            <td>-34%</td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Finance</td>
            <td>-34%</td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Finance</td>
            <td>-34%</td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Manufacture</td>
            <td>-34%</td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Finance</td>
            <td>-34%</td>
          </tr>
          <tr>
            <td>1</td>
            <td>BBNI</td>
            <td>Bank Negara Indonesia Tbk</td>
            <td>Finance</td>
            <td>-34%</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


</div>
</div>


<script>
  $(document).ready(function(){
    $('#tabel-data').DataTable({
      "dom": '<"top"f>rt<"bottom"lip><"clear">',
    } );
  });


  //datapicker
  $(function(){
    $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
    });
  });
</script>


