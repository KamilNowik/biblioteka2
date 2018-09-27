<div class="title"><?php echo e($book->title); ?></div>
<div class="author"><?php echo e($book->author); ?></div>
<a href="<?php echo e(action('BooksController@edit', $book->id)); ?>">Edytuj</a>
 <?php echo Form::open(['method'=>'DELETE', 'action' => ['BooksController@destroy', $book->id]]); ?>

    
      <div>
            <?php echo Form::submit('USUN'); ?>

        </div>
       

    <?php echo Form::close(); ?>