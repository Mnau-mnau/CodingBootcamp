<?php 
if ($_POST) {
    require_once 'database.php';
    $stmt = $db ->prepare('INSERT INFO albums(name, id_owner) VALUES (?, ?)');
    $stmt ->execute([$_POST['name'], $_POST['owner']]);
    var_dump($_POST);
}
?>
<style>
    input {
        margin:10px;
    }
</style>
<form action="" method ="post">
Name:<input name = "name"><br>
Owner:<input name = "owner"><br>
<input type="submit">
</form>