<?php

if (isset($_POST['kirim'])) {
    $nohape  = $_POST['nohape'];
    $isi     = $_POST['isi'];

    echo "<script>window.location = 'https://api.whatsapp.com/send?phone=$nohape&text=$isi&source=&data='</script>";
}