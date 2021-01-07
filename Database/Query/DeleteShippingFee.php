<?php
include('../Connection/Connect.php');
if(isset($_POST['DeleteShipping']))
{   
     // get id to delete
   echo $id = $_POST['idbase'];
   $sql = "DELETE FROM shipping WHERE id = :idbase";
    $query_delete = $conn->prepare($sql);
    $result = $query_delete->execute(array(":idbase"=>$id));
    
    if($result)
    {
        header("Location: ../Admin/Admin-AddShippingFee.php");   
    }
    else{
        echo 'ERROR Data Not Deleted';
    }

}
?>