<?php
function denseRanking($scores, $gitsScores) {
    $uniqueScores = array_unique(array_merge($scores, $gitsScores));
    rsort($uniqueScores);

    $rankings = array_flip($uniqueScores);
    $result = array_map(function($score) use ($rankings) {
        return $rankings[$score] + 1;
    }, $gitsScores);

    return $result;
}

$input_scores = $_POST['input_scores'] ?? '';
$input_gitsScores = $_POST['input_gitsScores'] ?? '';
$output = array();

if ($input_scores && $input_gitsScores) {
    $input_scores_array = array_map('intval', explode(',', $input_scores));
    $input_gitsScores_array = array_map('intval', explode(',', $input_gitsScores));

    $output = denseRanking($input_scores_array, $input_gitsScores_array);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dense Ranking Result</title>
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
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px; /* Adjusted spacing here */
        }

        input[type="text"] {
            width: 92%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px; /* Adjusted spacing here */
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px; /* Adjusted spacing here */
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        h2 {
            margin-top: 20px;
            text-align: center;
        }

        .output {
            margin-top: 10px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Dense Ranking Result</h1>
        <form method="post">
            <label for="input_scores">Input Scores (comma-separated):</label>
            <input type="text" name="input_scores" id="input_scores" value="<?php echo $input_scores; ?>" required>
            <br>
            <label for="input_gitsScores">GITS Scores (comma-separated):</label>
            <input type="text" name="input_gitsScores" id="input_gitsScores" value="<?php echo $input_gitsScores; ?>" required>
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>

        <?php if (!empty($output)): ?>
            <h2>Output:</h2>
            <div class="output"><?php echo implode(' ', $output); ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
