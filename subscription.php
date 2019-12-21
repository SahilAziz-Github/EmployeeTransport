

<html>
<head>
	<style type="text/css">
		
		h1 {
  color: MidnightBlue;
  text-align: center;
}
div {
  border-radius: 5px;
  background-color: powderBlue;
  padding: 20px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: MidnightBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 justify-content: center;
}
input[type=submit]:hover {
  background-color: Navy;
}
	</style>
<head>
	<body>
		<div>
		<form>
			
				<h1><b><u> Subscribe </u></b></h1>
				
				<h3> Username:</h3>
				<input type="text" name="uname">
				<h3> Email:</h3>
				<input type="text" name="email">
				<h3> Month:</h3>
				 <select id="month" name="month">
      <option value="january">january</option>
      <option value="february">february</option>
      <option value="march">march</option>
      <option value="april">april</option>
      <option value="may">may</option>
      <option value="june">june</option>
      <option value="july">july</option>
      <option value="august">august</option>
      <option value="september">september</option>
      <option value="october">october</option>
      <option value="november">november</option>
      <option value="december">december</option>
    </select>
    <h3> Payment: </h3>
    <input type="radio" name="payment" value="bkash"> Bkash
    <input type="radio" name="payment" value="card"> Card <br>
				<input type="submit" name="submit" value="submit">

			
		</form>
	</div>
	</body>
</html>

