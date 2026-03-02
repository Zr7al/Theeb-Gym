<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Theeb Fitness | ذيب جيم</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Theeb Fitness ذيب جيم in Marj Al Hammam Amman. Mixed gym with new machines, supportive coaches, sauna, and cafeteria. Open 6am–2am daily.">
  <meta property="og:title" content="Theeb Fitness | ذيب جيم">
  <meta property="og:image" content="assets/img/theeb-wide.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:wght@400;500;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/gym.css">
  
  <style>
    .hero {
      position: relative;
      overflow: hidden;
      /* Ensures the section has height if your CSS relied on the slides for height */
      min-height: 100vh; 
      display: flex;
      flex-direction: column;
    }
    .hero__video-bg {
      position: absolute;
      top: 50%;
      left: 50%;
      width: 100%;
      height: 100%;
      object-fit: cover;
      transform: translate(-50%, -50%);
      z-index: 0;
    }
    .hero__overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.8));
      z-index: 1;
    }
    .hero__slides {
      position: relative;
      z-index: 2;
      flex-grow: 1;
      display: flex;
    }
    /* Ensure slides stack properly and take full height */
    .hero__slide {
      width: 100%;
      display: none;
      align-items: center;
      justify-content: center;
    }
    .hero__slide.active {
      display: flex;
    }
    .hero__content {
      position: relative;
      z-index: 3;
    }
    .hero__dots, .hero__arrow, .hero__statsbar {
      position: relative;
      z-index: 4;
    }
  </style>
