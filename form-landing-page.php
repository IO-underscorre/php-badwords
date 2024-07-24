<?php
$word_to_redact = trim($_POST['word-to-find'] , " ");
$text_unredacted = trim($_POST['text-unredacted'] , " ");
$text_redacted = str_ireplace($word_to_redact , "***" , $text_unredacted);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Redactor</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Redaction completed</h1>
    </header>

    <main class="text-confront">
        <div>
            <h2>
                UNREDACTED TEXT
            </h2>
            <p class="user-text">
                <?php echo $text_unredacted ?>
            </p>
            <P class="text-infos">
                Text is <?php echo strlen($text_unredacted) ?> characters long
            </P>
        </div>

        <div>
            <h2>
                REDACTED TEXT
            </h2>
            <p class="user-text">
                <?php echo $text_redacted ?>
            </p>
            <P class="text-infos">
                Text is <?php echo strlen($text_redacted) ?> characters long
            </P>
        </div>
    </main>
</body>

</html>