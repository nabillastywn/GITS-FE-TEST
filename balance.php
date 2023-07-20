<?php
function isBalancedBracket($input) {
    $stack = [];
    $openingBrackets = ['(', '{', '['];
    $closingBrackets = [')', '}', ']'];
    $bracketPairs = ['(' => ')', '{' => '}', '[' => ']'];

    for ($i = 0; $i < strlen($input); $i++) {
        $currentBracket = $input[$i];

        if (in_array($currentBracket, $openingBrackets)) {
            array_push($stack, $currentBracket);
        } elseif (in_array($currentBracket, $closingBrackets)) {
            if (empty($stack)) {
                return "NO";
            }

            $lastBracket = array_pop($stack);

            if ($bracketPairs[$lastBracket] !== $currentBracket) {
                return "NO";
            }
        }
    }

    return empty($stack) ? "YES" : "NO";
}

$input = isset($_POST['input_brackets']) ? $_POST['input_brackets'] : '';
$output = '';

if (isset($_POST['submit'])) {
    $output = isBalancedBracket($input);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Balance Bracket Checker</title>
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
            width: 400px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 94%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px; /* Tambahkan margin top 10px */
        }

        button[type="submit"]:hover {
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
        <h1>Balance Bracket Checker</h1>
        <form method="post">
            <label for="input_brackets">Input Brackets:</label>
            <input type="text" name="input_brackets" id="input_brackets" value="<?php echo $input; ?>" required>
            <button type="submit" name="submit">Check</button>
        </form>

        <?php if ($output !== ''): ?>
            <h2>Output:</h2>
            <p><?php echo $output; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
