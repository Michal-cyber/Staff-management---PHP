<?php 
 include "partials/header.php";

require_once "_inc/config.php";

$id = $_POST['id'];
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$age = $_POST['date'];

?>

<section id="edit">
                <form action="_inc/editXml.php" method="POST">
                      <h2>Edit employee</h2>
                      <input type="hidden" name="id" value= "<?= $id ?>">
                      <div class="block">     <p>First name: </p> <input type="text" name="first" value= "<?= $first ?>"></div>
                      <div class="block">     <p>Last name: </p> <input type="text" name="last" value= "<?= $last ?>"></div>
                      <div class="block">     <p class="email"> Email: </p> <input type="email" name="email" value= "<?= $email ?>"></div>
                      <div class="block">     <p class="gender"> Gender: </p> <input type="text"  name="gender" value= "<?= $gender ?>"></div>
                      <div class="block">     <p class="age">Age: </p> <input type="number" min="18" max="64"  name="date" value= "<?= $age ?>"></div>
                      <div class="block">     <input type="submit" value="Edit" >
                   <a href="<?php echo $site_url ?>" class="back-link text-muted">back</a></div>
                </form>

</section>


<?php include "_partials/footer.php"; ?>
