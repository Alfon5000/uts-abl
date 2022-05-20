<?php
$contents = file_get_contents("http://www.omdbapi.com?apikey=1e7d4dbb&s=x-men");
$contents = json_decode($contents, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=280, initial-scale=1.0">
    <title>All X-Men Movies</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>All X-Men Movies</h1>
    </header>
    <main>
        <?php foreach ($contents["Search"] as $content) : ?>
            <div class="card">
                <img src="<?php echo $content['Poster']; ?>" alt="Poster" class="image">
                <div class="detail">
                    <table>
                        <tr>
                            <td>Title</td>
                            <td>: <?php echo $content['Title']; ?></td>
                        </tr>
                        <tr>
                            <td>Year</td>
                            <td>: <?php echo $content['Year']; ?></td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td>: <?php echo ucwords($content['Type']); ?></td>
                        </tr>
                        <tr>
                            <td>IMDb ID</td>
                            <td>: <?php echo $content['imdbID']; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
    <footer>
        <p>Copyright &copy; 2022, Alfonso Lai</p>
    </footer>
</body>

</html>