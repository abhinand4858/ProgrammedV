<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo $this->Html->charset(); ?>
<title>
        <?php echo $title_for_layout; ?>
</title>
<?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('theme');
    echo $this->Html->css('style');
    echo $this->Html->css('jquery-ui-1.8.17.custom');
    echo $this->Html->css('tipsy');
    echo $this->Html->script(array('jquery-1.7.1.min.js','jquery-ui-1.8.17.custom.min.js','jquery.tipsy.js','default.js'));
    echo $scripts_for_layout;
?>
</head>

<body>
    <div id="container">
    <div id="header">
            <img src="logo.jpg">
    <div id="topmenu">
    </div>
    </div>
    <div id="top-panel">
    </div>
    <div id="wrapper">
        <div id="content">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->Session->flash('auth'); ?>
        <?php echo $content_for_layout; ?>
        </div>
    </div>
    <div id="footer">
    <div id="credits">
            Web Development by Abhinand</a>

    </div>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
</html>
