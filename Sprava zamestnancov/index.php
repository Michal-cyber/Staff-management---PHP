<?php include "partials/header.php" ?>


<header>
    <?php include "partials/addForm.php" ?>
</header>

<main>
    <!-- Add Employee -->
<input type="search" id="search" placeholder="Search for employee" onkeyup="Search()">

 <!-- Render Employees -->
<section class="user">
    <h2>Employees</h2>
    <ul id="list">
        <?php foreach ( $employees->getEmployyes() as $i => $item ) : ?>
            <li id = "<?= $i ?>">
                <aside class="user-flex-container">
                    <a class="user-container">
                        <img src="<?=$item->getAvatar()? $item->getAvatar() : 'https://cdn.pixabay.com/photo/2014/04/02/16/26/figure-307270_960_720.png' ?>">
                    </a>
                    <div class="user-text-container">
                        <p>Name: <strong><?= $item->getFirst_name() . " ". $item->getLast_name() ?></strong> </p>
                        <p>Gender: <?=$item->getGender()  ?> </p>
                        <p>Age: <?=$item->getAge()  ?> </p>
                        <p>Email: <?=$item->getEmail()  ?> </p>
                        <form action="edit.php" method="POST" class="edit">
                                    <input type="hidden" name="first" value=<?= $item->getFirst_name()?> >
                                    <input type="hidden" name="last" value=<?= $item->getLast_name()?> >
                                    <input type="hidden" name="email" value=<?= $item->getEmail() ?> >
                                    <input type="hidden" name="gender" value=<?= $item->getGender()?> >
                                    <input type="hidden" name="date" value=<?= $item->getAge() ?> >
                                    <input type="hidden" name="id" value=<?= $i ?> >
                                    <input type="submit" class="btn btn-warning" value="EDIT">
                        </form>

                        <form action="_inc/removeXml.php" method="POST" class="delete">
                                <input type="hidden" name="id" value=<?= $item->getFirst_name()?> >
                                <input type="submit" class="btn btn-warning" value="Delete">
                        </form>

                      
                    </div>
                </aside>     
            </li>
        <?php endforeach ?>
    </ul>
</section>

 <!-- Render Chart -->
<?php include "partials/chart.php" ?>

<?php include "partials/footer.php" ?>