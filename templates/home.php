<?php
/*
Template Name: Home
Post Type: page
* @package WordPress
 *@subpackage techit_theme
 * * @since The Techit Theme 1.0
*/
get_header();
?>

	<!--First Hero Section-->


	<section class="">
		<div class="py-10 px-4  container mx-auto md:flex gap-12 justify-between items-center px-4 lg:px-6 xl:px-6 space-y-14 md:space-y-0 z-10 relative">
			<div class="md:w-1/2 text-black space-y-5 xl:space-y-8">
				<p class="text-base xl:text-xl font-semibold">Our Services</p>
				<h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold">The best service provider
					you’ll never find else
					where</h1>
			</div>

			<div class="md:w-1/2 flex justify-center md:justify-end">
				<img src="<?php echo get_template_directory_uri()?>/assets/img/icons.png" class="w-9/12 rounded-xl object-cover">
			</div>
		</div>
		<div class="bg-gradient-to-b from-green-50 to-transparent dark:from-green-900 w-full h-full absolute top-0 left-0 z-0"></div>
	</section>
	<section class="pt-8">
		<h1 class="mb-4 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-2xl lg:text-4xl dark:text-white text-center">Higher Education</h1>
		<div class="inline-flex items-center justify-center w-full">
			<svg width="196" height="12" viewBox="0 0 196 12" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect width="98" height="12" fill="#9CCB48"/>
				<rect x="98" width="98" height="12" fill="#F58634"/>
			</svg>
		</div>
	</section>

	<section>
		<div class="px-4 mx-auto">
			<div class="rounded-lg md:p-12 grid gap-4 lg:grid-cols-2 sm:grid-col-1">
				<div>
					<a href="#"
					   class="bg-green-100 text-green-800 text-lg font-semibold inline-flex items-center px-4 py-2 rounded-md dark:bg-gray-700 dark:text-green mb-2 it-text-green">
						Hostel
					</a>
					<h4 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Lorem ipsum dolor sit amet consectetur. Suspendisse eu</h4>
					<p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Lorem ipsum dolor sit amet consectetur. Eget molestie duis vitae hac nec odio odio convallis mattis. Adipiscing sed integer at odio iaculis phasellus sit risus. Semper at elementum purus ridiculus viverra dolor.</p>
					<a href="#"
					   class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-full bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-900">
						Get Started
					</a>
				</div>
				<div>
					<img src="<?php echo get_template_directory_uri()?>/assets/img/hostel.png" style="width:640px;">
				</div>

			</div>
		</div>
		<div class="px-4 mx-auto">
			<div class="rounded-lg md:p-12 grid gap-4 lg:grid-cols-2 sm:grid-col-1">
				<div class="mr-4 ">
					<img src="<?php echo get_template_directory_uri()?>/assets/img/campus.png" style="width:640px;">
				</div>
				<div>
					<a href="#"
					   class="bg-green-100 text-green-800 text-lg font-semibold inline-flex items-center px-4 py-2 rounded-md dark:bg-gray-700 dark:text-green mb-2 it-text-green">
						Campus
					</a>
					<h4 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">Lorem ipsum dolor sit amet consectetur. Suspendisse eu </h4>
					<p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Lorem ipsum dolor sit amet consectetur. Eget molestie duis vitae hac nec odio odio convallis mattis. Adipiscing sed integer at odio iaculis phasellus sit risus. Semper at elementum purus ridiculus viverra dolor.</p>
					<a href="#"
					   class="inline-flex justify-center items-center py-3 px-6 text-base font-medium text-center text-white rounded-full bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-green-300 dark:focus:ring-green-900">
						Get Started
					</a>
				</div>
			</div>
		</div>
	</section>



<?php
get_footer();
