<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Murthy</title>
</head>
<body>
    <footer>
        <p id="footer"></p>  
    </footer>
    <script>
        const date = new Date();
        let year = date.getFullYear();
        document.getElementById("footer").innerHTML = `&copy; ${year} Copyrights Finance Murthy. All rights reserved.`;
    </script>
</body>
</html>