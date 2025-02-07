<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Blog Page of Mika's HZ project" />
    <meta name="author" content="Mika van Os" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Blog feed</title>
    <link rel="stylesheet" href="./css/base.css" />
    <link rel="stylesheet" href="./css/dashboard.css" />
</head>

<body>
<script src="./scripts/gradePass.js"></script>
<div id="navigation" class="header">
    <div class="logoDiv">
        <a target="_blank" href="https://www.suunn.nl"
        ><img class="logo" src="https://suunn.nl/images/r2d2.png"
            /></a>
    </div>
    <nav>
        <a class="inactive" href="index.html">Home page</a>
        <a class="inactive" href="profile.html">About me</a>
        <a class="inactive" href="blog_home.html">Blog</a>
        <a class="inactive" href="faq.html">FAQ</a>
        <a class="active" href="dashboard.html">Dashboard</a>
    </nav>
</div>
<main>
    <section>
        <div class="aside">
            <h4>legend!</h4>
            <dl>
                <dt class="legend danger"> Red </dt>
                <dd class="legend">Fail</dd>
                <dt class="legend warning"> Orange </dt>
                <dd class="legend">Resit</dd>
                <dt class="legend safe"> Green </dt>
                <dd class="legend">Pass</dd>
            </dl>
        </div>
        <div class="articles">
            <article>
                <p>
                    This area will hold all the information regarding my
                    progress during the school year. What exams have I
                    done? What grades have I recieved? Do I get to resit
                    that exam?
                </p>
                <button
                    id="text"
                    class="recalculate"
                    onclick="gradePass()"
                >
                    Calculate ECs</button
                ><br />
                <table class="ectable">
                    <tr>
                        <th class="no-border">EC's Recieved</th>
                        <th class="no-border"></th>
                        <th class="no-border">EC's to Get</th>
                        <th class="nbsa-title"> NBSA </th>
                    </tr>
                    <tr>
                        <td class="no-border" id="totalECs">0</td>
                        <td class="no-border">/</td>
                        <td class="no-border">60</td>
                        <td class="nbsa"> Not yet Passed </td>
                    </tr>
                </table>
            </article>
        </div>
    </section>
    <section>
        <div class="articles">
            <article>
                <h2>Exams First Quartile</h2>
                <table>
                    <tr>
                        <th class="row-big">Course Name</th>
                        <th class="row-big">Assessment</th>
                        <th class="row-small">Credits</th>
                        <th class="row-small">Grade</th>
                    </tr>
                    <tr>
                        <td>Programme and Career Orientation</td>
                        <td>Individual process assessment</td>
                        <td class="ec">2.5</td>
                        <td class="grade safe">9.8</td>
                    </tr>
                    <tr>
                        <td>Computer Science Basics</td>
                        <td>Written Knowledge Test</td>
                        <td class="ec">5</td>
                        <td class="grade safe">8.1</td>
                    </tr>
                    <tr>
                        <td>Programming Basics</td>
                        <td>Case Study Exam</td>
                        <td class="ec">5</td>
                        <td class="grade safe">6.2</td>
                    </tr>
                </table>
            </article>
            <article>
                <h2>Exams Second Quartile</h2>
                <table>
                    <tr>
                        <th class="row-big">Course Name</th>
                        <th class="row-big">Assessment</th>
                        <th class="row-small">Credits</th>
                        <th class="row-small">Grade</th>
                    </tr>
                    <tr>
                        <td rowspan="2">Object-Oriented Programming</td>
                        <td>Group Presentation</td>
                        <td class="ec" rowspan="2">10</td>
                        <td class="grade safe">6.1</td>
                    </tr>
                    <tr>
                        <td>Written Knowledge Test</td>
                        <td class="ec invisible">0</td>
                        <td class="grade safe">10</td>
                    </tr>
                </table>
            </article>
            <article>
                <h2>Exams Third and Fourth Quartile</h2>
                <table>
                    <tr>
                        <th class="row-big">Course Name</th>
                        <th class="row-big">Assessment</th>
                        <th class="row-small">Credits</th>
                        <th class="row-small">Grade</th>
                    </tr>
                    <tr>
                        <td rowspan="4">Framework Project 1</td>
                        <td>Written Case Study Exam</td>
                        <td class="ec" rowspan="4">10</td>
                        <td class="grade">..</td>
                    </tr>
                    <tr>
                        <td>Written Database Exam</td>
                        <td class="ec invisible">10</td>
                        <td class="grade">..</td>
                    </tr>
                    <tr>
                        <td>Group Presentation on Project</td>
                        <td class="ec invisible">10</td>
                        <td class="grade">..</td>
                    </tr>
                    <tr>
                        <td>Group Portfolio</td>
                        <td class="ec invisible">10</td>
                        <td class="grade">..</td>
                    </tr>
                    <tr>
                        <td rowspan="3">Framework Project 2</td>
                        <td>Portfolio Final Delivery</td>
                        <td class="ec" rowspan="3">10</td>
                        <td class="grade">..</td>
                    </tr>
                    <tr>
                        <td>Porfolio Report</td>
                        <td class="ec invisible">10</td>
                        <td class="grade">..</td>
                    </tr>
                    <tr>
                        <td>IT Development Portfolio</td>
                        <td class="ec invisible">10</td>
                        <td class="grade">..</td>
                    </tr>
                    <tr>
                        <td>Business IT Consultancy Basics</td>
                        <td>Video Assignment</td>
                        <td class="ec">2.5</td>
                        <td class="grade">..</td>
                    </tr>
                </table>
            </article>
            <article>
                <h2>All Year</h2>
                <table>
                    <tr>
                        <th class="row-big">Course Name</th>
                        <th class="row-big">Assessment</th>
                        <th class="row-small">Credits</th>
                        <th class="row-small">Grade</th>
                    </tr>
                    <tr>
                        <td
                        >Personal Professional Development
                            Exploration</td
                        >
                        <td>Criterium Focussed Interview</td>
                        <td class="ec">12.5</td>
                        <td class="grade">..</td>
                    </tr>
                    <tr>
                        <td>IT Personality-projectweek 1</td>
                        <td>Portfolio</td>
                        <td class="ec">1.25</td>
                        <td class="grade safe">6.5</td>
                    </tr>
                    <tr>
                        <td>IT Personality International week</td>
                        <td>Portfolio</td>
                        <td class="ec">1.25</td>
                        <td class="grade">..</td>
                    </tr>

                </table>
            </article>
        </div>
    </section>
</main>
<script src="scripts.js"></script>
</body>
</html>
