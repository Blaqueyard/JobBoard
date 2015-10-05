<h1>Jobs</h1>

<?php foreach ($jobs as $job): ?>
<p><?php echo $job['Job']['title']; ?> | <?php echo $job['Job']['created']; ?>

<?php endforeach; ?>
<?php unset($job); ?>
