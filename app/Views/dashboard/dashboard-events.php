<?php
    foreach($events as $event)
    { 
?>
        <div class="col-xs-4 panel panel-default"><?= $event['title'] ?></div>
        <div class="col-xs-4 panel panel-default"><?= $event['place'] ?></div>
        <div class="col-xs-4 panel panel-default"><?= $event['date'] ?></div>
<?php
        
    }
?>