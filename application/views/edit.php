<h1>Редактировать анкету</h1>
<div class="col-lg-12 form-container">
  <?php var_dump($_FILES['avatar']['name']); ?>
  <?php echo $error;?>
  <?php echo form_open_multipart('editor/edit_user/' . $slug) ?>
  <p><?php echo form_input(['name' => 'name', 'placeholder' => 'Введите имя', 'class' => 'edit-input', 'value' => $profile['name']]) ?></p>
  <p><?php echo form_input(['name' => 'surname', 'placeholder' => 'Введите фамилию', 'class' => 'edit-input', 'value' => $profile['surname']]) ?></p>
  <p><?php echo form_input(['type' => 'email', 'name' => 'email', 'placeholder' => 'Введите почту', 'class' => 'edit-input', 'value' => $profile['email']]) ?></p>
  <p><?php echo form_input(['type' => 'date', 'name' => 'birth', 'placeholder' => 'Дата рождения', 'class' => 'edit-input', 'value' => $profile['birth']]) ?></p>
  <p><?php echo form_input(['name' => 'address', 'placeholder' => 'Ваш адрес', 'class' => 'edit-input', 'value' => $profile['address']]) ?></p>
  <p><?php echo form_input(['name' => 'phone', 'placeholder' => 'Номер телефона', 'class' => 'edit-input', 'value' => $profile['phone']]) ?></p>
  <p><?php echo form_upload(['name' => 'avatar', 'size' => '20']) ?></p>
  <p><?php echo form_submit(['name' => 'submit', 'value' => 'Создать анкету', 'class' => 'edit-submit']) ?></p>
  <?php echo form_close() ?>
</div>
