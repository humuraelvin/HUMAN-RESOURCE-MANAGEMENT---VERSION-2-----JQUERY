<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recruitment Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="apply.css">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>

  </head>
  <body><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>


    <div class="modal fade" id="employeeAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <form action="" method="POST" id="saveEmployee">

           
            <div class="modal-body">

               <div id="errormessage" class="alert alert-warning d-none">

               </div>
            
                <div class="mb3">
                    <label for="name">Name: </label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb3">
                    <label for="email">Email: </label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="mb3">
                    <label for="idNum">National-ID-N<sup>o</sup>: </label>
                    <input type="text" name="idNum" class="form-control">
                </div>

                <div class="mb3">
                    <label for="phone">Phone-Number: </label>
                    <input type="text" name="phone" class="form-control">
                </div>

                <div class="mb3">
                    <label for="gender">Gender: </label>
                    <input type="text" name="gender" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Employee</button>
            </div>

            </form>

            </div>
        </div>
    </div>


    <!-- anotherpart -->


    <div class="modal fade" id="employeeEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Employee</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>


            <form action="" method="POST" id="updateEmployee">

           
            <div class="modal-body">

               <div id="errormessageUpdate" class="alert alert-warning d-none">

               </div>

               <input type="hidden" name="employee_id" id="employee_id" readonly>
            
                <div class="mb3">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="mb3">
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="mb3">
                    <label for="idNum">National-ID-N<sup>o</sup>: </label>
                    <input type="text" name="idNum" id="idNum" class="form-control">
                </div>

                <div class="mb3">
                    <label for="phone">Phone-Nbr: </label>
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>

                <div class="mb3">
                    <label for="gender">Gender: </label>
                    <input type="text" name="gender" id="gender" class="form-control">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update Employee</button>
            </div>

            </form>

            </div>
        </div>
    </div>
     
    <!-- viewpart -->
    <div class="modal fade" id="employeeViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">View Employee</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

           
            <div class="modal-body">

        
                <div class="mb3">
                    <label for="name">Name: </label>
                    <p id="view_name" class="form-control"></p> 
                </div>

                <div class="mb3">
                    <label for="email">Email: </label>
                    <p id="view_email" class="form-control"></p> 
                </div>

                <div class="mb3">
                    <label for="idNum">National-ID-N<sup>o</sup>: </label>
                    <p id="view_idNum" class="form-control"></p> 
                </div>

                <div class="mb3">
                    <label for="phone">Phone-Nbr: </label>
                    <p id="view_phone" class="form-control"></p> 
                </div>

                <div class="mb3">
                    <label for="gender">Gender: </label>
                    <p id="view_gender" class="form-control"></p> 
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               
            </div>

        

            </div>
        </div>
    </div>
     



      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>MY EMPLOYEES
                        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#employeeAddModal">
                          Add Employee
                        </button>   
                        </h4>
                    </div>
                    <div class="card-body">

                      <table id="myTable" class="table table-bordered table-textriped">

                        <thead>                  

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Nat-ID-No</th>
                                <th>Phone</th>
                                <th>Gender</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                           
                           require 'dbcon.php';

                           $query = "SELECT * FROM Employees";

                           $query_run = mysqli_query($connection, $query);

                           if (mysqli_num_rows($query_run) > 0) {
                            
                               foreach ($query_run as $employee) {
                                
                                  ?>

                                <tr>

                                     <td><?= $employee['id'] ?></td>
                                     <td><?= $employee['name'] ?></td>
                                     <td><?= $employee['email'] ?></td>
                                     <td><?= $employee['idNum'] ?></td>
                                     <td><?= $employee['phone'] ?></td>
                                     <td><?= $employee['gender'] ?></td>

                                     <td>   
                                        <button type="button" value="<?= $employee['id']; ?>" class="viewEmployeeBtn btn btn-info">View</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="button" value="<?= $employee['id']; ?>" class="editEmployeeBtn btn btn-success">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="button" value="<?= $employee['id']; ?>" class="deleteEmployeeBtn btn btn-danger">Delete</button>
                                    </td>
                                
                                </tr>


                                  <?php

                               }

                           }

                           ?>
                        </tbody>


                      </table>

                    </div>
                </div>
            </div>
        </div>
      </div>



    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>

         $(document).on("submit", "#saveEmployee", function (e) {
            
            e.preventDefault();

            var formData = new FormData(this);

            formData.append("save_employee", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);

                    if (res.status == 422) {

                        $('#errormessage').removeClass('d-none');
                        $('#errormessage').text(res.message);
                    }else if(res.status == 200){

                        $('#errormessage').addClass('d-none');
                        $('#employeeAddModal').modal('hide');
                        $('#saveEmployee')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
  
                       
                        $('#myTable').load(location.href + " #myTable")
                    }

                }

            })

         });

         $(document).on('click', '.editEmployeeBtn', function () {
            
            var employee_id = $(this).val();
            //alert(employee_id);

            $.ajax({
                type: "GET",
                url: "code.php?employee_id=" + employee_id,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);

                        if (res.status == 422) {

                            alert(res.message);
                            
                        }else if(res.status == 200){

                            $('#employee_id').val(res.data.id);
                            $('#name').val(res.data.name);
                            $('#email').val(res.data.email);
                            $('#idNum').val(res.data.idNum);
                            $('#phone').val(res.data.phone);
                            $('#gender').val(res.data.gender);

                            $('#employeeEditModal').modal('show');
                            
                        }

                }
            })

         });

         $(document).on("submit", "#updateEmployee", function (e) {
            
            e.preventDefault();

            var formData = new FormData(this);

            formData.append("update_employee", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);

                    if (res.status == 422) {

                        $('#errormessageUpdate').removeClass('d-none');
                        $('#errormessageUpdate').text(res.message);
                    }else if(res.status == 200){

                        $('#errormessageUpdate').addClass('d-none');


                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);
  

                        $('#employeeEditModal').modal('hide');
                        $('#updateEmployee')[0].reset();
                       
                        $('#myTable').load(location.href + " #myTable")
                    }

                }

            })

         });

         $(document).on('click', '.viewEmployeeBtn', function () {
            
            var employee_id = $(this).val();
          

            $.ajax({
                type: "GET",
                url: "code.php?employee_id=" + employee_id,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);

                        if (res.status == 422) {

                            alert(res.message);
                            
                        }else if(res.status == 200){

                            
                            $('#view_name').text(res.data.name);
                            $('#view_email').text(res.data.email);
                            $('#view_idNum').text(res.data.idNum);
                            $('#view_phone').text(res.data.phone);
                            $('#view_gender').text(res.data.gender);

                            $('#employeeViewModal').modal('show');
                            
                        }

                }
            })

         });

         $(document).on('click', '.deleteEmployeeBtn', function (e) {
            
            e.preventDefault();

            if (confirm('Are You Sure You Want To Delete This Employee?')) {
              
                var employee_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_employee': true,
                        'employee_id': employee_id 
                    },

                    success: function (response) {
                        
                        var res = jQuery.parseJSON(response);
                        
                        if (res.status == 500) {
                            alert(res.message);

                        }else{
                           
                        alertify.set('notifier','position', 'top-right');
                        var res = jQuery.parseJSON(response);
                        alertify.alert(res);

                        if (res.status == 500) {
                            alert(res.message);

                        }else{
                           
                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

  

                            $('#myTable').load(location.href + " #myTable")

                        }
                     }
                    }
                });

            }

         });

    </script>
     
         <br><br><br><br><br>
         <center>
         <a href="index.php" class="btn btn-primary">Back TO Admin DASHBOARD</a>
         </center>


  </body>
</html>