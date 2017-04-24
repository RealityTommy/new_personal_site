<?php include "project_header.php"; ?>

<div id="content" class="project" role="main">

	<div class="featured_img">
	</div>

	<div class="container">

		<div class="row">

			<div class="col-md-12">
				<h1>SketchUpSim</h1>

				<h2>Problem</h2>

				<p>
					Currently, there is a discrepancy between the content educators want to make and the time or knowledge they have to create it. With the increasing popularity of virtual reality in education, many teachers want to take advantage of this technology to engage and excite students with the lesson on a level deeper than some traditional methods. Unfortunately, due to constraints imposed by budgets, time, experience, etc., not every educator can make use of these opportunities to connect with their students.
				</p>

				<h2>Methods</h2>

				<p>
					SketchUpSim began as a challenge by a friend from the <a href="http://www.dia.org/">Detroit Institute of Arts</a> (DIA) to design a quick and affordable solution to model museum exhibits before building them.
				</p>

				<p>
					Our first approach was a more traditional method of building a scalled down model of the room and place small replicas of the exhibits in their prospective locations. While the model allowed the curator to see space relationships between the room and exhibit, user surveys revealed to us that this is not unique to existing methods nor did it simulate what visitors would feel like to actually explore the space.
				</p>

				<p>
					Time to go back to the drawing board.
				</p>

				<p>
					One afternoon while our team was cleaning out the equipment closet, we discovered a mysterious black box in the back corner. As if by chance, what that box contained was the Developer Kit 1 of the <a href="https://www.oculus.com/rift/">Oculus Rift</a>. As you can imagine, us geeks were pretty excited to have a new toy. At the same time, what dawned upon us was another potential solution to modelling exhibits--virtual reality (VR), also known as immersive multimedia.
				</p>

			</div>

			<div class="images space">
				<div class="col-md-6">
					<img src="http://www.roadtovr.com/wp-content/uploads/2013/03/oculus-rift-unboxing.jpg" alt="Development Kit 1 of Oculus Rift inside carrying case.">
				</div>

				<div class="col-md-6">
					<img src="./img/sketchupsim/class-demo.jpg" alt="Student using Oculus Rift.">
				</div>
			</div>

			<div class="col-md-12">

				<p>
					After some research on developing with VR (especially at that time) and meeting with various professors at <a href="https://msu.edu/">Michigan State University</a> (MSU), we discovered that the main issues of using these types of technology within education were affordabilty and accessibility. Like the DIA, most institutions do not have enough resources to afford the hardware or software development and employees usually do not have enough time to learn the teachnology. At the same time, there were enough resources available on the internet (i.e. plugins, libraries, etc.) to make such a solution possible.
				</p>

				<p>
					Despite these challenges, we presented our findings to the stakeholders along with a demonstration of VR. Unfortunately, the DIA was not ready at that time to invest in such a new technology. However, our manager, <a href="http://schopie1.com/">Dr. Scott Schopieray</a>, the Assistant Dean for Academic and Research Technology at the MSU <a href="http://www.cal.msu.edu/">College of Arts and Letters</a>, encouraged us to continue our work and gave us the rest of the semester to design a viable solution to the DIA's original needs.
				</p>

				<p>
					Time to develop.
				</p>

				<h2>The Process</h2>

				<p>
					The goal of our deliverable to Dr. Scopieray was a outlined process of how to create affordable and accessible VR simulations for MSU faculty to extend their pedagogy. Our main audience/users will be instructors who have little to no development skills and little to no funding for buying assets other than hardware (the assumption is that the instructor already has or can obtain a VR headset).

				<p>
					The most crucial factors for education technology to be effective in the classroom, according to <a href="https://www.edutopia.org/">Edutopia</a>, is to
					
					<ol>
						<li>be accessible and readily available for the tasks at hand, and</li>
						<li>support curricular goals</li>
					</ol>

					(visit <a href="https://www.edutopia.org/technology-integration-guide-description">https://www.edutopia.org/technology-integration-guide-description</a> for the full article).
				</p>

			</div>

		</div>

		<div class="row space">

			<div class="col-md-6">

				<p>
					The first step of the process is understand the curriculum. What are the learning goals, and is VR is an effective solution to achieve those goals? More often than not, technology is seen as a plug-and-play, one-size-fits-all solution that once implemented, is expected to immediately "enhance" the classroom experience. Sustainable, effective technological solutions extend the existing curriculum that requires both buy-in from the instructor and some training that allows the instructor to maintain the solution throughout various student needs.
				</p>

			</div>

			<div class="col-md-6">

				<img alt="Students in classroom using technology." src="http://msutoday.msu.edu/_/img/assets/2013/real-classroom-sticklen-2.jpg">

			</div>

		</div>

		<div class="row space">

			<div class="col-md-6">

				<p>
					In the context of VR simulations, this involves working with the instructor to utilize models that they already have or find models relevant to their pedagogy. Thanks to the altruism of online communities, there are many online repositories that offer free and high-quality models for a variety of uses. If models do not already exist, then we can utilize a free, easy-to-use modeling software called <a href="https://www.sketchup.com/">SketchUp</a> to build some from scratch.
				</p>

			</div>

			<div class="col-md-6">

				<img alt="Island House model inside SketchUp." src="./img/sketchupsim/sketchup_preview.png">

			</div>

		</div>

		<div class="row space">

			<div class="col-md-6">

				<p>
					After obtaining the models, we utilize a free game development engine called <a href="https://unity3d.com/">Unity</a> to put together all the models in order to create a three-dimensional environment. This process is as simple as dragging-and-dropping the models from the computer into Unity's interface and moving them to where they should be in the "scene".
				</p>

			</div>

			<div class="col-md-6">

				<img alt="Island House model inside Unity." src="./img/sketchupsim/unity_preview.png">

			</div>

		</div>	

		<div class="row space">

			<div class="col-md-6">

				<p>
					In order to make the simulation exporable via VR, the steps are as simple as

					<ol>
						<li>drag-and-drop the first-person perspective from the available presets to where the user should start, and</li>
						<li>check a box that turns on VR headset compatability.</li>
					</ol>

					Once complete, the simulation can be exported to a variety of devices including Oculus Rift, <a href="https://www.vive.com/us/">HTC Vive</a>, <a href="http://www.samsung.com/global/galaxy/gear-vr/">Samsung Gear VR</a>, and <a href="https://vr.google.com/cardboard/">Google Cardboard</a>!

				</p>

			</div>

			<div class="col-md-6">

				<img alt="Island House model inside SketchUp." src="./img/sketchupsim/stereoscopic_preview.png">

			</div>

		</div>		

		<div class="row">

			<div class="col-md-12">

				<h2>Moving Forward</h2>

				<p>
					While SketchUpSim allows instructors to begin creating and implmenting VR into their curriculum, much more needs to be done before these technologies can become a regular sight in classrooms. Since VR is still so young, it is imperative that more conversations happen around education and immersive multimedia--how it can be incorporated into pedagogy, what instructor and user needs are, and how existing educational systems and sustain it.
				</p>

				<p>
					Let's make VR education happen!
				</p>
				
			</div>

		</div>
		
	</div>

</div>

<?php include "project_footer.php"; ?>