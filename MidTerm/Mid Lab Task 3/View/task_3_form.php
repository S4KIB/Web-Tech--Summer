<!DOCTYPE html>
<html>
<head>
    <title>Donation Form</title>
    <link rel="stylesheet" href="../CSS/task_3_style.css" />
    
</head>
<body>
    <div class = "form">
    <h2>Donor Information</h2>
    <form onsubmit = "return handlesubmit()" >
        <label>
            First Name
        </label> <br>
        <input type = "text" id = "Fname"    >
        <br>

        <label>
            Last Name
        </label> <br>
        <input type = "text" id = "Lname"    >
        <br>

        <label>
            Address
        </label> <br>
        <input type = "text" id = "Address"    >
        <br>

        <label>
            City
        </label> <br>
        <input type = "text" id = "City"    >
        <br>

        <label>
            State
        </label> <br>
        <select id = "State" >
        <option value="">select</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Chattogram">Chattogram</option>
        <option value="Khulna">Khulna</option>
        </select>
        <br>

        <label>
            Phone
        </label> <br>
        <input type = "text" id = "Phone"    >
        <br>

        <label>
            Email
        </label> <br>
        <input type = "email" id = "Email"    >
        <br>

        <label>
            Create Password(min 8 characters)
        </label> <br>
        <input type = "password" id = "Password"    >
        <br>

        <label>
            Confirm Password
        </label> <br>
        <input type = "password" id = "Password"    >
        <br>

        <label>
            Donation Ammount 
        </label> <br>
        <input type ="radio" name="Donation" value ="None"> None
        <input type ="radio" name="Donation" value ="500 BDT"> 500 BDT 
        <input type ="radio" name="Donation" value ="1000 BDT"> 1000 BDT 
        <input type ="radio" name="Donation" value ="2000 BDT"> 2000 BDT
        <input type ="radio" name="Donation" value ="3000 BDT"> 3000 BDT  
        <input type ="radio" name="Donation" value ="Other"> Other  
        <br>

        <label>
            Other Ammount
        </label> <br>
        <input type = "text" id = "Other"    >
        <br>

        <label>
            <input type = "checkbox" id ="Terms"> I agree to the terms & conditions
        </label>
        <br>    

        <h2>Additional Information</h2>

         <label>
            <input type = "checkbox" id ="Additional"> I would like my gift to remain anonymous
        </label>
        <br> 

         <label>
            <input type = "checkbox" id ="Additional"> My employer offers a matching gift program
        </label>
        <br> 

         <label>
            <input type = "checkbox" id ="Additional"> Please don't send a thank you letter
        </label>
        <br> 

        <label>
            Comments
        </label>
        <br> 
        <textarea id ="comments" name="Comments" ></textarea>  
        <br>

        <button type = "submit">submit</button>
    </form>
    </div>
        <script src="../JS/task_3_valid.js"></script>
  
</body>
</html>