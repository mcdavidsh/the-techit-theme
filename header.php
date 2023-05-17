<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php bloginfo('name'); ?> - <?php echo get_option('blogdescription'); ?> <?php wp_title("",true); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open();
$menu = array(
    array("name"=>"About", "link"=>"#"),
    array("name"=>"Service", "link"=>"#"),
    array("name"=>"Faq", "link"=>"#"),
    array("name"=>"Become our partner", "link"=>"#"),
    array("name"=>"Career", "link"=>"#"),
);
?>
<header class="relative z-50 flex justify-center ">

    <nav class=" bg-white border-gray-200 dark:bg-gray-900 absolute inset-y-6 w-4/5" >
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto bg-white p-4 rounded-lg shadow-md">
            <a href="/" class="flex items-center">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" class="h-8 mr-3" alt="it world logo" />
            </a>
            <div class="flex md:order-2">
                <button type="button" class="text-white rounded-full focus:outline-nonefont-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0  it-bg-orange">Contact Us</button>
                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <?php
                    foreach ($menu as $item):
                    ?>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent"><?php echo $item["name"]?></a>
                        </li>

                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </nav>

</header>
