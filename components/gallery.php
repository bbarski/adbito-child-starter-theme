<?php 
$data = get_data_for_template('gallery');
?>
<section class="gallery-section">
	<div class="galery-container">
		<h2 class="section-title"><?php echo esc_html($data['gallery_section_title']); ?></h2>
		<div class="gallery">
				<div class="gallery-item">
                	<img src="<?php echo esc_html($data['gallery_1_image']); ?>" />
            	</div>
				<div class="gallery-item">
                	<img src="<?php echo esc_html($data['gallery_2_image']); ?>" />
            	</div>
				<div class="gallery-item">
                	<img src="<?php echo esc_html($data['gallery_3_image']); ?>" />
            	</div>
		</div>
		<button></button>
	</div>
</section>
