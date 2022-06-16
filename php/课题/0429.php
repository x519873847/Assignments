<p>お名前:<?php ;print(htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES));
?></p>
<p>性別:<?php  print(htmlspecialchars($_POST['gender'],ENT_QUOTES)); 
?></p>
<p>DM:<?php foreach($_POST['dm'] as $dm){ 
    print(htmlspecialchars($dm, ENT_QUOTES).'');
} ?></p>