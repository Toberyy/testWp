<?

add_action('wp_enqueue_scripts', 'test_styles');
function test_styles()
{
	wp_enqueue_style('test_swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
	wp_enqueue_style('test_fonts', get_template_directory_uri() . '/assets/fonts/inter.css');

	wp_enqueue_style('test_styles', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('test_common_styles', get_template_directory_uri() . '/assets/css/theme-style.css');
	wp_enqueue_style('test_adaptive_styles', get_template_directory_uri() . '/assets/css/adaptive-style.css');

}

add_action('wp_enqueue_scripts', 'test_scripts');
function test_scripts()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.3.min.js');
  wp_enqueue_script('jquery');

  wp_enqueue_script('swiper_slider', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);
 
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);

 
}

add_theme_support('menus');

register_nav_menus(
  array(
    'header_menu' => 'Шапка',
    'footer_left_menu' => 'Футер слева',
    'footer_right_menu' => 'Футер справа',
  )
);

add_theme_support('post-thumbnails');


// Глобальные настройки сайта
if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
	  'page_title'   => 'Главная инф-ция',
	  'menu_title'   => 'Главная инф-ция',
	  'menu_slug'   => 'theme-contacts-settings',
	  'capability'   => 'edit_posts',
	  'icon_url' => '/wp-content/uploads/2021/01/wp-ic-contacts.png',
	  'position' => '100',
	  'parent_slug'   => ''
	));
  }

function calculate_handler() {
    // Получаем значения из AJAX-запроса
    $num1 = floatval($_POST['num1']);
    $num2 = floatval($_POST['num2']);
    $operation = sanitize_text_field($_POST['operation']);  // Обязательно очищайте данные

    $result = 0;

    switch ($operation) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Division by zero error!';
            }
            break;
        default:
            $result = 'Invalid operation';
    }

    // Возвращаем результат
    wp_send_json($result);
}
add_action('wp_ajax_calculate', 'calculate_handler');
