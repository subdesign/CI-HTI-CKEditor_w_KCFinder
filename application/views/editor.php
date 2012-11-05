<!DOCTYPE html>
<html>
    <head>
	<!-- define actual base_url for the CKEditor script --> 
	<script type="text/javascript">var base_url = '<?php echo base_url();?>';</script>
	<!-- load CKEDtior -->
	<script type="text/javascript" src="<?php echo base_url().'assets/ckeditor/ckeditor.js';?>"></script>
    </head>

    <body>
	
    <?php
    $data = array(
	    'name'  => 'content',
	    'id'    => 'content',	
	    'rows'  => 12,
	    'value' => set_value('content')
    );
    echo form_textarea($data);
    ?>

    <!-- initialize CKEditor with parameters -->
    <script type="text/javascript">
	    CKEDITOR.replace( 'content',
		    { 
		    toolbar : 'Full',
		    height: 400,
		    resize_maxWidth: '%'
		    }
	    );	    
    </script>

    </body>
</html>