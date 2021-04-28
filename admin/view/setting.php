<?php
require admin_view('static/header');
?>

<div class="box-">
    <h1>
        Tənzimləmələr
    </h1>
</div>

<div class="clear" style="height: 10px;"></div>

<div class="box-">
    <form action="" method="post" class="form label">
        <ul>
            <li>
                <label>Site Title</label>
                <div class="form-content">
                    <input type="text" name="settings[title]" value="<?=setting('title')?>">
                </div>
            </li>

            <li>
                <label>Site description</label>
                <div class="form-content">
                    <input type="text" name="settings[description]" value="<?=setting('description')?>">
                </div>
            </li>

            <li>
                <label>Site keywords</label>
                <div class="form-content">
                    <input type="text" name="settings[keywords]" value="<?=setting('keywords')?>">
                </div>
            </li>

            <li class="submit">
                <button type="submit" name="yenile">Yenilə</button>
            </li>
        </ul>
    </form>
</div>


<?php
require admin_view('static/footer');
?>