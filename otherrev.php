<div class="mains">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="revcontent">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="header-title">
        Other Revenues
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Budgets and P&L</li>
        <li class="header-title">Other Revenues</li>
      </ol>
    </section>

    <!-- Sub Menu -->
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-solid">

            <div class="box-header bg-teal">

              <h3 class="box-title month-year">Statement for the year </h3>
              <span>
                <?php

                echo "<select class='input-p5 width-auto' onchange='myFunction()' id='myselet' name='fromYear' ";
                $starting_year  = date('Y', strtotime('-5 year'));
                $ending_year = date('Y', strtotime('+5 year'));
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
              <a onclick="exportTableToCSV('other_revenue.csv')" class="btn btn-default bg-green"><i class="fa fa-file-excel-o"></i>
                </a>
              </div>
            </div>

            <div class="separator"></div>

            <div class="">

              <div class=" col-md-12 p-0">
                <div class="pb-5">&nbsp;</div>

                <div class="row">
                  <div class="col-md-6">

                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr class="table-header exportexcel">
                          <th class="">Others</th>
                          <th class="text-center">Selling Price</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr></tr>
                        <tr class="exportexcel">
                          <th>Services</th>
                          <th class="text-center">Total</th>
                        </tr>
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

                        if ($other_rev->num_rows() > 0) {
                          # if number of meal timing records is 1 or above , populate the records

                          $row_index = 0;

                          foreach ($other_rev->result() as $row) {

                            $row_index++;

                        ?>

                            <tr class="exportexcel">
                              <td><?php echo $row->COST_CENTER; ?></td>
                              <td class="p-0">
                                <div class="form-group m-0">
                                  <input type="text" onkeyup="selling_price(<?php echo $row->REVENUE_ID; ?>, <?php echo $row_index; ?>)" value="<?php echo formatMoney($row->SELLING_PRICE, true); ?>" class="right form-control nopadds_form <?php echo htmlspecialchars('sp_' . $row_index); ?>" id="<?php echo htmlspecialchars('sp_' . $row_index); ?>" name="">
                                </div>
                              </td>
                            </tr>


                        <?php
                          }
                        }

                        ?>

                      </tbody>
                    </table>

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <tbody>
                          <tr class="table-header exportexcel">
                            <th colspan="14" class="text-center"><span id="demo"><?php echo $current_year; ?></span></th>
                          </tr>
                          <tr class="exportexcel">
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
                          <tr class="exportexcel">
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

                          <tr class="bg-gray-light exportexcel">
                            <th colspan="14">
                              <p class="box-title">Items Sold</p>
                            </th>
                          </tr>
                          <tr class="exportexcel">
                            <th colspan="14">Daily</th>
                          </tr>
                          <?php

                          if ($other_rev->num_rows() > 0) {
                            # if number of meal timing records is 1 or above , populate the records

                            $row_index = 0;

                            foreach ($other_rev->result() as $row) {

                              $row_index++;

                              $revenue = $row->REVENUE_ID;

                          ?>
                              <tr class="exportexcel">
                                <td><?php echo $row->COST_CENTER; ?></td>
                                <?php

                                for ($i = 1; $i <= 12; $i++) {

                                ?>



                                  <td class="p-0">
                                    <div class="form-group m-0">
                                      <input type="text" onkeyup="sold(<?php echo $revenue; ?>, <?php echo $row_index; ?> ,<?php echo $i ?>)" value="0.00" class="right form-control nopadds_form <?php echo htmlspecialchars('sold_' . $row_index . '_' . $i); ?>" id="<?php echo htmlspecialchars('sold_' . $revenue . '_' . $i); ?>" name="">
                                    </div>
                                  </td>




                                <?php

                                }

                                ?>

                                <td id="<?php echo htmlspecialchars('sold_total_' . $revenue); ?>" class="<?php echo htmlspecialchars('sold_total_' . $row_index); ?> right">
                                  0.00
                                </td>
                              </tr>

                          <?php


                            }
                          }

                          ?>



                          <tr class="exportexcel">
                            <th>Total</th>

                            <?php

                            for ($i = 1; $i <= 12; $i++) {

                            ?>

                              <th class="right sold_col_<?php echo htmlspecialchars($i); ?>">0.00</th>

                            <?php

                            }
                            ?>

                            <th class="sold_col_total right">0.00</th>
                          </tr>

                          <tr class="exportexcel">
                            <th colspan="14">Monthly</th>
                          </tr>

                          <?php

                          if ($other_rev->num_rows() > 0) {
                            # if number of meal timing records is 1 or above , populate the records

                            $row_index = 0;

                            foreach ($other_rev->result() as $row) {

                              $row_index++;

                              $revenue = $row->REVENUE_ID;

                          ?>
                              <tr class="exportexcel">
                                <td><?php echo $row->COST_CENTER; ?></td>
                                <?php

                                for ($i = 1; $i <= 12; $i++) {

                                ?>



                                  <td class="right <?php echo htmlspecialchars('monthly_sold_' . $row_index . '_' . $i); ?>" id="<?php echo htmlspecialchars('monthly_sold_' . $revenue . '_' . $i); ?>">
                                    <span>
                                      0.00
                                    </span>
                                  </td>




                                <?php

                                }

                                ?>

                                <td id="<?php echo htmlspecialchars('monthly_sold_total_' . $revenue); ?>" class="<?php echo htmlspecialchars('monthly_sold_total_' . $row_index); ?> right">
                                  0.00
                                </td>
                              </tr>

                          <?php


                            }
                          }

                          ?>



                          <tr class="exportexcel">
                            <th>Total</th>

                            <?php

                            for ($i = 1; $i <= 12; $i++) {

                            ?>

                              <th class="right monthly_sold_col_<?php echo htmlspecialchars($i); ?>">0.00</th>

                            <?php

                            }
                            ?>

                            <th class="monthly_sold_col_total right">0.00</th>
                          </tr>


                          <!--Sales-->



                          <tr class="exportexcel">
                            <td colspan="14"></td>
                          </tr>

                          <tr class="bg-gray-light exportexcel">
                            <th colspan="14">
                              <p class="box-title">Sales</p>
                            </th>
                          </tr>
                          <tr class="exportexcel">
                            <th colspan="14">Daily</th>
                          </tr>
                          <?php

                          if ($other_rev->num_rows() > 0) {
                            # if number of meal timing records is 1 or above , populate the records

                            $row_index = 0;

                            foreach ($other_rev->result() as $row) {

                              $row_index++;

                              $revenue = $row->REVENUE_ID;

                          ?>
                              <tr class="exportexcel">
                                <td><?php echo $row->COST_CENTER; ?></td>
                                <?php

                                for ($i = 1; $i <= 12; $i++) {

                                ?>


                                  <td class="right <?php echo htmlspecialchars('sales_' . $row_index . '_' . $i); ?>" id="<?php echo htmlspecialchars('sales_' . $revenue . '_' . $i); ?>">
                                    <span>
                                      0.00
                                    </span>
                                  </td>




                                <?php

                                }

                                ?>

                                <td id="<?php echo htmlspecialchars('sales_total_' . $revenue); ?>" class="<?php echo htmlspecialchars('sales_total_' . $row_index); ?> right">
                                  0.00
                                </td>
                              </tr>

                          <?php


                            }
                          }

                          ?>


                          <tr class="exportexcel">
                            <th>Total</th>

                            <?php

                            for ($i = 1; $i <= 12; $i++) {

                            ?>

                              <th class="right sales_col_<?php echo htmlspecialchars($i); ?>">0.00</th>

                            <?php

                            }
                            ?>

                            <th class="sales_col_total right">0.00</th>
                          </tr>

                          <tr class="exportexcel">
                            <td colspan="14"></td>
                          </tr>

                          <tr class="bg-gray-light exportexcel">
                            <th>Average</th>
                            <td colspan="13" class="text-right avg-1">0.00</td>
                          </tr>

                          <tr class="exportexcel">
                            <td colspan="14"></td>
                          </tr>

                          <tr class="exportexcel">
                            <th colspan="14">Monthly</th>
                          </tr>

                          <?php

                          if ($other_rev->num_rows() > 0) {
                            # if number of meal timing records is 1 or above , populate the records

                            $row_index = 0;

                            foreach ($other_rev->result() as $row) {

                              $row_index++;

                              $revenue = $row->REVENUE_ID;

                          ?>
                              <tr class="exportexcel">
                                <td><?php echo $row->COST_CENTER; ?></td>
                                <?php

                                for ($i = 1; $i <= 12; $i++) {

                                ?>



                                  <td class="right <?php echo htmlspecialchars('monthly_sales_' . $row_index . '_' . $i); ?>" id="<?php echo htmlspecialchars('monthly_sales_' . $revenue . '_' . $i); ?>">
                                    <span>
                                      0.00
                                    </span>
                                  </td>




                                <?php

                                }

                                ?>

                                <td id="<?php echo htmlspecialchars('monthly_sales_total_' . $revenue); ?>" class="<?php echo htmlspecialchars('monthly_sales_total_' . $row_index); ?> right">
                                  0.00
                                </td>
                              </tr>

                          <?php


                            }
                          }

                          ?>



                          <tr class="exportexcel">
                            <th>Total</th>

                            <?php

                            for ($i = 1; $i <= 12; $i++) {

                            ?>

                              <th class="right monthly_sales_col_<?php echo htmlspecialchars($i); ?>">0.00</th>

                            <?php

                            }
                            ?>

                            <th class="monthly_sales_col_total right">0.00</th>
                          </tr>




                          <tr class="exportexcel">
                            <td class="14"></td>
                          </tr>

                          <tr class="exportexcel">
                            <th>Total Sales</th>

                            <?php

                            for ($i = 1; $i <= 12; $i++) {

                            ?>

                              <th class="right monthly_sales_col_<?php echo htmlspecialchars($i); ?>">0.00</th>

                            <?php

                            }
                            ?>

                            <th class="monthly_sales_col_total right">0.00</th>
                          </tr>

                          <tr class="exportexcel">
                            <td colspan="14"></td>
                          </tr>

                          <tr class="bg-gray-light exportexcel">
                            <th colspan="14">
                              <p class="box-title">Cost of Sales</p>
                            </th>
                          </tr>

                          <?



                                    ?>

                          <?php

                          if ($other_rev->num_rows() > 0) {
                            # if number of meal timing records is 1 or above , populate the records

                            $row_index = 0;

                            foreach ($other_rev->result() as $row) {

                              $row_index++;

                              $revenue = $row->REVENUE_ID;

                          ?>
                              <tr class="exportexcel">
                                <td><?php echo $row->COST_CENTER . " Cost  % Gross"; ?></td>
                                <?php

                                for ($i = 1; $i <= 12; $i++) {

                                ?>



                                  <td class="p-0">
                                    <div class="form-group m-0">
                                      <input type="text" onkeyup="update_cos(<?php echo $revenue; ?>, <?php echo $row_index; ?>, <?php echo $i; ?>)" value="0.00" class="right form-control nopadds_form <?php echo htmlspecialchars('cos_' . $row_index . '_' . $i); ?>" id="<?php echo htmlspecialchars('cos_' . $revenue . '_' . $i); ?>" name="">
                                    </div>
                                  </td>

                                <?php

                                }

                                ?>

                                <td id="<?php echo htmlspecialchars('cos_total_' . $revenue); ?>" class="<?php echo htmlspecialchars('cos_total_' . $row_index); ?> right">
                                  0.00
                                </td>
                              </tr>

                          <?php


                            }
                          }

                          ?>

                          <?php

                          if ($other_rev->num_rows() > 0) {
                            # if number of meal timing records is 1 or above , populate the records

                            $row_index = 0;

                            foreach ($other_rev->result() as $row) {

                              $row_index++;

                              $revenue = $row->REVENUE_ID;

                          ?>
                              <tr class="exportexcel">
                                <td><?php echo "Cost of " . $row->COST_CENTER . " Sales"; ?></td>
                                <?php

                                for ($i = 1; $i <= 12; $i++) {

                                ?>

                                  <td class="right <?php echo htmlspecialchars('ct_' . $row_index . '_' . $i); ?>" id="<?php echo htmlspecialchars('ct_' . $revenue . '_' . $i); ?>">

                                    0.00

                                  </td>


                                <?php

                                }

                                ?>

                                <td id="<?php echo htmlspecialchars('ct_total_' . $revenue); ?>" class="<?php echo htmlspecialchars('ct_total_' . $row_index); ?> right">
                                  0.00
                                </td>
                              </tr>

                          <?php


                            }
                          }

                          ?>


                        </tbody>

                      </table>

                    </div>
                  </div>
                </div>
              </div>

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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jspdf/tableHTMLExport.js" defer></script>

  <script type="text/javascript">
    $("#pdf").on("click", function() {
      $("#revcontent").tableHTMLExport({
        type: 'pdf',
        filename: 'Other Revenues.pdf',
      });
    })
  </script>

  <script type="text/javascript">
    $(document).ready(function() {

      $(".right").css("text-align", "right");

      populate_daily_sold();
      populate_monthly_sold();
      populate_daily_sales();
      populate_monthly_sales();
      populate_gross();
      populate_cos();

    });

    function exportTableToCSV(filename) {
      var csv = [];
      var rows = document.getElementsByClassName("exportexcel");
      // console.log(rows)
      for (var i = 0; i < rows.length; i++) {
          var row = [],
              cols = rows[i].querySelectorAll("td, th");

          for (var j = 0; j < cols.length; j++) {
              var pattern = new RegExp('\,')
              // Check if the element in cols contains input elements
              // var hasInput = cols[j].querySelectorAll("input")
              // console.log(hasInput);
              // if (hasInput.length != 0) {
              //     for (var k = 0; k < hasInput.length; k++) {
              //         console.log(hasInput[k].value)
              //         if (hasInput[k].value) {
              //             row.push(hasInput[k].value)
              //         }
              //     }
              // }
              // if (cols[j].children){
              //     console.log(cols.children)
              // }

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




    toInt = (x) => {

      var separator = new Intl.NumberFormat().format(1111).replace(/1/g, '');

      let value = x.replace(new RegExp('\\' + separator, 'g'), '');

      return Number(value);
    }

    toMoney = (x) => {

      return Intl.NumberFormat('en-US', {
        minimumFractionDigits: 2
      }).format(x);

    }


    selling_price = (id, index) => {

      let value = toInt($('.sp_' + index).val());

      var formData = new FormData();

      formData.append("id", id);
      formData.append("value", value);


      let link = "<?php echo base_url('index.php/budget/otherev/update_selling_price'); ?>";

      $.ajax({
        async: true,
        type: 'post',
        url: link,
        data: formData,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {
          console.log(data);

        }
      });

    }

    item_number = () => {

      const number = '<?php echo $other_rev->num_rows(); ?>';

      return number;
    }

    get_num_months = () => {

      return 12;
    }

    populate_daily_sold = () => {

      //get items

      var formData_1 = new FormData();

      let link_1 = "<?php echo base_url('index.php/budget/otherev/get_revs'); ?>";

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

          let size = obj.length;

          for (var i = 1; i <= size; i++) {

            let id = Number(obj[i - 1]['REVENUE_ID']);

            var formData_2 = new FormData();

            formData_2.append("id", id);

            let link_2 = "<?php echo base_url('index.php/budget/otherev/get_daily_sold'); ?>";

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

                //console.log(obj);

                let row_total = 0;

                for (var x = 1; x <= 12; x++) {

                  if (obj[x - 1]['DAILY_SOLD_ID']) {

                    let row = obj[x - 1]['REVENUE_ID'];

                    let month = obj[x - 1]['MONTH_ID'];

                    let value = Number(obj[x - 1]['VALUE']);

                    $('#sold_' + row + '_' + month).val(toMoney(value));

                    row_total += value;

                    $('#sold_total_' + row).html(toMoney(row_total));


                  }


                }


              }
            });


          }

          /*col and gran dtotal*/

          let grand_total = 0;

          for (var y = 1; y <= 12; y++) {

            let column_total = 0;

            for (var x = 1; x <= size; x++) {

              //get 
              let value = toInt($('.sold_' + x + '_' + y).val());

              column_total += value;

              //console.log(x, y, value);

            }

            //set

            $('.sold_col_' + y).html(toMoney(column_total));

            grand_total += column_total;


          }

          $('.sold_col_total').html(toMoney(grand_total));




          /**/

        }
      });



    }


    populate_monthly_sold = () => {

      //get items

      var formData_1 = new FormData();

      let link_1 = "<?php echo base_url('index.php/budget/otherev/get_revs'); ?>";

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

          let size = obj.length;

          for (var i = 1; i <= size; i++) {

            let id = Number(obj[i - 1]['REVENUE_ID']);

            var formData_2 = new FormData();

            formData_2.append("id", id);

            let link_2 = "<?php echo base_url('index.php/budget/otherev/get_monthly_sold'); ?>";

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

                //console.log(obj);

                let row_total = 0;

                for (var x = 1; x <= 12; x++) {

                  if (obj[x - 1]['MONTHLY_SOLD_ID']) {

                    let row = obj[x - 1]['REVENUE_ID'];

                    let month = obj[x - 1]['MONTH_ID'];

                    let value = Number(obj[x - 1]['VALUE']);

                    $('#monthly_sold_' + row + '_' + month).html(toMoney(value));

                    row_total += value;

                    $('#monthly_sold_total_' + row).html(toMoney(row_total));


                  }


                }


              }
            });


          }

          /*col and gran dtotal*/

          let grand_total = 0;

          for (var y = 1; y <= 12; y++) {

            let column_total = 0;

            for (var x = 1; x <= size; x++) {

              //get 
              let value = toInt($('.monthly_sold_' + x + '_' + y).html());

              if (isNaN(value)) {

                column_total += 0;

              } else {

                column_total += value;

              }


            }

            //set

            $('.monthly_sold_col_' + y).html(toMoney(column_total));

            grand_total += column_total;


          }

          $('.monthly_sold_col_total').html(toMoney(grand_total));


          /**/

        }
      });



    }

    populate_daily_sales = () => {

      //get items

      var formData_1 = new FormData();

      let link_1 = "<?php echo base_url('index.php/budget/otherev/get_revs'); ?>";

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

          let size = obj.length;

          for (var i = 1; i <= size; i++) {

            let id = Number(obj[i - 1]['REVENUE_ID']);

            var formData_2 = new FormData();

            formData_2.append("id", id);

            let link_2 = "<?php echo base_url('index.php/budget/otherev/get_daily_sales'); ?>";

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

                //console.log(obj);

                let row_total = 0;

                for (var x = 1; x <= 12; x++) {

                  if (obj[x - 1]['DAILY_SALES_ID']) {

                    let row = obj[x - 1]['REVENUE_ID'];

                    let month = obj[x - 1]['MONTH_ID'];

                    let value = Number(obj[x - 1]['VALUE']);

                    $('#sales_' + row + '_' + month).html(toMoney(value));


                    row_total += value;

                    $('#sales_total_' + row).html(toMoney(row_total));


                  }


                }


              }
            });


          }

          /*col and gran dtotal*/

          let grand_total = 0;

          for (var y = 1; y <= 12; y++) {

            let column_total = 0;

            for (var x = 1; x <= size; x++) {

              //get 
              let value = toInt($('.sales_' + x + '_' + y).html());

              if (isNaN(value)) {

                column_total += 0;

              } else {

                column_total += value;

              }

            }

            //set

            $('.sales_col_' + y).html(toMoney(column_total));

            grand_total += column_total;


          }

          $('.sales_col_total').html(toMoney(grand_total));

          /*Populate AVG*/




          $('.avg-1').html(toMoney((grand_total / 12)));




          /**/

        }
      });



    }

    populate_monthly_sales = () => {

      //get items

      var formData_1 = new FormData();

      let link_1 = "<?php echo base_url('index.php/budget/otherev/get_revs'); ?>";

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

          let size = obj.length;

          for (var i = 1; i <= size; i++) {

            let id = Number(obj[i - 1]['REVENUE_ID']);

            var formData_2 = new FormData();

            formData_2.append("id", id);

            let link_2 = "<?php echo base_url('index.php/budget/otherev/get_monthly_sales'); ?>";

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

                //console.log(obj);

                let row_total = 0;

                for (var x = 1; x <= 12; x++) {

                  if (obj[x - 1]['MONTHLY_SALES_ID']) {

                    let row = obj[x - 1]['REVENUE_ID'];

                    let month = obj[x - 1]['MONTH_ID'];

                    let value = Number(obj[x - 1]['VALUE']);

                    $('#monthly_sales_' + row + '_' + month).html(toMoney(value));


                    row_total += value;

                    $('#monthly_sales_total_' + row).html(toMoney(row_total));


                  }


                }


              }
            });


          }

          /*col and gran dtotal*/

          let grand_total = 0;

          for (var y = 1; y <= 12; y++) {

            let column_total = 0;

            for (var x = 1; x <= size; x++) {

              //get 
              let value = toInt($('.monthly_sales_' + x + '_' + y).html());

              if (isNaN(value)) {

                column_total += 0;

              } else {

                column_total += value;

              }

            }

            //set

            $('.monthly_sales_col_' + y).html(toMoney(column_total));

            grand_total += column_total;


          }

          $('.monthly_sales_col_total').html(toMoney(grand_total));




          /**/

        }
      });


    }

    populate_gross = () => {

      //get items

      var formData_1 = new FormData();

      let link_1 = "<?php echo base_url('index.php/budget/otherev/get_revs'); ?>";

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

          let size = obj.length;

          for (var i = 1; i <= size; i++) {

            let id = Number(obj[i - 1]['REVENUE_ID']);

            var formData_2 = new FormData();

            formData_2.append("id", id);

            let link_2 = "<?php echo base_url('index.php/budget/otherev/get_cost_percent'); ?>";

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

                let row_total = 0;

                for (var x = 1; x <= 12; x++) {

                  if (obj[x - 1]['COST_OF_SALES_ID']) {

                    let row = obj[x - 1]['OTHER_REVENUE_ID'];

                    let month = obj[x - 1]['MONTH_ID'];

                    let value = Number(obj[x - 1]['COST_PERCENTAGE']);

                    $('#cos_' + row + '_' + month).val(toMoney(value));


                    row_total += value;



                    $('#cos_total_' + row).html(toMoney(row_total));


                  }


                }


              }
            });


          }



        }
      });




    }

    populate_cos = () => {

      //get items

      var formData_1 = new FormData();

      let link_1 = "<?php echo base_url('index.php/budget/otherev/get_revs'); ?>";

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

          let size = obj.length;

          for (var i = 1; i <= size; i++) {

            let id = Number(obj[i - 1]['REVENUE_ID']);

            var formData_2 = new FormData();

            formData_2.append("id", id);

            let link_2 = "<?php echo base_url('index.php/budget/otherev/get_cost'); ?>";

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

                let row_total = 0;

                for (var x = 1; x <= 12; x++) {

                  if (obj[x - 1]['COST_OF_SALES_ID']) {

                    let row = obj[x - 1]['OTHER_REVENUE_ID'];

                    let month = obj[x - 1]['MONTH_ID'];

                    let value = Number(obj[x - 1]['COS']);

                    $('#ct_' + row + '_' + month).html(toMoney(value));


                    row_total += value;

                    $('#ct_total_' + row).html(toMoney(row_total / 12));


                  }


                }


              }
            });


          }



        }
      });



    }



    sold = (revenue, row, column) => {

      let new_value = $('.sold_' + row + '_' + column).val();

      var formData4 = new FormData();

      formData4.append("id", revenue);
      formData4.append("month", column)
      formData4.append("value", new_value);


      let link_4 = "<?php echo base_url('index.php/budget/otherev/update_daily_sold'); ?>";

      $.ajax({
        async: true,
        type: 'post',
        url: link_4,
        data: formData4,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {
          //console.log(data);

        }
      });


      //recalculate column total

      let column_total = 0;

      for (var i = 1; i <= item_number(); i++) {


        let value = toInt($('.sold_' + i + '_' + column).val());

        column_total += value;

      }

      //set total
      $('.sold_col_' + column).html(toMoney(column_total));


      //recalculate row total and grand total
      let row_total = 0;

      for (var i = 1; i <= get_num_months(); i++) {

        let val = toInt($('.sold_' + row + '_' + i).val());

        row_total = row_total + val;

      }

      $('.sold_total_' + row).html(toMoney(row_total));


      let grand_total = 0;

      for (var i = 1; i <= item_number(); i++) {

        let val = toInt($('.sold_total_' + i).html());

        grand_total += val;

      }


      $('.sold_col_total').html(toMoney(grand_total));

      monthly_sold(revenue, row, column);
      daily_sales(revenue, row, column);
      monthly_sales(revenue, row, column)
      cos_(revenue, row, column);

    }

    monthly_sold = (revenue, row, column) => {

      let new_value = Number(toInt($('.sold_' + row + '_' + column).val()));

      let days_of_month = Number($('.month_' + column).html());

      //set month value

      let sold_month_value = new_value * days_of_month;

      $('.monthly_sold_' + row + '_' + column).html(toMoney(sold_month_value));


      //send to db

      var formData5 = new FormData();

      formData5.append("id", revenue);
      formData5.append("month", column)
      formData5.append("value", sold_month_value);


      let link_5 = "<?php echo base_url('index.php/budget/otherev/update_monthly_sold'); ?>";

      $.ajax({
        async: true,
        type: 'post',
        url: link_5,
        data: formData5,
        cache: false,
        processData: false,
        contentType: false,

        success: function(data) {
          //console.log(data);

        }
      });



      //recalculate column total

      let column_total = 0;

      for (var i = 1; i <= item_number(); i++) {


        let value = toInt($('.monthly_sold_' + i + '_' + column).html());

        if (!isNaN(value)) {

          column_total += value;

        }



      }

      //set total
      $('.monthly_sold_col_' + column).html(toMoney(column_total));


      //recalculate row total and grand total
      let row_total = 0;

      for (var i = 1; i <= get_num_months(); i++) {

        let val = toInt($('.monthly_sold_' + row + '_' + i).html());

        if (!isNaN(val)) {

          row_total = row_total + val;

        }

      }

      $('.monthly_sold_total_' + row).html(toMoney(row_total));


      let grand_total = 0;

      for (var i = 1; i <= item_number(); i++) {

        let val = toInt($('.monthly_sold_total_' + i).html());

        if (!isNaN(val)) {

          grand_total += val;

        }

      }

      $('.monthly_sold_col_total').html(toMoney(grand_total));


    }

    daily_sales = (revenue, row, column) => {


      let new_value = toInt($('.sold_' + row + '_' + column).val());

      let selling_price = toInt($('.sp_' + row).val());

      let daily_sale_value = new_value * selling_price;

      $('.sales_' + row + '_' + column).html(toMoney(daily_sale_value));


      var formData4 = new FormData();

      formData4.append("id", revenue);
      formData4.append("month", column)
      formData4.append("value", daily_sale_value);


      let link_4 = "<?php echo base_url('index.php/budget/otherev/update_daily_sales'); ?>";

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


      //recalculate column total

      let column_total = 0;

      for (var i = 1; i <= item_number(); i++) {


        let value = toInt($('.sales_' + i + '_' + column).html());

        if (isNaN(value)) {

          column_total += 0;

        } else {

          column_total += value;

        }

      }

      //set total
      $('.sales_col_' + column).html(toMoney(column_total));


      //recalculate row total and grand total
      let row_total = 0;

      for (var i = 1; i <= get_num_months(); i++) {

        let val = toInt($('.sales_' + row + '_' + i).html());

        //row_total = row_total + val;

        if (isNaN(val)) {

          row_total += 0;

        } else {

          row_total += val;

        }

      }

      $('.sales_total_' + row).html(toMoney(row_total));


      let grand_total = 0;

      for (var i = 1; i <= item_number(); i++) {

        let val = toInt($('.sales_total_' + i).html());

        if (isNaN(val)) {

          grand_total += 0;

        } else {

          grand_total += val;

        }

      }


      $('.sales_col_total').html(toMoney(grand_total));

      //set avg total

      $('.avg-1').html(toMoney(grand_total / 12));


      //store avg value somewhere

      var formData = new FormData();
      let OTHER_AVG = (grand_total / 12).toFixed(2);

      let link = "<?php echo base_url('index.php/budget/otherev/update_other_avg'); ?>";

      formData.append("OTHER_AVG", OTHER_AVG);

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

      //store grand total value somewhere


    }

    monthly_sales = (revenue, row, column) => {

      let new_value = toInt($('.monthly_sold_' + row + '_' + column).html());

      let selling_price = toInt($('.sp_' + row).val());

      let daily_sale_value = new_value * selling_price;

      $('.monthly_sales_' + row + '_' + column).html(toMoney(daily_sale_value));


      var formData4 = new FormData();

      formData4.append("id", revenue);
      formData4.append("month", column)
      formData4.append("value", daily_sale_value);


      let link_4 = "<?php echo base_url('index.php/budget/otherev/update_monthly_sales'); ?>";

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


      //recalculate column total

      let column_total = 0;

      for (var i = 1; i <= item_number(); i++) {


        let value = toInt($('.monthly_sales_' + i + '_' + column).html());

        if (isNaN(value)) {

          column_total += 0;

        } else {

          column_total += value;

        }

      }

      //set total
      $('.monthly_sales_col_' + column).html(toMoney(column_total));


      //recalculate row total and grand total
      let row_total = 0;

      for (var i = 1; i <= get_num_months(); i++) {

        let val = toInt($('.monthly_sales_' + row + '_' + i).html());

        //row_total = row_total + val;

        if (isNaN(val)) {

          row_total += 0;

        } else {

          row_total += val;

        }

      }

      $('.monthly_sales_total_' + row).html(toMoney(row_total));


      let grand_total = 0;

      for (var i = 1; i <= item_number(); i++) {

        let val = toInt($('.monthly_sales_total_' + i).html());

        if (isNaN(val)) {

          grand_total += 0;

        } else {

          grand_total += val;

        }

      }


      $('.monthly_sales_col_total').html(toMoney(grand_total));



    }

    cos_ = (revenue, row, column) => {

      //get monthly sale value

      let value = toInt($('.monthly_sales_' + row + '_' + column).html());

      // get cost percent

      let percent = toInt($('.cos_' + row + '_' + column).val());

      let cost = Number(value) * (Number(percent) / 100);

      //set value

      $('.ct_' + row + '_' + column).html(toMoney(cost));

      //save value

      var formData4 = new FormData();

      formData4.append("id", revenue);
      formData4.append("month", column)
      formData4.append("value", cost);


      let link_4 = "<?php echo base_url('index.php/budget/otherev/update_cost'); ?>";

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



      //recalculate row total

      let row_total = 0;

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.ct_' + row + '_' + i).html());

        if (isNaN(value)) {

          row_total += 0;

        } else {

          row_total += value;

        }

      }

      $('.ct_total_' + row).html(toMoney(row_total / 12));



    }



    update_cos = (revenue, row, column) => {


      //update db


      let value = Number($('.cos_' + row + '_' + column).val());

      //save value

      var formData4 = new FormData();

      formData4.append("id", revenue);
      formData4.append("month", column)
      formData4.append("value", value);


      let link_4 = "<?php echo base_url('index.php/budget/otherev/update_cost_percent'); ?>";

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

      //recalculate row total

      let row_total = 0;

      for (var i = 1; i <= 12; i++) {

        let value = toInt($('.cos_' + row + '_' + i).val());

        if (isNaN(value)) {

          row_total += 0;

        } else {

          row_total += value;

        }

      }

      $('.cos_total_' + row).html(toMoney(row_total));




      //update costs of sale
      cos_(revenue, row, column);






    }
  </script>