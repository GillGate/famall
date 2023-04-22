<?php 
	register_taxonomy( 'genre', [ 'product' ], [
		'label'                 => 'Категория', 
		'labels'                => [
			'name'              => 'Категория',
			'singular_name'     => 'Категория',
			'search_items'      => 'Поиск категорий',
			'all_items'         => 'Все категории',
			'view_item '        => 'Смотреть категории',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительский категория:',
			'edit_item'         => 'Редактировать категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить категорию',
			'new_item_name'     => 'Имя новой категории',
			'menu_name'         => 'Категория',
			'back_to_items'     => '← Назад к категориям',
		],
		'description'           => 'Категория товара для поиска в каталоге',
		'public'                => true,
		'hierarchical'          => true,
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false,
		'show_in_rest'          => null,
		'rest_base'             => null,
	]);

	register_taxonomy( 'brand', [ 'product', 'brands' ], [
		'label'                 => 'Бренды', 
		'labels'                => [
			'name'              => 'Бренды',
			'singular_name'     => 'Бренд',
			'search_items'      => 'Поиск брендов',
			'all_items'         => 'Все бренды',
			'view_item '        => 'Смотреть бренд',
			'parent_item'       => 'Родительский бренд',
			'parent_item_colon' => 'Родительский бренд:',
			'edit_item'         => 'Редактировать бренд',
			'update_item'       => 'Обновить бренд',
			'add_new_item'      => 'Добавить бренд',
			'new_item_name'     => 'Имя нового бренда',
			'menu_name'         => 'Бренды',
			'back_to_items'     => '← Назад к брендам',
		],
		'description'           => 'Категория для поиска в каталоге',
		'public'                => true,
		'hierarchical'          => true,
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false,
		'show_in_rest'          => null,
		'rest_base'             => null,
	]);

	register_taxonomy( 'type', [ 'product' ], [
		'label'                 => 'Тип товаров', 
		'labels'                => [
			'name'              => 'Тип товаров',
			'singular_name'     => 'Тип товара',
			'search_items'      => 'Поиск по типам',
			'all_items'         => 'Все типы',
			'view_item '        => 'Смотреть типы',
			'parent_item'       => 'Родительский тип',
			'parent_item_colon' => 'Родительский тип:',
			'edit_item'         => 'Редактировать тип',
			'update_item'       => 'Обновить тип',
			'add_new_item'      => 'Добавить тип',
			'new_item_name'     => 'Имя нового типа',
			'menu_name'         => 'Тип товаров',
			'back_to_items'     => '← Назад к типам',
		],
		'description'           => '',
		'public'                => true,
		'hierarchical'          => true,
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => false,
		'show_in_rest'          => null,
		'rest_base'             => null,
	]);