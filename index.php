<!DOCTYPE html>
<html>
<body>

<?php
trait message1 {
    public function witch() {
        echo "bienvenue au php ";
    }
}

class thewitcher {
    use message1;
}

$obj = new thewitcher();
$obj->witch();
?>

</body>
</html>

