<?php
$letter = "Мы будем рады видеть Вашего сына на нашем мероприятии.  Ждем его 25 октября. Оргкомитет.";
$letterArr = explode(". ", $letter);
$arrays = [
    str_replace("Вашего сына", "Вашу дочь", substr_replace($letterArr[0], "Уважаемый Андрей Николаевич! ", 0, 0)),  
    str_replace("его", "её", $letterArr[1]),
    str_replace("Оргкомитет", ". Администрация", $letterArr[2])
];
//1-й способ
// for ($i=0; $i <= count($letterArr)-1; $i++) { 
//     ${"letterArr".$i} = $arrays[$i];
//     print_r(${"letterArr".$i});
// }

//2-й способ
$arrays = implode($arrays);
echo $arrays;
