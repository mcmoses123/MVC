<footer class="footer">
	<div class="container">
	<p>&copy; My Personal Project 2019</p>
	</div>
</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="alert alert-danger" id="loginAlert">
		
		</div>
        <form>
			<input type="hidden" name="loginActive" id="loginActive" value="1">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="Email address">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
</form>
      </div>
      <div class="modal-footer">
		<a id="toggleLogin">Sign Up</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="loginSignupButton">Finish</button>
      </div>
    </div>
  </div>
</div>
  <script>
	$("#toggleLogin").click(function(){
		if ($("#loginActive").val()=="1"){
			$("#loginActive").val("0");
			$("#loginModalTitle").html("Sign Up");
			$("#toggleLogin").html("Log in");
			
		}
		else{
			$("#loginActive").val("1");
			$("#loginModalTitle").html("Log in");
			$("#toggleLogin").html("Sign Up");
			
		}
	})
	$("#loginSignupButton").click(function(){
		//alert("hey");
		$.ajax({
			type:"POST",
			url:"actions.php?action=loginSignup",
			data:"email="+$("#email").val()+"&password="+$("#password").val()+"&loginActive="+$("#loginActive").val(),
			success: function(result){
				if(result=="1"){
					window.location.assign("http://mcholding-com.stackstaging.com/content/MVC/");
					
				}else{
					$("#loginAlert").html(result).show();
					
					
				}
				
			}
		})
	})
  </script>
  
  </body>
</html>