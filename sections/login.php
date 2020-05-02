
<!-- Modal -->
<div id="login_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Login</h3>
			</div>
			<form id="login_form" name="contact" role="form" action="queries/check_user.php" method="post">
				<div class="modal-body">				

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
					</div>	

				</div>
				<div class="modal-footer">					
					<button type="button" class="btn btn-default" data-dismiss="modal" id="close_login">Close</button>
					<button type="submit" class="btn btn-success" id="submit">login</button>
				</div>
			</form>
		</div>
	</div>
</div>
    