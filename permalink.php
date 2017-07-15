<!--
<?php
$titles = array(

);

include("/resources/header.php");

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

<!--#include file="/resources/header.php" -->
<h3 style="text-align: center">SSI for permalinks is a bit tricky. Hopefully everything works okay for this, but there are no guarantees.</h3>
<br />
<h3 style="text-align: center">
<!--#if expr="$QUERY_STRING = /link=([a-zA-Z0-9\/]+)/" -->
<!--#set var="link" value="$1" -->
<!--#else -->
<!--#set var="link" value="/resources/permaerror" -->
<!--#endif -->

<!--#if expr="$link = videos/tables/1a1" -->iTunes AU Season 1 (1080p)
<!--#elif expr="$link = videos/tables/1a2" -->iTunes AU Season 2 (1080p)
<!--#elif expr="$link = videos/tables/7a1" -->iTunes AU Season 1 (720p)
<!--#elif expr="$link = videos/tables/7a2" -->iTunes AU Season 2 (720p)

<!--#elif expr="$link = videos/tables/1z1" -->Color Corrected by ZR Season 1 (1080p)
<!--#elif expr="$link = videos/tables/1z2" -->Color Corrected by ZR Season 2 (1080p)
<!--#elif expr="$link = videos/tables/1z3" -->Color Corrected by ZR Season 3 (1080p)
<!--#elif expr="$link = videos/tables/1z4" -->Color Corrected by ZR Season 4 (1080p)
<!--#elif expr="$link = videos/tables/1z5" -->Color Corrected by ZR Season 5 (1080p)
<!--#elif expr="$link = videos/tables/1z6" -->Color Corrected by ZR Season 6 (1080p)
<!--#elif expr="$link = videos/tables/1z7" -->Color Corrected by ZR Season 7 (1080p)
<!--#elif expr="$link = videos/tables/7z1" -->Color Corrected by ZR Season 1 (720p)
<!--#elif expr="$link = videos/tables/7z2" -->Color Corrected by ZR Season 2 (720p)
<!--#elif expr="$link = videos/tables/7z3" -->Color Corrected by ZR Season 3 (720p)
<!--#elif expr="$link = videos/tables/7z4" -->Color Corrected by ZR Season 4 (720p)
<!--#elif expr="$link = videos/tables/7z5" -->Color Corrected by ZR Season 5 (720p)
<!--#elif expr="$link = videos/tables/7z6" -->Color Corrected by ZR Season 6 (720p)
<!--#elif expr="$link = videos/tables/7z7" -->Color Corrected by ZR Season 7 (720p)


<!--#elif expr="$link = videos/tables/1i1" -->iTunes US Season 1 (1080p)
<!--#elif expr="$link = videos/tables/1i2" -->iTunes US Season 2 (1080p)
<!--#elif expr="$link = videos/tables/1i3" -->iTunes US Season 3 (1080p)
<!--#elif expr="$link = videos/tables/1i4" -->iTunes US Season 4 (1080p)
<!--#elif expr="$link = videos/tables/1i5" -->iTunes US Season 5 (1080p)
<!--#elif expr="$link = videos/tables/1i6" -->iTunes US Season 6 (1080p)
<!--#elif expr="$link = videos/tables/1i7" -->iTunes US Season 7 (1080p)
<!--#elif expr="$link = videos/tables/7i1" -->iTunes US Season 1 (720p)
<!--#elif expr="$link = videos/tables/7i2" -->iTunes US Season 2 (720p)
<!--#elif expr="$link = videos/tables/7i3" -->iTunes US Season 3 (720p)
<!--#elif expr="$link = videos/tables/7i4" -->iTunes US Season 4 (720p)
<!--#elif expr="$link = videos/tables/7i5" -->iTunes US Season 5 (720p)
<!--#elif expr="$link = videos/tables/7i6" -->iTunes US Season 6 (720p)
<!--#elif expr="$link = videos/tables/7i7" -->iTunes US Season 7 (720p)


