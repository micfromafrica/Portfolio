
<?php
           $d=date("D");
           switch ($d)
           {

            case "Mon":
            echo 'Have a good Monday';
            break;
            case "Tue":
            echo 'Have a good Tuesday';
            break;
            case "Wed":
            echo 'Have a good Wednesday';
            break;
            case "Thur":
            echo 'Have a good Thursday';
            break;
            case "Fri":
            echo 'Have a good and blessed weekend';
            break;
            case "Sat":
            echo 'Have a good weekend';
            break;
            case "Sun":
            echo 'Hopefully you had a blessed weekend<br>';
            break;
            default:
            echo "Have a nice day!"
           }
            

       
            echo date("d, F Y H:i:s");
?>