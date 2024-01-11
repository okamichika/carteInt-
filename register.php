<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Src/style.css">
    <link rel="Icon" href="./Image/Icone.png"/>
    <title>Register</title>
</head>
<body>
      <div class="container">
        <div class="box form-box">

        <?php 
         
        /* include("php/config.php");
         if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $age = mysqli_real_escape_string($con, $_POST['age']);
            $profession = mysqli_real_escape_string($con, $_POST['profession']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

         //verifying the unique email

         $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

         if(mysqli_num_rows($verify_query) !=0 ){
            echo "<div class='message'>
                      <p>This email is used, Try another One Please!</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
         }
         else{

            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password,Profession) VALUES('$username','$email','$age','$password','$profession')") or die("Erroen Occured");

            echo "<div class='message'>
                      <p>Registration successfully!</p>
                  </div> <br>";
            echo "<a href='login.php'><button class='btn'>Login Now</button>";
         

         }

         }else{*/
        if(isset($_POST['submit'])){
            $username = mysqli_real_escape_string($con, $_POST['username']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $age = mysqli_real_escape_string($con, $_POST['age']);
            $profession = mysqli_real_escape_string($con, $_POST['profession']);
            $password = mysqli_real_escape_string($con, $_POST['password']);

            // Vérifier la longueur minimale du mot de passe
            if(strlen($password) < 8){
                echo "<div class='message'>
                <p>Le mot de passe doit contenir au moins 8 caractères.</p>
              </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Retour</button>";
            } else {
                // Vérifier la complexité du mot de passe avec une expression régulière
                if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/', $password)){
                    echo "<div class='message'>
                    <p>Le mot de passe doit contenir au moins une majuscule, une minuscule et un chiffre.</p>
                  </div> <br>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Retour</button>";
                } else {
                    // Vérifier l'adresse e-mail unique
                    $verify_query = mysqli_query($con, "SELECT Email FROM users WHERE Email='$email'");

                    if(mysqli_num_rows($verify_query) != 0){
                        echo "<div class='message'>
                        <p>Cette adresse e-mail est déjà utilisée. Veuillez en choisir une autre.</p>
                      </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Retour</button>";
                    } else {
                        // Insérer l'utilisateur dans la base de données
                        mysqli_query($con, "INSERT INTO users(Username, Email, Age, Password, Profession) VALUES('$username', '$email', '$age', '$password', '$profession')") or die("Erreur survenue");

                        echo "<div class='message'>
                        <p>Inscription réussie!</p>
                      </div> <br>";
                        echo "<a href='login.php'><button class='btn'>Se connecter maintenant</button>";
                    }
                }
            }
        } else {
         
        ?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="profession">Profession</label>
                    <input type="text" name="profession" id="profession" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>
                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already a member? <a href="./login.php">Sign In</a>
                </div>
            </form>
        </div>
        <?php } ?>
      </div>
</body>
</html>