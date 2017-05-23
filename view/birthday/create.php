	<h1>Nieuwe verjaardag</h1>
	<div id="formulier">
		<p>
			<form action="createSave" method="POST">
				<label id="person">Persoon:</label>
					<input type="text" name="person" placeholder="Your name.."><br>

				<label for="day">Datum:</label>
					<select id="day" name="day">
				      <?php for($day=1; $day < 32; $day++){?>
				      	<option value="<?php echo $day; ?>"><?php echo $day; ?></option>
				      <?php } ?>
   					</select>

					<select id="month" name="month">
				      <?php for($month=1; $month < 13; $month++){?>
				      	<option value="<?php echo $month; ?>"><?php echo $month; ?></option>
					      <?php } ?>
	   				</select>

					<select id="year" name="year">
				      <?php for($year=2017; $year > 1930; $year--){?>
				      	<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
					      <?php } ?>
	   				</select><br>

				<input type="submit" name="submit">
				<input type="reset">
			</form>
		</p>
	</div>