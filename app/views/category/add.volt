
{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
<form class="form-horizontal" method="post">
  <div class="form-group">
    <label for="inputName1" class="col-sm-2	">Add Category</label>
  </div>
  <div class="form-group">
    <label for="inputName1" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputName1" placeholder="Name" 
      name="category_name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputActive3" class="col-sm-2 control-label">isActive?</label>
    <div class="col-sm-9">
      	<label class="radio-inline">
		  <input type="radio" name="activeRadio" id="inlineRadio1" value="1">Active
		</label>
		<label class="radio-inline">
		  <input type="radio" checked  name="activeRadio" id="inlineRadio2" value="0">Not Active
		</label>

    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Add</button>
      <button type="reset" class="btn btn-default">Reset</button>
    </div>
  </div>
</form>
{% endblock %}