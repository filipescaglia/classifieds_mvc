<html>
<head>
    <title>Meu site</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" />
</head>
<body>
    <h1>Este é o topo</h1>
    <a href="<?php echo BASE_URL; ?>">Home</a>
    <a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
    <hr/>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    <script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>