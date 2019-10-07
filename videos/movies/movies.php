<!--#include file="/resources/header.php" -->
            <script language="JavaScript">
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
                    xhr.open('GET', url, true);
                    xhr.send('');
                }
                /*
                 * Loads the pony page according to the lists, prints NOT FOUND if not found based on @pageExists
                 */
                function getPonies() {
                    // User selection
                    var Download = document.ponygetter.Download.value;

                    // Page url
                    var url = '/videos/movies/tables/' + Download + '.html';

                    // Divs
                    var pony = document.getElementById('links');
                    var disclaimer = document.getElementById('disclaimer');

                    pony.innerHTML = '<p>What do you want to download?</p>';
                    load(url, function (xhr) {
                        // Put content of external page into div
                        pony.innerHTML = xhr.responseText;

                        disclaimer.style.display = 'block';
                    });
                }
            </script>
            <div style="margin: auto; text-align: center;">
                <form name="ponygetter" action="" method="GET">
                    <table>
                        <tr>
                            <td> I want to download: </td>
                            <td>
                                <select size="6" name="Download">
                                <option value="moviesit">My Little Pony, The Movie (iTunes versions)</option>
                                <option value="movieszr">My Little Pony, The Movie (CC By ZR)</option>
                                </select>
                            </td>
                            <td>
                                <input type="button" class=poni value="Get Ponies!" onClick="javascript:getPonies();">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="disclaimer">
                <p>
                    Direct links are hosted by  <a href="https://yp.coco-pommel.org/">Coco Pommel</a>, thank to them !
                    If you have trouble to start direct download with the direct link, right click on the link and click on
                    &quot;Save link as...&quot; in the list.
                </p>
            </div>
            <div id="links">
                <p>PLACEHOLDER DOWNLOAD NOT AVAILABLE YET What do you want to download?</p>
            </div>
            <div id="noscript" style="text-align: center">
                <p style="font-weight: bold;font-size: 130%;">
                    It appears you do not have Javascript support. The above chooser will not work without javascript.<br />
                    Here is a fallback :
                </p>
                <table border="1"  style="border-collapse: collapse;" cellpadding="5">
                    <tr>
                        <td> <a href="/permalink.php?link=videos/movies/tables/moviesit">moviesit</a> </td>
                        <td> My Little Pony, The Movie (iTunes versions) </td>
                    </tr>
                    <tr>
                        <td> <a href="/permalink.php?link=videos/movies/tables/movieszr">movieszr</a> </td>
                        <td> My Little Pony, The Movie (CC By ZR) </td>
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
