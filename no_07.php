<?php
$con = mysqli_connect("localhost","root","","db_warehouse");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Answer Number 7 - Bootcamp Arkademy Batch 9K3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<?php
		$sql = "SELECT categories.id AS No, categories.name AS Category, products.name AS Name FROM categories LEFT JOIN products ON categories.id=products.category_id";
		$result = $con->query($sql);
		if ($result->num_rows == Null) {
			echo "Data: Null";
		}
	?>
	<div class="container-fluid">
  		<div class="row">
  			<main role="main" class="col-lg-6 mx-auto">
				<div class="table-responsive">
        			<table class="table table-striped table-sm">
          				<thead>
				            <tr>
				              <th>No</th>
				              <th>Category Name</th>
				              <th>Produk Name</th>
				            </tr>
          				</thead>
          				<tbody>
          					<?php
          						while ($row = $result->fetch_assoc()) {

          							echo '<tr><td>'.$row['No'].'</td>';
          							echo '<td>'.$row['Category'].'</td>';
          							echo '<td>'.$row['Name'].'</td></tr>';
          						}
          					?>
          				</tbody>
        				</table>
      			</div>
      			<button type="submit" class="btn btn-primary btn-user btn-block">
					<a style="text-color=white" href="./no_07_add_data.php">Add Data</a>
                </button>
  			</main>

  		</div>
  	</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>