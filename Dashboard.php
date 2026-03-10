<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
    header("Location: Login.php?error=login");
    exit();
}
$user_name = $_SESSION['user_name'] ?? 'User';
$user_email = $_SESSION['user_email'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form - Group 8 College</title>
    <link rel="stylesheet" href="./css/IndexStyle.css">
</head>
<body>
    <!-- Navbar Section -->
    <nav>
        <div class="logo"><img src="./Image/Group%208%20College.png" alt="School Logo" height="100px" width="100px"></div>
        <div class="Sname"><h1>GROUP 8 COLLEGE OF EDUCATION</h1></div>
        <div class="btns">
            <span style="color: #38bdf8; margin-right: 15px;">Welcome, <?php echo htmlspecialchars($user_name); ?></span>
            <a href="Logout.php"><button class="btn">Logout</button></a>
        </div>
    </nav>

    <!-- Admission Form -->
    <div class="container">
        <div class="box form-box">
            <header>Admission Application Form</header>
            
            <form action="Preview.php" method="post" enctype="multipart/form-data">
                <!-- Personal Details Section -->
                <fieldset>
                    <legend>Personal Details</legend>

                    <div class="field input">
                        <label for="first_name">First Name *</label>
                        <input type="text" name="first_name" id="first_name" required placeholder="Enter your first name">
                    </div>

                    <div class="field input">
                        <label for="last_name">Last Name *</label>
                        <input type="text" name="last_name" id="last_name" required placeholder="Enter your last name">
                    </div>

                    <div class="field input">
                        <label for="dob">Date of Birth *</label>
                        <input type="date" name="dob" id="dob" required>
                    </div>

                    <div class="field input">
                        <label>Gender *</label>
                        <div class="gender">
                            <label><input type="radio" name="gender" value="Male" required> Male</label>
                            <label><input type="radio" name="gender" value="Female"> Female</label>
                            <label><input type="radio" name="gender" value="Other"> Other</label>
                        </div>
                    </div>

                    <div class="field input">
                        <label for="email">Email Address *</label>
                        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user_email); ?>" required placeholder="your@email.com">
                    </div>

                    <div class="field input">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" name="phone" id="phone" required placeholder="Enter your phone number">
                    </div>

                    <div class="field input">
                        <label for="address">Home Address *</label>
                        <textarea name="address" id="address" rows="3" required placeholder="Enter your complete address"></textarea>
                    </div>

                    <div class="field input">
                        <label for="nationality">Nationality *</label>
                        <input type="text" name="nationality" id="nationality" required placeholder="Enter your nationality">
                    </div>

                    <div class="field input">
                        <label for="profile_picture">Profile Picture *</label>
                        <input type="file" name="profile_picture" id="profile_picture" accept="image/*" required>
                    </div>
                </fieldset>

                <!-- Educational Background Section -->
                <fieldset>
                    <legend>Educational Background</legend>

                    <div class="field input">
                        <label for="high_school">High School Name *</label>
                        <input type="text" name="high_school" id="high_school" required placeholder="Enter your high school name">
                    </div>

                    <div class="field input">
                        <label for="graduation_year">Year of Graduation *</label>
                        <input type="number" name="graduation_year" id="graduation_year" min="1990" max="2025" required placeholder="YYYY">
                    </div>

                    <div class="field input">
                        <label for="qualification">Highest Qualification *</label>
                        <select name="qualification" id="qualification" required>
                            <option value="">Select Qualification</option>
                            <option value="High School Diploma">wascce</option>
                            <option value="Bachelor's Degree">Bachelor's Degree</option>
                            <option value="Master's Degree">Master's Degree</option>
                        </select>
                    </div>

                    <div class="field input">
                        <label for="result_slip">Upload Result Slip *</label>
                        <input type="file" name="result_slip" id="result_slip" accept=".pdf,.jpg,.jpeg,.png" required>
                        <small style="color: #ccc;">Upload your result slip (PDF, JPG, or PNG format)</small>
                    </div>
                </fieldset>

                <!-- Program Selection Section -->
                <fieldset>
                    <legend>Program Selection (Select 3 Programs in Order of Preference)</legend>

                    <div class="field input">
                        <label for="program1">First Choice Program *</label>
                        <select name="program1" id="program1" required>
                            <option value="">Choose your first choice</option>
                            <option value="Bachelor of Education (Primary)">Bachelor of Education (Primary)</option>
                            <option value="Bachelor of Education (Secondary)">Bachelor of Education (Secondary)</option>
                            <option value="Diploma in Early Childhood Education">Diploma in Early Childhood Education</option>
                            <option value="Diploma in Educational Administration">Diploma in Educational Administration</option>
                            <option value="Certificate in Teaching English">Certificate in Teaching English</option>
                            <option value="Certificate in Special Needs Education">Certificate in Special Needs Education</option>
                        </select>
                    </div>

                    <div class="field input">
                        <label for="program2">Second Choice Program *</label>
                        <select name="program2" id="program2" required>
                            <option value="">Choose your second choice</option>
                            <option value="Bachelor of Education (Primary)">Bachelor of Education (Primary)</option>
                            <option value="Bachelor of Education (Secondary)">Bachelor of Education (Secondary)</option>
                            <option value="Diploma in Early Childhood Education">Diploma in Early Childhood Education</option>
                            <option value="Diploma in Educational Administration">Diploma in Educational Administration</option>
                            <option value="Certificate in Teaching English">Certificate in Teaching English</option>
                            <option value="Certificate in Special Needs Education">Certificate in Special Needs Education</option>
                        </select>
                    </div>

                    <div class="field input">
                        <label for="program3">Third Choice Program *</label>
                        <select name="program3" id="program3" required>
                            <option value="">Choose your third choice</option>
                            <option value="Bachelor of Education (Primary)">Bachelor of Education (Primary)</option>
                            <option value="Bachelor of Education (Secondary)">Bachelor of Education (Secondary)</option>
                            <option value="Diploma in Early Childhood Education">Diploma in Early Childhood Education</option>
                            <option value="Diploma in Educational Administration">Diploma in Educational Administration</option>
                            <option value="Certificate in Teaching English">Certificate in Teaching English</option>
                            <option value="Certificate in Special Needs Education">Certificate in Special Needs Education</option>
                        </select>
                    </div>

                    <div class="field input">
                        <label>Do you require accommodation? *</label>
                        <div class="gender">
                            <label><input type="radio" name="accommodation" value="Yes" required> Yes</label>
                            <label><input type="radio" name="accommodation" value="No"> No</label>
                        </div>
                    </div>

                    <div class="field input">
                        <label for="special_requirements">Special Requirements (if any)</label>
                        <textarea name="special_requirements" id="special_requirements" rows="3" placeholder="Enter any special requirements or medical conditions"></textarea>
                    </div>

                    <div class="field input">
                        <label>
                            <input type="checkbox" name="terms" required> I confirm that all information provided is true and accurate *
                        </label>
                    </div>
                </fieldset>

                <div class="button-group">
                    <button type="reset" class="btn">Clear Form</button>
                    <button type="submit" class="btn" name="preview">Save & Continue</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>