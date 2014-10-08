<?php
    require_once('handlers/view.php');
    $_fileArr = array('class' => 'D:\\Sites\\home.hbv.no\\phptemp\\884608-klasse.txt');
    try {
        $view = new View($_fileArr);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    $fields = $view->displayAll()['class'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vis Klasser</title>
    <meta charset="UTF-8">
</head>
<body>
    <h2>Klasser</h2>
    <p><a href="/884608/web1000/innlevering1/index.php">Gå tilbake</a> | <a href="https://home.hbv.no/phptemp/884608-klasse.txt">Klasse.txt</a></p>
    <hr>
<?php
    foreach ($fields as $key => $value) {
        for ($i = 0; $i < sizeof($value); $i++) {
            if ($i == 0) {
                echo "<h2>" . $value[$i] . "</h2>\n";
            } else {
                echo "<p>" . $value[$i] . "</p>";
            }
            
        }
    }
?>
</body>
</html>