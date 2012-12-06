<?php
/**
 * Template Name: Cast
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<!-- Page Specific Styles -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/areas/cast.css" />
	
		<div class="roll span8 page-content">
			<div class="row">
				<h2 class="page-title"><img src="<?php bloginfo('template_directory'); ?>/assets/img/titles/title-cast.png" alt="Cast &amp; Crew"></h2>
				<div class="page-share">
					<div class="fb-like" data-href="<?php the_permalink() ?>" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false" data-font="arial"></div>
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-via="WinterBloodFilm">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<?php
				/* Run the loop to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-index.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'cast' );
				?>
				<div class="crew">
					<h2 class="span8">Producers</h2>
					<div class="accordion span8" id="accordion1">
						<!-- PRODUCER -->
						<div class="accordion-group">
						    <div class="accordion-heading">
						      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerOne">
						        Susan Kirr <span class="role">Producer</span>
						      </a>
						    </div>
						    <div id="producerOne" class="accordion-body collapse">
						      <div class="accordion-inner">
						        <p>Susan began her career working as a newspaper and broadcast journalist, writing and editing for The Japan Times, CNN Tokyo, The Dallas Morning News, and the Austin American-Statesman. She lived in Tokyo for two years, and then segued into the film industry, doing her first job with Troma Entertainment, in New York.</p>
								<p>She enjoys most working on auteur-driven independent films, having worked as line producer on such films as Terrence Malick's <strong>The Tree of Life</strong>, Michael Winterbottom's <strong>The Killer Inside Me</strong>, John Sayles' <strong>Honeydripper</strong>, Richard Linklater's <strong>A Scanner Darkly</strong> and Doug McGrath's <strong>Infamous</strong>. She produced Benavides Born, which premiered in Dramatic Competition at Sundance 2011. She holds a bachelor's degree from Princeton University and an MFA from NYU. She lives in Austin, Texas.</p>
						      </div>
						    </div>
						  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerTwo">
					        Ken White <span class="role">CO-PRODUCER, WRITER</span>
					      </a>
					    </div>
					    <div id="producerTwo" class="accordion-body collapse">
					      <div class="accordion-inner">
					        Ken is a poet, screenwriter, and member of the Screen Actor's Guild, who received his MFA in Creative Writing from the University of Montana. His poetry has appeared in The Boston Review, The Tusculum Review, Columbia: A Journal of Literature and Art, and Versal, among others. His screenplay <strong>Blight</strong>, co-written with John Jackson Braider, was optioned by Titan films in association with Sony and later by JML films. He has also written screen adaptations of Goethe's <strong>The Sorrows of Young Werther</strong> , and the medieval Irish epic <strong>The Tain Bo Cuailgne – The Cattle Raid of Cooley</strong>, and his script <strong>The Wereman</strong> is currently in development. Ken is co-adapting with Lynn-Wood Fields Debra Earling's novel <strong>Perma Red</strong>, which he is attached to direct. Ken's first book of poems, Eidolon, is forthcoming in 2013 from Peel Press.
					        </div>
					    </div>
					  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerThree">
					        Chaske Spencer <span class="role">CO-PRODUCER</span>
					      </a>
					    </div>
					    <div id="producerThree" class="accordion-body collapse">
					      <div class="accordion-inner">
					      (See above)
					      </div>
					    </div>
					  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerFour">
					        Heather Rae <span class="role">Executive Producer</span>
					      </a>
					    </div>
					    <div id="producerFour" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p>Heather has worked as a producer and executive for twenty years. In September of 2009 she was named one of Ten Producers To Watch by Variety. She produced Frozen River, which stars Academy Award Winner Melissa Leo. Frozen River premiered at the 2008 Sundance Film Festival, won the Grand Jury Prize and was acquired by Sony Pictures Classics. <strong>Frozen River</strong> was nominated for Academy Awards for Best Actress and Best Screenplay, won Gotham Awards for Best Picture and Best Actress and was nominated for seven Spirit Awards resulting in a Best Actress win for Melissa Leo and the Producer of the Year for Rae. Rae produced <strong>The Dry Land</strong>, starring America Ferrera, Wilmer Valderrama, Jason Ritter, and Melissa Leo, which premiered at the 2010 Sundance Film Festival. Rae produced <strong>Magic Valley</strong>, which was acquired for distribution by Rezo Films International at the Tribeca Film Festival in April 2011.</p>
							<p>Previously, Rae has had producing roles in many narrative and documentary feature films, including <strong>Trudell</strong>, which premièred at the Sundance 2005 and played at over 100 festivals. Trudell screened in over 60 theatrical markets before airing on PBS' Independent Lens and the Sundance Channel. Rae also produced and directed <strong>First Circle</strong>, a documentary about the foster care system. The project received the Sundance Documentary Grant and the ReNew Media Rockefeller Award. For six years Rae ran the Native Program at the Sundance Institute. Rae has worked as an advisor or consultant to the Sundance Institute, ITVS, the Rockefeller Foundation, National Geographic, PBS, Film Independent, the Independent Feature Project, and other media companies and organizations.</p>
					      </div>
					    </div>
					  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerFive">
					        Carl Hampe <span class="role">Executive Producer</span>
					      </a>
					    </div>
					    <div id="producerFive" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p>Carl is an independent producer based in Los Angeles. Current projects include <strong>The Bleeder</strong> with director Jeff Feuerzeig and producer Mike Tollin starring Liev Schreiber, <strong>The Flock</strong> with writer Chris Landon, and <strong>Wilderness of Mirrors</strong> with Writer/Director David Scarpa, among others. Prior to becoming a producer Hampe spent ten years in the specialty film business as a studio executive and film consultant with clients including Sony, Lionsgate, and National Geographic. While at Miramax Films and Warner Independent Pictures, he worked on a number of Academy Award-winning and nominated films including <strong>City of God</strong>, <strong>Amelie</strong>, Jet Li's <strong>Hero</strong>, <strong>The Painted Veil</strong> and <strong>Slumdog Millionaire</strong>.</p>
					      </div>
					    </div>
					  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerSix">
					        Sherman Alexie <span class="role">Associate Producer</span>
					      </a>
					    </div>
					    <div id="producerSix" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p>Sherman is a Spokane/Coeur d'Alene Indian who grew up on the Spokane Indian Reservation. He is an internationally renowned Native American writer, poet, screenwriter and filmmaker. Sherman wrote the screenplay for and co-produced <strong>Smoke Signals</strong>, which premiered at the Sundance Film Festival and won the Audience Award and the Filmmakers Trophy, as well as receiving the Christopher Award, an award presented for affirming "the highest values of the human spirit." Alexie was also nominated for the Independent Spirit Award for Best First Screenplay. Alexie also wrote and directed <strong>The Business of Fancydancing</strong>. In 2010 he won the PEN/Faulkner Fiction award for his novel, War Dances. In 2007 he won the National Book Award for Young Peoples Literature for <strong>The Absolutely True Diary of a Part-Time Indian</strong>, a highly regarded autobiographical novel. He has earned the NEA Poetry Fellowship, and the PEN/Hemingway Award for Best First Book of Fiction for The Lone Ranger and Tonto Fistfight in Heaven.</p>
							<p>He is a founding Board Member of Seattle based Longhouse Media, a non-profit organization that is committed to teaching filmmaking skills to Native American youth and to the use of media for cultural expression. Alexie lives in Seattle, WA, with his wife and two sons.</p>
					      </div>
					    </div>
					  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerTwelve">
					        Patrick Cook <span class="role">Associate Producer</span>
					      </a>
					    </div>
					    <div id="producerTwelve" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>Patrick Cook is a film Producer/Director based in Missoula, MT. He holds degrees in Theatre and Film.  His past projects include a documentary project for the Irish Government entitled "<strong>The Gathering</strong>", Co-Producer on "<strong>Be Again</strong>" a short film based on the words and works of Samuel Becket, an ongoing documentary project with author Rick Bass and Missoula band Stellarondo, several short works and an animated WWI stop-motion silhouette feature with artist Andy Smetanka (My Winnipeg, The Tain) He is currently travelling, writing and working as a crowd-funding consultant.</p>
					      </div>
					    </div>
					  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerSeven">
					        Will Meredith <span class="role">Associate Producer</span>
					      </a>
					    </div>
					    <div id="producerSeven" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p>Will is a project manager and social equity advocate who specializes in government relations, community organizing and real estate development in Austin Texas. His past work includes leadership positions with the Austin Film Society and the Austin Studios, and his current endeavors include work in early childhood education, local food systems advocacy, social entrepreneurship development and empowerment through the creative arts. Will and his family have called Montana home for over the past 15 years, during which time Will has worked throughout the state with The American Prairie Foundation, The Nature Conservancy, and in the political sector with Senator Max Baucus on his 2002 re-election campaign.</p>
					      </div>
					    </div>
					  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerEight">
					        Peter Wiley <span class="role">Associate Producer</span>
					      </a>
					    </div>
					    <div id="producerEight" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p>Peter Booth Wiley is the chairman of the board of John Wiley & Sons, a global publishing house founded in 1807. A former journalist and newspaper columnist, Wiley is the author of five books including <strong>Empires in the Sun: The Rise of the New American West</strong>, <strong>America’s Saints: The Rise of Mormon Power</strong>, coauthored with Bob Gottlieb, and the <strong>National Trust Guide San Francisco: America's Guide for Architecture and History Travelers</strong>. Wiley was a researcher/writer for <strong>Mormons: Missionaries to the World</strong>, a documentary, which won an Honorable Mention at the San Francisco Film Festival in 1985.</p>
					      </div>
					    </div>
					  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerNine">
					        Mark Mueller <span class="role">Associate Producer</span>
					      </a>
					    </div>
					    <div id="producerNine" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p>Mark grew up in rural Wisconsin, but moved to Texas for law school at the University of Houston Law Center (J.D. 1981). Mark has taken and passed four state bar exams (Wisconsin, Texas, Montana and Louisiana) and been admitted by reciprocity in Pennsylvania, Georgia and Oklahoma.</p>
<p>He began his private law practice in Houston,Texas and eventually developed a national reputation for obtaining winning verdicts in complex and difficult birth injury cases. His work and cases contributed to groundbreaking medical publications and presentations. In addition to his substantial and often precedent-setting birth injury work, Mark has handled cases involving chemical and radiation exposures, business fraud, insurance bad faith, deaths and injuries from unsafe industrial and household products, deceptive trade practices, Native American land rights, premises liability for rapes and assaults from poor security, and sexual misconduct against religious orders, therapists and counselors. His cases have led to appearances on Oprah Winfrey, Good Morning America, the Today Show, Montel Williams as well as national front page news coverage by the NY Times.</p>
<p>Mark has been involved in a wide variety of environmental and progressive groups and causes. In addition to his legal activities, he has founded and runs Voodoo Cowboy, an entertainment company in Austin, which served as executive producer of <strong>Downloading Nancy</strong> (Sundance 2008) and as producer of <strong>The 2 Bobs</strong> (SXSW 2009). He also throws the best party of the year in August in Austin.</p>
					      </div>
					    </div>
					  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerTen">
					        Jason C. Miller <span class="role">Executive Producer</span>
					      </a>
					    </div>
					    <div id="producerTen" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p>Jason is a 5th generation Montanan. After many different roads traveled, his love of movies brought him to film work in 2008. Since then he has worked as a Director, Actor, Writer, Associate Producer, and Producer of various film projects in Montana. Jason's impact on Winter in the Blood has been invaluable.  He helped secure several early investment partners; on set he performed a variety of intriguing jobs including rain-maker, race car driver, human shield, cheerleader, and shoulder to cry on.</p>
					      </div>
					    </div>
					  </div>
					  <!-- PRODUCER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#producerEleven">
					        Neil Gobioff &amp; Shawn Paonessa <span class="role">Associate Producers</span>
					      </a>
					    </div>
					    <div id="producerEleven" class="accordion-body collapse">
					      <div class="accordion-inner">
					        <p>Neil Gobioff and Shawn Paonessa began their professional venture in 1999, when they co-wrote their first one-act, which was immediately accepted for production by Jobsite Theater in Tampa. The duo spent the next decade or so writing several more one-acts and full length productions, all of which were produced, culminating in their Off-Broadway premiere. During all of that, Gobioff also developed as a behind-the-scenes theatre technician and producer, while Paonessa developed as an actor and director. In 2011, they formed Kitefliers Studios, a film and media production house. Their credits include Associate Producers of the Off-Broadway hit <strong>SILENCE! The Musical</strong> and Co-Executive Producers of <strong>Table Ten Films' Clutter</strong>, currently in post-production, starring Carol Kane. They are also in post-production with their first self-produced work, <strong>The Bedford Devil</strong>, a dark comedy short expected by the end of 2012.
.</p>
					      </div>
					    </div>
					  </div>
					 
					
					  
					</div>
				</div>
				
				<!-- CREW -->
				<div class="crew">
					<h2 class="span8">Collaborators</h2>
					<div class="accordion span8" id="accordion2">
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					        Rene Haynes <span class="role">Casting Director</span>
					      </a>
					    </div>
					    <div id="collapseOne" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>Rene is a two-time Emmy Nominee for the TNT/DreamWorks mini-series <strong>Into the West</strong> and the HBO feature <strong>Bury My Heart at Wounded Knee</strong>, for which she also received the Artios Award for excellence in casting.  She is recognized in the entertainment industry as one of the foremost experts in Native American and First Nations casting and consults on many projects, both domestic and foreign.  During her career she has easily moved back and forth between large studio projects with industry icons such as Steven Spielberg and Terrence Malick, to casting low budget first features for emerging and student filmmakers.  Rene became part of the uber-crazy pop culture world surrounding the popular <strong>Twilight Saga</strong> – when she joined the casting team to find the Wolf Pack for New Moon and then to cast all the leads in Eclipse. Rene recently cast the civil war picture, <strong>Copperhead</strong> and the Jeff Barnaby feature debut, <strong>Rhymes for Young Ghouls</strong>.  She is currently attached to cast <strong>Deerslayer</strong>, <strong>Man Called Buffalo</strong>, <strong>Lee</strong>, <strong>Die Laughing</strong>, <strong>Monkey Beach</strong> and several other feature projects. As a producer, Rene was on the producing team of the award winning, independent film, <strong>Butterfly Dreaming</strong>.</p>
					      </div>
					    </div>
					  </div>
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					        Paula Huidobro <span class="role">Cinematographer</span>
					      </a>
					    </div>
					    <div id="collapseTwo" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>Paula Huidobro was born in Mexico City. She studied at the London International Film School and at the American Film Institute where she received her MFA in cinematography. One of her earlier features, <strong>Gardens of the Night</strong>, premiered at the Official Selection in Competition at the Berlin Film Festival and won the International Critics Award at the Deauville Film Festival. It also earned her a nomination for  best cinematography at the Milan Film Festival. She worked with director Leland Orser on feature, <strong>Morning</strong>, starring Jeanne Tripplehorn, Laura Linney and Elliot Gould and has also shot  several projects with award winning director Rodrigo Garcia. She has collaborated with Academy Award winning producer Mark Johnson on two features, <strong>Bless Me Ultima</strong>, directed by Carl Franklin, and <strong>Last Weekend</strong> starring Patricia Clarkson.</p>
<p>Paula frequently collaborates with her mentor, cinematographer Emmanuel Lubeski, including shooting second unit for him on  the latest Terrence Malick film. Paula has shot commercials both in the US and Mexico for brands such as McDonalds, Sprite, Kellog’s. She has  worked with award winning commercial directors Frank Budgeon, Robert Logevall, Dante Ariola and Mark Webb among others. In 2009 she was selected as one of the 25 New Faces of Filmaker Magazine.</p>
					      </div>
					    </div>
					  </div>
			
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
					        Michael Hofacre <span class="role">Film Editor</span>
					      </a>
					    </div>
					    <div id="collapseFour" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>Michael has been a part of the editing team on over 30 feature films. He has worked alongside directors Danny DeVito, Judd Apatow, Adam McKay, Milos Forman, Michael Mann, and Jodie Foster. Some of the films he has worked on include <strong>The 40 Year Old Virgin</strong>, <strong>Talladega Nights</strong>, <strong>Step Brothers</strong>, <strong>Ali</strong>, <strong>Man on the Moon</strong>, <strong>Matilda</strong>, <strong>Home for the Holidays</strong>, and <strong>The Beaver</strong>. He recently completed editing the independent films <strong>Shelter</strong> and <strong>Frankie Go Boom</strong>.</p>
					      </div>
					    </div>
					  </div>
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
					        David Storm <span class="role">Production Designer</span>
					      </a>
					    </div>
					    <div id="collapseFive" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>David Storm has Art Directed for some of the industry’s pioneering independent artists including David Lynch, Wim Wenders, The Polish Brothers and the late photographer Herb Ritts.  David has art directed commercials for <strong>Nintendo Wii</strong>, <strong>Microsoft</strong>, <strong>Nike</strong>, <strong>IBM</strong>, <strong>HP</strong>, <strong>Doritos</strong>, <strong>Wrangler</strong>, and <strong>Target</strong> as well as music Videos for <strong>Anya Marina</strong>, <strong>Handsome Furs</strong>, <strong>The Fruit Bats</strong>, and <strong>Wolf Parade</strong>.
Recent feature films include Scott Coffey’s <strong>ADULT WORLD</strong> for Anonymous Content, <strong>WINTER IN THE BLOOD</strong> for The Brothers Smith and Michael James Johnsons’ <strong>THE WILDERNESS OF JAMES</strong>.
Born in Montana, David attended Montana State University for film production. Having spent over 10 years in Los Angeles, he now calls Portland, Oregon home.</p>
					      </div>
					    </div>
					  </div>
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
					        Kristin Burke <span class="role">Costume Designer</span>
					      </a>
					    </div>
					    <div id="collapseSix" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>Kristin Burke has designed costumes for more than forty feature films and television movies, including <strong>The Conjuring</strong>, <strong>Seeking a Friend for the End of the World</strong>, <strong>Insidious</strong>, <strong>Paranormal Activity 2</strong>, <strong>Crossing Over</strong>, <strong>Running Scared</strong>, <strong>The Cooler</strong>, <strong>The Slaughter Rule</strong>, and <strong>Star Maps</strong>. She has also designed costumes for music videos, commercials, and two television series. In addition, Ms. Burke is an internationally-exhibited artist, specializing in collage and mail art, with her first solo exhibition in Los Angeles in 2001. She has also authored two books: <strong>Costuming for Film: the Art and the Craft</strong>, co-written with Holly Cole for Silman James Press, and <strong>Going Hollywood: How to Get Started, Keep Going, and Not Turn Into a Sleaze</strong>.</p>
					      </div>
					    </div>
					  </div>
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven">
					        SNAPSOUND <span class="role">Sound Design</span>
					      </a>
					    </div>
					    <div id="collapseSeven" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>SNAPSOUND is sound for storytellers. Formed in 2008, Zach Seivers and J.M. Davey realized they were natural collaborators in shaping sound. They wanted to create a boutique facility offering comprehensive post-production sound services for Film, Television and New Media. Since then SNAPSOUND has been honored with a Primetime Emmy Award and an MPSE Golden Reel Award for their work on <strong>Gettysburg</strong>, produced by Scott Free and History. Most recently, Zach and Justin completed work on <strong>Look of Love</strong>, starring Annette Bening, Ed Harris and Robin Williams. This psychological romance required detailed and subtle sound design to complement the filmmakers vision. Earlier this year, the guys let it get loud, sound designing and mixing the futuristic, science-fiction <strong>HALO 4: Forward Unto Dawn</strong> based on the HALO video game franchise. Zach and Justin continue to enjoy their work on multiple television series for [Adult Swim] as well as projects for other clients including: Fox Searchlight, The Weinstein Co., HBO Documentary Films, NBC Universal, ABC/Disney, Warner Bros. and more. SNAPSOUND looks forward to continuing work with creative individuals to enhance and illuminate the storytelling process through sound.</p>
					      </div>
					    </div>
					  </div>
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseEight">
					        Chris Funk &amp; Sara Matarazzo <span class="role">Music Supervisors</span>
					      </a>
					    </div>
					    <div id="collapseEight" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>Best known as the multi-instrumentalist in the indie rock band <strong>The Decemberists</strong>, Chris Funk has also found much success as a music producer, composer, and studio musician.  The artist has lent his musical acumen to such bands as The Shins, Laura Veirs, Blue Giant and more.  Funk is also a founding member of the acclaimed neo-gothic string band Black Prairie on Sugar Hill Records.  He has produced records for Red Fang, Langhorne Slim, The Builders and The Butchers, and Y La Bamba.  He recently opened a studio in the office’s of Search Party West, a music supervision company headed by the legendary music supervisor Randall Poster where he plans to continue producing as well as focusing on soundtrack work and supervision.</p>
					      </div>
					    </div>
					  </div>
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseNine">
					        Mishka Westell <span class="role">Title Design</span>
					      </a>
					    </div>
					    <div id="collapseNine" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>Bio coming soon</p>
					      </div>
					    </div>
					  </div>
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
					        Brent White A.C.E. <span class="role">Consulting Editor</span>
					      </a>
					    </div>
					    <div id="collapseThree" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>After working with Alex and Andrew Smith at the Sundance Filmmakers’ Lab, Brent cut the Smith's first feature <strong>The Slaughter Rule</strong>. Since then, he’s become America’s pre-eminent comedy editor, working with Adam McKay on <strong>The Other Guys</strong>, <strong>Step Brothers</strong>, <strong>Talladega Nights</strong> and <strong>Anchorman: The Legend of Ron Burgundy</strong> (and soon, the Anchorman sequel!). He also edits Judd Apatow’s films, including <strong>Funny People</strong>, <strong>Knocked Up</strong>, <strong>The 40-Year-Old Virgin</strong>, and the upcoming <strong>This is Forty</strong>. He’s currently in post on Paul Feig’s follow-up to Bridesmaids— <strong>The Heat</strong>.</p>
<p>Brent’s other credits include <strong>Arthur</strong>, <strong>A River Runs Through It</strong>, <strong>And The Band Played On</strong>, <strong>Matilda</strong>, <strong>Panic</strong>, and the television series’ <strong>Desperate Housewives</strong>, <strong>Freaks & Geeks</strong> and <strong>Undeclared</strong>. He received an Emmy award nomination for his work as part of the editing team for the 2002 Academy Awards. He began his career as an editor for the Sundance Film Institute's summer lab program and has assisted on such films as <strong>The Milagro Beanfield War</strong>, <strong>Glory</strong>, and <strong>Home for the Holidays</strong>.</p>
					      </div>
					    </div>
					  </div>
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTen">
					        Lynzee Klingman <span class="role">Consulting Editor</span>
					      </a>
					    </div>
					    <div id="collapseTen" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>Bio coming soon</p>
					      </div>
					    </div>
					  </div>
					  <!-- CREWMEMBER -->
					  <div class="accordion-group">
					    <div class="accordion-heading">
					      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven">
					        Eric Edwards <span class="role">Consulting Editor</span>
					      </a>
					    </div>
					    <div id="collapseEleven" class="accordion-body collapse">
					      <div class="accordion-inner">
					      	<p>Eric has been behind the camera on more than 30 films including director Gus Van Sant's <strong>My Own Private Idaho</strong>, for which Eric garnered an Independent Spirit Award nomination; Gus Van Sant’s <strong>To Die For</strong>, Larry Clark's highly controversial <strong>Kids</strong>, David O. Russell’s <strong>Flirting with Disaster</strong>, <strong>Copland</strong>, <strong>Another Day in Paradise</strong>, and <strong>Clay Pigeons</strong>, starring Vince Vaughn and Joaquin Phoenix. Edwards also lensed, in wide screen format, <strong>The Slaughter Rule</strong>. He next shot <strong>The Break Up</strong> and Judd Apatow’s <strong>Knocked Up</strong>. Edwards is currently shooting <strong>The Delivery Man</strong> for Vince Vaughn, and recently completed <strong>Lovelace</strong>, the romantic comedy <strong>Management</strong>, starring Jennifer Aniston and Woody Harrelson; and <strong>Traveling</strong> starring Aaron Eckhart and Jennifer Aniston. In addition to his film work, Edwards is known for his international commercials and music videos for the likes of Bruce Springsteen, Elton John, Michael Jackson, Donna Summers, Alanis Morissette, Paul Simon and the Red Hot Chile Peppers.</p>
					      </div>
					    </div>
					  </div>
					  
					  
					  
					</div>
				</div>
			</div>
		</div>

		<?php get_sidebar(); ?>
</div><!-- .main -->
<footer class="container">	
	<?php get_footer(); ?>
</footer>