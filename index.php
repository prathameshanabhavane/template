<!doctype html>
<html lang="en">
	<head>
		<?php include "includes/links.php" ?>
		<style type="text/css">
			.left-side-image {
				background-image: url(./assets/img/banner.png);
			}
		</style>
	</head>
	<body>
		<div class="home-pg">
			<section class="section sm-p0 sm-pb15">
				<div class="container sm-p0">
					<div class="col-12 left-side-image">
					</div>
					<div class="right-side-content">
						<h1>
							Illinois
						</h1>
						<p>
							Collegepond is glad to announce that we would be conducting an Online Webinar with University of Illinois, Urbana Champaign (UIUC). Interact with the University officials about your queries for courses, admission eligibility and a lot more before applying.
						</p>
						<p>
							In this session they will briefly discuss the graduate programs at UIUC followed by a ‘Question and Answer’ session which will be moderated by the counsellors at Collegepond. This is a great opportunity for you to interact with the Director of Enrollment Management & Student Ambassadors at UIUC to understand the selection criteria, jobs, RA/ TA opportunities and a lot more.
						</p>
						<h3>
							Speaker Profile:
						</h3>
						<p>
							Moises Orozco Villicana, Director of Enrollment Management & Victor Jones, Assistant Director of Recruitment and Diversity Initiative will be interacting with the students and answering all queries.
						</p>
						<h3 class="mt-4">
							Agenda for the Session:
						</h3>
						<ul class="pl-3">
							<li>
								Introduction of Staff and Students.
							</li>
							<li>
								Learn about the University of Illinois Urbana Champaign
							</li>
							<li>
								UIUC iSchool Information
							</li>
							<li>
								About our Master’s Degree Options (MSIM)
							</li>
							<li>
								Admission criteria and important dates
							</li>
							<li>
								Deadlines
							</li>
							<li>
								Funding Options
							</li>
							<li>
								Scores
							</li>
							<li>
								Q&A and Discussion with student ambassadors from India
							</li>
						</ul>
						<div class="mt-4">
							<h3>
								Register Now
							</h3>
							<form id="contact-form" class="form" action="contact_us.php" method="post">
								<div class="form-group p-0">
									<label for="name" class="input-label">
										Name <span>*</span>
									</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="" required="">
								</div>
								<div class="form-group p-0">
									<label for="email" class="input-label">
										Email <span>*</span>
									</label>
									<input type="email" class="form-control" name="email"  id="email" placeholder="" required="">
								</div>
								<div class="form-group p-0">
									<label for="contact_number" class="input-label">
										Contact Number <span>*</span>
									</label>
									<input type="text" class="form-control txt-only-number" name="contact" id="contact_number" placeholder="" required="">
								</div>
								<div class="form-group p-0 text-left mt-3">
									<button type="submit" id="btn_submit" class="btn btn-primary btn-sm">Submit</button>
								</div>
							</form>
							<div class="alert alert-success alert-dismissible fade show mt-3 d-none success_message" role="alert">
								<strong>Thanks!!!</strong> We will get back to you after some time.
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<?php include "includes/footer.php" ?>
	</body>
</html>