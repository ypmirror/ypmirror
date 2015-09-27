<?php
$titles = array(
    'episodes/1a1' => 'iTunes AU Season 1 (1080p)',
    'episodes/1a2' => 'iTunes AU Season 2 (1080p)',
    'episodes/7a1' => 'iTunes AU Season 1 (720p)',
    'episodes/7a2' => 'iTunes AU Season 2 (720p)',

    'episodes/1z1' => 'Color Corrected by ZR Season 1 (1080p)',
    'episodes/1z2' => 'Color Corrected by ZR Season 2 (1080p)',
    'episodes/1z3' => 'Color Corrected by ZR Season 3 (1080p)',
    'episodes/1z4' => 'Color Corrected by ZR Season 4 (1080p)',
	'episodes/1z5' => 'Color Corrected by ZR Season 5 (1080p)',
    'episodes/7z1' => 'Color Corrected by ZR Season 1 (720p)',
    'episodes/7z2' => 'Color Corrected by ZR Season 2 (720p)',
    'episodes/7z3' => 'Color Corrected by ZR Season 3 (720p)',
    'episodes/7z4' => 'Color Corrected by ZR Season 4 (720p)',
	'episodes/7z5' => 'Color Corrected by ZR Season 5 (720p)',

    'episodes/1i1' => 'iTunes US Season 1 (1080p)',
    'episodes/1i2' => 'iTunes US Season 2 (1080p)',
    'episodes/1i3' => 'iTunes US Season 3 (1080p)',
    'episodes/1i4' => 'iTunes US Season 4 (1080p)',
	'episodes/1i5' => 'iTunes US Season 5 (1080p)',
    'episodes/7i1' => 'iTunes US Season 1 (720p)',
    'episodes/7i2' => 'iTunes US Season 2 (720p)',
    'episodes/7i3' => 'iTunes US Season 3 (720p)',
    'episodes/7i4' => 'iTunes US Season 4 (720p)',
	'episodes/7i5' => 'iTunes US Season 5 (720p)',

    'episodes/1t1' => 'TVRip by MENTOS Season 1 (1080p)',
    'episodes/1t2' => 'TVRip by Spazz Season 2 (1080p)',
    'episodes/1t3' => 'TVRip by Spazz Season 3 (1080p)',
    'episodes/1t4' => 'TVRip by Spazz Season 4 (1080p)',
	'episodes/1t5' => 'TVRip by Spazz Season 5 (1080p)',

    'episodes/7l1' => 'Low quality encode, Season 1 (720p)',
    'episodes/7l2' => 'Low quality encode, Season 2 (720p)',
    'episodes/7l3' => 'Low quality encode, Season 3 (720p)',
    'episodes/7l4' => 'Low quality encode, Season 4 (720p)',
	'episodes/7l5' => 'Low quality encode, Season 5 (720p)',
    'episodes/7lz1' => 'Low quality encode, color corrected, Season 1 (720p)',
    'episodes/7lz2' => 'Low quality encode, color corrected, Season 2 (720p)',
    'episodes/7lz3' => 'Low quality encode, color corrected, Season 3 (720p)',
    'episodes/7lz4' => 'Low quality encode, color corrected, Season 4 (720p)',
	'episodes/7lz5' => 'Low quality encode, color corrected, Season 5 (720p)',

    'episodes/1s1' => 'TVRip by Scootaloo Season 1 (1080p)',
    'episodes/1s2' => 'TVRip by Scootaloo Season 2 (1080p)',
    'episodes/1s3' => 'TVRip by Scootaloo Season 3 (1080p)',

    'prevgen/g1d1' => 'G1 - My Little Pony and Friends (Original)',
    'prevgen/g1d2' => 'G1 - My Little Pony Tales (Original)',
    'prevgen/g3d1' => 'G3 - My Little Pony (Original)',
    'prevgen/g1z1' => 'G1 - My Little Pony and Friends (Color Corrected)',
    'prevgen/g3z1' => 'G3 - My Little Pony (Color Corrected)',

    'books/comic' => 'Comics (Main series)',
    'books/mscomic' => 'Comics (Micro series)',
	'books/ffcomic' => 'Comics (Friends Forever series)',
    'books/othercomic' => 'Comics (Others)',
    'books/books' => 'Books (Everything that is NOT a comic !)',

    'eqg/eqg1' => 'Equestria Girls (All versions)',
    'eqg/eqg2720' => 'Equestria Girls 2: Rainbow Rocks (720p)',
    'eqg/eqg21080' => 'Equestria Girls 2: Rainbow Rocks (1080p)',
	'eqg/eqg2lq' => 'Equestria Girls 2: Rainbow Rocks (720P LQ)',
	'eqg/eqg31080' => 'Equestria Girls 3: Friendship Games (1080p)',

    'howto/tor' => 'How to use the Tor Mirror',

    'ypsubs/ypsub1' => 'GrayJeager subs for MLP FiM Season 1',
    'ypsubs/ypsub2' => 'GrayJeager subs for MLP FiM Season 2',
    'ypsubs/ypsub3' => 'GrayJeager subs for MLP FiM Season 3',
	'ypsubs/ypsubeqg' => 'GrayJeager subs for MLP Equestria Girls',
    'ypsubs/ypsub4' => 'YP Subtitles for MLP FiM Season 4',
    'ypsubs/ypsub5' => 'YP Subtitles for MLP FiM Season 5',
	'ypsubs/ypsubeqg2' => 'Subtitles for Equestria Girls Rainbow Rocks.',
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
