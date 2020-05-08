<!-- Register modal -->
<div id="signup_modal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h2>Register</h2>
			</div>
			<form id="signup_form" name="contact" role="form">
				<div class="modal-body">				
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" v-model="name" name="name" class="form-control">
                    </div>
                    <div class="form-group">
						<label for="surname">Surname</label>
						<input type="text" v-model="surname" name="surname" class="form-control">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" v-model="email" name="email" class="form-control" minlength="6">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" v-model="pass1" name="password" class="form-control" pattern=".{6,}">
					</div>
					<div class="form-group">
						<label for="password2">Confirm password</label>
						<input type="password" v-model="pass2" name="password2" class="form-control" pattern=".{6,}">
					</div>							
				</div>
				<div class="modal-footer">					
					<button type="button" class="btn btn-default" data-dismiss="modal" id="close_signup">Close</button>
					<button type="submit" onclick="signupForm()">Register</button>
				</div>
			</form>
		</div>
	</div>
</div>