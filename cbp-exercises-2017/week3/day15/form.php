<?php
/*var_dump ($_GET);
echo 'GET';
var_dump ($_POST);
echo 'POST';*/

require_once 'lib/data-functions.php';

if (!empty($_POST)) {
$data= array (
    'name'=> $_POST['product'],
'color' => $_POST['color'],
);

insert_data($data);
    //store stuff to database
   // header('Location: form.php');

    echo 'adding product ' . $_POST['product'];
    if (isset($_POST['really']) && $_POST['really'] == 'on') {
    echo ' , I mean it';
    }
    if (isset($_POST['color'])) {
        echo $_POST['color'];
    }
    echo $_POST['feedback'];
    echo $POST['country'];


}
/*echo ' ' . $_POST['Really?']; 
    echo ' ' . $_POST['color'];*/ 
?>

<form action="" method="post">

Product: 
<input type= "text" name="product">
<br><hr>

Feedback: 
<input type= "text" name="feedback">
<br><hr>

<input type="checkbox" name="Really" id="really" checked>
<label for="really">Do  you really need it?</label>

<br><hr>

Color:
<br>
<input type="radio" name="color" value="Pink" id="color-pink"><label for="color-pink">Pink</label>
<br>
<input type="radio" name="color" value="Yellow" id="color-yellow" checked><label for="color-yellow">Yellow</label>
<br>
<input type="radio" name="color" value="Green" id="color-green"><label for="color-green">Green</label>
<br><hr>

Country:
<select name="country">
<option value="CZ">Czech Republic</option>
<option value="PL">Poland</option>
<option value="H">Hungary</option>
</select>

<br><hr>

<input type="submit" value="Submit your answer">
<br><hr>
</form>


<?php
if (isset($_GET['id'])){
$data = get_data($_GET['id']);
foreach ($data as $name => $value) {
    echo "$name: $value<br>"
}
echo "<a href=form.php">back</a>";
}else {
$index = get_index ();
foreach ($index as $id => name) {
    echo "<a href=?id=$id>$name</a><br>";
}
}