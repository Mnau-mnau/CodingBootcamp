<?php 
if ($_POST) {
    require_once 'database.php';
    $stmt = $db ->prepare('INSERT INTO users(first_name, last_name, birthday, registration_date) VALUES (?, ?, ?, now())');
    if (isset($_POST['birthday']) && $_POST['birthday'] != ''){
    $birthday = $_POST['birthday'];
}
    else {
        $birthday = NULL;
    }
    $stmt ->execute([$_POST['first_name'], $_POST['last_name'], $birthday]);
    header('location: users.php?status=ok');
    var_dump($_POST);
}
if (isset($_GET['status']) && $_GET['status'] == 'ok') {
    echo 'OK';
}
if (isset($_POST['birthday']) && $_POST['birthday'] == ''){

}
?>
<style>
    input {
        margin:10px;
        border:none;
        border-bottom: 2px solid red;
    }
</style>
<form action="" method ="post">
First name:<br><input name = "first_name"><br>
Last name:<br><input name = "last_name"><br>
Birthday - format yyyy-mm-dd:<br><input name = "birthday" placeholder = "yyyy-mm-dd"><br>
<input type="submit">
</form>