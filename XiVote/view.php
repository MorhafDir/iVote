<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: #fff;
        }
    </style>
</head>
<body>

<?php require_once 'config.php';
echo "conected";?>
    <form action="index.php" method="post">
        <h2>User Registration</h2>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="role">Role:</label>
        <input type="text" id="role" name="role" required>

        <button type="submit">Register</button>
    </form>

    <br><br>


    <!-- <table>
        <thead>
            <tr>
                <th>Candidate ID</th>
                <th>Name</th>
                <th>Party ID</th>
                <th>Biography</th>
            </tr>
        </thead>
        <tbody>
           Populate with candidate data 
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>101</td>
                <td>Experienced leader with a vision for the future.</td>
            </tr>
           Add more rows as needed 
        </tbody>
    </table> -->
</body>
</html>
