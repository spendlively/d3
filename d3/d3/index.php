<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>D3.js</title>
</head>
<body>

<h1>D3.js Lessons</h1>
<?php
    $files = array_filter(scandir('./'), function($f){
        return preg_match('@[\d]+.html@ui', $f);
    });
?>

<?php if(!empty($files)) { ?>
    <ul>
    <?php foreach($files as $file) { ?>
        <li><a target="_blank" href="<?= $_SERVER['REQUEST_URI'] . $file ?>"><?=  $file ?></a></li>
    <?php } ?>
    </ul>
<?php } else { ?>
    <h1>Sorry, there is nothing to show!</h1>
<?php } ?>

</body>
</html>
