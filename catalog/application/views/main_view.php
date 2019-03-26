
<header>
	<h1 id="list">Список книг</h1><a href="controllerAdd.php" class="add">Добавить книгу в список</a>
</header>
<main>
	<ul>
		<?php foreach ($items as $item):?>
		<li>
			<p class="book"> 
			<span class="id" hidden><?=$item['id']?></span>
			<span class="genre"><?=$item['jenre']?></span>
			<span class="author"><?=$item['author']?></span>
			<span class="name"><?=$item['name']?></span>
			<span class="year"><?=substr($item['year'], 0, 4)?></span>
			<a href="controllerEdit.php?id=<?=$item['id']?>" class="edit">Редактировать</a>
			<a href="#" class="delete" id="<?=$item['id']?>">Удалить</a>
			</p>
		</li>
		<?php endforeach ?>
	</ul>
</main>
  