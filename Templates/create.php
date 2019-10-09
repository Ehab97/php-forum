<?php include '../includes/header.php';?>
   <form role="form" >
                          <div class="form-group">
                            <label>title</label>
                            <input type="name" name="title"class="form-control"placeholder="title">
                          </div>
                          <div class="form-group">
                            <label>category</label>
                           <select class="form-contol">
                            <option>Design</option>
                            <option>develop</option>
                            <option>search engines</option>
                            <option>cloud & hosting</option>
                           </select>
                          </div>
                         
                         
                          <div class="form-group">
                            <label>Topic body</label>
                            <textarea id="about" rows="10"cols="80" class="form-control"name="body"></textarea>
                            <script>CKEDITOR.replace('body')</script>
                          </div>
                          <button type="submit" class="btn btn-default">submit</button>
                        </form>
                        <br><br><br>
<?php include '../includes/footer.php';