<h1>Анкета</h1>
<div class="col-sm-12">
  <h2><?php echo $name . ' ' . $surname ?></h2>
  <div class="col-sm-4">
    <p><img src="<?php echo base_url($avatar) ?>" alt=""></p>
  </div>
  <div class="col-sm-4 profile-stats">
    <p><b>Дата рождения:</b> <?php echo $birth . '(' . $age . ')' ?></p>
    <p><b>Адрес:</b> <?php echo $address ?></p>
    <p><b>Номер телефона:</b> <?php echo $phone ?></p>
    <p><b>Email:</b> <?php echo $email ?></p>
    <p><a href="<?php echo $edit_link ?>">Редактировать</a></p>
  </div>
</div>
