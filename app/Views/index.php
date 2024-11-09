<?php echo $this->extend("baseview")?>

<?php echo $this->section("bodyview")?>
    <?php if(empty($notes)): ?>
        <h3 style="color: rgb(113, 119, 125);">You don't have any notes. make some!</h3><br>
    <?php else: ?>
        <?php foreach ($notes as $k=>$v):?>
            <form action="/editnote" method="post">
            <div class="mb-3" style="position:relative;">
                <input type="hidden" name="note" value="<?php echo $v['id']?>">
                <input style="width:100%;" autocomplete="off" autofocus class="form-control" id="judul" name="judul" value="<?php echo $v['judul']?>" type="text">
                <textarea style="width:100%; height:150px;" autocomplete="off" autofocus class="form-control" id="judul" name="isi" type="text"><?php echo $v['isi']?></textarea>
                <span style="position:absolute; right:10px;"><?php echo 'Created on '.$v['created_at']?></span>
            </div>
            <button class="btn btn-primary" name="submit" value="save" type="submit">Save note</button>
            <button class="btn btn-primary" name="submit" value="del" type="submit">Delete note</button>
        </form><br>
        <?php endforeach;?>
    <?php endif; ?>
    <form action="/addnote" method="post">
        <div class="mb-3">
            <input style="width:100%;" autocomplete="off" autofocus class="form-control" id="judul" name="judul" placeholder="add a new note..." type="text">
            <textarea style="width:100%; height:150px" autocomplete="off" autofocus class="form-control" id="judul" name="isi" placeholder="type here..." type="text"></textarea>
        </div>
        <button class="btn btn-primary" name="submit" value="new" type="submit">Add note</button>
    </form>
<?php echo $this->endsection()?>