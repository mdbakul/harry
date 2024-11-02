<?php


new \Kirki\Panel(
	'harry_panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'harry option', 'kirki' ),
		'description' => esc_html__( 'My Panel Description.', 'kirki' ),
	]
);


// header style start here

function header_style(){
    new \Kirki\Section(
        'harry_header_style',
        [
            'title'       => esc_html__( 'Header style', 'kirki' ),
            'description' => esc_html__( 'My Section Description.', 'kirki' ),
            'panel'       => 'harry_panel_id',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Select(
        [
            'settings'    => 'choose_header_style',
            'label'       => esc_html__( 'Choose style', 'kirki' ),
            'section'     => 'harry_header_style',
            'default'     => 'style_1',
            'placeholder' => esc_html__( 'Change your style', 'kirki' ),
            'choices'     => [
                'style_1' => esc_html__( 'header style 1', 'kirki' ),
                'style_2' => esc_html__( 'header style 2', 'kirki' ),
                'style_3' => esc_html__( 'header style 3', 'kirki' ),
                'style_4' => esc_html__( 'header style 4', 'kirki' ),                
            ],
        ]
    );
}

header_style();
// header style end here


//footer style start here

function footer_style(){
    new \Kirki\Section(
        'footer_style',
        [
            'title'       => esc_html__( 'footer style', 'kirki' ),
            'description' => esc_html__( 'My Section Description.', 'kirki' ),
            'panel'       => 'harry_panel_id',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Select(
        [
            'settings'    => 'choose_footer_style',
            'label'       => esc_html__( 'Choose style', 'kirki' ),
            'section'     => 'footer_style',
            'default'     => 'style_1',
            'placeholder' => esc_html__( 'Change your style', 'kirki' ),
            'choices'     => [
                'style_1' => esc_html__( 'footer style 1', 'kirki' ),
                'style_2' => esc_html__( 'footer style 2', 'kirki' ),
                'style_3' => esc_html__( 'footer style 3', 'kirki' ),
                'style_4' => esc_html__( 'footer style 4', 'kirki' ),                
            ],
        ]
    );
}

footer_style();
// footer style end here

// header top information
function harry_header_info(){
    new \Kirki\Section(
        'harry_header_info',
        [
            'title'       => esc_html__( 'Header Top Info', 'kirki' ),
            'description' => esc_html__( 'My Section Description.', 'kirki' ),
            'panel'       => 'harry_panel_id',
            'priority'    => 160,
        ]
    );   
    
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_heading_email',
            'label'    => esc_html__( 'heading', 'kirki' ),
            'section'  => 'harry_header_info',
            'default'  => esc_html__( 'info@example.com', 'kirki' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_heading_numer',
            'label'    => esc_html__( 'heading', 'kirki' ),
            'section'  => 'harry_header_info',
            'default'  => esc_html__( '+964 742 44 763', 'kirki' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_heading_day',
            'label'    => esc_html__( 'heading day', 'kirki' ),
            'section'  => 'harry_header_info',
            'default'  => esc_html__( 'Sunday-Thures 10am-07pm', 'kirki' ),
            'priority' => 10,
        ]
    );
}

harry_header_info();

//harry logo start herer
function harry_logo(){
    new \Kirki\Section(
        'harry_section_logo',
        [
            'title'       => esc_html__( 'harry logo', 'kirki' ),
            'description' => esc_html__( 'My Section Description.', 'kirki' ),
            'panel'       => 'harry_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'harry_header_logo',
            'label'       => esc_html__( 'harry main logo', 'kirki' ),
            'description' => esc_html__( 'please upload your logo.', 'kirki' ),
            'section'     => 'harry_section_logo',
            'default'     => get_template_directory_uri(). '/assets/img/logo/logo-black.svg',
        ]
    );
    
    new \Kirki\Field\Image(
        [
            'settings'    => 'harry_sidebar_logo',
            'label'       => esc_html__( 'harry sidebar logo', 'kirki' ),
            'description' => esc_html__( 'please upload your logo.', 'kirki' ),
            'section'     => 'harry_section_logo',
            'default'     => get_template_directory_uri(). '/assets/img/logo/logo-black.svg',
        ]
    );

    new \Kirki\Field\Image(
        [
            'settings'    => 'harry_search_logo',
            'label'       => esc_html__( 'harry search logo', 'kirki' ),
            'description' => esc_html__( 'please upload your logo.', 'kirki' ),
            'section'     => 'harry_section_logo',
            'default'     => get_template_directory_uri(). '/assets/img/logo/logo-black.svg',
        ]
    );
}

harry_logo();


//harry logo start herer
function harry_sidebar(){
    new \Kirki\Section(
        'harry_section_sidebar',
        [
            'title'       => esc_html__( 'harry sidebar', 'kirki' ),
            'description' => esc_html__( 'My Section Description.', 'kirki' ),
            'panel'       => 'harry_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_btntext',
            'label'    => esc_html__( 'btn text', 'kirki' ),
            'section'  => 'harry_section_sidebar',
            'default'  => esc_html__( 'Getting Started', 'kirki' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_numbertext',
            'label'    => esc_html__( 'number', 'kirki' ),
            'section'  => 'harry_section_sidebar',
            'default'  => esc_html__( '+964 742 44 763', 'kirki' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_sidebar_gamil',
            'label'    => esc_html__( 'gamil', 'kirki' ),
            'section'  => 'harry_section_sidebar',
            'default'  => esc_html__( 'info@harry.com', 'kirki' ),
            'priority' => 10,
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'logo_switch',
            'label'       => esc_html__( 'Logo Switch', 'kirki' ),
            'description' => esc_html__( 'off/on', 'kirki' ),
            'section'     => 'harry_section_sidebar',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'menu_switch',
            'label'       => esc_html__( 'menu Switch', 'kirki' ),
            'description' => esc_html__( 'off/on', 'kirki' ),
            'section'     => 'harry_section_sidebar',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'btn_switch',
            'label'       => esc_html__( 'button Switch', 'kirki' ),
            'description' => esc_html__( 'off/on', 'kirki' ),
            'section'     => 'harry_section_sidebar',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );
    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'social_switch',
            'label'       => esc_html__( 'socail Switch', 'kirki' ),
            'description' => esc_html__( 'off/on', 'kirki' ),
            'section'     => 'harry_section_sidebar',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );

    new \Kirki\Field\Checkbox_Switch(
        [
            'settings'    => 'number_switch',
            'label'       => esc_html__( 'number Switch', 'kirki' ),
            'description' => esc_html__( 'off/on', 'kirki' ),
            'section'     => 'harry_section_sidebar',
            'default'     => 'on',
            'choices'     => [
                'on'  => esc_html__( 'Enable', 'kirki' ),
                'off' => esc_html__( 'Disable', 'kirki' ),
            ],
        ]
    );
    
}

harry_sidebar();


//harry logo start herer
function harry_social(){
    new \Kirki\Section(
        'harry_socaial_icon',
        [
            'title'       => esc_html__( 'harry social', 'kirki' ),
            'description' => esc_html__( 'My Section Description.', 'kirki' ),
            'panel'       => 'harry_panel_id',
            'priority'    => 160,
        ]
    );    
    
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_facebook',
            'label'    => esc_html__( 'facebook', 'kirki' ),
            'section'  => 'harry_socaial_icon',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
      
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_web',
            'label'    => esc_html__( 'personal web', 'kirki' ),
            'section'  => 'harry_socaial_icon',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );    
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_twiter',
            'label'    => esc_html__( 'Twiter', 'kirki' ),
            'section'  => 'harry_socaial_icon',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );    
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_linked',
            'label'    => esc_html__( 'Linkedin', 'kirki' ),
            'section'  => 'harry_socaial_icon',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );
    
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_behance',
            'label'    => esc_html__( 'Behance', 'kirki' ),
            'section'  => 'harry_socaial_icon',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );   

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_drible',
            'label'    => esc_html__( 'Dribble', 'kirki' ),
            'section'  => 'harry_socaial_icon',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );    

    new \Kirki\Field\Text(
        [
            'settings' => 'harry_youtube',
            'label'    => esc_html__( 'Youtube', 'kirki' ),
            'section'  => 'harry_socaial_icon',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );    
    new \Kirki\Field\Text(
        [
            'settings' => 'harry_instragram',
            'label'    => esc_html__( 'instragram', 'kirki' ),
            'section'  => 'harry_socaial_icon',
            'default'  => esc_html__( '#', 'kirki' ),
            'priority' => 10,
        ]
    );    
}

harry_social();