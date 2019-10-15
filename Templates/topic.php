<?php require_once('../includes/header.php');?>
      <ul id="topics">
              <?php if($replies): ?>
                  <?php foreach ((array)$replies as $replay):?>
                            <li class="topic">
                            <div class="row">
                              <div class="col-md-2">
                                <div class="user-info">
                                  <img class="avatar" height="90"src="<?=BASE_URL;?>Templates/images/<?=$replay['avatar'];?>.png">

                                  <ul>
                                    <li> <a href="topic.php?topic=<?= $replay['user_id']; ?>">
                                      <?= $replay['username'];?></strong></li>
                                    <li><span class="badge"><?=userpostcount($replay['user_id']);?></span>post</li>
                                    <li><a href="<?=BASE_URL;?>topics.php?user=<?=$replay['user_id'];?>">profile</a></li>

                                  </ul>
                                </div>
                              </div>
                              <div class="col-md-10">
                                <div class="topic-content col-md-12">
                                    <p><?= $replay['body'];?></p> 
                                </div>
                                </div>
                              </div>
                            
                          </li>

                  <?php endforeach ;?>  
              <?php else: ?>
                <p>no Replay to display </p>
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