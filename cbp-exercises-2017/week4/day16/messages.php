<?php
$messages = array(
    'error' => array(
        'Something went wrong',
        'Something went REALLY wrong',
        'There is no end to this!'
    ),
    'warning' => array(
        'This is your first warning',
        'This is your final warning'
    ),
    'success' => array(
        'Finally, something was successful.'
    )
);

function do_something_risky() {
    // do the risky stuff

    // return new messages
    return array(
        'error' => array(
            'I knew this would happen!',
            'This always happens.'
        ),
        'warning' => array(
            'You should fix this before proceeding'
        ),
        'success' => array()
    );
}

// let's try it
$new_messages = do_something_risky();

//merge two multidimensional arrays into one
$merged_messages = array();

foreach($messages as $type => $messages_of_type)
{
$merged_messages[$type] = array_merge($messages['type'], $new_messages['type']);
}
?>

<body>
<?php foreach ($merged_messages as $type => $messages_of_type): ?>

    <?php foreach ($messages_of_type as $message_text): ?>

<div class="message <?php echo $type; ?>"><?php echo $merged_messages; ?></div>

<?php endforeach ?>
<?php endforeach ?>
</body>

