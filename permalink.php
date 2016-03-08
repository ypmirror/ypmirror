<!--
<?php
$titles = array(

);

include("header.php");

if (isset($_GET['link']) && isset($titles[$_GET['link']])) echo '
            <h3 style="text-align: center"> '.$titles[$_GET['link']].' </h3><br />';

if (isset($_GET['link']) && preg_match("#^[a-z]+/[0-9a-z]+$#", $_GET['link'])) {
    if (file_exists($_GET['link'].'.html')) {
        echo '
            <div id="links">
';
        include($_GET['link'].'.html');
        echo '
            </div>';
    }
}
?>
-->

<!--#include file="header.php" -->
<h3 style="text-align: center">SSI for permalinks is a bit tricky. Hopefully everything works okay for this, but there are no guarantees.</h3>
<br>
<h3 style="text-align: center">
<!--#if expr="$QUERY_STRING = /link=([a-zA-Z0-9\/]+)/" -->
<!--#set var="link" value="$1" -->
<!--#else -->
<!--#set var="link" value="permaerror" -->
<!--#endif -->

<!--#if expr="$link = episodes/1a1" -->iTunes AU Season 1 (1080p)
<!--#elif expr="$link = episodes/1a2" -->iTunes AU Season 2 (1080p)
<!--#elif expr="$link = episodes/7a1" -->iTunes AU Season 1 (720p)
<!--#elif expr="$link = episodes/7a2" -->iTunes AU Season 2 (720p)

<!--#elif expr="$link = episodes/1z1" -->Color Corrected by ZR Season 1 (1080p)
<!--#elif expr="$link = episodes/1z2" -->Color Corrected by ZR Season 2 (1080p)
<!--#elif expr="$link = episodes/1z3" -->Color Corrected by ZR Season 3 (1080p)
<!--#elif expr="$link = episodes/1z4" -->Color Corrected by ZR Season 4 (1080p)
<!--#elif expr="$link = episodes/1z5" -->Color Corrected by ZR Season 5 (1080p)
<!--#elif expr="$link = episodes/7z1" -->Color Corrected by ZR Season 1 (720p)
<!--#elif expr="$link = episodes/7z2" -->Color Corrected by ZR Season 2 (720p)
<!--#elif expr="$link = episodes/7z3" -->Color Corrected by ZR Season 3 (720p)
<!--#elif expr="$link = episodes/7z4" -->Color Corrected by ZR Season 4 (720p)
<!--#elif expr="$link = episodes/7z5" -->Color Corrected by ZR Season 5 (720p)

<!--#elif expr="$link = episodes/1i1" -->iTunes US Season 1 (1080p)
<!--#elif expr="$link = episodes/1i2" -->iTunes US Season 2 (1080p)
<!--#elif expr="$link = episodes/1i3" -->iTunes US Season 3 (1080p)
<!--#elif expr="$link = episodes/1i4" -->iTunes US Season 4 (1080p)
<!--#elif expr="$link = episodes/1i5" -->iTunes US Season 5 (1080p)
<!--#elif expr="$link = episodes/7i1" -->iTunes US Season 1 (720p)
<!--#elif expr="$link = episodes/7i2" -->iTunes US Season 2 (720p)
<!--#elif expr="$link = episodes/7i3" -->iTunes US Season 3 (720p)
<!--#elif expr="$link = episodes/7i4" -->iTunes US Season 4 (720p)
<!--#elif expr="$link = episodes/7i5" -->iTunes US Season 5 (720p)

<!--#elif expr="$link = episodes/1t1" -->TVRip by MENTOS Season 1 (1080p)
<!--#elif expr="$link = episodes/1t2" -->TVRip by Spazz Season 2 (1080p)
<!--#elif expr="$link = episodes/1t3" -->TVRip by Spazz Season 3 (1080p)
<!--#elif expr="$link = episodes/1t4" -->TVRip by Spazz Season 4 (1080p)
<!--#elif expr="$link = episodes/1t5" -->TVRip by Spazz Season 5 (1080p)

