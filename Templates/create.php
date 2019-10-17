<?php include '../includes/header.php';?>
   <form role="form" method="post" action="create.php">
                          <div class="form-group">
                            <label>title</label>
                            <input type="name" name="title"class="form-control"placeholder="title">
                          </div>
                          <div class="form-group">
                            <label>category</label>
                           <select class="form-contol" name="category">
                                <?php foreach (getcategories() as $cate): ?>
                                <option value="<?=$cate['id'];?>"><?=$cate['name'];?></option>
                                 <?php endforeach;?>
                           </select>
                          </div>


                          <div class="form-group">
                            <label>Topic body</label>
                            <textarea id="about" rows="10"cols="80" class="form-control"
                              name="body"></textarea>
                            <script>CKEDITOR.replace('body')</script>
                          </div>
                          <button type="submit" name="topic" class="btn btn-default">submit</button>
                        </form>
                        <br><br><br>
<?php include '../includes/footer.php';