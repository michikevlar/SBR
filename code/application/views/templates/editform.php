<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-ui.js') ?>"></script>
<link href="<?php echo base_url('assets/css/jquery-ui.css') ?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url('assets/js/ajax_file_upload.js') ?>"></script>
<form class="form-horizontal form-edituser"  action="<?php echo base_url('admin/updateUser');?>" method="POST">

      <input type="hidden" name="redirectTo" value="<?=$redirectTo?>" />
      <input class="input-xlarge" type="hidden" name="personId" value="<?php echo $user_details->getPersonId(); ?>" />
      <div class="control-group">
         <label class="control-label">User Role</label>
         <br>
        <?php if($loggedInUserRole == 1): ?> 
         <label class="radio inline">
          <input type="radio" name="role" class="roleCheckBox"  value="1" <?= ($user_details->getRole()==1)?'checked':"";?>>
            Health Care specialist(Admin)
        </label>
        <label class="radio inline">
          <input type="radio" name="role" class="roleCheckBox"  value="3" <?= ($user_details->getRole()==3)?'checked':"";?>>
            Limited access user
        </label>
        <?php endif; ?>         
        <label class="radio inline">
          <input type="radio" name="role" class="patientCheckBox"  value="2"  <?= ($user_details->getRole()==2)?'checked':"";?>>
            Patient
        </label>
        <br>
      </div>
      <div class="control-group">
      	<label class="control-label">First Name</label>
      	<div class="controls">
				<input class="input-xlarge" type="text" name="person[givenName]" value="<?php echo $user_details->getGivenName(); ?>" />
            <div class="help-block">
            </div>
			</div>
      </div>

      <div class="control-group">
         <label class="control-label">Middle Name</label>
         <div class="controls">
            <input class="input-xlarge" type="text" name="person[middleName]" value="<?php echo $user_details->getMiddleName(); ?>" />
            <div class="help-block">
            </div>
         </div>
      </div>

      <div class="control-group">
         <label class="control-label">Last Name</label>
         <div class="controls">
            <input class="input-xlarge" type="text" name="person[familyName]" value="<?php echo $user_details->getFamilyName(); ?>" />
            <div class="help-block">
            </div>
         </div>
      </div>
      <div class="control-group">
         <label class="control-label">Password</label>
         <div class="controls">
            <input class="input-xlarge" type="password" name="password" value="" />
            <div class="help-block">
            </div>
         </div>
      </div>

      <div class="control-group hidden patientPasswords">
         <label class="control-label">Demographic Password</label>
         <div class="controls">
            <input class="input-xlarge" type="password" name="DGPassword" value="" />
            <div class="help-block">
            </div>
         </div>
      </div>

      <div class="control-group hidden patientPasswords">
         <label class="control-label">Overview Password</label>
         <div class="controls">
            <input class="input-xlarge" type="password" name="OVPassword" value="" />
            <div class="help-block">
            </div>
         </div>
      </div>
      <div class="control-group">
         <span class="btn btn-success fileinput-button">
              <i class="icon-plus icon-white"></i>
              <span>Upload Pic</span>              
              <input type="hidden" name="person[avatarFilename]" id="avatar_filename" value="<?=$user_details->getAvatarFilename()?>" />
         </span>
         <input type="file" id="avatar" class="avatar" name="avatar"/>
         <span class="upload_status"></span>
      </div>   
      <div class="control-group">
         <label class="control-label">DOB</label>
         <div class="controls">
            <input class="input-xlarge" type="text" id="birthDate" name="person[birthDate]" value="<?php echo $user_details->getBirthDate(); ?>" />
            <div class="help-block">
            </div>
         </div>
      </div>

      <div class="control-group">
         <label class="control-label">Address</label>
         <div class="controls">
            <input class="input-xlarge" type="text" name="personaddress[addressLine1]" value="<?php echo $user_details->getAddressLine1(); ?>" />
            <div class="help-block">
            </div>
         </div>
         <label class="control-label">City</label>
         <div class="controls">
            <input class="input-xlarge" type="text" name="personaddress[city]" value="<?php echo $user_details->getCity(); ?>" />
            <div class="help-block">
            </div>
         </div>
         <label class="control-label">County</label>
         <div class="controls">
            <input class="input-xlarge" type="text" name="personaddress[county]" value="<?php echo $user_details->getCounty(); ?>" />
            <div class="help-block">
            </div>
         </div>
         <label class="control-label">State</label>
         <div class="controls">
            <input class="input-xlarge" type="text" name="personaddress[state]" value="<?php echo $user_details->getState(); ?>" />
            <div class="help-block">
            </div>
         </div>
         <label class="control-label">zipCode</label>
         <div class="controls">
            <input class="input-xlarge" type="text" name="personaddress[zip4]" value="<?php echo $user_details->getZip4(); ?>" />
            <div class="help-block">
            </div>
         </div>
        
      </div>
   <div class="control-group">
      <label class="control-label">Sex</label>
      <label class="radio inline">

          <input type="radio" name="person[sex]"  value="Male"  <?php echo (($user_details->getSex() == 'Male')) ? 'checked' : "";?> >
            Male
        </label>
        <label class="radio inline">
          <input type="radio" name="person[sex]"  value="Female" <?php echo (($user_details->getSex() == 'Female')) ? 'checked' : "";?> >
            Female
        </label>
   </div>   
   <div class="control-group">
         <label class="control-label">Phone Number</label>
         <div class="controls">
            <input class="input-small" maxlength="3" type="text" name="personphone[areaCode]" value="<?php echo $user_details->getAreaCode(); ?>" />
            <input class="input-small" maxlength="3" type="text" name="personphone[exchangeCode]" value="<?php echo $user_details->getExchangeCode(); ?>" />
            <input class="input-small" maxlength="4" type="text" name="personphone[localNumber]" value="<?php echo $user_details->getLocalNumber(); ?>" />
            <div class="help-block">
            </div>
         </div>
   </div>
   <div class="control-group">
         <label class="control-label">Email</label>
         <div class="controls">
            <input class="input-xlarge" type="text" name="personemail[emailAddress]" value="<?php echo $user_details->getEmailAddress(); ?>" />
            <div class="help-block">
            </div>
         </div>
   </div>
   <div class="form-actions">
      <button type="button" class="btn btn-primary update_btn">Update</button>
   	<a onclick="history.go(-1)" class="btn">Cancel</a>
   </div>
</form>
<script type="text/javascript">
  $(document).ready(function(){
    $( "#birthDate" ).datepicker({
      showOn: "button",
      buttonImage: basePath+"/assets/img/calendar.gif",
      buttonImageOnly: true
    });
  });
</script>
