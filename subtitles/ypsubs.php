<!--#include file="/resources/header.php" -->
            <script language="JavaScript">
                /*
                 * Loads the pony page according to the lists, prints NOT FOUND if not found based on @pageExists
                 */
                function getSubtitles() {
                    // User selection
                    var Download = document.subsgetter.Download.value;

                    // Page url
                    var url = '/subtitles/tables/' + Download + '.html';

                    // Divs
                    var subs = document.getElementById('links');
                    var disclaimer = document.getElementById('disclaimer');

                    subs.innerHTML = '<p>What do you want to see?</p>';
                    load(url, function (xhr) {
                        // Put content of external page into div
                        subs.innerHTML = xhr.responseText;

                        disclaimer.style.display = 'block';
                    });
                }
            </script>
            <div style="margin: auto; text-align: center;">
                <form name="subsgetter" action="" method="GET">
                    <table>
                        <tr>
                            <td> I want to download: </td>
                            <td>
                                <select size="9" name="Download">
									<option value="ypsub1"> MLP FiM Season 1</option>
                                    <option value="ypsub2"> MLP FiM Season 2</option>
                                    <option value="ypsub3"> MLP FiM Season 3</option>
                                    <option value="ypsubeqg"> Equestria Girls</option>
                                    <option value="ypsub4"> MLP FiM Season 4</option>
                                    <option value="ypsubeqg2"> Equestria Girls, Rainbow Rocks</option>
                                    <option value="ypsub5"> MLP FiM Season 5</option>
                                    <option value="ypsub6"> MLP FiM Season 6</option>
                                    <option value="ypsub7" selected> MLP FiM Season 7</option>

                                </select>
                            </td>
                            <td>
                                <input type="button" class=poni value="Get Subtitles!" onClick="javascript:getSubtitles();">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="disclaimer">
                <p>
                    Subtitles we're doing for our 1R/7R release, we mux them with those episodes.<br />
                    Transcript comes from official iTunes subtitles, timing has been corrected by us.
                </p>
                <p style="font-size: 130%">
                    WARNING : Those subtitles are made to be use with our iTunes (US) Raw release, It should also work with CC by ZR. <br />
                    However, we will provide NO support to use those subtitles on any other release than ponies provided here !
                </p>
                <p>
                    We only started at the Season 4, Previous included subtitles was provided by GrayJeager
                </p>
            </div>
            <div id="links">
                <p>What do you want to see?</p>
            </div>
            <div id="noscript" style="text-align: center">
                <p style="font-weight: bold;font-size: 130%;">
                    It appears you do not have Javascript support. The above chooser will not work without javascript.<br />
                    Here is a fallback :
                </p>
                <table border="1"  style="border-collapse: collapse;" cellpadding="5">
                    <tr>
                        <td><a href="/permalink.php?link=Subtitles/tables/ypsub1">ypsub1</a></td>
                        <td>GrayJeager subs for MLP FiM Season 1</td>
					</tr>
					<tr>
                        <td><a href="/permalink.php?link=Subtitles/tables/ypsub2">ypsub2</a></td>
                        <td>GrayJeager subs for MLP FiM Season 2</td>
					</tr>
					<tr>
					<td>
						<a href="/permalink.php?link=Subtitles/tables/ypsub3">ypsub3</a></td>
                        <td>GrayJeager subs for MLP FiM Season 3</td>
       				</tr>
					<tr>    
						<td><a href="/permalink.php?link=Subtitles/tables/ypsubeqg">ypsubeqg</a></td>
                        <td>GrayJeager subs for MLP Equestria Girls</td>
					</tr>
					<tr>                        
						<td><a href="/permalink.php?link=Subtitles/tables/ypsub4">ypsub4</a></td>
                        <td>YP Subtitles for MLP FiM Season 4</td>
					</tr>
					<tr>                        
						<td><a href="/permalink.php?link=Subtitles/tables/ypsubeqg2">ypsubeqg2</a></td>
                        <td>Subtitles for Equestria Girls Rainbow Rocks.</td>
                    </tr>
					<tr>                        
						<td><a href="/permalink.php?link=Subtitles/tables/ypsub5">ypsub5</a></td>
                        <td>YP Subtitles for MLP FiM Season 5</td>
					</tr>
										<tr>                        
						<td><a href="/permalink.php?link=Subtitles/tables/ypsub6">ypsub6</a></td>
                        <td>YP Subtitles for MLP FiM Season 6</td>
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
