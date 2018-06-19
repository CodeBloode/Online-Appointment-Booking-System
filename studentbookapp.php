<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Student Book Appointment</title>
	<link rel="stylesheet" href="stylebook.css" type="text/css">

	<title>Student Book Appointment</title>
	
  </head>
 

    <body>
    </br>
    <h3 style="margin-left: 250px; margin-top: 10px;"> <i>Please fill in the fields to Book an Appointment</i></h3>
    </br>

		<div id="bookcontent">
		<form action="#" method="post">
		<label>Pick Counsellor</label><br>
		<select name="counsellor">
			<option value="null">--NONE--</option>
			<option value="counsellor 1"> counsellor 1 </option>
			<option value="counsellor 2"> counsellor 2 </option>
			<option value="counsellor 3"> counsellor 3 </option>
			<option value="counsellor 4"> counsellor 4 </option>
			<option value="counsellor 5"> counsellor 5 </option>
			<option value="counsellor 6"> counsellor 6 </option>
			<option value="counsellor 7"> counsellor 7 </option>
			<option value="counsellor 8"> counsellor 8 </option>
		</select><br>
  	
		<label>Pick Date </label><br>
		<input type="text" name="date" id="datepicker" required><br>
		</br>
		
		<label>Time</label><br>
		<div id="picktimentime">
		
			<input type="time" name="settime" id="timepicker" required />
			<br>

			</div>
			<br><br>
			<input type="submit" name="check" value="Book"/>

			
			<div id="showsessions">
			<form action="book.php" method="POST">
			
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-sm table-hover">
				</br>
		
				<h4 style="margin-right: 30px;margin-top: 8px" >Booked Sessions On the Selected Date</h4>
		
						<tr class="thead-dark">
							<th >Date</th>
							<th>Counsellor</th>
							<th>Start Time</th>
							<th>Endtime</th>
			
						</tr>
						</table>
						</div>

			</form>
			</div>

		</html>

  </body>
   

