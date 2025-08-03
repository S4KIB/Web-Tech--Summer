function handlesubmit() {
var firstname = document.getElementById("Fname").value;
var lastname = document.getElementById("Lname").value;
var address = document.getElementById("Address").value;
var city = document.getElementById("City").value;
var state = document.getElementById("State").value;
var phone = document.getElementById("Phone").value;
var email = document.getElementById("Email").value;

if (firstname =="" || lastname =="" || address =="" || city =="")
{
    alert("Fill the form!!");
    return false;
}

alert("Donation Complete! \n" + "First Name" + firstname + "\n" + "Last Name" + lastname + "\n" + "Address" + address + "\n" + "City" + city + "\n" )

}
