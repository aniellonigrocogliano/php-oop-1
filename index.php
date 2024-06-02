<?php 
    require_once 'class/movie.php';
    require_once 'class/genere.php';
    require_once 'class/attori.php';
    require_once 'lista.php';
    include_once 'header.html';
 
    ?> <section class="container">   <?php 
   
    foreach ($arraymovie as $movie) { 
?>
<div class="card mb-3" > 
<h5 class="card-header"> <i class="fa-solid fa-film"></i> <?php echo $movie['name'];?></h5>
  <div class="row g-0">
    <div class="col-md-4 p-2">
      <img style="height: 450px;" src="<?php echo $movie['poster'] ;?>" class="img-fluid rounded-start" alt="<?php echo $movie['name'];?>">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-text"><i class="fa-solid fa-book-open"></i> <?php echo $movie['trama'];?></p>
        <p class="card-text"><small class="text-body-secondary"><i class="fa-solid fa-clapperboard"></i> Regia: <?php echo $movie['regia'];?></small></p>
        <small class="text-body-secondary"><i class="fa-regular fa-file-video"></i> Genere: <?php echo $movie['genere'];?></small></p>
        <small class="text-body-secondary"><i class="fa-solid fa-calendar-days"></i> Data d'uscita: <?php echo $movie['date'];?></small></p>
        <small class="text-body-secondary"><i class="fa-solid fa-stopwatch"></i> Durata: <?php echo $movie['durata'];?>  minuti</small></p>
        <small class="text-body-secondary"><i class="fa-solid fa-users"></i> Cast:</small></p>
        <?php foreach ($movie['attori'] as $attori) { ?>
        <small class="text-body-secondary"><i class="fa-solid fa-caret-right"></i> <?php echo $attori['nome'];?> <?php echo $attori['cognome'];?> <?php echo $attori['data_di_nascita'];?></small></p>
        <?php }; ?>
      </div>
    </div>
  </div>
</div>

<?php }; ?>
</section>
<?php ?>