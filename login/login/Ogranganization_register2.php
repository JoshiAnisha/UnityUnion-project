<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    <link rel="stylesheet" href="assets/css/Organization.css">
</head>
<body>
    <!-- Step 2: Organisation Info -->
<div class="form step" id="step-2">
    <header>Step 2: Organisation Info</header>
    <form>
      <div class="field">
        <input type="text" id="organisation-name" name="organisation-name" placeholder="Organisation Name">
      </div>
      <div class="field">
        <input type="text" id="street-address" name="street-address" placeholder="Street Address">
      </div>
      <div class="field">
        <select id="country-2" name="country-2">
          <option value="">Select Country</option>
          <option value="Bangladesh">Bangladesh</option>
          <option value="India">India</option>
          <option value="Nepal">Nepal</option>
      </select>
      </div>
      <div class="field">
        <input type="text" id="city-2" name="city-2" placeholder="City">
      </div>
      <div class="field">
        <input type="text" id="postal-code" name="postal-code" placeholder="Postal Code">
      </div>
      <div class="field">
        <input type="text" id="organisation-number" name="organisation-number" placeholder="Organisation Number">
      </div>
      <div class="field">
        <a href="Organization_register.html">
        <button type="button" id="prev-btn-2">Previous</button>
      </div>
      <div class="field">
        <a href="Organization_register3.html">
        <button type="button" id="next-btn-2">Next</button>
      </div>
    </form>
  </div>
  <script src="Organization.js"></script>
</body>
</html>