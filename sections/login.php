
<!-- Modal -->
<div id="login_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Login</h2>
			</div>
			<form id="login_form" name="contact" role="form" action="queries/check_user.php" method="post">
				<div class="modal-body">				

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" v-model="email" :title="[email.length <=5 ? 'Must contain atleast 6 characters including an @ symbol' : '']" name="email" class="form-control" minlength="6" required>
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" v-model="pass" :title="[pass.length <=5 ? 'Must have atleast 6 characters' : '']" name="password" class="form-control" pattern=".{6,}" required>
					</div>	

				</div>
				<div class="modal-footer">					
					<button type="button" class="btn btn-default" data-dismiss="modal" id="close_login">Close</button>
					<button type="submit" id="submit" :class="[email.length >= 6 && pass.length >= 6 ? 'light_pri_button' : 'light_sec_button']" :disabled="email.length < 6 && pass.length < 6">login</button>
				</div>
			</form>
		</div>
	</div>
</div>
    