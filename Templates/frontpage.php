<?php  //include '../includes/header.php';?>
    <ul id="topics">
        <?php if($topics):?>
            <?php foreach ($topics as $topic): ?>
                <li class="topic">
                  <div class="row">
                    <div class="col-md-2">
                      <img class="avatar" height="90"src="<?=BASE_URL;?>Templates/images/<?=$topic['avatar'];?>.png">
                    </div>
                    <div class="col-md-10">
                      <div class="topic-content col-md-12">
                        <h3><a href="topic.php?<?=$topic['id'];?>"><?=$topic['title'];?></a></h3>
                        <div class="topic-info">
                          <a href="topics.php.php?=category<?=urlFormat($topic['category_id']);?>">
                            <?=$topic['name'];?>    
                          </a>
                           >> <a href="topics.php.php?=user<?=urlFormat($topic['user_id']);?>">
                            <?=$topic['username'];?></a> 
                          <span>post on <?= formateDate($topic['create_date']);?></span>
                          <span class="badge pull-right">7</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
          <?php endforeach; ?> 
        <?php else :?>
          <div class="alert-danger">
            no topics to dispaly
          </div>
        <?php endif;?> 
        <!-- second li -->
    </ul>
    <div class="clearfix"></div> 
    <hr>
    <h3>form statistics</h3>
    <ul>
      <li>Total number of users : <strong>52</strong></li>
      <li>Total number of topics : <strong>10</strong></li>
      <li>Total number of categories : <strong>5</strong></li>
    </ul>
<?php //include('../includes/footer.php');?>