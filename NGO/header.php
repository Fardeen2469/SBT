<?php require_once "connect.php";
if(empty($_SESSION['user'])){
	header('Location: index.php');
  die();
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SBT</title>
    <link rel="icon" href="assets/images/logo-140x140.jpg" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link href="css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
       $(document).ready(function() {
            toastr.options = {
                'closeButton': false,
                'debug': false,
                'newestOnTop': false,
                'progressBar': false,
                'positionClass': 'toast-bottom-right',
                'preventDuplicates': false,
                'showDuration': '1000',
                'hideDuration': '1000',
                'timeOut': '3000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut',
            }
        });

        function successtoast(msg) {
            toastr.options.closeButton = true,
                toastr.options.progressBar = true,
                toastr.options.positionClass = 'toast-bottom-right',
                toastr.success(msg);
        }

        function errortoast(msg) {
            toastr.options.closeButton = true,
                toastr.options.progressBar = true,
                toastr.options.positionClass = 'toast-bottom-right',
                toastr.error('msg');
        }
    $(document).ready(function(){
        $('#example').DataTable();
    });
    </script>
    <style type="text/css">
        .navbar {
  width: 100%;
  background-color: black;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: black;
}

.active {
  background-color: green;
}

@media screen and (max-width: 500px){
  .navbar a {
    float: none;
    display: block;
  }
}
    </style>
</head>

<body>
    <div class="row header container-fluid">
        <div class="col-md-8">
            <a href="index.html"><img src="assets/images/ee.jpg" alt="Charity Fund"></a>
        </div>
         <div class="col-md-4">
           <?php
               echo "<div class='dropdown profile'>
                   <button class='btn btn-primary dropdown-toggle' type='button'
                                       data-toggle='dropdown'>
                       Hello, <strong>Admin</strong>&nbsp;
                     <span class='caret'></span>
                     </button>
                     <ul class='dropdown-menu'>
                       <li><a href='logout.php'>Logout</a></li>
                     </ul>
               </div>";
          ?>
            </div>
    </div>
    <div class="container-fluid row section">
            <div class ="col-md-3 navbar">
                 <ul class="nav nav-pills nav-stacked">
                    <li role="presentation"><a href="">Dashboard</a></li>
                     <li role="presentation"><a href="news.php">Add News</a></li>
                     <li role="presentation"><a href="event.php">Event</a></li>
                     <li role="presentation"><a href="vol.php">Volunteers</a></li>
                     <li role="presentation"><a href="gal.php">Gallary</a></li>
                     <li role="presentation"><a href="sm.php">Social Media</a></li>
                     <li role="presentation"><a href="loc.php">Other</a></li>

                     
                     <!-- <li role="presentation"><a href="admin.php">Dashboard</a></li>
                     <li role="presentation"><a href="doner.php">Add News</a></li>
                     <li role="presentation"><a href="list.php">Add Event</a></li> -->
                     <!-- <li role="presentation"><a href="deleteCharity.php">Delete Charity</a></li>
                     <li role="presentation"><a href="addCharity.php">Add Charity</a></li> -->
                </ul>
            </div>
        </div>
</body>
</html>
