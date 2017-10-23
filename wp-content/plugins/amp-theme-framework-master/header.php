<?php amp_header_core() ?>
 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

 <header class="header container">
        
        <div class="left">
            <?php amp_logo(); ?>
        </div>
        
        <div class="right">
            <?php amp_call_now(); ?>
            <?php amp_sidebar(['action'=>'open-button']); ?>         
        </div>
        
        <div class="clearfix"></div>
    
</header>


<?php amp_sidebar(['action'=>'start',
    'id'=>'sidebar',
    'layout'=>'nodisplay',
    'side'=>'right'
] ); ?>
<?php amp_sidebar(['action'=>'close-button']); ?>
<?php amp_menu(); ?>
<?php amp_search();?>
<?php amp_social(); ?> 
<?php amp_sidebar(['action'=>'end']); ?>

<div class="content-wrapper container">