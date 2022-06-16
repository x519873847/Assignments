<head>
        <meta charset="utf-8">
        </head>
 <body>
    <h3>kadai09</h3>
        <form action="kadai09.php" method="post">
           ユーザー名: <input type="text" name="uname" >
           <?php print($_COOKIE =['uname']);?><br><br>
           パスワード: <input type="text" name="pwd">
           <?php print($_COOKIE =['pwd']);?><br><br>
            <input type="submit" value="送信する">
    </form>
</body>
