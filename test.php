<?php
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

?>


