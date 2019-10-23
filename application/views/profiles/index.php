<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1><?php echo $title ?></h1>
      <div class="row">
        <?php foreach ($profiles as $profile): ?>
          <div class="profiles-container col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 profile-container">
                <h2><a href="index.php/profiles/profile/<?php echo $profile['slug'] ?>"><?php echo $profile['name'] . ' ' . $profile['surname'] ?></a></h2>
            </div>
          </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
