<div class="mains">
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1 class="header-title">
				Reports
			</h1>

			<ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li class="">Hygiene</li>
				<li class="header-title">Reports</li>
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
									<h3 class="box-title">Reports</h3>
									
									<div class="box-tools pull-right">
										<a href="#/pdf" id="pdf_url" class="btn pull-right" style="border: 1px solid #dde">
										<svg width="40" height="40" style="margin-top: -0.7rem; object-fit: cover;">       
											<image xlink:href="<?php echo base_url("uploads/pdf.svg"); ?>" style="width: 30px;margin: 0 auto;height: 30px;object-fit: cover;" src="" width="40" height="40"/>    
										</svg>
										</a>
									</div>  
									<div class="box-tools pull-right">
										<a href="#/excel" class="btn pull-right" style="border: 1px solid #dde">
										<svg width="40" height="40" style="margin-top: -0.7rem; object-fit: cover;">       
											<image xlink:href="<?php echo base_url("uploads/microsoft-excel.svg"); ?>" style="width: 30px;margin: 0 auto;height: 30px;object-fit: cover;" src="" width="40" height="40"/>    
										</svg>
										</a>
									</div> 
									

							</div>
						</div>
						<form class="form">
							<div class="box-body">
								<div class="row">
									<div class="col-md-12">
										<div class="box-body">

											<div class="row">
												<div class="col-md-3">
													<div class="form-group">
														<label>Document/Check List: </label>
														
														<select id="select_report" class="form-control select-report" name="cost_center">
															<option data-url="none" value="1" disabled selected hidden>Not Selected</option>
															<?php 
																for ($i=0; $i< count($checklist); $i++){
																	echo '<option data-url="/Reports/hygiene_report_pdf" value='.$checklist[$i]['CHECKLIST_ID'].'>'.$checklist[$i]['CHECKLIST_NAME'].'</option>';
																}							
															?>
														</select>
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label>From:</label>
														<input type="date" class="form-control date" name="from_date" id="date_from">
													</div>
												</div>

												<div class="col-md-3">
													<div class="form-group">
														<label>To:</label>
														<input type="date" class="form-control date" name="to_date" id="date_to">
													</div>
												</div>
												<div class="col-md-3"><br>
								
												</div>

											</div>

										</div>
									</div>

								</div>
							</div>
						</form>
						<div class="col-md-12 personal">
							<table class="table borderless">
								<thead>
								<tr>								
									<th id="checks_th">Checks</th>
									<th id="date_th">Date</th>
									<th id="time_th">Time</th>
									<th id="shift_th">Shift</th>
									<th id="completed_th">Completed By</th>
									<th id="pass_th">Pass</th>
									<th id="fail_th">Fail</th>
									<th id="corrective_th">Corrective Action</th>
								</tr>
								</thead>
								<tbody id="table_body">
									
								</tbody>

							</table>
						</div>

					</div>
				</div>


				<style>
					.personal {
						border-collapse: collapse;
						width: 100%;
						display:none;
					}

					.personal td,
					.personal th {
						padding: 8px;
						width:auto;
					}

					.personal th {
						padding-top: 12px;
						padding-bottom: 12px;
						text-align: left;
						background-color: #F6F6F6;
						color: black;
						/* width:100%; */
					}

					.fa {
						cursor: pointer;
					}
					.fail{
						color:#ef403d;
					}
					.pass{
						color:#a6ce38;
					}
					.default{
						color: rgb(211, 211, 211);
					}

				</style>

			</div>
		</section>
		<!-- /.content -->
	</div>


	<script>
		/**
		Do not EDIT PDF Routing
		*/
		(function() {
			var SelectReport = document.querySelector("#select_report");
			var pdfUrl = document.querySelector("#pdf_url");
			SelectReport.addEventListener("change", function(e) {
				var txt = $(".select-report option:selected").attr("data-url");
				var id = $(".select-report option:selected").val()
				console.log(id)
				var from = '';
				var to = '';

				var base_url = "<?php echo base_url("index.php/hygiene") ?>";
				var binded_url = base_url + txt + '?id=' + id + 'f=' + from + '&t=' + to;

				pdfUrl.setAttribute("href", binded_url);
				pdfUrl.setAttribute("target", "_blank");
				pdfUrl.setAttribute("route", "/" + txt)
				pdfUrl.setAttribute("rel", "noopener");
			})
		})();
		/**
		  Do not EDIT PDF Routing
		 */

		$(document).ready(function () {
			var selected = ""
			var personal = $(".personal")
			var table_body = $("#table_body")
			var selectedId = "";
			var date_from = "";
			var date_to = "";
			$(".select-report").change(function () {
				selected = $(".select-report option:selected").text()
				selectedId = $(".select-report option:selected").val()
				var date_from = $("#date_from").val()
				var date_to = $("#date_to").val()
				console.log(selectedId)
				ajax_calls(selectedId, date_from, date_to)
				personal.show()
				table_body.empty()
				$(".header-title").html(selected)
				
				// start_date(selected)
				// displayMeeting(selected)
				// displayTraining(selected)
				// displaySuppliers(selected)
				// displayMonthly(selected)
				// displayHygiene(selected)
			})

			// Get the date from
			var from_date = $("#date_from")
			
			from_date.change(function(){
				date_from = $("#date_from").val()
				ajax_calls(selectedId, date_from, date_to)
			})

			// Get to date
			var to_date = $("#date_to")
			to_date.change(function(){
				date_to = $("#date_to").val()
				ajax_calls(selectedId, date_from, date_to)
			})

			function ajax_calls(selectedId, date_from, date_to){
				var table_body = $("#table_body")
				table_body.empty()
				var formData = new FormData()
				formData.append("id", selectedId);
				formData.append("from", date_from)
				formData.append("to", date_to)
				$.ajax({
					type:'POST',
					url: "<?php echo base_url('index.php/hygiene/Reports/getHdoneChecks'); ?>", 
					contentType: false,
					data: formData,
					processData: false,
					dataType: "html",
					success:function(response){
						$("#table_body").html(response)
						// if(selectedId === "5"){
						// 	$("#shift_th").remove()
						// 	$("#shift").remove()
						// }
								// renderDetails(data)
					}
				})
			}	
		})


	</script>
