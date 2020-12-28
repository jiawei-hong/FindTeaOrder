<div class="row">
    <?php
        $query = $db->query('select * from items')->fetchAll();

        for($i = 0;$i < count($query);$i += 3) {
    ?>
            <div class="col">
                <?php
                    for($j = $i;$j < $i + 3;$j++){
                        if(array_key_exists($j,$query)){
                ?>
                            <div class="card">
                                <img class="card-img" src="https://unsplash.it/250/160" alt="Images Not Working!">
                                <p class="text"><?php echo $query[$j]['i_description']; ?></p>
                                <p class="text"><?php echo '$' . $query[$j]['i_price']; ?></p>
                                <div class="feat">
                                    <button class="btn">加入購物車</button>
                                </div>
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
    <?php
        }
    ?>
</div>
