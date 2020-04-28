<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Samuel Rodrigues">
    <meta name="description" content="<?PHP echo $this->getDescription();?>">
    <meta name="keywords" content="<?PHP echo $this->getKeywords();?>">
    <title><?PHP echo $this->getTitle();?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS.'Estilo.css';?>">
    <?php echo $this->addHead();?>
</head>
<body>
    
    <div class="nav">
        <a href="<?php echo DIRPAGE;?>">Home</a>
        <a href="<?php echo DIRPAGE.'contato'?>">Contato</a>
    </div>

    <div class="Header">
        <img src=<?php echo DIRIMG."EU.jpg"?> alt="Eu" class="eu"><br>
        <?php
            $BreadCrumb = new Src\Classes\ClassBreadcrumb();
            $BreadCrumb->addBrreadcrumb();
        ?>
        <br><hr>
        <br>TEL.:(85)9.9999-9999<br>
        <?php echo $this->addHeader();?>
    </div>
    
    <div class="Main">
    <?php echo $this->addMain();?>
    </div>

    <div class="Footer">
        2020 - TODOS OS DIREITOS RESERVADOS SAMUEL RODRIGUES <br>
    <?php echo $this->addFooter();?>
    </div>

</body>
</html>