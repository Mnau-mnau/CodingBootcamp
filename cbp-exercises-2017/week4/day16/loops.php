<?php
/*$iterator = 0;
while($iterator < 3)
{
    $iterator ++;
    echo $iterator . '<br>';
}
*/

/*$iterator = 0;
do {
    $iterator++;
    echo $iterator . '<br>';
}
while ($iterator < 3);*/

/*$iterator = 0;
if (++$iterator <1); -> false
 *
 *
 */

/*for($iterator = 0; $iterator < 10; $iterator++)
{
    echo $iterator. '<br>';
}
*/

/*for ($i=0; $i<10; $i++)
{
    for ($j=0; $j<10; $j++)
    {
        echo ($i*10)+$j. '<br>';
    }
}
*/
?>

<?php
/*
<body>
<ol>
<?php for($iterator = 1; $iterator <= 5; $iterator++) : ?>
<li>
 <?php echo 'List item number ' . $iterator; ?> <br>
</li>
<?php endfor ?>
</ol>
</body>
*/
?>

<body>
<ul>
    <?php for ($i = 10; $i > 0; $i--) : ?>
    <?php if($i < 3) break; ?>
    <?php if ($i==7 ) continue; ?>
<li> List number item  <?php echo $i; ?></li>
    <?php endfor; ?>
</ul>
</body>