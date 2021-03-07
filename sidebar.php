<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        Hello Sidebar
    </div>
    <div class="sub-menu">
        <h2>列表</h2>
        <ul>
            <?php wp_list_pages(); ?>
        </ul>
    </div>

</body>

</html>