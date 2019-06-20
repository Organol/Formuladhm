<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Saham</title>

  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  <script src="assets/chart/Chart.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">


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
    font-size: 15px; /* Increased text to enable scrolling */
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
    margin-top: 8px;
  }

  .container{
    background: white;
    margin-top: 20px;
  }


</style>
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
 <a href="<?php echo site_url('Dashboard/DataEmiten')?>"><i class="fas fa-archive"></i>  Data Emiten</a>
 <a href="#"><i class="fas fa-plus"></i>  Input Data</a>
 <a href="<?php echo site_url('Dashboard/DetailEmiten')?>"><i class="fas fa-plus"></i> Detail Emiten</a>
</div>

<!-- Main section -->
<style type="text/css">
#btnAddEmiten{
  position: absolute;;
  right: 33px;
  top: 13px;
}
</style>
<div class="main">
  <div class="col-lg-12">
    <div class="row" style="height: 60px; padding-bottom: 5px; margin-top: 5px;">
      <div class="col" style=" padding-left: 12px;">
        <a href="<?php echo site_url('Dashboard/InputDataForm')?>">
          <button  type="button" id="btnAddEmiten" class="btn btn-info btn-sm">Add Data Emiten</button></a>
        </div>
        <br>
      </div>

      <div class="row" style="padding-top: 10px;">
        <div class="col" style="background: white">
          <div class="container content">
            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama Emiten</th>
                  <th>Sektor</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama Emiten</th>
                  <th>Sektor</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr><tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td><button class="btn btn-info btn-sm btn-block"><a href="#"></a>Detail</button></td>
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
      $('#tabel-data').DataTable();
    });
  </script>