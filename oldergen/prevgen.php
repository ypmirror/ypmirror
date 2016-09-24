<!--#include file="/resources/header.php" -->
            <script language="JavaScript">
                /*
                 * Returns false when a page selected from season.source.resolution does not exist
                 * @called by dynamicList and getPonies
                 */
                function pageExists(season, source) {
                    if (season == '12' && source == 'z') return false; // No Color Corrected for G2
                    return true;
                }
                /*
                 * Puts a gray-italic style on options that do not exist, but does not prevent the use from selecting them
                 */
                function dynamicList() {
                    var DownloadSeason = document.ponygetter.DownloadSeason.value;
                    var DownloadSource = document.ponygetter.DownloadSource.value;

                    // Re-enable
                    var seasons = document.ponygetter.DownloadSeason;
                    for (var i = 0; i < seasons.length; i++)  {
                        seasons[i].className = (pageExists(seasons[i].value, DownloadSource))?'':'disabled';
                    }
                    var sources = document.ponygetter.DownloadSource;
                    for (var i = 0; i < sources.length; i++)  {
                        sources[i].className = (pageExists(DownloadSeason, sources[i].value))?'':'disabled';
                    }
                }
                /*
                 * Loads the pony page according to the lists, prints NOT FOUND if not found based on @pageExists
                 */
                function getPonies() {
                    // User selection
                    var DownloadSeason = document.ponygetter.DownloadSeason.value;
                    var DownloadSource = document.ponygetter.DownloadSource.value;

                    // Page url
                    var url = '/oldergen/tables/g' + DownloadSeason.charAt(0) + DownloadSource + DownloadSeason.charAt(1) + '.html';

                    // Divs
                    var ponies = document.getElementById('links');
                    var disclaimer = document.getElementById('disclaimer');


                    // If page does not exist, display 'NOT FOUND'
                    if (!pageExists(DownloadSeason, DownloadSource)) {
                        ponies.innerHTML = "<br /><br /> NOT FOUND <br />";
                        disclaimer.style.display = 'none';
                    } else {
                        // If page exists, empty receptacle, and load external page via XMLHttpRequest
                        ponies.innerHTML = '';
                        load(url, function(xhr) {
                            // Put content of external page into div
                            ponies.innerHTML = xhr.responseText;
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
                            <select size="3" name="DownloadSeason" onchange="javascript:dynamicList();">
                                <option value="11" selected>My Little Pony and Friends (G1)</option>
                                <option value="12">My Little Pony Tales (G1)</option>
                                <option value="31">My Little Pony (G3)</option>
                            </select>
                        </td>
                        <td>from:</td>
                        <td>
                            <select size="2" name="DownloadSource" onchange="javascript:dynamicList();">
                                <option value="d" selected>Original</option>
                                <option value="z">Color Corrected</option>
                            </select>
                        </td>
                        <td>
                            <input type="button" class="poni" value="Get Ponies!" onClick="javascript:getPonies();">
                        </td>
                    </tr>
                </table>
                </form>
                <script language="JavaScript">dynamicList();</script>
            </div>
            <div id="disclaimer">
                <p style="font-weight: bold">
                    Direct links are hosted by <a href="https://yp.coco-pommel.org/">Coco Pommel</a>, thank to them ! , If you have trouble
                    to start direct download with the direct link, right click on the link and click on &quot;Save link as...&quot; in the list.
                </p>
            </div>
            <div id="links">
                <p style="font-weight: bold">What are you looking for ?</p>
            </div>
            <div id="noscript" style="text-align: center">
                <p style="font-weight: bold;font-size: 130%;">
                    It appears you do not have Javascript support. The above chooser will not work without javascript.<br />
                    Here is a fallback :
                </p>
                <table border="1"  style="border-collapse: collapse;" cellpadding="5">
                    <tr> <th colspan="2"> Original </th> </tr>
                    <tr>
                        <td> <a href="/permalink.php?link=OlderGen/tables/g1d1">g1d1</a> </td>
                        <td> My Little Pony and Friends (G1) </td>
                    </tr>
                    <tr>
                        <td> <a href="/permalink.php?link=OlderGen/tables/g1d2">g1d2</a> </td>
                        <td> My Little Pony Tales (G1) </td>
                    </tr>
                    <tr>
                        <td> <a href="/permalink.php?link=OlderGen/tables/g3d1">g3d1</a> </td>
                        <td> My Little Pony (G3) </td>
                    </tr>

                    <tr> <th colspan="2"> Color Corrected </th> </tr>
                    <tr>
                        <td> <a href="/permalink.php?link=OlderGen/tables/g1z1">g1z1</a> </td>
                        <td> My Little Pony and Friends (G1) </td>
                    </tr>
                    <tr>
                        <td> <a href="/permalink.php?link=OlderGen/tables/g3z1">g3z1</a> </td>
                        <td> My Little Pony (G3) </td>
                    </tr>
                </table>
            </div>
            <script language="JavaScript">
                load('/resources/_noscript.html', function(xhr) {
                    document.getElementById('noscript').style.display = xhr.responseText;
                })
            </script>
        
    </body>
</html>
