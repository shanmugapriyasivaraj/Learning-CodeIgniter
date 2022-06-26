<?php include("inc/header.php");?>
<div class="container">
    <?php echo form_open("welcome/adminSignup",['class'=>'form-horizontal']); ?>
   <h3 class="my-5">Admin Registration</h3>
    <hr>
   <div class="row">
     <div class="col-md-6">
       <div class="form-group">
         <label class="col-md-3 control-label">User Name</label>
            <div class="col-md-9">
        <?php echo form_input(['name' => 'username','class'=>'form-control','placeholder'=>'username']);?>
    </div>
       </div>
           </div>
    
</div>
     <div class="col-md-6">

    </div>
     <div class="row">
     <div class="col-md-6">
       <div class="form-group">
         <label class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
        <?php echo form_input(['name' => 'email','class'=>'form-control','placeholder'=>'Email']);?>
    </div>
       </div>
           </div>
    
</div>
     <div class="col-md-6">

    </div>
        <div class="row">
     <div class="col-md-6">
       <div class="form-group">
         <label class="col-md-3 control-label">Gender</label>
          <select class="col-lg-9" name="gender">
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
          </select>
       </div>
           </div>
    
</div>
     <div class="col-md-6">

    </div>
            <div class="row">
     <div class="col-md-6">
       <div class="form-group">
         <label class="col-md-3 control-label">Role</label>
          <select class="col-lg-9" name="role_id">
<option value="">Select</option>
<option value="Admin">Admin</option>
<option value="Co Admin">Co Admin</option>
          </select>
       </div>
           </div>
    
</div>
     <div class="col-md-6">

    </div>
     <div class="row">
     <div class="col-md-6">
       <div class="form-group">
         <label class="col-md-3 control-label">Confirm Password</label>
            <div class="col-md-9">
        <?php echo form_input(['name' => 'confirmPassword','class'=>'form-control','placeholder'=>'Confirm Passsword']);?>
    </div>
       </div>
           </div>
    
</div>
     <div class="col-md-6">

    </div>
    
    <button type="submit" class="btn btn-primary">REGISTER</button>
    <?php echo anchor("welcome","BACK",['class'=>'btn btn-primary']); ?>
</div>


<?php echo form_close();?>
</div>
<?php include("inc/footer.php");?>