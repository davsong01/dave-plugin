<div class="wrap">
    <?php settings_errors(); ?>

    <!-- <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-1">Manage Settings</a></li>
        <li><a href="#tab-2">Updates</a></li>
        <li><a href="#tab-3">About Me</a></li>
    </ul> -->
<!-- 
    <div class="tab-content">
        <div id="tab-1" class="tab-pane active"> -->

        <h3>
            <form method="post" action="options.php">
                <?php 
                    settings_fields( 'dave_plugin_settings' );
                    do_settings_sections( 'dave_plugin' );
                    submit_button();
                ?>
            </form>
        <!-- </div>

        <div id="tab-2" class="tab-pane">
          
        </div>

        <div id="tab-3" class="tab-pane">
            <h3>Tab 3</h3>
        </div>
    </div> -->
</div>