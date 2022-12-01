<div class="container">
<form action="<?= OOP\app\Core\Router::url("update_petugas")?>" method="POST">
  <div class="mb-3">
    <input type="text" hidden name="id" value="<?= $data->id ?>">
    <label for="username" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" value="<?= $data->username ?>" id="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" value="<?= $data->name ?>" name="name">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" value="<?= $data->email ?>" name="email">
  </div>
  <div class="mb-3">
    <label for="avatar" class="form-label">Avatar</label>
    <input type="text" class="form-control" id="avatar" value="<?= $data->avatar ?>" name="avatar">
  </div>
  <div class="mb-3">
    <label for="created_at" class="form-label">Create At</label>
    <input type="text" readonly class="form-control" id="avatar" value="<?= $data->created_at ?>" name="created_at">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>