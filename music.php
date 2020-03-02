<?php
$dir = "./";
$files = scandir($dir);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Music Viewer</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link href="viewer.css" type="text/css" rel="stylesheet" />
</head>
<body>
<div id="header">
    <h1>190M Music Playlist Viewer</h1>
    <h2>Search Through Your Playlists and Music</h2>
</div>

<?php //$playlist = $_REQUEST["playlist"];?>
<div id="listarea">
    <ul id="musiclist">
        <?php $mp3Files = glob('*.mp3');
                foreach ($mp3Files as $mp3File){?>
            <li class="mp3item" ><a href="<?= $mp3File?>" > <?=$mp3File?></a></li><br>
                    <?php basename($mp3File);} ?>
        <?php $playlists = glob("*.txt");
                foreach ($playlists as $playlist) {?>
            <li class="playlistitem"><a href="<?= $playlist ?>"> <?= $playlist ?></a></li><br>
                    <?php basename($playlist);} ?>
    </ul>
</div>

</body>
</html>














