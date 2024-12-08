<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Process the form submission
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    $country = htmlspecialchars($_POST['country']);

    echo <<<HTML
    <div class="success-page">
        <h2>🎉 Registration Successful</h2>
        <div class="success-container">
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Date of Birth:</strong> $dob</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Country:</strong> $country</p>
        </div>
        <div class="success-footer">
            <p>Thank you for registering! A confirmation email has been sent to <strong>$email</strong>.</p>
            <button onclick="window.location.href='index.html'" class="btn-home">Go to Home</button>
        </div>
    </div>
HTML;
} else {
    // Display the form
    echo <<<FORM
    <h2>Registration Form</h2>
    <form action="form.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required pattern="[0-9]{10}">

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="country">Country:</label>
        <select id="country" name="country" required>
            <option value="">Select</option>
            <option value="India">India</option>
            <option value="United States">United States</option>
            <option value="Australia">Australia</option>
            <option value="Canada">Canada</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Germany">Germany</option>
            <option value="France">France</option>
            <option value="Japan">Japan</option>
        </select>

        <label style="display: inline-flex; align-items: center; gap: 10px; white-space: nowrap;">
            <input type="checkbox" id="terms" name="terms" required>
            I agree to the terms and conditions
        </label>

        <button type="submit">Submit</button>
    </form>
    FORM;
}
?>
