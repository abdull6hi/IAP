<?php
class forms {
    public function signup() {
?>
<h2 class="text-center mb-3" style="color:#007e85;">Sign Up</h2>
<form method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <?php $this->submit_button("Sign Up", "signup"); ?>
  <p class="text-center mt-3">Already have an account? <a href="login.php" style="color:#007e85;">Login</a></p>
</form>
<?php
    }

    public function signin() {
?>
<h2 class="text-center mb-3" style="color:#007e85;">Login</h2>
<form method="post">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <?php $this->submit_button("Login", "login"); ?>
  <p class="text-center mt-3">Don’t have an account? <a href="register.php" style="color:#007e85;">Sign Up</a></p>
</form>
<?php
    }

    private function submit_button($value, $name) {
?>
<button type="submit" class="btn btn-primary w-100" 
        style="background-color:#007e85; border-color:#007e85;" 
        name="<?php echo $name; ?>" value="<?php echo $value; ?>">
    <?php echo $value; ?>
</button>
<?php
    }
}