
<h2><?php echo $post['Post']['created'];echo "<br/>"; echo h($post['Post']['title']); ?> </h2>
<p id="viewBody"><?php echo h($post['Post']['body']);?></p>

<p><?php echo $this->Html->link("戻る", '/posts/'); ?></p>