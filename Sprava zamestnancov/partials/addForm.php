<section class="add">
        <form action="_inc/addXml.php" method="POST">
            <h2>Add employees</h2> 

                      <div class="block">     <p>First name: </p> <input type="text" name="c_first_name" required></div>
                      <div class="block">     <p>Last name: </p> <input type="text" name="c_last_name" required></div>
                      <div class="block">     <p class="email"> Email: </p> <input type="email" name="b_email" required></div>
                      <div class="block">     <p class="age">Age: </p> <input type="number" min="18" max="64"  name="d_date" required></div>
                      <div class="block">     <p class="gender"> Gender: </p> <input type="radio"  name="b_gender"> <label>Male</label>
                                                                              <input type="radio"  name="b_gender"> <label>Female</label>
                        </div>
    
                      <div class="block">     <input type="submit" name ="insert" value ="Add Employee "> </div>
    
        </form>
</section>