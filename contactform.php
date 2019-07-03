<html>
<head>
<link rel="stylesheet" type="text/css" href="css/contactform.css">
</head>
<body id="bmain">
<div id="main">
<form name="contactform" method="post" action="send_form_email.php">

<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name"><span id="mys">First Name <span id="rc">*</span></span></label>
 </td>
 <td valign="top">
  <input id="f_n" type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top"">
  <label for="last_name"><span id="mys">Last Name <span id="rc">*</span></span></label>
 </td>
 <td valign="top">
  <input id="l_n" type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email"><span id="mys">Email Address <span id="rc">*</span></span></label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone"><span id="mys">Telephone Number</span></label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments"><span id="mys">Comments <span id="rc">*</span></span></label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="32" rows="2"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">
 </td>
</tr>
</table>
</form>
</div>
</body>
</html>