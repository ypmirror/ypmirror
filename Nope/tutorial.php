<!--#include file="header.php" -->
            <script language="JavaScript">
                /*
                 * Loads the pony page according to the lists, prints NOT FOUND if not found based on @pageExists
                 */
                function getHowto() {
                    // User selection
                    var Download = document.howtogetter.Download.value;

                    // Page url
                    var url = 'howto/' + Download + '.html';

                    // Divs
                    var howto = document.getElementById('links');

                    howto.innerHTML = '<p>Please choose a tutorial :</p>';
                    load(url, function (xhr) {
                        // Put content of external page into div
                        howto.innerHTML = xhr.responseText;
                    });
                }
            </script>
            <div style="margin: auto; text-align: center;">
                <form name="howtogetter" action="" method="GET">
                    <table>
                        <tr>
                            <td> I want to read: </td>
                            <td>
                                <select size="2" name="Download">
                                    <option value="tor" selected>How to use the Tor Mirror</option>
                                </select>
                            </td>
                            <td>
                                <input type="button" class="poni" value="Read!" onClick="javascript:getHowto();">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="links" style="text-align: left">
                <p>Please choose a tutorial :</p>
            </div>
            <div id="noscript" style="text-align: center">
                <p style="font-weight: bold;font-size: 130%;">
                    It appears you do not have Javascript support. The above chooser will not work without javascript.<br />
                    Here is a fallback :
                </p>
                <table border="1"  style="border-collapse: collapse;" cellpadding="5">
                    <tr>
                        <td><a href="permalink.php?link=howto/tor">tor</a></td>
                        <td>How to use the Tor Mirror</td>
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
