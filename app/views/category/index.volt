
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
			{{ link_to('category/add/', 'Add') }}
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Alias</th>
				<th>Active?</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
	{% for content in page.items %}
		<tr>
			<td>{{ content.Category_ID }}</td>
			<td><p class="content-db">{{ content.Category_Name }}</p></td>
			<td><p class="content-db">{{ content.Category_Alias }}</p></td>
			<td><?php if($content->Category_isActive == 1){echo 'Active';}else{echo 'Not Active';}?></td>
			<td>{{ link_to('category/update/' ~ content.Category_ID, 'Update') }}</td>
			<td>{{ link_to('category/delete/' ~ content.Category_ID, 'Delete',
			'onclick':'return confirmAction()') }}</td>
		</tr>	
	{% endfor %}
		</tbody>
	
	</table>
</div>
<!---->
<div class="row">
	<div class="col-md-12">
		<nav class="text-center">
            <ul class="pagination text-center">
              <li><a href="{{ url() }}category">First</a></li>
              <li><a href="{{ url() }}category?page={{page.before}}">Previous</a></li>
           
              <li><a href="{{ url() }}category?page={{page.next}}">Next</a><li>
              <li><a href="{{ url() }}category?page={{page.last}}">Last</a></li>
              <br>
              <span class="help-inline">Page {{ page.current }} Of {{ page.total_pages }}</span>
            </ul>
        </nav>
	</div>
</div>
{% endblock %}