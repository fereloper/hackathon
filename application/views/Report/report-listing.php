<div id="contentwrapper">
                <div class="main_content">

<div class="row-fluid">
    <div class="span12">
        <h3 class="heading">Industrial Pollution Report</h3>
        <div class="row-fluid">
            
                        <?php
            if (isset($reports)) {
//                ob_clean();
//                echo "<pre>";
//                print_r($reports);
//                die();
                ?>
            <div id="all-list">
                <table class="table table-bordered table-striped table_vam" id="dt_gal">
                    <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Thana</th>
                    <th>Company</th>
                    <th>Files</th>
                    </thead>
                    <tbody>
                        <?php foreach ($reports as $rows) { ?>
                            <tr>
                                <td><?php echo $rows['report_data']['name']; ?></td>
                                <td><?php echo $rows['report_data']['email']; ?></td>
                                <td><?php echo $rows['report_data']['thana_name']; ?></td>
                                <td><?php if(isset($rows['report_data']['company_name']))echo $rows['report_data']['company_name']; else echo "Not Given"; ?></td>
                                <td>
                                    <?php if(isset($rows['files'])){ foreach($rows['files'] as $file){?>
                                    <ul>
                                        <li class="listing-img"><img src="<?php echo $baseurl.'/files/'.$file['filename'] ?>" /></li>
                                    </ul>
                                        
                                    <?php }}else{ echo "No Files!";} ?>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            <?php } else { ?>
                <h3>No Reports</h3>
            <?php } ?>
            <div id="viewReport">


            </div>

        </div>
    </div>
</div>
</div>
</div>