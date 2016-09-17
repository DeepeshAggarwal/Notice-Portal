<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h3 class="modal-title center" id="myModalLabel">Log In</h3>
			</div>
			<div class="md-col-8" style="margin:20px auto">
				<form method="post" action="user_login.php">
					<div class="form-group">
						<input type="text" class="form-control" id="roll" name="roll" placeholder="Enter Roll Number">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
					</div>
					<button type="submit" class="btn btn-block btn-primary">Log In</button>
				</form>
			</div>
			<br>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>