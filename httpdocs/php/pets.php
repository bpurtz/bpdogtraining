<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/1/18
 * Time: 3:36 PM
 */
include_once "total_mysql_commands.php";

switch ($_POST['action']) {
    case "getPets": getUserPetsAndDisplay();
    break;
    case "uploadPet": uploadPet($_POST['name'], $_POST['sub_species'], $_POST['type'], $_POST['sex'], $_POST['energy'], $_POST['cmds_known'], $_POST['about_pet'], $_POST['motivators'], $_POST['age'], $_POST['med_prob']);
    break;
}


function getUserPetsAndDisplay() {
    $pets = getUserPets();
    displayPetChecklist($pets);
}




function displayPetChecklist($pets) {
    /*
     template: <label>
                    <input>
                </label>
                <label>
                    <input>
                </label>
     */
    while ($row = $pets->fetch_assoc()) {
        echo <<<POST
        
<div class="form-check-inline">
    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="pets[]" value="{$row['name']}">{$row['name']}
        <div hidden id="{$row['id']}"></div>
    </label>
</div>
POST;

    }
}


