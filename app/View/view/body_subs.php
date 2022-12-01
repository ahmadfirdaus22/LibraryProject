<div class="container">
        <button type="submit" style="margin-bottom: 2%;margin-top:2%;" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white; font-size:20px;" href=<?= OOP\app\Core\Router::url("add_subs") ?>>ADD</a></button>
        <table class="table table-hover" border="1px">
            <tr style="text-align: center; background-color: aqua;">
                <td>NO</td>
                <td>Title</td>
                <td>Month</td>
                <td>Price</td>
                <td>Is Active</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
        <?php $no =1; foreach($data as $row){?>
            <form action="<?= OOP\app\Core\Router::url("delete_subs") ?>" method="post">
                <tr style="text-align: center;">
                    <input hidden type="text" name="id" value="<?= $row->id?>">
                    <td><?= $no++?></td>
                    <td><?= $row->title?></td>
                    <td><?= $row->month?></td>
                    <td><?= $row->price?></td>
                    <td><?php echo $row->is_Active==1 ?"Yes":"No";?></td>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->updated_at?></td>
                    <td><button type="submit" class="btn btn-sm btn-danger"><a style="padding-right:2px;">Delete</a></button>&nbsp;<button class="btn btn-sm btn-info" formaction="<?= OOP\app\Core\Router::url("new_subs/$row->id")?>"><a>Update</a></button></td>
                </tr>
            </form>
                <?php } ?>
