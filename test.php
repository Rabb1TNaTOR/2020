<?php
//Задача на определение высокосного года
function isleap( $year )
{
    if( $year % 4 == 0 )
        # Год високосный
        echo 'Год високосный';
    else
        # Год не високосный
        echo 'Год не високосный';
}
echo isleap(2019);
<br/>
?>

<?php
//Подсчет суммы цифр числа с использованием рандомного диапазона
$number=rand(11,123);
$temp=0;
$summ=0;
$num=$number;
while($number!=0)
  {
    $temp=$number%10;
    $summ+=$temp;
    $number=($number-$temp)/10;
  }
print "Случайное число = <b>$num</b><br>Сумма его цифр = <b>$summ</b>";
?>