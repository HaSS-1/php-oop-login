
<?php
   require APPROOT . '/views/includes/head.php';
?>

<div id="section-landing">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>

    <div class="wrapper-landing">
    <?php if(isset($_SESSION['user_id'])) : ?>
          <h1>👋 Welcome to <?php echo SITENAME; ?></h1>
            
            <p>
                This is a simple PHP MVC Web App that I built to learn PHP.
      
        <h2>an other step on my learning journey.</h2>
        <?php else : ?>
            <h1>You need to login in order to see this content</h1>
            <?php endif; ?>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>