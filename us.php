<?php
$posts = [
  [
    'title' => 'US news 1', 
    'published' => '16.09.2025', 
    'author' => 'Aleks', 
    'body' => 'some US news body 1'
  ],
  [
    'title' => 'US news 2', 
    'published' => '16.09.2025', 
    'author' => 'Kelly', 
    'body' => 'some US news body 2'
  ],
  [
    'title' => 'US news 3', 
    'published' => '16.09.2025', 
    'author' => 'Idk', 
    'body' => 'some US news body 3'
  ],
  [
    'title' => 'US news 4', 
    'published' => '16.09.2025', 
    'author' => 'Jahm', 
    'body' => 'some US news body 4'
  ],
]
?>

<?php include __DIR__ . '/partials/header.php'; ?>
    <main class="container">
      <div class="row g-5">
        <div class="col-md-8">
          <?php include __DIR__ . '/partials/posts.php'; ?>
        </div>
        <div class="col-md-4">
          <?php include __DIR__ . '/partials/sidebar.php'; ?>
        </div>
      </div>
    </main>
<?php include __DIR__ . '/partials/footer.php'; ?>
