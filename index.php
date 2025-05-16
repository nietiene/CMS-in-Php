<?php include("db.php"); ?>

<h2>All Posts</h2>
<a href="create.php">+ Create New Post</a>

<?php
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$results = mysqli_query($conn, $sql);

if (mysqli_num_rows($results) > 0):
    while ($row = mysqli_fetch_assoc($results)) :
?>
<h3><?php echo htmlspecialchars($row['title']); ?></h3>
<p><?php echo nl2br(htmlspecialchars($row['content'])); ?></p>
<small>Posted On <?php echo $row['created_at'];?></small>
<hr>

<?php
   endwhile;
else: 
    echo "No Post Found";
endif;    
?>
