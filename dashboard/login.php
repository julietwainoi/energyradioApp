<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <title>admin area|account login</title>


</head>
<style>
    body{
        background-color:#f4f4f4f4;
    }
    .navbar{
        min-height: 33px !important;
        margin-bottom: 0;
        border-radius:0;
        
    }
.navbar-nav>li>a,.navbar-brand{
padding-top:6px !important;
padding-bottom:0 !important;
height:33px;
}
#header{
    background: black;
    color:cornsilk;
    padding-bottom: 10px;
    margin-bottom: 10px;
    padding-top:20px;
}
.breadcrumb{
    background:#cccccc;
    color:black;

}
.breadcrumb a{
    color:#333333;
}
.progress-bar{
    background-color: darkgrey;
}
.dash-box{
    text-align:center;
}
.footer{
    text-align: center;
    color:darkmagenta;
    padding:30px;
    background: black;
    margin-top:30px;

}
#login{
    margin: top 30px;
    margin-left:400px;
}

    
</style>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">dashboard</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

            <!--<form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          </div>
        </div>
      </nav> 
      <header id="header">
          <div class="container">
              <div class="row" style="height:50px;">
                  <div class="col-lg-12">
                     <h1 class="text-center">Admin area  <small>Account login</small> </h1>  
                  </div>
                  

              
              

              </div>
          </div>

      </header>
     
      <section id="main">
          <div class="container">
              <div class="row">      
            <div class="col-lf-4 col-md-offset-4"> 
                <form id="login"  action="admin.html" class="well">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="text"class="form-control" placeholder="Enter Email">
                    </div>

                     <div class="form-group">
                        <label>Password</label>
                        <input type="text"class="form-control" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-default btn-block">Login</button>

                </form>
            </div>
              </div>
              </div>

          

      </section>
      <footer>
          <p class="footer">copyright AdminStrap,&copy;2021</p>
          
      </footer>
    

  <script>
    CKEDITOR.replace( 'editor1' );
</script>
      
      <!--<script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
   </script> -->
   <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
    
</html>