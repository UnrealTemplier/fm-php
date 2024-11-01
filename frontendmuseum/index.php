<?php include "header_inc.php"; ?>

<?php
include "classes.php";

$db = new database();
$exhibits = $db->execute("SELECT * FROM Exhibits");

if (!$exhibits) {
    echo "Error! exhibits array doesn't exist.";
    return;
} ?>

<ul id="master">
    <?php foreach ($exhibits as $index => $object): ?>
        <li><a href="frontendmuseum/details.php?index=<?php echo $index; ?>">
                <?php echo $object["title"]; ?>
            </a></li>
    <?php endforeach; ?>
</ul>

<?php include "footer_inc.php"; ?>