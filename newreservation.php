<html>
<head>
<title>Reservation</title>
<style>

fieldset { 
  width: 30%;
  
}
</style>
</head>
<body>
<center>
<form name="myForm" method="post" onsubmit="return validateForm()" action="connectivity.php">
<fieldset>
<legend><label><b>Booking Information</b></label></legend>
<b>First Name</b><br>
<input type="text" id="firstName">
<br>
<br>
<b>Last Name</b><br>
<input type="text" id="lastName">
<br>
<br>
<b>Phone Number</b><br>
<input type="text" id="phone">
<br>
<br>
<b>Email</b><br>
<input type="text" id="mail">
<br>
<br>
<b>Gender</b><br>

<input type="radio" name="gender" value="male">  Male<br>
<input type="radio" name="gender" value="female">Female<br>
<input type="radio" name="gender" value="other"> Other<br>
 
<br>
<b>Date of boarding</b><br>
<input type="date" id="boardingDate" >
<br>
<br>
<b>Source</b><br>
<select id="source" >
    <option value=""></option>
    <option value="coimbatore">Coimbatore</option>
    <option value="chennai">Chennai</option>
    <option value="Bangalore">Bangalore</option>
</select>
<br>
<br>
<b>Desitination</b><br>
<select id="destination" >
    <option value=""></option>
    <option value="coimbatore">Coimbatore</option>
    <option value="chennai">Chennai</option>
    <option value="Bangalore">Bangalore</option>
  </select>
<br>
<br>
<b>No of seats</b><br>
<input type="number" id="seat">
<br><br>
<input type="submit" value="submit" id="submit">
</fieldset>
</form>
</center>
</body>



<script type="text/javascript">
var totalseat=40;
function validateForm() {

var firstName = document.forms["myForm"]["firstName"].value;

if (firstName == "") {
    alert("First Name must be filled out");
    return false;
  }
if(!firstName.match(/^[A-Za-z]+$/)){
    alert("First Name should cointain letters only");   
}

var lastName = document.forms["myForm"]["lastName"].value;
if (lastName == "") {
    alert("Last Name must be filled out");
    return false;
  }
if(!lastName.match(/^[A-Za-z]+$/)){
    alert("Last Name should cointain letters only");   
}
var phone = document.forms["myForm"]["phone"].value;
if (phone == "") {
    alert("Phone must be filled out");
    return false;
  }
if(!phone.match(/^[0-9]+$/)){

    alert("Phone numbers cannot cointain alphabets ");   
}
if(phone.length!=10)
{
  alert("need a valid phone number!!");
  return false;
}
var mail = document.forms["myForm"]["mail"].value;
if (mail == "") {
    alert("Mail must be filled out");
    return false;
  }

var source= document.getElementById("source").value;
var destination= document.getElementById("destination").value;
if(source==destination)
{
 alert("cannot be same");
 return false;
}

var boardingDate= document.getElementById("boardingDate").value;

var seat = document.forms["myForm"]["seat"].value;
if (seat == "") {
    alert("seats must be filled out");
    return false;
  }

if(totalseat < seat)
{
alert("Not Available!!! Available seats "+seats);
return false;
}
else
{
document.write("<b>Your Tickect Details: </b>"+"<br><br>");
document.write("<b>Name: </b>"+firstName+ " "+lastName+"<br>"+"<b>Phone: </b>" + phone+"<br>"+"<b>Mail: </b>"+mail+"<br>"+"<b>Date of Boarding: </b>"+boardingDate+"<br>"+"<b>No of Seats: </b>"+seat+" "+"<br>"+"<b>source: </b>"+source+"<br>"+"<b>Destination: </b>"+destination);
totalseat=totalseat-seat;
document.write("<br><b>Remaining Seats:</b>"+totalseat);
var price=500;
totalprice=price*seat;
document.write("<br><b>Price: </b>"+totalprice);
}
return true;
}
</script>
</html>
