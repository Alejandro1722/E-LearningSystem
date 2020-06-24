<h1><?php echo $title;?></h1>

<link rel="stylesheet" type="text/css" href="css/newstyle.css">

<div class="contenedor">
	<div class="col-lg-6" >
		<h3>PDF</h3>
		<div class="table-responsive" >
			<table id="example" class="table table-bordered">
				<thead>
					<th width="2%">#</th>
					<th>Chapter</th>
					<th>Title</th>
					<th width="10%">Action</th>
				</thead>
				<tbody>
					<?php 
				$sql = "SELECT * FROM tbllesson WHERE Category='Docs'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td></td>';
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td><a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'" class="btn btn-xs btn-info" download><i class="fa fa-download"></i> Downlaod</a></td>';
					echo '</tr>';
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-lg-6" id="video">
		<h3>VIDEO</h3>
		<div class="table-responsive">
			<table id="example2" class="table table-bordered">
				<thead>
					<th width="2%">#</th>
					<th>Decription</th>
					<th width="10%">Action</th>
				</thead>
				<tbody>
					<?php 
				$sql = "SELECT * FROM tbllesson WHERE Category='Video'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td></td>';
					echo '<td>'.$result->LessonTitle.'</td>'; 
					echo '<td><a href="'.web_root.'admin/modules/lesson/'.$result->FileLocation.'" class="btn btn-xs btn-info" download><i class="fa fa-download"></i> Downlaod</a></td>';
					echo '</tr>';
				}
				?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<footer class="footer-1">
	<div class="footer-text">
		<p>&copy: Alejandro Vásquez - 2020 // Todos los derechos reservados</p>
	</div>
</footer>