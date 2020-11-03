<!DOCTYPE HTML>
<html>
    <head></head>
    <body>
        <h2>Fungsi</h2>
        <?php
            function familyName($fname,$year){
                echo "$fname Refsnes. Born in $year <br>";
            }

            familyName("Hege","1975");
            familyName("Stale ","1999");
            familyName("Kai Jim","2006");
        ?>
    </body>
</html>