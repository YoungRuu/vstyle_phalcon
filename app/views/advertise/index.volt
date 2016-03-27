

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
			{{ link_to('advertise/add', 'Add') }}
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Url</th>
				<th>Images</th>
				<th>Visit</th>
				<th>Position</th>
				<th>isActive?</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		{% for content in page.items %}	
			<tr>
				<td>{{ content.Advertise_ID }}</td>
				<td><p class="content-db">{{ content.Advertise_Name }}</p></td>
				<td><p class="content-db">{{ content.Advertise_Description }}</p></td>
				<td><p class="content-db">{{ content.Advertise_Url }}</p></td>
			<td><img class="img-responsive edit-size-img" src="{{ url() }}files/{{content.Advertise_Image}}" alt=""></td>
				<td>{{ content.Advertise_Visit }}</td>
				<td>{{ content.Advertise_Position }}</td>
				<td><?php if($content->Advertise_isActive == 1){echo 'Active';}else{echo 'Not Active';}?></td>
				<td>{{ link_to('advertise/update/' ~ content.Advertise_ID,'Update') }}</td>
				<td>{{ link_to('advertise/delete/' ~ content.Advertise_ID, 'Delete',
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
              <li><a href="{{ url() }}advertise">First</a></li>
              <li><a href="{{ url() }}advertise?page={{page.before}}">Previous</a></li>
           
              <li><a href="{{ url() }}advertise?page={{page.next}}">Next</a><li>
              <li><a href="{{ url() }}advertise?page={{page.last}}">Last</a></li>
              <br>
              <span class="help-inline">Page {{ page.current }} Of {{ page.total_pages }}</span>
            </ul>
        </nav>
	</div>
</div>
{% endblock %}