<!--#elif expr="$link = episodes/7l1" -->Low quality encode, Season 1 (720p)
<!--#elif expr="$link = episodes/7l2" -->Low quality encode, Season 2 (720p)
<!--#elif expr="$link = episodes/7l3" -->Low quality encode, Season 3 (720p)
<!--#elif expr="$link = episodes/7l4" -->Low quality encode, Season 4 (720p)
<!--#elif expr="$link = episodes/7l5" -->Low quality encode, Season 5 (720p)
<!--#elif expr="$link = episodes/7lz1" -->Low quality encode, color corrected, Season 1 (720p)
<!--#elif expr="$link = episodes/7lz2" -->Low quality encode, color corrected, Season 2 (720p)
<!--#elif expr="$link = episodes/7lz3" -->Low quality encode, color corrected, Season 3 (720p)
<!--#elif expr="$link = episodes/7lz4" -->Low quality encode, color corrected, Season 4 (720p)
<!--#elif expr="$link = episodes/7lz5" -->Low quality encode, color corrected, Season 5 (720p)

<!--#elif expr="$link = episodes/1s1" -->TVRip by Scootaloo Season 1 (1080p)
<!--#elif expr="$link = episodes/1s2" -->TVRip by Scootaloo Season 2 (1080p)
<!--#elif expr="$link = episodes/1s3" -->TVRip by Scootaloo Season 3 (1080p)

<!--#elif expr="$link = prevgen/g1d1" -->G1 - My Little Pony and Friends (Original)
<!--#elif expr="$link = prevgen/g1d2" -->G1 - My Little Pony Tales (Original)
<!--#elif expr="$link = prevgen/g3d1" -->G3 - My Little Pony (Original)
<!--#elif expr="$link = prevgen/g1z1" -->G1 - My Little Pony and Friends (Color Corrected)
<!--#elif expr="$link = prevgen/g3z1" -->G3 - My Little Pony (Color Corrected)

<!--#elif expr="$link = books/comic" -->Comics (Main series)
<!--#elif expr="$link = books/mscomic" -->Comics (Micro series)
<!--#elif expr="$link = books/ffcomic" -->Comics (Friends Forever series)
<!--#elif expr="$link = books/othercomic" -->Comics (Others)
<!--#elif expr="$link = books/books" -->Books (Everything that is NOT a comic !)

<!--#elif expr="$link = eqg/eqg1" -->Equestria Girls (All versions)
<!--#elif expr="$link = eqg/eqg2720" -->Equestria Girls 2: Rainbow Rocks (720p)
<!--#elif expr="$link = eqg/eqg21080" -->Equestria Girls 2: Rainbow Rocks (1080p)
<!--#elif expr="$link = eqg/eqg2lq" -->Equestria Girls 2: Rainbow Rocks (720P LQ)
<!--#elif expr="$link = eqg/eqg31080" -->Equestria Girls 3: Friendship Games (1080p)
<!--#elif expr="$link = eqg/eqg3720" -->Equestria Girls 3: Friendship Games (720p)

<!--#elif expr="$link = howto/tor" -->How to use the Tor Mirror

<!--#elif expr="$link = ypsubs/ypsub1" -->GrayJeager subs for MLP FiM Season 1
<!--#elif expr="$link = ypsubs/ypsub2" -->GrayJeager subs for MLP FiM Season 2
<!--#elif expr="$link = ypsubs/ypsub3" -->GrayJeager subs for MLP FiM Season 3
<!--#elif expr="$link = ypsubs/ypsubeqg" -->GrayJeager subs for MLP Equestria Girls
<!--#elif expr="$link = ypsubs/ypsub4" -->YP Subtitles for MLP FiM Season 4
<!--#elif expr="$link = ypsubs/ypsub5" -->YP Subtitles for MLP FiM Season 5
<!--#elif expr="$link = ypsubs/ypsubeqg2" -->Subtitles for Equestria Girls Rainbow Rocks.
<!--#else -->Error - No title<!--#endif -->
</h3>
<br>
<!--#include file="$link.html" -->
