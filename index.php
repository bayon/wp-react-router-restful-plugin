 <!-- Bootstrap Core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/cerulean/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
   
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<?php
defined('ABSPATH') or die("Direct access not allowed");

$apiConfig = array(
  'root' => get_site_url(),
  'urlPrefix' => rest_get_url_prefix(),
  'nonce' => wp_create_nonce('wp_rest')
);
?>

<div id="app"></div>

<script>
    var API_Config = <?php echo json_encode($apiConfig); ?>
</script>

<?php
wp_enqueue_style( 'react-style', plugin_dir_url( __FILE__ ). '/src/css/react-style.css', null, '1.0' );
wp_enqueue_script('rest_plugin_script', plugins_url('public/bundle.js', __FILE__));
?>
