<?php
  function wpb_customize_register($wp_customize){
    // Slider Section
    $wp_customize->add_section('header', array(
      'title'   => __('Header Slider', 'wprm'),
      'description' => sprintf(__('Options for Header Slider','wprm')),
      'priority'    => 200
    ));

    $wp_customize->add_setting('header_image', array(
      'default'   => get_bloginfo('template_directory').'/assets/images/sliders/web--01.png',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
      'label'   => __('First Image', 'wprm'),
      'section' => 'header',
      'settings' => 'header_image',
      'priority'  => 1
    )));

    $wp_customize->add_setting('header_heading', array(
      'default'   => _x('راعى مصر  للخير', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('header_heading', array(
      'label'   => __('Heading', 'wprm'),
      'section' => 'header',
      'priority'  => 2
    ));

    $wp_customize->add_setting('header_text', array(
      'default'   => _x('أدعم ... أعطى  ياحتاجون مساعدتك', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('header_text', array(
      'label'   => __('Text', 'wprm'),
      'section' => 'header',
      'priority'  => 3
    ));



    /* Live Services */

    $wp_customize->add_section('services', array(
      'title'   => __('Live Services', 'wprm'),
      'description' => sprintf(__('Options for Live Services','wprm')),
      'priority'    => 201
    ));
      // -------------------------
    $wp_customize->add_setting('services_text1', array(
      'default'   => _x('التكافل الاجتماعى', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('services_text1', array(
      'label'   => __('Text_1', 'wprm'),
      'section' => 'services',
      'priority'  => 1
    ));

    $wp_customize->add_setting('number1', array(
      'default'   => _x('4000000', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('number1', array(
      'label'   => __('Number_1', 'wprm'),
      'section' => 'services',
      'priority'  => 2
    ));
      // -------------------------
    $wp_customize->add_setting('services_text2', array(
      'default'   => _x('التعليم', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('services_text2', array(
      'label'   => __('Text_2', 'wprm'),
      'section' => 'services',
      'priority'  => 3
    ));

    $wp_customize->add_setting('number2', array(
      'default'   => _x('4,000,000', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('number2', array(
      'label'   => __('Number_2', 'wprm'),
      'section' => 'services',
      'priority'  => 4
    ));
      // -------------------------
    $wp_customize->add_setting('services_text3', array(
      'default'   => _x('الصحة', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('services_text3', array(
      'label'   => __('Text_3', 'wprm'),
      'section' => 'services',
      'priority'  => 5
    ));

    $wp_customize->add_setting('number3', array(
      'default'   => _x('4,000,000', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('number3', array(
      'label'   => __('Number_3', 'wprm'),
      'section' => 'services',
      'priority'  => 6
    ));
      // -------------------------
    $wp_customize->add_setting('services_text4', array(
      'default'   => _x('البحث العلمى', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('services_text4', array(
      'label'   => __('Text_4', 'wprm'),
      'section' => 'services',
      'priority'  => 7
    ));

    $wp_customize->add_setting('number4', array(
      'default'   => _x('4000000', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('number4', array(
      'label'   => __('Number_4', 'wprm'),
      'section' => 'services',
      'priority'  => 8
    ));
      // -------------------------
    $wp_customize->add_setting('services_text5', array(
      'default'   => _x('مناحى الحياة', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('services_text5', array(
      'label'   => __('Text_5', 'wprm'),
      'section' => 'services',
      'priority'  => 9
    ));

    $wp_customize->add_setting('number5', array(
      'default'   => _x('4000000', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('number5', array(
      'label'   => __('Number_5', 'wprm'),
      'section' => 'services',
      'priority'  => 10
    ));
      // -------------------------
    $wp_customize->add_setting('services_text6', array(
      'default'   => _x('الجميع', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('services_text6', array(
      'label'   => __('Text_6', 'wprm'),
      'section' => 'services',
      'priority'  => 11
    ));

    $wp_customize->add_setting('number6', array(
      'default'   => _x('400000', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('number6', array(
      'label'   => __('Number_6', 'wprm'),
      'section' => 'services',
      'priority'  => 12
    ));


    /* feature */

    $wp_customize->add_section('features', array(
      'title'   => __('Features', 'wprm'),
      'description' => sprintf(__('Options for Features','wprm')),
      'priority'    => 202
    ));
      // -------------------------
    $wp_customize->add_setting('features_text1', array(
      'default'   => _x('التكافل الاجتماعى', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('features_text1', array(
      'label'   => __('Text_1', 'wprm'),
      'section' => 'features',
      'priority'  => 1
    ));

    $wp_customize->add_setting('features_image1', array(
      'default'   => get_bloginfo('template_directory').'/assets/images/web-04.png',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'features_image1', array(
      'label'   => __('First Image', 'wprm'),
      'section' => 'features',
      'settings' => 'features_image1',
      'priority'  => 2
    )));
  // -------------------------
    $wp_customize->add_setting('features_text2', array(
      'default'   => _x('التعليم', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('features_text2', array(
      'label'   => __('Text_2', 'wprm'),
      'section' => 'features',
      'priority'  => 3
    ));

    $wp_customize->add_setting('features_image2', array(
      'default'   => get_bloginfo('template_directory').'/assets/images/web-05.png',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'features_image2', array(
      'label'   => __('Seconde Image', 'wprm'),
      'section' => 'features',
      'settings' => 'features_image2',
      'priority'  => 4
    )));
  // -------------------------
    $wp_customize->add_setting('features_text3', array(
      'default'   => _x('الصحة', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('features_text3', array(
      'label'   => __('Text_3', 'wprm'),
      'section' => 'features',
      'priority'  => 5
    ));

    $wp_customize->add_setting('features_image3', array(
      'default'   => get_bloginfo('template_directory').'/assets/images/web-06.png',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'features_image3', array(
      'label'   => __('Third Image', 'wprm'),
      'section' => 'features',
      'settings' => 'features_image3',
      'priority'  => 6
    )));
  // -------------------------
    $wp_customize->add_setting('features_text4', array(
      'default'   => _x('البحث العلمى', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('features_text4', array(
      'label'   => __('Text_4', 'wprm'),
      'section' => 'features',
      'priority'  => 7
    ));

    $wp_customize->add_setting('features_image4', array(
      'default'   => get_bloginfo('template_directory').'/assets/images/web-07.png',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'features_image4', array(
      'label'   => __('Fourth Image', 'wprm'),
      'section' => 'features',
      'settings' => 'features_image4',
      'priority'  => 8
    )));
  // -------------------------
    $wp_customize->add_setting('features_text5', array(
      'default'   => _x('مناحى الحياة', 'wprm'),
      'type'      => 'theme_mod'
    ));
    $wp_customize->add_control('features_text5', array(
      'label'   => __('Text_5', 'wprm'),
      'section' => 'features',
      'priority'  => 9
    ));

    $wp_customize->add_setting('features_image5', array(
      'default'   => get_bloginfo('template_directory').'/assets/images/web-08.png',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'features_image5', array(
      'label'   => __('Fifth Image', 'wprm'),
      'section' => 'features',
      'settings' => 'features_image5',
      'priority'  => 10
    )));







    // $wp_customize->add_setting('btn_url', array(
    //   'default'   => _x('http://test.com', 'wprm'),
    //   'type'      => 'theme_mod'
    // ));
    // $wp_customize->add_control('btn_url', array(
    //   'label'   => __('Button URL', 'wprm'),
    //   'section' => 'showcase',
    //   'priority'  => 4
    // ));
    // $wp_customize->add_setting('btn_text', array(
    //   'default'   => _x('Read More', 'wprm'),
    //   'type'      => 'theme_mod'
    // ));
    // $wp_customize->add_control('btn_text', array(
    //   'label'   => __('Button Text', 'wprm'),
    //   'section' => 'showcase',
    //   'priority'  => 5
    // ));
  }
  add_action('customize_register', 'wpb_customize_register');