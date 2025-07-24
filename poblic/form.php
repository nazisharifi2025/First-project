<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>
<body>
    <div class="h-screen w-full  flex justify-center items-center overflow-y-scroll">
        <form action=<?php $_SERVER["PHP_SELF"] ?> class="h-[70%] w-[50%] p-4 shadow-xl shadow-black border flex flex-col ">
            <div >
                <label for="" class="font-bold">ID</label>
                <input type="number" class="py-2 w-full border rounded-2xl outline-0">
            </div>
            <div >
                <label for=""  class="font-bold">NAME</label>
                <input type="text" class="py-2 w-full border rounded-2xl outline-0">
            </div>
            <div>
                <label for=""  class="font-bold">PRODUCT</label>
                <input type="text" class="py-2 w-full border rounded-2xl outline-0">
            </div>
            <button class="py-2 px-3 bg-blue-400 rounded-xl font-bold">SEND</button>
        </form>
    </div>
</body>
</html>