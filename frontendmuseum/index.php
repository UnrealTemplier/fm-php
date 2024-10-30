<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="background.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&display=optional"
        rel="stylesheet">

    <link rel="preload" href="https://fonts.gstatic.com/s/inter/v12/UcCO3FwrK3iLTeHuS_fvQtMwCp50KnMw2boKoduKmMEVuLyeAZ9hiJ-Ek-_EeA.woff2"
        as="font" fetchpriority="high">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontend Museum</title>
</head>

<body>
    <h1><img src="images/logo.png" alt="Frontend Masters Museum" width="300"
            fetchpriority="high"></h1>
    <main>
        <?php
        $json = file_get_contents("data/data.json");
        $exhibits = json_decode($json, true);

        if (!$exhibits) {
            echo "Error! exhibits array doesn't exist.";
            return;
        }

        foreach ($exhibits as $object): ?>
            <article>
                <h2><?php echo $object["title"]; ?></h2>
                <p><?php echo $object["description"]; ?></p>
                <img src="gallery/<?php echo $object["image"]; ?>"
                    fetchpriority="high" decoding="sync">
            </article>
        <?php endforeach; ?>
    </main>
</body>

</html>