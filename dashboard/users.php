<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <title>admin area|users</title>


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

    
</style>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary ">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#">dashboard</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                
                <a class="nav-link " href="admin.html">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="pages.html">pages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="post.html">Post</a>
              </li>
                <li class="nav-item">
                <a class="nav-link  active " href="users.html">users</a>
              </li>
            </ul> 
        </div>
            <ul class=" nav navbar-nav navbar-right">
                <li class="nav-item">
                  <a class="nav-link " aria-current="page" href="#">Welcome</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="login.html">LogOut</a>
                </li>
                
              </ul>


            <!--<form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
          
        </div>
      </nav> 
      <header id="header">
          <div class="container">
              <div class="row" style="height:50px;">
                  <div class="col-lg-10">
                     <h2> <i class="fa fa-cog"></i>  users <small>manage your users</small></h2>  
                  </div>
                  <div class="col-lg-2">
                   
                    <div class="dropdown create ">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown button
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" type="button"  class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#addpages">add pages </a>
                          <a class="dropdown-item" type="button"  class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#addpost">post</a>
                          <a class="dropdown-item" type="button"  class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#addusers">users</a>
                        </div>
                      </div>

                  </div>

              
              

              </div>
          </div>

      </header>
      <div class="breadcrumb">
          <div class="container">
              <ol class="breadcrumb">
                <li><a href="admin.html" style="margin-right: 20px;">Dashboard</a></li>
                  <li class="active">users</li>
              </ol>

          </div>

      </div>
      <section id="main">
          <div class="container">
              <div class="row">
                  <div class="col-lg-3">
                    <div class="list-group">
                        <a href="admin.html" class="list-group-item list-group-item-action bg-danger"><i class="fa fa-cog"></i>  Dashboard <span class='badge'>12</span>
                        </a>
                        <a href="pages.html" class="list-group-item list-group-item-action"> <i class="fa fa-list-alt"></i> pages <span class='badge'>12</span></a>
                        <a href="post.html" class="list-group-item list-group-item-action"> <i class="fa fa-pencil"></i> post <span class='badge'>40</span></a>
                        <a href="users.html" class="list-group-item list-group-item-action"><i class="fa fa-user"></i> users  <span class='badge'>300</span></a>
                        
                      </div>
                        <div class="well">
                            <h4>Disk space used</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                  70%
                                </div>
                              </div>
                              
                        </div>
                        <div class="well">
                            <h4>Bandwidth used</h4>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                  40%
                                </div>
                              </div>
                              </div>
                        </div>
                    


                  
            <div class="col-lg-9"> 
                <!--website overview-->
            
                
                  
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title" style="background-color:#ff0000;"> users</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <input class="form-control" type="text" placeholder="filter users..">

                            </div>
                        </div>
                        
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>name</th>
                                <th>email</th>
                                <th>published</th>
                                <th>phonenumber</th>

                                <th>joined</th>
                            </tr>
                            <tr>
                                <td>john</td>
                                <td>john@gmail.com</td>
                                <td><span class="fa fa-check"></span></td>
                                <td>0725467879</td>
                                <td>March 10,2021</td>
                                <td><a class="btn btn-default" href="edit.html">edit</a> <a class="btn btn-danger" href="" >delete</a></td>
                            </tr>
                            <tr>
                                <td>jame </td>
                                <td>james@gmail.com</td>
                                <td><span class="fa fa-close"></span></td>
                                <td>0754567890</td>
                                <td>March 10,2021</td>
                                <td><a class="btn btn-default" href="edit.html">edit</a> <a class="btn btn-danger" href="" >delete</a></td>
                            </tr>
                            <tr>
                                <td>bill</td>
                                <td>bill@gmail.com</td>
                                <td><span class="fa fa-check"></span></td>
                                <td>0756789034</td>
                                <td>March 10,2021</td>
                                <td><a class="btn btn-default" href="edit.html">edit</a> <a class="btn btn-danger" href="" >delete</a></td>
                            </tr>

                        </table>
                    </div>
                  </div>
                
            </div>
              </div>
              </div>

          

      </section>
      <footer>
          <p class="footer">copyright AdminStrap,&copy;2021</p>
          
      </footer>
     <!-- Modal -->
<div class="modal fade" id="addpages" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <form>
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">add pages</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>page title</label>
                <input type="text" class="form-control " placeholder="page-title">
               
              </div>
              <div class="form-group">
                <label>Page body</label>
                <textarea name="editor1" class="form-control"  placeholder="Page-body"></textarea>
              </div>
              <div class="checkbox">
                
                <label >
            <input type="checkbox" >published
              </label>
              </div>
              <div class="form-group">
              <label>meta</label>
              <input type="text" class="form-control"  placeholder="add some tags">
            </div>


              <div class="form-group">
                <label>meta description</label>
                <input type="text" class="form-control"  placeholder="add some description...">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--modal-->
  <div class="modal fade" id="addpost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <form>
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">add post</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>post title</label>
                <input type="text" class="form-control " placeholder="post-title">
               
              </div>
              <div class="form-group">
                <label>post body</label>
                <textarea name="editor1" class="form-control"  placeholder="post-body"></textarea>
              </div>
              <div class="checkbox">
                
                <label >
            <input type="checkbox" >published
              </label>
              </div>
              <div class="form-group">
              <label>meta</label>
              <input type="text" class="form-control"  placeholder="add some tags">
            </div>


              <div class="form-group">
                <label>meta description</label>
                <input type="text" class="form-control"  placeholder="add some description...">
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <!--modal--><div class="modal fade" id="addusers" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">add pages</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            
          </div>
          <div class="modal-body">
              <div class="form-group">
                  <label>users title</label>
                  <input type="text" class="form-control " placeholder="users-title">
                 
                </div>
                <div class="form-group">
                  <label>users body</label>
                  <textarea name="editor1" class="form-control"  placeholder="user-body"></textarea>
                </div>
                <div class="checkbox">
                  
                  <label >
              <input type="checkbox" >published
                </label>
                </div>
                <div class="form-group">
                <label>meta</label>
                <input type="text" class="form-control"  placeholder="add some tags">
              </div>
  
  
                <div class="form-group">
                  <label>meta description</label>
                  <input type="text" class="form-control"  placeholder="add some description...">
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          </form>
        </div>
      </div>
    </div>


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