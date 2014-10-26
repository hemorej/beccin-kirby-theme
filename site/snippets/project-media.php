<?php 

// find the portfolio page and get the children, shuffle them and limit to only 12 results.
$images = $project->images(); 

?>
	<ul class="rslides">
    <?php foreach($images AS $item): ?>
    <?php if ($item->name() != 'thumbnail'): ?>
   	<li><img src="<?php echo $item->url(); ?>" width="640px" height="320px"/></li>
    <?php endif; ?>
    <?php endforeach ?>      
	</ul>     
    
