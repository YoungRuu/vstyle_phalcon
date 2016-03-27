{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
<form class="form-horizontal" method="post" action="{{ url() }}user/update/{{ account.User_ID }}">
  <div class="form-group">
    <label for="inputName1" class="col-sm-2 ">Update User</label>
  </div>
  <div class="form-group">
    <label for="input1" class="col-sm-2 control-label">Full Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="input1" value="{{ account.User_Name }}" 
      placeholder="Full Name"  name="user_name">
    </div>
  </div>
  <div class="form-group">
    <label for="input2" class="col-sm-2 control-label">Username</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" readonly="" id="input2" value="{{ account.User_Username }}" 
      placeholder="Username"  name="user_username">
    </div>
  </div>
  <div class="form-group">
    <label for="input3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="input3" value="" 
      placeholder="Password"  name="user_password">
    </div>
  </div>
  <div class="form-group">
    <label for="input4" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="input4" value="{{ account.User_Email }}" 
      placeholder="Email" name="user_email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputName5" class="col-sm-2 control-label">Gender</label>
    <div class="col-sm-9">
      <select class="form-control" name="user_gender">
        <option value='1' <?php if($account->User_Gender == 1){echo 'selected';} ?> >Male</option>
        <option value='2' <?php if($account->User_Gender == 2){echo 'selected';} ?> >Female</option>
      </select>
    </div>
  </div>

  <div class="form-group">
      <label class="col-sm-2 control-label">Birthday</label>
      <div class="col-sm-9">
      <div class="input-group " id="datetimepicker1">
          <input type="text" class="form-control" name="user_birthday" placeholder="Birthday" 
          value="{{ account.User_Birthday }}" >
          <span class="input-group-addon icon-calendar date-pointer">
              <span class="glyphicon glyphicon-calendar"></span>
          </span>
      </div>
      </div>
  </div>
  
  <div class="form-group">
    <label for="inputName7" class="col-sm-2 control-label">idGroup</label>
    <div class="col-sm-9">
      <select class="form-control" name="user_idgroup">
        <option value="1" <?php if($account->User_idGroup == 1){echo 'selected';} ?>>Administrator</option>
        <option value="2" <?php if($account->User_idGroup == 2){echo 'selected';} ?> >Moderator</option>
      </select>
    </div>
  </div>
  

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Edit</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
  
</form> 
{% endblock %}