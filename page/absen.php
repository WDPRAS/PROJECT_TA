<?php

require 'query/functions.php';


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PRESENSI</title>
</head>

<body class="container">


    <main class="row">
        <div class="col-md-9 col-sm-6 col-xs-12">
            <div class="btn-block">
                <form action="" method="POST">
                    <input type="hidden" name="nohape" value="+6285748896489" />
                    <input type="hidden" name="isi" value="halo">
                    <button type="submit" name="kirim" class="btn btn-success btn-lg btn-block">CEK IN</button>
                </form>
                <hr>
                <form action="">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block ">CEK OUT</button>
                </form>
            </div>
        </div>
    </main>


</body>

</html>