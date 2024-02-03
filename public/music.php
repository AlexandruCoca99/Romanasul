<?php $page="music";?>
<?php include 'header.php'; ?>

<?php 

echo('<center>
<object type="application/x-shockwave-flash" border="1" width="1024" height="155"
data="music/xspf_player.swf?playlist_url=playlist.xml&blend=2&bg_color=red&blend=1">
<param name="movie" 
value="music/xspf_player.swf?playlist_url=playlist.xml&blend=2&bg_color=red&blend=1" />
</object>
</center>');

?>