@extends('master')
@section('content')
 <section id="profile">
      <div class="section__pic-container">
        <img src="{{asset('assets/images/profile-pic.png')}}" alt="John Doe profile picture">
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">John Doe</h1>
        <p class="section__text__p2">Frontend Developer</p>
        <div class="btn-container">
          <button class="btn btn-color-2" onclick="window.open('./assets/resume-example.pdf')">
            Download CV
          </button>
          <button class="btn btn-color-1" onclick="location.href='./#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img src="{{asset('assets/images/linkedin.png')}}" alt="My LinkedIn profile" class="icon" onclick="location.href='https://linkedin.com/'">
          <img src="{{asset('assets/images/github.png')}}" alt="My Github profile" class="icon" onclick="location.href='https://github.com/'">
        </div>
      </div>
    </section>
    <section id="about">
      <p class="section__text__p1">Get To Know More</p>
      <h1 class="title">About Me</h1>
      <div class="section-container">
        <div class="section__pic-container">
          <img src="{{asset('assets/images/about-pic.png')}}" alt="Profile picture" class="about-pic">
        </div>
        <div class="about-details-container">
          <div class="about-containers">
            <div class="details-container">
              <img src="{{asset('assets/images/experience.png')}}" alt="Experience icon" class="icon">
              <h3>Experience</h3>
              <p>2+ years <br>Frontend Development</p>
            </div>
            <div class="details-container">
              <img src="{{asset('assets/images/education.png')}}" alt="Education icon" class="icon">
              <h3>Education</h3>
              <p>B.Sc. Bachelors Degree<br>M.Sc. Masters Degree</p>
            </div>
          </div>
          <div class="text-container">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quis
              reprehenderit et laborum, rem, dolore eum quod voluptate
              exercitationem nobis, nihil esse debitis maxime facere minus sint
              delectus velit in eos quo officiis explicabo deleniti dignissimos.
              Eligendi illum libero dolorum cum laboriosam corrupti quidem,
              reiciendis ea magnam? Nulla, impedit fuga!
            </p>
          </div>
        </div>
      </div>
      <img src="{{asset('assets/images/arrow.png')}}" alt="Arrow icon" class="icon arrow" onclick="location.href='./#experience'">
    </section>
    <section id="experience">
      <p class="section__text__p1">Explore My</p>
      <h1 class="title">Experience</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container">
            <h2 class="experience-sub-title">Frontend Development</h2>
            <div class="article-container">
              <article>
                <img src="{{asset('assets/images/checkmark.png')}}" alt="Experience icon" class="icon">
                <div>
                  <h3>HTML</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img src="{{asset('assets/images/checkmark.png')}}" alt="Experience icon" class="icon">
                <div>
                  <h3>CSS</h3>
                  <p>Experienced</p>
                </div>
              </article>
              <article>
                <img src="{{asset('assets/images/checkmark.png')}}" alt="Experience icon" class="icon">
                <div>
                  <h3>SASS</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img src="{{asset('assets/images/checkmark.png')}}" alt="Experience icon" class="icon">
                <div>
                  <h3>JavaScript</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img src="{{asset('assets/images/checkmark.png')}}" alt="Experience icon" class="icon">
                <div>
                  <h3>TypeScript</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img src="{{asset('assets/images/checkmark.png')}}" alt="Experience icon" class="icon">
                <div>
                  <h3>Material UI</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
          <div class="details-container">
            <h2 class="experience-sub-title">Frontend Development</h2>
            <div class="article-container">
              <article>
                <img src="{{asset('assets/images/checkmark.png')}}" alt="Experience icon" class="icon">
                <div>
                  <h3>PostgreSQL</h3>
                  <p>Basic</p>
                </div>
              </article>
              <article>
                <img src="{{asset('assets/images/checkmark.png')}}" alt="Experience icon" class="icon">
                <div>
                  <h3>Node JS</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img src="{{asset('assets/images/checkmark.png')}}" alt="Experience icon" class="icon">
                <div>
                  <h3>Express JS</h3>
                  <p>Intermediate</p>
                </div>
              </article>
              <article>
                <img src="{{asset('assets/images/checkmark.png')}}" alt="Experience icon" class="icon">
                <div>
                  <h3>Git</h3>
                  <p>Intermediate</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <img src="{{asset('assets/images/arrow.png')}}" alt="Arrow icon" class="icon arrow" onclick="location.href='./#projects'">
    </section>
    <section id="projects">
      <p class="section__text__p1">Browse My Recent</p>
      <h1 class="title">Projects</h1>
      <div class="experience-details-container">
        <div class="about-containers">
          <div class="details-container color-container">
            <div class="article-container">
              <img src="{{asset('assets/images/project-1.png')}}" alt="Project 1" class="project-img">
            </div>
            <h2 class="experience-sub-title project-title">Project One</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="{{asset('assets/images/project-2.png')}}" alt="Project 2" class="project-img">
            </div>
            <h2 class="experience-sub-title project-title">Project Two</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Live Demo
              </button>
            </div>
          </div>
          <div class="details-container color-container">
            <div class="article-container">
              <img src="{{asset('assets/images/project-3.png')}}" alt="Project 3" class="project-img">
            </div>
            <h2 class="experience-sub-title project-title">Project Three</h2>
            <div class="btn-container">
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Github
              </button>
              <button class="btn btn-color-2 project-btn" onclick="location.href='https://github.com/'">
                Live Demo
              </button>
            </div>
          </div>
        </div>
      </div>
      <img src="{{asset('assets/images/arrow.png')}}" alt="Arrow icon" class="icon arrow" onclick="location.href='./#contact'">
    </section>
    <section id="contact">
      <p class="section__text__p1">Get in Touch</p>
      <h1 class="title">Contact Me</h1>
      <div class="contact-info-upper-container">
        <div class="contact-info-container">
          <img src="{{asset('assets/images/email.png')}}" alt="Email icon" class="icon contact-icon email-icon">
          <p><a href="mailto:examplemail@gmail.com">Example@gmail.com</a></p>
        </div>
        <div class="contact-info-container">
          <img src="{{asset('assets/images/linkedin.png')}}" alt="LinkedIn icon" class="icon contact-icon">
          <p><a href="https://www.linkedin.com">LinkedIn</a></p>
        </div>
      </div>
    </section>
    
@endsection