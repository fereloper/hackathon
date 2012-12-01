<div class="row-fluid">
    <div class="span12">
        <h3 class="heading"></h3>
        <div class="row-fluid">
            <div class="span3"></div>
            <div class="span6">
                <h1>Report Subscription</h1>
                <form id="simple_wizard" class="stepy-wizzard form-horizontal" method="POST" action="<?php echo site_url() . '/subscribe/subscribe_post' ?>">
                    <fieldset title="Subscription">
                        <legend class="hide"></legend>
                        <div class="formSep control-group">
                            <select name="city_id">
                                <option id="-1">Select City</option>
                                <?php
                                foreach ($cities as $row) {
                                    ?>
                                    <option value="<?php echo $row['city_id']; ?>" > <?php echo $row['city_name']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>                         
                        </div>


                    </fieldset>
                    <input type="hidden" name="user_id" value="4">

                    <input type="submit" value="Subscribe" class="finish btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
</div>