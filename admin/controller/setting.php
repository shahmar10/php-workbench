<?php

if(isset($_POST['yenile'])){
    $html = '<?php'. PHP_EOL.PHP_EOL;

    foreach (post('settings') as $key => $value) {
        $html .= '$settings["'.$key.'"] = "'.$value.'";'.PHP_EOL;

        file_put_contents(PATH . '/app/settings.php',$html);

        header('Location: '.admin_url('setting'));
    }
}

require admin_view('setting');