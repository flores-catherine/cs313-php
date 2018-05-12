<?php
session_start();

$product_array = array(array('id'=> "0", 'name'=>"Siamese Cats", 'image'=>"images/siamese-cats-small.jpg", 'alt'=>'pair of Siamese Cat figurines', 'description'=>'Our Siamese Cat figurines come as a set of two. These figurines are a winner for any cat lover.', 'price'=>'&#36;49.95'), array('id'=> "1", 'name'=>"Lucky White Cats", 'image'=>"images/white-cats-small.jpg", 'alt'=>'Collection of White Cat figurines', 'description'=>'We have a large selection of these Japanese Beckoning cats which are said to be lucky. Add some luck to your cat collection today!', 'price'=>'&#36;25.95'), array('id'=> "2", 'name'=>"Girl and Cat", 'image'=>"images/cat-and-girl.jpg", 'alt'=>'Girl Holding a teddy bear with a cat at her feet', 'description'=>'This figurine features a young girl with a cat curled up at her feet. This one will appeal to all figurine lovers, not just cat lovers!', 'price'=>'&#36;15.95'), array('id'=> "3", 'name'=>"Kitten and Waterfall", 'image'=>"images/cat-waterfall-small.jpg", 'alt'=>'Kitten playing at the top of a tiny waterfall', 'description'=>'This adorable kitten playing on a tiny waterfall is sure to make any cat lover swoon.', 'price'=>'&#36;65.95'));

$_SESSION['cart'] = array();
if (isset($_GET['item'])) {
    $_SESSION['cart'][] = $_GET['name'];
}

if (isset($_SESSION['cart'])) {
    $numberSiamese = 0;
    $numberWhite = 0;
    $numberGC = 0;
    $numberKitten = 0;
    if (count($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if (strpos($value, '') !== false) {
                $numberSiamese = $numberSiamese + 1;
            }

            if (strpos($value, '') !== false) {
                $numberWhite = $numberWhite + 1;
            }

            if (strpos($value, '') !== false) {
                $numberGC = $numberGC + 1;
            }
                        
            if (strpos($value, '') !== false) {
                $numberKitten = $numberKitten + 1;
            }
        }

    }
}


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
    $action = filter_input(INPUT_GET, 'action');}

switch ($action) {
    case 'add':
//        $newProd = filter_input(INPUT_GET, 'name');
//        array_push($_SESSION['cart'],$newProd);
        include "views/browse.php";
//        print_r($_SESSION['cart']);
        break;    
    case 'viewCheckout':
        include "views/checkout.php";
        break;
    case 'viewCart':
        print_r($_SESSION['cart']);
        include "views/cart.php";
        break;
    case 'reset':
        unset($_SESSION['cart']);
        header('Location: index.php');
        break;    
    case'confirm':
        break;
    case 'checkout':
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
        $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING);
        include 'views/confirm.php';
        unset($_SESSION['cart']);
        break;    
    default:
//        echo "I like chinchillas.";
//        exit;
        include "views/browse.php";
        break;
}