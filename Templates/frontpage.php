<?php //include_once(__DIR__.'/includes/header.php');?>
    <ul id="topics">
        <?php if ($topics): ?>
            <?php foreach ($topics as $topic): ?>
                <li class="topic">
                  <div class="row">
                    <div class="col-md-2">
                      <img class="avatar" height="90"src="<?=BASE_URL;?>Templates/images/<?=$topic['avatar'];?>">
                    </div>
                    <div class="col-md-10">
                      <div class="topic-content col-md-12">
                        <h3><a href="topic.php?id=<?=$topic['id'];?>"><?=$topic['title'];?></a></h3>
                        <div class="topic-info">
                          &#9632;
                          <a href="topics.php?category=<?=urlFormat($topic['category_id']);?>">
                            <?=$topic['name'];?>
                          </a>
                           &#9632; <a href="topics.php?user=<?=urlFormat($topic['user_id']);?>">
                            <?=$topic['username'];?></a>
                            &#9632;
                          <span>post on <?=formateDate($topic['create_date']);?></span>
                          <span class="badge pull-right"><?=replycount($topic['id']);?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
          <?php endforeach;?>
        <?php else: ?>
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
      <li>Total number of users : <strong><?=$totalusers;?></strong></li>
      <li>Total number of topics : <strong><?=$totalTopics;?></strong></li>
      <li>Total number of categories : <strong><?=$totalcategories;?></strong></li>
    </ul>
<?php include '../includes/footer.php';?>