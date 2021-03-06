<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
     <!-- font awesome CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,600,700&display=swap" rel="stylesheet">
    <!-- normalize css -->
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <!-- grid css -->
    <link rel="stylesheet" type="text/css" href="assets/css/grid.css">
    <!--  -->
    <link rel="stylesheet" type="text/css" href="assets/css/css.css">
    <!--  -->
    <link rel="stylesheet" type="text/css" href="assets/css/icon.css">
    <!--main CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Data Table Crud</title>
  </head>
  <body>
  <div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      <div class="table-title">
        <div class="row">
          <div class="col-sm-5">
            <h2><b>All Students</b></h2>
          </div>
          <div class="col-sm-5 p-0">
            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Student</span></a>
            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>            
          </div>
          <div class="col-sm-2">
              <div class="search-box">
                  <i class="material-icons">&#xE8B6;</i>
                  <input type="text" class="form-control" placeholder="Search&hellip;">
              </div>
          </div>
        </div>
      </div>
      <div class="mess-all"></div>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>
              <span class="custom-checkbox">
                <input type="checkbox" id="selectAll">
                <label for="selectAll"></label>
              </span>
            </th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Photo</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody id="show_all_student">










 
        </tbody>
      </table>
      <div class="clearfix">
        <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
        <ul class="pagination">
          <li class="page-item disabled"><a href="#">Previous</a></li>
          <li class="page-item"><a href="#" class="page-link">1</a></li>
          <li class="page-item"><a href="#" class="page-link">2</a></li>
          <li class="page-item active"><a href="#" class="page-link">3</a></li>
          <li class="page-item"><a href="#" class="page-link">4</a></li>
          <li class="page-item"><a href="#" class="page-link">5</a></li>
          <li class="page-item"><a href="#" class="page-link">Next</a></li>
        </ul>
      </div>
    </div>
  </div>        
</div>



<!-- add student modal HTML -->
<div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="add_student_form" method="POST" enctype="multipart/form-data">
        <div class="modal-header">            
          <h4 class="modal-title">Add Student</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="mess"></div>
        <div class="modal-body">          
          <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control" >
          </div>
          <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control" >
          </div>
          <div class="form-group">
            <label>Address</label>
            <textarea name="address" class="form-control" ></textarea>
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input name="cell" type="text" class="form-control" >
          </div> 
          <div class="form-group">
            <label>Photo</label>
            <input name="photo" type="file">
          </div>          
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input name="add" type="submit" class="btn btn-success" value="Add">
        </div>
      </form>
    </div>
  </div>
</div>



<!-- single student modal -->
<div id="single_modal_student" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      
        <div class="modal-body"> 
          <h2>Single Student Data</h2>
          <hr>
          <img class="shadow" style="width: 250px; height: 250px; border: 7px solid white; border-radius: 50%; display: block; margin: auto;" src="assets/images/saiful.jpg" alt="">
          <h3 class="text-center">Saiful islam</h3>
          <br>

          <table class="table table-striped">
          <tr >
            <td>Name:</td>
            <td></td>
          </tr>
          <tr>
            <td>E-mail:</td>
            <td></td>
          </tr>
          <tr>
            <td>Address:</td>
            <td></td>
          </tr>
          <tr>
            <td>Phone:</td>
            <td></td>
          </tr>
        </table>
        </div>         
      
    </div>
  </div>
</div>



<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
        <div class="modal-header">            
          <h4 class="modal-title">Edit User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" required></textarea>
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" required>
          </div>          
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-info" value="Save">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <table id="stunet_del">
        <div class="modal-header">            
          <h4 class="modal-title">Delete User</h4>
          <div class="mess2"></div>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">          
          <p>Are you sure you want to delete these Records?</p>
          <p class="text-warning"><small>This action cannot be undone.</small></p>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input id="delete_sted" type="submit" class="btn btn-danger" value="Delete">
        </div>
      </table>
    </div>
  </div>
</div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <script src="assets/js/selectivizr-min.js"></script>

    <!-- main js -->
    <script src="assets/js/active.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>