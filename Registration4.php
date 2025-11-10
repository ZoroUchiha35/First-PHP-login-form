<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }
        
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 25px;
            color: #333;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }
        
        input[type="text"],
        input[type="date"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: 'Times New Roman', serif;
            font-size: 16px;
        }
        
        .submit-btn {
            background-color: blue;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-family: 'Times New Roman', serif;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        
        .submit-btn:hover {
            background-color: teal;
        }
        
        .results-container {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        h3 {
            text-align: center;
            margin-top: 0;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form method="POST" action="">
                <h2><u>Student Registration Form</u></h2>

                <label>First Name</label>
                <input type="text" name="fname"><br>

                <label>Last Name</label>
                <input type="text" name="lname"><br>

                <label>Date Of Birth</label>
                <input type="date" name="dob"><br>

                <label>Gender</label>
                <select name="Gender">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select><br>

                <label>Course</label>
                <select name="Course">
                    <option value="">Select Course</option>
                    <option value="ICT">ICT</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Business">Business</option>
                </select><br>

                <label>Email</label>
                <input type="email" name="email"><br>

                <button type="submit" class="submit-btn" name="submit">Submit</button>
            </form>
        </div>

        <?php
        if(isset($_POST['submit'])){
            echo '<div class="results-container">';
            echo '<h3><b>Student Details</b></h3>';
            
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $dob = $_POST['dob'];
            $gender = $_POST['Gender'];
            $course = $_POST['Course'];
            $email = $_POST['email'];

            echo "<b>First Name: </b>" . $fname . "<br>";
            echo "<b>Last Name: </b>" . $lname . "<br>";
            echo "<b>Date Of Birth: </b>" . $dob . "<br>";
            echo "<b>Gender: </b>" . $gender . "<br>";
            echo "<b>Course: </b>" . $course . "<br>";
            echo "<b>Email: </b>" . $email . "<br>";
            
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>