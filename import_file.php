<?php 
    include("config/connection.php");

    require('spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
    require('spreadsheet-reader-master/SpreadsheetReader.php');

    $target_dir = "uploads/".time().basename($_FILES['file']['name']);
    
    move_uploaded_file($_FILES['file']['tmp_name'],$target_dir);
    
    $reader = new SpreadsheetReader($target_dir);
    

    foreach ($reader as $key => $row) {
        if ($key < 1) {
            continue;    
        }
        
        
        
        if (!empty($row[0])) {
            $date = str_replace('/', '-', $row[0]);
            $query = mysqli_query($conn,"INSERT INTO `transactions` (`date`, `transaction_type`, `order_id`, `sku`, `qty`, `product_details`, `total_product_charges`, `total_promotional_rebates`, `amazon_fees`, `other`, `total_usd`, `sku_2`, `qty_2`) 
            VALUES ('".date('Y-m-d', strtotime($date))."', '".mysqli_real_escape_string($conn, $row[1])."','".$row[2]."','".$row[3]."','".$row[4]."','".mysqli_real_escape_string($conn, $row[5])."','".$row[6]."','".$row[7]."','".$row[8]."','".$row[9]."','".$row[10]."','".$row[11]."','".$row[12]."')");
            if (!$query) {
                echo "ERROR: ".mysqli_error($conn);
            }
        } else {
            break;
        }
        
    }

    
?>  