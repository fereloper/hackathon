<!--
<pre>
    <?php echo form_open_multipart('report/submit'); ?>
<form action="<?php echo site_url("report/submit"); ?>" method="POST">
    Name: <input type="text" name="name">
    Email: <input type="text" name="email">
    Contact: <input type="text" name="contact">
    Address: <input type="text" name="address">
    <div id="file-add">
        <span>Files</span>
        <input type="file" name="file-1">
        <input type="file" name="file-2">
    </div>
    
    <input type="submit" value="Submit">
    
</form>
</pre>-->
<div class="row-fluid">
    <div class="span12">
        <h3 class="heading"></h3>
        <div class="row-fluid">
            <div class="span3"></div>
            <div class="span6">
                <?php echo form_open_multipart('report/submit'); ?>
                <fieldset title="Personal info">
                    <legend class="hide"></legend>
                    <div class="formSep control-group">
                        <label for="s_password" class="control-label">City:</label>
                        <div class="controls">
                            <select>
                                <option value="-1">Select City</option>
                                <?php foreach ($cities as $rows) {?><option value="<?php echo $rows['city_id']?>"><?php echo $rows['city_name']?></option><?php } ?>
                                
                            </select>
                        </div>
                    </div>
                    <div class="formSep control-group">
                        <label for="s_password" class="control-label">Thana:</label>
                        <div class="controls">
                            <select name="thana_id">
                            	<option value="-1">Select Thana</option>
                                <?php foreach ($thanas as $rows) {?><option value="<?php echo $rows['thana_id']?>"><?php echo $rows['thana_name']?></option><?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="formSep control-group">
                        <label for="s_password" class="control-label">Company:</label>
                        <div class="controls">
                            <input name="company_name" type="text" />
                        </div>
                    </div>
                    
                    <div class="formSep control-group">
                        <label for="s_password" class="control-label"></label>
                        <div class="controls">
                        	<div id="measurement-set">
                        	</div>
                            <input name="company" class="add-measurement" type="button" value="Add Measurement"/>
                        </div>
                    </div>
                    
                    <div class="formSep control-group">
                        <label for="s_password" class="control-label">Location:</label>
                        <div class="controls" id="map_canvas">
                        	<img src="<?php echo $this->config->item('base_url').'/img/gmap.png' ?>" />
                        </div>
                    </div>
                    
                    <div class="formSep control-group">
                        <label for="s_password" class="control-label">File 1:</label>
                        <div class="controls">
                            <input type="file" name="file-1" id="s_password" />
                        </div>
                    </div>
                    <div class="formSep control-group">
                        <label for="s_password" class="control-label">File 2:</label>
                        <div class="controls">
                            <input type="file" name="file-2" id="s_password" />
                        </div>
                    </div>
                    <div class="formSep control-group">
                        <label for="s_password" class="control-label">File 3:</label>
                        <div class="controls">
                            <input type="file" name="file-3" id="s_password" />
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="4">
                           
                </fieldset>

                <input type="submit" value="Submit Report" class="finish btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
</div>