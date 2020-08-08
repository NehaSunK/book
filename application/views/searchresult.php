<div class="column">
    <h2 class="title">Book Details</h2>
    
    <?php
    if(!empty($book_details)){
        echo"<table>
        <th>Name</th>
        <th>Cover Image</th>
        <th>Introduction</th>
        <th>Selling Price(Rs)</th>";
        foreach($book_details as $row){
        	echo "<tr>";
        	echo "<td>".$row->name."</td>";
        	echo "<td><img src='http://localhost/book/assets/bookcovers/".$row->coverimage."'/></td>";
        	echo "<td>".$row->introduction."</td>";
        	echo "<td>".$row->sellingprice."</td>";
        	echo "<td><a class='button is-link' href='".site_url('view_details').'/'.$row->bookid."'name='edit'>Edit</a></td>";
        	echo "<td><a class='button is-link' href='".site_url('delete').'/'.$row->bookid."' name='delete'>Delete</a></td>";
        	echo "</tr>";
        }
        echo "</table>";
    }
    else{
        echo "<label class='label'>Could not find Book! :(</label>";
    }
    ?>

    
</div>
