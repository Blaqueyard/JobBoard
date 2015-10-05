<div id="job-view">

<h1><?= h($job->title) ?></h1>
<h2><?= h($job->company) ?> - <?= h($job->location) ?> </h2>
<p><small>Posted: <?= $job->created->nice() ?></small></p>
<p><?= $this->Text->autoParagraph(h($job->body)) ?></p>

 <?= $this->Html->link('Edit', ['action' => 'edit', $job->id]) ?>

</div>
