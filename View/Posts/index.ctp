<div>

<h2><?php echo $this->Html->link('日記を書く',array('controller'=>'posts', 'action'=>'add')); ?></h2>

<ul>
	<h2>日記一覧</h2>
<?php foreach($posts as $post) : ?>
	<li>
	<?php 
	echo $this->Html->link($post['Post']['title'], '/posts/view/'.$post['Post']['id']);
	echo "<br/>";   
	  echo $post['Post']['created'];
	?>
	</li>
	<span class="editBox">
	<?php echo $this->Html->link('編集',array('action'=>'edit', $post['Post']['id'])); ?>  
	<?php echo $this->Form->postLink('削除',array('action'=>'delete', $post['Post']['id']),array('confirm' => 'sure')); ?>
	</span>
<?php endforeach; ?>
</ul>


</div>