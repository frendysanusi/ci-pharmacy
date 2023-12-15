<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body class="font-poppins bg-[#F5F5F5] h-screen">
    <?php include('navbar.php') ?>
    
    <div class="text-center">
        <h1 class="text-[#4200FF] text-4xl font-bold font-poppins mt-10">Manage Medicine</h1>
    </div>
    <div class="grid grid-cols-5 gap-4 mt-14 w-fit m-auto">
        <?php foreach ($medicines as $medicine): ?>
            <div class="my-6 bg-white h-56 w-48 shadow-lg rounded-xl aspect-square justify-center items-center">
                <div class="flex">
                    <img src="/medicine/delete.png" alt="/medicine/delete.png" class="ml-3 h-6 w-6 mt-3">
                    <h1 class="font-poppins font-semibold text-black text-base text-center mt-3 ml-6"><?php echo isset($medicine['nama']) ? $medicine['nama'] : null; ?></h1>
                </div>
                <div>
                    <img src="/medicine/cooling.png" alt="/medicine/cooling.png" class="bg-cover bg-center p-9 pt-3">
                    <div class="bg-[hsl(256,100%,50%)] h-16 w-auto shadow-lg rounded-xl items-center -mt-6 flex">
                        <div class="pl-5 pt-[0.10px]">
                            <h1 class="font-poppins font-semibold text-white text-base text-left pt-2 -mt-1"><?php echo isset($medicine['harga']) ? $medicine['harga'] : null; ?></h1>
                            <h1 class="font-poppins font-semibold text-white text-xs text-left mt-2">Stok <?php echo isset($medicine['jumlah_stok']) ? $medicine['jumlah_stok'] : null; ?></h1>
                        </div>
                        <img src="/medicine/icon_edit.png" alt="/medicine/icon_edit.png" class="h-6 w-6 ml-14 mt-1">

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
</body>