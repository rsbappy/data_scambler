<?php require_once "inc/functions.php"; 
$info = '';
$task = $_GET['task']??'report';
if ('seed' ==$task) {
    seed();
    $info= "seeding is complete";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdn.rawgit.com/necolas/normalize.css/master/normalize.css">
    <link rel="stylesheet" href="//cdn.rawgit.com/milligram/milligram/master/dist/milligram.min.css">
    <style>
    body {
        margin-top: 30px;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Project 2 - CRUD</h2>
                <p>A sample project to perform CRUD operations using plain files and PHP</p>


                <?php include_once ("inc/templates/nav.php"); ?>
                <hr>
                <?php if ($info!='') {
                        echo "<p>{$info}</p>";
                } ?>
            </div>
        </div>



        <div class="row">
            <div class="column column-60 column-offset-20">
                <blockquote>
                    Duplicate Roll Number
                </blockquote>
            </div>
        </div>
        <?php if ('report' == $task):?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php generateReport(); ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form action="/crud/index.php?task=add" method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="">
                    <label for="roll">Roll</label>
                    <input type="number" name="roll" id="roll" value="">
                    <button type="submit" class="button-primary" name="submit">Save</button>
                </form>
            </div>
        </div>



        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <input type="hidden" value="" name="id">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="">
                    <label for="roll">Roll</label>
                    <input type="number" name="roll" id="roll" value="">
                    <button type="submit" class="button-primary" name="submit">Update</button>
                </form>
            </div>
        </div>

    </div>
    <script type="text/javascript" src="/crud/assets/js/script.js"></script>
</body>

</html>