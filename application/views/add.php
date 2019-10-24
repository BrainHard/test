<h1>Добавить анкету</h1>
<div class="col-lg-12 form-container">
  <?php echo $error;?>
  <?php echo form_open_multipart('editor/add_user') ?>
  <p><?php echo form_input(['name' => 'name', 'placeholder' => 'Введите имя', 'class' => 'edit-input']) ?></p>
  <p><?php echo form_input(['name' => 'surname', 'placeholder' => 'Введите фамилию', 'class' => 'edit-input']) ?></p>
  <p><?php echo form_input(['type' => 'email', 'name' => 'email', 'placeholder' => 'Введите почту', 'class' => 'edit-input']) ?></p>
  <p><?php echo form_input(['type' => 'date', 'name' => 'birth', 'placeholder' => 'Дата рождения', 'class' => 'edit-input']) ?></p>
  <p><?php echo form_input(['name' => 'address', 'placeholder' => 'Ваш адрес', 'class' => 'edit-input']) ?></p>
  <p><?php echo form_input(['name' => 'phone', 'placeholder' => 'Номер телефона', 'class' => 'edit-input']) ?></p>
  <p><?php echo form_upload(['name' => 'avatar', 'size' => '20']) ?></p>
  <p><?php echo form_submit(['name' => 'submit', 'value' => 'Создать анкету', 'class' => 'edit-submit']) ?></p>
  <?php echo form_close() ?>
</div>
