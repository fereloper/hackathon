<!--<html>
    <head></head>
    
    <body>
        <form method="post" action="<?php // echo site_url("user/regInputs"); ?>"> 
    <div style="width: 400px; height: 300px; ">
        <div style="width: 20%; height: 70px; float: left"> <label> Full Name:</label> </div>
        <div style="width: 80%; height: 70px; float: right"> <input type="text" name="full_name" /> </div>
        
        <div style="width: 20%; height: 70px; float: left"> <label> Password:</label> </div>
        <div style="width: 80%; height: 70px; float: right"> <input type="password" name="password"/> </div>
        
        <div style="width: 20%; height: 70px; float: left"> <label> Email:</label> </div>
        <div style="width: 80%; height: 70px; float: right"> <input type="text" name="email"/> </div>
        
        
        <div style="width: 20%; height: 70px; float: left"> <input type="submit" name="submit" value="Submit"/> </div>
        <div style="width: 80%; height: 70px; float: right"> <input type="text" id="email"/> </div>
        
    </div>    
        
        </form>
    </body>
</html>-->

<div class="row-fluid">
    <div class="span12">
        <h3 class="heading"></h3>
        <div class="row-fluid">
            <div class="span3"></div>
            <div class="span6">
                <form id="simple_wizard" class="stepy-wizzard form-horizontal" method="post" action="<?php echo site_url("user/regInputs"); ?>">
                    <fieldset title="Personal info">
                        <legend class="hide"></legend>
                        <div class="formSep control-group">
                            <label for="s_username" class="control-label">Name:</label>
                            <div class="controls">
                                <input type="text" name="name" id="s_username" />
                            </div>
                        </div>
                        <div class="formSep control-group">
                            <label for="s_password" class="control-label">Password:</label>
                            <div class="controls">
                                <input type="password" name="password" id="s_password" />
                            </div>
                        </div>
                        <div class="formSep control-group">
                            <label for="s_email" class="control-label">email:</label>
                            <div class="controls">
                                <input type="email" name="email" id="s_password" />
                            </div>
                        </div>

                    </fieldset>

                    <input type="submit" value="Submit" class="finish btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
</div>