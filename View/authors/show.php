<?php require 'View/includes/header.php'?>

<?php
    $authorId = $author->getId();
    $authorName = $author->getName();  
    $authorLastName = $author->getLastName();
    $authorDescription = $author->getDescription();
    $authorDateOfBirth = $author->getDateOfBirth();
    $authorPicture = $author->getPicture();

    $authorPrevious = $authorId - 1;
    $authorNext = $authorId + 1;
    
    if ($authorPrevious < 1) {
        $authorPrevious = 1;
    }
    if ($authorNext > 5) {
        $authorNext = 5;
    }
    
?>


<section>
    <h1><?php echo $authorName; echo $authorLastName; ?></h1>
    <img src="<?php echo $authorPicture; ?>" alt="<?php echo $authorName; ?>">
    <p><?php echo $authorDescription; ?></p>
    <p>Date Of Birth: <?php echo $authorDateOfBirth; ?></p>
    <a href="?page=authors-show&id=<?php echo $authorPrevious; ?>">Previous article</a>
    <a href="?page=authors-show&id=<?php echo $authorNext; ?>">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>