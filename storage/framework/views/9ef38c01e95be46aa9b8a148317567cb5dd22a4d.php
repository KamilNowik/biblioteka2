
<?php $__env->startSection('content'); ?>

<h1>Biblioteka - Kamil Nowik</h1>
<div class="newbook"><a href="http://biblioteka2.test/books/create">Dodaj nową książkę!</a></div>

<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="book">
	<?php if(strlen($book->title)<=10): ?>
		<div class="title"><?php echo e($book->title); ?></div>
	<?php endif; ?>
	<?php if(strlen($book->title)>10): ?>
		<div class="title"><?php echo e(substr ($book->title, 0, 10).'...'); ?></div>
	<?php endif; ?>
	<div class="author"><?php echo e($book->author); ?></div>
	<br>

	<div class="buttons">
		<a href="<?php echo e(action('BooksController@edit', $book->id)); ?>">Edytuj</a>
	</div>
	<div class="buttons">
		<?php echo Form::open(['method'=>'DELETE', 'action' => ['BooksController@destroy', $book->id]]); ?>


       <div>
           <?php echo Form::submit('Usuń'); ?>

       </div>

    <?php echo Form::close(); ?>

	</div>
	
	<br><br>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>