<?php
$producti_name = $_POST['product_name'];
$price = $_POST['product_price'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

include 'instamojo/Instamojo.php';
$api = new Instamojo\Instamjo('test_5483dd6930f2658c2c6f21cb856', 'test_48a4724123b670ff25b240c4169', 'https://test.instamojo.com/api/1.1/');
 
try{
$response = $api->paymentRequestCreate(array(
"purpose" => $product_name,
"amount" => $price,
"send_eamil" => true,
"email" => $email,
"buyer_name" => $name,
"send_sms"=> true,
"allow_repeated_payments"=> false,
"redirect_url" = "http://localhost/shopping/thankyou.php"
));
$pay_url=$response['longuril'];
header("location:$pay_url");
}
catch (Exception $e){
print('Error: '. $e->getMessage());

}
?>