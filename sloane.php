<?php
function A000124($n) {
    $result = '';
    $current = 1;

    for ($i = 1; $i <= $n; $i++) {
        $result .= $current;

        if ($i < $n) {
            $result .= '-';
        }

        $current += $i;
    }

    return $result;
}

$input = isset($_POST['input_number']) ? $_POST['input_number'] : '';
$output = '';

if (isset($_POST['submit'])) {
    if (is_numeric($input) && $input > 0) {
        $output = A000124($input);
    } else {
        $output = 'Masukkan angka positif!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>A000124 of Sloane’s OEIS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="number"] {
            width: 92%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px; /* Menambahkan jarak di bawah form input */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        h2 {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>A000124 of Sloane’s OEIS</h1>
        <form method="post">
            <label for="input_number">Input deret:</label>
            <input type="number" name="input_number" id="input_number" min="1" required>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php if ($output !== ''): ?>
            <h2>Output:</h2>
            <p><?php echo $output; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>

