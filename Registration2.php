<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
</head>
<style>
    body {
            font-family: Times New Roman;
            margin: 0;
            padding: 20px;
         }
    .submit-btn {
            background-color: blue;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 10%;
        }
    .submit-btn:hover {
            background-color: teal;
        }
</style>
<body>
    <form method="POST" action="Registration2.php">
        <h2><u>Student Registration Form</u></h2>

        <label>First Name</label><br>
        <input type="text" name="fname"><br><br>

        <label>Last Name</label><br>
        <input type="text" name="lname"><br><br>

        <label>Date Of Birth</label><br>
        <input type="date" name="dob"><br><br>

        <label>Gender</label><br>
        <select name="Gender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>

        <label>Course</label><br>
        <select name="Course">
            <option value="">Select Course</option>
            <option value="ICT">ICT</option>
            <option value="Computer Science">Computer Science</option>
            <option value="Business">Business</option>
        </select><br><br>

        <label>Email</label><br>
        <input type="email" name="email"><br><br>

        <button type="submit" class="submit-btn" name="submit">Submit</button><br><br>
    </form>

<h3><b>Student Details</b></h3>

<?php
    if(isset($_POST['submit'])){
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $dob =$_POST['dob'];
        $gender =$_POST['Gender'];
        $course =$_POST['Course'];
        $email =$_POST['email'];

        echo "<b>First Name: </b>" .$fname. "<br>";
        echo "<b>Last Name: </b>" .$lname. "<br>";
        echo "<b>Date Of Birth: </b>" .$dob. "<br>";
        echo "<b>Gender: </b>" .$gender. "<br>";
        echo "<b>Course: </b>" .$course. "<br>";
        echo "<b>Email: </b>" .$email. "<br>";
    }
?>
</body>
</html>