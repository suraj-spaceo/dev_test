<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) form</h2>
  <form action="<?= $action ?>" method="POST">
    <div class="form-group">
      <label for="firstname">First Name:</label>
      <input type="firstname" class="form-control" id="firstname" placeholder="Enter first name" name="firstname" value="<?= $firstname ?>">
    </div>
    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="lastname" class="form-control" id="lastname" placeholder="Enter last name" name="lastname" value="<?= $lastname ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?= $email ?>">
    </div>
    <?php if(count($hobbies) > 0): ?>
        <ul>
            <?php foreach($hobbies as $key => $val): ?>
                <li><input type="checkbox" name="hobbies[]"> <?= $val ?></li>   
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
