<?php
include "config.php";

//    show alert if data inserted
$showAlert = false;
if (isset($_POST["submit"])) {


    $inv_n = mysqli_real_escape_string($conn, $_POST["inv_no"]);
    $inv_date = date("Y-m-d", strtotime($_POST["date"]));
    $c_name = mysqli_real_escape_string($conn, $_POST["cus_name"]);
    $c_addres = mysqli_real_escape_string($conn, $_POST["adress"]);
    $c_city = mysqli_real_escape_string($conn, $_POST["city"]);
    $g_total = mysqli_real_escape_string($conn, $_POST["gtotal"]);


    $insert = "INSERT INTO `invoice` (`id`, `inv_no`, `inv_date`, `c_name`, `c_add`, `c_city`, `grand_total`) 
        VALUES (NULL, '$inv_n', '$inv_date','$c_name', '$c_addres', '$c_city', '$g_total');";

//    show errror if any single product is not added
    $error =array();
//    check if customer details is added
    if (mysqli_query($conn, $insert)) {
        $sid = mysqli_insert_id($conn);

//        add products array into data base
        for ($i = 0; $i < count($_POST["pname"]); $i++) {
            $m_p = mysqli_real_escape_string($conn, $_POST["pname"][$i]);
            $m_v = mysqli_real_escape_string($conn, $_POST["price"][$i]);
            $m_q = mysqli_real_escape_string($conn, $_POST["qt"][$i]);
            $m_t = mysqli_real_escape_string($conn, $_POST["total"][$i]);

            $proInsert = "INSERT INTO `inv_product` ( `sid`, `p_name`, `p_price`, `p_qt`, `total`) VALUES ( $sid, '$m_p', '$m_v', '$m_q', '$m_t');";


            if ( mysqli_query($conn, $proInsert)){

            }else{
                $error[]=mysqli_error($conn);
            }

        }

        if (count($error)==0){

//        echo "inserted:- " . $sid;

            header("Location: http://localhost/invoice/index.php?res_id=1&Iid=$sid ");
            $showAlert= true;
        }

    }   else {
        echo "failed" . mysqli_error($conn)."<br>";

            header("Location: http://localhost/invoice/index.php?res_id=0 ");
        print_r($error);

    }


}





?>
