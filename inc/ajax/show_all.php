<?php 

	/**
	 * Db connection
	 */
	require_once "../../app/db.php";
	require_once "../../app/function.php";

	$sql = "SELECT * FROM students ORDER BY id DESC";
	$data = $connection -> query($sql);


	while ($all = $data -> fetch_assoc()) :

?>
<tr>
	<td>
	  <span class="custom-checkbox">
	    <input type="checkbox" id="checkbox1" name="options[]" value="1">
	    <label for="checkbox1"></label>
	  </span>
	</td>
	<td><?php echo $all['name']; ?></td>
	<td><?php echo $all['email']; ?></td>
	<td><?php echo $all['address']; ?></td>
	<td><?php echo $all['phone']; ?></td>
	<td><img src="media/students/<?php echo $all['photo']; ?>" alt=""></td>
	<td>
	  <a id="singleshow" single_student="<?php echo $all['id']; ?>" href="#viewEmployeeModal" class="view" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="view">&#xE417;</i></a>
	  <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
	  <a id="delete_student" href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
	</td>
</tr>

<?php endwhile; ?>