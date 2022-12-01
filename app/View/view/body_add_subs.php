<form action="<?= OOP\app\Core\Router::url("insert_subs")?>" method="POST">
<div class="container">
    <br>
    <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="month" class="form-label">Month</label>
    <input type="text" class="form-control" id="month" name="month">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text"  autocomplete="off" class="form-control" id="price" name="price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>