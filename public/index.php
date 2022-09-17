<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Nginx!</title>
</head>
<body>
    <h1>Hello world!</h1>
    <p><?=phpversion()?></p>

    <?php

    require __DIR__ . '/../vendor/autoload.php';

    try {
        $redis = new Predis\Client('tcp://redis:6379');
    } catch (Exception $e) {
        die($e->getMessage());
    }

    $redis->set('hello', 'Hi Redis');
    $hello = $redis->get('hello');

    /*
    try {
        $db = new PDO('mysql:host=mysql;dbname=docker', 'root', '12345');
    } catch (PDOException $e) {
        print "Error! {$e->getMessage()}";
    }

    $statement = $db->prepare('select body from posts');
    $statement->execute();

    $posts = $statement->fetchAll();

    foreach ($posts as $post) {
        echo "<p>{$post['body']}</p>";
    }
    */
    ?>

    <br>
    <br>
    <br>
    <br>

    <?php

    


    ?>
    <h2><? echo $hello; ?></h2>

    <div>
        <div id="app" class="block">
            <h1 v-text="hello"></h1>
            <input type="text" v-model="hello">
        </div>
    </div>
    <script src="js/app.js"></script>
    
</body>
</html>