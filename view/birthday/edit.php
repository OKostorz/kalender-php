<?php $birthday = $data[0]; ?>

<h1>Edit <?= $birthday["person"] ?></h1>

	<div class="container">
		<p>
			<form action="<?=URL ?>birthday/editSave" method="POST">
				
				<label id="person">Persoon:</label>
					<input type="text" name="person" value="<?= $birthday["person"] ?>"><br>

				<label for="day">Datum:</label>
						<select name="day">
							<?php for ($i = 1; $i <32; $i++) {?>
								<option value="<?=$i?>"
									<?php if($i == $birthday['day']){?>
										selected
											<?php } ?>
								>
											<?=$i?>
								</option>
							<?php } ?>
						</select>

						<select name="month">
							<?php for ($i = 1; $i <13; $i++) {?>
								<option value="<?=$i?>"
									<?php if($i == $birthday['month']){?>
										selected
											<?php } ?>
								>
											<?=$i?>
								</option>
							<?php } ?>
						</select>

						<select name="year">
							<?php for ($i = 2017; $i >= 1930; $i--) {?>
								<option value="<?=$i?>"
									<?php if($i == $birthday['year']){?>
										selected
											<?php } ?>
								>
											<?=$i?>
								</option>
							<?php } ?>
						</select><br>


				<input type="hidden" name="id" value="<?= $birthday['id']; ?>">
				<input type="submit" name="submit">
				<input type="reset">

			</form>
		</p>
	</div>