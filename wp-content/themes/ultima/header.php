<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php
    /**
     * @see ultima_qodef_header_meta() - hooked with 10
     * @see qode_user_scalable - hooked with 10
     */
    ?>
	<?php if (!ultima_qodef_is_ajax_request()) do_action('ultima_qodef_header_meta'); ?>

	<?php if (!ultima_qodef_is_ajax_request()) wp_head(); ?>
	
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D7PG038NCE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D7PG038NCE');
</script>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D7PG038NCE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D7PG038NCE');
</script>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T757KD8R');</script>
<!-- End Google Tag Manager -->
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Fusion Digital Marketing Agency",
  "url": "https://fusiondigitalmarketingagency.com/",
  "image": " https://fusiondigitalmarketingagency.com/wp-content/uploads/2025/04/FDMA-Logo1-01.jpg",
  "sameAs": [
    " https://www.facebook.com/profile.php?id=61573624544832",
    " https://www.instagram.com/fdma_2021/?hl=en",
    " https://www.linkedin.com/in/divya-kannan-915140336/"
  ],
  "jobTitle": "Digital Marketing Experts",
  "worksFor": {
    "@type": "Organization",
    "name": "Fusion Digital Marketing Agency",
    "url": "https://fusiondigitalmarketingagency.com/"
  }
}
</script>
</head>

<body <?php body_class();?> itemscope itemtype="http://schema.org/WebPage">
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T757KD8R"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php if (!ultima_qodef_is_ajax_request()) ultima_qodef_get_side_area(); ?>


<?php 
if((!ultima_qodef_is_ajax_request()) && ultima_qodef_options()->getOptionValue('smooth_page_transitions') == "yes") {
    $ultima_qodef_ajax_class = 'qodef-mimic-ajax';
?>
<div class="qodef-smooth-transition-loader <?php echo esc_attr($ultima_qodef_ajax_class); ?>">
    <div class="qodef-st-loader">
        <div class="qodef-st-loader1">
            <?php ultima_qodef_loading_spinners(); ?>
        </div>
    </div>
</div>
<?php } ?>

<div class="qodef-wrapper">
    <div class="qodef-wrapper-inner">
        <?php if (!ultima_qodef_is_ajax_request()) ultima_qodef_get_header(); ?>

        <?php if ((!ultima_qodef_is_ajax_request()) && ultima_qodef_options()->getOptionValue('show_back_button') == "yes") { ?>
            <a id='qodef-back-to-top'  href='#'>
                <span class="qodef-icon-stack">
                     <?php
                        ultima_qodef_icon_collections()->getBackToTopIcon('font_elegant');
                    ?>
                </span>
                <span class="qodef-icon-stack-flip">
                    <?php
                        ultima_qodef_icon_collections()->getBackToTopIcon('font_elegant');
                    ?>
                </span>
            </a>
        <?php } ?>
        <?php if (!ultima_qodef_is_ajax_request()) ultima_qodef_get_full_screen_menu(); ?>

        <div class="qodef-content" <?php ultima_qodef_content_elem_style_attr(); ?>>
            <?php if(ultima_qodef_is_ajax_enabled()) { ?>
            <div class="qodef-meta">
                <?php do_action('ultima_qodef_ajax_meta'); ?>
                <span id="qodef-page-id"><?php echo esc_html(get_queried_object_id()); ?></span>
                <div class="qodef-body-classes"><?php echo esc_html(implode( ',', get_body_class())); ?></div>
            </div>
            <?php } ?>
            <div class="qodef-content-inner">