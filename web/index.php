<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piesakies webināram!</title>
</head>
<body>
    <h1>Piesakies webināram!</h1>
    <img src="images\code-1839406_1280.jpg" alt="code" width = "400" h = "300">
<form action="Piesakies">
    <br>
    <label for="namee">Vārds: </label>
    <input type="text" name="namee" id="namee">
    <br>
    <label for="adrese">E-pasts: </label>
    <input type="text" name="adrese" id="adrese">
    <br>
    <select name="Kurss" id="Kurss">
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Advanced">Advanced</option>
    </select>
    <br>
    <p>Vai vēlies saņemt info par citiem mūsu organizētajiem pasākumiem?”.</p>
    <label for="Yes">Yes</label>
    <input type="radio" name="Yes" id="Yes">
    <br>
    <label for="No">No</label>
    <input type="radio" name="No" id="No">
    <br>
    <br>
    <input type="submit" value="Submit">

</form>

    <br>
    <h1>Jau reģistrējušies</h1>
    <a href="confirmation.php">apst</a>
    <?php

   

     $lietotaji = [
         $liet1, //   [...$person1]
         [
           'Vards' => 'Jānis Bērziņš', 'E-pasts' => 'janis@berzins.com,', 'Līmenis' => 'Intermediate',
         ],
        [
           'Vards' => 'Pēteris Lapa', 'E-pasts' => 'peters@lapa.com,', 'Līmenis' => 'Beginner',
       ],
       [
        'Vards' => 'Ilze Koks', 'E-pasts' => 'il@ze.com,', 'Līmenis' => 'Advanced',
       ],
     ];
    
    
    
    ?>

    <a href="blog.php">Links uz Blog</a>

    <script src="Javascript\app.js"></script>
    
</body>
</html>