</head>
<body>

  <div class="topbar">
    <div class="container topbar__inner">
      <span>📍 Marj Al Hammam, Amman — Prs Taghreed Mohammad St</span>
      <div class="topbar__links">
        <a href="tel:+962778000946">📞 0778000946</a>
        <span class="topbar__sep">|</span>
        <a href="https://wa.me/962778000946" target="_blank" rel="noopener noreferrer">WhatsApp</a>
      </div>
    </div>
  </div>

  <nav class="navwrap">
    <div class="container navinner">
      <a class="brand" href="#top">
        <img src="assets/img/theeb-wide.png" alt="Theeb Fitness" class="nav__logo">
      </a>
      <div class="navlinks">
        <a href="#about">About</a>
        <a href="#facilities">Facilities</a>
        <a href="#pricing">Pricing</a>
        <a href="#staff">Staff</a>
        <a href="#hours">Hours</a>
        <a href="#contact">Contact</a>
        <a href="#contact" class="navcta">JOIN NOW</a>
      </div>
      <button class="navburger" id="navburger" aria-label="Menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
    <div class="navmobile" id="navmobile">
      <a href="#about">About</a>
      <a href="#facilities">Facilities</a>
      <a href="#pricing">Pricing</a>
      <a href="#staff">Staff</a>
      <a href="#hours">Hours</a>
      <a href="#contact">Contact</a>
      <a href="#contact" class="navcta">JOIN NOW</a>
    </div>
  </nav>

  <section class="hero" id="top">
    
    <video autoplay muted loop playsinline preload="auto" poster="assets/img/theeb-wide.png" class="hero__video-bg">
      <source src="assets/video/theeb-tour.mp4" type="video/mp4">
    </video>
    
    <div class="hero__overlay"></div>

    <div class="hero__slides">
      <div class="hero__slide active">
        <div class="container hero__content">
          <div class="hero__logo-wrap">
            <img src="assets/img/theeb-mark.png" alt="Theeb" class="hero__mark">
          </div>
          <p class="hero__eyebrow">MIXED GYM — MARJ AL HAMMAM, AMMAN</p>
          <h1 class="hero__title">BREAK YOUR<br><span>LIMITS</span></h1>
          <p class="hero__sub">Clean environment, new machines, coaches who actually help.<br><span class="ar">ذيب جيم — تدريب للجميع</span></p>
          <div class="hero__btns">
            <a href="#contact" class="btn btn--solid">JOIN NOW</a>
            <a href="#pricing" class="btn btn--ghost">SEE PRICING</a>
          </div>
        </div>
      </div>

      <div class="hero__slide">
        <div class="container hero__content">
          <p class="hero__eyebrow">SAUNA · CAFETERIA · SUPPLEMENTS</p>
          <h1 class="hero__title">EVERYTHING<br><span>YOU NEED</span></h1>
          <p class="hero__sub">From the gym floor to the sauna — it's all here.<br><span class="ar">كل شي بمكان واحد</span></p>
          <div class="hero__btns">
            <a href="#facilities" class="btn btn--solid">SEE FACILITIES</a>
            <a href="https://wa.me/962778000946" target="_blank" rel="noopener noreferrer" class="btn btn--ghost">WHATSAPP</a>
          </div>
        </div>
      </div>

      <div class="hero__slide">
        <div class="container hero__content">
          <p class="hero__eyebrow">4.9 ★ ON GOOGLE · 31 REVIEWS</p>
          <h1 class="hero__title">REAL COACHES<br><span>REAL RESULTS</span></h1>
          <p class="hero__sub">Trainers who care, fix your form, and push you right.<br><span class="ar">مدربين يهتمون بك</span></p>
          <div class="hero__btns">
            <a href="#staff" class="btn btn--solid">MEET THE TEAM</a>
            <a href="#contact" class="btn btn--ghost">GET STARTED</a>
          </div>
        </div>
      </div>
    </div>

    <div class="hero__dots" id="heroDots">
      <button class="hero__dot active" data-idx="0"></button>
      <button class="hero__dot" data-idx="1"></button>
      <button class="hero__dot" data-idx="2"></button>
    </div>
    
    <button class="hero__arrow hero__arrow--prev" id="heroPrev">←</button>
    <button class="hero__arrow hero__arrow--next" id="heroNext">→</button>

    <div class="hero__statsbar">
      <div class="container hero__statsinner">
        <div class="hstat"><span class="hstat__num">4.9★</span><span class="hstat__lab">Google Rating</span></div>
        <div class="hstat__div"></div>
        <div class="hstat"><span class="hstat__num">31</span><span class="hstat__lab">Reviews</span></div>
        <div class="hstat__div"></div>
        <div class="hstat"><span class="hstat__num">8</span><span class="hstat__lab">Expert Coaches</span></div>
        <div class="hstat__div"></div>
        <div class="hstat"><span class="hstat__num">6AM</span><span class="hstat__lab">Opens Daily</span></div>
      </div>
    </div>
  </section>

  <section id="about" class="section">
    <div class="container">
      <div class="sechead sechead--center">
        <p class="sechead__eyebrow">WHO WE ARE</p>
        <h2 class="sechead__title">WHY THEEB FITNESS</h2>
        <p class="sechead__sub">ذيب جيم في مرج الحمام — بُني للجميع، مبتدئين ومحترفين</p>
      </div>
      <div class="about__grid">
        <div class="about__text">
          <p>At Theeb Fitness we've built a space where the equipment is fresh, the air is clean, and the coaches actually show up for you. No ego, no cliques — just serious training with a supportive crew.</p>
          <p>Whether you're walking in for the first time or you've been lifting for years, you'll find your place here. Mixed gym. Open to all.</p>
          <div class="about__tags">
            <span class="tag">Mixed Gym</span>
            <span class="tag">New Machines</span>
            <span class="tag">Expert Coaches</span>
            <span class="tag">Sauna</span>
            <span class="tag">Cafeteria</span>
            <span class="tag">Supplements</span>
          </div>
          <a href="https://wa.me/962778000946" target="_blank" rel="noopener noreferrer" class="btn btn--solid" style="margin-top:28px; display:inline-block;">GET IN TOUCH</a>
        </div>
        <div class="about__pillars">
          <div class="pillar">
            <div class="pillar__icon">💪</div>
            <div>
              <h4 class="pillar__title">EQUIPMENT</h4>
              <p class="pillar__text">New machines, free weights, full cardio range. Everything works, everything is clean.</p>
            </div>
          </div>
          <div class="pillar">
            <div class="pillar__icon">🎯</div>
            <div>
              <h4 class="pillar__title">COACHING</h4>
              <p class="pillar__text">19+ years of combined experience. NASM, ISSA, Olympia certified coaches on the floor daily.</p>
            </div>
          </div>
          <div class="pillar">
            <div class="pillar__icon">🔥</div>
            <div>
              <h4 class="pillar__title">ATMOSPHERE</h4>
              <p class="pillar__text">Serious training without the toxic ego. Everyone's welcome, everyone's respected.</p>
            </div>
          </div>
          <div class="pillar">
            <div class="pillar__icon">⭐</div>
            <div>
              <h4 class="pillar__title">REPUTATION</h4>
              <p class="pillar__text">4.9 stars on Google. The people speak — and they keep coming back.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="facilities" class="section section--dark">
    <div class="container">
      <div class="sechead sechead--center">
        <p class="sechead__eyebrow">WHAT WE OFFER</p>
        <h2 class="sechead__title">FACILITIES</h2>
        <p class="sechead__sub">Everything you need under one roof</p>
      </div>
      <div class="fac__grid">
        <div class="fac__card fac__card--wide">
          <div class="fac__icon">🏋️</div>
          <div>
            <h3 class="fac__title">GYM FLOOR</h3>
            <p class="fac__text">New machines, full free weights section, wide cardio range. Properly ventilated, well lit, always clean.</p>
          </div>
          <ul class="fac__list">
            <li>New machines</li>
            <li>Free weights</li>
            <li>Cardio equipment</li>
            <li>Good ventilation & lighting</li>
          </ul>
        </div>
        <div class="fac__card">
          <div class="fac__icon">🧖</div>
          <h3 class="fac__title">SAUNA</h3>
          <p class="fac__text">Included with your subscription. Recover right after every session.</p>
          <ul class="fac__list"><li>Included in all plans</li><li>Post-session recovery</li></ul>
        </div>
        <div class="fac__card">
          <div class="fac__icon">🚿</div>
          <h3 class="fac__title">HOT SHOWER</h3>
          <p class="fac__text">Clean bathrooms with hot showers — included with your membership.</p>
          <ul class="fac__list"><li>Always clean</li><li>Hot water</li></ul>
        </div>
        <div class="fac__card">
          <div class="fac__icon">🥗</div>
          <h3 class="fac__title">CAFETERIA</h3>
          <p class="fac__text">Healthy food and drinks on-site. High protein options, clean meals — no junk.</p>
          <ul class="fac__list"><li>High protein meals</li><li>Healthy drinks</li></ul>
        </div>
        <div class="fac__card">
          <div class="fac__icon">💊</div>
          <h3 class="fac__title">KABS EXPRESS</h3>
          <p class="fac__text">Supplements shop inside the gym. Grab what you need without leaving.</p>
          <ul class="fac__list"><li>Proteins & creatine</li><li>Vitamins & basics</li></ul>
        </div>
      </div>
    </div>
  </section>

  <section id="pricing" class="section">
    <div class="container">
      <div class="sechead sechead--center">
        <p class="sechead__eyebrow">MEMBERSHIP PLANS</p>
        <h2 class="sechead__title">PRICING</h2>
        <p class="sechead__sub">Simple plans in JOD — no hidden fees</p>
      </div>
      <div class="pricing__grid">
        <div class="pcard">
          <div class="pcard__name">1 MONTH</div>
          <div class="pcard__price">60 <span>JOD</span></div>
          <div class="pcard__note">Best for trying it out</div>
          <ul class="pcard__list">
            <li>Full gym access</li><li>Sauna & showers</li><li>Mixed gym floor</li><li>Open 6am – 2am</li>
          </ul>
          <a href="#contact" class="btn btn--solid pcard__btn">JOIN</a>
        </div>
        <div class="pcard pcard--best">
          <div class="pcard__badge">MOST POPULAR</div>
          <div class="pcard__name">3 MONTHS</div>
          <div class="pcard__price">140 <span>JOD</span></div>
          <div class="pcard__note">~47 JOD/month — save 13%</div>
          <ul class="pcard__list">
            <li>Full gym access</li><li>Sauna & showers</li><li>Mixed gym floor</li><li>Open 6am – 2am</li><li>Best for real progress</li>
          </ul>
          <a href="#contact" class="btn btn--solid pcard__btn">JOIN</a>
        </div>
        <div class="pcard">
          <div class="pcard__name">1 YEAR</div>
          <div class="pcard__price">400 <span>JOD</span></div>
          <div class="pcard__note">~33 JOD/month — save 44%</div>
          <ul class="pcard__list">
            <li>Full gym access</li><li>Sauna & showers</li><li>Mixed gym floor</li><li>Open 6am – 2am</li><li>Best long-term rate</li>
          </ul>
          <a href="#contact" class="btn btn--solid pcard__btn">JOIN</a>
        </div>
      </div>
      <div class="pricing__mini">
        <div class="minic"><span class="minic__label">2 MONTHS</span><span class="minic__val">100 JOD</span></div>
        <div class="minic"><span class="minic__label">6 MONTHS</span><span class="minic__val">240 JOD</span></div>
        <div class="minic minic--cta">
          <span class="minic__label">SPECIAL OFFERS?</span>
          <a href="tel:+962778000946" class="minic__val minic__val--link">CALL 0778000946</a>
        </div>
      </div>
    </div>
  </section>

  <section id="staff" class="section section--dark">
    <div class="container">
      <div class="sechead sechead--center">
        <p class="sechead__eyebrow">THE PEOPLE BEHIND IT</p>
        <h2 class="sechead__title">MEET THE TEAM</h2>
        <p class="sechead__sub">Certified coaches who actually give a damn</p>
      </div>
      <div class="staff__grid">

        <div class="staff__card">
          <div class="staff__img-wrap">
            <img src="assets/img/staff/ahmad-alnawaiseh.jpg" alt="Ahmad Al Nawaiseh" loading="lazy">
            <div class="staff__overlay">
              <ul>
                <li>19+ Years Experience</li>
                <li>Master's in Sports Training</li>
                <li>International Judge NPC / PRO</li>
                <li>32 Specialized Certifications</li>
              </ul>
            </div>
          </div>
          <div class="staff__info">
            <h3 class="staff__name">Ahmad Al Nawaiseh</h3>
            <p class="staff__role">Coaching Director</p>
          </div>
        </div>

        <div class="staff__card">
          <div class="staff__img-wrap">
            <img src="assets/img/staff/ahmad-aladaileh.jpg" alt="Ahmad Aladaileh" loading="lazy">
            <div class="staff__overlay">
              <ul>
                <li>8+ Years Experience</li>
                <li>NASM Certified</li>
                <li>Mr. Olympia Certified</li>
                <li>Women & Youth Specialist</li>
              </ul>
            </div>
          </div>
          <div class="staff__info">
            <h3 class="staff__name">Ahmad Aladaileh</h3>
            <p class="staff__role">Head Coach</p>
          </div>
        </div>

        <div class="staff__card">
          <div class="staff__img-wrap">
            <img src="assets/img/staff/jameel-khoury.jpg" alt="Jameel Khoury" loading="lazy">
            <div class="staff__overlay">
              <ul>
                <li>8+ Years Experience</li>
                <li>ISSA Elite Trainer</li>
                <li>WSF Level 4 Certified</li>
                <li>Mr. Olympia Certified</li>
              </ul>
            </div>
          </div>
          <div class="staff__info">
            <h3 class="staff__name">Jameel Khoury</h3>
            <p class="staff__role">Head Coach</p>
          </div>
        </div>

        <div class="staff__card">
          <div class="staff__img-wrap">
            <img src="assets/img/staff/hamza-alqatawneh.jpg" alt="Hamza Alqatawneh" loading="lazy">
            <div class="staff__overlay">
              <ul>
                <li>Former National Kickboxing Player</li>
                <li>4× South Champion</li>
                <li>Black Belt 2nd Dan</li>
                <li>WAKO Certified Coach</li>
              </ul>
            </div>
          </div>
          <div class="staff__info">
            <h3 class="staff__name">Hamza Alqatawneh</h3>
            <p class="staff__role">Kickboxing & Fitness Coach</p>
          </div>
        </div>

      </div>
      <div style="text-align:center; margin-top:48px;">
        <a href="staff.php" class="btn btn--outline">VIEW FULL TEAM →</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="sechead sechead--center">
        <p class="sechead__eyebrow">WHAT PEOPLE SAY</p>
        <h2 class="sechead__title">GOOGLE REVIEWS</h2>
        <p class="sechead__sub">4.9 stars based on 31 reviews</p>
      </div>
      <div class="reviews__rating">
        <div class="reviews__num">4.9</div>
        <div>
          <div class="reviews__stars">★★★★★</div>
          <div class="reviews__meta">31 Google Reviews</div>
          <a href="https://www.google.com/maps/place/Theeb+Gym+%D8%B0%D9%8A%D8%A8+%D8%AC%D9%8A%D9%85%E2%80%AD/@31.8867084,35.8572222" target="_blank" rel="noopener noreferrer" class="btn btn--outline" style="margin-top:12px; font-size:0.78rem; padding:8px 18px; display:inline-block;">READ ON GOOGLE</a>
        </div>
      </div>
      <div class="reviews__grid">
        <div class="rcard">
          <div class="rcard__head"><span class="rcard__name">Zaid Rahhal</span><span class="rcard__stars">★★★★★</span></div>
          <p class="rcard__body">Very good gym, coaches are 1always helpful and social, clean environment, new machines</p>
        </div>
        <div class="rcard">
          <div class="rcard__head"><span class="rcard__name">Yousef Alnawaiseh</span><span class="rcard__stars">★★★★★</span></div>
          <p class="rcard__body">Friendly professional staff and trainers, positive and supportive atmosphere, clean, wide range of equipment, good ventilation and lighting</p>
        </div>
        <div class="rcard">
          <div class="rcard__head"><span class="rcard__name">Baraah Alnawaiseh</span><span class="rcard__stars">★★★★★</span></div>
          <p class="rcard__body">Head coach has an incredible reputation, excited to join and the gym sets a new standard</p>
        </div>
      </div>
    </div>
  </section>

  <section id="hours" class="section section--dark">
    <div class="container">
      <div class="sechead sechead--center">
        <p class="sechead__eyebrow">WE'RE OPEN LATE</p>
        <h2 class="sechead__title">OPENING HOURS</h2>
        <p class="sechead__sub">Train before work, after work, or at midnight — we got you</p>
      </div>
      <div class="hours__wrap">
        <div class="hours__row hours__row--header"><span>DAY</span><span>HOURS</span></div>
        <div class="hours__row"><span>Saturday</span><span>6:00 AM – 2:00 AM</span></div>
        <div class="hours__row"><span>Sunday</span><span>6:00 AM – 2:00 AM</span></div>
        <div class="hours__row"><span>Monday</span><span>6:00 AM – 2:00 AM</span></div>
        <div class="hours__row"><span>Tuesday</span><span>6:00 AM – 2:00 AM</span></div>
        <div class="hours__row"><span>Wednesday</span><span>6:00 AM – 2:00 AM</span></div>
        <div class="hours__row"><span>Thursday</span><span>6:00 AM – 2:00 AM</span></div>
        <div class="hours__row hours__row--friday">
          <span>Friday <span class="hours__badge">LIMITED</span></span>
          <span>2:00 PM – 8:00 PM</span>
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="section">
    <div class="container">
      <div class="sechead sechead--center">
        <p class="sechead__eyebrow">FIND US</p>
        <h2 class="sechead__title">CONTACT US</h2>
        <p class="sechead__sub">Message, call, or just show up</p>
      </div>
      <div class="contact__grid">
        <div class="contact__box">
          <div class="contact__line"><span class="contact__label">WHATSAPP</span><a href="https://wa.me/962778000946" target="_blank" rel="noopener noreferrer" class="contact__val">0778000946</a></div>
          <div class="contact__line"><span class="contact__label">PHONE</span><a href="tel:+962778000946" class="contact__val">0778000946</a></div>
          <div class="contact__line"><span class="contact__label">INSTAGRAM</span><a href="https://www.instagram.com/theebfitness/" target="_blank" rel="noopener noreferrer" class="contact__val">@theebfitness</a></div>
          <div class="contact__line"><span class="contact__label">YOUTUBE</span><a href="https://www.youtube.com/@TheebFitness" target="_blank" rel="noopener noreferrer" class="contact__val">@TheebFitness</a></div>
          <div class="contact__line"><span class="contact__label">FACEBOOK</span><a href="https://www.facebook.com/p/Theeb-Fitness-61577716100961/" target="_blank" rel="noopener noreferrer" class="contact__val">Theeb Fitness</a></div>
          <div class="contact__line"><span class="contact__label">ADDRESS</span><span class="contact__val">Prs Taghreed Mohammad St, Amman 11181</span></div>
          <div class="contact__socials">
            <a class="contact__soc" href="https://wa.me/962778000946" target="_blank" rel="noopener noreferrer">
              <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>WhatsApp
            </a>
            <a class="contact__soc" href="https://www.instagram.com/theebfitness/" target="_blank" rel="noopener noreferrer">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="16" height="16"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>Instagram
            </a>
            <a class="contact__soc" href="https://www.youtube.com/@TheebFitness" target="_blank" rel="noopener noreferrer">
              <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>YouTube
            </a>
            <a class="contact__soc" href="https://www.google.com/maps/place/Theeb+Gym+%D8%B0%D9%8A%D8%A8+%D8%AC%D9%8A%D9%85%E2%80%AD/@31.8867084,35.8572222" target="_blank" rel="noopener noreferrer">
              <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>Maps
            </a>
          </div>
        </div>
        <a class="contact__map" href="https://www.google.com/maps/place/Theeb+Gym+%D8%B0%D9%8A%D8%A8+%D8%AC%D9%8A%D9%85%E2%80%AD/@31.8867084,35.8572222" target="_blank" rel="noopener noreferrer">
          <div class="contact__mappin"></div>
          <div class="contact__maptext">OPEN IN GOOGLE MAPS</div>
          <div class="contact__mapsub">Marj Al Hammam, Amman<br>VVP4+MV</div>
        </a>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container footer__inner">
      <img src="assets/img/theeb-wide.png" alt="Theeb Fitness" style="height:28px; opacity:0.65;">
      <div class="footer__copy">© <?= date('Y'); ?> Theeb Fitness · Demo site built by Zaid Rahhal</div>
      <div class="footer__links"><a href="#top">Back to top ↑</a></div>
    </div>
  </footer>

  <a class="waFloat" href="https://wa.me/962778000946" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor" width="26" height="26"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
  </a>

  <script defer>
    document.addEventListener('DOMContentLoaded', function() {
      const burger = document.getElementById('navburger');
      const mobileNav = document.getElementById('navmobile');
      
      if (burger && mobileNav) {
        burger.addEventListener('click', () => { 
          const isOpen = mobileNav.classList.toggle('open'); 
          burger.classList.toggle('open'); 
          burger.setAttribute('aria-expanded', isOpen);
        });
        mobileNav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => { 
          mobileNav.classList.remove('open'); 
          burger.classList.remove('open'); 
        }));
      }

      const slides = document.querySelectorAll('.hero__slide');
      const dots = document.querySelectorAll('.hero__dot');
      let current = 0, timer;
      
      function goTo(idx) {
        if(!slides.length) return;
        slides[current].classList.remove('active'); 
        if(dots[current]) dots[current].classList.remove('active');
        current = (idx + slides.length) % slides.length;
        slides[current].classList.add('active'); 
        if(dots[current]) dots[current].classList.add('active');
      }
      
      function startTimer() { 
        clearInterval(timer); 
        timer = setInterval(() => goTo(current + 1), 5000); 
      }
      
      document.getElementById('heroNext')?.addEventListener('click', () => { goTo(current + 1); startTimer(); });
      document.getElementById('heroPrev')?.addEventListener('click', () => { goTo(current - 1); startTimer(); });
      dots.forEach(d => d.addEventListener('click', () => { goTo(+d.dataset.idx); startTimer(); }));
      
      startTimer();
    });
  </script>

</body>
</html>