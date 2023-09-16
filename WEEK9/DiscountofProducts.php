<?php
    $ProductName=$_GET["product"];
    $ProductPrice=$_GET["price"];
    $ProductQuantity=$_GET["qty"];
    $totalPrice=$ProductPrice * $ProductQuantity;
    if($ProductQuantity>0)
    {
        if($ProductQuantity>=1 && $ProductQuantity <= 5)
            $discount=0.01;
         elseif($ProductQuantity>5 && $ProductQuantity <= 15)
            $discount=0.05;
        elseif($ProductQuantity>15 && $ProductQuantity<=30)
            $discount=0.1;
        else
             $discount=0.2;
        $finalPrice=$totalPrice*$discount;
        echo "Product---------------->Price---------->Quantity<br><br>";
        echo "$ProductName---------------->$ProductPrice---------->$ProductQuantity<br><br>";
        echo "Total Price after Discount is $finalPrice Rupees only";
    }
    else
        echo "No product is Purchased";
?>