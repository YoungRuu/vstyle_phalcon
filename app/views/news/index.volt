
{% extends 'layouts/adminlayout.volt' %}
{% block hihi %}
<div class="row">
    <div class="col-md-12">
      <p>{{ flash.output() }}</p>
    </div>
  </div>
  <div class="row">
  	<div class="col-sm-12">
  	  <form class="navbar-form navbar-left navbar-right" role="search" method="get" action="{{ url() }}news">
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
			{{ link_to('news/add', 'Add') }}
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Alias</th>
				<th>Images</th>
				<th>Summary</th>
				<th>Dateposted</th>
				<th>isActive</th>
				<th>Views</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		{% for content in news %}
		<tr>
			<td>{{ content.News_ID }}</td>
			<td><p class="content-db">{{ content.News_Title }}</p></td>
			<td><p class="content-db">{{ content.News_Alias }}</p></td>
			<td><img class="img-responsive edit-size-img" src="{{ url() }}files/{{content.News_Images}}" alt=""></td>
			<td><p class="content-db">{{ content.News_Summary }}</p></td>
			<td>{{ content.News_Dateposted }}</td>
			<td>{{ content.News_isActive }}</td>
			<td>{{ content.News_Views }}</td>
			<td>{{ link_to('news/update/' ~ content.News_ID, 'Update') }}</td>
			<td>{{ link_to('news/delete/' ~ content.News_ID, 'Delete',
				'onclick':'return confirmAction()') }}</td>
		</tr>	
		{% endfor %}
		</tbody>
		
	</table>
</div>	
<div class="row">
    <div class="col-sm-12">
        <nav class="text-center">
            <ul class="pagination text-center">
              <?php if($tongsotrang>1){ ?>
              <?php if($tranghientai!=1){ ?>
              <li><a href="{{ url() }}news<?php if($keyword){echo "keyword=$keyword"."&";} ?>">First</a></li>
              <li><a href="{{ url() }}news?<?php if($keyword){echo "keyword=$keyword"."&";} ?>page=<?php echo $tranghientai-1;?>">Prev</a></li>
              <?php }
                 //Phân đoạn trang
                $begin = $tranghientai -2;
                if($begin <1 ){ $begin=1; }
                $end = $tranghientai +2;
                if($end > $tongsotrang){ $end = $tongsotrang; }
                  for($i=$begin; $i<=$end; $i++){
               ?>
             <li <?php if($i==$tranghientai){echo "class='active'";}?> > 
             <a href="{{ url() }}news?<?php if($keyword){echo "keyword=$keyword"."&";} ?>page=<?php echo $i;?>"><?php echo $i?></a></li>
            
              <?php }  if($tranghientai!=$tongsotrang){ ?>
                <li><a href="{{ url() }}news?<?php if($keyword){echo "keyword=$keyword"."&";} ?>page=<?php echo $tranghientai+1;?>">Next</a><li>
                <li><a href="{{ url() }}news?<?php if($keyword){echo "keyword=$keyword"."&";} ?>page=<?php echo $tongsotrang;?>">Last</a></li>
              <?php } }   ?>
            </ul>
        </nav>
    </div>
</div>
{% endblock %}