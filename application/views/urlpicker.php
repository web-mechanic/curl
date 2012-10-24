
<h1> URL PICKER </h1>
<h2 class=stitre>Entrez une url ci-dessous &nbsp;!</h2>
<?php	
$attributes = array('class' => 'form-wrapper');
 echo form_open('urlfinder/analyser',$attributes); ?>
    <label for="url"></label>
    <input type="text" id="search" name="url" />
    <input type="submit" id="submit" value="vérifier" />
</form> 