<!--#elif expr="$link = videos/tables/1sc1" -->Scootaloo Definitive (x265/HEVC) Season 1 (1080p)
<!--#elif expr="$link = videos/tables/1sc2" -->Scootaloo Definitive (x265/HEVC) Season 1 (1080p)
<!--#elif expr="$link = videos/tables/1sc3" -->Scootaloo Definitive (x265/HEVC) Season 3 (1080p)
<!--#elif expr="$link = videos/tables/1sc4" -->Scootaloo Definitive (x265/HEVC) Season 4 (1080p)
<!--#elif expr="$link = videos/tables/1sc5" -->Scootaloo Definitive (x265/HEVC) Season 5 (1080p)
<!--#elif expr="$link = videos/tables/1sc6" -->Scootaloo Definitive (x265/HEVC) Season 6 (1080p)
<!--#elif expr="$link = videos/tables/1sc7" -->Scootaloo Definitive (x265/HEVC) Season 7 (1080p)


<!--#elif expr="$link = videos/tables/1s1" -->Scootaloo Remastered (x264/H264) Season 1 (1080p)
<!--#elif expr="$link = videos/tables/1s2" -->Scootaloo Remastered (x264/H264) Season 2 (1080p)
<!--#elif expr="$link = videos/tables/1s3" -->Scootaloo Remastered (x264/H264) Season 3 (1080p)
<!--#elif expr="$link = videos/tables/1s4" -->Scootaloo Remastered (x264/H264) Season 4 (1080p)
<!--#elif expr="$link = videos/tables/1s5" -->Scootaloo Remastered (x264/H264) Season 5 (1080p)
<!--#elif expr="$link = videos/tables/1s6" -->Scootaloo Remastered (x264/H264) Season 6 (1080p)
<!--#elif expr="$link = videos/tables/1s7" -->Scootaloo Remastered (x264/H264) Season 7 (1080p)


<!--#elif expr="$link = videos/tables/1t1" -->TVRip by MENTOS Season 1 (1080p)
<!--#elif expr="$link = videos/tables/1t2" -->TVRip by Spazz Season 2 (1080p)
<!--#elif expr="$link = videos/tables/1t3" -->TVRip by Spazz Season 3 (1080p)
<!--#elif expr="$link = videos/tables/1t4" -->TVRip by Spazz Season 4 (1080p)
<!--#elif expr="$link = videos/tables/1t5" -->TVRip by Spazz Season 5 (1080p)
<!--#elif expr="$link = videos/tables/1t6" -->TVRip by Spazz Season 6 (1080p)

<!--#elif expr="$link = videos/tables/7l1" -->Low quality encode, Season 1 (720p)
<!--#elif expr="$link = videos/tables/7l2" -->Low quality encode, Season 2 (720p)
<!--#elif expr="$link = videos/tables/7l3" -->Low quality encode, Season 3 (720p)
<!--#elif expr="$link = videos/tables/7l4" -->Low quality encode, Season 4 (720p)
<!--#elif expr="$link = videos/tables/7l5" -->Low quality encode, Season 5 (720p)
<!--#elif expr="$link = videos/tables/7l6" -->Low quality encode, Season 6 (720p)
<!--#elif expr="$link = videos/tables/7l7" -->Low quality encode, Season 7 (720p)

<!--#elif expr="$link = videos/tables/7lz1" -->Low quality encode, color corrected, Season 1 (720p)
<!--#elif expr="$link = videos/tables/7lz2" -->Low quality encode, color corrected, Season 2 (720p)
<!--#elif expr="$link = videos/tables/7lz3" -->Low quality encode, color corrected, Season 3 (720p)
<!--#elif expr="$link = videos/tables/7lz4" -->Low quality encode, color corrected, Season 4 (720p)
<!--#elif expr="$link = videos/tables/7lz5" -->Low quality encode, color corrected, Season 5 (720p)
<!--#elif expr="$link = videos/tables/7lz6" -->Low quality encode, color corrected, Season 6 (720p)
<!--#elif expr="$link = videos/tables/7lz7" -->Low quality encode, color corrected, Season 7 (720p)


