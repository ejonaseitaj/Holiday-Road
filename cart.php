<?php require_once "includes/db.php"; ?>

<?php

if (isset($_GET['add'])) {
    $_SESSION['package_' . $_GET['add']] += 1;
    redirect("checkout.php");
}

if (isset($_GET['remove'])) {

    $_SESSION['package_' . $_GET['remove']]--;

    if ($_SESSION['package_' . $_GET['remove']] < 1) {

        unset($_SESSION['item_total']);
        unset($_SESSION['item_quantity']);

        redirect("checkout.php");
    } else {
        redirect("checkout.php");
    }
}

if (isset($_GET['delete'])) {

    $_SESSION['package_' . $_GET['delete']] = '0';
    unset($_SESSION['item_total']);
    unset($_SESSION['item_quantity']);

    redirect("checkout.php");
}

function cart()
{
    $total = 0;
    $item_quantity = 0;
    $item_name = 1;
    $item_number = 1;
    $amount = 1;
    $quantity = 1;

    foreach ($_SESSION as $name => $value) {
        if ($value > 0) {

            if (substr($name, 0, 8) == "package_") {

                $length = strlen($name);

                $id = substr($name, 8, $length);

                $query = query("SELECT * FROM package WHERE package_id =" . escape_string($id) . " ");
                confirm($query);

                while ($row = fetch_array($query)) {

                    $sub = $row['package_price'] * $value;
                    $item_quantity += $value;

                    $package = <<<DELIMETER
                    
                        <tr>
                        <td>{$row['package_title']}</td>
                        <td>&#36;{$row['package_price']}</td>
                        <td>{$value}</td>
                        <td>&#36;{$sub}</td>
                        <td><a class='btn btn-warning' href="cart.php?remove={$row['package_id']}"><span class='glyphicon glyphicon-minus'></a>  <a class='btn btn-success' href="cart.php?add={$row['package_id']}"><span class='glyphicon glyphicon-plus'></span></a>  
                        <a class='btn btn-danger' href="cart.php?delete={$row['package_id']}"><span class='glyphicon glyphicon-remove'></span></a></td>
                        </tr>
                        <input type="hidden" name="item_name_{$item_name}" value="{$row['package_title']}">
                        <input type="hidden" name="item_number_{$item_number} value="{$row['package_id']}">
                        <input type="hidden" name="amount_{$amount}" value="{$row['package_price']}">
                        <input type="hidden" name="quantity_{$value}" value="$value">
                        
    
                    DELIMETER;

                    echo $package;

                    $item_name ++;
                    $item_number ++;
                    $amount ++;
                    $quantity ++;
                }
                $_SESSION['item_total'] = $total += $sub;
                $_SESSION['item_quantity'] = $item_quantity;
            }
        }
    }
}


?>