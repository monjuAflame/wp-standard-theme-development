<?php


// Home Slider
vc_map( array(
	'name' => 'Home Header Slider',
	'base' => 'comet-slider',
	'description' => 'This is Our Home Slider.',
	'class' => '',
	'category' => 'Slider',
	'icon' => get_template_directory_uri() . "/page-builder/icon/slider.png",
	'show_settings_on_create'  => false,
	)
);

// About Sections
vc_map( array(
	'name' => 'About Section',
	'base' => 'home-about',
	'description' => 'This is Our About Section.',
	'class' => '',
	'category' => 'Section',
	'icon' => get_template_directory_uri() . "/page-builder/icon/about.png",
	'show_settings_on_create'  => true,
	'params' => array(
		array(
		  "type" => "textfield",
		  "holder" => "Title",
		  "class" => "",
		  "heading" => __( "About Section Title", "comettwentyone" ),
		  "param_name" => "title",
		  "value" => __( "About Title", "comettwentyone" ),
		  "description" => __( "Enter the about Title.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "About Section Sub-Title", "comettwentyone" ),
		  "param_name" => "subtitle",
		  "value" => __( "About Sub-Title", "comettwentyone" ),
		  "description" => __( "Enter The About Sub-Title.", "comettwentyone" )
			),
		array(
		  "type" => "textarea_html",
		  "holder" => "content",
		  "class" => "",
		  "heading" => __( "About Section Content", "comettwentyone" ),
		  "param_name" => "content",
		  "value" => __( "About Content", "comettwentyone" ),
		  "description" => __( "Enter The About Content.", "comettwentyone" )
			),

		)
	)
);

// Service Sections
vc_map( array(
	'name' => 'Service Section',
	'base' => 'home-service',
	'description' => 'This is Our Service Section.',
	'class' => '',
	'category' => 'Section',
	'icon' => get_template_directory_uri() . "/page-builder/icon/customer-service.png",
	'show_settings_on_create'  => true,
	'params' => array(
		// Service Heading
		array(
		  "type" => "textfield",
		  "holder" => "Title",
		  "class" => "",
		  "heading" => __( "Service Section Title", "comettwentyone" ),
		  "param_name" => "title",
		  "value" => __( "Service Title", "comettwentyone" ),
		  "description" => __( "Enter the Service Title.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service Section Sub-Title", "comettwentyone" ),
		  "param_name" => "subtitle",
		  "value" => __( "Service Sub-Title", "comettwentyone" ),
		  "description" => __( "Enter The Service Sub-Title.", "comettwentyone" )
			),
		array(
		  "type" => "attach_image",
		  "holder" => "bgimage",
		  "class" => "",
		  "heading" => __( "Service Section Bg Image", "comettwentyone" ),
		  "param_name" => "bgimg",
		  "description" => __( "Enter The Bg Image.", "comettwentyone" )
			),
		// Service Items

		// Service First Item
		array(
		  "type" => "textfield",
		  "holder" => "service-title",
		  "class" => "",
		  "heading" => __( "Service First Item Title", "comettwentyone" ),
		  "param_name" => "services_one_title",
		  "value" => __( "Service First Item Title", "comettwentyone" ),
		  "description" => __( "Enter The Service First Item Title.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service First Item Front Icon", "comettwentyone" ),
		  "param_name" => "services_one_front_icon",
		  "value" => __( "Service First Item Front Icon", "comettwentyone" ),
		  "description" => __( "Enter The Service First Item Front Icon.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service First Item Back Icon", "comettwentyone" ),
		  "param_name" => "services_one_back_icon",
		  "value" => __( "Service First Item Back Icon", "comettwentyone" ),
		  "description" => __( "Enter The Service First Item Back Icon.", "comettwentyone" )
			),
		array(
		  "type" => "textarea",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service First Item Paragraph", "comettwentyone" ),
		  "param_name" => "services_one_paragraph",
		  "value" => __( "Service First Item Paragraph", "comettwentyone" ),
		  "description" => __( "Enter The Service First Item Paragraph.", "comettwentyone" )
			),
		// Service Second Item
		array(
		  "type" => "textfield",
		  "holder" => "service-title",
		  "class" => "",
		  "heading" => __( "Service Second Item Title", "comettwentyone" ),
		  "param_name" => "services_two_title",
		  "value" => __( "Service Second Item Title", "comettwentyone" ),
		  "description" => __( "Enter The Service Second Item Title.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service Second Item Front Icon", "comettwentyone" ),
		  "param_name" => "services_two_front_icon",
		  "value" => __( "Service Second Item Front Icon", "comettwentyone" ),
		  "description" => __( "Enter The Service Second Item Front Icon.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service Second Item Back Icon", "comettwentyone" ),
		  "param_name" => "services_two_back_icon",
		  "value" => __( "Service Second Item Back Icon", "comettwentyone" ),
		  "description" => __( "Enter The Service Second Item Back Icon.", "comettwentyone" )
			),
		array(
		  "type" => "textarea",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service Second Item Paragraph", "comettwentyone" ),
		  "param_name" => "services_two_paragraph",
		  "value" => __( "Service Second Item Paragraph", "comettwentyone" ),
		  "description" => __( "Enter The Service Second Item Paragraph.", "comettwentyone" )
			),
		// Service Third Item
		array(
		  "type" => "textfield",
		  "holder" => "service-title",
		  "class" => "",
		  "heading" => __( "Service Third Item Title", "comettwentyone" ),
		  "param_name" => "services_three_title",
		  "value" => __( "Service Third Item Title", "comettwentyone" ),
		  "description" => __( "Enter The Service Third Item Title.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service Third Item Front Icon", "comettwentyone" ),
		  "param_name" => "services_three_front_icon",
		  "value" => __( "Service Third Item Front Icon", "comettwentyone" ),
		  "description" => __( "Enter The Service Third Item Front Icon.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service Third Item Back Icon", "comettwentyone" ),
		  "param_name" => "services_three_back_icon",
		  "value" => __( "Service Third Item Back Icon", "comettwentyone" ),
		  "description" => __( "Enter The Service Third Item Back Icon.", "comettwentyone" )
			),
		array(
		  "type" => "textarea",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service Third Item Paragraph", "comettwentyone" ),
		  "param_name" => "services_three_paragraph",
		  "value" => __( "Service Third Item Paragraph", "comettwentyone" ),
		  "description" => __( "Enter The Service Third Item Paragraph.", "comettwentyone" )
			),

		// Service Fourth Item
		array(
		  "type" => "textfield",
		  "holder" => "service-title",
		  "class" => "",
		  "heading" => __( "Service Fourth Item Title", "comettwentyone" ),
		  "param_name" => "services_four_title",
		  "value" => __( "Service Fourth Item Title", "comettwentyone" ),
		  "description" => __( "Enter The Service Fourth Item Title.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service Fourth Item Front Icon", "comettwentyone" ),
		  "param_name" => "services_four_front_icon",
		  "value" => __( "Service Fourth Item Front Icon", "comettwentyone" ),
		  "description" => __( "Enter The Service Fourth Item Front Icon.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service Fourth Item Back Icon", "comettwentyone" ),
		  "param_name" => "services_four_back_icon",
		  "value" => __( "Service Fourth Item Back Icon", "comettwentyone" ),
		  "description" => __( "Enter The Service Fourth Item Back Icon.", "comettwentyone" )
			),
		array(
		  "type" => "textarea",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Service Fourth Item Paragraph", "comettwentyone" ),
		  "param_name" => "services_four_paragraph",
		  "value" => __( "Service Fourth Item Paragraph", "comettwentyone" ),
		  "description" => __( "Enter The Service Fourth Item Paragraph.", "comettwentyone" )
			),


		)
	)
);



// Vision Sections
vc_map( array(
	'name' => 'Vision Section',
	'base' => 'home-vision',
	'description' => 'This is Our Vision Section.',
	'class' => '',
	'category' => 'Section',
	'icon' => get_template_directory_uri() . "/page-builder/icon/vision.png",
	'show_settings_on_create'  => true,
	'params' => array(
		// Vision Heading
		array(
		  "type" => "textfield",
		  "holder" => "Title",
		  "class" => "",
		  "heading" => __( "Vision Section Title", "comettwentyone" ),
		  "param_name" => "title",
		  "value" => __( "Vision Title", "comettwentyone" ),
		  "description" => __( "Enter the Vision Title.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Vision Section Sub-Title", "comettwentyone" ),
		  "param_name" => "subtitle",
		  "value" => __( "Vision Sub-Title", "comettwentyone" ),
		  "description" => __( "Enter The Vision Sub-Title.", "comettwentyone" )
			),
		array(
		  "type" => "attach_image",
		  "holder" => "rightimg",
		  "class" => "",
		  "heading" => __( "Vision Section Bg Image", "comettwentyone" ),
		  "param_name" => "right_img",
		  "description" => __( "Enter The Bg Image.", "comettwentyone" )
			),
		// Vision Items

		// Vision First Item
		array(
		  "type" => "textfield",
		  "holder" => "service-title",
		  "class" => "",
		  "heading" => __( "Vision First Item Title", "comettwentyone" ),
		  "param_name" => "vision_one_title",
		  "value" => __( "Vision First Item Title", "comettwentyone" ),
		  "description" => __( "Enter The Vision First Item Title.", "comettwentyone" )
			),
		array(
		  "type" => "textarea",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Vision First Item Paragraph", "comettwentyone" ),
		  "param_name" => "vision_one_paragraph",
		  "value" => __( "Vision First Item Paragraph", "comettwentyone" ),
		  "description" => __( "Enter The Vision First Item Paragraph.", "comettwentyone" )
			),
		// Vision Second Item
		array(
		  "type" => "textfield",
		  "holder" => "service-title",
		  "class" => "",
		  "heading" => __( "Vision Second Item Title", "comettwentyone" ),
		  "param_name" => "vision_two_title",
		  "value" => __( "Vision Second Item Title", "comettwentyone" ),
		  "description" => __( "Enter The Vision Second Item Title.", "comettwentyone" )
			),
		
		array(
		  "type" => "textarea",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Vision Second Item Paragraph", "comettwentyone" ),
		  "param_name" => "vision_two_paragraph",
		  "value" => __( "Vision Second Item Paragraph", "comettwentyone" ),
		  "description" => __( "Enter The Vision Second Item Paragraph.", "comettwentyone" )
			),
		// Vision Third Item
		array(
		  "type" => "textfield",
		  "holder" => "service-title",
		  "class" => "",
		  "heading" => __( "Vision Third Item Title", "comettwentyone" ),
		  "param_name" => "vision_three_title",
		  "value" => __( "Vision Third Item Title", "comettwentyone" ),
		  "description" => __( "Enter The Vision Third Item Title.", "comettwentyone" )
			),
		
		array(
		  "type" => "textarea",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Vision Third Item Paragraph", "comettwentyone" ),
		  "param_name" => "vision_three_paragraph",
		  "value" => __( "Vision Third Item Paragraph", "comettwentyone" ),
		  "description" => __( "Enter The Vision Third Item Paragraph.", "comettwentyone" )
			),

		// Vision Fourth Item
		array(
		  "type" => "textfield",
		  "holder" => "service-title",
		  "class" => "",
		  "heading" => __( "Vision Fourth Item Title", "comettwentyone" ),
		  "param_name" => "vision_four_title",
		  "value" => __( "Vision Fourth Item Title", "comettwentyone" ),
		  "description" => __( "Enter The Vision Fourth Item Title.", "comettwentyone" )
			),
		
		array(
		  "type" => "textarea",
		  "holder" => "subtitle",
		  "class" => "",
		  "heading" => __( "Vision Fourth Item Paragraph", "comettwentyone" ),
		  "param_name" => "vision_four_paragraph",
		  "value" => __( "Vision Fourth Item Paragraph", "comettwentyone" ),
		  "description" => __( "Enter The Vision Fourth Item Paragraph.", "comettwentyone" )
			),


		)
	)
);

// Home Portfolio Section
vc_map( array(
	'name' => 'Home Portfolio Section',
	'base' => 'home-portfolio',
	'description' => 'This is Our Home Portfolio Section.',
	'class' => '',
	'category' => 'Section',
	'icon' => get_template_directory_uri() . "/page-builder/icon/portfolio.png",
	'show_settings_on_create'  => false,
	)
);

// Clients Sections
vc_map( array(
	'name' => 'Clients Section',
	'base' => 'home-clients',
	'description' => 'This is Our Clients Section.',
	'class' => '',
	'category' => 'Section',
	'icon' => get_template_directory_uri() . "/page-builder/icon/target.png",
	'show_settings_on_create'  => true,
	'params' => array(
		// Clients Heading
		array(
		  "type" => "textfield",
		  "holder" => "Title",
		  "class" => "",
		  "heading" => __( "Clients Section Title", "comettwentyone" ),
		  "param_name" => "title",
		  "value" => __( "Clients Title", "comettwentyone" ),
		  "description" => __( "Enter the Clients Section Title.", "comettwentyone" )
			),
		array(
		  "type" => "textfield",
		  "holder" => "Subtitle",
		  "class" => "",
		  "heading" => __( "Clients Section Sub-Title", "comettwentyone" ),
		  "param_name" => "subtitle",
		  "value" => __( "Clients Section Sub-Title", "comettwentyone" ),
		  "description" => __( "Enter The Clients Section Sub-Title.", "comettwentyone" )
			),

		// Client Image One
		array(
		  "type" => "attach_image",
		  "holder" => "clientone",
		  "class" => "",
		  "heading" => __( "Clients Image One", "comettwentyone" ),
		  "param_name" => "client_one",
		  "description" => __( "Enter The Clients Image One.", "comettwentyone" )
			),
		// Client Image Two
		array(
		  "type" => "attach_image",
		  "holder" => "clienttwo",
		  "class" => "",
		  "heading" => __( "Clients Image Two", "comettwentyone" ),
		  "param_name" => "client_two",
		  "description" => __( "Enter The Clients Image Two.", "comettwentyone" )
			),
		// Client Image Three
		array(
		  "type" => "attach_image",
		  "holder" => "clientthree",
		  "class" => "",
		  "heading" => __( "Clients Image Three.", "comettwentyone" ),
		  "param_name" => "client_three",
		  "description" => __( "Enter The Clients Image Three.", "comettwentyone" )
			),
		// Client Image Four
		array(
		  "type" => "attach_image",
		  "holder" => "clientfour",
		  "class" => "",
		  "heading" => __( "Clients Image Four", "comettwentyone" ),
		  "param_name" => "client_four",
		  "description" => __( "Enter The Clients Image Four.", "comettwentyone" )
			),
		// Client Image Five
		array(
		  "type" => "attach_image",
		  "holder" => "clientfive",
		  "class" => "",
		  "heading" => __( "Clients Image Five.", "comettwentyone" ),
		  "param_name" => "client_five",
		  "description" => __( "Enter The Clients Image Five.", "comettwentyone" )
			),
		// Client Image Six
		array(
		  "type" => "attach_image",
		  "holder" => "clientsix",
		  "class" => "",
		  "heading" => __( "Clients Image six.", "comettwentyone" ),
		  "param_name" => "client_six",
		  "description" => __( "Enter The Clients Image six.", "comettwentyone" )
			),
		)
	)
);



// testimonials Sections
vc_map( array(
	'name' => 'testimonials Section',
	'base' => 'home-testimonials',
	'description' => 'This is Our testimonials Section.',
	'class' => '',
	'category' => 'Section',
	'icon' => get_template_directory_uri() . "/page-builder/icon/testimonial.png",
	'show_settings_on_create'  => true,
	'params' => array(

		// testimonials Heading
		array(
		  "type" => "textfield",
		  "holder" => "Title",
		  "class" => "",
		  "heading" => __( "testimonials Section Title", "comettwentyone" ),
		  "param_name" => "title",
		  "value" => __( "testimonials Title", "comettwentyone" ),
		  "description" => __( "Enter the testimonials Section Title.", "comettwentyone" )
			),

		// testimonials Bg Image
		array(
		  "type" => "attach_image",
		  "holder" => "testimonialsbg",
		  "class" => "",
		  "heading" => __( "testimonials Bg Image", "comettwentyone" ),
		  "param_name" => "bg_img",
		  "description" => __( "Enter The testimonials Bg Image.", "comettwentyone" )
			),
		
		
		)
	)
);

// Blog Sections
vc_map( array(
	'name' => 'Blog Section',
	'base' => 'home-blog',
	'description' => 'This is Our Blog Section.',
	'class' => '',
	'category' => 'Section',
	'icon' => get_template_directory_uri() . "/page-builder/icon/blog.png",
	'show_settings_on_create'  => true,
	'params' => array(

		// Blog Heading
		array(
		  "type" => "textfield",
		  "holder" => "Title",
		  "class" => "",
		  "heading" => __( "Blog Section Title", "comettwentyone" ),
		  "param_name" => "title",
		  "value" => __( "Blog Title", "comettwentyone" ),
		  "description" => __( "Enter the Blog Section Title.", "comettwentyone" )
			),
		// Blog Sub Heading
		array(
		  "type" => "textfield",
		  "holder" => "Subtitle",
		  "class" => "",
		  "heading" => __( "Blog Section Sub-title", "comettwentyone" ),
		  "param_name" => "subtitle",
		  "value" => __( "Blog Sub-title", "comettwentyone" ),
		  "description" => __( "Enter the Blog Section Sub Title.", "comettwentyone" )
			),
		// Blog Blog Btn Link
		array(
		  "type" => "textfield",
		  "holder" => "blogbtnlink",
		  "class" => "",
		  "heading" => __( "Blog Section Btn Link", "comettwentyone" ),
		  "param_name" => "blog_btn_link",
		  "value" => __( "Blog Sub-title", "comettwentyone" ),
		  "description" => __( "Enter the Blog Section Sub Title.", "comettwentyone" )
			),
		// Blog Post Per Page
		array(
		  "type" => "textfield",
		  "holder" => "blogpostperpage",
		  "class" => "",
		  "heading" => __( "Blog Section Post Per Page ", "comettwentyone" ),
		  "param_name" => "post_per_page",
		  "value" => __( 2, "comettwentyone" ),
		  "description" => __( "Enter the Blog Post Per Page.", "comettwentyone" )
			),
		
		
		)
	)
);
 ?>