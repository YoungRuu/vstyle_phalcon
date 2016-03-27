{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
  <div class="row">
  	<div class="col-sm-12">
  	  <form class="navbar-form navbar-left navbar-right" role="search" method="get" action="{{ url() }}user">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search" name="keyword">
			</div>
			<button type="submit" class="btn btn-default btn-search">Search</button>
		</form>
  	</div>
  </div>
<div class="table-responsive">
	<table class='table table-striped edit-table'>
		<thead>
		{{ link_to('user/add', 'Add') }}
			<tr>
				<th>ID</th>
				<th>Full Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Birthday</th>
				<th>Gender</th>
				<th>idGroup</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
	<tbody>
	{% for content in page.items %}
		<tr>
			<td>{{ content.User_ID }}</td>
			<td>{{ content.User_Name }}</td>
			<td>{{ content.User_Username }}</td>
			<td>{{ content.User_Email }}</td>
			<td>{{ content.User_Birthday }}</td>
			<td><?php if($content->User_Gender == 1){echo 'Male';}else{echo 'Female';} ?></td>
			<td>
			<?php if($content->User_idGroup == 1)
			{echo "<font color='red'>Administrator</font>";}
			else if($content->User_idGroup == 2){echo "<font color='green'>Moderator</font>";}
			 ?>
			</td>
			<td>{{ link_to('user/update/' ~ content.User_ID, 'Update')}}</td>
			<td>{{ link_to('user/delete/' ~ content.User_ID, 'Delete','onclick':'return confirmAction()')}}</td>
		</tr>	
	{% endfor %}
	</tbody>
		 <tfoot>
			<tr>
				<td colspan="11" align="center">
                    
            	</td>
			</tr>
		</tfoot> 
	</table>
</div>	
<!---->
<div class="row">
	<div class="col-md-12">
		<nav class="text-center">
            <ul class="pagination text-center">
              <li><a href="{{ url() }}user<?php if($keyword){echo "keyword=$keyword"."&";} ?>">First</a></li>
              <li><a href="{{ url() }}user?<?php if($keyword){echo "keyword=$keyword"."&";} ?>page={{page.before}}">Previous</a></li>
           
              <li><a href="{{ url() }}user?<?php if($keyword){echo "keyword=$keyword"."&";} ?>page={{page.next}}">Next</a><li>
              <li><a href="{{ url() }}user?<?php if($keyword){echo "keyword=$keyword"."&";} ?>page={{page.last}}">Last</a></li>
              <br>
              <span class="help-inline">Page {{ page.current }} Of {{ page.total_pages }}</span>
            </ul>
        </nav>
		
	</div>
</div>
{% endblock %}