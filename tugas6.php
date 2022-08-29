<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>SOAL 6</title>
</head>
<body>

    <div class="title">
        <h1>SOAL 6</h1>
        <p>
        FIKA NIA DYAHSARI<br>
        M HERDIYANSYAH<br>
        M RIFKI AFRIZAL<br>
        XII RPL 1
        </p>
    </div>

    <table border="1" height="200px">
        <tr>
            <th>Nip</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>Tanggal lahir</th>
            <th>Status</th>
            <th>Mulai Kerja</th>
            <th>Umur</th>
        </tr>

        <?php
        
        include("Controller.php");
        $view = new Controller;
        $pegawai = $view->tugas_6('tbl_datapegawai');

        foreach ($pegawai as $pgw){
        ?>

            <tr>
                <td>
                    <?php echo $pgw['nip'] ?>
                </td>
                <td>
                    <?php echo $pgw['nama'] ?>
                </td>
                <td>
                    <?php echo $pgw['jns_kel'] ?>
                </td>
                <td>
                    <?php echo $pgw['tgl_lahir'] ?>
                </td>
                <td>
                    <?php echo $pgw['status'] ?>
                </td>
                <td>
                    <?php echo $pgw['mulai_kerja'] ?>
                </td>
                <td>
                    <?php echo $pgw['umur'] ?>
                </td>
            </tr>

        <?php } ?>  

    </table>
    
</body>
</html>