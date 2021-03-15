<?php
    switch($footer_type){
        case 'type': ?>
            <a href='.?action=list_vehicle'>View Full Vehicle List</a><br>
            <a href='.?action=add_vehicle'>Add a Vehicle</a><br>
            <a href='.?action=edit_makes'>View/Edit Vehicle Makes</a><br>
            <a href='.?action=edit_classes'>View/Edit Vehicle Classes</a><br>
        <?php break;
        case 'makes': ?>
            <a href='.?action=list_vehicle'>View Full Vehicle List<br>
            <a href='.?action=add_vehicle'>Add a Vehicle</a><br>
            <a href='.?action=edit_types'>View/Edit Vehicle Types</a><br>
            <a href='.?action=edit_classes'>View/Edit Vehicle Classes</a><br>
        <?php break;
        case 'classes' :?>
            <a href='.?action=list_vehicle'>View Full Vehicle List</a><br>
            <a href='.?action=add_vehicle'>Add a Vehicle</a><br>
            <a href='.?action=edit_makes'>View/Edit Vehicle Makes</a><br>
            <a href='.?action=edit_types'>View/Edit Vehicle Types</a><br>
        <?php break;
        default: ?>
            <a href='.?action=list_vehicle'>View Full Vehicle List</a><br>
            <a href='.?action=add_vehicle'>Add a Vehicle</a><br>
            <a href='.?action=edit_makes'>View/Edit Vehicle Makes</a><br>
            <a href='.?action=edit_classes'>View/Edit Vehicle Classes</a><br>
            <a href='.?action=edit_types'>View/Edit Vehicle Types</a><br>
        <?php break; 
    }
    ?>