<?
  include_once dirname(__FILE__) . "/config/variables.php";
  include_once dirname(__FILE__) . "/config/authpostmaster.php";

  $query = "SELECT * FROM users WHERE localpart='" .$_GET[localpart]. "' AND domain_id='" . $_COOKIE[vexim][2] . "'";
  $result = $db->query($query);
  $row = $result->fetchRow();
?>
<html>
  <head>
    <title>Virtual Exim: Manage Users</title>
    <link rel="stylesheet" href="style.css" type="text/css">
  </head>
  <body onLoad="document.failchange.username.focus()">
    <? include dirname(__FILE__) . "/config/header.php"; ?>
    <div id="menu">
      <a href="adminfail.php">Manage Fails</a><br>
      <a href="adminfailadd.php">Add Fail</a><br>
      <a href="admin.php">Main Menu</a><br>
      <br><a href="logout.php">Logout</a><br>
    </div>
    <div="Forms">
      <form name="failchange" method="post" action="adminfailchangesubmit.php">
        <table align="center">
          <tr><td>Fail address:</td>
	      <td><input name="localpart" type="text" value="<? print $row[localpart]; ?>" class="textfield">@<? print $_COOKIE[vexim][1]; ?></td>
	      <td><input name="origlocalpart" type="hidden" value="<? print $row[localpart]; ?>" class="textfield"></td></tr>
	  <tr><td></td><td><input name="submit" type="submit" value="Submit"></td></tr>
        </table>
      </form>
    </div>
  </body>
</html>
<!-- Layout and CSS tricks obtained from http://www.bluerobot.com/web/layouts/ -->