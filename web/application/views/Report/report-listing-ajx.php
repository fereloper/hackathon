
        
        <div class="row-fluid">
            
            <div class="span12">
                <?php
                if (isset($result)) {
//    echo "<pre>";
//    print_r($result);
//    die();
                    ?>

                    <table class="table table-bordered table-striped table_vam" id="dt_gal">
                        <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Thana</th>
                        <th>Company</th>
                        <th>Files</th>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $rows) { ?>
                                <tr>
                                    <td><?php echo $rows['report_data']['name']; ?></td>
                                    <td><?php echo $rows['report_data']['email']; ?></td>
                                    <td><?php echo $rows['report_data']['thana_name']; ?></td>
                                    <td><?php if(isset($rows['report_data']['company_name']))echo $rows['report_data']['company_name']; else echo "Not Given"; ?></td>
                                    <td>
                                    
                                        <?php if(isset($rows['files'])){ foreach ($rows['files'] as $file) { ?>
                                            <ul>
                                                <li class="listing-img"><img src="<?php echo $this->config->item('base_url').'/files/'.$file['filename'] ?>" /></li>
                                            </ul>

                                        <?php }}else{ echo "No Files!";} ?>
                                    </td> 

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } else { ?>
                    <h3>No Reports</h3>
                <?php } ?>


            </div>
        </div>
    
