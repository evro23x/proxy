<html> 
     <head> 
          <title> 
               Пример 1 
          </title>
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.5/css/jquery.dataTables.css">
		<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.5/js/jquery.dataTables.js"></script>
     </head> 
     <body> 
		<table id="table_id" class="display">
			<thead>
				<tr>
				  <th>Column 1</th>
				  <th>Column 2</th>
				  <th>Column 3</th>
				  <th>Column 4</th>
				  <th>Column 5</th>
				  <th>Column 6</th>
				</tr>
			</thead>
			<tbody>
			  <tr>
				  <td>Row 1 Data 1</td>
				  <td>Row 1 Data 2</td>
				  <td>Row 1 Data 3</td>
				  <td>Row 1 Data 4</td>
				  <td>Row 1 Data 5</td>
				  <td>Row 1 Data 6</td>
			  </tr>
			  <tr>
				  <td>Row 2 Data 1</td>
				  <td>Row 2 Data 2</td>
				  <td>Row 2 Data 3</td>
				  <td>Row 2 Data 4</td>
				  <td>Row 2 Data 5</td>
				  <td>Row 2 Data 6</td>
			  </tr>
			</tbody>
		</table>
		<script>
			$(document).ready( function () {
				$('#table_id').DataTable();
			} );
		</script>
     </body> 
</html>
