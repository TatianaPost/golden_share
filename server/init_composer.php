<?php 

add_action( 'vc_before_init', 'home_header' );
function home_header() {
 vc_map( array(
  "name" => 'home_header',
  "base" => "home_header",
  'category' => 'Main golden',
  "params" => array(
    array(
      'type' => 'textfield',
      'heading' => 'Главный текст',
      'param_name' => 'main_text',
      'group' => 'Main golden',
      ),array(
      'type' => 'textfield',
      'heading' => 'текст кнопки',
      'param_name' => 'btn_text',
      'group' => 'Main golden',
      ),
      ),
  ) );
}
class WPBakeryShortCode_home_header extends WPBakeryShortCode {
}
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
add_action( 'vc_before_init', 'home_innovative' );
function home_innovative() {
 vc_map( array(
  "name" => 'home_innovative',
  "base" => "home_innovative",
  'category' => 'Main golden',
  "params" => array(
    array(
      'type' => 'attach_image',
      'heading' => 'Картинка левый',
      'param_name' => 'img_left',
      'group' => 'Кружочки',
      ),array(
      'type' => 'attach_image',
      'heading' => 'Картинка центральный',
      'param_name' => 'img_centr',
      'group' => 'Кружочки',
      ),
      array(
        'type' => 'attach_image',
        'heading' => 'Картинка правый',
        'param_name' => 'img_right',
        'group' => 'Кружочки',
        ),
        //---------------
      array(
      'type' => 'textfield',
      'heading' => 'Масштаб левый',
      'param_name' => 'scale_left',
      'group' => 'Масштаб кружочков',
      ),array(
      'type' => 'textfield',
      'heading' => 'Масштаб центральный',
      'param_name' => 'scale_center',
      'group' => 'Масштаб кружочков',
      ),
      array(
        'type' => 'textfield',
        'heading' => 'Масштаб правый',
        'param_name' => 'scale_right',
        'group' => 'Масштаб кружочков',
        ),
        //---------------
    array(
      'type' => 'textfield',
      'heading' => 'текст левый',
      'param_name' => 'text_left',
      'group' => 'Кружочки',
      ),array(
      'type' => 'textfield',
      'heading' => 'текст центральный',
      'param_name' => 'text_centr',
      'group' => 'Кружочки',
      ),
      array(
        'type' => 'textfield',
        'heading' => 'текст правый',
        'param_name' => 'text_right',
        'group' => 'Кружочки',
        ),
        //---------------
      array(
        'type' => 'textfield',
        'heading' => 'Главный текст -Заголовок',
        'param_name' => 'main_text',
        'group' => 'Основное',
        ),
      array(
        'type' => 'textfield',
        'heading' => 'текст под заголовком',
        'param_name' => 'text_sub',
        'group' => 'Основное',
        ),
          //---------
      array(
        'type' => 'textfield',
        'heading' => 'Пункт 1',
        'param_name' => 'list-1',
        'group' => 'Список',
        ),
      array(
        'type' => 'textfield',
        'heading' => 'Пункт 2',
        'param_name' => 'list-2',
        'group' => 'Список',
        ),
      array(
        'type' => 'textfield',
        'heading' => 'Пункт 3',
        'param_name' => 'list-3',
        'group' => 'Список',
        ),
      array(
        'type' => 'textfield',
        'heading' => 'Пункт 4',
        'param_name' => 'list-4',
        'group' => 'Список',
        ),
      array(
        'type' => 'textfield',
        'heading' => 'Пункт 5',
        'param_name' => 'list-5',
        'group' => 'Список',
        ),
      array(
        'type' => 'textfield',
        'heading' => 'Пункт 6',
        'param_name' => 'list-6',
        'group' => 'Список',
        ),
      //-------------------------------------
      ),
  ) );
}
class WPBakeryShortCode_home_innovative extends WPBakeryShortCode {
}
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
add_action( 'vc_before_init', 'home_happy' );
function home_happy() {
 vc_map( array(
  "name" => 'home_happy',
  "base" => "home_happy",
  'category' => 'Main golden',
  "params" => array(
    array(
      'type' => 'textarea_html',
      'heading' => 'Главный текст',
      'param_name' => 'main_text',
      'group' => 'Main golden',
      )
  ) ));
}
class WPBakeryShortCode_home_happy extends WPBakeryShortCode {
}
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
add_action( 'vc_before_init', 'home_effective' );
function home_effective() {
 vc_map( array(
  "name" => 'home_effective',
  "base" => "home_effective",
  'category' => 'Main golden',
  "params" => array(
    array(
      'type' => 'textarea_html',
      'heading' => 'Главный текст',
      'param_name' => 'main_text',
      'group' => 'Main golden',
      )
  ) ));
}
class WPBakeryShortCode_home_effective extends WPBakeryShortCode {
}
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
add_action( 'vc_before_init', 'home_list' );
function home_list() {
 vc_map( array(
  "name" => 'home_list',
  "base" => "home_list",
  'category' => 'Main golden',
  "params" => array(
    array(
      'type' => 'textarea',
      'heading' => 'Первый текст',
      'param_name' => 'list_text_1',
      'group' => 'Контент',
      ),
    array(
      'type' => 'textarea',
      'heading' => 'Второй текст',
      'param_name' => 'list_text_2',
      'group' => 'Контент',
      ),
    array(
      'type' => 'textarea',
      'heading' => 'Третий текст',
      'param_name' => 'list_text_3',
      'group' => 'Контент',
      ),
    array(
      'type' => 'textarea',
      'heading' => 'Четвертый текст',
      'param_name' => 'list_text_4',
      'group' => 'Контент',
      ),
      //----------------------------
        array(
      'type' => 'textarea',
      'heading' => 'Первый текст',
      'param_name' => 'list_title_1',
      'group' => 'Заголовок',
      ),
    array(
      'type' => 'textarea',
      'heading' => 'Второй текст',
      'param_name' => 'list_title_2',
      'group' => 'Заголовок',
      ),
    array(
      'type' => 'textarea',
      'heading' => 'Третий текст',
      'param_name' => 'list_title_3',
      'group' => 'Заголовок',
      ),
    array(
      'type' => 'textarea',
      'heading' => 'Четвертый текст',
      'param_name' => 'list_title_4',
      'group' => 'Заголовок',
      ),
    //----------------------------
        array(
      'type' => 'textarea',
      'heading' => 'Первый текст',
      'param_name' => 'list_sub_title_1',
      'group' => 'Подзаголовок',
      ),
    array(
      'type' => 'textarea',
      'heading' => 'Второй текст',
      'param_name' => 'list_sub_title_2',
      'group' => 'Подзаголовок',
      ),
    array(
      'type' => 'textarea',
      'heading' => 'Третий текст',
      'param_name' => 'list_sub_title_3',
      'group' => 'Подзаголовок',
      ),
    array(
      'type' => 'textarea',
      'heading' => 'Четвертый текст',
      'param_name' => 'list_sub_title_4',
      'group' => 'Подзаголовок',
      ),
  ) ));
}
class WPBakeryShortCode_home_list extends WPBakeryShortCode {
}
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
add_action( 'vc_before_init', 'home_result' );
function home_result() {
 vc_map( array(
  "name" => 'home_result',
  "base" => "home_result",
  'category' => 'Main golden',
  "params" => array(
    array(
      'type' => 'textfield',
      'heading' => 'Главный текст',
      'param_name' => 'title',
      'group' => 'Main golden',
      ),array(
      'type' => 'textfield',
      'heading' => 'текст кнопки',
      'param_name' => 'btn_text',
      'group' => 'Main golden',
      ),
      ),
  ) );
}
class WPBakeryShortCode_home_result extends WPBakeryShortCode {
}
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
add_action( 'vc_before_init', 'home_before_client' );
function home_before_client() {
 vc_map( array(
  "name" => 'home_before_client',
  "base" => "home_before_client",
  'category' => 'Main golden',
  "params" => array(
    array(
      'type' => 'textfield',
      'heading' => 'Главный текст',
      'param_name' => 'title',
      'group' => 'Main golden',
      )
      ),
  ) );
}
class WPBakeryShortCode_home_before_client extends WPBakeryShortCode {
}
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
add_action( 'vc_before_init', 'home_client' );
function home_client() {
 vc_map( array(
  "name" => 'home_client',
  "base" => "home_client",
  'category' => 'Main golden',
  "params" => array(
    array(
      'type' => 'textfield',
      'heading' => 'Главный текст',
      'param_name' => 'title',
      'group' => 'Main golden',
      )
      ),
  ) );
}
class WPBakeryShortCode_home_client extends WPBakeryShortCode {
}


//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
//---------------------------------------------------------------------------------
add_action( 'vc_before_init', 'home_finde');
function home_finde() {
 vc_map( array(
  "name" => 'home_finde',
  "base" => "home_finde",
  'category' => 'Main golden',
  "params" => array(
    array(
      'type' => 'textfield',
      'heading' => 'Главный текст',
      'param_name' => 'title',
      'group' => 'Main golden',
      )
      ),
  ) );
}
class WPBakeryShortCode_home_finde extends WPBakeryShortCode {
}