<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../utils/Autoloader.php';

        $date1 = new MyDate();
        var_dump($date1);

        echo "<br />";
        echo "===============================================================";
        echo "<br />";

        $timestamp = time();
        var_dump($timestamp);

        $date2 = new MyDate($timestamp);
        var_dump($date2);

        echo "<br />";
        echo "===============================================================";
        echo "<br />";

        $date3 = new MyDate("14-08-1990 12:13:14");
        var_dump($date3);

        echo "<br />";
        echo "===============================================================";
        echo "<br />";

        $date4 = new MyDate("22-12-1989");
        var_dump($date4);
        ?>
    </body>
</html>
