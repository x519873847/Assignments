<?php session_start();?>
<pre>
セッションテスト入力欄の値:<?php print($_SESSION['session_message']);?>
<?php session_unset();?>
</pre>