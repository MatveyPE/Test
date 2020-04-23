<!-- resources/views/common/errors.blade.php -->

@<?php if (count($errors)>0) ?>
<div class="alert alert-danger">
  <strong>WOOOPs! </srong>

    <br><br>

    <ul>
      @<?php foreach ($errors->all() as $error): ?>
        <li>{{ $error }}</li>
      <?php endforeach; ?>
    <ul>
  </div>
<?php endif; ?>
