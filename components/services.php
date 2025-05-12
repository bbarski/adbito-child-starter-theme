<?php 
$data = get_data_for_template('services');
?>
    <section class="services-section">
        <div class="services-container <?php echo esc_html($data['services_image_position']) == 'right' ? 'image-right' : 'image-left'; ?>">
            <h2 class="section-title"><?php echo esc_html($data['services_section_title']); ?></h2>
            <div class="services-content">
                    <div class="services-image">
                        <img src="<?php echo esc_url($data['services_image']); ?>">
                    </div>                
                    <div class="services-text">
                        <p class="section-paragraph"><?php echo esc_html($data['services_text']); ?></p>
                    </div>
            </div>
        </div>
    </section>
