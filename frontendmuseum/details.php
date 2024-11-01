<?php include "header_inc.php"; ?>

<?php
include "classes.php";

$db = new database();

$exhibits = $db->execute("SELECT * FROM Exhibits");
if (!$exhibits) {
    echo "Error! exhibits array doesn't exist.";
    return;
}

$object = $exhibits[$_GET["index"] ?? 0];
if (!$object) {
    echo "Error! object doesn't exist.";
    return;
} ?>

<article>
    <h2><?php echo $object["title"]; ?></h2>
    <p><?php echo $object["description"]; ?></p>
    <img src="gallery/<?php echo $object["image"]; ?>"
        fetchpriority="high" decoding="sync">
</article>

<?php include "footer_inc.php"; ?>