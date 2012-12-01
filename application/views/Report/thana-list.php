           
<select id="thanaList">
    
    <?php foreach ($thanas as $rows) { ?>

        <option value="<?php echo $rows['thana_id']; ?>"><?php echo $rows['thana_name']; ?></option>

    <?php } ?>
</select>