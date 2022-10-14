<?php
$BirthDay = new DateTime('3.10.2021'); // Your birthday
$Recent_Today = new Datetime(date('m.d.y'));
$differnce = $Recent_Today->diff($BirthDay);
printf(' Your age till date : %d years, %d month, %d days', $differnce->y, $differnce->m, $differnce->d);
printf("\n");
?>