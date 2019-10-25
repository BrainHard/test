<div class="col-sm-12">
  <div class="col-sm-4">
    <h1><?php echo $title ?></h1>
  </div>
  <div class="col-sm-4 col-sm-offset-4">
    <div class="search-container">
      <?php echo form_open('search/searching') ?>
      <?php echo form_input(['name' => 'search', 'placeholder' => 'Поиск...', 'class' => 'search-input']) ?>
      <?php echo form_submit(['name' => 'search-submit', 'value' => 'поиск', 'class' => 'search-submit']) ?>
      <?php echo form_close() ?>
    </div>
  </div>
  <div class="row">
    <?php foreach ($profiles as $profile): ?>
      <a href="<?php echo base_url() ?>index.php/profiles/profile/<?php echo $profile['slug'] ?>"><div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="profiles-container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 ">
              <div class="profile-container">
                <img src="<?php echo base_url($profile['avatar']) ?>" alt="">
                <h2><?php echo $profile['name'] . ' ' . $profile['surname'] ?></h2>
              </div>
          </div>
        </div>
      </div>
      </div></a>
    <?php endforeach; ?>
  </div>
</div>
