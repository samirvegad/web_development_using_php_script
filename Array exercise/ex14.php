<?php

/*14. Remove the email element from the associative array and display the updated array.*/

$info=array("name"=>'Samir',"age"=>21,"email"=>'samirv@gmail.com');
echo"before deleting the email<br/>=";
print_r($info);
echo"<br/>after deleting<br/>";
array_pop($info);
print_r($info);

/*output:
before deleting the email
=Array ( [name] => Samir [age] => 21 [email] => samirv@gmail.com )
after deleting
Array ( [name] => Samir [age] => 21 )*/
?>
