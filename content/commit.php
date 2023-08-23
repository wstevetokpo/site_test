<?php

    $all_data = $dataBases->get('data', '', [], 'id_data', FALSE, 0, 0);
    foreach ($all_data as $key => $value) {
        if ( isset($_POST[$value['name']]) ) {
            $dataBases->update('data', 'name', $value['name'], ['value' => $_POST[$value['name']]]);
        }
    }

?>

<form method="post">
    <?php
        $all_data = $dataBases->get('data', '', [], 'id_data', TRUE, 0, 0);
        foreach ($all_data as $key => $value) {
    ?>
            <input type="text" name="<?= $value['name'] ?>" value="<?= $value['value'] ?>"><br>
    <?php
        }
    ?>
    <button type="submit">
        VALIDER
    </button>
</form>