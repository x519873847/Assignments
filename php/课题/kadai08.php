<p>カナ：<?php
    $str = $_POST["kana"];
    $str = mb_convert_kana($str, "KVC");
    echo "$str\n"
?></p>
<p>氏名：<?php
    print(htmlspecialchars($_POST['shimei'],ENT_QUOTES));
?></p>
<p>電話番号：<?php
    $tel = $_POST["denwa"];
    if(is_numeric($tel)){
        echo "$tel";
    }else{
        echo "電話番号に数字以外が含まれています";
        echo'<form action="kadai08.html" method="post">';
        echo'<input type="submit" value="戻る">';
        echo '</form>';
    }
?></p>
