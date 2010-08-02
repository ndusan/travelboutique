<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xml:lang="en-US" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Travelboutique</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=7" />
        <!-- Include jQuery -->
        <?php echo $html->js('jquery-1.4.2.min'); ?>

        <!-- Include cufon -->
        <?php echo $html->js('cufon'); ?>
        <?php echo $html->js('Georgia'); ?>

        <!-- Default css file -->
        <?php echo $html->css('default'); ?>

        <!-- Default js file -->
        <?php echo $html->js('default'); ?>

        <?php
        //Custom calls for css
        echo $html->customCss($this->_css);

        //Custom calls for js
        echo $html->customJs($this->_js);
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                Cufon.replace('.mainNav a', { fontFamily: 'Georgia', hover:true });
                Cufon.replace('.banners .title', { fontFamily: 'Georgia', hover:true });
                Cufon.replace('h1', { fontFamily: 'Georgia', hover:true });
                Cufon.replace('h2', { fontFamily: 'Georgia', hover:true });
                Cufon.replace('label', { fontFamily: 'Georgia', hover:true });
                Cufon.replace('h3', { fontFamily: 'Georgia', hover:true });
                Cufon.replace('h4', { fontFamily: 'Georgia', hover:true });
                <!--[if lt IE 7]>
                $(".wrapper").hide();
				$(".ie6").show();
				<![endif]-->
            });
        </script>

    </head>
    <body>
        <div class="ie6" style="display: none;">
        	<table>
        		<thead>
        			<tr>
        				<td>This website does not support your browser version. <br/>Please upgrade to one of these more modern browsers:</td>
        			</tr>
        		</thead>
        		<tbody>
        			<tr>
        				<td>
        					<a href="http://www.mozilla.com/en-US/firefox/upgrade.html" target="_blank">http://mozilla.org</a>
        				</td>
        			</tr>
        			<tr>
        				<td>
        					<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank">http://www.microsoft.com</a>
        				</td>
        			</tr>
        			<tr>
        				<td>
        					<a href="http://www.google.com/chrome" target="_blank">http://www.google.com</a>
        				</td>
        			</tr>
        		</tbody>
        	</table>
       	</div> 

        <!-- This is a content that will be included on page inside of this layout -->
        <?php if(file_exists(VIEW_PATH.$this->_controller.DS.$this->_action.'View.php')) include (VIEW_PATH.$this->_controller.DS.$this->_action.'View.php'); ?>
    </body>
</html>