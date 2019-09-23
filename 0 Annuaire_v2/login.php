<?php
require 'header.php';
require 'fonction.php';

?>
<article>
    <form name="input" action="#" method="post">
        <table>
            </tr>
                <td><label for="username">Login:</label></td>
                <td><input type="text" value="Saisir votre login" id="username" name="username" /></td>
            </tr>
            <tr>
                <td><label for="password">Mot de passe:</label></td>
                <td><input type="password"  id="password" name="password" /></td>
            </tr>
        </table>
        <br />
        <input type="submit" value="Validez" name="ok" />
    </form>
</article>
<?php require("footer.php"); ?>