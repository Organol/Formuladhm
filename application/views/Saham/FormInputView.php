<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Saham</title>

  <!-- css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">


  <!-- js -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
</body>
<div class="sidenav">
  <h2>SAHAM</h2>
  <!-- <a href="#"><i class="fas fa-archive"></i> Data Emiten</a> -->
  <a href="http://localhost/Formulashm/index.php/Dashboard"><i class="fas fa-archive"></i> Data Emiten</a>
  <!-- <a href="#"><i class="fas fa-plus"></i> Input Data</a> -->
</div>
<div class="main">
  <div class="col-lg-12" ">
    <!-- <div class="row" style="padding-bottom: 5px; padding-top: 5px;">
      <div class="col-sm-6" style="background-color:white; height: 60px;">
        <h3 style="margin-top: 10px;">Input Data Saham</h3>
      </div>
      <div class="col-sm-6" style="background-color:white;">
      </div>
      <br>
    </div> -->

    <style type="text/css">
    #btnAddData{
      position: absolute;
      top:240px;
      border-radius: 0.4rem;
      left: 220px;

    }
  </style>

  <div class="row" style="padding-top: 25px;">
   <div class="col">
     <div class="container content" style="background:white; height: 300px;">
      <span><button class="btn btn-info btn-sm" id="btnAddData" data-toggle="modal" data-target="#myModal"><i class="fas fa-upload"></i> Data Saham Hari Ini</button></span>
    </div>
  </div>
  <div class="col">
   <div class="container content" style="background: white; height: 300px;">
    <button class="btn btn-info btn-sm" id="btnAddData"><i class="fas fa-upload"></i> Add Data Pasar</button>
  </div>
</div>
</div>
</div>
</div>


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Input Data Saham</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="input-group">
          <label class="input-group-btn">
            <span class="btn btn-secondary">
              Browse&hellip; <input type="file" style="display: none;" multiple>
            </span>
          </label>
          <input type="text" class="form-control" readonly>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-info btn-sm" >Upload</button>
        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



<script type="text/javascript">
  $(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});
</script>