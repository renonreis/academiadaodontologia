<?php
/*
Template Name: Page Form
*/
?>

<form action="/" method="get">
  <div class="input-group blog-sidebar__search">
    <input type="text" class="form-control" placeholder="Busca" aria-label="buscar conteúdo"
      aria-describedby="buscarButton" name="s" value="<?php the_search_query(); ?>" autocomplete="off" />
    <button class="btn btn-outline-light border-gray rounded-0 bg-dark" type="submit" id="buscarButton">
      <i aria-label="Buscar" class="fas fa-search text-muted"></i>
    </button>
  </div>
</form>