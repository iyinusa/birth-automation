    <div class="rightside">
        <div class="page-head">
            <h1>Dashboard  <small>site metrics</small></h1>
            <ol class="breadcrumb">
                <li>You are here:</li>
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>

        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="custom-box palette-peter-river">
                        <h3 class="timer" data-start="0" data-from="0" data-to="<?php echo $count_centre; ?>" data-speed="3000" data-refresh-interval="10"></h3>
                        <p>Registration Center</p>
                        <i class="fa fa-bullhorn"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="custom-box palette-nephritis">
                        <h3 class="timer" data-start="0" data-from="0" data-to="<?php echo $count_lbirth; ?>" data-speed="3000" data-refresh-interval="10"></h3>
                        <p>Live Birth</p>
                        <i class="fa fa-signal"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="custom-box palette-wet-asphalt">
                        <h3 class="timer" data-start="0" data-from="0" data-to="<?php echo $count_sbirth; ?>" data-speed="3000" data-refresh-interval="10"></h3>
                        <p>Still Birth</p>
                        <i class="fa fa-upload"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="custom-box palette-alizarin">
                        <h3 class="timer" data-start="0" data-from="0" data-to="<?php echo $count_death; ?>" data-speed="3000" data-refresh-interval="10"></h3>
                        <p>Death</p>
                        <i class="fa fa-book"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>