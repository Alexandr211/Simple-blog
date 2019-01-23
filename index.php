<?php
//include_once 'db/dbconnection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog Home</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <!-- JQuery scripts and other -->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="   crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script> 
   <script src="js/ajax.js"></script> 
   <script src="js/ajaxonload.js"></script> 
   
</head>
<body>
   <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Alexander simple Blog template</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>      
  
  <!-- The end of Navigation -->
  
  <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
          </h1>

          <!-- Blog Post -->
          <div id="result_form" class="card mb-4">
                       
          </div>

                  

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

                
          <!-- The Blog data input Widget -->
          <div class="card my-4">
            <h5 class="card-header">Please, input the Blog data</h5>
            
              <form name="feedback" class="card-body" method="post" id="ajax_form" action="" enctype="multipart/form-data">
       <p><b>Title:</b><br>
      <input type="text" name="idname" id = "idname" style="display: none;" required size="25">   
      </p>
      <p>
       <input type="text" name="title" id = "title" required class="form-control">   
      </p>
      <p><b>Name:</b><br>
       <input type="text" name="name" id = "name" required class="form-control">
      </p>
      <p><b>Text</b><Br>
       <textarea name="text" id = "text" required class="form-control" rows="3"></textarea></p>
      <p><input type="submit" class="btn btn-info" id="btn" value="Create">
      <input type="submit" class="btn btn-info" id="update_btn" value="Update"  style="display: none;">
       <input type="reset" class="btn btn-info" value="Clear">
       <button type="button" id="home_btn" class="btn btn-info" onclick=readalldata(this) value="'+result.items[i].id+'" style="display: none;">To Home</button></p>
     </form>
            
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
  
 <script>
   $( document ).ready(function() { 
    
    
    $('#ajax_form').validate({
        submitHandler: function (form) {
          //  alert('test');
        sendAjaxForm('result_form', 'ajax_form', 'controllers/input.php');
            
            return false;
        }
    });
   });
     
    </script>
 
  <br>

  <!--  <div id="result_form">The simple Blog</div> -->
    
<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Alexander simple Blog template 2019</p>
      </div>
      <!-- /.container -->
    </footer>
     
<!-- Bootstrap core JavaScript -->
 <!--   <script src="vendor/jquery/jquery.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>    
    
</body>
<script src="js/readdata.js"></script>
<script src="js/readalldata.js"></script>
<script src="js/deldata.js"></script>
<script src="js/baserender.js"></script>
<script src="js/updatedata.js"></script>
</html>
      
      
