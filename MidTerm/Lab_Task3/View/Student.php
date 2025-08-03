<!DOCTYPE html>
<html>
<head>
    <title>Student Profile & Status Checker</title>
</head>
<body style="background-color: lightblue;">
 <center>
    <h1>Student Profile & Status Checker</h1>
    <p>Open your browser console to see details.</p>
 
    <button id="resultBtn">Show Student Result</button>
 </center>
    <script>
        
        var student = {
            name: "Sakib Hossain",
            age: 23,
            isStudent: true,
            subjects: {
                Web_Technology: 90,
                Data_Communication: 98,
                CAD: 99,
                Micro_Prossecor: 100
            }
        };
 
        
        var totalMarks = 0;
        var subjectCount = 0;
        for (var subject in student.subjects) {
            totalMarks += student.subjects[subject];
            subjectCount++;
        }
        var average = totalMarks / subjectCount;
 
        
        var isAdult = student.age >= 18;
        var isPassed = average >= 70;
 
        
        console.log("Subject Marks:");
        for (var subject in student.subjects) {
            console.log(subject + ": " + student.subjects[subject]);
        }
 
      
        function displaySummary() {
            console.log("Student Name:", student.name);
            console.log("Age:", student.age);
            console.log("Is Adult?", isAdult ? "Yes" : "No");
            console.log("Average Marks:", average.toFixed(2));
            console.log("Status:", isPassed ? "Passed" : "Failed");
        }
 
        displaySummary();
 
        
        document.getElementById("resultBtn").onclick = function() {
            var resultMsg =
                "Name: " + student.name +
                "\nAge: " + student.age +
                "\nAdult: " + (isAdult ? "Yes" : "No") +
                "\nAverage Marks: " + average.toFixed(2) +
                "\nStatus: " + (isPassed ? "Passed" : "Failed");
            alert(resultMsg);
        };
    </script>
 
</body>
</html>