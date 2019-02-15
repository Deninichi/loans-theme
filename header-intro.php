<!DOCTYPE html>
<html lang="es-ES" >
<head>
	<title><?php wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">

  	<?php if( get_field( 'alternative_urls' ) ): ?>
		<?php foreach ( get_field( 'alternative_urls' ) as $key => $lang ): ?>
			<link rel="alternate" hreflang="<?php echo $lang['language'] ?>" href="<?php echo $lang['url'] ?>">
		<?php endforeach ?>
  	<?php endif; ?>

  <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

	<header class="intro container">
		<div class="logo">
			<a href="<?php echo icl_get_home_url(); ?>"><?php the_field( 'loans_logo', 'option' ); ?></a>
		</div>

		<nav class="main-menu nav-primary navbar navbar-animated navbar-expand-xl">

			<ul>
				<li id="menu-item-wpml-ls-2-es" class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-es wpml-ls-current-language wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-has-children menu-item-wpml-ls-2-es">
					<a title="Español" href="/es/">
						<img class="wpml-ls-flag" src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/es.png" alt="es" title="Español">
						<span class="wpml-ls-native">Español</span>
					</a>
					<ul class="sub-menu">
						<li id="menu-item-wpml-ls-2-hi" class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-hi wpml-ls-menu-item wpml-ls-first-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-2-hi">
							<a title="हिन्दी" href="/hi/">
								<img class="wpml-ls-flag" src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/hi.png" alt="hi" title="हिन्दी">
								<span class="wpml-ls-native">हिन्दी</span>
							</a>
						</li>
						<li id="menu-item-wpml-ls-2-pt-br" class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-pt-br wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-2-pt-br">
							<a title="Português" href="/pt-br/">
								<img class="wpml-ls-flag" src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/pt-br.png" alt="pt-br" title="Português">
								<span class="wpml-ls-native">Português</span>
							</a>
						</li>
						<li id="menu-item-wpml-ls-2-pt-pt" class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-pt-pt wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-2-pt-pt">
							<a title="Português" href="/pt-pt/">
								<img class="wpml-ls-flag" src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/pt-pt.png" alt="pt-pt" title="Português"><span class="wpml-ls-native">Português</span>
							</a>
						</li>
						<li id="menu-item-wpml-ls-2-ag" class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-ag wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-2-ag">
							<a title="Argentina" href="/ag/">
								<img class="wpml-ls-flag" src="/wp-content/uploads/flags/ar.png" alt="ag" title="Argentina"><span class="wpml-ls-native">Argentina</span>
							</a>
						</li>
						<li id="menu-item-wpml-ls-2-cl" class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-cl wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-2-cl">
							<a title="Chile" href="/cl/">
								<img class="wpml-ls-flag" src="/wp-content/uploads/flags/cl.png" alt="cl" title="Chile"><span class="wpml-ls-native">Chile</span>
							</a>
						</li>
						<li id="menu-item-wpml-ls-2-co" class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-co wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-2-co">
							<a title="Colombia" href="/co/">
								<img class="wpml-ls-flag" src="/wp-content/plugins/sitepress-multilingual-cms/res/flags/co.png" alt="co" title="Colombia"><span class="wpml-ls-native">Colombia</span>
							</a>
						</li>
						<li id="menu-item-wpml-ls-2-mx" class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-mx wpml-ls-menu-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-2-mx">
							<a title="Mexico" href="/mx/">
								<img class="wpml-ls-flag" src="/wp-content/uploads/flags/flagge-mexiko.gif" alt="mx" title="Mexico"><span class="wpml-ls-native">Mexico</span>
							</a>
						</li>
						<li id="menu-item-wpml-ls-2-pe" class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-pe wpml-ls-menu-item wpml-ls-last-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-wpml-ls-2-pe">
							<a title="Peru" href="/pe/">
								<img class="wpml-ls-flag" src="/wp-content/uploads/flags/pe-flag-min.jpg" alt="pe" title="Peru"><span class="wpml-ls-native">Peru</span>
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>

	<div class="main main-intro container">