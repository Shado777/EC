<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .registrationBox {
        left:0;
        display: block;
        width: cover;
        height: auto;
      }

      .inputBox{
        width: 95%;
        padding: 15px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        type:text;
      }

      .buttonS {
        width: 40%;
        background-color: green;
        color: white;
        padding: 14px 20px;
        border: 1px;
        border-color: black;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
      }

      .fieldWidth {
        width: 25%;
      }

    </style>
  </head>
  <body>
    <form class="" action="MannakaRegistration.html" method="POST">
      <div class="registrationBox" align="center">
        <?php include 'insert.php';?> <!--include the insert.php-->
        <fieldset class="fieldWidth">
          <legend><b>Registration</b></legend>
        </br>
        <div align="left">
          <!--firstname-->
          <label for="fName">First Name:</label></br>
          <input class="inputBox" id="fName" name="firstName" value="" placeholder="Enter your first name">
          <!--surname-->
          </br></br>
          <label for="lName">Last Name:</label></br>
          <input class="inputBox" id="lName" name="surName" value="" placeholder="Enter your last name">
          <!--email-->
          </br></br>
          <label for="uEmail">Email:</label></br>
          <input class="inputBox" id="uEmail" name="email" value="" placeholder="Enter your email">
          <!--User name-->
          </br></br>
          <label for="UName">Username:</label></br>
          <input class="inputBox" id="UName" name="username" value="" placeholder="Enter your username">
          </br></br>
          <!--Password -->
          <label for="UPass">Password:</label></br>
          <input type="password" class="inputBox" id="UPass" name="password" value="" placeholder="Enter your password">
        </br></br>
          <div align="right">
            <button class="buttonS" type="button" onclick="allValidate()" name="submit1">Login</button>
            <?php include 'insert.php';?>
          </div>
        </div>
        </fieldset>
      </div>
      <script type="text/javascript">
        function validateFirst(){
          var first = document.getElementById("fName").value;
          if(first ==""){
            alert("Please provide firstname");
            return true;
          }
        }
        function validateSur(){
          var sur = document.getElementById("lName").value;
          if(sur ==""){
            alert("Please provide surname");
            return true;
          }
        }
        function validateEmail(){
          var emailToVal = document.getElementById("uEmail").value;
          var emailValidated = emailToVal.search(/^\S+@\S+\.\S+$/);
          if(emailValidated !=0){
            alert("Please provide email");
            return true;
          }
        }
        function validateUser(){
          var user = document.getElementById("UName").value;
          if(user ==""){
            alert("Please provide username");
            return true;
          }
        }
        function validatePass(){
          var pass = document.getElementById("UPass").value;
          if(pass ==""){
            alert("Please provide password");
            return true;
          }
        }
        function allValidate() {
          var firstVal = validateFirst();
          var lastVal = validateSur();
          var emailVal = validateEmail();
          var userVal = validateUser();
          var passVal = validatePass();

          if(firstVal == true) {
            validateFirst();
          }
          if(lasttVal == true) {
            validateSur();
          }
          if(emailVal == true) {
            validateEmail();
          }
          if(userVal == true) {
            validateUser();
          }
          if(passVal == true) {
            validatePass();
          }
        }
      </script>
    </form>
  </body>
</html>
