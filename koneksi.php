<html>
    <head>
        <title> Koneksi Databese MySQL</title>
    </head>
    <body>
        <?php
        $conn = mysqli_connect("localhost", "root", "" ,"form_peserta_didik");

        //check connection
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL:". mysqli_connect_error();
            exit();
        }
        ?>
    </body>
</html>