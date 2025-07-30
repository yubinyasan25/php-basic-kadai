<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ソート関数（order: TRUE=昇順, FALSE=降順）
        function sort_2way($array, $order = true){
            if ($order) {
                sort($array);
            } else {
                rsort($array);
            }
            return $array;
        }

        $nums = [15,4,18,23,10];

        echo "昇順にソートします。<br>";
        $asc = sort_2way($nums, true);
        foreach ($asc as $value) {
            echo $value . "<br>";
        }

        echo "降順にソートします。<br>";
        $desc = sort_2way($nums, false);
        foreach ($desc as $value) {
            echo $value . "<br>";
        }
        ?>
    </p>
</body>

</html>