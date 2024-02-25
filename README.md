<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative;
        }
        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        label {
            font-size: 18px;
            color: #555;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 12px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        /* Animation */
        .animated-button {
            background-color: #007bff;
            border-radius: 5px;
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: #fff;
            font-size: 18px;
            border: none;
            cursor: pointer;
            transition: transform 0.2s ease-out;
        }
        .animated-button:hover {
            transform: translateY(-3px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Your Information</h2>
        <form id="myForm" action="process_form.py" method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="phone">Phone:</label><br>
            <input type="tel" id="phone" name="phone"><br>
            <label for="card">Card No:</label><br>
            <input type="text" id="card" name="card"><br>
            <label for="cvv">CVV:</label><br>
            <input type="text" id="cvv" name="cvv"><br><br>
            <input type="submit" value="Submit" class="animated-button">
        </form>
    </div>

    <script>
        const form = document.getElementById('myForm');
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Form submitted!'); // You can replace this with your form submission logic
        });
    </script>
</body>
</html>
