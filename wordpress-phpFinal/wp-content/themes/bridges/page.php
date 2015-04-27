<?php get_header(); ?>


<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="#">Stereotypes</a></li>
	<li><a href="#">Events</a></li>
	<li><a href="#">Contact Us</a></li>
</ul>
	<!--Images from google.com representing our theme-->

	<img src="images/adults.jpg" alt="Group of Individuals">
	<img src="images/world.jpg" alt="Globe Image">

<div class="secA">
	<h2 class="title"><a href="<?php the_permalink(); ?>"<?php Facts_about_Stereotypes (); ?></a></h2>

	<!--some basic starter facts on stereotypes that affect society.-->
		<ul>
			<li>Stereotypes exist in all groups, including all ethnic groups</li>
			<li>Stereotypes may include labeling or making generalized statements implying that all members of a group are a certain way.</li>
			<li>Stereotypes can lead to major problems in society</li>
		</ul>

</div>

<div class="secB">
	<h2 class="title"><a href="<?php the_permalink(); ?>"<?php Combating_Stereotypes (); ?></a></h2>

	<!--A few tips on educating the community about stereotypes-->
		<ul>
			<li>Education and raising awareness are important steps in combating stereotypes</li>
			<li>Also, it is important to encourage open interaction with all groups, not only ethnic groups but people with disabilities as well</li>
			<li>Lastly, people should not be afraid to ask questions and conduct research on other groups</li>
		</ul>
</div>

<?php get_footer(); ?>