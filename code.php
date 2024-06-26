<?php

require 'dbcon.php';

if (isset($_POST['delete_selected_employees'])) {
    $selectedIdsJSON = $_POST['selected_Ids'];
    $selectedIds = json_decode($selectedIdsJSON);
    $inClause = implode(',', array_map('intval', $selectedIds));

    $query = "DELETE FROM Employees WHERE id IN ($inClause)";

    $execute_query = mysqli_query($connection, $query);

    if ($execute_query) {
      $result = [
        'status' => 200,
        'message' => "Selected Employees deleted successfully"
      ];
      echo json_encode($result);
      return false;
    
    }else {
      $result = [
        'status' => 500,
        'message' => "Failed to delete selected employees"
      ];
      echo json_encode($result);
      return $result;
    }

}

if (isset($_POST['delete_employee'])) {
  
  $employee_id = mysqli_real_escape_string($connection, $_POST['employee_id']);

  $query = "DELETE FROM Employees WHERE id = '$employee_id' ";

  $execute_query = mysqli_query($connection, $query);

  if ($execute_query) {
    
       
    $result = [
        
        'status' => 200,
        'message' => 'Employee Deleted Successfully'

      ];

      echo json_encode($result);
      return false;

}
else {
   
     
    $result = [
        
      'status' => 500,
      'message' => 'Employee Deleting Failed'

        
    ];

    echo json_encode($result);
    return false;
    
}

}


if (isset($_POST['update_employee'])) {

  $employee_id = mysqli_real_escape_string($connection, $_POST['employee_id']);

  $name = mysqli_real_escape_string($connection, $_POST['name']);
  $email = mysqli_real_escape_string($connection, $_POST['email']);
  $idNum = mysqli_real_escape_string($connection, $_POST['idNum']);
  $phone = mysqli_real_escape_string($connection, $_POST['phone']);
  $gender = mysqli_real_escape_string($connection, $_POST['gender']);

  if ($name == NULL || $email == NULL || $idNum == NULL || $phone == NULL || $gender == NULL) {
      
      $result = [
          
        'status' => 422,
        'message' => 'All Fields Are Mandatory'

          
      ];

      echo json_encode($result);
      return false;

  }

  $sqlQuery  = "UPDATE  Employees SET name = '$name', email = '$email', idNum = '$idNum', phone = '$phone', gender = '$gender' WHERE id = '$employee_id' ";
  
  $sqlQuery_run = mysqli_query($connection, $sqlQuery);

  if ($sqlQuery_run) {
    
       
      $result = [
          
          'status' => 200,
          'message' => 'Employee Updated Successfully'

            
        ];

        echo json_encode($result);
        return false;

  }
  else {
     
       
      $result = [
          
        'status' => 500,
        'message' => 'Employee Updating Failed'

          
      ];

      echo json_encode($result);
      return false;
      
  }

}


if (isset($_GET['employee_id'])) {

    $employee_id = mysqli_real_escape_string($connection, $_GET['employee_id']);

    $query = "SELECT * FROM Employees WHERE id = '$employee_id' ";

    $execute_query = mysqli_query($connection, $query);

    if (mysqli_num_rows($execute_query) == 1) {

      $employee = mysqli_fetch_array($execute_query);

      $result = [
            
        'status' => 200,
        'message' => 'Employee Fetched Successfully',
        'data' => $employee

          
      ];

      echo json_encode($result);
      return false;

    }
    else {

      $result = [
            
        'status' => 404,
        'message' => 'Employee Id Not Found'

          
      ];

      echo json_encode($result);
      return false;

    }

}






if (isset($_POST['save_employee'])) {
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $idNum = mysqli_real_escape_string($connection, $_POST['idNum']);
    $phone = mysqli_real_escape_string($connection, $_POST['phone']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);

    if ($name == NULL || $email == NULL || $idNum == NULL || $phone == NULL || $gender == NULL) {
        
        $result = [
            
          'status' => 422,
          'message' => 'All Fields Are Mandatory'

            
        ];

        echo json_encode($result);
        return false;

    }

    $sqlQuery  = "INSERT INTO Employees (name, email, idNum, phone, gender) VALUES ('$name', '$email', '$idNum', '$phone', '$gender')";
    
    $sqlQuery_run = mysqli_query($connection, $sqlQuery);

    if ($sqlQuery_run) {
      
         
        $result = [
            
            'status' => 200,
            'message' => 'Employee Recruited Successfully'
  
              
          ];
  
          echo json_encode($result);
          return false;

    }
    else {
       
         
        $result = [
            
          'status' => 500,
          'message' => 'Employee recruitment Failed'

            
        ];

        echo json_encode($result);
        return false;
        
    }

}


?>