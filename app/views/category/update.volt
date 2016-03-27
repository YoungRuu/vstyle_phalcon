
{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
<form class="form-horizontal" method="post" action="{{ url() }}category/update/{{ category.Category_ID}}">
  <div class="form-group">
    <label for="inputName1" class="col-sm-2	">Update Category</label>
  </div>
  <div class="form-group">
    <label for="inputName1" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" readonly="" id="inputName1" value="{{ category.Category_Name }}" placeholder="Name" 
      name="category_name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputActive3" class="col-sm-2 control-label">isActive?</label>
    <div class="col-sm-9">
      <label class="radio-inline">
      <input type="radio" name="activeRadio" id="inlineRadio" 
      value='<?php if($category->Category_isActive == 1){echo "1";echo "'checked='checked" ;}else{echo '1';} ?>'>Active
      </label>
      <label class="radio-inline">
      <input type="radio" name="activeRadio" id="inlineRadio1" 
      value='<?php if($category->Category_isActive == 1){echo '0';}else{echo "0";echo"'checked='checked";} ?>'> Not Active
      </label>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Update</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
</form>	
{% endblock %}