<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="form1.css">
    <title>Document</title>
</head>

<body>
    <section id="clients" class="clients">
        <h1>CLIENTS PICTURES</h1>
        <div class="img-row">
            <?php
            // Connect to database
            include "D:\my codes\photography website\code\connect.php";


            $sql = "SELECT * FROM images ORDER BY RAND() LIMIT 3";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {

                $count = 1;
                while ($row = mysqli_fetch_assoc($result)) {
            ?>

                    <div class='<?php echo "card " . $count; ?>'>
                        <img src='<?php echo $row["url"]; ?>' alt='<?php echo $row["name"]; ?>'>
                        <div class='caption'>
                            <h4><?php echo $row["name"]; ?></h4>
                            <p><?php echo $row["story"]; ?></p>
                        </div>
                    </div>

            <?php
                    $count++;
                }
            } else {
                echo "No images found.";
            }

            // Close database connection
            mysqli_close($conn);
            ?>
        </div>

        <a href="/code/form.html" class="image-btn">Add Image</a>

    </section>


    </section>
</body>

</html>