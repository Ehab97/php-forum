<?php include '../includes/header.php';?>
      <form role="form" enctype="multipart/form-data" method="post" action="register.php">
                          <div class="form-group">
                            <label>name*</label>
                            <input type="name" name="name"class="form-control"placeholder="Enter name">
                          </div>
                          <div class="form-group">
                            <label>Email*</label>
                            <input type="email"name="email" class="form-control"placeholder="Enter Email">
                          </div>
                          <div class="form-group">
                            <label>User name*</label>
                            <input type="name" name="username" class="form-control"placeholder="Enter user name">
                          </div>
                          <div class="form-group">
                            <label>Password*</label>
                            <input type="password" name="password" class="form-control"  placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label>confirm Password*</label>
                            <input type="password" name="password2" class="form-control"  placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label>Upload Avatar*</label>
                            <input type="file" name="avatar"class="form-control">
                            <p class="help-block"></p>
                          </div>
                          <div class="form-group">
                            <label>about me*</label>
                            <textarea id="about" rows="6"cols="80" class="form-control"name="about" placeholder="tell about your self(optional)"></textarea>
                          </div>
                          <button type="submit" class="btn btn-default" name="register">register</button>
                        </form>
                        <br><br><br>

<?php include('../includes/footer.php');?>