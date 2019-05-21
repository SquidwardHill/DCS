<?php
/*
 * 
 * Template Name: Team
 *
 */

get_header();?>
<?php
    get_template_part('template-parts/headers/team');
?>
<main id="main">
    <?php while (have_posts()): the_post();?>
    <section class="section -white">
        <div class="section__wrapper">
          <div class="row">
            <div class="col -half -center">
              <div class="section__content">
                <div class="wysiwyg">
                  <h2><?php the_field('team_title'); ?></h2>
                  <?php the_field('team_body'); ?>
                  <a class="section__link" href="https://www.linkedin.com/jobs/search?f_C=15212683&amp;pageNum=0&amp;position=1" target="_blank">Browse our current openings
                    <svg class="section__linkIcon arrow">
                      <use xlink:href="#arrow"></use>
                    </svg></a>
                </div>
              </div>
            </div>
            <div class="col -half -mobileTop">
              <div class="section__imageBox">
                <!--img.section__image(src=`${relativeRoot}assets/images/team-photo.jpg`, alt='')-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section -introLine" data-animation="intro-a">
        <div class="section__wrapper">
          <div class="section__introLines">
            <div class="section__lineBox -right">
              <div class="section__line"></div>
            </div>
            <div class="section__lineBox -bottom">
              <div class="section__line"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="section">
        <div class="section__wrapper">
          <div class="team">
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/ben-hatten.jpg" alt="Ben Hatten"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Ben Hatten</p>
                <p class="team__memberRole">Partner</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Ben launched DCS to employ Salesforce as a catalyst for business growth.</p>
                  <p class="team__memberText">With over 10 years of experience working in the Salesforce ecosystem, Ben has spearheaded sales and led IT operations at a range of organizations—from Fortune 500 companies and venture capital firms to scaling venture-backed startups.</p>
                  <p class="team__memberText">Ben completed his MBA at the University of Maryland after earning his undergraduate degree at Notre Dame. Ben lives in Arlington with his wife, two sons, and a very hyper Bernedoodle.</p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/erin-hatten.jpg" alt="Erin Hatten"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Erin Hatten</p>
                <p class="team__memberRole">Partner</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Erin empowers clients to accomplish business goals and streamline processes through technology. She drives meaningful digital transformation, leveraging Salesforce, ServiceNow, SAP, and various other technologies to position clients for success.</p>
                  <p class="team__memberText">Prior to joining DCS, Erin spent over 12 years in technology consulting at Accenture in the commercial and federal sectors, where she worked directly with e-commerce, sales, field service and repair, grants management, and human resources teams.</p>
                  <p class="team__memberText">An adept problem-solver, Erin identifies the right team of people to conquer any challenge. A graduate of the University of Virginia with a Bachelor of Science in Commerce, Erin is an avid runner and yogi known to brew a mean batch of kombucha. She lives in Arlington with her two sons, husband, and dog.</p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/brad-connell.jpg" alt="Brad Connell"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Brad Connell</p>
                <p class="team__memberRole">Associate</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Brad joined DCS in the beginning of 2019. Prior to joining DCS, Brad worked in the financial industry in sales and operations. Using his end-user experience with CRMs, Brad decided to enter the exciting world of Salesforce to help businesses optimize their performance through best configuring their organization’s Salesforce instance. </p>
                  <p class="team__memberText">Brad earned his BA in Economics from Denison University, and outside of work, enjoys running and cheering on Washington sports teams.</p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/byron-livernois.jpg" alt="Byron Livernois"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Byron Livernois</p>
                <p class="team__memberRole">Senior Director</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Byron joined DCS in 2019 after working at Duco Technology, The Wall Street Journal and Bloomberg. Byron has spent 10 years working in the Salesforce ecosystem in the media and tech industries as well as volunteer work with several non-profits.</p>
                  <p class="team__memberText">Byron earned a BA in Psychology from the University of Rhode Island, a BS in Biology from the University of Illinois - Chicago and an MBA from Fordham University. Outside of work he is an avid cyclist, a musician, a father and a husband, not necessarily in that order.</p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/chrissy-andrews.jpg" alt="Chrissy Andrews"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Chrissy Andrews</p>
                <p class="team__memberRole">Senior Director</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Chrissy was the first person to join Ben at DCS in 2016 after working at EverFi for 5 years in roles ranging from product development to account management to sales. With a love of creating structure and improving business processes, Chrissy has helped numerous organizations set-up, enhance, and merge their Salesforce and Pardot systems.</p>
                  <p class="team__memberText">Chrissy earned her BA from Notre Dame and when not at the office enjoys spending as much time as possible outside. </p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/devin-larsen.jpg" alt="Devin Larsen"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Devin Larsen</p>
                <p class="team__memberRole">Associate</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Devin joined DCS in 2018 after working as a technical support engineer and project manager for Epic Systems Corporation. He transitioned from helping healthcare organizations utilize patient records in Epic to helping businesses use client records in Salesforce, and loves finding software solutions to tough problems. </p>
                  <p class="team__memberText">Devin earned a BS in Electrical Engineering from the University of Nebraska - Lincoln. Outside of the office you can find Devin cheering on the Cornhusker football team and exploring DC. </p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/erin-burgin.jpg" alt="Erin Burgin"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Erin Burgin</p>
                <p class="team__memberRole">Head of People Operations</p>
                <div class="team__memberBio">
                  <p class="team__memberText">After 7 years in the media industry, Erin joined DCS in 2019. Erin has most recently worked at The Slate Group in various roles ranging from managing podcast advertising operations for Megaphone to executing Slate’s live events. Erin has a real passion for connecting with people and is excited to help DCS grow. </p>
                  <p class="team__memberText">During her free time, Erin enjoys spending time with her husband, Alan and daughter, Ella in Mt. Pleasant, DC and traveling to her home state of Florida for sunshine and salt air. </p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/geoff-vaughan.jpg" alt="Geoff Vaughan"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Geoff Vaughan</p>
                <p class="team__memberRole">Managing Director</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Geoff joined DCS in 2019 after spending 17 years with Accenture and Deloitte leading enterprise transformations in ERP and CRM for a diverse client base in Aerospace, Defense, Communications and High-Tech, Non-Profit, DOD, Intel, and Civilian industries.</p>
                  <p class="team__memberText">Geoff earned his BS in Business Information Technology from the Virginia Tech.  When not at DCS, Geoff enjoys spending time outside, skiing and playing basketball.  He also enjoys spending time with his three young children, Annabell, Liam, and Colton, and wife, Kristen.  </p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/karmel-james.jpg" alt="Karmel James"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Karmel James</p>
                <p class="team__memberRole">Senior Associate</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Prior to joining DCS in 2019, Karmel championed small nonprofits to streamline organizational operations and fundraising strategies. She was gifted the power of Salesforce as a reward for transforming Google Sheets into a financial management database. Karmel enjoys analyzing client processes to craft solutions that maximize technology and increase staff happiness.</p>
                  <p class="team__memberText">Karmel earned her BS in Chemistry from the University of Mary Washington. Outside the office, she is an enthusiastic alumni ambassador, Smithsonian volunteer, and can be found dancing to her favorite playlists. </p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/kelly-bahng.jpg" alt="Kelly Bahng"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Kelly Bahng</p>
                <p class="team__memberRole">Senior Associate</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Kelly began her career in the public health/research-funding sector, but made a pivot to tech consulting after discovering the magic of Salesforce as a business transformation tool. She enjoys helping clients become more efficient by automating and enhancing business processes in Salesforce, as well as in marketing automation platforms, like Pardot. </p>
                  <p class="team__memberText">Kelly has a BS in Public Health from the University of Texas at Austin (Hook ‘em!) and can be found running, dancing, exploring the great outdoors, or traveling the globe when not improving Salesforce systems.</p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/kevin-fay.jpg" alt="Kevin Fay"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Kevin Fay</p>
                <p class="team__memberRole">Director</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Kevin earned his undergraduate degree from the Rochester Institute of Technology. He moved to Alexandria and spent 13 years working for Global Printing before joining DCS in 2017.   Kevin has helped numerous scaling technology companies and associations with setting up Salesforce for both Sales Cloud & CPQ.</p>
                  <p class="team__memberText">When not at the office, Kevin enjoys going to Wegmans, running long distances for no good reason, spending time with his family and cheering on his favorite sports team, the Pittsburgh Penguins, particularly when they are beating the Caps.</p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/leslie-martin.jpg" alt="Leslie Martin"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Leslie Martin</p>
                <p class="team__memberRole">Senior Developer</p>
                <div class="team__memberBio">
                  <p class="team__memberText">After having taught high school computer technology courses in the mid-1990s, Leslie became interested in learning more about programming and how to develop web and data-driven applications.  She has spent the last 20 years building her web expertise and has worked with a variety of clients across the Kansas City metro area.  Her skills include C#, PHP, Python, SQL Server, mySQL, Django, WordPress and Drupal.  She joined DCS in 2018 and continues to build on her Salesforce experience.  She also helps others build out their technology experience by teaching at the local community college.</p>
                  <p class="team__memberText">Leslie resides in Overland Park and enjoys spending time with her husband Scott, two daughters Abby and Olivia, son Noah, son-in-law Chayse, and two grandchildren, Jackson and Addison.</p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/madison-rawles.jpg" alt="Madison Rawles"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Madison Rawles</p>
                <p class="team__memberRole">Developer</p>
                <div class="team__memberBio">
                  <p class="team__memberText">After obtaining a BS in Chemistry from Virginia Tech, Madison decided to take her career in a new direction by learning to code.  She joined DCS in 2017 after becoming a certified Salesforce developer.  Madison now helps businesses customize their Salesforce instances by creating and maintaining scalable, upgradeable code.  She enjoys problem-solving and helping users do less work by automating common processes.</p>
                  <p class="team__memberText">When not tackling users' automation needs, Madison enjoys knitting, cooking, and spoiling her cat and dog.</p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/molly-wecker.jpg" alt="Molly Wecker"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Molly Wecker</p>
                <p class="team__memberRole">Analyst</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Prior to joining DCS, Molly earned her BS in Management Information Systems at West Virginia University. Looking to apply her love of data and systems in the day-to-day, she joined DCS in 2018. Molly loves using Salesforce to build workflows and processes that make life easier for clients. Molly has helped many organizations set up and maintain their Salesforce systems.</p>
                  <p class="team__memberText">Outside of the office, you can find Molly skiing, out at concerts, and attending DC sporting events.</p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/nora-simon.jpg" alt="Nora Simon"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Nora Simon</p>
                <p class="team__memberRole">Director</p>
                <div class="team__memberBio">
                  <p class="team__memberText">A former teacher turned consultant, Nora brings 7 years of Salesforce experience to DCS. “Postponing” her original dream of becoming an archaeologist, she spent 5 years at Teach For America, supporting fundraising operations and setting Salesforce strategy across 50+ fundraising sites. </p>
                  <p class="team__memberText">Passionate about mission-driven organizations, Nora leverages her nonprofit background and Salesforce expertise to help clients use data to tell their story of impact. </p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/tim-phang.jpg" alt="Tim Phang"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Tim Phang</p>
                <p class="team__memberRole">Senior Developer/Development Lead</p>
                <div class="team__memberBio">
                  <p class="team__memberText">Tim leads the development team at DCS and joined in 2019. Throughout his career, he has built scalable software solutions for small businesses to Fortune 500s. After working at an award-winning design and development studio, he joined an ed-tech startup where led the in-house product and technology team. Tim is a highly collaborative technologist who loves helping teams to identify and define problems. As a hands-on developer, he is passionate about simplicity, TDD, and code craftsmanship.</p>
                </div>
              </div>
            </div>
            <div class="team__member" tabindex="0">
              <div class="team__memberImageBox"><img class="team__memberImage" src="/wp-content/uploads/images/team/zach-matek.jpg" alt="Zach Matek"/></div>
              <div class="team__memberDetails">
                <p class="team__memberName">Zach Matek</p>
                <p class="team__memberRole">Associate</p>
                <div class="team__memberBio">
                  <p class="team__memberText">As a former Sales professional at CEB and Gartner, Zach’s story in Salesforce began on the end user-side. He now helps organizations configure Salesforce to meet optimal business process. Salesforce is the center of the Account Executive's toolbox and Zach enjoys helping make their lives easier.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
	    <?php
             get_template_part('template-parts/cta');
        ?>
	    <?php endwhile; // end of the loop. ?>
    </main><!-- #primary -->

<?php get_footer();?>


    