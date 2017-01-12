<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="cache-control" content="no-cache" />
        <meta name="description"
              content="My Little Pony, Friendship is magic episodes download" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta name="keywords"
              content="my little pony friendship is magic, episodes, download, Torrent, Direct Download, iTunes, 1080p, 720p, raw, derpy, tvrip, yay ponies, yayponies" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Yay Ponies - Archive (Design from BronyAsia)</title>
        <link type="text/css" rel="stylesheet" href="/resources/style.css" />

        <script type="text/javascript">
            /*
             * Display/hides an element using a checkbox
             */
            function checkDisplay(checkboxId, divId) { //check ID, form ID
                var check = document.getElementById(checkboxId);
                var div = document.getElementById(divId);
                check.onclick = function(){
                    div.style.display = (this.checked) ? "block" : "none";
                };
                check.onclick();
            }
            /*
             * Opens popup
             */
            function popitup(url) {
                var newwindow = window.open(url,'name','height=475,width=430');
                if (window.focus) newwindow.focus();
                return false;
            }
            /*
             * Loads an external page with callback (aka AJAX)
             */
            function load(url, callback) {
                var xhr;
                function ensureReadiness() {
                    if(xhr.readyState < 4) return;
                    if(xhr.status !== 200) return;
                    // all is well
                    if(xhr.readyState === 4) callback(xhr);
                }

                if(typeof XMLHttpRequest !== 'undefined') xhr = new XMLHttpRequest();
                else {
                    var versions = ["MSXML2.XmlHttp.5.0", "MSXML2.XmlHttp.4.0", "MSXML2.XmlHttp.3.0", "MSXML2.XmlHttp.2.0", "Microsoft.XmlHttp"];
                    for(var i = 0, len = versions.length; i < len; i++) {
                        try {
                            xhr = new ActiveXObject(versions[i]);
                            break;
                        }
                        catch(e){}
                    } // end for
                }
                xhr.onreadystatechange = ensureReadiness;

                var unique = new Date();
                unique = unique.getTime();
                xhr.open('GET', url + '?_=' + unique, true);

                xhr.send('');
            }
        </script>
    </head>

    <body>
	<!--#include file="/resources/topnews.php" -->
        <div id="header"><img src="/resources/yay5yr.png" alt="YayPonies header" /></div>
        <div id="container">
            <p style="font-size: 80%; text-align: center">
                <a href="http://yayponies.eu/">YayPonies 5th anniversary (Hopefully temporary) by YayMuffins (Plz, FloppyChiptunes, come back!)</a>
            </p>
            <br />
            <br />
            <p style="font-size: 130%; text-align: center">
                <a href="/index.php">Index</a> |
                <a href="/misc/FAQ.php">FAQ</a> |
                <a href="https://ponychat.net/webchat/?autojoin=%23yayponies">Chat with US!</a> |
                <a href="https://twitter.com/#!/YayPonies_eu">Twitter</a> |
                <a href="/videos/episodes.php">Episodes</a> |
                <a href="/oldergen/prevgen.php">G1/G2/G3 Episodes</a> |
                <a href="/videos/dvd/DVD.php">DVDs/Blurays</a> |
                <a href="/books/book.php">Books/Comics</a>
                <br />
                <a href="/music/music.php">Pony Music</a> |
                <a href="/videos/eqg/eqg.php">Equestria Girls</a> |
                <a href="/yaysu/">YaySteven</a> |
                <a href="/yaywoy/">YayWander</a> |
				<a href="/yaystar/">YayStar</a> |
                <a href="/fan/fan.php">Fan Works</a> |
                <a href="/others/other.php">Others</a> | 
				<a href="/fan/broniesii.php">Bronies II</a>
                <br />
				<a href="/misc/tutorial.php">Tutorials</a> |
                <a href="/misc/rss.php">RSS</a> |
                <a href="/misc/othersubs.php">Multilanguage Subtitles</a> |
                <a href="/subtitles/ypsubs.php">YayPonies Subtitles</a> |
                <a href="/videos/japan/1jt.php">Japanese-dubbed Episodes</a>
            </p>
            <br />
            <br />
