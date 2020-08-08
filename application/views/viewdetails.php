<div class="column">
    <h2 class="title">Update Book Information</h2>
    <div class="notification is-danger">
    <?php echo validation_errors(); ?>
    </div>
    
	     <?php

    	foreach($book_details as $row){
    		echo "<form action=".site_url('update').'/'.$row->bookid." method='POST'>
    			<div class='field'>
    				<label class='label'>Book Name</label>
    				<div class='control'>

    				<input id='name' name='name' class='input' type='text' value='".$row->name."' placeholder='Type the book name'>
    				</div>
    			  </div>

    			  <div class='field'>
    				<label class='label'>Cover Image</label>
    				<div class='control'>
    				<img src='http://localhost/book/assets/bookcovers/".$row->coverimage."'width='200' height='121'/>
    				<input id='cover_image' name='cover_image' class='input' type='file' value='".$row->coverimage."'>
    				</div>
    			  </div>

    			  <div class='field'>
    				<label class='label'>Book Introduction</label>
    				<div class='control'>

    				<input id='introduction' name='introduction' class='input' type='text' value='".$row->introduction."' placeholder='Type the book introduction'>
    				</div>
    			  </div>

    			   <div class='field'>
    				<label class='label'>Selling Price</label>
    				<div class='control'>

    				<input id='selling_price' name='selling_price' class='input' type='number' value='".$row->sellingprice."' placeholder='Type the selling price'>
    				<input type='submit' class='button is-link' name='modify' value='Modify Data'/>
    				</div>
    			  </div>
    			  </form>
    			  ";


    	}
    	?>


</div>