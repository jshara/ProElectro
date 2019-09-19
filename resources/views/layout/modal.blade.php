<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title mx-auto" id="item_name"></h3>
				<button class="btn" style="padding:0px 0px;" data-dismiss="modal"> <i class="fa fa-times fa-lg" style="color:red;"></i></button>					
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6">
						<img src="" id="item_image" style="border-radius:15px" height="250px" width="250px"/>
					</div>
					<div class="col-md-4 offset-md-1">
						<div class="form-group">
							<h5><b>Details: </b> </h5>
							<div>
								<p id="item_details"> </p>
								<p id="item_description"> </p>
							</div>
						</div>
					</div>				
				</div><br>
				<div class="row">
					<div class="form-inline" style="font-size:17px">
						<label class="col-sm-2"><b>Brand:</b> </label>
						<label id="item_brand" class="col-sm-4" style="text-align:left;"> </label>
						<label class="col-sm-2"><b>Category:</b> </label>
						<label id="item_category" class="col-sm-4"> </label>
					</div>
				</div><br>

				<div class="modal-footer">
					<h4  class="mx-auto"><b id="item_price"> </b></h4>
					<button type="button" class="btn btn-warning" data-dismiss="modal">
						Close
					</button>					
				</div>
			</div>
		</div>
	</div>
</div>