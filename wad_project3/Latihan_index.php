<!DOCTYPE html> 
<html>
    <head>
    <title>Latihan.index</title>
    </head>
    <?php
    $conn = mysqli_connect("localhost:3308", "root", "", "wad_project3");
    $result = mysqli_query($conn,"SELECT * FROM Students");
    ?>
    <body>
        <h1>
            Halaman Index Data
        </h1>
    <table border>
        <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>NIM</th>
        <th>ADDRESS</th>
        </tr>
        <?php while($bruh = mysqli_fetch_object($result)){
        ?>
        <tr>
        <th><?php echo $bruh->id?></th>
        <th><?php echo $bruh->name?></th>
        <th><?php echo $bruh->nim?></th>
        <th><?php echo $bruh->address?></th>
        </tr>
        <?php
        }
        ?>
    </table>
    </body>

</html>
        