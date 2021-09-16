<?php

require('addContInner.php');

?>
<script>
</script>

<html>
    <head></head>
    <body>
        <form id="frmid" name="frmid" method="post" action="" enctype="multipart/form-data">
            <table>
                <tr>
                    <th>NAME</th>
                    <td><input type="text" name="vchName" id="vchName"></td>
                </tr>
                 <tr>
                    <th>CONTACT NUMBER</th>
                    <td><input type="text" name="vchPhn" id="vchPhn"></td>
                </tr>
                 <tr>
                    <th>EMAIL</th>
                    <td><input type="email" name="vchEmail" id="vchEmail"></td>
                </tr>
                 <tr>
                    <th>MESSAGE</th>
                    <td><input type="text" name="vchMsg" id="vchMsg"></td>
                </tr>
                <tr>
                <td><input type="submit" name="btnSubmit" id="btnSubmit" value="Submit"><td>
                <input type="submit" name="btnCan" id="btnCan" value="Cancel"></td></tr>
            </table>
        </form>
    </body>
</html>