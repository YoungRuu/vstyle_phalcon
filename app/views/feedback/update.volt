
{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
<form class="form-horizontal" method="post" action="{{ url() }}feedback/update/{{ feed.Feedback_ID }}">
  <div class="form-group">
    <label for="inputName1" class="col-sm-2	">Update Feedback</label>
  </div>

  <div class="form-group">
    <label for="inputnewscontent" class="col-sm-2 control-label">Content</label>
    <div class="col-sm-9">
        <div class="input-group" style="display: block">
        <textarea  class="form-control" name="feedback_content">
          {{ feed.Feedback_Content }}
        </textarea>
        <script type="text/javascript">
            CKEDITOR.replace('feedback_content',{
              height: '200px',
            });
        </script>
        </div>
    </div>
  </div>

  <div class="form-group">
    <label for="inputFeedbacksender" class="col-sm-2 control-label">Sender</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputFeedbacksender" value="{{ feed.Feedback_Sender }}" name="feedback_sender">
    </div>
  </div>
  <div class="form-group">
    <label for="inputFeedbackemailsender" class="col-sm-2 control-label">Email Sender</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" id="inputFeedbackemailsender" value="{{ feed.Feedback_Emailsender }}" name="feedback_emailsender">
    </div>
  </div>

  <div class="form-group">
    <label for="inputActive3" class="col-sm-2 control-label">isActive?</label>
    <div class="col-sm-9">
      <label class="radio-inline">
      <input type="radio" name="activeFeedback" id="inlineRadio" 
      value='<?php if($feed->Feedback_isActive == 1){echo "1";echo "'checked='checked" ;}else{echo '1';}?>'>Active
      </label>
      <label class="radio-inline">
      <input type="radio" name="activeFeedback" id="inlineRadio1" value='<?php if($feed->Feedback_isActive == 1){echo '0';}else{echo "0";echo"'checked='checked";}?>'> Not Active
      </label>
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