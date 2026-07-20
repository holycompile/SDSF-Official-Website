> [!IMPORTANT]
> This repository is shared **solely for portfolio and demonstration purposes**.
> It was developed for the **School of Data Science and Forecasting (SDSF), DAVV**.
> Please do not reuse, redistribute, or deploy this code without prior permission from the department.

# School of Data Science and Forecasting (SDSF) Official Website

The official, responsive website of the **School of Data Science and Forecasting (SDSF)**, a premier department under **Devi Ahilya Vishwavidyalaya (DAVV)** in Indore, Madhya Pradesh, India. This website serves as a digital hub for prospective students, current enrollees, faculty, and administrative activities.

---

## 🌐 Project Overview
The SDSF Official Website is designed to offer a seamless, user-friendly experience across both desktop and mobile devices. It provides complete details about the school's philosophy, academic offerings, admission guidelines, event calendars, student announcements, and exam results.

### Core Features
- **Hero Image Slider:** Interactive banner carousel on the home page with smooth transitions and inspirational taglines.
- **Dynamic Notice Board:** Displays the latest news, announcements, and timetables linked to downloadable PDF documents.
- **Interactive Admissions Portal:** Dedicated guidelines page featuring detailed program fees, seat distribution, and criteria, with dynamic sticky navigation.
- **Academic Ordinances & Calendars:** Full downloads and tables representing academic terms, credit systems, and PhD regulations.
- **Dropdown Sub-Menus:** Multi-level dropdowns for scholarship programs (GATE, MPTAASC, MMVY) and academic resources.
- **Mobile-First Adaptive Design:** Styled to load efficiently with an app-like feel on mobile phones (`viewport` and `theme-color` meta tags configured).
- **Interactive Components:** Features interactive modals (e.g., Admission Popup overlay) and smooth scroll-reveal animations.

---

## 🛠️ Technology Stack
- **Backend/Templating:** PHP (used to maintain modular components such as `header.php`)
- **Frontend Structuring:** HTML5 (semantic layout tags)
- **Styling:** Vanilla CSS3 (custom layouts, flexbox, CSS variables, CSS grid, and responsive `@media` queries)
- **Interactions:** Vanilla JavaScript (ES6) for sliders, sticky headers, Intersection Observer reveal animations, and pop-up handling.
- **Typography & Icons:** Google Fonts (*Oswald*, *Poppins*) and Font Awesome 6.4.0 icons.

---

## 📂 Directory Structure

Below is the directory map of the SDSF repository:

```text
SDSF-Official-Website/
├── css/                                  # Page-specific stylesheets
│   ├── about.css                         # Layout and cards style for About page
│   ├── academics.css                     # Timetables and listings style for Academics page
│   ├── admission.css                     # Tables, timeline, and grids for Admission page
│   └── events.css                        # Styling for events cards and gallery grid
│
├── iqac/                                 # Internal Quality Assurance Cell page bundle
│   ├── iqac.css                          # Quality parameters page styling
│   ├── iqac.html                         # Page structure for IQAC metrics and overview
│   └── iqac.js                           # Dynamic toggles and search for IQAC criteria
│
├── notices/                              # Collection of academic timetables and schedules
│   ├── M.Tech.-Dual-Degree_Second-Semester.pdf
│   ├── M.Tech-Dual-Degree-IV-Semester.pdf
│   ├── M.Tech.-Dual-Degree-VI-Semester.pdf
│   ├── M.Tech.DS&BDA-II_Semester.pdf
│   ├── M.Tech.-Executive-II-Semester.pdf
│   ├── M.Tech.-Executive-IV-Semester.pdf
│   └── MBA-II-Semester.pdf
│
├── photoes/                              # Banners, logos, posters, and background graphics
│   ├── adm-pop-up.png                    # Admission popup image poster
│   ├── davvLogo.png                      # Devi Ahilya Vishwavidyalaya logo
│   ├── deplogo.png                       # SDSF Department logo
│   ├── header.png                        # Header banner background
│   └── indexhero[0-4].jpg                # Image slides for home page hero section
│
├── research/                             # Research and publication details bundle
│   ├── research_page.css                 # Styling for research guides and journals
│   ├── research_page.html                # Structured display of publications and guides
│   └── research_page.js                  # Filtering and tabs JS for research area
│
├── results/                              # Semester results distribution center
│   └── M.Sc.-Result-III-Sem.pdf          # M.Sc. Data Science and Analytics III Sem results
│
├── about.php                             # Overview, Mission & Vision, and Head's Message
├── academics.php                         # Academic calendars, rules, ordinances, and breaks
├── admission.js                          # Core JS for sticky nav bar, scroll-reveal & dynamic checks
├── admission.php                         # Admission schedules, eligibility matrix, fees, and forms
├── aids.php                              # Details & schedule for M.Tech Integrated (AI & DS)
├── bda.php                               # Details & schedule for M.Tech (Big Data Analytics)
├── ds.php                                # Details & schedule for M.Tech (Data Science)
├── events.php                            # Campus activities, HackHive hackathons, and conferences
├── exeds.php                             # Details & schedule for M.Tech (Executive in Data Science)
├── header.php                            # Shared responsive navigation header component
├── index.php                             # Website main entrypoint, notices feed, and hero slider
├── mba.php                               # Details & schedule for M.B.A (Business Analytics)
├── msc.php                               # Details & schedule for M.Sc. (Data Science & Analytics)
├── Result-M.Sc.-(Data-Science-and-Analytics).php # Exam results access page for M.Sc. students
├── style.css                             # Main stylesheet (layout, header, footer, animations, popups)
└── README.md                             # Project documentation
```

