<?php
$status = false;
try {
    $dbh = new PDO('mysql:host=localhost;dbname=test', "root", "root");
    $status = true;
    $dbh = null;
} catch (PDOException $e) {
    print "Warning!: " . $e->getMessage() . "<br/>";
    die();
}
?>
<?php echo "Mysql Status: " . ($status ? "up" : "down") . "<br>" ?>
<?php echo "Server: " . ($status ? "up" : "down") ?>
<?php phpinfo(); ?>