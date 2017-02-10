<?php
var_dump($_REQUEST);
if(!empty($_POST)){
    var_dump($_POST);
}

?>


// this is supposed to print the whole <html> tag for radio button
// default input print_radio('radiobtn', ['red','blue','orange'], 'blue');

<?php
function print_radio($input_name, $array_of_values, $selected_value){

    foreach($array_of_values as $value): ?> 

    <input type="radio" name="<?php echo $input_name;?>" value="<?php echo $value ?>" <?php echo $selected_value == $value ? 'checked': ''; ?>/><?php echo $value; ?><br>
    <?php
    endforeach;
}
?>

<?php 

function insert_radiobtn($name_param, $values, $selected_value) {
    $html = '';
    foreach($values as $value => $label) {
        $one_radio_html = 
        '<input type="radio" value="'
        .htmlspecialchars($value)
        .'" name="'
        .$name_param
        '" '
        .($value == $selected_value ? return 'checked': '')
        .' id="'
        .$unique_id
        .'"'
        .'>';
    $html .= '<label for="' .$unique_id //finish this code 
            }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Form practice</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="name" value="<?php echo htmlspecialchars('Coding'); ?>"><br>
            <textarea name="message" value="<?php echo htmlspecialchars('Bootcamp'); ?>"></textarea><br>
            <input type="checkbox" name="checkbox" <?php if(true) echo 'checked'; ?>><br>
            <input type="checkbox" name="checkbox" <?php echo true ? 'checked': ''; ?>><br>
            <input type="hidden" name="hidden"><br>
            <input type="datetime-local" name="datetime"><br>
            <input type="date" name="date"><br>
            <input type="month" name="month"><br>
            <input type="color" name="color"><br>
            <input type="password" name="password"><br>
            Colors: <br>
           <?php print_radio('radiobtn', ['red','blue','orange', 'black','yellow'], 'blue'); ?>
           Sizes: <br>
           <?php print_radio('radiobtn', ['XS','S','M', 'L','XL'], 'M'); ?>
            <select name="name">
                <option value="1">
                <option value="2">
            </select>


            <input type="submit" value="submit">
        </form>


    </body>
</html>