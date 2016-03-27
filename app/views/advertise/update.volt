
{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
<form class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputName1" class="col-sm-2	">Add Advertise</label>
  </div>
  <div class="form-group">
    <label for="inputName1" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputName1" placeholder="Name" 
      value="{{ adv.Advertise_Name }}" name="advertise_name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputName2" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-9">
      <textarea  type="text" rows="4" class="form-control" id="inputName2" placeholder="Description"  name="advertise_description">{{ adv.Advertise_Description }}</textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputName3" class="col-sm-2 control-label">Url</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputName3" placeholder="Url" value="{{ adv.Advertise_Url }}" name="advertise_url">
    </div>
  </div>
  
  <div class="form-group">
    <label for="news_images" class="col-sm-2 control-label">Images</label>
    <div class="col-sm-9">
        <div class="input-group">
          <img src="{{ url() }}files/{{ adv.Advertise_Image }}" class="img-responsive" 
          style="max-height:300px;" >
        </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-9 col-sm-offset-2">
      <div class="input-group">
          <input type="text" class="form-control img-text-input" readonly="" value="">
          <span class="input-group-btn">
              <span class="btn btn-default btn-file btn-color-custom">Tải ảnh… <input type="file" 
              name="advertise_image">
              </span>
          </span>
        </div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputName5" class="col-sm-2 control-label">Position</label>
    <div class="col-sm-9">
      <select class="form-control" name="advertise_position">
        <option value="top-center" <?php if($adv->Advertise_Position == 'top-center'){echo 'selected';} ?> >Top-Center</option>
        <option value="top-left" <?php if($adv->Advertise_Position == 'top-left' ){echo 'selected';} ?> >Top-Left
        </option>
        <option value="top-right" <?php if($adv->Advertise_Position == 'top-right'){echo 'selected';} ?> >Top-Right</option>
        <option value="bottom-center" <?php if($adv->Advertise_Position == 'bottom-center'){echo 'selected';} ?> >Bottom-Center</option>
        <option value="bottom-left" <?php if($adv->Advertise_Position == 'bottom-left'){echo 'selected';} ?>>Bottom-Left</option>
        <option value="bottom-right" <?php if($adv->Advertise_Position == 'bottom-right'){echo 'selected';} ?> >Bottom-Right</option>
      </select>
    </div>
  </div>

   <div class="form-group">
    <label for="inputActive3" class="col-sm-2 control-label">isActive?</label>
    <div class="col-sm-9">
      <label class="radio-inline">
      <input type="radio" name="activeRadio" id="inlineRadio" 
      value='<?php if($adv->Advertise_isActive == 1){echo "1";echo "'checked='checked" ;}else{echo '1';} ?>'>Active
      </label>
      <label class="radio-inline">
      <input type="radio" name="activeRadio" id="inlineRadio1" 
      value='<?php if($adv->Advertise_isActive == 1){echo '0';}else{echo "0";echo"'checked='checked";} ?>'> Not Active
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