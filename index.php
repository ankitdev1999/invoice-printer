<?php

$showAlert = false;
// check if data is inserted then show alert

if (isset($_GET["res_id"])) {

    $responce = $_GET["res_id"];
    if ($responce == 1) {
        $Iid = $_GET["Iid"];
        $showAlert = true;

    } else {
        $showAlert = false;


    }

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<!--head END-->
<body>

<!--show Alert dynamically-->
<?php

if ($showAlert) {

    $clic = "print.php?id=$$Iid";

    echo $al_su = "<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
    Invoice Inserted
    <a target='_blank' href=\"print.php?Iid=$Iid\">Click View</a>
     <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\Close\"></button>
</div>";

} else if (isset($_POST["submit"])) {
    echo $al_fa = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   Invoice Not Inserted
    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\Close\"></button>
</div>';
}


?>
<!--alert end-->


<div class="container">
    <!--   form Start-->
    <form action="save-inv.php" id="myform" method="post">
        <div class="row">
            <div class="col-md-4 pt-3">

                <h5 class="text-success">INVOICE DETAILS</h5>
                <div class="form-group">
                    <label for="inv_no">Invoice No</label>
                    <input maxlength="10" class="form-control" required type="text" name="inv_no">
                </div>
                <div class="form-group">
                    <label for="datepicker">Invoice Date</label>
                    <input class="form-control" name="date" required type="text" id="datepicker">
                </div>
            </div>
            <div class="col-md-8 pt-3">
                <h5 class="text-success">Customer Details</h5>
                <div class="form-group">
                    <label for="cus_name">Customer Name</label>
                    <input maxlength="20" class="form-control" type="text" required name="cus_name" id="cus_name">
                </div>
                <div class="form-group">
                    <label for="adress">Address</label>
                    <input maxlength="20" class="form-control" name="adress" type="text" required id="adress">
                </div>
                <div class="form-group">
                    <label for="city">city</label>
                    <input maxlength="20" class="form-control" name="city" type="text" required id="city">
                </div>


            </div>

            <div class="row">
                <div class="col-md-12 pb-5">
                    <h5 class="text-success">Product Details</h5>
                    <table class="table table-bordered">
                        <thead>
                        <tr class="table-active">
                            <th class="col-sm-1" scope="row">Sno</th>
                            <th class="col-sm-4" scope="row">Product</th>
                            <th scope="row">Price</th>
                            <th scope="row">QT.</th>
                            <th scope="row">Total</th>
                            <th scope="row">Action</th>
                        </tr>
                        </thead>

                        <tbody id="product-body">
                        <tr>

                            <td><input readonly class="form-control sno" type="text" value="1" name="sno[]"></td>
                            <td><input maxlength="25" class="form-control" type="text" name="pname[]" required></td>
                            <td><input maxlength="25" class="form-control price" type="number" name="price[]" required>
                            </td>
                            <td><input maxlength="25" class="form-control qt" type="number" name="qt[]" required></td>
                            <td><input class="form-control total" type="number" name="total[]" required></td>
                            <td><input class="btn btn-danger btn-row-remove btn-sm" type="button" value="X"></td>


                        </tr>
                        </tbody>

                        <tfoot>
                        <tr>
                            <td colspan="2"><input type="button" class="btn btn-primary btn-sm" value="+ Add row"
                                                   id="btn-add-row"></td>
                            <td colspan="2" class="text-end">TOTAL</td>
                            <td></td>
                            <td><input readonly class="form-control" id="g_total" required name="gtotal" type="number">
                            </td>
                            <td></td>

                        </tr>
                        </tfoot>
                    </table>
                    <div class="row  d-flex justify-content-end pt-5 px-5">

                        <input class="btn btn-primary btn-sm " type="submit" name="submit" id="save_inv"
                               value="Save Incoice">
                        <input class="btn btn-danger btn-sm mt-3  " type="reset"
                               value="Reset">
                    </div>

                </div>
            </div>
            <!--    form end-->
    </form>

</div>
</div>

<!--PLUG START-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="script.js"></script>
</body>
</html>