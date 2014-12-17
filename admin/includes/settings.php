
<h1>Indstillinger</h1>

<div id="settings" class="col-12">
	
	<ul class="htabs">
		<li><a href="#general"><img src="../assets/img/default.png">Generelt</a></li>
		<li><a href="#database"><img src="../assets/img/database.png">Database</a></li>
	</ul>

	<div id="general" class="clearfix col-12">
		<article>
			GENERELT
		</article>
	</div>

	<div id="database" class="clearfix">
		<article>
			<div class="col-12">
			<h2>Konfigurer database</h2>


			<div class="row">
				<p>Database: <strong><?php echo $db; ?></strong></p>

				<a class="add right">
					<p>Tilføj tabel</p>
				</a>
			</div>

			<table id="advancetbl">
				<tr>
					<td>
						<table>
							<tr class="theader">
								<th colspan="2">Tabel navn</th>
								<th class="rows">Rækker</th>
								<th class="datatype">Datatype</th>
								<th class="charset">Tegnsæt</th>
								<th class="time">Tilføjet</th>
							</tr>
						</table>
					</td>
				</tr>

				<?php 
					$sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='$db'";
					$result = mysqli_query($con, $sql);

					while ($row = mysqli_fetch_array($result)){

					$name = $row[2];
					$date = strtotime($row[14]);
				?>

				<tr>
					<td>
						<table class="tbl_container">
							<tr>
								<td>
									<table class="tbl_head">
										<tr>
											<td class="name"><input class="none" type="text" value="<?php echo $name; ?>"><p><?php echo $name; ?></p></td>
											<td class="actions">
												<a href="#add"><img alt="Indsæt rækker" src="../assets/img/add.png"></a>
												<a href="#show"><img alt="Vis tabel" src="../assets/img/show.png"></a>
												<a href="#edit"><img alt="Rediger rækker" src="../assets/img/edit.png"></a>
												<a class="slet" name="<?php echo $name; ?>" href="../includes/delete.php?type=tabel&tbl=<?php echo $name; ?>"><img alt="Slet tabel" src="../assets/img/delete.png"></a>
											</td>
											<td class="rows"><?php echo $row[7]; ?></td>
											<td class="datatype"><?php echo $row[4]; ?></td>
											<td class="charset"><?php echo $row[17]; ?></td>
											<td class="time"><?php echo date("d-m/y s", $date); ?></td>
										</tr>
									</table>
								</td>
							</tr>
							
							<tr>
								<td>
									<table class="show none">
										
										<?php
											$sqli = "DESCRIBE $name";

											$run = mysqli_query($con, $sqli);

											echo '<tr class="sheader">';

											echo '<th class="marks"></th>';
											echo '<th>Navn</th>';
											echo '<th class="type">Type</th>';
											echo '<th class="default">Standardværdi</th>';
											echo '<th class="null">Nulværdi</th>';

											echo '</tr>';

											while($row = mysqli_fetch_array($run)){

												if($row['Extra']){
													$auto = '<img alt="auto_increment" class="left" src="../assets/img/increment.png" alt="auto_increment">';
												} else {
													$auto = '';
												}

												if($row['Key']){
													$key = '<img alt="Primay key" class="left" src="../assets/img/primarykey.png" alt="primary key">';
												} else {
													$key = '';
												}

												echo '<tr class="odd">';

												echo '<td>';
												echo $key;
												echo $auto;
												echo '</td>';

												echo '<td>';
												echo $row['Field'];
												echo '</td>';

												echo '<td>';
												echo $row['Type'];
												echo '</td>';
												
												echo '<td>';
												echo $row['Default'];
												echo '</td>';

												echo '<td>';
												echo $row['Null'];
												echo '</td>';


												

												echo "</tr>";
											}

											echo '<tr class="addfield odd">';

												echo '<td colspan="5">';
												echo '<div>';
												echo 'Tilføj nyt felt';
												echo '</div>';
												echo '</td>';												

											echo "</tr>";

										?>
										</tr>
									</table>
								</td>
							</tr>


							<tr>
								<td>
									<table class="edit none">

									<?php 
									$query = "SELECT * FROM $name";
									$perform = mysqli_query($con, $query);
									$countf = mysqli_num_fields($perform);
									$rows = mysqli_num_rows($perform);
									$fields = mysqli_fetch_field($perform);
										

									if($rows == 0){
										echo '<tr class="odd">';
										echo '<td>';
										echo '<p class="noinfo">Ingen Information blev fundet i denne tabel :( </p>';
										echo '<p class="noinfo"><a href="#add">Opret Information til denne tabel</a></p>';
										echo '</td>';
										echo "</tr>";
									} else {
										echo '<tr class="sheader">';
										echo '<th class="tblid">id</th>';
										
										while($finfo = $perform->fetch_field()){;
											
											$inc = '<img src="../assets/img/increment.png">';
											$pri = '<img src="../assets/img/primaryke">';

											switch ($finfo->type) {
												// tinyint
												case '1':
													echo '<th class="int">'.$finfo->name.'</th>';
													break;

												// smallint
												case '2':
													echo '<th class="int">'.$finfo->name.'</th>';
													break;

												// int
												case '3':
													echo '<th class="int">'.$finfo->name.'</th>';
													break;

												// float
												case '4':
													echo '<th class="int">'.$finfo->name.'</th>';
													break;

												// double
												case '5':
													echo '<th class="int">'.$finfo->name.'</th>';
													break;

												// timestamp
												case '7':
													echo '<th class="date">'.$finfo->name.'</th>';
													break;

												// bigint
												case '8':
													echo '<th class="int">'.$finfo->name.'</th>';
													break;

												// medium int
												case '9':
													echo '<th class="int">'.$finfo->name.'</th>';
													break;

												// date
												case '10':
													echo '<th class="date">'.$finfo->name.'</th>';
													break;

												// time
												case '11':
													echo '<th class="date">'.$finfo->name.'</th>';
													break;

												// datetime
												case '12':
													echo '<th class="date">'.$finfo->name.'</th>';
													break;

												// year
												case '13':
													echo '<th class="int">'.$finfo->name.'</th>';
													break;


												// decimal
												case '246':
													echo '<th class="int">'.$finfo->name.'</th>';
													break;

												// text
												case '252':
													echo '<th class="text">'.$finfo->name.'</th>';
													break;

												// varchar
												case '253':
													echo '<th class="varchar">'.$finfo->name.'</th>';
													break;

												// char
												case '254':
													echo '<th class="int">'.$finfo->name.'</th>';
													break;

												default:
													echo "<th>".$finfo->name."</th>";
													break;
											}

										}
											
										echo '</tr>';

										

										while($col = mysqli_fetch_array($perform)){ 

											$i = 0;
										
											echo '<tr class="odd">';
											while ($i < $countf) {

													echo "<td>".$col[$i]."</td>";
												
												

												$i++;
											} 
											echo '</tr>';
										} 
									}
										?>
									</table>
								</td>
							</tr>

							<tr>
								<td>
									<table>
										<tr class="odd">
											<td>
												<form action="../includes/add.php?tbl=<?php echo $name; ?>&type=addrow" method="post" class="addrow none">
													<table>
													<?php 
													

													$perform = mysqli_query($con, $query);

													$rows = mysqli_num_rows($perform);


													
													while($finfo = $perform->fetch_field()){
														echo '<tr class="odd">';

														if($finfo->name == "id"){
															
														} else {
															
															switch ($finfo->type) {
																// tinyint
																case '1':
																	echo '<td class="int">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="number" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// smallint
																case '2':
																	echo '<td class="int">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="number" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// int
																case '3':
																	echo '<td class="int">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="number" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// float
																case '4':
																	echo '<td class="int">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="number" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// double
																case '5':
																	echo '<td class="int">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="number" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// timestamp
																case '7':
																	echo '<td class="date">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="time" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// bigint
																case '8':
																	echo '<td class="int">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="number" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// medium int
																case '9':
																	echo '<td class="int">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="number" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// date
																case '10':
																	echo '<td class="date">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="date" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// time
																case '11':
																	echo '<td class="date">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="time" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// datetime
																case '12':
																	echo '<td class="date">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="datetime" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// year
																case '13':
																	echo '<td class="date">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="date" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;


																// decimal
																case '246':
																	echo '<td class="int">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="number" pattern="[0-9]+([\.|,][0-9]+)?" step="0.01" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// text
																case '252':
																	echo '<td class="text">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<textarea name="'.$finfo->name.'"></textarea>';
																	echo '</td>';
																	break;

																// varchar
																case '253':
																	echo '<td class="varchar">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="text" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																// char
																case '254':
																	echo '<td class="varchar">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="text" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;

																default:
																	echo '<td class="varchar">';
																	echo "<label>".$finfo->name."</label>";
																	echo '<input type="text" name="'.$finfo->name.'">';
																	echo '</td>';
																	break;
															}

														}
														echo '</tr>';
													}													

													echo '<tr class="odd">';
													echo '<td class="controls"><input type="submit" value="Opret række"></td>';
													echo '</tr>';

													?>
													
													</table>
												</form>
											</td>
										</tr>

									</table>
								</td>
							</tr>

							
						</table>
					</td>
				</tr>	
				<?php
					}
				?>		
			</table>
			</div>
			<div class="clearfix"></div>
		</article>
	</div>
</div>