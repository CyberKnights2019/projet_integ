<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container {
            position: relative;
            width: 100%;
            max-width: 400px;
        }

        .container img {
            width: 500%;
            height: auto;
        }

        .container .btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            background-color: #555;
            color: white;
            font-size: 16px;
            padding: 12px 24px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
        }

        .container .btn:hover {
            background-color: black;
        }
    </style>
</head>
<body>


<div class="container">
    <img src="backgoundd.jpg" alt="Snow" style="width:500%">
    <button  type="submit"  class="btn">Button</button>
    <button type="reset" class="btn">Button2</button>

</div>

</body>
</html>
