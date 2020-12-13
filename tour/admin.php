<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #b03060;
}
</style>
</head>

<body>

<center><b><u><h2>Admin Panel</h2></u></b></center>
<br>
<div class="row">
  <div class="column">
    <div class="card">
    <img src="image/admin1.jfif" alt="Avatar" style="width:75%">
      <h3>View User Details</h3>
      <button onclick="window.location.href = 'http://localhost:3000/user.php';" type="button" class="btn btn-primary">View</button>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="image/admin2.png" alt="Avatar" style="width:75%">
      <h3>View Commute Bookings</h3>
      <button onclick="window.location.href = 'http://localhost:3000/cbook.php';" type="button" class="btn btn-primary">View</button>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <img src="image/admin3.png" alt="Avatar" style="width:75%">
      <h3>View Stay Bookings</h3>
      <button onclick="window.location.href = 'http://localhost:3000/sbook.php';" type="button" class="btn btn-primary">View</button>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <img src="image/admin4.png" alt="Avatar" style="width:75%">
      <h3>View Payments</h3>
      <button onclick="window.location.href = 'http://localhost:3000/pdetail.php';" type="button" class="btn btn-primary">View</button>
    </div>
  </div>
</div>
<br>
<br>
<br>
<center><button onclick="window.location.href = 'http://localhost:3000/logout.php'" >LOG OUT
      </button></center>
    
</body>
</html>
