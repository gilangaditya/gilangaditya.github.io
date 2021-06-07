<div class="row">
	<div class="col-md-12">
	    <div class="panel panel-info">
	        <div class="panel-heading"><h3 class="text-center">DAFTAR PENDAFTARAN</h3></div>
	        <div class="panel-body">
	            <table class="table table-striped">
	                <thead>
	                    <tr>
	                        <th>No</th>
	                        <th>NIM</th>
													<th>Nama</th>
													<th>Alamat</th>
	                        <th>Jenis Kelamin</th>
	                        <th>Tahun Mengajukan</th>
	                    </tr>
	                </thead>
	                <tbody>
					<?php
					$connection = new mysqli("localhost", "root", "", "database") 
				?>
	                    <?php $no = 1; ?>
	                    <?php if ($query = $connection->query("SELECT * FROM mahasiswa WHERE nim IN(SELECT nim FROM nilai)")): ?>
	                        <?php while($num_rows = $query->fetch_assoc()): ?>
	                        <tr>
	                            <td><?=$no++?></td>
															<td><?=$num_rows["nim"]?></td>
	                            <td><?=$num_rows["nama"]?></td>
	                            <td><?=$num_rows['alamat']?></td>
	                            <td><?=$num_rows['jenis_kelamin']?></td>
	                            <td><?=$num_rows['tahun_mengajukan']?></td>
	                        </tr>
	                        <?php endwhile ?>
	                    <?php endif ?>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
</div>
