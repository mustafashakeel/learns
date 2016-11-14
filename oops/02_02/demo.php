<?php 
require 'class.Address.inc';
echo 'Instantiating Address';

$address1 = new Address;
echo '<h2> Empty Address </h2>';
echo '<br/> <pre> '.var_export($address1, TRUE).'</pre>';

echo '<br/> <h2> Now Setting Properties for Address 1 ';
$address1->street_address ='#17 207 Marmont St';
$address1->street_address2="Mailardville";
$address1->city_addresss="Coquitlam";
$address1->province_address="British Columbia ";
$address1->postal_code_address="v3k 3k5";
$address1->country_address="Canada";
$address1->address_id="232321";
echo '<br/> <pre> '.var_export($address1, TRUE).'</pre>';

echo '<br/> <h2> now displaying the address 1 </h2>';
echo $address1->display();

echo '<h2> This is a Second Address </h2>';
$address2 = new Address;

$address2->street_address="11-6-837";
$address2->street_address2="Red Hills ";
$address2->city_addresss="Hyderabad ";
$address2->province_address="Telangana";
$address2->postal_code_address="500004";
$address2->country_address="India";
$address2->address_id="99999";
echo $address2->display();

?>

