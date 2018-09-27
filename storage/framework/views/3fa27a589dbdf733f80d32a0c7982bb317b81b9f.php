 <div>
    <?php echo Form::label('title', 'Tytuł:'); ?>

</div>

<div>
    <?php echo Form::text('title', null); ?>

</div>    

<div>
    <?php echo Form::label('author', 'Autor:'); ?>

</div>

<div>
     <?php echo Form::text('author', null); ?>

</div>      

<div>
    <?php echo Form::submit($buttonText); ?>

</div>