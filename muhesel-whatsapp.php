<?php
	/**
	 * Whatsapp Eklentisi
	 *
	 * Plugin Name: Whatsapp Eklentisi
	 * Plugin URI:  https://linkedin.com/in/muharrem-etdoger
	 * Description: Muharrem Etdöğer tarafından geliştirilen popup ile ziyaretçi karşılama sistemidir.
	 * Version:     1.0.0
	 * Author:      Muharrem Etdöğer
	 * Author URI:  https://linkedin.com/in/muharrem-etdoger
	 * License:     muhesel Dijital
	 * License URI: https://linkedin.com/in/muharrem-etdoger
	 * Text Domain: mhrm-whatsapp-eklentisi
	 * Domain Path: /languages
	 * Requires at least: 4.9
	 * Requires PHP: 5.2.4
	 *
	 */
function muhesel_whatsapp_menu_page(){
    add_menu_page( 
        __( 'Whatsapp', 'textdomain' ),
        ' Whatsapp',
        'manage_options',
        'muhesel-whatsapp',
        'muhesel_whatsapp_menu_page_content',
        get_template_directory_uri().'/muhesel-whatsapp/header.png',
        6
    ); 
}
add_action( 'admin_menu', 'muhesel_whatsapp_menu_page' );
function muhesel_whatsapp_menu_page_content(){
    if(isset($_POST['muhesel_whatsapp_phone_number'])){
        $item_array=array(
            'muhesel_whatsapp_phone_number',
            'muhesel_whatsapp_phone_title',
            'muhesel_whatsapp_phone_help',
            'muhesel_whatsapp_phone_message_text',
            'muhesel_whatsapp_phone_button_text',
            'muhesel_whatsapp_phone_image',
        );
        if($item_array){
            foreach ($item_array as $item){
                update_option($item,$_POST[$item]);
            }
        }
        echo '<script>location.reload();</script>';
        exit;
    }
	$muhesel_whatsapp_html='';
    $muhesel_whatsapp_html.='<div class="muhesel-whatsapp-admin">';
        $muhesel_whatsapp_html.='<h2>Whatsapp Ayarları</h2>';
        $muhesel_whatsapp_html.='<div class="muhesel-whatsapp-admin-item">';
            $muhesel_whatsapp_html.='<form method="post" action="">';
                $muhesel_whatsapp_html.='<table class="form-table" role="presentation">';
                    $muhesel_whatsapp_html.='<tbody>';
                        $muhesel_whatsapp_html.='<tr>';
                            $muhesel_whatsapp_html.='<th scope="row"><label for="muhesel_whatsapp_phone_number">Whatsapp Numarası</label></th>';
                            $muhesel_whatsapp_html.='<td><input value="'. get_option('muhesel_whatsapp_phone_number').'" name="muhesel_whatsapp_phone_number" placeholder="905550276891" type="text" id="muhesel_whatsapp_phone_number" class="regular-text"></td>';
                        $muhesel_whatsapp_html.='</tr>';
                        $muhesel_whatsapp_html.='<tr>';
                            $muhesel_whatsapp_html.='<th scope="row"><label for="muhesel_whatsapp_phone_title">Whatsapp Popup Başlık</label></th>';
                            $muhesel_whatsapp_html.='<td><input value="'. get_option('muhesel_whatsapp_phone_title').'" name="muhesel_whatsapp_phone_title" placeholder="Whatsapp Popup Başlık" type="text" id="muhesel_whatsapp_phone_title" class="regular-text"></td>';
                        $muhesel_whatsapp_html.='</tr>';
                        $muhesel_whatsapp_html.='<tr>';
                            $muhesel_whatsapp_html.='<th scope="row"><label for="muhesel_whatsapp_phone_help">Whatsapp Yardım Başlık</label></th>';
                            $muhesel_whatsapp_html.='<td><input value="'. get_option('muhesel_whatsapp_phone_help').'" name="muhesel_whatsapp_phone_help" placeholder="Whatsapp Yardım Başlığı" type="text" id="muhesel_whatsapp_phone_help" class="regular-text"></td>';
                        $muhesel_whatsapp_html.='</tr>'; 
                        $muhesel_whatsapp_html.='<tr>';
                            $muhesel_whatsapp_html.='<th scope="row"><label for="muhesel_whatsapp_phone_message_text">Mesaj Yazısı</label></th>';
                            $muhesel_whatsapp_html.='<td><input value="'. get_option('muhesel_whatsapp_phone_message_text').'" name="muhesel_whatsapp_phone_message_text" placeholder="Size Nasıl Yardımcı Olabilirim ?" type="text" id="muhesel_whatsapp_phone_message_text" class="regular-text"></td>';
                        $muhesel_whatsapp_html.='</tr>'; 
                        $muhesel_whatsapp_html.='<tr>';
                            $muhesel_whatsapp_html.='<th scope="row"><label for="muhesel_whatsapp_phone_button_text">Buton Yazısı</label></th>';
                            $muhesel_whatsapp_html.='<td><input value="'. get_option('muhesel_whatsapp_phone_button_text').'" name="muhesel_whatsapp_phone_button_text" placeholder="Whatsapp Mesaj" type="text" id="muhesel_whatsapp_phone_button_text" class="regular-text"></td>';
                        $muhesel_whatsapp_html.='</tr>'; 
                        $muhesel_whatsapp_html.='<tr>';
                            $muhesel_whatsapp_html.='<th scope="row"><label for="muhesel_whatsapp_phone_image">Url</label></th>';
                            $muhesel_whatsapp_html.='<td><input value="'. get_option('muhesel_whatsapp_phone_image').'" name="muhesel_whatsapp_phone_image" placeholder="URL" type="text" id="muhesel_whatsapp_phone_image" class="regular-text"></td>';
                        $muhesel_whatsapp_html.='</tr>'; 
                    $muhesel_whatsapp_html.='</tbody>';
                $muhesel_whatsapp_html.='</table>';
                $muhesel_whatsapp_html.='<p class="submit">';
                    $muhesel_whatsapp_html.='<input type="submit" name="submit" id="submit" class="button button-primary" value="Değişiklikleri kaydet">';
                $muhesel_whatsapp_html.='</p>';
            $muhesel_whatsapp_html.='</form>';
        $muhesel_whatsapp_html.='</div>';
    $muhesel_whatsapp_html.='</div>';
    _e( $muhesel_whatsapp_html, 'textdomain' );
}
function muhesel_whatsapp_admin_enequee( $hook ) {
    if ( 'toplevel_page_muhesel-whatsapp' != $hook ) {
        return;
    }
    wp_enqueue_script( 'muhesel_whatsapp_admin_script', plugin_dir_url( __FILE__ ) . 'muhesel-whatsapp-admin.js', array(), '1.0' );
    wp_enqueue_style( 'muhesel_whatsapp_admin_style', plugin_dir_url( __FILE__ ).'muhesel-whatsapp-admin.css' );
}
add_action( 'admin_enqueue_scripts', 'muhesel_whatsapp_admin_enequee' );
function muhesel_whatsapp_enequee($hook) {
    if(!is_admin()){
        wp_enqueue_script( 'muhesel_whatsapp_script', plugin_dir_url( __FILE__ ) . 'muhesel-whatsapp.js', array(), '1.0' );
        wp_enqueue_style( 'muhesel_whatsapp_style', plugin_dir_url( __FILE__ ).'muhesel-whatsapp.css' );        
    }
}
add_action('wp_enqueue_scripts', 'muhesel_whatsapp_enequee');
function muhesel_whatsapp_shortcode() {  
    $front_html=''; 
	if(!wp_is_mobile()){ 
    $front_html.='<a class="muhesel_whatsapp_button control_muhesel_button" data-id="hide">';
        $front_html.='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>';
        $front_html.='<span>'.get_option('muhesel_whatsapp_phone_button_text').'</span>';
    $front_html.='</a>';
    $front_html.='<div class="muhesel_whatsapp_popup show">';
        $front_html.='<a class="muhesel_whatsapp_popup_close control_muhesel_button" data-id="hide">';
            $front_html.='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg>';
        $front_html.='</a>';
        $front_html.='<div class="muhesel_whatsapp_popup_title">'.get_option('muhesel_whatsapp_phone_title').'</div>';
        $front_html.='<div class="muhesel_whatsapp_popup_title_bottom">'.get_option('muhesel_whatsapp_phone_help').'</div>';
        $front_html.='<div class="muhesel_whatsapp_popup_send_message">';
            $front_html.='<input type="text" class="muhesel_whatsapp_popup_text_input" placeholder="'.get_option('muhesel_whatsapp_phone_message_text').'">';
            $front_html.='<a href="'.get_site_whatsapp_url().'" data-href="'.get_site_whatsapp_url().'" target="_blank" class="muhesel_whatsapp_popup_url"><svg class="wws-popup__send-btn" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 40" style="enable-background:new 0 0 40 40;" xml:space="preserve">
					<style type="text/css">
					.wws-lau00001{fill:#22c15e80;}
					.wws-lau00002{fill:#22c15e;}
					</style>
					<path id="path0_fill" class="wws-lau00001" d="M38.9,19.8H7.5L2,39L38.9,19.8z"></path>
					<path id="path0_fill_1_" class="wws-lau00002" d="M38.9,19.8H7.5L2,0.7L38.9,19.8z"></path>
				</svg></a>';
        $front_html.='</div>';
        $front_html.='<div class="muhesel_whatsapp_popup_image"><img src="'.get_option('muhesel_whatsapp_phone_image').'"></div>';
    $front_html.='</div>';
    }
    return $front_html;
}
add_shortcode('muhesel_whatsapp', 'muhesel_whatsapp_shortcode'); 
function get_site_whatsapp_url(){
	global $post;
	$text='';
	if(is_single()){
		$actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$text=$actual_link.' ';
	}
	$link='https://web.whatsapp.com/send?phone='.get_option('muhesel_whatsapp_phone_number').'&text='.$text;
	return $link;
}