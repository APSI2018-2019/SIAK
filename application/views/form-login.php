

	

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="<?php echo base_url('session/do_login');?>" method="post" onsubmit="return cekform()">
          <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" id="username" name="uname" type="text" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" id="password" name="pass" type="password" placeholder="Password" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
             <input class="form-check-input" type="checkbox"> &nbsp;&nbsp;&nbsp;&nbsp;Remember Password</label>
            </div>
          </div>
         <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>  
</body>


<script type="text/javascript">
	
	function cekform(){

		if(!$("#username").val())
		{
			alert("Tidak Boleh Kosong");
			$("#username").focus();
			return false;
		}
	}
</script>