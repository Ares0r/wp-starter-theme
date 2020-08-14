<aside class="widget widget_categories">
<?php 

$systems = fetchSystemsForSidebar();

// var_export($systems->posts);
$count = count($systems->posts);
// var_export(get_the_ID());

$currentPageID = get_the_ID();

?>
                        


<div class="widget-title">Systemy HETTICH</div>
<ul>
<?php 
    for($i=0;$i<$count;$i++) { 
        
        if($currentPageID == $systems->posts[$i]->ID) { ?>
        
        <li><a href="<?php echo get_permalink($systems->posts[$i]->ID) ?>" class="muted-href active"><?php echo $systems->posts[$i]->post_title; ?></a></li>
<?php
        } else { ?>

        <li><a href="<?php echo get_permalink($systems->posts[$i]->ID) ?>" class="muted-href"><?php echo $systems->posts[$i]->post_title; ?></a></li>

    <?php }
        
        
        ?>

        
        
        

<?php
    }
    ?>

</ul>
</aside>