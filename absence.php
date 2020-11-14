<div class="mains">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="header-title">
        Absence
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Human Resource</li>
        <li class="header-title">Absence</li>
      </ol>
    </section>

    <!-- Sub Menu -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">

         
          <div class="row">
            
            <div class="col-md-12">
              <div class="box box-solid">
                <div class="box-header bg-teal">
                  <h3 class="box-title">Absence</h3>
                  <!-- <div class="box-tools pull-right">
                    <a href="" class="btn bg-green pull-right">View Recipes</a>
                  </div> -->
                </div>
              </div>

              <!-- modal for create new quota -->
              <div class="modal fade" id="create_quota_modal" role="dialog">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <div class="modal-title">
                        <h4>Create a new quota</h4>
                      </div>
                    </div>
                    <div class="modal-body">
                      <div class="p-5">
                        <!--tabview -->
                        <div class="tabview">
                          <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs color-teal">
                              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true" class="color-teal">General Information</a></li>
                              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"class="color-teal">Proportional calculation</a></li>
                              <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false" class="color-teal">Absence</a></li>
                            </ul>
                          </div>
                        </div>
                        <!-- end of tabview -->
                        <div class="tab-content">
                          <!-- General information tab -->
                          <div class="tab-pane active" id="tab_1">
                            <div class="tpane__tableview">
                              <!-- custom table row -->
                              <div class="tpanel__tableview-row">
                                <div class="tpanel__tableview-left">
                                  <h5>Name of the quota</h5>
                                </div>
                                <div class="tpanel__tableview-right">
                                  <input type="text" name="" class="tpanel__tableview-input" placeholder="eg 'Part time paid vacation'" required>
                                </div>
                              </div>
                              <!-- custom table row -->
                              <div class="tpanel__tableview-row">
                                <div class="tpanel__tableview-left">
                                  <h5>Claim in days</h5>
                                </div>
                                <div class="tpanel__tableview-right">
                                  <div class="mx-flex flex-row align-center">
                                    <input type="number" name="" class="mr-5 tpanel__tableview-input" placeholder="eg 'Part time paid vacation'" required>
                                    <span>Day(s)</span>
                                  </div>
                                </div>
                              </div>
                              <!-- custom table row -->
                              <div class="tpanel__tableview-row">
                                <div class="tpanel__tableview-left">
                                  <h5>Entitlement is reassigned per</h5>
                                </div>
                                <div class="tpanel__tableview-right">
                                  <select class="tpanel__tableview-drop" name="">
                                    <option value="0" disabled>Please select interval</option>
                                    <option value="year">Year</option>
                                    <option value="halfYear">Half Year</option>
                                    <option value="quater">Quater</option>
                                    <option value="month">Month</option>
                                  </select>
                                </div>
                              </div>
                              <!-- custom table row -->
                              <div class="tpanel__tableview-row">
                                <div class="tpanel__tableview-left">
                                  <h5>Form claim to</h5>
                                </div>
                                <div class="tpanel__tableview-right">
                                  <select class="tpanel__tableview-drop" name="">
                                    <option value="" disabled>Please select time at which entitlement is claimed</option>
                                    <option value="year">Year</option>
                                    <option value="halfYear">Half Year</option>
                                    <option value="quater">Quater</option>
                                    <option value="month">Month</option>
                                  </select>
                                </div>
                              </div>


                            </div>
                          </div>
                          <!-- Proportional calculation tab -->
                          <div class="tab-pane" id="tab_2">
                            <div class="ut__container">
                              <p class="ut__container-text">
                                Please choose whether the absence entitlement should be calculated proportionally at the beginning or end of employment.
                              </p>
                            </div>
                            <div class="tpanel__tableview">
                              <!--custom table row -->
                              <div class="tpanel__tableview-row">
                                <div class="tpanel__tableview-left">
                                  <h5>The beginning of employment</h5>
                                </div>
                                <div class="tpanel__tableview-right">
                                  <select required name="" id="" class="tpanel__tableview-drop">
                                    <option value="0" disabled>Please select calculation method when setting</option>
                                    <option value="monthlyprorata">Montly Pro rata</option>
                                    <option value="noprorata">No pro rata calculation</option>
                                  </select>
                                </div>
                              </div>
                              <!--custom table row -->
                              <div class="tpanel__tableview-row">
                                <div class="tpanel__tableview-left">
                                  <h5>End of employment relationship</h5>
                                </div>
                                <div class="tpanel__tableview-right">
                                  <select required name="" id="" class="tpanel__tableview-drop">
                                    <option value="0" disabled>Please select calculation method when leaving</option>
                                    <option value="monthlyprorata">Montly Pro rata</option>
                                    <option value="noprorata">No pro rata calculation</option>
                                  </select>
                                </div>
                              </div>
                              <!--custom table row -->
                              <div class="tpanel__tableview-row">
                                <div class="tpanel__tableview-left">
                                  <h5>&nbsp;</h5>
                                </div>
                                <div class="tpanel__tableview-right">
                                  <p>
                                    If you leave in the second half of the year , the full entitlement is granted. If the employee is in the waiting period, the pro rata allocation is made for each month of employment.
                                  </p>
                                </div>
                              </div>
                            
                            </div>
                          </div>
                          <!-- Graduated claim -->
                          <div class="tab-pane" id="tab_3">
                            <!--- table view -->
                            <div class="tpanel__tableview">
                              <div class="tpanel__tableview-row">
                                <div class="tpanel__tablview-left">
                                  <h5>Grant additional days of absence depending on the length of service</h5>
                                </div>
                                <div class="tpanel__tableview-right">
                                  <select name="" id="" class="tpanel__tableview-drop">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          
                            <!-- this section will display if yes is selected -->
                            <!-- <div class="mx-flex flex-row align-center">

                              <div class="mx-flex flex-row align-center">
                                <label for="Grant">Grant</label>
                                <input class="ml-5" type="number" name="" id="">
                              </div>

                              <div class="mx-flex flex-row align-center">
                                <label for="days">Day(s)</label>
                                <input type="number" name="" id="">
                              </div>

                              <div class="mx-flex flex-row align-center">
                                <p>Half-year (s) after the employment date</p>
                                <div class="icon-view">
                                  <i class="fa fa-plus"></i>
                                </div>
                              </div>

                            </div> -->


                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                      <button class="btn bg-teal">Continue</button>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Modal for confirmation -->
              <div class="modal fade" id="absence_show_modal" role="dialog">
                <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header">
                        <div class="modal-title">
                           <h4>Please confirm</h4>
                        </div>
                      </div>
                      <div class="modal-body">
                         <div class="rtx__container text-left">
                            <p>Please confirm that you want to delete this type of absence. All absence entries are deleted!</p>
                         </div>
                      </div>
                      <div class="modal-footer">
                        <button data-dismiss="modal" class="btn">Cancel</button>
                        <button type="button" class="btn bg-red">Clear</button>
                      </div>
                   </div>   
                </div>
              </div>

              <div class="md__container">
                <div class="md__container-title">
                  <h3 class="md__container-title--text"></h3>
                </div>
               <div class="md__container mx-flex mt-10 flex-row w-100">
                 <div class="md__container-left">
                   <div class="gt__container">
                     <!-- titlebox -->
                     <div class="gt__container-title">
                       <h4 class="gt__container-title--text">Absence Types</h4>
                     </div>
                     <!-- form box-->
                     <div class="gt__container-form">
                       <form accept-charset="utf8" action="POST">
                         <div class="gt__container-form--box">
                           <input type="text" name="" placeholder="New style" required autocomplete="off" class="gt__container-form--input">
                           <button title="Click to add" class="gt__container-form--btn">
                             <i class="fa fa-plus"></i>
                           </button>
                         </div>
                       </form>
                     </div>
                     <!-- group list -->
                     <div class="gt__container-listview">
                       <div class="gt__container-box">
                         <p class="gt__container-box--text">Paid vacation</p>
                       </div>
                       <div class="gt__container-box selected_container_box">
                         <p class="gt__container-box--text">Paternal leave</p>
                       </div>
                       <div class="gt__container-box">
                         <p class="gt__container-box--text">Maternity leave</p>
                       </div>
                       <div class="gt__container-box">
                         <p class="gt__container-box--text">Home Office</p>
                       </div>
                     </div>
                   </div>
                 </div>

                 <!-- right section of the container -->
                 <div class="md__container-right">
                  <form action="">
                   <div class="rt__titlebox mx-flex flex-row space-between">
                     <h4 class="rt__titlebox-title">Basic settings <span title="Enabled editing" class="bluish-font cursor-pointer rt__titlebox-smtext no-select">(Editing)</span></h4>
                     <div title="Delete this absence type" id="delete_absence_btn" class="icon-view bluish-font">
                       <i class="fa fa-trash"></i>
                     </div>
                   </div>

                   <div class="rt__container">

                     <div id="ungrouped_data">
                       <!-- table[1].data -->
                     <div class="rt__table">
                       <div class="rt__table-left">
                         <h5 class="margin-none">Surname *</h5>
                       </div>
                       <div class="rt__table-right">
                         <!-- <p class="margin-none">Paid Vacation</p> -->
                         <input type="text" class="form-control" style="width:100%;padding:0 30px">
                       </div>
                     </div>
                     <!-- end table[1.data] -->

                     <!-- table[1].data -->
                     <div class="rt__table">
                       <div class="rt__table-left">
                         <h5 class="margin-none">Colour</h5>
                       </div>
                       <div class="rt__table-right">
                         <p class="margin-none"># 04b404</p>
                       </div>
                     </div>
                     <!-- end table[1.data] -->

                      <!-- table[1].data -->
                      <div class="rt__table">
                       <div class="rt__table-left">
                         <h5 class="margin-none">Category</h5>
                       </div>
                       <div class="rt__table-right">
                         <!-- <p class="margin-none">Paid vacation</p> -->
                         <select name="" id="" class="custom-select form-control" style="font-size:1.5rem;">
                          <option value="" selected disabled>Select the absence category...</option>
                          <option value="">Paid Leave</option>
                          <option value="">Sick Leave</option>
                          <option value="">Maternity Leave</option>
                         </select>
                       </div>
                     </div>
                     <!-- end table[1.data] -->

                      <!-- table[1].data -->
                      <div class="rt__table">
                       <div class="rt__table-left">
                         <h5 class="margin-none">Allow request for half a day</h5>
                       </div>
                       <div class="rt__table-right">
                         <p class="margin-none">Yes</p>
                       </div>
                     </div>
                     <!-- end table[1.data] -->

                      <!-- table[1].data -->
                      <div class="rt__table">
                       <div class="rt__table-left">
                         <h5 class="margin-none">Certificate required</h5>
                       </div>
                       <div class="rt__table-right">
                         <p class="margin-none">No</p>
                       </div>
                     </div>
                     <!-- end table[1.data] -->

                      <!-- table[1].data -->
                      <div class="rt__table">
                       <div class="rt__table-left">
                         <h5 class="margin-none">Request for presentation required?</h5>
                       </div>
                       <div class="rt__table-right">
                         <p class="margin-none">Optional</p>
                       </div>
                     </div>
                     <!-- end table[1.data] -->

                     <!-- table[1].data -->
                     <div class="rt__table">
                       <div class="rt__table-left">
                         <h5>Allow employees representing someone to request this absence</h5>
                       </div>
                       <div class="rt__table-right">
                         <p>No</p>
                       </div>
                     </div>
                     <!-- end table[1.data] -->

                     </div>

                     <!-- grouped data-->
                     <div id="grouped_data" class="w-100 flex-1">
                       <div class="ot__titlebox">
                         <div class="ot__titlebox-text">Validity settings</div>
                       </div>

                       <div class="group_view">

                         <!-- table[1].data -->
                          <div class="rt__table">
                            <div class="rt__table-left">
                              <h5 class="margin-none">Applies to</h5>
                            </div>
                            <div class="rt__table-right">
                              <p class="margin-none">Working time model from Mon-Fri</p>
                            </div>
                          </div>
                        <!-- end table[1.data] -->

                        <!-- table[1].data -->
                        <div class="rt__table">
                            <div class="rt__table-left">
                              <h5 class="margin-none">Evaluate attendance during absence periods as overtime?</h5>
                            </div>
                            <div class="rt__table-right">
                              <p class="margin-none">Yes</p>
                            </div>
                          </div>
                        <!-- end table[1.data] -->

                      </div>


                     </div>

                     <div id="grouped_data" class="w-100 flex-1">
                       <div class="ot__titlebox">
                         <div class="ot__titlebox-text">Quota settings</div>
                       </div>

                       <div class="group_view">

                         <!-- table[1].data -->
                          <div class="rt__table">
                            <div class="rt__table-left">
                              <h5 class="margin-none">Active quota formation</h5>
                            </div>
                            <div class="rt__table-right">
                              <p class="margin-none">Yes</p>
                            </div>
                          </div>
                        <!-- end table[1.data] -->

                        <!-- table[1].data -->
                        <div class="rt__table">
                            <div class="rt__table-left">
                              <h5 class="margin-none">Days carried over from the previous year</h5>
                            </div>
                            <div class="rt__table-right">
                              <p class="margin-none">Limited carryover</p>
                            </div>
                          </div>
                        <!-- end table[1.data] -->

                        <!-- table[1].data -->
                        <div class="rt__table">
                            <div class="rt__table-left">
                              <h5 class="margin-none">Carry-over limit</h5>
                            </div>
                            <div class="rt__table-right">
                              <p class="margin-none">March 31</p>
                            </div>
                          </div>
                        <!-- end table[1.data] -->

                      </div>


                     </div>

                     <div id="grouped_data" class="w-100 flex-1">
                       <div class="ot__titlebox">
                         <div class="ot__titlebox-text">Quota settings</div>
                       </div>

                       <div class="group_view">
                         <div class="pt-5">
                          <button id="btn_create_new_quota" class="yt__button btn bg-teal border-none">Create a new quota</button>
                         </div>
                      </div>

                     </div>

                      <div id="grouped_section" class="grouped__section">
                        <div class="flt__section">
                          <p class="ftl__section-title">active</p>
                        </div>

                        <!-- accordion section first view -->
                        <div class="row">
                          <div class="col-md-12">
                            <button class="custom-dropdown drp__button" data-toggle="collapse" data-target="#drop15" role="button"
                              aria-expanded="false" aria-controls="drop3">
                              <i class="fa fa-caret-right" aria-hidden="true"></i>
                               <div class="mx-flex flex-column text-left p-10">
                                <h class="no-margin no-padding font-dark-300 fw-500">24 days</h>
                                <p class="no-margin no-padding font-grey-600 fw-400">Active for 34 employees</p>
                               </div>
                            </button>
              
                          </div>
                          <div class="col-md-12 mt-5">
                            <div class="collapse" id="drop15">
                              <div class="custom-panel-2 mt-5">
                                <div class="row mt-5 mb-5">
                                  <div class="w-100">
                                    <!-- starting section -->
                                    <div class="ytu__info-box w-100">
                                      <p class="ytu__info-box--text">
                                        This quota cannot be edited or deleted because it is min. is assigned to an employee or an absence entitlement has been created based on it. To change the settings for your employees, you can archive this quota and create a new one, which can then be reassigned.
                                      </p>
                                    </div>

                                    <!-- grouped data-->
                                    <div id="grouped_data" class="w-100 flex-1">
                                      <div class="ot__titlebox">
                                        <div class="ot__titlebox-text">General information</div>
                                      </div>

                                      <div class="group_view">

                                        <!-- table[1].data -->
                                          <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">Claim in days</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">24 days</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        <!-- table[1].data -->
                                        <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">Entitlement is reassigned per</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">Year</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        <!-- table[1].data -->
                                        <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">Form claim to</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">Beginning of the year</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        <!-- table[1].data -->
                                        <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">Active waiting time</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">No</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        

                                      </div>


                                    </div>

                                    <!-- grouped data-->
                                    <div id="grouped_data" class="w-100 flex-1">
                                      <div class="ot__titlebox">
                                        <div class="ot__titlebox-text">Proportional calculation</div>
                                      </div>

                                      <div class="group_view">

                                        <!-- table[1].data -->
                                          <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">The beginning of employment</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">Montly pro rata</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        <!-- table[1].data -->
                                        <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">End of the employment relationship</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">Montly pro rata</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        

                                        

                                      </div>


                                    </div>

                                  </div>
                                  
                                </div>
                                <!-- colored tabs start -->
                               
                            <!-- colored tabs end -->

                          </div>
                        </div>

                        <!-- divider -->
                        <div class="diviver pt-10 pb-10"></div>

                        <!-- accordion section second view -->
                        <div class="row">
                          <div class="col-md-12">
                            <button class="custom-dropdown drp__button" data-toggle="collapse" data-target="#drop10" role="button"
                              aria-expanded="false" aria-controls="drop3">
                              <i class="fa fa-caret-right" aria-hidden="true"></i>
                               <div class="mx-flex flex-column text-left p-10">
                                <h class="no-margin no-padding font-dark-300 fw-500">Working Students</h>
                                <p class="no-margin no-padding font-grey-600 fw-400">Active for 2 employees</p>
                               </div>
                            </button>
              
                          </div>
                          <div class="col-md-12 mt-5">
                            <div class="collapse" id="drop10">
                              <div class="custom-panel-2 mt-5">
                                <div class="row mt-5 mb-5">
                                  <div class="w-100">
                                    <!-- starting section -->
                                    <div class="ytu__info-box w-100">
                                      <p class="ytu__info-box--text">
                                        This quota cannot be edited or deleted because it is min. is assigned to an employee or an absence entitlement has been created based on it. To change the settings for your employees, you can archive this quota and create a new one, which can then be reassigned.
                                      </p>
                                    </div>

                                    <!-- grouped data-->
                                    <div id="grouped_data" class="w-100 flex-1">
                                      <div class="ot__titlebox">
                                        <div class="ot__titlebox-text">General information</div>
                                      </div>

                                      <div class="group_view">

                                        <!-- table[1].data -->
                                          <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">Claim in days</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">24 days</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        <!-- table[1].data -->
                                        <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">Entitlement is reassigned per</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">Year</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        <!-- table[1].data -->
                                        <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">Form claim to</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">Beginning of the year</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        <!-- table[1].data -->
                                        <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">Active waiting time</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">No</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        

                                      </div>


                                    </div>

                                    <!-- grouped data-->
                                    <div id="grouped_data" class="w-100 flex-1">
                                      <div class="ot__titlebox">
                                        <div class="ot__titlebox-text">Proportional calculation</div>
                                      </div>

                                      <div class="group_view">

                                        <!-- table[1].data -->
                                          <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">The beginning of employment</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">Montly pro rata</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        <!-- table[1].data -->
                                        <div class="rt__table">
                                            <div class="rt__table-left">
                                              <h5 class="margin-none">End of the employment relationship</h5>
                                            </div>
                                            <div class="rt__table-right">
                                              <p class="margin-none">Montly pro rata</p>
                                            </div>
                                          </div>
                                        <!-- end table[1.data] -->

                                        

                                        

                                      </div>


                                    </div>

                                  </div>
                                  
                                </div>
                          </div>
                        </div>
                      </div>
                    </div>

                        
                      </div>
                   </div>
                  </form>
                 </div>
               </div> 
              </div>

            </div>
          </div>
          
         <script>
             var DeleteAbsenceBtn = document.querySelector("#delete_absence_btn");
             var btnCreateNewQuota = document.querySelector("#btn_create_new_quota");

             DeleteAbsenceBtn.addEventListener("click", function(e) {
               e.preventDefault();
               $("#absence_show_modal").modal('show');
             });

             btnCreateNewQuota.addEventListener("click", function(e) {
               e.preventDefault();
               $("#create_quota_modal").modal("show");
             })

         </script>
        </div>
      </div>
    </section>
    <!-- /.content -->

  </div>

