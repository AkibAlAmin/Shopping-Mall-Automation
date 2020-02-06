{{"This is $name"}} </br>
{{"This is Login Page"}} </br>
{{"ID is $id"}} </br>
{{"Email is $email"}} </br>


<h1>Log in Form</h1>
<form action="action_page.php" method="post">

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
    </div>

    <div>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
    </div>

    <div>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

      <button type="button" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
  </form>
