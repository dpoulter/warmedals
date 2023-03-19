<body>
<form action="search.php" method="get">
<h3>Search Results</h3>
<div>
<table class="table" id="tbl">
     <tr>
		<th>URL</th>
        <th>Description</th>
     </tr>

<?php foreach ($results as $result): ?>
    <tr>
    	<td><a href="<?= $result["url"] ?>" target="_blank" ><?= $result["url"] ?></a></td>
        <td><?= $result["description"] ?></td>
   </tr>
<?php endforeach ?>
</table>
</div>

<button id="btnSearch" type="submit" name="btnSearch" class="btn btn-outline-primary">Search Again</button>
</form>
</body>


		
      