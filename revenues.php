<div class="mains">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1 class="header-title">
                Revenue &amp; Cover Projections
            </h1>

            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="">Budgets and P&L</li>
                <li class="header-title">Revenue &amp; Cover Projections</li>
            </ol>
        </section>

        <!-- Sub Menu -->
        <section class="content" id="revcontent">
            <div class="row">

                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-solid">
                        <div class="box-header bg-teal">

                            <h3 class="box-title month-year">Revenue &amp; Cover Projections</h3>
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
                            <div class="box-tools pull-right">
                                <!-- <a title="New Position" class="btn btn-default bg-green" id="pdf"> <i class="fa fa-file"></i> -->
                                <a onclick="exportTableToCSV('revenue.csv')" class="btn btn-default bg-green"><i class="fa fa-file-excel-o"></i>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="scroller">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7 pl-0">
                                    <table class="table table-striped table-bordered">
                                        <thead>

                                            <tr class="table-header exportexcel">
                                                <th class="text-bold">Meal Services</th>
                                                <th class="text-center" colspan="3">Average Check</th>
                                                <th colspan="2">Revenue Ratio %</th>
                                            </tr>
                                            <tr class="exportexcel">
                                                <th class="font-bold main-td">Services</th>
                                                <th class="font-bold main-td right">Beverage</th>
                                                <th class="font-bold main-td right">Food</th>
                                                <th class="font-bold main-td right">Total</th>
                                                <th class="font-bold main-td right">Food%</th>
                                                <th class="font-bold main-td right">Beverage%</th>
                                            </tr>
                                        </thead>
                                        <tbody id="MealsBudget">

                                            <form id="update_budget" action="<?= base_url('index.php/budget/revenues/update_budget') ?>" method="post">

                                                <?php
                                                if ($services->num_rows() > 0) {
                                                    # if number of meal timing records is 1 or above , populate the records

                                                    $row_index = 0;

                                                    foreach ($services->result() as $row) {

                                                        $row_index++;

                                                        $total = $row->BEVERAGE_CASH + $row->FOOD_CASH;
                                                ?>
                                                        <tr class='exportexcel'>
                                                            <td class="td"><?php echo $row->MEAL_NAME; ?></td>

                                                            <td class="">
                                                                <span style="opacity:0; position: absolute;"><?php echo $row->BEVERAGE_CASH; ?></span>
                                                                <input onkeypress='return isNumberKey(event)' onkeyup="calcs('<?php echo $row->MEAL_ID; ?>')" name="BEVERAGE_CASH[]" type="text" value="<?php echo $row->BEVERAGE_CASH; ?>" class="tds nopadds_form right <?php echo htmlspecialchars("bev_" . $row_index); ?>" id="bev<?php echo $row->MEAL_ID; ?>">

                                                            </td>

                                                            <td class="">
                                                                <span style="opacity:0; position: absolute;"><?php echo $row->FOOD_CASH; ?></span>
                                                                <input onkeyup="calcs('<?php echo $row->MEAL_ID; ?>')" onkeypress='return isNumberKey(event)' name="FOOD_CASH[]" type="text" value="<?php echo $row->FOOD_CASH; ?>" class="tds nopadds_form right <?php echo htmlspecialchars("fd_" . $row_index); ?>" id="fd<?php echo $row->MEAL_ID; ?>">

                                                            </td>

                                                            <td class=" right">
                                                                <span id="total<?php echo $row->MEAL_ID; ?>"><?php echo $total; ?></span>
                                                            </td>

                                                            <input type="hidden" value="<?php echo $row->BUDGET_ID; ?>" id="BUDGET_ID" name="BUDGET_ID[]">

                                                            <td class=" right <?php echo htmlspecialchars("fd_rev_" . $row_index); ?>">
                                                                0.0%
                                                            </td>

                                                            <td class=" right <?php echo htmlspecialchars("bev_rev_" . $row_index); ?>">
                                                                0.0%
                                                            </td>

                                                        </tr>
                                                <?php
                                                    }
                                                }
                                                ?>

                                            </form>

                                        </tbody>
                                    </table>
                                </div>


                                <div class="col-md-5 pr-0">
                                    <div class="table-responsive">

                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr class="table-header text-center operatingHours">
                                                    <th class="text-center" colspan="2">Revenue Ratio %</th>
                                                    <th class="text-center">Operating Hours</th>
                                                    <th class="text-center">Seat Capacity</th>
                                                </tr>
                                                <tr class="operatingHours">

                                                    <th class="font-bold main-td text-center" colspan="2">Total%</th>
                                                    <th class="font-bold main-td text-center">Total</th>
                                                    <th class="font-bold main-td text-center">Seat Available</th>
                                                </tr>
                                            </thead>
                                            <tbody id="MealsBudget">

                                                <form id="update_budget2" action="<?= base_url('index.php/budget/revenues/update_budget2') ?>" method="post">
                                                    <tr class="operatingHours">
                                                        <td rowspan="" class="text-center noborder food_percentage">
                                                            Food
                                                            <br /><br /><br />
                                                            <p class="text-center"><span class="fd_percent text-center">0<span> %</p>
                                                        </td>
                                                        <td rowspan="" class="text-center noborder beverage_percentage">
                                                            Beverage
                                                            <br /><br /><br />
                                                            <p class="text-center"><span class="bev_percent text-centert">0<span> %</p>
                                                        </td>
                                                        <td class="tds">
                                                            <div class="form-group">
                                                                <span class="OPEN_HOURS" style="position:absolute; opacity:0"></span>
                                                                <input type="text" value="" id="OPENING_HOURS" class="text-center nopadds_form OPENING_HOURS" name="OPENING_HOURS">
                                                            </div>
                                                            <div class="form-group">
                                                                <span class="CLOSE_HOURS" style="position:absolute; opacity:0"></span>
                                                                <input type="text" onkeyup="calcTime()" value="" id="CLOSING_HOURS" class="text-center nopadds_form OPENING_HOURS" name="CLOSING_HOURS">
                                                            </div>
                                                        </td>

                                                        <td class="tds">
                                                            <div class="form-group">
                                                                <span class="AVAILABLE_SEATS" style="position:absolute; opacity:0"></span>
                                                                <input onkeyup="calcTime()" onkeypress='return isNumberKey(event)' type="text" value="" class="text-center nopadds_form SEATS_AVAILABLE" name="SEATS_AVAILABLE" id="SEATS_AVAILABLE">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="operatingHours">
                                                        <td rowspan="2" colspan="2" class="tds text-center">
                                                            100%
                                                        </td>
                                                        <td class="tds text-center">Total Hrs</td>
                                                        <td class="tds text-center">Total Avl. Seat/Day</td>
                                                    </tr>
                                                    <tr class="operatingHours">
                                                        <td class="tds text-center"><span class="total_hrs" id="total_hrs">0</span></td>
                                                        <td class="tds text-center"><span class="taspd" id="taspd"></span></td>
                                                    </tr>
                                                </form>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="scroller bg-white">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="table-header exportexcel">
                                                <th></th>
                                                <th colspan="13" class="text-center"><span id="demo"><?php echo $current_year; ?></span></th>
                                            </tr>
                                            <tr id="days_of_month" class='exportexcel'>
                                                <td>Day Of Months</td>
                                                <td class="month_1 text-center">31</td>
                                                <td class="text-center"><span id="theid" class="month_2 text-center"></span></td>
                                                <td class="month_3 text-center">31</td>
                                                <td class="month_4 text-center">30</td>
                                                <td class="month_5 text-center">31</td>
                                                <td class="month_6 text-center">30</td>
                                                <td class="month_7 text-center">31</td>
                                                <td class="month_8 text-center">31</td>
                                                <td class="month_9 text-center">30</td>
                                                <td class="month_10 text-center">31</td>
                                                <td class="month_11 text-center">30</td>
                                                <td class="month_12 text-center">31</td>
                                                <td class="text-center">365</td>
                                            </tr>
                                            <tr class='exportexcel'>
                                                <td>Month</td>
                                                <td class="text-center">Jan</td>
                                                <td class="text-center">Feb</td>
                                                <td class="text-center">Mar</td>
                                                <td class="text-center">Apr</td>
                                                <td class="text-center">May</td>
                                                <td class="text-center">Jun</td>
                                                <td class="text-center">Jul</td>
                                                <td class="text-center">Aug</td>
                                                <td class="text-center">Sep</td>
                                                <td class="text-center">Oct</td>
                                                <td class="text-center">Nov</td>
                                                <td class="text-center">Dec</td>
                                                <td class="text-center">Total</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class='exportexcel'>
                                                <th class="bg-gray-light" colspan="14">RevPASH</th>
                                            </tr>
                                            <tr class='exportexcel'>
                                                <td>Total Aval Seats - Daily</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDaily right">0</td>
                                                <td class="tds seatsDailyTotal right">0</td>
                                            </tr>
                                            <tr class='exportexcel'>
                                                <td>Total Aval Seats - Mthly</td>
                                                <td class="tds seatsMonthly_1 right">0</td>
                                                <td class="tds seatsMonthly_2 right">0</td>
                                                <td class="tds seatsMonthly_3 right">0</td>
                                                <td class="tds seatsMonthly_4 right">0</td>
                                                <td class="tds seatsMonthly_5 right">0</td>
                                                <td class="tds seatsMonthly_6 right">0</td>
                                                <td class="tds seatsMonthly_7 right">0</td>
                                                <td class="tds seatsMonthly_8 right">0</td>
                                                <td class="tds seatsMonthly_9 right">0</td>
                                                <td class="tds seatsMonthly_10 right">0</td>
                                                <td class="tds seatsMonthly_11 right">0</td>
                                                <td class="tds seatsMonthly_12 right">0</td>
                                                <td class="tds seatsMonthlyTotal right">0</td>
                                            </tr>
                                            <tr class='exportexcel'>
                                                <td>RevPASH - Daily</td>
                                                <td class="tds revpash_daily_1 right">0</td>
                                                <td class="tds revpash_daily_2 right">0</td>
                                                <td class="tds revpash_daily_3 right">0</td>
                                                <td class="tds revpash_daily_4 right">0</td>
                                                <td class="tds revpash_daily_5 right">0</td>
                                                <td class="tds revpash_daily_6 right">0</td>
                                                <td class="tds revpash_daily_7 right">0</td>
                                                <td class="tds revpash_daily_8 right">0</td>
                                                <td class="tds revpash_daily_9 right">0</td>
                                                <td class="tds revpash_daily_10 right">0</td>
                                                <td class="tds revpash_daily_11 right">0</td>
                                                <td class="tds revpash_daily_12 right">0</td>
                                                <td class="tds revpash_daily_total right">0</td>
                                            </tr>
                                            <tr class='exportexcel'>
                                                <td>RevPASH - Mthly</td>
                                                <td class="tds revpash_monthly_1 right">0</td>
                                                <td class="tds revpash_monthly_2 right">0</td>
                                                <td class="tds revpash_monthly_3 right">0</td>
                                                <td class="tds revpash_monthly_4 right">0</td>
                                                <td class="tds revpash_monthly_5 right">0</td>
                                                <td class="tds revpash_monthly_6 right">0</td>
                                                <td class="tds revpash_monthly_7 right">0</td>
                                                <td class="tds revpash_monthly_8 right">0</td>
                                                <td class="tds revpash_monthly_9 right">0</td>
                                                <td class="tds revpash_monthly_10 right">0</td>
                                                <td class="tds revpash_monthly_11 right">0</td>
                                                <td class="tds revpash_monthly_12 right">0</td>
                                                <td class="tds revpash_monthly_total right">0</td>
                                            </tr>

                                            <tr class='exportexcel'>
                                                <th class="bg-gray-light" colspan="14">COVERS</th>
                                            </tr>
                                            <tr class='exportexcel'>
                                                <th class="bg-gray-light" colspan="14">Daily Covers</th>
                                            </tr>

                                            <?php
                                            if ($services->num_rows() > 0) {
                                                $row_index = 0;
                                                # if number of meal timing records is 1 or above , populate the records
                                                foreach ($services->result() as $row) {
                                                    $row_index++;

                                            ?>
                                                    <tr class='exportexcel'>
                                                        <td class="main-td"><?php echo $row->MEAL_NAME; ?></td>
                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_1"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 1)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_1"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_1"); ?>" name="">
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_2"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 2)" value="" class="tds form-control nopadds_form right right <?php echo htmlspecialchars($row_index . "_2"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_2"); ?>" name="">
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_3"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 3)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_3"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_3"); ?>" name="">
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_4"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 4)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_4"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_4"); ?>" name="">
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_5"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 5)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_5"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_5"); ?>" name="">
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_6"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 6)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_6"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_6"); ?>" name="">
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_7"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 7)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_7"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_7"); ?>" name="">
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_8"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 8)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_8"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_8"); ?>" name="">
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_9"); ?>"></span>
                                                            <div class="form-group m-0">
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 9)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_9"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_9"); ?>" name="">
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_10"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 10)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_10"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_10"); ?>" name="">
                                                            </div>
                                                        </td>
                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_11"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 11)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_11"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_11"); ?>" name="">
                                                            </div>
                                                        </td>

                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <span style="opacity:0; position: absolute;" class="<?php echo htmlspecialchars("dc_" . $row_index . "_12"); ?>"></span>
                                                                <input type="text" onkeyup="covers(<?php echo $row_index; ?>, 12)" value="" class="tds form-control nopadds_form right <?php echo htmlspecialchars($row_index . "_12"); ?>" id="<?php echo htmlspecialchars("dc_" . $row_index . "_12"); ?>" name="">
                                                            </div>
                                                        </td>

                                                        <td class="p-0">
                                                            <div class="form-group m-0">
                                                                <p id="<?php echo htmlspecialchars("total_" . $row_index); ?>" class="tds form-control nopadds_form right <?php echo htmlspecialchars("total_" . $row_index); ?>">

                                                                </p>
                                                            </div>
                                                        </td>
                                                    </tr>

                                            <?php
                                                }
                                            }
                                            ?>

                                            <thead>
                                                <tr class='exportexcel'>
                                                    <th>Total</th>
                                                    <th id="dc_total_1" class="dc_total_1 right">0</th>
                                                    <th id="dc_total_2" class="dc_total_2 right">0</th>
                                                    <th id="dc_total_3" class="dc_total_3 right">0</th>
                                                    <th id="dc_total_4" class="dc_total_4 right">0</th>
                                                    <th id="dc_total_5" class="dc_total_5 right">0</th>
                                                    <th id="dc_total_6" class="dc_total_6 right">0</th>
                                                    <th id="dc_total_7" class="dc_total_7 right">0</th>
                                                    <th id="dc_total_8" class="dc_total_8 right">0</th>
                                                    <th id="dc_total_9" class="dc_total_9 right">0</th>
                                                    <th id="dc_total_10" class="dc_total_10 right">0</th>
                                                    <th id="dc_total_11" class="dc_total_11 right">0</th>
                                                    <th id="dc_total_12" class="dc_total_12 right">0</th>
                                                    <th id="dc_total_total" class="dc_total_total right">0</th>
                                                </tr>
                                            </thead>
                                            <tr class="exportexcel">
                                                <th colspan="14"></th>
                                            </tr>
                                            <tr class='exportexcel'>
                                                <th class="bg-gray-light" colspan="14">Monthly Covers</th>
                                            </tr>

                                            <?php
                                            if ($services->num_rows() > 0) {
                                                # if number of meal timing records is 1 or above , populate the records

                                                $row_index = 0;
                                                foreach ($services->result() as $row) {
                                                    $row_index++;

                                            ?>
                                                    <tr class="exportexcel">
                                                        <td class="main-td"><?php echo $row->MEAL_NAME; ?></td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_1"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_2"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_3"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_4"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_5"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_6"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_7"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_8"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_9"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_10"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_11"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_" . $row_index . "_12"); ?> right">0</td>
                                                        <td class="<?php echo htmlspecialchars("monthly_total_" . $row_index); ?> right">0</td>

                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                            <thead>
                                                <tr class="exportexcel">
                                                    <th>Total</th>
                                                    <th class="mc_total_1 right">0</th>
                                                    <th class="mc_total_2 right">0</th>
                                                    <th class="mc_total_3 right">0</th>
                                                    <th class="mc_total_4 right">0</th>
                                                    <th class="mc_total_5 right">0</th>
                                                    <th class="mc_total_6 right">0</th>
                                                    <th class="mc_total_7 right">0</th>
                                                    <th class="mc_total_8 right">0</th>
                                                    <th class="mc_total_9 right">0</th>
                                                    <th class="mc_total_10 right">0</th>
                                                    <th class="mc_total_11 right">0</th>
                                                    <th class="mc_total_12 right">0</th>
                                                    <th class="mc_total_total right">0</th>
                                                </tr>
                                            </thead>

                                            <tr class="exportexcel">
                                                <th colspan="14"></th>
                                            </tr>
                                            <tr class="exportexcel">
                                                <th class="bg-gray-light" colspan="14">SALES</th>
                                            </tr class="exportexcel">
                                            <tr class="exportexcel">
                                                <th class="bg-gray-light" colspan="14">Daily Food Sales</th>
                                            </tr>

                                            <?php
                                            if ($services->num_rows() > 0) {
                                                # if number of meal timing records is 1 or above , populate the records

                                                $row_index = 0;

                                                foreach ($services->result() as $row) {

                                                    $row_index++;

                                                    //print_r($daily_food_sales->result());
                                            ?>
                                                    <tr class="exportexcel">
                                                        <td class="main-td"><?php echo $row->MEAL_NAME; ?></td>
                                                        <?php


                                                        for ($i = 1; $i <= 12; $i++) {



                                                        ?>

                                                            <td class="<?php echo htmlspecialchars("ds_food_" . $row_index . "_" . $i); ?> right">0</td>


                                                        <?php

                                                        }

                                                        ?>
                                                        <td class="<?php echo htmlspecialchars("daily_sales_food_total_" . $row_index); ?> right">0</td>

                                                    </tr>
                                            <?php

                                                }
                                            }
                                            ?>
                                        </tbody>
                                        <thead>
                                            <tr class="exportexcel">
                                                <th>Total</th>
                                                <th class="ds_food_total_1 right">0</th>
                                                <th class="ds_food_total_2 right">0</th>
                                                <th class="ds_food_total_3 right">0</th>
                                                <th class="ds_food_total_4 right">0</th>
                                                <th class="ds_food_total_5 right">0</th>
                                                <th class="ds_food_total_6 right">0</th>
                                                <th class="ds_food_total_7 right">0</th>
                                                <th class="ds_food_total_8 right">0</th>
                                                <th class="ds_food_total_9 right">0</th>
                                                <th class="ds_food_total_10 right">0</th>
                                                <th class="ds_food_total_11 right">0</th>
                                                <th class="ds_food_total_12 right">0</th>
                                                <th class="ds_food_total_total right">0</th>
                                            </tr>
                                        </thead>

                                        <thead>
                                            <tr class="exportexcel">
                                                <td>Average</td>
                                                <td colspan="13" class="text-right avg-1">150,000</td>
                                            </tr>
                                        </thead>

                                        <tr class="exportexcel">
                                            <th class="bg-gray-light" colspan="14">Daily Beverage Sales</th>
                                        </tr>

                                        <tr class="exportexcel">
                                            <?php
                                            if ($services->num_rows() > 0) {
                                                # if number of meal timing records is 1 or above , populate the records
                                                $row_index = 0;
                                                foreach ($services->result() as $row) {
                                                    $row_index++;

                                            ?>
                                                    <td class="main-td"><?php echo $row->MEAL_NAME; ?></td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_1"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_2"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_3"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_4"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_5"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_6"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_7"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_8"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_9"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_10"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_11"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("ds_beverage_" . $row_index . "_12"); ?> right">0</td>
                                                    <td class="<?php echo htmlspecialchars("daily_sales_beverage_total_" . $row_index); ?> right">0</td>

                                        </tr>
                                <?php
                                                }
                                            }
                                ?>
                                <thead>
                                    <tr class="exportexcel">
                                        <th>Total</th>
                                        <th class="ds_beverage_total_1 right">0</th>
                                        <th class="ds_beverage_total_2 right">0</th>
                                        <th class="ds_beverage_total_3 right">0</th>
                                        <th class="ds_beverage_total_4 right">0</th>
                                        <th class="ds_beverage_total_5 right">0</th>
                                        <th class="ds_beverage_total_6 right">0</th>
                                        <th class="ds_beverage_total_7 right">0</th>
                                        <th class="ds_beverage_total_8 right">0</th>
                                        <th class="ds_beverage_total_9 right">0</th>
                                        <th class="ds_beverage_total_10 right">0</th>
                                        <th class="ds_beverage_total_11 right">0</th>
                                        <th class="ds_beverage_total_12 right">0</th>
                                        <th class="ds_beverage_total_total right">0</th>
                                    </tr>
                                </thead>

                                <thead>
                                    <tr class="exportexcel">
                                        <td>Average</td>
                                        <td colspan="13" class="text-right avg-2">150,000</td>
                                    </tr>
                                </thead>

                                <thead>
                                    <tr class="bg-gray-light exportexcel">
                                        <td>Total Average</td>
                                        <td colspan="13" class="text-right avg-total">150,000</td>
                                    </tr>
                                </thead>
                                <tr class="exportexcel">
                                    <td colspan="14"></td>
                                </tr>

                                <tr class="exportexcel">
                                    <th class="bg-gray-light" colspan="14">
                                        <h6 class="box-title">Monthly Food Sales</h6>
                                    </th>
                                </tr>

                                <?php
                                if ($services->num_rows() > 0) {
                                    # if number of meal timing records is 1 or above , populate the records
                                    $row_index = 0;
                                    foreach ($services->result() as $row) {
                                        $row_index++;

                                ?>
                                        <tr class="exportexcel">
                                            <td class="main-td"><?php echo $row->MEAL_NAME; ?></td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_1"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_2"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_3"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_4"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_5"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_6"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_7"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_8"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_9"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_10"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_11"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_food_" . $row_index . "_12"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("monthly_sales_food_total_" . $row_index); ?> right">0</td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                                </tbody>
                                <thead>
                                    <tr class="exportexcel">
                                        <th>Total</th>
                                        <th class="ms_food_total_1 right">0</th>
                                        <th class="ms_food_total_2 right">0</th>
                                        <th class="ms_food_total_3 right">0</th>
                                        <th class="ms_food_total_4 right">0</th>
                                        <th class="ms_food_total_5 right">0</th>
                                        <th class="ms_food_total_6 right">0</th>
                                        <th class="ms_food_total_7 right">0</th>
                                        <th class="ms_food_total_8 right">0</th>
                                        <th class="ms_food_total_9 right">0</th>
                                        <th class="ms_food_total_10 right">0</th>
                                        <th class="ms_food_total_11 right">0</th>
                                        <th class="ms_food_total_12 right">0</th>
                                        <th class="ms_food_total_total right">0</th>
                                    </tr>
                                </thead>
                                <tr class="exportexcel">
                                    <th colspan="15"></th>
                                </tr>
                                <tr class="exportexcel">
                                    <th class="bg-gray-light" colspan="14">
                                        <h6 class="box-title">Monthly Beverage Sales</h6>
                                    </th>
                                </tr>

                                <tr class="exportexcel">
                                    <?php
                                    if ($services->num_rows() > 0) {
                                        # if number of meal timing records is 1 or above , populate the records
                                        $row_index = 0;

                                        foreach ($services->result() as $row) {

                                            $row_index++;

                                    ?>
                                            <td class="main-td"><?php echo $row->MEAL_NAME; ?></td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_1"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_2"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_3"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_4"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_5"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_6"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_7"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_8"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_9"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_10"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_11"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("ms_beverage_" . $row_index . "_12"); ?> right">0</td>
                                            <td class="<?php echo htmlspecialchars("monthly_sales_beverage_total_" . $row_index); ?> right">0</td>
                                </tr>
                        <?php
                                        }
                                    }
                        ?>
                        </tbody>
                        <thead>
                            <tr class="exportexcel">
                                <th>Total</th>
                                <th class="ms_beverage_total_1 right">0</th>
                                <th class="ms_beverage_total_2 right">0</th>
                                <th class="ms_beverage_total_3 right">0</th>
                                <th class="ms_beverage_total_4 right">0</th>
                                <th class="ms_beverage_total_5 right">0</th>
                                <th class="ms_beverage_total_6 right">0</th>
                                <th class="ms_beverage_total_7 right">0</th>
                                <th class="ms_beverage_total_8 right">0</th>
                                <th class="ms_beverage_total_9 right">0</th>
                                <th class="ms_beverage_total_10 right">0</th>
                                <th class="ms_beverage_total_11 right">0</th>
                                <th class="ms_beverage_total_12 right">0</th>
                                <th class="ms_beverage_total_total right">0</th>
                            </tr>
                        </thead>

                        <tr class="exportexcel">
                            <th class="">
                                <h6 class="box-title">TOTAL SALES</h6>
                            </th>




                            <?php

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


                            if ($total_sales->num_rows() > 0) {
                                # if number of meal timing records is 1 or above , populate the records
                                $row_index = 0;
                                $sales_total = 0;

                                foreach ($total_sales->result() as $row) {

                                    $row_index++;
                                    $sales_total = $sales_total + $row->SALES_VALUE;

                            ?>
                                    <!--<th class="right <?php echo htmlspecialchars("total_sales_" . $row_index); ?>"><?php echo $row->SALES_VALUE; ?></th>-->
                                    <th class="right <?php echo htmlspecialchars("total_sales_" . $row_index); ?>"><?php echo formatMoney($row->SALES_VALUE, true); ?></th>

                            <?php
                                }
                            }
                            ?>


                            <th class="total_sales_total right"><?php echo formatMoney($sales_total, 2); ?></th>

                        </tr>
                        <tr class="exportexcel">
                            <td colspan="14"></td>
                        </tr>

                        <tr class="exportexcel">
                            <th class="bg-gray-light" colspan="14">
                                <h6 class="box-title">COST OF SALES</h6>
                            </th>
                        </tr>

                        <tr class="exportexcel">
                            <td>Food Cost % Gross</td>

                            <form id="cost_of_sales_1" action="<?= base_url('index.php/budget/revenues/cost_of_sales_1') ?>" method="post">
                                <?php

                                if ($cos_food->num_rows() > 0) {

                                    $row_index = 0;

                                    $cos_food_percent_total = 0;

                                    foreach ($cos_food->result() as $row) {
                                        $row_index++;

                                        $cos_food_percent_total = $cos_food_percent_total + $row->FOOD_COST_PERCENT;
                                ?>

                                        <td class="right <?php echo htmlspecialchars("cos_food_percent_" . $row_index); ?> p-0">
                                            <div class="right form-group m-0">
                                                <input onkeypress='return isNumberKey(event)' onkeyup="cos_fd(<?php echo htmlspecialchars($row_index); ?>)" name="<?php echo htmlspecialchars("cos_fd_" . $row_index); ?>" type="text" value="<?php echo $row->FOOD_COST_PERCENT; ?>" class="right form-control nopadds_form <?php echo htmlspecialchars("cos_fd_" . $row_index); ?>" id="cos_fd<?php echo $row->COST_OF_SALES_ID; ?>">
                                            </div>
                                        </td>
                                <?php
                                    }
                                }
                                ?>


                                <td class="right cos_food_percent_total"><b><?php echo number_format($cos_food_percent_total / $cos_food->num_rows(), 2); ?> %</b></td>

                            </form>

                        </tr>

                        <tr class="exportexcel">
                            <td>Beverage Cost % Gross</td>

                            <form id="cost_of_sales_2" action="<?= base_url('index.php/budget/revenues/cost_of_sales_2') ?>" method="post">

                                <?php

                                if ($cos_bev->num_rows() > 0) {

                                    $row_index = 0;

                                    $cos_beverage_percent_total = 0;

                                    foreach ($cos_bev->result() as $row) {
                                        $row_index++;

                                        $cos_beverage_percent_total = $cos_beverage_percent_total + $row->BEVERAGE_COST_PERCENT;
                                ?>

                                        <td class="right <?php echo htmlspecialchars("cos_beverage_percent_" . $row_index); ?> p-0">
                                            <div class="right form-group m-0">
                                                <input onkeypress='return isNumberKey(event)' onkeyup="cos_bev(<?php echo htmlspecialchars($row_index); ?>)" name="<?php echo htmlspecialchars("cos_bev_" . $row_index); ?>" type="text" value="<?php echo $row->BEVERAGE_COST_PERCENT; ?>" class="right nopadds_form <?php echo htmlspecialchars("cos_bev_" . $row_index); ?> form-control" id="cos_bev<?php echo $row->COST_OF_SALES_ID; ?>">
                                            </div>
                                        </td>
                                <?php
                                    }
                                }
                                ?>

                            </form>


                            <td class="right cos_beverage_percent_total"><b><?php echo number_format($cos_beverage_percent_total / $cos_food->num_rows(), 2); ?> %</b></td>
                        </tr>

                        <tr class="exportexcel">
                            <td>Cost of Food Sales</td>

                            <form id="cost_of_sales_3" action="<?= base_url('index.php/budget/revenues/cost_of_sales_3') ?>" method="post">

                                <?php




                                if ($cos_food_sales->num_rows() > 0) {

                                    $row_index = 0;

                                    $cos_food_sales_total = 0;

                                    foreach ($cos_food_sales->result() as $row) {
                                        $row_index++;

                                        $cos_food_sales_total = $cos_food_sales_total + $row->COS_FOOD_SALES;
                                ?>

                                        <td class="<?php echo htmlspecialchars("cos_food_sales_" . $row_index); ?> right"><?php echo formatMoney($row->COS_FOOD_SALES, 2); ?></td>

                                <?php
                                    }
                                }
                                ?>
                            </form>

                            <td class="cos_food_sales_total right"><b><?php echo number_format($cos_food_sales_total, 2); ?></b>
                            </td>

                        </tr>

                        <tr class="exportexcel">
                            <td>Cost of Beverage Sales</td>
                            <form id="cost_of_sales_4" action="<?= base_url('index.php/budget/revenues/cost_of_sales_4') ?>" method="post">

                                <?php

                                if ($cos_bev_sales->num_rows() > 0) {

                                    $row_index = 0;

                                    $cos_bev_sales_total = 0;

                                    foreach ($cos_bev_sales->result() as $row) {
                                        $row_index++;

                                        $cos_bev_sales_total = $cos_bev_sales_total + $row->COS_BEVERAGE_SALES;
                                ?>

                                        <td class="<?php echo htmlspecialchars("cos_beverage_sales_" . $row_index); ?> right"><?php echo formatMoney($row->COS_BEVERAGE_SALES, 2); ?></td>

                                <?php
                                    }
                                }
                                ?>

                            </form>

                            <td class="cos_beverage_sales_total right"><b><?php echo number_format($cos_bev_sales_total, 2); ?></b>
                            </td>

                        </tr>


                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div>
        </section>
        <!-- <button class="btn btn-warning" id="pdf">export pdf</button> -->
        <!-- /.content -->
    </div>
    <!-- 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jspdf/tableHTMLExport.js" defer></script>

    <script type="text/javascript">
        $("#pdf").on("click", function() {
            $("#revcontent").tableHTMLExport({
                type: 'pdf',
                filename: 'revenues.pdf',
            });
        })
    </script> -->

    <script type="text/javascript">
        $(document).ready(function() {
            populate_operating_hours();
            populate_revpash();
            populate_daily_covers();
            populate_monthly_covers();
            populate_daily_sales_food();
            populate_daily_sales_beverage();
            populate_monthly_sales_food();
            populate_monthly_sales_beverage();
            populate_revenue_ratios();

            // $(document).ready(function() {

            populate_revpash_2();
        });


        function exportTableToCSV(filename) {
            var csv = [];
            var rows = document.getElementsByClassName("exportexcel");
            var custom = document.getElementsByClassName("operatingHours")
            for ( var k = 0; k < custom.length; k++){
                var row=[], cols =  custom[k].querySelectorAll("th")

                for (var j = 0; j < cols.length; j++) {
                    var pattern = new RegExp('\,')

                    if (pattern.test(cols[j].innerText) == true) {
                        row.push(toInt(cols[j].innerText));
                    } else {
                        row.push(cols[j].innerText);
                    }
                }
                csv.push(row.join(","));
            }
            for (var i = 0; i < rows.length; i++) {
                var row = [],
                    cols = rows[i].querySelectorAll("td, th");

                for (var j = 0; j < cols.length; j++) {
                    var pattern = new RegExp('\,')

                    if (pattern.test(cols[j].innerText) == true) {
                        row.push(toInt(cols[j].innerText));
                    } else {
                        row.push(cols[j].innerText);

                    }
                }

                csv.push(row.join(","));
            }

            // Download CSV file
            downloadCSV(csv.join("\n"), filename);
        }
        toInt = (x) => {

            var separator = new Intl.NumberFormat().format(1111).replace(/1/g, '');

            let value = x.replace(new RegExp('\\' + separator, 'g'), '');

            return Number(value);

        }

        function downloadCSV(csv, filename) {
            var csvFile;
            var downloadLink;

            // CSV file
            csvFile = new Blob([csv], {
                type: "text/csv"
            });

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


        //populate_total_percent();
        //get_sundays();
        //populate_total_revenue_ratios();
        //populate_total_sales();


        var frm = $('#update_budget');
        var frm2 = $('#update_budget2');

        $(".right").css("text-align", "right");
        $(".left").css("text-align", "left");
        $(".middle").css("text-align", "center");


        $('input[type=text]').bind('keyup', function() {
            setTimeout(frm.submit(), 5000); // set timout
            setTimeout(frm2.submit(), 5000); // set timout

        });

        frm.submit(function(e) {
            e.preventDefault(e);

            var formData = new FormData(this);

            $.ajax({
                async: true,
                type: frm.attr('method'),
                url: frm.attr('action'),
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {

                }
            });
        });

        frm2.submit(function(e) {
            e.preventDefault(e);

            var formData = new FormData(this);

            $.ajax({
                async: true,
                type: frm2.attr('method'),
                url: frm2.attr('action'),
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {

                }
            });
        });




        function calcs(id) {
            // do some calculations...
            var bev = parseFloat($('#bev' + id).val());
            var fd = parseFloat($('#fd' + id).val());
            var sum = +bev + +fd;

            $('#total' + id).html(sum).toFixed(2);
        }

        function calcTime() {


            // calculates time difference...
            var st = $('#OPENING_HOURS').val();
            var et = $('#CLOSING_HOURS').val();
            var sav = $('#SEATS_AVAILABLE').val();
            

            var startTime = moment(st, 'hh:mm:ss a');
            var endTime = moment(et, 'hh:mm:ss a');

            var total_hrs = endTime.diff(startTime, 'hours');

            $('#total_hrs').html(endTime.diff(startTime, 'hours'));

            $('#taspd').html(total_hrs * sav);
            $('.seatsDaily').html(toMoney(total_hrs * sav));

            let ths = Number(endTime.diff(startTime, 'hours'));
            let tss = total_hrs * sav;

            //update in db
            var formData4 = new FormData();
            formData4.append("OPENING_HOURS", st);
            formData4.append("CLOSING_HOURS", et);
            formData4.append("SEATS_AVAILABLE", sav);


            let link = "<?php echo base_url('index.php/budget/revenues/update_budget2'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link,
                data: formData4,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {


                }
            });


            //hours and seats

            var formData5 = new FormData();
            formData5.append("HOURS", ths);
            formData5.append("SEATS", tss);

            let link2 = "<?php echo base_url('index.php/budget/revenues/update_budget3'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link2,
                data: formData5,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {



                }
            });




            let sd = total_hrs * sav;

            let total_sd = sd * 12;

            $(".seatsDailyTotal").html(toMoney(total_sd));

            //ajax- update value to db

            var formData = new FormData();

            formData.append("daily_seats", sd);

            let link_2 = "<?php echo base_url('index.php/budget/revenues/update_seats_daily'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link_2,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {
                    //console.log("success");

                }
            });


            //





            let total_sm = 0

            for (var i = 1; i <= 12; i++) {


                let id = i;

                let tasm = $(".month_" + id).html() * sd;

                $(".seatsMonthly_" + id).html(toMoney(tasm));

                total_sm = total_sm + tasm;


                //ajax- update value to db

                var formData = new FormData();
                formData.append("id", i);
                formData.append("monthly_seats", tasm);

                let link_3 = "<?php echo base_url('index.php/budget/revenues/update_seats_monthly'); ?>";

                $.ajax({
                    async: true,
                    type: 'post',
                    url: link_3,
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,

                    success: function(data) {
                        //console.log("success");

                    }
                });


                //


            }

            $(".seatsMonthlyTotal").html(toMoney(total_sm));


        }

        function current_year() {

            let year = $("#current_year option:selected").text();

            var formData = new FormData();
            formData.append("id", 1);
            formData.append("year", year);

            let link = "<?php echo base_url('index.php/budget/revenues/update_budget_year'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {
                    //alert("success");

                }
            });

        }



        function get_num_months() {

            const num_months = 12;

            return num_months;
        }

        function get_meal_timings() {

            const meal_timings = '<?php echo $services->num_rows(); ?>';

            return meal_timings;
        }

        function toInt(x) {

            var separator = new Intl.NumberFormat().format(1111).replace(/1/g, '');

            let value = x.replace(new RegExp('\\' + separator, 'g'), '');

            return Number(value);
        }

        function toMoney(x) {

            return Intl.NumberFormat().format(x);

        }

        function covers(row, column) {

            const timings = get_meal_timings();
            const months = get_num_months();


            //Update cover row and column totals

            let daily_covers_column_total = 0;

            for (var i = 1; i <= timings; i++) {

                let daily_cover_item = $("." + i + "_" + column).val();


                daily_covers_column_total = daily_covers_column_total + Number(daily_cover_item);

                //update db
                //ajax- update value to db
                if (i == row) {
                    var formData = new FormData();
                    formData.append("id", row);
                    formData.append("month", column);
                    formData.append("daily_covers", daily_cover_item);

                    //console.log(row, column)

                    let link_3 = "<?php echo base_url('index.php/budget/revenues/update_covers_daily'); ?>";

                    $.ajax({
                        async: true,
                        type: 'post',
                        url: link_3,
                        data: formData,
                        cache: false,
                        processData: false,
                        contentType: false,

                        success: function(data) {


                        }
                    });

                }


                //


            }


            $(".dc_total_" + column).html(daily_covers_column_total);




            let daily_covers_row_total = 0;

            for (var i = 1; i <= months; i++) {

                let daily_cover_item = $("." + row + "_" + i).val()

                daily_covers_row_total = daily_covers_row_total + Number(daily_cover_item);


            }

            $(".total_" + row).html(daily_covers_row_total);



            //Update Grand Total

            let daily_covers_total_total = 0


            for (var i = 1; i <= timings; i++) {

                let daily_cover_total_item = $(".total_" + i).html();


                daily_covers_total_total = daily_covers_total_total + Number(daily_cover_total_item);


            }

            $(".dc_total_total").html(daily_covers_total_total);





            //Update the other tables that depend in daily covers data
            monthly_covers(row, column)
            daily_food_sales(row, column)
            daily_beverage_sales(row, column)
            monthly_food_sales(row, column)
            monthly_beverage_sales(row, column)
            total_sales(row, column)
            rev_pash(row, column)
            cos_food(row, column)
            cos_beverage(row, column)


        }

        function cos_fd(column) {
            //recalculate values and update db

            /*update.db*/
            var formData = new FormData(document.getElementById('cost_of_sales_1'));
            formData.append("id", column);

            let link = "<?php echo base_url('index.php/budget/revenues/cost_of_sales_1'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {

                    /*Recalculate*/
                    cos_food(0, column);

                }
            });
            /**/



        }

        function cos_bev(column) {
            //recalculate values and update db

            /*update.db*/
            var formData = new FormData(document.getElementById('cost_of_sales_2'));
            formData.append("id", column);

            let link = "<?php echo base_url('index.php/budget/revenues/cost_of_sales_2'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {

                    cos_beverage(0, column);

                }
            });
            /**/

        }

        function cos_food(row, column) {


            const months = get_num_months();

            let monthly_food_sale_total = toInt($(".ms_food_total_" + column).html());
            let cos_fd_percent = $(".cos_fd_" + column).val();

            let total_cos_fd = 0;

            let food_sales_cos = monthly_food_sale_total * (cos_fd_percent / 100);

            $(".cos_food_sales_" + column).html(toMoney(food_sales_cos));


            /*update.db*/

            var formData = new FormData(document.getElementById('cost_of_sales_3'));

            formData.append("id", column);

            formData.append("cos_food_sales", food_sales_cos);


            let link = "<?php echo base_url('index.php/budget/revenues/cost_of_sales_3'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {

                }
            });
            /**/


            //console.log(formData.get('cos_fd_1'));


            for (var i = 1; i <= months; i++) {


                let food_sale_column = toInt($(".cos_food_sales_" + i).html());

                total_cos_fd = total_cos_fd + food_sale_column;

            }



            $(".cos_food_sales_total").html(toMoney(total_cos_fd));

        }

        function cos_beverage(row, column) {

            const months = get_num_months();

            let monthly_beverage_sale_total = toInt($(".ms_beverage_total_" + column).html());
            let cos_bev_percent = $(".cos_bev_" + column).val();

            let total_cos_bev = 0;

            let beverage_sales_cos = monthly_beverage_sale_total * (cos_bev_percent / 100);

            $(".cos_beverage_sales_" + column).html(toMoney(beverage_sales_cos));

            /*update.db*/

            var formData = new FormData(document.getElementById('cost_of_sales_4'));

            formData.append("id", column);

            formData.append("cos_beverage_sales", beverage_sales_cos);


            let link = "<?php echo base_url('index.php/budget/revenues/cost_of_sales_4'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {

                }
            });
            /**/

            for (var i = 1; i <= months; i++) {


                let beverage_sale_column = toInt($(".cos_beverage_sales_" + i).html());

                total_cos_bev = total_cos_bev + beverage_sale_column;
            }



            $(".cos_beverage_sales_total").html(toMoney(total_cos_bev));

        }


        function monthly_covers(row, column) {

            const timings = get_meal_timings();
            const months = get_num_months();


            let daily_cover_value = $("." + row + "_" + column).val()

            let month_days = 0;

            if (row == 2) {

                month_days = get_sundays(column, 2020);

            } else {

                month_days = $(".month_" + column).html();

            }

            let monthly_cover_value = Number(daily_cover_value) * Number(month_days);


            $(".monthly_" + row + "_" + column).html(toMoney(monthly_cover_value));


            //Calculate row and column totals

            let monthly_covers_column_total = 0;

            for (var i = 1; i <= timings; i++) {

                let monthly_cover_item = toInt($(".monthly_" + i + "_" + column).html());


                monthly_covers_column_total = monthly_covers_column_total + Number(monthly_cover_item);


                //update db
                //ajax- update value to db

                var formData6 = new FormData();
                formData6.append("id", i);
                formData6.append("month", column);
                formData6.append("monthly_covers", monthly_cover_item);

                let link_6 = "<?php echo base_url('index.php/budget/revenues/update_covers_monthly'); ?>";

                $.ajax({
                    async: true,
                    type: 'post',
                    url: link_6,
                    data: formData6,
                    cache: false,
                    processData: false,
                    contentType: false,

                    success: function(data) {


                    }
                });


                //

            }

            $(".mc_total_" + column).html(toMoney(monthly_covers_column_total));



            let monthly_covers_row_total = 0;

            for (var i = 1; i <= months; i++) {

                let month_cover_item = toInt($(".monthly_" + row + "_" + i).html());

                monthly_covers_row_total = monthly_covers_row_total + Number(month_cover_item);

            }

            $(".monthly_total_" + row).html(toMoney(monthly_covers_row_total));


            //Update Grand Total
            let monthly_covers_total_total = 0


            for (var i = 1; i <= timings; i++) {

                let monthly_cover_total_item = toInt($(".monthly_total_" + i).html());



                monthly_covers_total_total = monthly_covers_total_total + Number(monthly_cover_total_item);

            }

            $(".mc_total_total").html(toMoney(monthly_covers_total_total));


        }


        function daily_food_sales(row, column) {

            const timings = get_meal_timings();
            const months = get_num_months();

            //Update sales row and column totals

            let daily_food_sales_column_total = 0;

            for (var i = 1; i <= timings; i++) {

                let food_rate = $(".fd_" + i).val();

                let cover_rate = $("." + i + "_" + column).val();

                let daily_food_sale = Number(food_rate) * Number(cover_rate);

                if (i == row) {

                    $(".ds_food_" + i + "_" + column).html(toMoney(daily_food_sale));

                    //update db
                    //ajax- update value to db

                    var formData7 = new FormData();
                    formData7.append("id", i);
                    formData7.append("month", column);
                    formData7.append("daily_food_sales", daily_food_sale);

                    let link_7 = "<?php echo base_url('index.php/budget/revenues/update_daily_food_sales'); ?>";

                    $.ajax({
                        async: true,
                        type: 'post',
                        url: link_7,
                        data: formData7,
                        cache: false,
                        processData: false,
                        contentType: false,

                        success: function(data) {


                        }
                    });


                }

                daily_food_sales_column_total = daily_food_sales_column_total + Number(daily_food_sale);

                $(".ds_food_total_" + column).html(toMoney(daily_food_sales_column_total));




            }





            //Update sales row and column totals

            let daily_food_sales_row_total = 0;

            for (var i = 1; i <= months; i++) {

                let food_rate = $(".fd_" + row).val();

                let cover_rate = $("." + row + "_" + i).val();

                let daily_food_sale = Number(food_rate) * Number(cover_rate);

                //$(".ds_food_" + row + "_" + i).html(daily_food_sale);

                daily_food_sales_row_total = Number(daily_food_sales_row_total) + Number(daily_food_sale);

                $(".daily_sales_food_total_" + row).html(toMoney(daily_food_sales_row_total));



            }





            //Update Grand Total
            let daily_food_sales_total_total = 0

            for (var i = 1; i <= timings; i++) {

                let daily_food_sales_total_item = toInt($(".daily_sales_food_total_" + i).html());

                daily_food_sales_total_total = daily_food_sales_total_total + Number(daily_food_sales_total_item);

                $(".ds_food_total_total").html(toMoney(daily_food_sales_total_total));

            }

            //update avg

            $(".avg-1").html(toMoney((daily_food_sales_total_total / 12).toFixed(2)));

        }

        function daily_beverage_sales(row, column) {

            const timings = get_meal_timings();
            const months = get_num_months();

            //Update sales row and column totals

            let daily_beverage_sales_column_total = 0;

            for (var i = 1; i <= timings; i++) {

                let beverage_rate = $(".bev_" + i).val();

                let cover_rate = $("." + i + "_" + column).val();

                let daily_beverage_sale = Number(beverage_rate) * Number(cover_rate);



                $(".ds_beverage_" + i + "_" + column).html(toMoney(daily_beverage_sale));

                daily_beverage_sales_column_total = daily_beverage_sales_column_total + Number(daily_beverage_sale);

                //update db
                if (i == row) {
                    var formData8 = new FormData();
                    formData8.append("id", i);
                    formData8.append("month", column);
                    formData8.append("daily_beverage_sales", daily_beverage_sale);

                    let link_8 = "<?php echo base_url('index.php/budget/revenues/update_daily_beverage_sales'); ?>";

                    $.ajax({
                        async: true,
                        type: 'post',
                        url: link_8,
                        data: formData8,
                        cache: false,
                        processData: false,
                        contentType: false,

                        success: function(data) {


                        }
                    });
                }


                //


            }


            $(".ds_beverage_total_" + column).html(toMoney(daily_beverage_sales_column_total));


            //Update sales row and column totals

            let daily_beverage_sales_row_total = 0;

            for (var i = 1; i <= months; i++) {

                let beverage_rate = $(".bev_" + row).val();

                let cover_rate = $("." + row + "_" + i).val();

                let daily_beverage_sale = Number(beverage_rate) * Number(cover_rate);

                daily_beverage_sales_row_total = Number(daily_beverage_sales_row_total) + Number(daily_beverage_sale);

            }


            $(".daily_sales_beverage_total_" + row).html(toMoney(daily_beverage_sales_row_total));


            //Update Grand Total
            let daily_beverage_sales_total_total = 0

            for (var i = 1; i <= timings; i++) {

                let daily_beverage_sales_total_item = toInt($(".daily_sales_beverage_total_" + i).html());

                daily_beverage_sales_total_total = daily_beverage_sales_total_total + Number(daily_beverage_sales_total_item);

            }

            $(".ds_beverage_total_total").html(toMoney(daily_beverage_sales_total_total));

            //update avg

            $(".avg-2").html(toMoney((daily_beverage_sales_total_total / 12).toFixed(2)));

            //update grand

            let grand = toInt($(".avg-1").html()) + toInt($(".avg-2").html());
            $(".avg-total").html(toMoney((grand).toFixed(2)));

            //store grand total value somewhere

            var formData = new FormData();
            let TOTAL_AVG = grand.toFixed(2);

            let link = "<?php echo base_url('index.php/budget/revenues/update_total_avg'); ?>";

            formData.append("TOTAL_AVG", TOTAL_AVG);

            $.ajax({
                async: true,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {
                    //alert("success");
                }

            });

            //store grand total value somewhere



        }

        function monthly_food_sales(row, column) {

            const timings = get_meal_timings();
            const months = get_num_months();


            //Update sales row and column totals

            let monthly_food_sales_column_total = 0;

            for (var i = 1; i <= timings; i++) {

                let food_rate = $(".fd_" + i).val();

                let cover_rate = toInt($(".monthly_" + i + "_" + column).html());

                let monthly_food_sale = Number(food_rate) * Number(cover_rate);

                $(".ms_food_" + i + "_" + column).html(toMoney(monthly_food_sale));


                monthly_food_sales_column_total = monthly_food_sales_column_total + Number(monthly_food_sale);

                //update db
                if (i == row) {
                    var formData9 = new FormData();
                    formData9.append("id", i);
                    formData9.append("month", column);
                    formData9.append("monthly_food_sales", monthly_food_sale);

                    let link_9 = "<?php echo base_url('index.php/budget/revenues/update_monthly_food_sales'); ?>";

                    $.ajax({
                        async: true,
                        type: 'post',
                        url: link_9,
                        data: formData9,
                        cache: false,
                        processData: false,
                        contentType: false,

                        success: function(data) {


                        }
                    });
                }


                //




            }


            $(".ms_food_total_" + column).html(toMoney(monthly_food_sales_column_total));


            //Update sales row and column totals

            let monthly_food_sales_row_total = 0;

            for (var i = 1; i <= months; i++) {

                let food_rate = $(".fd_" + row).val();

                let cover_rate = toInt($(".monthly_" + row + "_" + i).html());

                let monthly_food_sale = Number(food_rate) * Number(cover_rate);

                //$(".ds_food_" + row + "_" + i).html(daily_food_sale);

                monthly_food_sales_row_total = Number(monthly_food_sales_row_total) + Number(monthly_food_sale);

            }


            $(".monthly_sales_food_total_" + row).html(toMoney(monthly_food_sales_row_total));


            //Update Grand Total
            let monthly_food_sales_total_total = 0

            for (var i = 1; i <= timings; i++) {

                let monthly_food_sales_total_item = toInt($(".monthly_sales_food_total_" + i).html());

                monthly_food_sales_total_total = monthly_food_sales_total_total + Number(monthly_food_sales_total_item);

            }

            $(".ms_food_total_total").html(toMoney(monthly_food_sales_total_total));


            //update rev ratio

            let grand_total = toInt($(".total_sales_total").html());

            let total_food_timing = Number(monthly_food_sales_row_total);

            let percentage = (total_food_timing / grand_total) * 100

            $(".fd_rev_" + row).html(percentage.toFixed(2));


        }

        function monthly_beverage_sales(row, column) {

            const timings = get_meal_timings();
            const months = get_num_months();

            // alert(row, column);


            //Update sales row and column totals

            let monthly_beverage_sales_column_total = 0;

            for (var i = 1; i <= timings; i++) {

                let beverage_rate = $(".bev_" + i).val();

                let cover_rate = toInt($(".monthly_" + i + "_" + column).html());

                let monthly_beverage_sale = Number(beverage_rate) * Number(cover_rate);


                $(".ms_beverage_" + i + "_" + column).html(toMoney(monthly_beverage_sale));

                //alert(monthly_beverage_sale);

                monthly_beverage_sales_column_total = monthly_beverage_sales_column_total + Number(monthly_beverage_sale);

                //update db
                if (i == row) {
                    var formData10 = new FormData();
                    formData10.append("id", i);
                    formData10.append("month", column);
                    formData10.append("monthly_beverage_sales", monthly_beverage_sale);

                    let link_10 = "<?php echo base_url('index.php/budget/revenues/update_monthly_beverage_sales'); ?>";

                    $.ajax({
                        async: true,
                        type: 'post',
                        url: link_10,
                        data: formData10,
                        cache: false,
                        processData: false,
                        contentType: false,

                        success: function(data) {


                        }
                    });
                }

                //

            }

            $(".ms_beverage_total_" + column).html(toMoney(monthly_beverage_sales_column_total));


            //Update sales row and column totals

            let monthly_beverage_sales_row_total = 0;

            for (var i = 1; i <= months; i++) {

                let beverage_rate = $(".bev_" + row).val();

                let cover_rate = toInt($(".monthly_" + row + "_" + i).html());

                let monthly_beverage_sale = Number(beverage_rate) * Number(cover_rate);

                monthly_beverage_sales_row_total = Number(monthly_beverage_sales_row_total) + Number(monthly_beverage_sale);

            }


            $(".monthly_sales_beverage_total_" + row).html(toMoney(monthly_beverage_sales_row_total));


            //Update Grand Total
            let monthly_beverage_sales_total_total = 0

            for (var i = 1; i <= timings; i++) {

                let monthly_beverage_sales_total_item = toInt($(".monthly_sales_beverage_total_" + i).html());

                monthly_beverage_sales_total_total = monthly_beverage_sales_total_total + Number(monthly_beverage_sales_total_item);

            }

            $(".ms_beverage_total_total").html(toMoney(monthly_beverage_sales_total_total));


        }

        function total_sales(row, column) {

            const months = get_num_months();

            let sales_total = 0;

            for (var i = 1; i <= months; i++) {

                let current_column_total = toInt($(".ms_food_total_" + i).html()) + toInt($(".ms_beverage_total_" + i).html())

                if (i == column) {

                    $(".total_sales_" + column).html(toMoney(current_column_total));

                    //save this value to db
                    var formData = new FormData();
                    formData.append("id", i);
                    formData.append("value", current_column_total);


                    let link = "<?php echo base_url('index.php/budget/revenues/update_total_sales'); ?>";

                    $.ajax({
                        async: true,
                        type: 'post',
                        url: link,
                        data: formData,
                        cache: false,
                        processData: false,
                        contentType: false,

                        success: function(data) {

                            //console.log("success", data);

                        }
                    });




                }

                sales_total = sales_total + current_column_total;


            }

            $(".total_sales_total").html(toMoney(sales_total));


        }


        function rev_pash(row, column) {

            //Daily rev_pash

            const months = get_num_months();

            let rev_pash_total_daily = 0.00;

            for (var i = 1; i <= months; i++) {


                let daily_sales_food = toInt($(".ds_food_total_" + i).html());

                let daily_beverage_sales = toInt($(".ds_beverage_total_" + i).html());

                let seats_daily = toInt($(".seatsDaily").html());


                let current_daily_rev_pash = (daily_sales_food + daily_beverage_sales) / seats_daily;

                rev_pash_total_daily = rev_pash_total_daily + current_daily_rev_pash;


                if (i == column) {

                    $(".revpash_daily_" + column).html(toMoney(current_daily_rev_pash.toFixed(2)));
                    //save_to_db

                    //ajax- update value to db

                    var formData = new FormData();
                    formData.append("id", i);
                    formData.append("daily_revpash", current_daily_rev_pash.toFixed(2));

                    let link_rev_1 = "<?php echo base_url('index.php/budget/revenues/update_revpash_daily'); ?>";

                    $.ajax({
                        async: true,
                        type: 'post',
                        url: link_rev_1,
                        data: formData,
                        cache: false,
                        processData: false,
                        contentType: false,

                        success: function(data) {
                            //console.log("success");

                        }
                    });


                    //



                }
            }

            //get daily_food_grand total

            let dfg = toInt($(".ds_food_total_total").html());

            //get daily_bev_grand_total

            let dbg = toInt($(".ds_beverage_total_total").html());


            //get daily_seats 

            let sdt = toInt($(".seatsDailyTotal").html());

            let rev_daily_tot = (dfg + dbg) / sdt;

            $(".revpash_daily_total").html(toMoney(rev_daily_tot.toFixed(2)));


            //Monthly rev_pash

            let rev_pash_total_monthly = 0.00;

            for (var i = 1; i <= months; i++) {

                var total_sales_rev = toInt($(".total_sales_" + i).html());

                let seats_monthly = toInt($(".seatsMonthly_" + i).html());

                let current_monthly_rev_pash = (total_sales_rev) / seats_monthly;

                rev_pash_total_monthly = rev_pash_total_monthly + current_monthly_rev_pash;




                if (i == column) {

                    $(".revpash_monthly_" + column).html(toMoney(current_monthly_rev_pash.toFixed(2)));

                    //ajax- update value to db

                    var formData2 = new FormData();
                    formData2.append("id", i);
                    formData2.append("monthly_revpash", current_monthly_rev_pash.toFixed(2));

                    let link_rev_2 = "<?php echo base_url('index.php/budget/revenues/update_revpash_monthly'); ?>";

                    $.ajax({
                        async: true,
                        type: 'post',
                        url: link_rev_2,
                        data: formData2,
                        cache: false,
                        processData: false,
                        contentType: false,

                        success: function(data) {
                            //console.log("success");

                        }
                    });


                    //


                }
            }

            let ts = toInt($(".total_sales_total").html());

            let smt = toInt($(".seatsMonthlyTotal").html());

            let rev_month = ts / smt;

            $(".revpash_monthly_total").html(toMoney(rev_month.toFixed(2)));


        }

        function populate_operating_hours() {

            var formData = new FormData();
            formData.append("id", 1);

            let link = "<?php echo base_url('index.php/budget/revenues/get_budget_data'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {

                    var obj = JSON.parse(data);
                    let opening_hours = obj[0].OPENING_HOURS;
                    let closing_hours = obj[0].CLOSING_HOURS;
                    let seats_available = obj[0].SEATS_AVAILABLE;
                    let total_hours = obj[0].TOTAL_HOURS;
                    let total_seats = obj[0].TOTAL_SEATS;

                    //console.log(obj);



                    // calculates time difference...
                    $('#OPENING_HOURS').val(opening_hours);
                    $('#CLOSING_HOURS').val(closing_hours);
                    $('#SEATS_AVAILABLE').val(seats_available);
                    $('#total_hrs').html(total_hours);
                    $('#taspd').html(total_seats);

                    //populate spans

                    var startTime = moment(opening_hours, 'hh:mm:ss a');

                    var endTime = moment(closing_hours, 'hh:mm:ss a');

                    var total_hrs = endTime.diff(startTime, 'hours');



                    $('#total_hrs').html(endTime.diff(startTime, 'hours'));

                    $('#taspd').html(total_hrs * seats_available);




                }
            });

        }

        function populate_daily_sales_food() {

            //get meal timings array
            let arr = new Array();

            var formData = new FormData();
            formData.append("id", 1);

            let link = "<?php echo base_url('index.php/budget/revenues/get_meal_timings'); ?>";

            $.ajax({
                async: false,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {


                    var obj = JSON.parse(data);

                    for (var i = 0; i < obj.length; i++) {

                        let meal_id = obj[i].MEAL_ID;


                        let meal_order = obj[i].MEAL_ORDER;

                        //get data for all months for specific meal timing

                        var formData2 = new FormData();

                        formData2.append("id", meal_id);

                        let link = "<?php echo base_url('index.php/budget/revenues/get_daily_food_sales'); ?>";


                        $.ajax({
                            async: true,
                            type: 'post',
                            url: link,
                            data: formData2,
                            cache: false,
                            processData: false,
                            contentType: false,

                            success: function(data) {

                                //console.log(data);
                                //populate the meal timig row


                                var meal_timing = JSON.parse(data);

                                //console.log(meal_timing);

                                //to update totals
                                var daily_food_row_total = 0.0;
                                var daily_food_column_total = 0.0;
                                var daily_food_total_total = 0.0;


                                for (var x = 1; x <= meal_timing.length; x++) {

                                    var meal_val = Number(meal_timing[x - 1].VALUE);

                                    var order = Number(meal_timing[x - 1].MEAL_ORDER);

                                    var col = Number(meal_timing[x - 1].MONTH_ID);


                                    daily_food_row_total = daily_food_row_total + meal_val;




                                    $(".ds_food_" + meal_order + "_" + col).html(Intl.NumberFormat().format(meal_val));

                                    //alert(Intl.NumberFormat().format(meal_val));



                                    //set row total
                                    $(".daily_sales_food_total_" + meal_order).html(Intl.NumberFormat().format(daily_food_row_total));

                                    // console.log(Intl.NumberFormat().format(daily_food_row_total));


                                    //set column and grand totalz
                                    let daily_food_sales_column_total = 0;

                                    for (var j = 1; j <= obj.length; j++) {

                                        daily_food_sales_column_total = daily_food_sales_column_total + toInt($(".ds_food_" + j + "_" + col).html());

                                    }

                                    daily_food_total_total = daily_food_total_total + Number(daily_food_sales_column_total);

                                    $(".ds_food_total_" + col).html(Intl.NumberFormat().format(daily_food_sales_column_total));

                                    //set grand total
                                    $(".ds_food_total_total").html(Intl.NumberFormat().format(daily_food_total_total));

                                    $(".avg-1").html((daily_food_total_total / 12).toFixed(2));

                                    //nhif = new Intl.NumberFormat().format(nhif);






                                }







                            }
                        });



                    }





                }
            });


        }


        function populate_daily_sales_beverage() {

            //get meal timings array
            let arr = new Array();

            var formData = new FormData();
            formData.append("id", 1);

            let link = "<?php echo base_url('index.php/budget/revenues/get_meal_timings'); ?>";

            $.ajax({
                async: false,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {


                    var obj = JSON.parse(data);

                    for (var i = 0; i < obj.length; i++) {

                        let meal_id = obj[i].MEAL_ID;

                        let meal_order = obj[i].MEAL_ORDER;


                        //get data for all months for specific meal timing

                        var formData2 = new FormData();

                        formData2.append("id", meal_id);

                        let link = "<?php echo base_url('index.php/budget/revenues/get_daily_beverage_sales'); ?>";


                        $.ajax({
                            async: true,
                            type: 'post',
                            url: link,
                            data: formData2,
                            cache: false,
                            processData: false,
                            contentType: false,

                            success: function(data) {

                                //console.log(data);
                                //populate the meal timig row


                                var meal_timing = JSON.parse(data);

                                //to update totals
                                let daily_beverage_row_total = 0;
                                let daily_beverage_column_total = 0;
                                let daily_beverage_total_total = 0;

                                for (var x = 1; x <= meal_timing.length; x++) {

                                    let meal_val = Number(meal_timing[x - 1].VALUE);

                                    var order = Number(meal_timing[x - 1].MEAL_ORDER);

                                    var col = Number(meal_timing[x - 1].MONTH_ID);


                                    daily_beverage_row_total = daily_beverage_row_total + meal_val;


                                    $(".ds_beverage_" + meal_order + "_" + col).html(toMoney(meal_val));

                                    //set row total
                                    $(".daily_sales_beverage_total_" + meal_order).html(toMoney(daily_beverage_row_total));


                                    //set column and grand totalz
                                    let daily_beverage_sales_column_total = 0;

                                    for (var j = 1; j <= obj.length; j++) {

                                        daily_beverage_sales_column_total = daily_beverage_sales_column_total + toInt($(".ds_beverage_" + j + "_" + col).html());

                                    }

                                    daily_beverage_total_total = daily_beverage_total_total + Number(daily_beverage_sales_column_total);

                                    $(".ds_beverage_total_" + col).html(toMoney(daily_beverage_sales_column_total));

                                    //set grand total
                                    $(".ds_beverage_total_total").html(toMoney(daily_beverage_total_total));

                                    $(".avg-2").html((daily_beverage_total_total / 12).toFixed(2));

                                    //update grand

                                    let grand = Number($(".avg-1").html()) + Number($(".avg-2").html());
                                    $(".avg-total").html((grand).toFixed(2));




                                }

                            }
                        });



                    }


                }
            });


        }

        function populate_monthly_sales_food() {

            //get meal timings array
            let arr = new Array();

            var formData = new FormData();
            formData.append("id", 1);

            let link = "<?php echo base_url('index.php/budget/revenues/get_meal_timings'); ?>";

            $.ajax({
                async: false,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {


                    var obj = JSON.parse(data);

                    for (var i = 0; i < obj.length; i++) {

                        let meal_id = obj[i].MEAL_ID;

                        let meal_order = obj[i].MEAL_ORDER;
                        //get data for all months for specific meal timing

                        var formData2 = new FormData();

                        formData2.append("id", meal_id);

                        let link = "<?php echo base_url('index.php/budget/revenues/get_monthly_food_sales'); ?>";


                        $.ajax({
                            async: false,
                            type: 'post',
                            url: link,
                            data: formData2,
                            cache: false,
                            processData: false,
                            contentType: false,

                            success: function(data) {

                                //populate the meal timig row


                                var meal_timing = JSON.parse(data);

                                //to update totals
                                let monthly_food_row_total = 0;
                                let monthly_food_column_total = 0;
                                let monthly_food_total_total = 0;
                                let monthly_food_sales_column_total = 0;

                                let total_fd_percent = 0;

                                for (var x = 1; x <= meal_timing.length; x++) {

                                    let meal_val = Number(meal_timing[x - 1].VALUE);

                                    var order = Number(meal_timing[x - 1].MEAL_ORDER);

                                    var col = Number(meal_timing[x - 1].MONTH_ID);

                                    monthly_food_row_total = monthly_food_row_total + meal_val;


                                    $(".ms_food_" + order + "_" + col).html(toMoney(meal_val));


                                    //set row total
                                    $(".monthly_sales_food_total_" + order).html(toMoney(monthly_food_row_total));


                                    //set column and grand totalz
                                    let monthly_food_sales_column_total = 0;

                                    for (var j = 1; j <= obj.length; j++) {

                                        monthly_food_sales_column_total = Number(monthly_food_sales_column_total) + toInt($(".ms_food_" + j + "_" + col).html());


                                    }



                                    monthly_food_total_total = Number(monthly_food_total_total) + Number(monthly_food_sales_column_total);

                                    $(".ms_food_total_" + col).html(toMoney(monthly_food_sales_column_total));

                                    //set grand total
                                    $(".ms_food_total_total").html(toMoney(monthly_food_total_total));



                                    //update rev ratio

                                    let grand_total = toInt($(".total_sales_total").html());

                                    let total_food_timing = Number(monthly_food_row_total);

                                    let percentage = (total_food_timing / grand_total) * 100

                                    total_fd_percent = total_fd_percent + percentage;

                                    $(".fd_rev_" + order).html(percentage.toFixed(2));

                                    $(".fd_percent").html(total_fd_percent.toFixed(2) + " %");




                                }



                            }
                        });



                    }


                }
            });

            populate_total_fd_percent();

        }

        function populate_monthly_sales_beverage() {

            //get meal timings array
            let arr = new Array();

            var formData = new FormData();
            formData.append("id", 1);

            let link = "<?php echo base_url('index.php/budget/revenues/get_meal_timings'); ?>";

            $.ajax({
                async: false,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {


                    var obj = JSON.parse(data);

                    for (var i = 0; i < obj.length; i++) {

                        let meal_id = obj[i].MEAL_ID;

                        let meal_order = obj[i].MEAL_ORDER;


                        //get data for all months for specific meal timing

                        var formData2 = new FormData();

                        formData2.append("id", meal_id);

                        let link = "<?php echo base_url('index.php/budget/revenues/get_monthly_beverage_sales'); ?>";


                        $.ajax({
                            async: false,
                            type: 'post',
                            url: link,
                            data: formData2,
                            cache: false,
                            processData: false,
                            contentType: false,

                            success: function(data) {

                                //console.log(data);
                                //populate the meal timig row


                                var meal_timing = JSON.parse(data);

                                //to update totals
                                let monthly_beverage_row_total = 0;
                                let monthly_beverage_column_total = 0;
                                let monthly_beverage_total_total = 0;

                                let total_bev_percent = 0;

                                for (var x = 1; x <= meal_timing.length; x++) {

                                    let meal_val = Number(meal_timing[x - 1].VALUE);

                                    var order = Number(meal_timing[x - 1].MEAL_ORDER);

                                    var col = Number(meal_timing[x - 1].MONTH_ID);

                                    monthly_beverage_row_total = monthly_beverage_row_total + meal_val;


                                    $(".ms_beverage_" + meal_order + "_" + col).html(toMoney(meal_val));

                                    //set row total
                                    $(".monthly_sales_beverage_total_" + meal_order).html(toMoney(monthly_beverage_row_total));


                                    //set column and grand totalz
                                    let monthly_beverage_sales_column_total = 0;

                                    for (var j = 1; j <= obj.length; j++) {

                                        monthly_beverage_sales_column_total = monthly_beverage_sales_column_total + toInt($(".ms_beverage_" + j + "_" + col).html());

                                    }

                                    monthly_beverage_total_total = monthly_beverage_total_total + Number(monthly_beverage_sales_column_total);

                                    $(".ms_beverage_total_" + col).text(toMoney(monthly_beverage_sales_column_total));

                                    //set grand total
                                    $(".ms_beverage_total_total").text(toMoney(monthly_beverage_total_total));



                                    //update rev ratio

                                    let grand_total = toInt($(".total_sales_total").html());

                                    let total_food_timing = Number(monthly_beverage_row_total.toFixed(2));

                                    let percentage = (total_food_timing / grand_total) * 100

                                    total_bev_percent = total_bev_percent + percentage;

                                    $(".bev_rev_" + order).html(percentage.toFixed(2));



                                }



                            }
                        });



                    }





                }




            });


            populate_total_bev_percent();


        }

        function populate_total_fd_percent() {

            const timings = get_meal_timings();

            let total_fd = 0

            for (var i = 1; i <= timings; i++) {

                total_fd = total_fd + Number($(".fd_rev_" + i).html());

            }

            $(".fd_percent").html(total_fd.toFixed(2) + " %");

        }

        function populate_total_bev_percent() {

            const timings = get_meal_timings();

            let total_bev = 0

            for (var i = 1; i <= timings; i++) {

                total_bev = total_bev + Number($(".bev_rev_" + i).html());

            }

            $(".bev_percent").html(total_bev.toFixed(2) + " %");

        }

        function populate_total_sales() {

            const months = get_num_months();

            let sales_total = 0;

        }

        function populate_revenue_ratios() {

            /* const grand_total = $('.total_sales_total').html();
             const timings = get_meal_timings();

             //food
             for (var i = 1; i <= timings; i++) {

                 let meal_timing_total =  $('.monthly_sales_food_total_1').html();

                console.log(meal_timing_total);

                 //sum all food
                 
             }

             //beverage
             for (var i = 1; i <= timings; i++) {

                 //sum all beverage
                 
             }*/

            //populate from db


        }

        function populate_total_revenue_ratios() {

            //alert($('.fd_rev_1').html());

        }

        function populate_revpash() {

            let DAS_TOTAL = 0;
            let MAS_TOTAL = 0;
            let REV_DAILY_TOTAL = 0;
            let REV_MONTHLY_TOTAL = 0;


            for (var i = 1; i <= get_num_months(); i++) {


                var formData = new FormData();
                formData.append("id", i);

                let link = "<?php echo base_url('index.php/budget/revenues/get_revpash'); ?>";

                $.ajax({
                    async: false,
                    type: 'post',
                    url: link,
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,

                    success: function(data) {

                        var obj = JSON.parse(data);
                        let DAS = Number(obj[0].DAILY_AVAILABLE_SEATS);
                        let MAS = Number(obj[0].MONTHLY_AVAILABLE_SEATS);
                        let REV_DAILY = Number(obj[0].REVPASH_DAILY);
                        let REV_MONTHLY = Number(obj[0].REVPASH_MONTHLY);
                        let REVPASH_ID = Number(obj[0].REVPASH_ID);

                        DAS_TOTAL = DAS_TOTAL + DAS;
                        MAS_TOTAL = MAS_TOTAL + MAS;
                        REV_DAILY_TOTAL = REV_DAILY_TOTAL + REV_DAILY;
                        REV_MONTHLY_TOTAL = REV_MONTHLY_TOTAL + REV_MONTHLY;

                        $('.seatsDaily').html(toMoney(DAS.toFixed(2)));
                        $('.seatsMonthly_' + REVPASH_ID).html(toMoney(MAS.toFixed(2)));
                        $('.revpash_daily_' + REVPASH_ID).html(toMoney(REV_DAILY.toFixed(2)));
                        $('.revpash_monthly_' + REVPASH_ID).html(toMoney(REV_MONTHLY.toFixed(2)));



                        $('.seatsDailyTotal').html(toMoney(DAS_TOTAL.toFixed(2)));
                        $('.seatsMonthlyTotal').html(toMoney(MAS_TOTAL.toFixed(2)));
                        $('.revpash_daily_total').html(toMoney(REV_DAILY_TOTAL.toFixed(2)));
                        $('.revpash_monthly_total').html(toMoney(REV_MONTHLY_TOTAL.toFixed(2)));



                    }
                });


            }




        }

        function populate_daily_covers() {

            //get meal timings array
            let arr = new Array();

            var formData = new FormData();
            formData.append("id", 1);

            let link = "<?php echo base_url('index.php/budget/revenues/get_meal_timings'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {


                    var obj = JSON.parse(data);


                    for (var i = 0; i < obj.length; i++) {

                        let meal_id = obj[i].MEAL_ID;

                        let meal_order = obj[i].MEAL_ORDER;


                        //get data for all months for specific meal timing
                        var formData2 = new FormData();
                        formData2.append("id", meal_id);
                        let link = "<?php echo base_url('index.php/budget/revenues/get_daily_covers'); ?>";




                        $.ajax({
                            async: true,
                            type: 'post',
                            url: link,
                            data: formData2,
                            cache: false,
                            processData: false,
                            contentType: false,

                            success: function(data) {


                                //to update totals
                                var daily_cover_row_total = 0.0;
                                var daily_cover_column_total = 0.0;
                                var daily_cover_total_total = 0.0;

                                //populate the meal timig row
                                var meal_timing = JSON.parse(data);


                                for (var x = 1; x <= meal_timing.length; x++) {

                                    var meal_val = Number(meal_timing[x - 1].VALUE);

                                    var order = Number(meal_timing[x - 1].MEAL_ORDER);


                                    daily_cover_row_total = daily_cover_row_total + meal_val;

                                    $('#dc_' + meal_order + '_' + x).val(meal_val);
                                    $('.dc_' + meal_order + '_' + x).text(meal_val);
                                    // $(".daily_1").each(function(){
                                    //     console.log($(this).text(meal_val))
                                    // })


                                    //set row total
                                    $("#total_" + order).html(daily_cover_row_total);




                                    //set column and grand totalz
                                    let daily_cover_column_total = 0;

                                    for (var j = 1; j <= obj.length; j++) {

                                        daily_cover_column_total = daily_cover_column_total + Number($("#dc_" + j + "_" + x).val());

                                    }

                                    daily_cover_total_total = daily_cover_total_total + Number(daily_cover_column_total);

                                    $("#dc_total_" + x).html(daily_cover_column_total);

                                    //set grand total
                                    $("#dc_total_total").html(daily_cover_total_total);




                                }



                            }
                        });



                    }





                }
            });

        }

        function populate_monthly_covers() {

            //get meal timings array
            let arr = new Array();

            var formData = new FormData();
            formData.append("id", 1);

            let link = "<?php echo base_url('index.php/budget/revenues/get_meal_timings'); ?>";

            $.ajax({
                async: true,
                type: 'post',
                url: link,
                data: formData,
                cache: false,
                processData: false,
                contentType: false,

                success: function(data) {


                    var obj = JSON.parse(data);

                    for (var i = 0; i < obj.length; i++) {

                        let meal_id = obj[i].MEAL_ID;



                        //get data for all months for specific meal timing
                        var formData2 = new FormData();
                        formData2.append("id", meal_id);
                        let link = "<?php echo base_url('index.php/budget/revenues/get_monthly_covers'); ?>";




                        $.ajax({
                            async: true,
                            type: 'post',
                            url: link,
                            data: formData2,
                            cache: false,
                            processData: false,
                            contentType: false,

                            success: function(data) {


                                //to update totals
                                var monthly_cover_row_total = 0.0;
                                var monthly_cover_column_total = 0.0;
                                var monthly_cover_total_total = 0.0;

                                //populate the meal timig row
                                var meal_timing = JSON.parse(data);


                                for (var x = 1; x <= meal_timing.length; x++) {

                                    var meal_val = Number(meal_timing[x - 1].VALUE);

                                    var order = Number(meal_timing[x - 1].MEAL_ORDER);


                                    monthly_cover_row_total = monthly_cover_row_total + meal_val;

                                    $('.monthly_' + order + '_' + x).html(toMoney(meal_val));



                                    //set row total
                                    $(".monthly_total_" + order).html(toMoney(monthly_cover_row_total));



                                    //set column and grand totalz
                                    let monthly_cover_column_total = 0;

                                    for (var j = 1; j <= obj.length; j++) {

                                        monthly_cover_column_total = monthly_cover_column_total + toInt($(".monthly_" + j + "_" + x).html());

                                    }

                                    monthly_cover_total_total = monthly_cover_total_total + Number(monthly_cover_column_total);

                                    $(".mc_total_" + x).html(toMoney(monthly_cover_column_total));

                                    //set grand total
                                    $(".mc_total_total").html(toMoney(monthly_cover_total_total));




                                }



                            }
                        });



                    }





                }
            });

        }

        function get_sundays(month, year) {

            var result = [];

            var sunday = moment(year + '-' + month).day("Sunday");

            if (sunday.date() > 7) sunday.add(7, 'd');

            var month = sunday.month();

            while (month === sunday.month()) {

                result.push(sunday.toString());

                sunday.add(7, 'd');

            }

            return result.length;

        }

        function populate_revpash_2() {



            //get daily_food_grand total

            let dfg = toInt($(".ds_food_total_total").html());

            //get daily_bev_grand_total

            let dbg = toInt($(".ds_beverage_total_total").html());


            //get daily_seats 

            let sdt = toInt($(".seatsDailyTotal").html());

            let rev_daily_tot = (dfg + dbg) / sdt;

            $(".revpash_daily_total").html(toMoney(rev_daily_tot.toFixed(2)));



            let ts = toInt($(".total_sales_total").html());

            let smt = toInt($(".seatsMonthlyTotal").html());

            let rev_month = ts / smt;

            $(".revpash_monthly_total").html(toMoney(rev_month.toFixed(2)));


        }
    </script>