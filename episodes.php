<!--#include file="header.php" -->
            <script language="JavaScript">
                /*
                 * Returns false when a page selected from season.source.resolution does not exist
                 * @called by dynamicList and getPonies
                 */
                function pageExists(season, source, resolution) {
                    if ((source == 't' || source == 's' || source == 'sc') && resolution == '7') return false; // No 720p for TVrip or Scoot
                    if (resolution == '1' && (source == 'l' || source == 'lz')) return false; // No 1080p for LQ
                    if (source == 'a' && ! (season == '1' || season == '2')) return false; // No iTunes AU for seasons >= 3
					if (source == 'sc' && ! (season == '5' || season == '6')) return false; // No Scoot HEVC for seasons <= 5 yet
                    if (source == 's' && ! (season == '1' || season == '2' || season == '3')) return false // Scootaloo rip up to season 3

                    return true;
                }
                /*
                 * Puts a gray-italic style on options that do not exist, but does not prevent the use from selecting them
                 */
                function dynamicList() {
                    var DownloadSeason = document.ponygetter.DownloadSeason.value;
                    var DownloadSource = document.ponygetter.DownloadSource.value;
                    var DownloadResolution = document.ponygetter.DownloadResolution.value;

                    // Re-enable
                    var seasons = document.ponygetter.DownloadSeason;
                    for (var i = 0; i < seasons.length; i++)  {
                        seasons[i].className = (pageExists(seasons[i].value, DownloadSource, DownloadResolution))?'':'disabled';
                    }
                    var resolutions = document.ponygetter.DownloadResolution;
                    for (var i = 0; i < resolutions.length; i++)  {
                        resolutions[i].className = (pageExists(DownloadSeason, DownloadSource, resolutions[i].value))?'':'disabled';
                    }
                    var sources = document.ponygetter.DownloadSource;
                    for (var i = 0; i < sources.length; i++)  {
                        sources[i].className = (pageExists(DownloadSeason, sources[i].value, DownloadResolution))?'':'disabled';
                    }
                }
                /*
                 * Loads the pony page according to the lists, prints NOT FOUND if not found based on @pageExists
                 */
                function getPonies() {
                    // User selection
                    var DownloadSeason = document.ponygetter.DownloadSeason.value;
                    var DownloadSource = document.ponygetter.DownloadSource.value;
                    var DownloadResolution = document.ponygetter.DownloadResolution.value;

                    // Page url
                    var url = 'episodes/' + DownloadResolution + DownloadSource + DownloadSeason + '.html';

                    // Divs
                    var ponies = document.getElementById('links');
                    var disclaimer = document.getElementById('disclaimer');
                    var archiveName = document.getElementById('archiveName');

                    // explicit...
                    var archiveNames = {
                        'i' : 'iTunes Raw',
                        'sc' : 'Scootaloo Corrected HEVC',
                        'a' : 'AUSTRALIAN iTunes Raw',
                        'z' : 'Color Corrected',
                        'tt' : 'MENTOS TVRip',
                        't' : 'Spazz TVRip',
                        'l'  : 'Low Quality encode',
                        'lz' : 'CC by ZR Low Quality encode',
                        's' : 'UNSUPPORTED Scootaloo Rip'
                    };

                    // If page does not exist, display 'NOT FOUND'
                    if (!pageExists(DownloadSeason, DownloadSource, DownloadResolution)) {
                        ponies.innerHTML = "<br /><br /> NOT FOUND <br />";
                        disclaimer.style.display = 'none';
                    } else {
                        // If page exists, empty receptacle, and load external page via XMLHttpRequest
                        ponies.innerHTML = '';
                        load(url, function(xhr) {
                            // Put content of external page into div
                            ponies.innerHTML = xhr.responseText;

                            // Add disclaimer with the right archive name, specific case of TVrip season 1 which has a different name than the other seasons
                            archiveName.innerHTML = 'SEASON ' + DownloadSeason + ' ' + ((DownloadSource == 't' && DownloadSeason == '1')?archiveNames['tt']:archiveNames[DownloadSource]);
                            disclaimer.style.display = 'block';
                        });
                    }
                }
            </script>
            <div style="margin: auto; text-align: center;">
                <form name="ponygetter" action="" method="GET"">
                    <table>
                        <tr>
                            <td> I want to download: </td>
                            <td>
                                <select size="7" name="DownloadSeason" onchange="javascript:dynamicList();">
                                    <option value="1">Season 1</option>
                                    <option value="2">Season 2</option>
                                    <option value="3">Season 3</option>
                                    <option value="4">Season 4</option>
                                    <option value="5">Season 5</option>
                                    <option value="6" selected>Season 6</option>
                                </select>
                            </td>
                            <td>from:</td>
                            <td>
                                <select size="8" name="DownloadSource" onchange="javascript:dynamicList();">
                                    <option value="i" selected>iTunes Raw US</option>
                                    <option value="sc">Scootaloo Corrected HEVC</option>
                                    <option value="a">iTunes Raw AU</option>
                                    <option value="z">Color Corrected by ZR</option>
                                    <option value="t">TVRips (Spazz or Mentos)</option>
                                    <option value="l">Low Quality</option>
                                    <option value="lz">Low Quality color corrected</option>
                                    <option value="s">UNSUPPORTED Scootaloo Rip</option>
                                </select>
                            </td>
                            <td>in:</td>
                            <td>
                                <select size="3" name="DownloadResolution" onchange="javascript:dynamicList();">
                                    <option value="7"> 720p </option>
                                    <option value="1" selected> 1080p </option>
                                </select>
                            </td>
                            <td>
                                <input type="button" class=poni value="Get Ponies!" onClick="javascript:getPonies();">
                            </td>
                        </tr>
                    </table>
                </form>
                <script language="JavaScript">dynamicList();</script>
            </div>
            <div id="disclaimer">
                <p>
                    Welcome to the <strong><span id="archiveName">[archiveName goes here]</span></strong> Archive! due to higher demand and limited bandwidth,
                    new episodes may take longer to download than older ones. If the download doesn't start once you've followed the link,
                    save the target file (usually by right-clicking and choosing  &quot;Save link as... &quot; from the context menu).
                    Thanks to <a href="https://yp.coco-pommel.org/">Coco Pommel</a> for hosting the files!<br />
                    <br />
                    <strong>
                        WARNING: You are not completely anonymous when using BitTorrent within the TOR network. Please visit the
                        <a href="https://blog.torproject.org/blog/bittorrent-over-tor-isnt-good-idea">TOR blog</a> for more information.
                    </strong>
                </p>
            </div>
            <div id="links">
                <br /><br />
                <p style="font-size: 130%">The pages for the Season 3 &amp; 4 iTunes Raw AU (Both 1080P and 720P) don't exist, those versions aren't gonna be uploaded,
                    as from the season 3, there is no benefit to use AU version over the US version !</p>
            </div>
            <div id="noscript" style="text-align: center">
                <p style="font-weight: bold;font-size: 130%;">
                    It appears you do not have Javascript support. The above chooser will not work without javascript.<br />
                    Here is a fallback :
                </p>
                <table border="1"  style="border-collapse: collapse;" cellpadding="5">
                    <tr> <th colspan="2"> iTunes AU Raw </th> </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1a1">1a1</a> </td>
                        <td> Season 1 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1a2">1a2</a> </td>
                        <td> Season 2 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7a1">7a1</a> </td>
                        <td> Season 1 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7a2">7a2</a> </td>
                        <td> Season 2 (720p) </td>
                    </tr>

                    <tr> <th colspan="2"> Color Corrected by ZR </th> </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1z1">1z1</a> </td>
                        <td> Season 1 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1z2">1z2</a> </td>
                        <td> Season 2 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1z3">1z3</a> </td>
                        <td> Season 3 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1z4">1z4</a> </td>
                        <td> Season 4 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1z5">1z5</a> </td>
                        <td> Season 5 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1z6">1z6</a> </td>
                        <td> Season 6 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7z1">7z1</a> </td>
                        <td> Season 1 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7z2">7z2</a> </td>
                        <td> Season 2 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7z3">7z3</a> </td>
                        <td> Season 3 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7z4">7z4</a> </td>
                        <td> Season 4 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7z5">7z5</a> </td>
                        <td> Season 5 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7z6">7z6</a> </td>
                        <td> Season 6 (720p) </td>
                    </tr>

                    <tr> <th colspan="2"> iTunes US Raw </th> </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1i1">1i1</a> </td>
                        <td> Season 1 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1i2">1i2</a> </td>
                        <td> Season 2 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1i3">1i3</a> </td>
                        <td> Season 3 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1i4">1i4</a> </td>
                        <td> Season 4 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1i5">1i5</a> </td>
                        <td> Season 5 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1i6">1i6</a> </td>
                        <td> Season 6 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7i1">7i1</a> </td>
                        <td> Season 1 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7i2">7i2</a> </td>
                        <td> Season 2 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7i3">7i3</a> </td>
                        <td> Season 3 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7i4">7i4</a> </td>
                        <td> Season 4 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7i5">7i5</a> </td>
                        <td> Season 5 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7i6">7i6</a> </td>
                        <td> Season 6 (720p) </td>
                    </tr>

                    <tr> <th colspan="2"> Scootaloo Corrected HEVC </th> </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1sc5">1sc5</a> </td>
                        <td> Season 5 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1sc6">1sc6</a> </td>
                        <td> Season 6 (1080p) </td>
                    </tr>

                    <tr> <th colspan="2"> TVRips by MENTOS/Spazz </th> </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1t1">1t1</a> </td>
                        <td> Season 1 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1t2">1t2</a> </td>
                        <td> Season 2 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1t3">1t3</a> </td>
                        <td> Season 3 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1t4">1t4</a> </td>
                        <td> Season 4 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1t5">1t5</a> </td>
                        <td> Season 5 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1t6">1t6</a> </td>
                        <td> Season 6 (1080p) </td>
                    </tr>

                    <tr> <th colspan="2"> Low Quality Encode </th> </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7l1">7l1</a> </td>
                        <td> Season 1 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7l2">7l2</a> </td>
                        <td> Season 2 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7l3">7l3</a> </td>
                        <td> Season 3 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7l4">7l4</a> </td>
                        <td> Season 4 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7l5">7l5</a> </td>
                        <td> Season 5 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7l6">7l6</a> </td>
                        <td> Season 6 (720p) </td>
                    </tr>

                    <tr> <th colspan="2"> Low Quality Encode, Color Corrected </th> </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7lz1">7lz1</a> </td>
                        <td> Season 1 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7lz2">7lz2</a> </td>
                        <td> Season 2 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7lz3">7lz3</a> </td>
                        <td> Season 3 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7lz4">7lz4</a> </td>
                        <td> Season 4 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7lz5">7lz5</a> </td>
                        <td> Season 5 (720p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/7lz6">7lz6</a> </td>
                        <td> Season 6 (720p) </td>
                    </tr>

                    <tr> <th colspan="2"> Scootaloo TVrip (Unsupported) </th> </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1s1">1s1</a> </td>
                        <td> Season 1 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1s2">1s2</a> </td>
                        <td> Season 2 (1080p) </td>
                    </tr>
                    <tr>
                        <td> <a href="permalink.php?link=episodes/1s3">1s3</a> </td>
                        <td> Season 3 (1080p) </td>
                    </tr>
                </table>
            </div>
            <script language="JavaScript">
                load('_noscript.html', function(xhr) {
                    document.getElementById('noscript').style.display = xhr.responseText;
                })
            </script>
        </div>
    </body>
</html>
