<?php
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
$merged_messages = array_merge (, $new_messages);
?>


<body>
<?php foreach ($merged_messages as $type => $messages_of_type): ?>
    <?php foreach ($messages_of_type as $message_text): ?>

        <div class="message <?php echo $type; ?>"><?php echo $message_text; ?></div>

    <?php endforeach ?>
<?php endforeach ?>
</body>

