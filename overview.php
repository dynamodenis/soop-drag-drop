<div class="mains">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="header-title">
        Annual Projection
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Budgets and P&L</li>
        <li class="header-title">Annual Projection</li>
      </ol>
    </section>

    <!-- Sub Menu -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-solid">

            <div class="box-header bg-teal">

              <h3 class="box-title month-year">Months Reported in Budget</h3>
              <span>
                <?php
                echo "<select class='input-p5 width-auto' onchange='current_year()' id='current_year' name='fromYear'";
                $starting_year  = date('Y', strtotime('-50 year'));
                $ending_year = date('Y', strtotime('+10 year'));
                $current_year = date('Y');
                for ($starting_year; $starting_year <= $ending_year; $starting_year++) {
                  echo '<option value="' . $starting_year . '"';
                  if ($starting_year ==  $current_year) {
                    echo ' selected="selected"';
                  }
                  echo ' >' . $starting_year . '</option>';
                }
                echo '<select>';
                ?>
              </span>
              <span style="float:right; margin:5px;" title="Export to Excel" onclick="exportTableToCSV('overview.csv')"><a class="btn"><i class="fa fa-file-excel-o" style="font-size:1.5rem;" aria-hidden="true"></i></a></span>
              <span style="float:right; margin:10px;"><a href="overview/mypdf" class='d-inline-block table-link table-link__pdf' target='_blank' title="View PDF"><i class='fa fa-file-pdf-o' aria-hidden='true'></i></a></span>

              <!-- <div class="box-tools pull-right">
              <a href="" class="btn btn-default bg-green">Monthly View</a>
            </div> -->

            </div>

            <div class="separator"></div>

            <div class="scroller-x">

              <table class="uncompressed-table table-bordered" id="example1">

                <!--<table id="example1" class="table table-hover table-bordered">-->
                <thead>
                  <tr class="exportexcel">
                    <!-- table-striped  -->

                    <th></th>
                    <th class="font-bold ta-center">Jan</th>
                    <th></th>
                    <th class="font-bold ta-center">Feb</th>
                    <th></th>
                    <th class="font-bold ta-center">March</th>
                    <th></th>
                    <th class="font-bold ta-center">Apr</th>
                    <th></th>
                    <th class="font-bold ta-center">May</th>
                    <th></th>
                    <th class="font-bold ta-center">Jun</th>
                    <th></th>
                    <th class="font-bold ta-center">Jul</th>
                    <th></th>
                    <th class="font-bold ta-center">Aug</th>
                    <th></th>
                    <th class="font-bold ta-center">Sep</th>
                    <th></th>
                    <th class="font-bold ta-center">Oct</th>
                    <th></th>
                    <th class="font-bold ta-center">Nov</th>
                    <th></th>
                    <th class="font-bold ta-center">Dec</th>
                    <th></th>
                    <th class="font-bold ta-center">Cummulative Total</th>

                  </tr>
                </thead>
                <tbody>
                  <tr class="exportexcel">
                    <th colspan="26" class="bg-gray-light">REVENUE</th>
                  </tr>

                  <?php

                  if ($services->num_rows() > 0) {
                    # if number of meal timing records is 1 or above , populate the records

                    $row_index = 0;

                    foreach ($services->result() as $row) {

                      $row_index++;

                  ?>


                      <tr class="exportexcel">


                        <td><?php echo $row->MEAL_NAME; ?></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_1"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_1"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_2"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_2"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_3"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_3"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_4"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_4"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_5"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_5"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_6"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_6"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_7"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_7"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_8"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_8"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_9"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_9"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_10"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_10"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_11"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_11"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_12"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_12"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("rev_" . $row_index . "_total"); ?>">0.00</span><span class="pull-right text-blue <?php echo htmlspecialchars("rev_percent_" . $row_index . "_total"); ?>"></span></td>

                      </tr>

                  <?php

                    }
                  }

                  ?>

                  <tr class="exportexcel">
                    <td>Outlet Food Revenue</th>
                    <td><span class="pull-right outlet_food_rev_1">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_1">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_2">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_2">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_3">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_3">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_4">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_4">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_5">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_5">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_6">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_6">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_7">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_7">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_8">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_8">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_9">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_9">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_10">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_10">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_11">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_11">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_12">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_food_percent_rev_12">0%</span></td>
                    <td><span class="pull-right outlet_food_rev_total">0.00</span><span class="pull-right text-blue outlet_food_percent_rev_total"></span></td>
                  </tr>

                  <tr class="exportexcel">

                    <td>Outlet Beverage Revenue</th>
                    <td><span class="pull-right outlet_beverage_rev_1">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_1">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_2">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_2">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_3">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_3">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_4">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_4">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_5">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_5">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_6">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_6">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_7">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_7">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_8">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_8">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_9">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_9">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_10">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_10">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_11">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_11">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_12">0.00</span></td>
                    <td><span class="pull-right text-blue outlet_beverage_percent_rev_12">0%</span></td>
                    <td><span class="pull-right outlet_beverage_rev_total">0.00</span><span class="pull-right text-blue outlet_beverage_percent_rev_total"></span></td>

                  </tr>

                  <!--End of Revenues table-->

                  <tr class="exportexcel">
                    <th colspan="26" class="bg-gray-light">OTHER REVENUE</th>
                  </tr>
                  <?php

                  if ($other_rev->num_rows() > 0) {
                    # if number of meal timing records is 1 or above , populate the records

                    $row_index = 0;

                    foreach ($other_rev->result() as $row) {

                      $row_index++;

                  ?>
                      <tr class="exportexcel">

                        <td><?php echo $row->COST_CENTER; ?></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_1"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_1"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_2"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_2"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_3"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_3"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_4"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_4"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_5"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_5"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_6"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_6"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_7"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_7"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_8"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_8"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_9"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_9"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_10"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_10"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_11"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_11"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_12"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_12"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("other_rev_" . $row_index . "_total"); ?>">0.00</span><span class="pull-right text-blue <?php echo htmlspecialchars("other_rev_percent_" . $row_index . "_total"); ?>"></span></td>

                      </tr>



                  <?php

                    }
                  }

                  ?>
                  <tr class="bg-gray-light exportexcel" >
                    <th>TOTAL REVENUE</th>
                    <td><span class="pull-right total_rev_1">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_2">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_3">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_4">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_5">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_6">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_7">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_8">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_9">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_10">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_11">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_12">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_rev_total">0.00</span><span class="pull-right text-blue"></span></td>
                  </tr>

                  <!--End of Other Revenues table-->

                  <tr>
                    <th colspan="26"></th>
                  </tr>
                  <tr class="exportexcel">
                    <th colspan="26" class="bg-gray-light">COST OF SALES</th>
                  </tr>
                  <tr class="exportexcel">
                    <td>Cost of Food Sales</td>
                    <td><span class="pull-right cos_fd_1">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_1">0%</span></td>
                    <td><span class="pull-right cos_fd_2">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_2">0%</span></td>
                    <td><span class="pull-right cos_fd_3">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_3">0%</span></td>
                    <td><span class="pull-right cos_fd_4">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_4">0%</span></td>
                    <td><span class="pull-right cos_fd_5">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_5">0%</span></td>
                    <td><span class="pull-right cos_fd_6">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_6">0%</span></td>
                    <td><span class="pull-right cos_fd_7">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_7">0%</span></td>
                    <td><span class="pull-right cos_fd_8">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_8">0%</span></td>
                    <td><span class="pull-right cos_fd_9">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_9">0%</span></td>
                    <td><span class="pull-right cos_fd_10">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_10">0%</span></td>
                    <td><span class="pull-right cos_fd_11">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_11">0%</span></td>
                    <td><span class="pull-right cos_fd_12">0.00</span></td>
                    <td><span class="pull-right text-blue cos_fd_percent_12">0%</span></td>
                    <td><span class="pull-right cos_fd_total">0.00</span><span class="pull-right text-blue cos_fd_percent_total"></span></td>
                  </tr>
                  <trclass="exportexcel">
                    <td>Cost of Beverage Sales</td>
                    <td><span class="pull-right cos_bev_1">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_1">0%</span></td>
                    <td><span class="pull-right cos_bev_2">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_2">0%</span></td>
                    <td><span class="pull-right cos_bev_3">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_3">0%</span></td>
                    <td><span class="pull-right cos_bev_4">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_4">0%</span></td>
                    <td><span class="pull-right cos_bev_5">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_5">0%</span></td>
                    <td><span class="pull-right cos_bev_6">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_6">0%</span></td>
                    <td><span class="pull-right cos_bev_7">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_7">0%</span></td>
                    <td><span class="pull-right cos_bev_8">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_8">0%</span></td>
                    <td><span class="pull-right cos_bev_9">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_9">0%</span></td>
                    <td><span class="pull-right cos_bev_10">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_10">0%</span></td>
                    <td><span class="pull-right cos_bev_11">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_11">0%</span></td>
                    <td><span class="pull-right cos_bev_12">0.00</span></td>
                    <td><span class="pull-right text-blue cos_bev_percent_12">0%</span></td>
                    <td><span class="pull-right cos_bev_total">0.00</span><span class="pull-right text-blue cos_bev_percent_total"></span></td>
                  </trclass=>
                  <tr class="exportexcel">
                    <td>Spoilage / Waste</td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span></td>
                    <td><span></span><span></span></td>
                  </tr>

                  <tr class="exportexcel">
                    <th colspan="26" class="bg-gray-light">Cost of Other Revenue</th>
                  </tr>


                  <?php

                  if ($other_rev->num_rows() > 0) {
                    # if number of meal timing records is 1 or above , populate the records

                    $row_index = 0;

                    foreach ($other_rev->result() as $row) {

                      $row_index++;

                  ?>
                      <tr class="exportexcel">

                        <td><?php echo "Cost of " . $row->COST_CENTER; ?></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_1"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_1"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_2"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_2"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_3"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_3"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_4"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_4"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_5"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_5"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_6"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_6"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_7"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_7"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_8"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_8"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_9"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_9"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_10"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_10"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_11"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_11"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_12"); ?>">0.00</span></td>
                        <td><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_12"); ?>">0%</span></td>
                        <td><span class="pull-right <?php echo htmlspecialchars("cos_other_" . $row_index . "_total"); ?>">0.00</span><span class="pull-right text-blue <?php echo htmlspecialchars("cos_other_percent_" . $row_index . "_total"); ?>"></span></td>

                      </tr>

                  <?php

                    }
                  }

                  ?>


                  <tr class="bg-gray-light" class="exportexcel">
                    <th>TOTAL COST</th>
                    <td><span class="pull-right total_cost_1">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_2">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_3">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_4">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_5">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_6">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_7">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_8">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_9">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_10">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_11">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_12">0.00</span></td>
                    <td><span class="pull-right text-blue">100%</span></td>
                    <td><span class="pull-right total_cost_total">0.00</span><span class="pull-right text-blue"></span></td>
                  </tr>

                  <!--End of Cost of sales table-->
                  <tr class="exportexcel">
                    <th colspan="26"></th>
                  </tr>
                  <tr>
                    <th colspan="26"></th>
                  </tr>

                  <tr class="bg-gray-light exportexcel ">
                    <th>GROSS PROFIT</th>
                    <th><span class="pull-right gross_profit_1">0.00</span></th>
                    <th><span class="gross_profit_percent_1 pull-right">0.00</span></th>

                    <th><span class="pull-right gross_profit_2">0.00</span></th>
                    <th><span class="gross_profit_percent_2 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_3">0.00</span></th>
                    <th><span class="gross_profit_percent_3 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_4">0.00</span></th>
                    <th><span class="gross_profit_percent_4 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_5">0.00</span></th>
                    <th><span class="gross_profit_percent_5 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_6">0.00</span></th>
                    <th><span class="gross_profit_percent_6 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_7">0.00</span></th>
                    <th><span class="gross_profit_percent_7 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_8">0.00</span></th>
                    <th><span class="gross_profit_percent_8 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_9">0.00</span></th>
                    <th><span class="gross_profit_percent_9 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_10">0.00</span></th>
                    <th><span class="gross_profit_percent_10 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_11">0.00</span></th>
                    <th><span class="gross_profit_percent_11 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_12">0.00</span></th>
                    <th><span class="gross_profit_percent_12 pull-right">0.00</span></th>
                    <th><span class="pull-right gross_profit_total">0.00</span></th>
                  </tr>
                  <tr class="exportexcel">
                    <th colspan="26" class="bg-gray-light">LABOUR</th>
                  </tr>
                  <tr class="exportexcel">
                    <th colspan="26"></th>
                  </tr>
                  <tr class="exportexcel">
                    <th colspan="26" class="bg-gray-light">Front Of House Labour Cost</th>
                  </tr>

                  <?php

                  //print_r($get_foh_full->result());
                  function formatMoney($number, $fractional = false)
                  {

                    if ($fractional) {
                      $number = sprintf('%.2f', $number);
                    }
                    while (true) {
                      $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
                      if ($replaced != $number) {
                        $number = $replaced;
                      } else {
                        break;
                      }
                    }
                    return $number;
                  }

                  $total_foh = 0;

                  if ($get_foh_full->num_rows() > 0) {

                    $total_amount = 0;

                    foreach ($get_foh_full->result() as $row) {

                      $amount = $row->MONTHLY_PAY;

                      $total_amount += $amount;
                    }

                    $total_foh = $total_foh + $total_amount;
                  }



                  if ($get_foh_contract->num_rows() > 0) {

                    $temp_amount = 0;

                    foreach ($get_foh_contract->result() as $row) {

                      $amount = $row->MONTHLY_PAY;

                      $temp_amount += $amount;
                    }

                    $total_foh = $total_foh + $temp_amount;
                  }






                  ?>


                  <tr class="exportexcel">
                    <td>Salary</td>
                    <td><span class="pull-right s_foh_1"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_1">0%</span></td>
                    <td><span class="pull-right s_foh_2"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_2">0%</span></td>
                    <td><span class="pull-right s_foh_3"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_3">0%</span></td>
                    <td><span class="pull-right s_foh_4"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_4">0%</span></td>
                    <td><span class="pull-right s_foh_5"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_5">0%</span></td>
                    <td><span class="pull-right s_foh_6"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_6">0%</span></td>
                    <td><span class="pull-right s_foh_7"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_7">0%</span></td>
                    <td><span class="pull-right s_foh_8"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_8">0%</span></td>
                    <td><span class="pull-right s_foh_9"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_9">0%</span></td>
                    <td><span class="pull-right s_foh_10"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_10">0%</span></td>
                    <td><span class="pull-right s_foh_11"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_11">0%</span></td>
                    <td><span class="pull-right s_foh_12"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_foh_per_12">0%</span></td>
                    <td><span class="pull-right s_foh_total"><?php echo formatMoney(($total_amount * 12), true); ?></span></td>
                  </tr>
                  <tr class="exportexcel">
                    <td>Temporary & Contractors</td>
                    <td><span class="pull-right temp_foh_1"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_1">0%</span></td>
                    <td><span class="pull-right temp_foh_2"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_2">0%</span></td>
                    <td><span class="pull-right temp_foh_3"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_3">0%</span></td>
                    <td><span class="pull-right temp_foh_4"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_4">0%</span></td>
                    <td><span class="pull-right temp_foh_5"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_5">0%</span></td>
                    <td><span class="pull-right temp_foh_6"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_6">0%</span></td>
                    <td><span class="pull-right temp_foh_7"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_7">0%</span></td>
                    <td><span class="pull-right temp_foh_8"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_8">0%</span></td>
                    <td><span class="pull-right temp_foh_9"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_9">0%</span></td>
                    <td><span class="pull-right temp_foh_10"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_10">0%</span></td>
                    <td><span class="pull-right temp_foh_11"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_11">0%</span></td>
                    <td><span class="pull-right temp_foh_12"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_foh_per_12">0%</span></td>
                    <td><span class="pull-right temp_foh_total"><?php echo formatMoney(($temp_amount * 12), true); ?></span></td>
                  </tr>


                  <?php

                  $value = 0;

                  if ($get_foh_benefits->num_rows() > 0) {


                    $row_index = 0;

                    foreach ($get_foh_benefits->result() as $row) {

                      $row_index++;

                      $name = $row->BENEFIT_NAME;

                      $amount = $row->VALUE;

                      $value = $amount;

                  ?>

                      <tr class="exportexcel">
                        <td><?php echo $name; ?></td>
                        <td><span class="pull-right benefit_foh_1_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_1_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_2_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_2_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_3_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_3_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_4_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_4_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_5_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_5_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_6_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_6_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_7_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_7_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_8_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_8_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_9_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_9_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_10_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_10_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_11_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_11_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_12_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_foh_per_12_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_foh_total_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount * 12, true); ?></span></td>
                      </tr>

                  <?php

                    }
                  }

                  $total_foh = $total_foh + $value;



                  ?>


                  <tr class="exportexcel">
                    <td>Total FOH Labour Cost</td>
                    <td><span class="pull-right total_foh_1"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_1">0%</span></td>
                    <td><span class="pull-right total_foh_2"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_2">0%</span></td>
                    <td><span class="pull-right total_foh_3"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_3">0%</span></td>
                    <td><span class="pull-right total_foh_4"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_4">0%</span></td>
                    <td><span class="pull-right total_foh_5"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_5">0%</span></td>
                    <td><span class="pull-right total_foh_6"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_6">0%</span></td>
                    <td><span class="pull-right total_foh_7"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_7">0%</span></td>
                    <td><span class="pull-right total_foh_8"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_8">0%</span></td>
                    <td><span class="pull-right total_foh_9"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_9">0%</span></td>
                    <td><span class="pull-right total_foh_10"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_10">0%</span></td>
                    <td><span class="pull-right total_foh_11"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_11">0%</span></td>
                    <td><span class="pull-right total_foh_12"><?php echo formatMoney($total_foh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_foh_per_12">0%</span></td>
                    <td><span class="pull-right total_foh_total"><?php echo formatMoney(($total_foh * 12), true); ?></span></td>
                  </tr>

                  <tr class="exportexcel">
                    <th colspan="26" class="bg-gray-light">Back Of House Labour Cost</th>
                  </tr>

                  <?php

                  $total_boh = 0;


                  if ($get_boh_full->num_rows() > 0) {

                    $total_amount = 0;

                    foreach ($get_boh_full->result() as $row) {

                      $amount = $row->MONTHLY_PAY;

                      $total_amount += $amount;
                    }
                  }

                  $total_boh = $total_boh + $total_amount;

                  if ($get_boh_contract->num_rows() > 0) {

                    $temp_amount = 0;

                    foreach ($get_boh_contract->result() as $row) {

                      $amount = $row->MONTHLY_PAY;

                      $temp_amount += $amount;
                    }
                  }


                  $total_boh = $total_boh + $temp_amount;

                  ?>

                  <tr class="exportexcel">
                    <td>Salary</td>
                    <td><span class="pull-right s_boh_1"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_1">0%</span></td>
                    <td><span class="pull-right s_boh_2"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_2">0%</span></td>
                    <td><span class="pull-right s_boh_3"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_3">0%</span></td>
                    <td><span class="pull-right s_boh_4"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_4">0%</span></td>
                    <td><span class="pull-right s_boh_5"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_5">0%</span></td>
                    <td><span class="pull-right s_boh_6"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_6">0%</span></td>
                    <td><span class="pull-right s_boh_7"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_7">0%</span></td>
                    <td><span class="pull-right s_boh_8"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_8">0%</span></td>
                    <td><span class="pull-right s_boh_9"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_9">0%</span></td>
                    <td><span class="pull-right s_boh_10"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_10">0%</span></td>
                    <td><span class="pull-right s_boh_11"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_11">0%</span></td>
                    <td><span class="pull-right s_boh_12"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_boh_per_12">0%</span></td>
                    <td><span class="pull-right s_boh_total"><?php echo formatMoney(($total_amount * 12), true); ?></span></td>
                  </tr>
                  <tr class="exportexcel">
                    <td>Temporary & Contractors</td>
                    <td><span class="pull-right temp_boh_1"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_1">0%</span></td>
                    <td><span class="pull-right temp_boh_2"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_2">0%</span></td>
                    <td><span class="pull-right temp_boh_3"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_3">0%</span></td>
                    <td><span class="pull-right temp_boh_4"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_4">0%</span></td>
                    <td><span class="pull-right temp_boh_5"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_5">0%</span></td>
                    <td><span class="pull-right temp_boh_6"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_6">0%</span></td>
                    <td><span class="pull-right temp_boh_7"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_7">0%</span></td>
                    <td><span class="pull-right temp_boh_8"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_8">0%</span></td>
                    <td><span class="pull-right temp_boh_9"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_9">0%</span></td>
                    <td><span class="pull-right temp_boh_10"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_10">0%</span></td>
                    <td><span class="pull-right temp_boh_11"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_11">0%</span></td>
                    <td><span class="pull-right temp_boh_12"><?php echo formatMoney($temp_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue temp_boh_per_12">0%</span></td>
                    <td><span class="pull-right temp_boh_total"><?php echo formatMoney(($temp_amount * 12), true); ?></span></td>
                  </tr>

                  <?php

                  $value = 0;

                  if ($get_boh_benefits->num_rows() > 0) {

                    $row_index = 0;

                    foreach ($get_boh_benefits->result() as $row) {

                      $row_index++;

                      $name = $row->BENEFIT_NAME;

                      $amount = $row->VALUE;

                      $value = $amount;

                  ?>

                      <tr class="exportexcel">
                        <td><?php echo $name; ?></td>
                        <td><span class="pull-right benefit_boh_1_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_1_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_boh_2_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_2_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_boh_3_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_3_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_boh_4_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_4_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_boh_5_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_5_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_boh_6_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_6">0%</span></td>
                        <td><span class="pull-right benefit_boh_7_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_7">0%</span></td>
                        <td><span class="pull-right benefit_boh_8_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_8">0%</span></td>
                        <td><span class="pull-right benefit_boh_9_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_9_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_boh_10_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_10_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_boh_11_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_11_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_boh_12_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_boh_per_12_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_boh_total_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount * 12, true); ?></span></td>
                      </tr>

                  <?php

                    }
                  }


                  $total_boh = $total_boh + $value;


                  ?>
                  <tr class="exportexcel">
                    <td>Total BOH Labour Cost</td>
                    <td><span class="pull-right total_boh_1"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_1">0%</span></td>
                    <td><span class="pull-right total_boh_2"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_2">0%</span></td>
                    <td><span class="pull-right total_boh_3"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_3">0%</span></td>
                    <td><span class="pull-right total_boh_4"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_4">0%</span></td>
                    <td><span class="pull-right total_boh_5"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_5">0%</span></td>
                    <td><span class="pull-right total_boh_6"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_6">0%</span></td>
                    <td><span class="pull-right total_boh_7"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_7">0%</span></td>
                    <td><span class="pull-right total_boh_8"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_8">0%</span></td>
                    <td><span class="pull-right total_boh_9"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_9">0%</span></td>
                    <td><span class="pull-right total_boh_10"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_10">0%</span></td>
                    <td><span class="pull-right total_boh_11"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_11">0%</span></td>
                    <td><span class="pull-right total_boh_12"><?php echo formatMoney($total_boh, true); ?></span></td>
                    <td><span class="pull-right text-blue total_boh_per_12">0%</span></td>
                    <td><span class="pull-right total_boh_total"><?php echo formatMoney(($total_boh * 12), true); ?></span></td>
                  </tr>

                  <tr>
                    <th colspan="26" class="bg-gray-light">Office Labour Cost</th>
                  </tr>

                  <?php

                  $total_office = 0;


                  if ($get_office->num_rows() > 0) {

                    $total_amount = 0;

                    foreach ($get_office->result() as $row) {

                      $amount = $row->MONTHLY_PAY;

                      $total_amount += $amount;
                    }
                  }

                  $total_office = $total_office + $total_amount;

                  ?>

                  <tr class="exportexcel">
                    <td>Salary</td>
                    <td><span class="pull-right s_office_1"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_1">0%</span></td>
                    <td><span class="pull-right s_office_2"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_2">0%</span></td>
                    <td><span class="pull-right s_office_3"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_3">0%</span></td>
                    <td><span class="pull-right s_office_4"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_4">0%</span></td>
                    <td><span class="pull-right s_office_5"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_5">0%</span></td>
                    <td><span class="pull-right s_office_6"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_6">0%</span></td>
                    <td><span class="pull-right s_office_7"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_7">0%</span></td>
                    <td><span class="pull-right s_office_8"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_8">0%</span></td>
                    <td><span class="pull-right s_office_9"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_9">0%</span></td>
                    <td><span class="pull-right s_office_10"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_10">0%</span></td>
                    <td><span class="pull-right s_office_11"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_11">0%</span></td>
                    <td><span class="pull-right s_office_12"><?php echo formatMoney($total_amount, true); ?></span></td>
                    <td><span class="pull-right text-blue s_office_per_12">0%</span></td>
                    <td><span class="pull-right s_office_total"><?php echo formatMoney(($total_amount * 12), true); ?></span></td>
                  </tr>

                  <?php

                  $value = 0;

                  if ($get_office_benefits->num_rows() > 0) {

                    $row_index = 0;

                    foreach ($get_office_benefits->result() as $row) {

                      $row_index++;

                      $name = $row->BENEFIT_NAME;

                      $amount = $row->VALUE;

                      $value = $amount;

                  ?>

                      <tr class="exportexcel">
                        <td><?php echo $name; ?></td>
                        <td><span class="pull-right benefit_office_1_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_1_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_2_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_2_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_3_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_3_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_4_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_4_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_5_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_5_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_6_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_6_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_7_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_7_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_8_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_8_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_9_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_9_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_10_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_10_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_11_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_11_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_12_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount, true); ?></span></td>
                        <td><span class="pull-right text-blue benefit_office_per_12_<?php echo htmlspecialchars($row_index); ?>">0%</span></td>
                        <td><span class="pull-right benefit_office_total_<?php echo htmlspecialchars($row_index); ?>"><?php echo formatMoney($amount * 12, true); ?></span></td>
                      </tr>

                  <?php

                    }
                  }

                  $total_office = $total_office + $value;



                  ?>

                  <tr class="exportexcel">
                    <td>Total Office Labour Cost</td>
                    <td><span class="pull-right total_office_1"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_1">0%</span></td>
                    <td><span class="pull-right total_office_2"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_2">0%</span></td>
                    <td><span class="pull-right total_office_3"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_3">0%</span></td>
                    <td><span class="pull-right total_office_4"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_4">0%</span></td>
                    <td><span class="pull-right total_office_5"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_5">0%</span></td>
                    <td><span class="pull-right total_office_6"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_6">0%</span></td>
                    <td><span class="pull-right total_office_7"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_7">0%</span></td>
                    <td><span class="pull-right total_office_8"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_8">0%</span></td>
                    <td><span class="pull-right total_office_9"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_9">0%</span></td>
                    <td><span class="pull-right total_office_10"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_10">0%</span></td>
                    <td><span class="pull-right total_office_11"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_11">0%</span></td>
                    <td><span class="pull-right total_office_12"><?php echo formatMoney($total_office, true); ?></span></td>
                    <td><span class="pull-right text-blue total_office_per_12">0%</span></td>
                    <td><span class="pull-right total_office_total"><?php echo formatMoney(($total_office * 12), true); ?></span></td>
                  </tr>
                  <?php

                  $total_labour = $total_foh + $total_boh + $total_office;

                  ?>

                  <tr class="bg-gray-light exportexcel">
                    <th>TOTAL LABOUR COST</th>
                    <td><span class="pull-right total_labour_1"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_1">0%</span></td>
                    <td><span class="pull-right total_labour_2"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_2">0%</span></td>
                    <td><span class="pull-right total_labour_3"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_3">0%</span></td>
                    <td><span class="pull-right total_labour_4"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_4">0%</span></td>
                    <td><span class="pull-right total_labour_5"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_5">0%</span></td>
                    <td><span class="pull-right total_labour_6"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_6">0%</span></td>
                    <td><span class="pull-right total_labour_7"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_7">0%</span></td>
                    <td><span class="pull-right total_labour_8"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_8">0%</span></td>
                    <td><span class="pull-right total_labour_9"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_9">0%</span></td>
                    <td><span class="pull-right total_labour_10"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_10">0%</span></td>
                    <td><span class="pull-right total_labour_11"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_11">0%</span></td>
                    <td><span class="pull-right total_labour_12"><?php echo formatMoney($total_labour, true) ?></span></td>
                    <td><span class="pull-right text-blue total_labour_percent_12">0%</span></td>
                    <td><span class="pull-right total_labour_total"><?php echo formatMoney(($total_labour * 12), true) ?></span></td>
                  </tr>

                  <!--End of Labour table-->
                  <tr class="exportexcel">
                    <th colspan="26"></th>
                  </tr>
                  <tr class="exportexcel">
                    <th colspan="26" class="bg-gray-light">EXPENSES</th>
                  </tr>

                  <?php

                  if ($expenses->num_rows() > 0) {
                    # if number of meal timing records is 1 or above , populate the records

                    $row_index = 0;

                    foreach ($expenses->result() as $row) {

                      $row_index++;

                  ?>
                      <tr class="exportexcel">

                        <td><?php echo $row->EXPENSES_LINE; ?></td>
                        <td class="">

                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 1, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 <?php echo htmlspecialchars("expenses_" . $row_index . "_1"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_1"); ?>" name="">
                        </td>
                        <td>

                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_1"); ?>">0%</span>
                        </td>
                        <td>

                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 2, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 <?php echo htmlspecialchars("expenses_" . $row_index . "_2"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_2"); ?>" name="">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_2"); ?>">0%</span>
                        </td>
                        <td>

                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 3, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 right <?php echo htmlspecialchars("expenses_" . $row_index . "_3"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_3"); ?>" name="">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_3"); ?>">0%</span>
                        </td>
                        <td>
                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 4, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 right <?php echo htmlspecialchars("expenses_" . $row_index . "_4"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_4"); ?>" name="">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_4"); ?>">0%</span>
                        </td>
                        <td>
                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 5, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 right <?php echo htmlspecialchars("expenses_" . $row_index . "_5"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_5"); ?>" name="">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_5"); ?>">0%</span>
                        </td>
                        <td>
                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 6, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 right <?php echo htmlspecialchars("expenses_" . $row_index . "_6"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_6"); ?>" name="">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_6"); ?>">0%</span>
                        </td>

                        <td>
                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 7, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 right <?php echo htmlspecialchars("expenses_" . $row_index . "_7"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_7"); ?>" name="">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_7"); ?>">0%</span>
                        </td>
                        <td>
                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 8, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 right <?php echo htmlspecialchars("expenses_" . $row_index . "_8"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_8"); ?>" name="">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_8"); ?>">0%</span>
                        </td>
                        <td>
                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 9, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 right <?php echo htmlspecialchars("expenses_" . $row_index . "_9"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_9"); ?>" name="">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_9"); ?>">0%</span>
                        </td>
                        <td>
                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 10, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 right <?php echo htmlspecialchars("expenses_" . $row_index . "_10"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_10"); ?>" name="">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_10"); ?>">0%</span>
                        </td>
                        <td>
                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 11, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 right <?php echo htmlspecialchars("expenses_" . $row_index . "_11"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_11"); ?>" name="">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_11"); ?>">0%</span>
                        </td>
                        <td>
                          <input type="text" onkeyup="expenses(<?php echo $row_index; ?>, 12, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="" class="ta-right nopadds_form_2 right <?php echo htmlspecialchars("expenses_" . $row_index . "_12"); ?>" id="<?php echo htmlspecialchars("expenses_" . $row_index . "_12"); ?>" name=""></td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("expenses_percent_" . $row_index . "_12"); ?>">0%</span>
                        </td>

                        <td><span class="pull-right <?php echo htmlspecialchars("expenses_" . $row_index . "_total"); ?>">0.00</span></td>

                      </tr>

                  <?php

                    }
                  }

                  ?>

                  <tr class="bg-gray-light exportexcel">
                    <th>Total</th>
                    <th><span class="pull-right total_main_expenses_1"></span></th>
                    <th><span class="total_main_expenses_percent_1 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_2"></span></th>
                    <th><span class="total_main_expenses_percent_2 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_3"></span></th>
                    <th><span class="total_main_expenses_percent_3 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_4"></span></th>
                    <th><span class="total_main_expenses_percent_4 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_5"></span></th>
                    <th><span class="total_main_expenses_percent_5 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_6"></span></th>
                    <th><span class="total_main_expenses_percent_6 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_7"></span></th>
                    <th><span class="total_main_expenses_percent_7 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_8"></span></th>
                    <th><span class="total_main_expenses_percent_8 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_9"></span></th>
                    <th><span class="total_main_expenses_percent_9 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_10"></span></th>
                    <th><span class="total_main_expenses_percent_10 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_11"></span></th>
                    <th><span class="total_main_expenses_percent_11 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_12"></span></th>
                    <th><span class="total_main_expenses_percent_12 pull-right">0%</span></th>
                    <th><span class="pull-right total_main_expenses_total"></span></th>
                  </tr>

                  <tr class="bg-gray-light exportexcel">
                    <th colspan="26">OTHER EXPENSES</th>
                  </tr>
                  <tr class="bg-gray-light exportexcel">
                    <th colspan="26">Utilities</th>
                  </tr>
                  <?php

                  if ($other_expenses->num_rows() > 0) {
                    # if number of meal timing records is 1 or above , populate the records

                    $row_index = 0;

                    foreach ($other_expenses->result() as $row) {

                      $row_index++;
                  ?>
                      <tr class="exportexcel">
                        <td><?php echo $row->EXPENSES_LINE; ?></td>

                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 1, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_1"); ?>">

                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_1"); ?>">0%</span>

                        </td>
                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 2, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_2"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_2"); ?>">0%</span>

                        </td>

                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 3, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_3"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_3"); ?>">0%</span>

                        </td>


                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 4, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_4"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_4"); ?>">0%</span>

                        </td>
                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 5, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_5"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_5"); ?>">0%</span>

                        </td>

                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 6, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_6"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_6"); ?>">0%</span>

                        </td>

                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 7, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_7"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_7"); ?>">0%</span>

                        </td>

                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 8, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_8"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_8"); ?>">0%</span>

                        </td>
                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 9, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_9"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_9"); ?>">0%</span>

                        </td>

                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 10, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_10"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_10"); ?>">0%</span>

                        </td>

                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 11, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_11"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_11"); ?>">0%</span>

                        </td>

                        <td>

                          <input type="text" onkeyup="other_expenses(<?php echo $row_index; ?>, 12, <?php echo $row->BUDGET_EXPENSES_ID; ?>)" value="0.00" class="ta-right nopadds_form_main <?php echo htmlspecialchars("other_expenses_" . $row_index . "_12"); ?>">
                        </td>
                        <td>
                          <span class="pull-right text-blue <?php echo htmlspecialchars("other_expenses_percent_" . $row_index . "_12"); ?>">0%</span>

                        </td>

                        <td>
                          <span class="<?php echo htmlspecialchars("other_expenses_" . $row_index . "_total"); ?> pull-right">0.00</span>
                        </td>



                      </tr>

                  <?php
                    }
                  }

                  ?>


                  <tr class="bg-gray-light exportexcel">
                    <th>Total Utilities</th>

                    <th><span class="pull-right total_other_expenses_1"></span></th>
                    <th><span class="total_other_expenses_percent_1 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_2"></span></th>
                    <th><span class="total_other_expenses_percent_2 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_3"></span></th>
                    <th><span class="total_other_expenses_percent_3 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_4"></span></th>
                    <th><span class="total_other_expenses_percent_4 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_5"></span></th>
                    <th><span class="total_other_expenses_percent_5 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_6"></span></th>
                    <th><span class="total_other_expenses_percent_6 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_7"></span></th>
                    <th><span class="total_other_expenses_percent_7 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_8"></span></th>
                    <th><span class="total_other_expenses_percent_8 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_9"></span></th>
                    <th><span class="total_other_expenses_percent_9 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_10"></span></th>
                    <th><span class="total_other_expenses_percent_10 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_11"></span></th>
                    <th><span class="total_other_expenses_percent_11 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_12"></span></th>
                    <th><span class="total_other_expenses_percent_12 pull-right">0%</span></th>
                    <th><span class="pull-right total_other_expenses_total"></span></th>
                  </tr>

                  <tr class="exportexcel">
                    <th colspan="26"></th>
                  </tr >

                  <tr class="bg-gray-light exportexcel">
                    <th>TOTAL EXPENSES</th>

                    <th><span class="pull-right total_expenses_1"></span></th>
                    <th><span class="total_expenses_percent_1 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_2"></span></th>
                    <th><span class="total_expenses_percent_2 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_3"></span></th>
                    <th><span class="total_expenses_percent_3 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_4"></span></th>
                    <th><span class="total_expenses_percent_4 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_5"></span></th>
                    <th><span class="total_expenses_percent_5 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_6"></span></th>
                    <th><span class="total_expenses_percent_6 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_7"></span></th>
                    <th><span class="total_expenses_percent_7 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_8"></span></th>
                    <th><span class="total_expenses_percent_8 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_9"></span></th>
                    <th><span class="total_expenses_percent_9 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_10"></span></th>
                    <th><span class="total_expenses_percent_10 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_11"></span></th>
                    <th><span class="total_expenses_percent_11 pull-right">0%</span></th>
                    <th><span class="pull-right total_expenses_12"></span></th>
                    <th><span class="total_expenses_percent_12 pull-right">0%</span></th>

                    <th><span class="pull-right total_expenses_total"></span></th>
                  </tr>

                  <!--End of Expenses table-->
                  <tr class="exportexcel">
                    <th colspan="26"></th>
                  </tr>

                  <tr class="bg-gray-light exportexcel">
                    <th>NET INCOME (LOSS)</th>

                    <th class="">
                      <span class="pull-right net_income_1">0</span>
                      <!--<span class="pull-right net_major_1 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_1">0</span>
                    </th>

                    <th class="">
                      <span class="pull-right net_income_2">0</span>
                      <!--<span class="pull-right net_major_2 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_2">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_3">0</span>
                      <!--<span class="pull-right net_major_3 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_3">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_4">0</span>
                      <!--<span class="pull-right net_major_4 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_4">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_5">0</span>
                      <!--<span class="pull-right net_major_5 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_5">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_6">0</span>
                      <!--<span class="pull-right net_major_6 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_6">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_7">0</span>
                      <!--<span class="pull-right net_major_7 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_7">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_8">0</span>
                      <!--<span class="pull-right net_major_8 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_8">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_9">0</span>
                      <!--<span class="pull-right net_major_9 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_9">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_10">0</span>
                      <!--<span class="pull-right net_major_10 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_10">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_11">0</span>
                      <!--<span class="pull-right net_major_11 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_11">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_12">0</span>
                      <!--<span class="pull-right net_major_12 text-blue">0</span>--><br />
                    </th>
                    <th>
                      <span class="pull-right net_income_percent_12">0</span>
                    </th>
                    <th class="">
                      <span class="pull-right net_income_total">0</span><br /><span class="pull-right net_major_total text-blue"></span>

                    </th>
                  </tr>

                  <!--End of net income table-->
                  <tr class="exportexcel">
                    <th colspan="26"></th>
                  </tr>

                  <?php

                  if ($services->num_rows() > 0) {
                    # if number of meal timing records is 1 or above , populate the records

                    $row_index = 0;

                    foreach ($services->result() as $row) {

                      $row_index++;

                  ?>
                      <tr class="exportexcel">

                        <td><?php echo $row->MEAL_NAME . " Cover"; ?></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_1"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_2"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_3"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_4"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_5"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_6"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_7"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_8"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_9"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_10"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_11"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_12"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("meals_" . $row_index . "_total"); ?> pull-right">0.00</span></td>

                      </tr>

                  <?php

                    }
                  }

                  ?>

                  <tr class="exportexcel">
                    <td class="main-td">Total Food & Beverage Covers</td>
                    <td class="tds"><span class="total_cover_1 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_2 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_3 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_4 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_5 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_6 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_7 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_8 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_9 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_10 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_11 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_12 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cover_total pull-right"></span></td>
                  </tr>
                  <?php

                  if ($services->num_rows() > 0) {
                    # if number of meal timing records is 1 or above , populate the records

                    $row_index = 0;

                    foreach ($services->result() as $row) {

                      $row_index++;

                  ?>
                      <tr class="exportexcel">

                        <td><?php echo "Average Check - " . $row->MEAL_NAME; ?></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_1"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_2"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_3"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_4"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_5"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_6"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_7"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_8"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_9"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_10"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_11"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_12"); ?> pull-right">0.00</span></td>
                        <td></td>
                        <td><span class="<?php echo htmlspecialchars("av_" . $row_index . "_total"); ?> pull-right">0.00</span></td>

                      </tr>

                  <?php

                    }
                  }

                  ?>
                  <tr>
                    <td class="main-td">Total Average Check</td>
                    <td class="tds"><span class="total_av_1 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_2 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_3 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_4 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_5 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_6 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_7 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_8 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_9 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_10 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_11 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_12 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_av_total pull-right"></span></td>
                  </tr>
                  <tr>
                    <td class="main-td">Other Expenses per Cover</td>
                    <td class="tds"><span class="other_ex_cover_1 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_2 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_3 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_4 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_5 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_6 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_7 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_8 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_9 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_10 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_11 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_12 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="other_ex_cover_total pull-right"></span></td>
                  </tr>
                  <tr class="exportexcel">
                    <td class="main-td">Total Expenses per Cover</td>
                    <td class="tds"><span class="total_ex_cover_1 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_2 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_3 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_4 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_5 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_6 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_7 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_8 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_9 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_10 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_11 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_12 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_ex_cover_total pull-right"></span></td>
                  </tr>
                  <?php

                  $foh = $get_foh_full->num_rows();
                  $boh = $get_boh_full->num_rows();
                  $office = $get_office->num_rows();

                  $total_full = $foh + $boh + $office;



                  ?>
                  <tr class="exportexcel">
                    <td class="main-td">Total Full Time Employees (FTE')</td>
                    <td class="tds"><span class="total_fte_1 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_2 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_3 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_4 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_5 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_6 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_7 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_8 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_9 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_10 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_11 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_12 pull-right"><?php echo formatMoney($total_full, true); ?></span></td>
                    <td></td>
                    <td class="tds"><span class="total_fte_total pull-right"><?php echo formatMoney(($total_full * 12), true); ?></span></td>
                  </tr>
                  <tr class="exportexcel">
                    <td class="main-td">Cost Per Full Time Employyes( FTE')</td>
                    <td class="tds"><span class="total_cfte_1 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_2 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_3 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_4 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_5 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_6 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_7 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_8 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_9 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_10 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_11 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_12 pull-right"></span></td>
                    <td></td>
                    <td class="tds"><span class="total_cfte_total pull-right"></span></td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <script type="text/javascript">
    $(document).ready(function() {



      $(".w-75").css("width", "75%");
      $(".w-25").css("width", "20%");
      $(".ml-5").css("margin-left", "5%");

      populate_revenues();

      populate_outlet_food();

      populate_outlet_beverage();

      populate_other_revenues();

      populate_total_revenue();

      populate_revenue_percentage();

      populate_cos_revenue_food();

      populate_cos_revenue_beverage();

      populate_cos_revenue_other();

      populate_total_cost();

      populate_cost_percentage();

      populate_gross_profit();

      populate_gross_profit_percent();

      populate_foh_labour_percent();

      populate_boh_labour_percent();

      populate_office_labour_percent();

      populate_total_labour_percent();

      populate_expenses();

      populate_other_expenses();

      populate_total_expenses();

      populate_total_other_expenses();

      populate_total_main_expenses();

      populate_expenses_percentages();

      populate_other_expenses_percentages();

      populate_total_expenses_percentages();

      populate_net_income();

      populate_net_income_main();

      populate_net_income_percentages();

      populate_meal_covers();

      populate_meal_covers_total();

      populate_average_checks();

      populate_average_checks_total();

      populate_other_ex_cover();

      populate_total_expenses_per_cover();

      populate_total_fte();

      populate_cost_fte();
      // exportTableToCSV('members.csv')

    });
    function exportTableToCSV(filename){
      var csv = [];
      var rows = document.getElementsByClassName("exportexcel");
      console.log(rows)
      for (var i = 0; i < rows.length; i++) {
          var row = [], cols = rows[i].querySelectorAll("td, th");
          
          for (var j = 0; j < cols.length; j++) 
              row.push(cols[j].innerText);
          
          csv.push(row.join(","));        
      }

      // Download CSV file
      downloadCSV(csv.join("\n"), filename);
    }

    function downloadCSV(csv, filename) {
        var csvFile;
        var downloadLink;

        // CSV file
        csvFile = new Blob([csv], {type: "text/csv"});

        // Download link
        downloadLink = document.createElement("a");

        // File name
        downloadLink.download = filename;

        // Create a link to the file
        downloadLink.href = window.URL.createObjectURL(csvFile);

        // Hide download link
        downloadLink.style.display = "none";

        // Add the link to DOM
        document.body.appendChild(downloadLink);

        // Click download link
        downloadLink.click();
    }

    toInt = (x) => {

      var separator = new Intl.NumberFormat().format(1111).replace(/1/g, '');

      let value = x.replace(new RegExp('\\' + separator, 'g'), '');

      return Number(value);
    }

    /*toMoney = (x) =>{

        return Intl.NumberFormat().format(x);

    }*/

    toMoney = (x) => {

      return Intl.NumberFormat('en-US', {
        minimumFractionDigits: 2
      }).format(x);

    }

    get_num_months = () => {

      const num_months = 12;

      return num_months;
    }

    get_meal_timings = () => {

      const meal_timings = '<?php echo $services->num_rows(); ?>';

      return meal_timings;
    }

    get_other_revs = () => {

      const other_rev = '<?php echo $other_rev->num_rows(); ?>';

      return other_rev;
    }

    get_expenses = () => {

      const expenses = '<?php echo $expenses->num_rows(); ?>';

      return expenses;
    }

    get_other_expenses = () => {

      const other_expenses = '<?php echo $other_expenses->num_rows(); ?>';

      return other_expenses;

    }

    populate_foh_labour_percent = () => {

      //salaries

      //let other_value = 0;

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.s_foh_' + i).html());

        let other_value = toInt($('.total_rev_' + i).html());

        let percent = (value / other_value) * 100;

        //set value

        $('.s_foh_per_' + i).html(percent.toFixed(2) + " %");


      }

      //temporary

      //let other_value = 0;

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.temp_foh_' + i).html());

        let other_value = toInt($('.total_rev_' + i).html());

        let percent = (value / other_value) * 100;

        //set value

        $('.temp_foh_per_' + i).html(percent.toFixed(2) + " %");


      }

      //benefits

      let benefits = '<?php echo $get_foh_benefits->num_rows(); ?>';

      for (var i = 1; i <= 12; i++) {

        for (var j = 1; j <= benefits; j++) {


          let value = toInt($('.benefit_foh_' + i + '_' + j).html());

          let other_value = toInt($('.total_rev_' + i).html());

          let percent = (value / other_value) * 100;

          $('.benefit_foh_per_' + i + '_' + j).html(percent.toFixed(2) + " %");


        }


      }

      //totalz

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.total_foh_' + i).html());

        let other_value = toInt($('.total_rev_' + i).html());

        let percent = (value / other_value) * 100;

        //set value

        $('.total_foh_per_' + i).html(percent.toFixed(2) + " %");


      }


    }

    populate_boh_labour_percent = () => {

      //set value

      //salaries

      //let other_value = 0;

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.s_boh_' + i).html());

        let other_value = toInt($('.total_rev_' + i).html());

        let percent = (value / other_value) * 100;

        //set value

        $('.s_boh_per_' + i).html(percent.toFixed(2) + " %");

      }

      //temporary

      //let other_value = 0;

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.temp_boh_' + i).html());

        let other_value = toInt($('.total_rev_' + i).html());

        let percent = (value / other_value) * 100;

        //set value

        $('.temp_boh_per_' + i).html(percent.toFixed(2) + " %");


      }


      //benefits

      let benefits = '<?php echo $get_boh_benefits->num_rows(); ?>';

      for (var i = 1; i <= 12; i++) {

        for (var j = 1; j <= benefits; j++) {


          let value = toInt($('.benefit_boh_' + i + '_' + j).html());

          let other_value = toInt($('.total_rev_' + i).html());

          let percent = (value / other_value) * 100;

          $('.benefit_boh_per_' + i + '_' + j).html(percent.toFixed(2) + " %");


        }


      }

      //totalz

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.total_boh_' + i).html());

        let other_value = toInt($('.total_rev_' + i).html());

        let percent = (value / other_value) * 100;

        //set value

        $('.total_boh_per_' + i).html(percent.toFixed(2) + " %");


      }



    }

    populate_office_labour_percent = () => {

      //set value

      //salaries

      //let other_value = 0;

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.s_office_' + i).html());

        let other_value = toInt($('.total_rev_' + i).html());

        let percent = (value / other_value) * 100;

        //set value

        $('.s_office_per_' + i).html(percent.toFixed(2) + " %");


      }

      //benefits

      let benefits = '<?php echo $get_office_benefits->num_rows(); ?>';

      for (var i = 1; i <= 12; i++) {

        for (var j = 1; j <= benefits; j++) {


          let value = toInt($('.benefit_office_' + i + '_' + j).html());

          let other_value = toInt($('.total_rev_' + i).html());

          let percent = (value / other_value) * 100;

          $('.benefit_office_per_' + i + '_' + j).html(percent.toFixed(2) + " %");


        }


      }

      //totalz

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.total_office_' + i).html());

        let other_value = toInt($('.total_rev_' + i).html());

        let percent = (value / other_value) * 100;

        //set value

        $('.total_office_per_' + i).html(percent.toFixed(2) + " %");


      }


    }

    populate_total_labour_percent = () => {

      //totalz

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.total_labour_' + i).html());

        let other_value = toInt($('.total_rev_' + i).html());

        let percent = (value / other_value) * 100;

        //set value

        $('.total_labour_percent_' + i).html(percent.toFixed(2) + " %");


      }

    }


    populate_revenues = () => {

      //Update sales row and column totals

      var formData = new FormData();
      let link = "<?php echo base_url('index.php/budget/overview/get_timings'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          //for each meal timing
          for (var i = 1; i <= len; i++) {

            let id = parseInt(obj[i - 1]['MEAL_ID']);

            var formData_1 = new FormData();

            formData_1.append("MEAL_ID", id);

            let link_1 = "<?php echo base_url('index.php/budget/overview/get_monthly_food'); ?>";

            let food_obj = {};

            $.ajax({
              async: false,
              type: 'post',
              url: link_1,
              data: formData_1,
              cache: false,
              processData: false,
              contentType: false,

              success: function(data) {

                let obj = JSON.parse(data);

                food_obj = obj;

              }
            });

            var formData_2 = new FormData();

            formData_2.append("MEAL_ID", id);

            let link_2 = "<?php echo base_url('index.php/budget/overview/get_monthly_beverage'); ?>";

            let beverage_obj = {};

            $.ajax({
              async: false,
              type: 'post',
              url: link_2,
              data: formData_2,
              cache: false,
              processData: false,
              contentType: false,

              success: function(data) {

                let obj = JSON.parse(data);

                beverage_obj = obj;

              }
            });



            for (var j = 1; j <= 12; j++) {

              let sum = Number(food_obj[j - 1]['VALUE']) + Number(beverage_obj[j - 1]['VALUE']);

              $(".rev_" + i + "_" + j).html(toMoney(sum));

            }


          }


          //do totals
          for (var x = 1; x <= len; x++) {

            let mt_total = 0;

            for (var y = 1; y <= 12; y++) {

              mt_total = Number(mt_total) + toInt($(".rev_" + x + "_" + y).html());

            }

            $(".rev_" + x + "_total").html(toMoney(mt_total));

          }
          //do total


        }
      });

    }

    populate_other_revenues = () => {

      //Update sales row and column totals

      var formData = new FormData();
      let link = "<?php echo base_url('index.php/budget/overview/get_other_revs'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          //for each meal timing
          for (var i = 1; i <= len; i++) {

            let id = parseInt(obj[i - 1]['REVENUE_ID']);

            var formData_1 = new FormData();

            formData_1.append("REVENUE_ID", id);

            let link_1 = "<?php echo base_url('index.php/budget/overview/get_monthly_other_rev'); ?>";

            let monthly_obj = {};

            $.ajax({
              async: false,
              type: 'post',
              url: link_1,
              data: formData_1,
              cache: false,
              processData: false,
              contentType: false,

              success: function(data) {

                let obj = JSON.parse(data);

                monthly_obj = obj;

              }
            });





            for (var j = 1; j <= 12; j++) {

              let sum = Number(monthly_obj[j - 1]['VALUE']);

              $(".other_rev_" + i + "_" + j).html(toMoney(sum));

            }

          }


          //do totals
          for (var x = 1; x <= len; x++) {

            let mt_total = 0;

            for (var y = 1; y <= 12; y++) {

              mt_total = Number(mt_total) + toInt($(".other_rev_" + x + "_" + y).html());

            }

            $(".other_rev_" + x + "_total").html(toMoney(mt_total));

          }
          //do total


        }
      });

    }

    populate_revenues_percentages = () => {

    }

    populate_outlet_food = () => {

      //per month
      //monthly_food

      for (var i = 1; i <= 12; i++) {

        var formData = new FormData();

        formData.append("MONTH_ID", i);

        let link = "<?php echo base_url('index.php/budget/overview/get_outlet_food'); ?>";

        $.ajax({
          async: false,
          type: 'post',
          url: link,
          data: formData,
          cache: false,
          processData: false,
          contentType: false,

          success: function(data) {

            let obj = JSON.parse(data);

            let len = obj.length;

            let meal_value_total = 0;

            let month = obj[0]['MONTH_ID'];

            for (var i = 1; i <= len; i++) {

              let meal_value = Number(obj[i - 1]['VALUE']);

              meal_value_total += meal_value;

            }

            $(".outlet_food_rev_" + month).html(toMoney(meal_value_total));


          }

        });


      }

      //outlet yearly total

      let outlet_food_total = 0;

      for (var i = 1; i <= 12; i++) {

        outlet_food_total += toInt($(".outlet_food_rev_" + i).html());

      }

      $(".outlet_food_rev_total").html(toMoney(outlet_food_total));

    }

    populate_outlet_beverage = () => {

      //per month
      //monthly_bev

      for (var i = 1; i <= 12; i++) {

        var formData = new FormData();

        formData.append("MONTH_ID", i);

        let link = "<?php echo base_url('index.php/budget/overview/get_outlet_beverage'); ?>";

        $.ajax({
          async: false,
          type: 'post',
          url: link,
          data: formData,
          cache: false,
          processData: false,
          contentType: false,

          success: function(data) {

            let obj = JSON.parse(data);

            let len = obj.length;

            let meal_value_total = 0;

            let month = obj[0]['MONTH_ID'];

            for (var i = 1; i <= len; i++) {

              let meal_value = Number(obj[i - 1]['VALUE']);

              meal_value_total += meal_value;

            }

            $(".outlet_beverage_rev_" + month).html(toMoney(meal_value_total));


          }

        });


      }

      //outlet yearly total

      let outlet_beverage_total = 0;

      for (var i = 1; i <= 12; i++) {

        outlet_beverage_total += toInt($(".outlet_beverage_rev_" + i).html());

      }

      $(".outlet_beverage_rev_total").html(toMoney(outlet_beverage_total));

    }

    populate_total_revenue = () => {

      const other_rev = Number(get_other_revs());

      let total_total_rev = 0;

      for (var i = 1; i <= 12; i++) {

        let row = i;

        //get outlet_food

        let o_food = toInt($('.outlet_food_rev_' + i).html());

        //get outlet bev

        let o_bev = toInt($('.outlet_beverage_rev_' + i).html());

        //sum of other rev for that month

        let the_sum = 0;

        for (var j = 1; j <= other_rev; j++) {

          the_sum = the_sum + toInt($('.other_rev_' + j + '_' + i).html());

        }

        let col_total = o_food + o_bev + the_sum;

        total_total_rev += col_total;

        $('.total_rev_' + row).html(toMoney(col_total.toFixed(2)));

        //save value to db

        var formData4 = new FormData();

        formData4.append("month", row)
        formData4.append("value", col_total.toFixed(2));


        let link_4 = "<?php echo base_url('index.php/budget/overview/update_total_rev'); ?>";

        $.ajax({
          async: true,
          type: 'post',
          url: link_4,
          data: formData4,
          cache: false,
          processData: false,
          contentType: false,

          success: function(data) {

          }
        });


        //end of save to db

      }

      $('.total_rev_total').html(toMoney(total_total_rev.toFixed(2)));

    }

    populate_revenue_percentage = () => {


      let timings = get_meal_timings();

      for (var i = 1; i <= 12; i++) {

        let column_total = toInt($('.total_rev_' + i).html());

        for (var k = 1; k <= timings; k++) {

          let value = toInt($('.rev_' + k + '_' + i).html());

          let percentage = (value / column_total) * 100;

          $('.rev_percent_' + k + '_' + i).html(percentage.toFixed(2) + " %");

        }

      }

      let other_rev = get_other_revs();


      for (var i = 1; i <= 12; i++) {

        let column_total = toInt($('.total_rev_' + i).html());

        for (var k = 1; k <= other_rev; k++) {

          let value = toInt($('.other_rev_' + k + '_' + i).html());

          let percentage = (value / column_total) * 100;

          $('.other_rev_percent_' + k + '_' + i).html(percentage.toFixed(2) + " %");

        }

      }



      for (var i = 1; i <= 12; i++) {

        let column_total = toInt($('.total_rev_' + i).html());

        let value = toInt($('.outlet_food_rev_' + i).html());

        let percentage = (value / column_total) * 100;

        $('.outlet_food_percent_rev_' + i).html(percentage.toFixed(2) + " %");


      }

      for (var i = 1; i <= 12; i++) {

        let column_total = toInt($('.total_rev_' + i).html());

        let value = toInt($('.outlet_beverage_rev_' + i).html());

        let percentage = (value / column_total) * 100;

        $('.outlet_beverage_percent_rev_' + i).html(percentage.toFixed(2) + " %");

      }

    }

    populate_cos_revenue_food = () => {

      var formData = new FormData();

      let link = "<?php echo base_url('index.php/budget/overview/get_cos_food'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          let total = 0;

          for (var i = 1; i <= len; i++) {

            let month = obj[i - 1]['MONTH_ID'];

            let value = Number(obj[i - 1]['COS_FOOD_SALES']);

            total += value;

            $('.cos_fd_' + i).html(toMoney(value));


          }

          //total
          $('.cos_fd_total').html(toMoney(total));


        }
      });

    }

    populate_cos_revenue_beverage = () => {


      var formData = new FormData();

      let link = "<?php echo base_url('index.php/budget/overview/get_cos_beverage'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          let total = 0;

          for (var i = 1; i <= len; i++) {

            let month = obj[i - 1]['MONTH_ID'];

            let value = Number(obj[i - 1]['COS_BEVERAGE_SALES']);

            total += value;

            $('.cos_bev_' + i).html(toMoney(value));


          }

          //total
          $('.cos_bev_total').html(toMoney(total));


        }
      });

    }

    populate_cos_revenue_other = () => {

      var formData = new FormData();
      let link = "<?php echo base_url('index.php/budget/overview/get_other_revs'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          //for each meal timing
          for (var i = 1; i <= len; i++) {

            let id = obj[i - 1]['REVENUE_ID'];

            var formData_1 = new FormData();

            formData_1.append("REVENUE_ID", id);

            let link_1 = "<?php echo base_url('index.php/budget/overview/get_monthly_other_rev_cos'); ?>";

            let monthly_obj = {};

            $.ajax({
              async: false,
              type: 'post',
              url: link_1,
              data: formData_1,
              cache: false,
              processData: false,
              contentType: false,

              success: function(data) {

                let obj = JSON.parse(data);

                monthly_obj = obj;



              }
            });

            for (var j = 1; j <= 12; j++) {

              let sum = Number(monthly_obj[j - 1]['COS']);


              $(".cos_other_" + i + "_" + j).html(toMoney(sum));

            }



          }

          //do totals
          for (var x = 1; x <= len; x++) {

            let mt_total = 0;

            for (var y = 1; y <= 12; y++) {

              mt_total = Number(mt_total) + toInt($(".cos_other_" + x + "_" + y).html());

            }

            $(".cos_other_" + x + "_total").html(toMoney(mt_total));

          }
          //do total


        }
      });


    }

    populate_total_cost = () => {

      //get other revs

      const other_rev = get_other_revs();

      let total_total_cost = 0;

      for (var i = 1; i <= 12; i++) {


        let cos_fd = toInt($('.cos_fd_' + i).html());

        let cos_bev = toInt($('.cos_bev_' + i).html());

        let other_revs = 0;

        for (var x = 1; x <= other_rev; x++) {


          let other = toInt($('.cos_other_' + x + '_' + i).html());

          other_revs += other;


        }

        col_total = cos_fd + cos_bev + other_revs;

        total_total_cost += col_total;

        $('.total_cost_' + i).html(toMoney(col_total.toFixed(2)));



      }


      $('.total_cost_total').html(toMoney(total_total_cost.toFixed(2)));

    }

    populate_cost_percentage = () => {

      for (var i = 1; i <= 12; i++) {


        //let column_total = toInt($('.total_cost_' + i).html());

        let column_total = toInt($('.outlet_food_rev_' + i).html());

        let value = toInt($('.cos_fd_' + i).html());

        let percentage = (value / column_total) * 100;

        $('.cos_fd_percent_' + i).html(percentage.toFixed(2) + " %");

      }

      for (var i = 1; i <= 12; i++) {


        //let column_total = toInt($('.total_cost_' + i).html());

        let column_total = toInt($('.outlet_beverage_rev_' + i).html());

        let value = toInt($('.cos_bev_' + i).html());

        let percentage = (value / column_total) * 100;

        $('.cos_bev_percent_' + i).html(percentage.toFixed(2) + " %");

      }

      let other_rev = get_other_revs();

      for (var i = 1; i <= 12; i++) {


        let column_total = toInt($('.total_cost_' + i).html());

        for (var k = 1; k <= other_rev; k++) {

          let value = toInt($('.cos_other_' + k + '_' + i).html());

          let other_value = toInt($('.other_rev_' + k + '_' + i).html());

          let percentage = (value / other_value) * 100;

          if (isNaN(percentage)) {

            $('.cos_other_percent_' + k + '_' + i).html("0.00 %");


          } else {

            $('.cos_other_percent_' + k + '_' + i).html(percentage.toFixed(2) + " %");


          }



        }

      }

    }

    populate_gross_profit = () => {

      let total_gross = 0;
      for (var i = 1; i <= 12; i++) {

        //get revenue
        let revenue = toInt($('.total_rev_' + i).html());

        //get cost
        let cost = toInt($('.total_cost_' + i).html());

        let gross = revenue - cost;

        total_gross += gross;

        //set

        $('.gross_profit_' + i).html(toMoney(gross.toFixed(2)));


        //save value to db

        var formData4 = new FormData();

        formData4.append("month", i)
        formData4.append("value", gross.toFixed(2));


        let link_4 = "<?php echo base_url('index.php/budget/overview/update_gross_profit'); ?>";

        $.ajax({
          async: true,
          type: 'post',
          url: link_4,
          data: formData4,
          cache: false,
          processData: false,
          contentType: false,

          success: function(data) {

          }
        });


        //end of save to db


      }

      $('.gross_profit_total').html(toMoney(total_gross.toFixed(2)));

    }

    populate_gross_profit_percent = () => {

      let total_gross = 0;
      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.gross_profit_' + i).html());

        let other_value = toInt($('.total_rev_' + i).html());

        let percentage = (value / other_value) * 100;

        if (Number.isNaN(percentage)) {

          $('.gross_profit_percent_' + i).html("0.00 %");


        } else {

          $('.gross_profit_percent_' + i).html(percentage.toFixed(2) + " %");


        }

      }



    }

    populate_expenses = () => {

      //get number of expenses

      //const expenses = get_expenses();

      var formData = new FormData();
      let link = "<?php echo base_url('index.php/budget/overview/get_expenses_items'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          //for each expense
          for (var i = 1; i <= len; i++) {

            let id = parseInt(obj[i - 1]['BUDGET_EXPENSES_ID']);

            var formData_1 = new FormData();

            formData_1.append("BUDGET_EXPENSES_ID", id);

            let link_1 = "<?php echo base_url('index.php/budget/overview/get_monthly_expenses'); ?>";

            $.ajax({
              async: false,
              type: 'post',
              url: link_1,
              data: formData_1,
              cache: false,
              processData: false,
              contentType: false,

              success: function(data) {

                let obj = JSON.parse(data);
                let total_value = 0;

                for (var j = 1; j <= 12; j++) {

                  let value = parseInt(obj[j - 1]['VALUE']);

                  let column = Number(obj[j - 1]['MONTH_ID']);

                  $('.expenses_' + i + '_' + column).val(toMoney(value));

                  total_value += value;

                }

                //set total value 

                $('.expenses_' + i + '_total').html(toMoney(total_value));






              }
            });


          }

        }
      });

    }


    populate_other_expenses = () => {

      //get number of expenses

      //const expenses = get_expenses();

      var formData = new FormData();
      let link = "<?php echo base_url('index.php/budget/overview/get_other_expenses_items'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          //for each expense
          for (var i = 1; i <= len; i++) {

            let id = parseInt(obj[i - 1]['BUDGET_EXPENSES_ID']);

            var formData_1 = new FormData();

            formData_1.append("BUDGET_EXPENSES_ID", id);

            let link_1 = "<?php echo base_url('index.php/budget/overview/get_monthly_other_expenses'); ?>";

            $.ajax({
              async: false,
              type: 'post',
              url: link_1,
              data: formData_1,
              cache: false,
              processData: false,
              contentType: false,

              success: function(data) {

                let obj = JSON.parse(data);
                let total_value = 0;

                for (var j = 1; j <= 12; j++) {

                  let value = Number(obj[j - 1]['VALUE']);

                  let column = Number(obj[j - 1]['MONTH_ID']);

                  $('.other_expenses_' + i + '_' + column).val(toMoney(value));

                  total_value += value;

                }

                //set total value 

                $('.other_expenses_' + i + '_total').html(toMoney(total_value));


              }
            });


          }

        }
      });

    }

    populate_total_expenses = () => {

      const expenses = Number(get_expenses());

      let grand_total = 0;

      for (var y = 1; y <= 12; y++) {

        let column_total = 0;


        for (var x = 1; x <= expenses; x++) {

          let value = toInt($('.expenses_' + x + '_' + y).val());

          column_total += value;


        }

        //set col total

        $('.total_main_expenses_' + y).html(toMoney(column_total));


        grand_total += column_total;

      }

      //set grand total
      $('.total_main_expenses_total').html(toMoney(grand_total));

    }

    populate_total_other_expenses = () => {

      const expenses = Number(get_other_expenses());

      let grand_total = 0;

      for (var y = 1; y <= 12; y++) {

        let column_total = 0;


        for (var x = 1; x <= expenses; x++) {


          let value = toInt($('.other_expenses_' + x + '_' + y).val());

          column_total += value;


        }

        //set col total

        $('.total_other_expenses_' + y).html(toMoney(column_total));


        grand_total += column_total;

      }

      //set grand total
      $('.total_other_expenses_total').html(toMoney(grand_total));

    }

    populate_total_main_expenses = () => {

      const expenses = Number(get_expenses());

      let grand_total = 0;

      for (var y = 1; y <= 12; y++) {

        let column_total = 0;



        let main_value = toInt($('.total_main_expenses_' + y).html());

        let other_value = toInt($('.total_other_expenses_' + y).html());

        let another_value = toInt($('.total_labour_' + y).html());

        column_total = main_value + other_value + another_value;



        //set col total

        $('.total_expenses_' + y).html(toMoney(column_total));

        grand_total += column_total;

      }

      //set grand total
      $('.total_expenses_total').html(toMoney(grand_total));

    }

    populate_expenses_percentages = () => {

      const expenses = Number(get_expenses());

      for (var i = 1; i <= expenses; i++) {

        for (var j = 1; j <= 12; j++) {

          let value = toInt($('.expenses_' + i + '_' + j).val());

          let other_value = toInt($('.total_rev_' + j).html());

          let percentage = (value / other_value) * 100;

          $('.expenses_percent_' + i + '_' + j).html(percentage.toFixed(2) + " %");

        }


      }

      //populate total_expenses_percent

      for (var k = 1; k <= 12; k++) {

        let value = toInt($('.total_main_expenses_' + k).html());

        let other_value = toInt($('.total_rev_' + k).html());

        let percentage = (value / other_value) * 100;

        $('.total_main_expenses_percent_' + k).html(percentage.toFixed(2) + " %");

      }


    }

    populate_other_expenses_percentages = () => {

      const expenses = Number(get_other_expenses());

      for (var i = 1; i <= expenses; i++) {

        for (var j = 1; j <= 12; j++) {

          let value = toInt($('.other_expenses_' + i + '_' + j).val());

          let other_value = toInt($('.total_rev_' + j).html());

          let percentage = (value / other_value) * 100;

          $('.other_expenses_percent_' + i + '_' + j).html(percentage.toFixed(2) + " %");

        }

      }

      //populate total_expenses_percent

      for (var k = 1; k <= 12; k++) {

        let value = toInt($('.total_other_expenses_' + k).html());

        let other_value = toInt($('.total_rev_' + k).html());

        let percentage = (value / other_value) * 100;

        $('.total_other_expenses_percent_' + k).html(percentage.toFixed(2) + " %");

      }


    }

    populate_total_expenses_percentages = () => {

      //populate total_expenses_percent

      for (var k = 1; k <= 12; k++) {

        let value = toInt($('.total_expenses_' + k).html());

        let other_value = toInt($('.total_rev_' + k).html());

        let percentage = (value / other_value) * 100;

        $('.total_expenses_percent_' + k).html(percentage.toFixed(2) + " %");

      }


    }



    populate_net_income = () => {

      let grand_total = 0;

      for (var y = 1; y <= 12; y++) {

        let column_total = 0;


        let main_value = toInt($('.gross_profit_' + y).html());

        let other_value = toInt($('.total_expenses_' + y).html());

        column_total = main_value - other_value;


        $('.net_income_' + y).html(toMoney(column_total));

        grand_total += column_total;

        //save value to db

        var formData4 = new FormData();

        formData4.append("month", y)
        formData4.append("value", column_total.toFixed(2));


        let link_4 = "<?php echo base_url('index.php/budget/overview/update_net_profit'); ?>";

        $.ajax({
          async: true,
          type: 'post',
          url: link_4,
          data: formData4,
          cache: false,
          processData: false,
          contentType: false,

          success: function(data) {

          }
        });


        //end of save to db

      }


      $('.net_income_total').html(toMoney(grand_total));


      //do percentages


    }

    populate_net_income_main = () => {

      let grand_total = 0;

      for (var y = 1; y <= 12; y++) {

        let column_total = 0;


        let main_value = toInt($('.net_income_' + y).html());

        let other_value = toInt($('.total_rev_' + y).html());

        column_total = main_value / other_value;


        $('.net_major_' + y).html(toMoney(column_total));

        grand_total += column_total;

      }


      $('.net_major_total').html(toMoney(grand_total));

    }

    populate_net_income_percentages = () => {


      for (var y = 1; y <= 12; y++) {

        let column_total = 0;


        let main_value = toInt($('.net_income_' + y).html());

        let other_value = toInt($('.total_rev_' + y).html());

        column_total = (main_value / other_value) * 100;


        $('.net_income_percent_' + y).html(toMoney(column_total.toFixed(2)) + " %");

      }

    }

    populate_meal_covers = () => {

      //Update sales row and column totals

      var formData = new FormData();
      let link = "<?php echo base_url('index.php/budget/overview/get_timings'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          //for each meal timing
          for (var i = 1; i <= len; i++) {

            let id = parseInt(obj[i - 1]['MEAL_ID']);

            var formData_1 = new FormData();

            formData_1.append("MEAL_ID", id);

            let link_1 = "<?php echo base_url('index.php/budget/overview/get_monthly_covers'); ?>";

            let food_obj = {};

            $.ajax({
              async: false,
              type: 'post',
              url: link_1,
              data: formData_1,
              cache: false,
              processData: false,
              contentType: false,

              success: function(data) {

                let obj = JSON.parse(data);

                let row_total = 0;

                for (var j = 1; j <= 12; j++) {

                  let val = Number(obj[j - 1]['VALUE']);

                  row_total += val;

                  $(".meals_" + i + "_" + j).html(toMoney(val.toFixed(2)));

                }


                $(".meals_" + i + "_total").html(toMoney(row_total.toFixed(2)));

              }
            });

          }



        }
      });

    }

    populate_meal_covers_total = () => {

      const timings = Number(get_meal_timings());

      let grand_total = 0;

      for (var j = 1; j <= 12; j++) {

        let column_total = 0;

        for (var i = 1; i <= timings; i++) {

          let value = toInt($('.meals_' + i + '_' + j).html());

          column_total += value;

        }

        grand_total += column_total;

        //set column total

        $('.total_cover_' + j).html(toMoney(column_total.toFixed(2)));

      }

      //set grand total
      $('.total_cover_total').html(toMoney(grand_total.toFixed(2)));

    }

    populate_average_checks = () => {

      //Update sales row and column totals

      var formData = new FormData();
      let link = "<?php echo base_url('index.php/budget/overview/get_timings'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          //for each meal timing
          for (var i = 1; i <= len; i++) {

            let obj = JSON.parse(data);

            let row_total = 0;

            for (var j = 1; j <= 12; j++) {

              let rev_value = toInt($(".rev_" + i + "_" + j).html());

              let cover_value = toInt($(".meals_" + i + "_" + j).html());

              let check_value = rev_value / cover_value;



              if (isFinite(check_value)) {

                row_total += check_value;

                //set check

                $(".av_" + i + "_" + j).html(check_value.toFixed(2));

              } else {

                $(".av_" + i + "_" + j).html(0.00);

              }


            }

            //set row total

            $(".av_" + i + "_total").html(row_total.toFixed(2));

          }

        }
      });



    }

    //wrong
    populate_average_checks_total = () => {

      let grand_total = 0;

      for (var i = 1; i <= 12; i++) {

        let column_total = 0;

        let value = toInt($('.outlet_food_rev_' + i).html());

        let other_value = toInt($('.total_cover_' + i).html());

        column_total = value / other_value;

        grand_total += column_total;

        $('.total_av_' + i).html(column_total.toFixed(2));


      }

      $('.total_av_total').html(grand_total.toFixed(2));

    }

    populate_other_ex_cover = () => {


      let grand_total = 0;

      for (var j = 1; j <= 12; j++) {

        let column_total = 0;

        let val_1 = toInt($('.total_other_expenses_' + j).html());

        let val_2 = toInt($('.total_expenses_' + j).html());

        column_total = val_1 / val_2;

        grand_total += column_total;

        //set column total

        $('.other_ex_cover_' + j).html(column_total.toFixed(2));

      }

      //set grand total
      $('.other_ex_cover_total').html(grand_total.toFixed(2));


    }

    populate_total_expenses_per_cover = () => {

      let grand_total = 0;

      for (var j = 1; j <= 12; j++) {

        let column_total = 0;

        let val_1 = toInt($('.total_cover_' + j).html());

        let val_2 = toInt($('.total_expenses_' + j).html());

        column_total = val_1 / val_2;

        grand_total += column_total;

        //set column total

        $('.total_ex_cover_' + j).html(column_total.toFixed(2));

      }

      //set grand total
      $('.total_ex_cover_total').html(grand_total.toFixed(2));


    }

    expenses = (row, column, expenses_id) => {

      let value = Number($('.expenses_' + row + '_' + column).val());

      let budget_id = Number(expenses_id);

      let month = Number(column);


      var formData = new FormData();

      formData.append("BUDGET_ID", budget_id);

      formData.append("MONTH", month);

      formData.append("VALUE", value);

      let link = "<?php echo base_url('index.php/budget/overview/update_expenses'); ?>";

      $.ajax({
        async: true,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false

      });


      //update totals

      update_expense_totals();
      update_total_expenses_per_cover();
      update_other_expenses_per_cover();
      update_net_income();
      update_expenses_percentages();




      //update other metrics



    }

    update_expense_totals = () => {


      var formData = new FormData();
      let link = "<?php echo base_url('index.php/budget/overview/get_expenses_items'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          //for each expense
          for (var i = 1; i <= len; i++) {

            let row_total = 0;

            for (var j = 1; j <= 12; j++) {

              let row = i;

              let column = j;

              let value = toInt($('.expenses_' + row + '_' + column).val());

              row_total += value;

            }

            //set column total

            $('.expenses_' + i + '_total').html(toMoney(row_total));


          }

          let grand_total = 0;

          for (var x = 1; x <= 12; x++) {

            let column_total = 0;

            for (var y = 1; y <= len; y++) {

              let row = y;

              let column = x;

              let value = toInt($('.expenses_' + row + '_' + column).val());

              column_total += value;


            }

            grand_total += column_total;

            //set row total

            $('.total_main_expenses_' + x).html(toMoney(column_total));


          }

          $('.total_main_expenses_total').html(toMoney(grand_total));


        }
      });

      update_total_expenses_totals();


    }

    other_expenses = (row, column, expenses_id) => {

      let value = Number($('.other_expenses_' + row + '_' + column).val());

      let budget_id = Number(expenses_id);

      let month = Number(column);


      var formData = new FormData();

      formData.append("BUDGET_ID", budget_id);

      formData.append("MONTH", month);

      formData.append("VALUE", value);

      let link = "<?php echo base_url('index.php/budget/overview/update_expenses'); ?>";

      $.ajax({
        async: true,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false

      });


      //update totals

      update_other_expense_totals();
      update_total_expenses_per_cover();
      update_other_expenses_per_cover();
      update_net_income();
      update_other_percentages();

      //update other metrics

    }

    update_other_expense_totals = () => {


      var formData = new FormData();
      let link = "<?php echo base_url('index.php/budget/overview/get_other_expenses_items'); ?>";

      $.ajax({
        async: false,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {

          let obj = JSON.parse(data);

          let len = obj.length;

          //for each expense
          for (var i = 1; i <= len; i++) {

            let row_total = 0;

            for (var j = 1; j <= 12; j++) {

              let row = i;

              let column = j;

              let value = toInt($('.other_expenses_' + row + '_' + column).val());

              row_total += value;

            }

            //set column total

            $('.other_expenses_' + i + '_total').html(toMoney(row_total));


          }

          let grand_total = 0;

          for (var x = 1; x <= 12; x++) {

            let column_total = 0;

            for (var y = 1; y <= len; y++) {

              let row = y;

              let column = x;

              let value = toInt($('.other_expenses_' + row + '_' + column).val());

              column_total += value;


            }

            grand_total += column_total;

            //set row total

            $('.total_other_expenses_' + x).html(toMoney(column_total));


          }

          $('.total_other_expenses_total').html(toMoney(grand_total));


        }
      });

      update_total_expenses_totals();


    }

    update_total_expenses_totals = () => {

      const expenses = Number(get_expenses());

      let grand_total = 0;

      for (var y = 1; y <= 12; y++) {

        let column_total = 0;



        let main_value = toInt($('.total_main_expenses_' + y).html());

        let other_value = toInt($('.total_other_expenses_' + y).html());

        let another_value = toInt($('.total_labour_' + y).html());

        column_total = main_value + other_value + another_value;



        //set col total

        $('.total_expenses_' + y).html(toMoney(column_total));

        grand_total += column_total;

      }

      //set grand total
      $('.total_expenses_total').html(toMoney(grand_total));


    }

    update_other_expenses_per_cover = () => {

      populate_other_ex_cover();

    }

    update_total_expenses_per_cover = () => {

      populate_total_expenses_per_cover();

    }

    update_net_income = () => {

      populate_net_income();

      populate_net_income_main();

      populate_net_income_percentages();


    }

    update_expenses_percentages = () => {

      populate_expenses_percentages();
      populate_total_expenses_percentages();

    }

    update_other_percentages = () => {
      populate_other_expenses_percentages();
      populate_total_expenses_percentages();

    }

    populate_total_fte = () => {


    }

    populate_cost_fte = () => {

      let total_cost = 0;

      for (var i = 1; i <= 12; i++) {

        //get foh_salary

        let val_1 = toInt($('.s_foh_' + i).html());

        //get boh_salary

        let val_2 = toInt($('.s_boh_' + i).html());

        //get office_salary

        let val_3 = toInt($('.s_office_' + i).html());

        //total salary

        let total_salary = val_1 + val_2 + val_3


        //get val 3

        let val_4 = toInt($('.total_fte_' + i).html());


        let amount = total_salary / val_4;


        total_cost = total_cost + amount;

        //set amount

        $('.total_cfte_' + i).html(toMoney(amount));
      }

      $('.total_cfte_total').html(toMoney(total_cost));


    }
  </script>