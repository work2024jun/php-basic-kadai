
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
$nums = [15, 4, 18, 23, 10 ];

function push_sort( $nums, $order ){
if ($order==="TRUE"){
    echo "昇順にソートします。<br>";
    sort($nums);
    foreach ( $nums as $value ){
        echo "{$value}<br>";
    }
}else{
    echo "降順にソートします。<br>";
    rsort($nums);
    foreach ( $nums as $value ){
        echo "{$value}<br>";
    }
}
}

push_sort($nums,"TRUE");
push_sort($nums,"FALSE");
?>
    </p>
</body>

</html>
