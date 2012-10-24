<ol>
        <?php foreach ($liens as $lien): ?>
            <li>
              
                <h3>
                    <?php echo $lien->title ?>
                </h3>
                <?php  echo '<img src="' . $lien->src . '" />' ?>
                <p class="lien"><?php echo $lien->url ?></p>
                <p><?php echo $lien->desc ?></p>
                <?php echo anchor('urlfinder/supprimer/'.$lien->id, 'Supprimer', array('title'=>'Supprimer ce message')) ?>
            </li>
        <?php endforeach; ?>
    </ol>