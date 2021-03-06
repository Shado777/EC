<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style media="screen">
      .loginBox {
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
    <form action="MannakaLogin.html" method="post">

      <div class="loginBox" align="center">
        <fieldset class="fieldWidth">
          <legend><b>Login</b></legend>
          </br>
          <div align="left">
            <?php
              echo "it works</br>";
            ?>
            <!--User name-->
            <label for="UName">Username:</label></br>
            <input class="inputBox" id="UName" name="" value="" placeholder="Enter your username">
            </br></br>
            <!--Password -->
            <label for="UPass">Password:</label></br>
            <input type="password" class="inputBox" id="UPass" name="" value="" placeholder="Enter your password">
            </br></br>
            <div align="right">
              <button class="buttonS" type="button" onclick="validate()" name="login">Login</button>
            </div>
          </br>
          <table>
            <tr>
              <?php while($row = mysqli_fetch_array($result1)):;?>
                <td align="center" bgcolor="white"><?php echo $row['id'];?></td>
                <td align="center" bgcolor="white"><?php echo $row['firstname'];?></td>
                <td align="center" bgcolor="white"><?php echo $row['lastname'];?></td>
                <td align="center" bgcolor="white"><?php echo $row['email'];?></td>
                <td align="center" bgcolor="white"><?php echo $row['username'];?></td>
                <td align="center" bgcolor="white"><?php echo $row['password'];?></td>
            </tr>
          <?php endwhile;?>
          </table>
          </div>
          <script type="text/javascript">
            function validateUser() {
              var user = document.getElementById("UName").value;
              if(user == '') {
                alert("Please provide your username!");
                return true;
              }
            }
            function validatePass() {
              var pass = document.getElementById("UPass").value;
              if(pass == '') {
                alert("Please provide your password!");
                return true;
              }
            }
            function validate() {
              var userVal = validateUser();
              var passVal = validatePass();

              if(userVal == true) {
                validateUser();
              }
              if(passVal == true) {
                validatePass();
              }
            }
          </script>
        </fieldset>
      </div>
    </form>
  </body>
</html>