---

## 📑 Page Mapping

| Filename | Purpose | Key Content |
| :--- | :--- | :--- |
| **`index.php`** | Homepage | Announcements, hero banner slider, admission popup, quick links |
| **`about.php`** | About SDSF | Vision & Mission, History, Head of Department's message |
| **`academics.php`** | Academic Portal | Regulations, ordinances (No. 14 CBCS, No. 11 Ph.D.), Academic Calendar |
| **`admission.php`** | Admissions Portal | Fee structures, seat count, eligibility checklist, admission brochure |
| **`events.php`** | Campus & Tech Life | Event logs (Induction, HackHive 2024, iBCD 2024 Conference) |
| **`aids.php`** | M.Tech (Dual Degree) AI & DS | Specialized curriculum and timetable PDF references |
| **`ds.php`** | M.Tech Data Science | Core syllabus, timetables, and notice boards for Data Science |
| **`bda.php`** | M.Tech Big Data Analytics | Notices and academic timetables for BDA |
| **`exeds.php`** | M.Tech Executive (DS) | Schedules and details optimized for working professionals |
| **`mba.php`** | M.B.A Business Analytics | Class schedule, time tables, and analytics modules |
| **`msc.php`** | M.Sc. Data Science & Analytics | Student announcements and information guidelines |
| **`Result-M.Sc.-...php`**| M.Sc. Results Page | Link to exam sheets and PDF records for M.Sc. batches |
| **`header.php`** | Global Navigation | Shared brand assets, responsive desktop/mobile toggle menu |

---

## 🚀 How to Run Locally

Since the project uses PHP for files inclusion (e.g. `<?php include("header.php"); ?>`), it needs to be served using a local web server environment.

### Option A: Using PHP CLI Built-in Server (Recommended for developers)
1. Ensure PHP is installed on your local machine and available in your environment path.
2. Open terminal in the project root directory:
   ```bash
   cd SDSF-Official-Website
   ```
3. Start the built-in development server:
   ```bash
   php -S localhost:8000
   ```
4. Open your web browser and navigate to:
   ```text
   http://localhost:8000/index.php
   ```

### Option B: Using XAMPP / WampServer (Standard host)
1. Download and install **XAMPP** or **WampServer**.
2. Clone or copy the `SDSF-Official-Website` folder into the server root directory:
   - For XAMPP: `C:/xampp/htdocs/SDSF-Official-Website`
   - For WampServer: `C:/wamp64/www/SDSF-Official-Website`
3. Open control panel of the server software and start the **Apache** service.
4. Access the portal in the web browser:
   ```text
   http://localhost/SDSF-Official-Website/index.php
   ```

---

## 🎨 Design & Accessibility Details
- **Brand Colors:** Deep Blue (`#162b57`) is the dominant color symbolizing wisdom, trust, and forecasting, accented by vibrant Orange (`#ff9900`) for navigation highlights and key links.
- **Scroll Reveal Animations:** Interactive sections smoothly fade and slide into view as the user scrolls down the page, utilizing CSS transitions and an IntersectionObserver in `admission.js`.
- **Responsive Navigation:** Built using mobile-friendly layouts, with custom-sized padding and sizing rules specified inside `style.css` and page-specific stylesheets.
