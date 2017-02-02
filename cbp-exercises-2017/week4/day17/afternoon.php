<?php

function validate_value($value, $messages)
{
    if (!value)
    {
        //the same as below: array_push($messages, 'The value is invalid');
        $messages[] = 'The value is invalid';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php $messages = array (); ?>
    <?php validate_value(0, $messages);?>
<?php foreach ($messages as $message) :
<div class="message error"><?php echo $message; ?></div>
<?php endforeach ; ?>
<?php var_dump($messages); ?>
</body>
</html>