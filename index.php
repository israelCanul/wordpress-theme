
<?php get_header(); ?>




<?php if ( is_category() ) : // Si estamos en una página de categoría?>
	<div class="alert alert-info">
		<p><?php _e('Artículos en la categoría', 'amk');?>: <strong><?php single_cat_title(); //Muestra el nombre de la categoría ?></strong></p>
	</div>
<?php elseif ( is_tag() ) : // Si estamos en una página de etiqueta?>
	<div class="alert alert-info">
		<p><?php _e('Artículos etiquetados como', 'amk');?>: <strong><?php single_tag_title(); //Muestra el nombre de la etiqueta ?></strong></p>
	</div>
<?php elseif ( is_paged() ) : // Si estamos en una página de etiqueta?>
	<div class="alert alert-info">
		<p>Page <?php echo intval(get_query_var('paged')); ?> of <?php echo  intval($wp_query->max_num_pages); ?></strong></p>
	</div>	
<?php elseif ( is_day() ) : // Si estamos en una página de archivo diario?>
	<div class="alert alert-info">
		<p><?php _e('Archivo', 'amk');?>: <strong><?php the_date(); //Muestra la fecha del archivo ?></strong></p>
	</div>
<?php elseif ( is_month() ) : // Si estamos en una página de archivo mensual?>
	<div class="alert alert-info">
		<p><?php _e('Archivo', 'amk');?>: <strong><?php the_date('F Y'); //Muestra la fecha del archivo (mes y año) ?></strong></p>
	</div>
<?php elseif ( is_year() ) : // Si estamos en una página de archivo anual?>
	<div class="alert alert-info">
		<p><?php _e('Archivo', 'amk');?>: <strong><?php the_date('Y'); //Muestra la fecha del archivo (año) ?></strong></p>
	</div>
<?php elseif ( is_search() ) : // Si estamos en una página de resultados de búsqueda?>
	<div class="alert alert-info">
		<p><?php _e('Resultados para', 'amk');?>: <strong><?php echo the_search_query(); ////Muestra el término por el que se ha realizado la búsqueda ?></strong></p>
	</div>
<?php elseif ( is_author() ) : // Si estamos en una página de artículos escritos pur un autor específico?>
	<div class="alert alert-info">
		<p><?php _e('Artículos por', 'amk');?>: <strong><?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); echo $curauth->display_name; //Muestra el nombre del autor ?></strong></p>
	</div>
<?php elseif ( is_404() ) : // Si estamos en una página de error 404?>
	<div class="alert alert-danger">
		<p><strong><?php _e('Error 404', 'amk');?>:</strong> <?php _e('Página no encontrada', 'amk');?></p>
	</div>
<?php endif; // Fin de las comprobaciones condicionales ?>

<?php //El loop básicamente comprueba si hay posts para mostrar, luego mientras haya posts cargará cada uno de ellos usando el esquema que se ve a continuación
if ( have_posts() ) : 

	while ( have_posts() ) : the_post(); ?>
    <div class="row">
    	<div class="col s12">

			<article <?php post_class('clearfix card-panel  hoverable'); //Carga las clases específicas del post y agrega la clase clearfix ?>>
	           	<div class="row">
	           		<div class="col s12 m4 l3">
						<?php //Verifica si el post tiene una imágen destacada
						if ( has_post_thumbnail() ) {
				 
							//Si tiene imágen destacada entonces carga la imagen en tamaño thumbnail (miniatura), y le añade la clase alignleft
							the_post_thumbnail('thumbnail', array(
								'class' => 'alignleft'
							));
						}?>           			
	           		</div>
	           		<div class="col s12 m8 l9 flow-text">
	           			<h2><?php the_title(); //Muestra el título del post ?></h2>
	           		</div>	              
	            </div>				
	            <div class="card-content">
	              <p>
					<div class="meta">
					<?php the_time(get_option('date_format')); //Muestra la fecha de publicación del artículo ?>
					&bull;
					<?php the_category(', '); //Muestra enlaces a las categorías separados por coma ?></div>
	              
	              <?php //En esta parte muestra el extracto del post
							the_excerpt(); ?></p>
	            </div>
				<div class="card-action">
	              <a href="#"><a href="<?php the_permalink(); //Imprime un link al detalle del post ?>" title="<?php the_title_attribute(); //Añade ul título al enlace ?>" class="btn btn-default"><?php _e('Ver más', 'amk'); //El botón dirá Ver más. ?></a></a>
	            </div>

	
 
			</article>
		</div>
	</div>		
 
 
<?php endwhile; //Acá termina la estructura con la que se presentará cada post


else: //Ahora bien, si no hay artículos para mostrar entonces cargará lo siguiente  ?>
 
	<article>
 
		<header>
			<h2><?php _e('Este contenido no está disponible', 'amk'); //Un simple título ?></h2>
		</header>
 
		<?php get_search_form(); //Llama un formulario de búsqueda  ?>
 
	</article>
 
<?php endif; // Aquí termina el loop?>


<ul class="pager">
	<?php if( get_next_posts_link()) { //Si es que hay más posts anteriores ?>
		<li class="previous">
			<?php next_posts_link(__('&larr; Anteriores', 'amk')); //Muestra un enlace a los posts anteriores ?>
		</li>
	<?php } ?>
	<?php if( get_previous_posts_link()) { //Si es que hay más posts más recientes ?>
		<li class="next">
			<?php previous_posts_link(__('Recientes &rarr;', 'amk'));  //Muestra un enlace a los posts más recientes?>
		</li>
	<?php } ?>
</ul>

<?php get_footer(); ?>