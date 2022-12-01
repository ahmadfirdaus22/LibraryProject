<div class="container">
        <button type="submit" style="margin-bottom: 2%;margin-top:2%;" class="btn btn-success btn-lg"><a style="text-decoration: none; color: white; font-size:20px;" href=<?= OOP\app\Core\Router::url("add_member_trx") ?>>ADD</a></button>
        <table class="table table-hover" border="1px">
            <tr style="text-align: center; background-color: aqua;">
                <td>NO</td>
                <td>Member Name</td>
                <td>Subscription Title</td>
                <td>Transaction Date</td>
                <td>Active At</td>
                <td>Expire At</td>
                <td>Status</td>
                <td>Total Order</td>
                <td>Note</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>Action</td>
            </tr>
        <?php $no =1; foreach($data as $row){?>
            <form action="<?= OOP\app\Core\Router::url("delete_member_trx") ?>" method="post">
                <tr>
                    <input hidden type="text" name="id" value="<?= $row->id?>">
                    <input hidden type="text" name="name" value="<?= $row->name?>">
                    <input hidden type="text" name="title" value="<?= $row->title?>">

                    <td><?= $no++?></td>
                    <td><?= $row->name?></td>
                    <td><?= $row->title?></td>
                    <td><?= $row->trx_date?></td>
                    <td><?= $row->active_at?></td>
                    <td><?= $row->expire_at?></td>
                    <td><?php if($row->status=='paid'){echo "Paid";}else{echo "UnPaid";}?></td>
                    <td><?= $row->total_order?></td>
                    <td><?= $row->note?></td>
                    <td><?= $row->created_at?></td>
                    <td><?= $row->updated_at?></td>
                    <td><button type="submit" class="btn btn-sm btn-danger"><a style="padding-right:2px;">Delete</a></button>&nbsp;<button class="btn btn-sm btn-info" formaction="<?= OOP\app\Core\Router::url("new_member_trx/$row->id")?>"><a>Update</a></button></td>
                </tr>
            </form>
                <?php } ?>
