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
        <h1>Redact here your text</h1>
        <p>The redactor will replace with &quot;&#42;&#42;&#42;&quot; the occurences of the word chosen from text.</p>
    </header>

    <main>
        <form action="form-landing-page.php" method="POST">
            <div>
                <label for="word-to-find">Word to redact from text</label>
                <input id="word-to-find" name="word-to-find" type="text" placeholder="Here goes a word...">
            </div>

            <div>
                <label for="lastname">Text to be redacted</label>
                <textarea id="text-unredacted" name="text-unredacted" type="text" placeholder="Here goes a text..." rows="3"></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>