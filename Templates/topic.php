<?php require_once('../includes/header.php');?>
      <ul id="topics">
              <?php if(@$topic): ?>
                      <li class="topic">
                            <div class="row">
                              <div class="col-md-2">
                                    <img class="avatar" height="90"src="<?=BASE_URL;?>Templates/images/<?=$topic['avatar'];?>.png">
                                 <ul>
                                    <li><strong> <a href="topic.php?topic=<?= $topic['user_id']; ?>">
                                      <?= $topic['username'];?></strong></li>
                                    <li><span class="badge"><?= userpostcount($topic['user_id']);?></span> post</li>
                                    <li><a href="profile.php<?=  $topic['user_id']; ?>">profile</a></li>

                                  </ul>

                              </div>
                              <div class="col-md-10">
                                <div class="topic-content col-md-12">
                                  <p><?= $topic['body'];?></p>
                                </div>
                              </div>
                            </div>
                          </li>
                
                        </ul>
                    <?php else: ?>
                      <p>no topic to display </p>
                    <?php endif; ?>
      </ul>
      <div class="clearfix"></div> 
      <h3>reply to topic</h3>
      <form role="form"> 
        <div class="form-group">
          
          <textarea id="about" rows="10"cols="80" class="form-control"name="body"></textarea>
          <script>CKEDITOR.replace('body')</script>
        </div>
        <button type="submit" class="btn btn-default">submit</button>
      </form>
      <br><br><br>
<?php require_once '../includes/footer.php';?>