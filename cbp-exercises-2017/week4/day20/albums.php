<?php 
require_once 'database.php';
if ($_POST) {
    $stmt = $db ->prepare('INSERT INTO albums(name, id_owner) VALUES (?, ?)');
    $stmt ->execute([$_POST['name'], $_POST['id_owner']]);
    header('location: albums.php?status=ok');
    var_dump($_POST);
}
// $stmt - statement, execute, prepare, insert
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo 'OK';
}

$stmt = $db ->prepare('SELECT id, first_name, last_name FROM users ORDER BY last_name, first_name');
$stmt ->execute();
$owners = [];
foreach ($stmt->fetchAll() as $value) {
    $owners[$value['id']] = $value['first_name'].' '. $value['last_name'];
}
?>
<style>
    input {
        margin:10px;
    }
</style>
<form action="" method ="post">
Name:<input name = "name"><br>
Owner:<select name="owner">
<?php 
foreach ($owners as $id => $name){
    echo "<option value=$id>$name</option>";
}
?>
</select>
<br>
<input type="submit">
</form>