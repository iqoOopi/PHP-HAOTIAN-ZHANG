<!DOCTYPE html>
<html>

<head>
    <?php include_once '../head.php';?>
</head>

<body>
    <?php
        require_once "../header.php";
        require_once "../menu.php";
    ?>
    <header>
        <h1>Links Page</h1>
    </header>
    <?php
        require_once "variable.php";
        $rows = 6;
        // $cols = 2;
        echo "<table id='linkTable'>";
        $i = 1;
        foreach ($variableArray as $label => $url) {
            echo "<tr>";
            echo "<td>" . $i++ . "</td>";
            echo "<td><a href='$url' target='_blank'>$label</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
<?php
    include_once "../footer.php";
?>
</body>

</html>