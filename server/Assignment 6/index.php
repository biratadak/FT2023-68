<!-- CLIENT SIDE CODE -->
<html>

<head>
  <meta charset="UTF-8" />
  <title>Assgnment 6</title>
  <link rel="stylesheet" href="../stylesheet/style.css" />
  <script src="../class/validation.js"></script>
</head>

<body>
  <div class="form-div">
    <form method="post" action="http://php.nginx/Assignment 6/submit.php" enctype="multipart/form-data"
      onsubmit="return validate()">
      <div class="top">
        <!-- First Name section -->
        <div class="fd-col">
          <label for="fname">First Name<span name="ferr" class="error"> * </span></label>
          <input type="text" placeholder="Enter your First Name" name="fname" class="name" />
        </div>
        <!-- Last Name section -->
        <div class="fd-col">
          <label for="lname">Last Name<span name="lerr" class="error"> * </span></label>
          <input type="text" placeholder="Enter your Last Name" name="lname" class="name" /><br />
        </div>
      </div>
      <div class="bottom fd-col">
        <input type="text" disabled id="display" placeholder="😁Your Full Name😁" />
        <!-- Upload image file -->
        <input type="file" name="pic" id="pic" />
        <!-- Marks field -->
        <textarea name="marks" id="marks" cols="1" rows="5"
          placeholder="Write marks of different subjects in the format, English|80. One subject in each line."></textarea>
        <!-- Phone no field -->
        <label for="phoneNo">Mobile No<span name="perr" class="error"> * </span></label>
        <input type="text" name="phoneNo" id="phoneNo" placeholder="+919876543210" />
        <!-- E-Mail Id field -->
        <label for="mailId">E-Mail Id<span name="merr" class="error"> * </span></label>
        <input type="text" name="mailId" id="mailId" placeholder="abcd@anymail.com" />
        <!-- PDF download checkbox -->
        <div>
          <label for="downloadPdf">Check for download as a PDF</label>
          <input type="checkbox" name="downloadPdf" id="" />
        </div>
        <!-- Submit button -->
        <input class="btn" type="submit" name="submitBtn" value="Submit" />
      </div>
    </form>
  </div>

</body>
<script>

  // Check validation on submit
  function validate() {
    if ((document.getElementsByName("ferr")[0].innerHTML == "") && (document.getElementsByName("lerr")[0].innerHTML == "") && (document.getElementsByName("perr")[0].innerHTML == "") && (document.getElementsByName("merr")[0].innerHTML == "")) {
      return TRUE;
    }
    else {
      return FALSE;
    }
  }

  // To check the phone number is valid.
  validPhone("phoneNo", "perr");

  // To check the first name field only contains alphabets.
  allLetter("fname", "ferr");

  // To check the last name field only contains alphabets.
  allLetter("lname", "lerr");

  // To check the mail id is valid.
  validMail("mailId", "merr");

  // To live update the first name field.
  liveUpdate("fname");

  // To live update the last name field.
  liveUpdate("lname");

</script>
</html>
