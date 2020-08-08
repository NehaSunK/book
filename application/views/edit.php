<div class="column">
    <h2 class="title">All Books</h2>
    <table>
    	<th>Name</th>
    	<th>Cover Image</th>
    	<th>Selling Price(Rs)</th>
    <?php
    foreach($books as $row){
    	echo"<form action=".site_url('searchresult')." method='POST'>";
    	echo "<tr>";
    	echo "<td>".$row->name."</td>";
    	echo "<td><img src='http://localhost/book/assets/bookcovers/".$row->coverimage."'width='200' height='121'/></td>";
    	//echo "<td>".$row->introduction."</td>";
    	echo "<td>".$row->sellingprice."</td>";
    	echo "<input type='text' style='display:none' name='bookid' value='".$row->bookid."'/>";
    	echo "<td><input type='submit' class='button is-link' name='view' value='View'/></td>";
    	//echo "<td><a class='button is-link' href='".site_url('view_details').'/'.$row->bookid."'name='edit'>Edit</a></td>";
    	//echo "<td><a class='button is-link' href='".site_url('delete').'/'.$row->bookid."' name='delete'>Delete</a></td>";
    	echo "</tr></form>";
    }

    ?>
</table>
    
</div>

