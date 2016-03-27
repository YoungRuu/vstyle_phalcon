

{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
<div class="table-responsive">
	<table class='table table-striped edit-table'>
		<thead>
		{{ link_to('feedback/add/', 'Add') }} => *Không dùng(làm dư)
			<tr>
				<th>ID</th>
				<th>Sender</th>
				<th>Email Sender</th>
				<th>Date</th>
				<th>News ID</th>
				<th>isActive?</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		{% for content in page.items %}
			<tr>
				<td>{{ content.Feedback_ID }}</td>
				<td>{{ content.Feedback_Sender }}</td>
				<td>{{ content.Feedback_Emailsender }}</td>
				<td>{{ content.Feedback_Date }}</td>
				<td>{{ content.News_ID }}</td>
				<td><?php if($content->Feedback_isActive == 1){echo 'Active';}else{echo 'Not Active';}?></td>
				<td>{{ link_to('feedback/update/' ~ content.Feedback_ID, 'Update') }}</td>
				<td>{{ link_to('feedback/delete/' ~ content.Feedback_ID, 'Delete',
				'onclick':'return confirmAction()') }}</td>
			</tr>
		{% endfor %}
		</tbody>
		
	</table>
</div>	
<div class="row">
	<div class="col-md-12">
		<nav class="text-center">
            <ul class="pagination text-center">
              <li><a href="{{ url() }}feedback">First</a></li>
              <li><a href="{{ url() }}feedback?page={{page.before}}">Previous</a></li>
           
              <li><a href="{{ url() }}feedback?page={{page.next}}">Next</a><li>
              <li><a href="{{ url() }}feedback?page={{page.last}}">Last</a></li>
              <br>
              <span class="help-inline">Page {{ page.current }} Of {{ page.total_pages }}</span>
            </ul>
        </nav>
	</div>
</div>
{% endblock %}