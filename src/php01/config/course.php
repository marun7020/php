<?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";

$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);
$order = htmlspecialchars($_POST['order'], ENT_QUOTES);

print "私の名前は、" . $name . "<br/>";
print "ご希望の商品は、" . $item . "<br/>";
print "注文数は、" . $order;