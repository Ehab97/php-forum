</div>
</div>
</div>
<div class="col-md-4">
    <div class="sidebar">
        <?php if (isloggedin()): ;?>
	            <div class="block">
	                <h3>Login form</h3>
	                <div class="userdate">
	                    <h4> welcome ,<?=$_SESSION['userlogin']; //getUser();?></h4>
	                </div>
	                <br>
	                <form role="form" method="post" action="logout.php" class="text-center">
	                    <input type="submit" name="logout" value="logout" class="btn btn-info">
	                </form>
	            </div>
	            <?php else: ?>
                <div class="block">
                    <h3>Login form</h3>
                    <form method="post" action="login.php">
                        <div class="form-group">
                            <label>User name</label>
                            <input type="name" name="username" class="form-control" placeholder="Enter user name">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <button name="login" type="submit" class="btn btn-info">Submit</button>
                        <a href="register.html" class="btn btn-default">Create account</a>
                    </form>
                </div>
                <?php endif;?>
                    <div class="block">
                        <h3>Categories</h3>
                        <div class="list-group">
                            <a href="topics.php" class="list-group-item <?=is_active(null);?>">All Topic <span class="badge pull-right"><?php ?></span></a>
                            <?php foreach (getcategories() as $cate): ?>
                                <a href="topics.php?category=<?=$cate['id'];?>" class="list-group-item <?=is_active($cate['id']);?>">
                                    <?=$cate['name'];?> <span class="badge pull-right"></span></a>
                                <?php endforeach;?>
                        </div>
                    </div>
    </div>
</div>
</div>
</div>
<!-- /.container -->
</body>

</html>