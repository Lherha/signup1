<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Table</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">User Id</th>
      <th scope="col">Entered Amount</th>
      <th scope="col">Date borrowed</th>
      <th scope="col">Due Date</th>
      <th scope="col">Date refunded</th>
      <th scope="col">Credit Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</body>
</html>




<?php

$sql="Select * from `loanuser_data` WHERE user_id='$user_id'";
$result=mysqli_query($sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $user_id=$row['user_id'];
        $entered_amount=$row['entered_amount'];
        $date_borrowed=$row['date_borrowed'];
        $due_date=$row['due_date'];
        $date_refunded=$row['date_refunded'];
        $credit_status=$row['credit_status'];

        echo '<tr>
        <td>'.$entered_amount.'</td>
        <td>'.$date_borrowed.'</td>
        <td>'.$due_date.'</td>
        <td>'.$date_refunded.'</td>
        <td>'.$credit_status.'</td>
        </tr>';
    }
  }
?>

<?php

global $wpdb;
$sql="update `loanuser_data` set id=$id,date_refunded='$date_refunded', credit_status='$credit_status' where id=$id";
    $result=mysqli_query($sql, OBJECT);

    if($result){
      
      $post_id = 
      $date_refunded = 
      $credit_status = 'Refunded';
      $order = wc_get_order($order_id)
      $amount =
      
    
      update_post_meta($post_id, 'date_refunded', $date_refunded);
      
      update_post_meta($post_id, 'credit_status', $credit_status);
    

    }

    ?>








if($result){
      while($row=mysqli_fetch_assoc($result)){
          $user_id=$row['user_id'];
          $requested_amount=$row['requested_amount'];
          $date_borrowed=$row['date_borrowed'];
          $due_date=$row['due_date'];
          $date_refunded=$row['date_refunded'];
          $credit_status=$row['credit_status'];
  
          echo '<tr>
          <td>'.$requested_amount.'</td>
          <td>'.$date_borrowed.'</td>
          <td>'.$due_date.'</td>
          <td>'.$date_refunded.'</td>
          <td>'.$credit_status.'</td>
          </tr>';
      }
    }