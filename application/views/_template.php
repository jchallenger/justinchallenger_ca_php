<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('_head'); ?>
</head>
<body>
    <div id="site-body">
        <div id="site-nav">
            <?php if($include_nav){ $this->load->view('_nav'); } ?>
        </div>
        <div id="site-container">
            <?php
            if($view){
                $this->load->view($view);
            }else{
                show404();
            }
            ?>
        </div>

        <div id="site-footer-push"></div>
    </div>
    <footer id="site-footer">
        <?php if($include_footer) { $this->load->view('_footer'); } ?>
    </footer>
</body>
</html>
