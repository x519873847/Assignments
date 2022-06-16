<p>ユーザー名:<?php  print(htmlspecialchars($_REQUEST['uname'],ENT_QUOTES));
?></p>
<p>パスワード:<?php  print(htmlspecialchars($_REQUEST['pwd'],ENT_QUOTES)); 
?></p>

<?php
        $uname = $_POST ['uname'];
        $pwd = $_POST ['pwd'];
        setcookie ( "uname", $uname, time () + 3600 * 24 * 30 );
        setcookie ( "pwd", $pwd, time () + 3600 * 24 * 30 );
 ?>