<!--#elif expr="$link = videos/tables/1stv1" -->TVRip by Scootaloo Season 1 (1080p)
<!--#elif expr="$link = videos/tables/1stv2" -->TVRip by Scootaloo Season 2 (1080p)
<!--#elif expr="$link = videos/tables/1stv3" -->TVRip by Scootaloo Season 3 (1080p)

<!--#elif expr="$link = OlderGen/tables/g1d1" -->G1 - My Little Pony and Friends (Original)
<!--#elif expr="$link = OlderGen/tables/g1d2" -->G1 - My Little Pony Tales (Original)
<!--#elif expr="$link = OlderGen/tables/g3d1" -->G3 - My Little Pony (Original)
<!--#elif expr="$link = OlderGen/tables/g1z1" -->G1 - My Little Pony and Friends (Color Corrected)
<!--#elif expr="$link = OlderGen/tables/g3z1" -->G3 - My Little Pony (Color Corrected)

<!--#elif expr="$link = books/tables/comic" -->Comics (Main series)
<!--#elif expr="$link = books/tables/mscomic" -->Comics (Micro series)
<!--#elif expr="$link = books/tables/ffcomic" -->Comics (Friends Forever series)
<!--#elif expr="$link = books/tables/othercomic" -->Comics (Others)
<!--#elif expr="$link = books/tables/books" -->Books (Everything that is NOT a comic !)

<!--#elif expr="$link = Videos/eqg/tables/eqg1" -->Equestria Girls (All versions)
<!--#elif expr="$link = Videos/eqg/tables/eqg2720" -->Equestria Girls 2: Rainbow Rocks (720p)
<!--#elif expr="$link = Videos/eqg/tables/eqg21080" -->Equestria Girls 2: Rainbow Rocks (1080p)
<!--#elif expr="$link = Videos/eqg/tables/eqg2lq" -->Equestria Girls 2: Rainbow Rocks (720P LQ)
<!--#elif expr="$link = Videos/eqg/tables/eqg31080" -->Equestria Girls 3: Friendship Games (1080p)
<!--#elif expr="$link = Videos/eqg/tables/eqg3720" -->Equestria Girls 3: Friendship Games (720p)
<!--#elif expr="$link = Videos/eqg/tables/eqg41080" -->Equestria Girls 4: Legend of Equestria (1080p)

<!--#elif expr="$link = Misc/tuto/tor" -->How to use the Tor Mirror

<!--#elif expr="$link = Subtitles/tables/ypsub1" -->GrayJeager subs for MLP FiM Season 1
<!--#elif expr="$link = Subtitles/tables/ypsub2" -->GrayJeager subs for MLP FiM Season 2
<!--#elif expr="$link = Subtitles/tables/ypsub3" -->GrayJeager subs for MLP FiM Season 3
<!--#elif expr="$link = Subtitles/tables/ypsubeqg" -->GrayJeager subs for MLP Equestria Girls
<!--#elif expr="$link = Subtitles/tables/ypsub4" -->YP Subtitles for MLP FiM Season 4
<!--#elif expr="$link = Subtitles/tables/ypsub5" -->YP Subtitles for MLP FiM Season 5
<!--#elif expr="$link = Subtitles/tables/ypsubeqg2" -->Subtitles for Equestria Girls Rainbow Rocks.
<!--#elif expr="$link = Subtitles/tables/ypsub6" -->YP Subtitles for MLP FiM Season 6
<!--#elif expr="$link = Subtitles/tables/ypsub7" -->YP Subtitles for MLP FiM Season 7

<!--#else -->Error - No title<!--#endif -->
</h3>
<br />
<!--#include file="$link.html" -->
