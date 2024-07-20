<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Multi-Step Form</title>
  <link rel="stylesheet" href="assets/css/Organization.css">
</head>
<body>
  <div class="container">
    <!-- Step 1: Your Account -->
    <div class="form step step-active" id="step-1">
    <header>Step 1: Your Account</header>
      <form>
        <div class="field">
          <input type="text" id="first-name" name="first-name" placeholder="First Name">
        </div>
        <div class="field">
          <input type="text" id="last-name" name="last-name" placeholder="Last Name">
        </div>
        <div class="field">
          <input type="email" id="email" name="email" placeholder="Email">
        </div>
        <div class="field">
          <input type="tel" id="phone" name="phone" placeholder="Phone Number">
        </div>
        <div class="field">
          <input type="password" id="password" name="password" placeholder="Password">
        </div>
        <div class="field">
          <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password">
        </div>
        <div class="field">
          <select id="country" name="country">
            <option value="">Select Country</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="India">India</option>
            <option value="Nepal">Nepal</option>
          </select>
        </div>
        <div class="field">
          <input type="text" id="city" name="city" placeholder="City">
        </div>
        <div class="field">
          <a href="Ogranganization_register2.html">
          <button type="button" id="next-btn-1">Next</button>
        </div>
      </form>
    </div>
    <script src="Organization.js"></script>
</body>
</html>