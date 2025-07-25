<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div class="h-screen w-full gap-6  flex justify-center flex-col items-center overflow-y-scroll">
        <h1 class="">Add New Car</h1>
        <form class="h-[60%] w-[40%] p-4 shadow-xl rounded-2xl  shadow-black border gap-4    justify-between flex flex-col " action=<?php $_SERVER["PHP_SELF"] ?> >
            <div >
                <label for="" class="font-bold">ID</label>
                <input type="number" name="id" class="py-2 w-full border rounded-xl outline-0">
            </div>
            <div >
                <label for=""  class="font-bold">NAME</label>
                <input type="text" name="name" class="py-2 w-full border rounded-xl outline-0">
            </div>
            <div>
                <label for=""  class="font-bold">PRODUCT</label>
                <input type="text" name="product" class="py-2 w-full border rounded-xl outline-0">
            </div>
            <button class="py-2 px-3 bg-blue-400 rounded-xl font-bold">SEND</button>
        </form>
    </div>
</body>
</html>