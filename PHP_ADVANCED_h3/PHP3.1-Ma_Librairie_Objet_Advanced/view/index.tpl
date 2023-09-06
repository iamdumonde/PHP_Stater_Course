<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
    <title>##titre##</title>
  </head>
  <body>
    <form action="##action##" method="post">
      <fieldset>
        <legend>##legend##</legend>
		##messageerreur##
       <p>
          <label for="login">##login##</label> 
          <input type="text" name="login" id="login" value="" />
        </p>
        <p>
          <label for="password">##pwd##</label> 
          <input type="password" name="password" id="password" value="" /> <br />
          <input type="submit" name="submit" value="##login##" />
        </p>
      </fieldset>
    </form>
  </body>
</html>