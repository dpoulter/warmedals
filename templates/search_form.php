<!DOCTYPE html>
<html>
  <head>

  <style>
        body {
          background-image: url('https://upload.wikimedia.org/wikipedia/commons/8/8c/WW1_British_War_Medal.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          bbackground-size: cover;
        }
    </style>
  	<style type="text/css">
      ul{padding:2px;list-style:none;}
      label{float:left;}
    </style>
    <title>Medal Search</title>
  </head>
  <body>
    <h3>Medal Search</h3>
    <form action="search.php" method="post">
    <fieldset>
        <div class="form-group col-md-4">
        	<ul>
            
             <li><label>Search String</label>	<input  class="form-control" name="search_string" placeholder="Search String" type="text"/></input></li>
        	</ul>
            <button type="submit" class="btn btn-default">Search</button>
          
        </div>
    </fieldset>
    </form>
  </body>
 </html>
