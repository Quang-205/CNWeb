<?php
$raw = file_get_contents("Quiz.txt");

$blocks = preg_split("/\R\R+/m", trim($raw));

$questions = [];

foreach ($blocks as $b) {
    $lines = array_filter(array_map('trim', explode("\n", $b)));

    if (count($lines) < 6) continue;

    $q = [];
    $q['question'] = array_shift($lines);

    $q['A'] = substr($lines[0], 3);
    $q['B'] = substr($lines[1], 3);
    $q['C'] = substr($lines[2], 3);
    $q['D'] = substr($lines[3], 3);

    $ansLine = end($lines);
    $q['answer'] = trim(str_replace("ANSWER:", "", $ansLine));

    $questions[] = $q;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Bài thi trắc nghiệm</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<div class="container">
<h2 class="mb-4">Bài thi trắc nghiệm</h2>

<form id="quizForm">

<?php foreach ($questions as $i => $q): ?>
<div class="card mb-3">
    <div class="card-body">
        <p><strong>Câu <?= $i+1 ?>:</strong> <?= htmlspecialchars($q['question']) ?></p>

        <?php foreach (['A','B','C','D'] as $opt): ?>
        <div class="form-check">
            <input class="form-check-input" type="radio"
                   name="q<?= $i ?>" value="<?= $opt ?>">
            <label class="form-check-label">
                <?= $opt ?>. <?= htmlspecialchars($q[$opt]) ?>
            </label>
        </div>
        <?php endforeach; ?>

    </div>
</div>
<?php endforeach; ?>

<button class="btn btn-primary">Nộp bài</button>

</form>

<div id="result" class="mt-4"></div>

</div>

<script>
document.getElementById('quizForm').onsubmit = function(e) {
    e.preventDefault();

    let correct = 0;
    let total = <?= count($questions) ?>;

    const answers = <?php echo json_encode(array_column($questions, 'answer')); ?>;

    for (let i = 0; i < total; i++) {
        const checked = document.querySelector(`input[name="q${i}"]:checked`);
        if (checked && checked.value === answers[i]) correct++;
    }

    document.getElementById('result').innerHTML =
        `<div class="alert alert-info">
            Bạn đúng <b>${correct}/${total}</b> câu.
        </div>`;
}
</script>

</body>
</html>
