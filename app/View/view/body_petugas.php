<div class="container">
        <button type="submit" style="margin-bottom: 2%;margin-top:2%;" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white; font-size:20px;" href=<?= OOP\app\Core\Router::url("add_petugas") ?>>ADD</a></button>
        <table class="table table-hover" border="1px">
            <tr style="text-align: center; background-color: aqua;">
                <td>NO</td>
                <td>Username</td>
                <td>Name</td>
                <td>Email</td>
                <td>Avatar</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
        <?php $no =1; foreach($data as $row){?>
            <form action="<?= OOP\app\Core\Router::url("delete_petugas") ?>" method="post">
                <tr>
                    <input hidden type="text" name="id" value="<?= $row->id?>">
                    <td><?= $no++?></td>
                    <td><?= $row->username?></td>
                    <td><?= $row->name?></td>
                    <td><?= $row->email?></td>
                    <td><?= $row->avatar?></td>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->updated_at?></td>
                    <td class="d-flex"><button type="submit" class="btn btn-sm btn-danger"><a>Delete</a></button>&nbsp;<button class="btn btn-sm btn-info" formaction="<?= OOP\app\Core\Router::url("new_petugas/$row->id")?>"><a>Update</a></button></td>
                </tr>
            </form>
                <?php } ?>
