
                      </div>
                 </div>
            </div>
            <div class="col-md-4">
              <div class="sidebar">
                <div class="block">
                  <h3>Login form</h3>
                 <form>
                    <div class="form-group">
                      <label>User name</label>
                      <input type="name" class="form-control"placeholder="Enter user name">
                    </div>
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control"  placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button><a href="register.html" class="btn btn-default">Create account</a>
                  </form>
                </div>
                <div class="block">
                  <h3>Categories</h3>
                  <div class="list-group">
                    <a href="topics.php" class="list-group-item <?php echo is_active(null);?>">All Topic <span class="badge pull-right"><?php ?></span></a>
                    <?php foreach ( getcategories() as $cate): ?>
                    <a href="topics.php?category=<?php echo $cate['id']; ?>" class="list-group-item <?php echo is_active($cate['id']);?>"><?php echo $cate['name'];?> <span class="badge pull-right"></span></a>
                  <?php endforeach; ?>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </div><!-- /.container -->


   <!-- script tags
  ============================================================= -->
  
   <script src="http://code.jquery.com/jquery.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="<?=BASE_URL;?>Templates/js/bootstrap.min.js"></script>
  
</body>
</html>