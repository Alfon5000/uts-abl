<?php
function cURL($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$url = "http://www.omdbapi.com?apikey=1e7d4dbb&s=x-men";
$arrays = json_decode(cURL($url), true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=300px, initial-scale=1.0">
    <title>All X-Men Movies</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>All X-Men Movies</h1>
    </header>
    <main>
        <?php foreach ($arrays["Search"] as $array) : ?>
            <div class="card">
                <img src="<?= $array['Poster']; ?>" alt="Poster" class="image">
                <div class="detail">
                    <table>
                        <tr>
                            <td>Title</td>
                            <td>: <?= $array['Title']; ?></td>
                        </tr>
                        <tr>
                            <td>Year</td>
                            <td>: <?= $array['Year']; ?></td>
                        </tr>
                        <tr>
                            <td>Type</td>
                            <td>: <?= ucwords($array['Type']); ?></td>
                        </tr>
                        <tr>
                            <td>IMDb ID</td>
                            <td>: <?= $array['imdbID']; ?></td>
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