  <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Jurusan SMAN 1 Ciranjang</div>
        <div class="card-body">
 <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	
	<thead>
		<tr>
			<th>ID ADMIN</th>
			<th>NAMA ADMIN</th>
			<th>PASSWORD</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<?php
				$i = 1;

				foreach ($data_admin as $key => $value){
				?>
				
				<tr>
					<td><center><?php echo $i;?></center></td>
					<td><center><?php echo $value['id_admin']?></center></td>
					<td><center><?php echo $value['nama'];?></center></td>
					<td><center><?php echo $value['password'];?></center></td>
					<td><center>
						<button type="button" class="btn btn-succes tombol" 
														data-toggle="modal" data-target="#editModal"
														data-id="<?php echo $value['id_admin'];?>"
														data-nama="<?php echo $value['nama'];?>"
														data-password="<?php echo $value['password'];?>">
														<span class="glyphicon glyphicon-pencil"></span></button>
						<button type="button" class="btn btn-danger tombol"
														data-toggle="modal" data-target="#deleteModal"
														data-id="<?php echo $value['id_admin'];?>"
														data-nama="<?php echo $value['nama'];?>">
														<span class="glyphicon glyphicon-trash"></span></button></center>
					</td>
				</tr>
				<?php		
					$i++;
				}
				?>
			
	</tbody>
</table>
</div>
</div>

