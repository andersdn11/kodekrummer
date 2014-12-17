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

					$name = $row[2];;
					$date = strtotime($row[14]);
				?>

				<tr>
					<td>
						<table class="tbl_container">
							<tr>
								<td>
									<table class="tbl_head">
										<tr>
											<td class="name"><?php echo $name; ?></td>
											<td class="actions">
												<a href="#add"><img src="../assets/img/add.png"></a>
												<a href="#show"><img src="../assets/img/show.png"></a>
												<a href="#edit"><img src="../assets/img/edit.png"></a>
												<a href="#"><img src="../assets/img/delete.png"></a>
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
									<table class="edit none">
										<tr class="odd">
											<form>
												<td colspan="4">
													<label>Table navn</label>
													<input type="text" value="<?php echo $name; ?>">
												</td>
												<td>
													<label>Tegnsæt</label>
													<select>
														<option>uft8_bin</option>
														<option>uft8_danish_ci</option>
													</select>
												</td>
												<td>
													<input type="submit" value="Gem ændringer">
												</td>
											</form>
										</tr>
									</table>
								</td>
							</tr>


							<tr>
								<td>
									<table class="show odd none">

										<?php 
										$query = "SELECT * FROM $name";
										$perform = mysqli_query($con, $query);
										$countf = mysqli_num_fields($perform);
										$fields = mysqli_fetch_field($perform);
										


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
													echo '<td colspan="'.$countf.'" class="controls"><input type="submit" value="Opret"></td>';
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