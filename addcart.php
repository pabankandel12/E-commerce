<?php
session_start();

if (isset($_POST['p_id']) && $_POST['action'] == 'add') {
    $itemArray = array(
        'pro_id' => $_POST['p_id'],
        'pro_name' => $_POST['p_name'],
        'pro_price' => $_POST['p_price']
    );
    $_SESSION['cart'][] = $itemArray;
}

if ($_POST['action'] == 'remove') {
    foreach ($_SESSION['cart'] as $key => $val) {
        if ($val['pro_id'] == $_POST['id_to_remove']) {
            unset($_SESSION['cart'][$key]);
        }
    }
}

if (!empty($_SESSION['cart'])) {
    $outputTable = " ";
    $total = 0;
    $outputTable .= "<table class='table table-bordered'><tr><td>Name</td><td>Price</td><td>Action</td></tr>";
    foreach ($_SESSION['cart'] as $key => $value) {
        $outputTable .= "<tr><td>" . $value['pro_name'] . "</td><td>" . $value['pro_price'] . "</td><td><button id=" . $value['pro_id'] . " class='btn btn-danger delete'>Delete</button></td></tr>";
        //$outputTable .= "<tr><td>"."Galaicha"."</td><td>" . "1000 ". "</td><td>" ."2". "</td><td><button id='' class='btn btn-danger delete'>Delete</button></td></tr>";
        $total = $total + $value['pro_price'];
    }
    $outputTable .= "</table>";
    $outputTable .= "<div class='text-center'><b>Total: " . $total . "</b></div>";
}
echo json_encode($outputTable);
?>
