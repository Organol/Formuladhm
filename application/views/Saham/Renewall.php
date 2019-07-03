<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Renewall</title>

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
	
</body>
<div class="sidenav">
  <div class="logo" style="padding: 10px 10px 6px 16px;">
   <h2>SAHAM</h2>
 </div>
 <a href="#"><i class="fas fa-archive"></i>  Data Emiten</a>
 <a href="#"><i class="fas fa-plus"></i>  Input Data</a>
 <a href="#"><i class="fas fa-plus"></i> Detail Emiten</a>
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
		<div class="row" style="height: 60px; padding-bottom: 5px; margin-top: 4px;">
			<div class="col" style=" padding-left: 12px;">
        		<a href="#">
          			<button  type="button" id="btnAddEmiten" class="btn btn-info btn-sm">Add Data Emiten</button>
          		</a>
        	</div>
        	<br>
		</div>
		<div class="row" style="padding-top: 10px;">
        <div class="col" style="background: white">
          <div class="container content">	
          	<div id="tabel-data_wrapper" class="dataTables_wrapper dt-bootstrap4">
          		<div class="row">
          			<div class="col-sm-12 col-md-6">
          				<div class="dataTables_length" id="tabel-data_length">
          					<label>
          						Show
          						<select name="tabel-data_length" aria_controls="tabel-data" class="custom-select custom-select-sm form-control form-control-sm">
          							<option value="10">10</option>
          							<option value="25">25</option>
          							<option value="50">50</option>
          							<option value="100">100</option>
          						</select>
          						entries
          					</label>
          				</div>
          			</div>
          			<div class="col-sm-12 col-md-6">
          				<div id="tabel-data_filter" class="dataTables_filter">
          					<label>
          						Search
          						<input type="Search" class="form-control form-control-sm" placeholder aria-controls="tabel-data">
          					</label>
          				</div>
          			</div>
          		</div>
          	</div>
            <table id="tabel-data" class="table table-striped table-bordered" role="grid" style="width: 1000px;" cellspacing="0">
              <thead>
                <tr role="row">
                  <th rowspan="1" colspan="1" style="width: 18px;">No</th>
                  <th rowspan="1" colspan="1" style="width: 20px;">Kode</th>
                  <th rowspan="1" colspan="1" style="width: 111px;">Nama Emiten</th>
                  <th rowspan="1" colspan="1" style="width: 74px;">Sektor</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/04/22</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/04/15</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/04/08</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/04/01</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/03/25</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/03/18</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/03/11</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/03/04</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/02/25</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/02/18</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/02/11</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/02/04</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/01/28</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/01/21</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/01/14</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/01/07</th>
                  <th>Selisih</th>
                  <th>Persentase</th>

                  </th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama Emiten</th>
                  <th>Sektor</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/04/22</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/04/15</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/04/08</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/04/01</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/03/25</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/03/18</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/03/11</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/03/04</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/02/25</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/02/18</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/02/11</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/02/04</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/01/28</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/01/21</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/01/14</th>
                  <th rowspan="1" colspan="1" style="width: 18px;">2019/01/07
                  </th>
                  <th>Selisih</th>
                  <th>Persentase</th>
                </tr>
            </tfoot>
            <tbody>
            	<tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td>11,800</td>
                  <td>12,300</td>
                  <td>12,300</td>
                  <td>11,275</td>
                  <td>11,450</td>
                  <td>12,300</td>
                  <td>12,450</td>
                  <td>12,825</td>
                  <td>13,300</td>
                  <td>13,750</td>
                  <td>13,550</td>
                  <td>13,750</td>
                  <td>14,200</td>
                  <td>12,875</td>
                  <td>12,625</td>
                  <td>12,425</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td>11,800</td>
                  <td>12,300</td>
                  <td>12,300</td>
                  <td>11,275</td>
                  <td>11,450</td>
                  <td>12,300</td>
                  <td>12,450</td>
                  <td>12,825</td>
                  <td>13,300</td>
                  <td>13,750</td>
                  <td>13,550</td>
                  <td>13,750</td>
                  <td>14,200</td>
                  <td>12,875</td>
                  <td>12,625</td>
                  <td>12,425</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>BBNI</td>
                  <td>Bank Negara Indonesia Tbk</td>
                  <td>Finance</td>
                  <td>11,800</td>
                  <td>12,300</td>
                  <td>12,300</td>
                  <td>11,275</td>
                  <td>11,450</td>
                  <td>12,300</td>
                  <td>12,450</td>
                  <td>12,825</td>
                  <td>13,300</td>
                  <td>13,750</td>
                  <td>13,550</td>
                  <td>13,750</td>
                  <td>14,200</td>
                  <td>12,875</td>
                  <td>12,625</td>
                  <td>12,425</td>
                </tr>
            </tbody>

	</div>
</div>
</html>