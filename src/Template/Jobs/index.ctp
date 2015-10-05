<div id="job-list">

  <div class="col-lg-10">
    <?php foreach ($jobs as $job): ?>
      <h1><?= $this->Html->link($job->title, ['action' => 'view', $job->id]) ?></h1>
      <p><?= h($job->company) ?> - <?= h($job->location) ?></p>
      <p><?= $this->Text->truncate(h($job->body), 250 ) ?></p>
      <p><?= $job->created->timeAgoInWords(
        ['format' => 'MMM d, YYY', 'end' => '+1 year']) ?></p>
    <?php endforeach; ?>
  </div>

</div>
