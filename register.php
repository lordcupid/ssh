<?php include_once("lib/header.php"); ?>
	<p><strong> Welcome, Please Register</strong></p>
	<p>All fields are required</p>
  <form method="POST" action="processingregister.php">
  	<p>
  		<label>First Name</label>
  		<input type="text" name="first_name"placeholder="Fist Name" required/>
  	</p>

  	<p>
  		<label>Last Name</label>
  		<input type="text" name="last_name"placeholder="Last Name"required/>
  	</p>

 
  		<label>Email</label>
  		<input type="email" name="email"placeholder="email"required/>
  	</p>

  	<p>
  		<label>Password</label>
  		<input type="password" name="password"placeholder="password"required/>
    </p>

    <p>
    	<label>Gender</label>
    	<select name="Gender">
    	<option value="">Select One</option>
    	<option>Male</option>
    	<option>Female</option>
    		
    	</select>
    </p>

    <p>
  		<label>Designation</label>
  	    <select name="Designation"required/>
  	    <option value="">Select One</option>
  	    <option> Medical Team (MT)</option>
  	    <option>Patients</option>
  	    	
  	    </select>
  	</p>

  	<p>
  		<label>Department</label>
  		<input type="department" name="department"placeholder="department"required/>

  		<p>
  			<button type="submit">Register</button>
  		</p>
  	  
  </form>
 
<?php include_once("lib/footer.php"); ?>