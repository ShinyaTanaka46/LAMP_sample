<?php
$dsn = 'mysql:dbname=shinya;localhost;';
$user = 'shinya';
$password = 'morijyobi';
try {
    $dbh = new PDO($dsn, $user, $password);
    
    $sql = "select * from user";
    $result = $dbh->query($sql);
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php foreach( $result as value ) {
	    echo "<h1>$value[id] $value[name] $value[age]</h1>";
}?>
</div>
</body>
</html>