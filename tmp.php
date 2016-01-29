<meta charset="UTF-8">
<?php
require_once 'src/Whovian.php'; 

$cabaldiFan1 = new Whovian("Peter Cabaldi");
echo $cabaldiFan1->say() . ".<br/>\n";
$cabaldiFan2 = new Whovian("Peter Cabaldi");
echo $cabaldiFan2->say() . ".<br/>\n";
$tennantFan1 = new Whovian("David Tennant");
echo $tennantFan1->say() . ".<br/>\n";
//var_dump($cabaldiFan1);

try {
    echo $cabaldiFan2->respondTo($cabaldiFan1->say()) . "<br/>\n";
    echo $cabaldiFan2->respondTo($tennantFan1->say()) . "<br/>\n";
} catch (Exception $e) {
    echo "Wyjątek: " . $e->getMessage() . "<br/>\n";
}
?>