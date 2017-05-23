    <?php
    $months = ['', 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december']; 

    $data = getDataList();
    $lastMonth = $months[0];
    $lastDay = 0;
?>

<?php
    foreach ($datas as $birthday) { ?>
        <?php
            if ($lastMonth !=$birthday['month']){ ?>
                <h1><?=$months[$birthday['month']]; ?></h1>
         <?php } ?>
        
        <?php
            if ($birthday['day'] != $lastDay) {?>
                <h2><?=$birthday['day']; ?></h2>
        <?php } ?>
            <p>
                <a href="edit/<?= $birthday['id']?>">
                    <?=$birthday['person'] . " (" . $birthday['year'] . ")"; ?>
                </a>
                    
                <a href="delete/<?= $birthday['id']?>">x</a>
            </p>

        <?php  
        $lastMonth = $birthday['month']; 
        $lastDay = $birthday['day'];
        ?>
        <?php } ?>
                    
            <p>
                  <a href="<?php URL ?>create">+ Toevoegen</a>
            </p>