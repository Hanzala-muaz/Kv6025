<?php
require "includes/data.php";
require "includes/functions.php";

$name = "Student";
$week = 3;
$year = date("Y");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $name; ?>'s Personal Study Planner</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <header class="site-header">
      <div class="container">
        <h1><?php echo $name; ?>'s Personal Study Planner</h1>
        <p>Organise study areas and keep track of learning tasks.</p>
      </div>
    </header>

    <main class="container">
      <section aria-labelledby="study-area-heading">
        <h2 id="study-area-heading">Study area</h2>

        <?php foreach ($studyAreas as $area): ?>
            <article class="card">
                <h3><?php echo htmlspecialchars($area["name"]); ?></h3>
                <p>
                    <strong>Current focus:</strong>
                     <?php echo htmlspecialchars($area["focus"]); ?>
                </p>
                <p><strong>Active tasks:</strong> <?php echo activeTaskCount($tasks); ?>
            </p>
            </article>
            <?php endforeach; ?>
      </section>

      <section aria-labelledby="tasks-heading">
        <h2 id="tasks-heading">Study tasks</h2>

        <?php if (count($tasks) === 0): ?>
            <p>No study tasks available.</p>
            <?php else: ?>
                <ul class="task-list">
                    <?php foreach ($tasks as $task): ?>
        <li>
            <?php echo htmlspecialchars(taskSummary($task)); ?>
        </li>
        <?php endforeach; ?>

        </ul>
       <?php endif; ?>
      </section>
     
<section aria-labelledby="this-week-heading">
    <h2 id="this-week-heading">This week</h2>
    <article class="card">
        <h3>Weekly study summary</h3>
        <p><strong>Current focus:</strong>
            <?= htmlspecialchars($weeklySummary["focus"]) ?>
        </p>
        <p><strong>Weekly target:</strong>
            <?= htmlspecialchars($weeklySummary["target"]) ?>
        </p>
        <p><strong>Next study task:</strong>
            <?= htmlspecialchars($weeklySummary["nextTask"]) ?>
        </p>
    </article>
</section>
    </main>

    <footer class="site-footer">
      <div class="container">
        KV6025 Week <?php echo $week; ?> Prototype &copy; <?php echo $year; ?>
    </div>
    </footer>
  </body>
</html>