<?php
if (isset($_GET['size'])) {
    $size = $_GET['size'];
    echo '<br>';
    echo '<br>';

    $star = 1;
    if ($size % 2 == 0) {
        $space = floor(($size - 1) / 2);
        $size--;
    } else {
        $space = floor($size / 2);
    }

    for ($i = $size; $i > 0; $i--) {

        for ($j = $space; $j > 0; $j--) {
            echo '&nbsp;&nbsp';
        }
        for ($k = $star; $k > 0; $k--) {
            echo '*';
        }
        if ($star == $size) {
            $star = $size-2;
            $space=1;
            break;
        }

        $space--;
        $star = $star + 2;

        echo '<br>';

    }
    echo '<br>';
    for ($l = $size; $l > 0; $l--){

        for ($m = $space; $m > 0; $m--) {
            echo '&nbsp;&nbsp';
        }
        for ($k = $star; $k > 0; $k--) {
            echo '*';
        }
        if($star==1){
            break;
        }
        $space++;
        $star = $star - 2;
        echo '<br>';
    }



}
