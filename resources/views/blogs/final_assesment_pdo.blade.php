<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Blog Page of Mika's HZ project" />
    <meta name="author" content="Mika van Os" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Blog feed</title>
    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/blog.css" />
</head>

<body>
<script src="nav.js"></script>
<div id="navigation" class="header">
    <div class="logoDiv">
        <a target="_blank" href="https://www.suunn.nl"
        ><img class="logo" src="https://suunn.nl/images/r2d2.png"
            /></a>
    </div>
    <nav>
        <a class="inactive" href="../index.html">Home page</a>
        <a class="inactive" href="../profile.html">About me</a>
        <a class="active" href="../blog_home.html">Blog</a>
        <a class="inactive" href="../faq.html">FAQ</a>
        <a class="inactive" href="../dashboard.html">Dashboard</a>
    </nav>
</div>
<main>
    <section>
        <div class="blog-menu-div">
            <div class="blog-menu">
                <ul>
                    <li>
                        <a href="../blog_home.html">Main blog feed</a>
                    </li>
                    <li>
                        <a href="study_motivation_blog.html"
                        >Study Motivation</a
                        >
                    </li>
                    <li>
                        <a href="swot_analysis_blog.html"
                        >SWOT Analysis</a
                        >
                    </li>
                    <li>
                        <a href="code_experience_blog.html"
                        >Programming Experience</a
                        >
                    </li>
                    <li>
                        <a href="first_feedback_blog.html"
                        >PCO Feedback</a
                        >
                    </li>
                    <li>
                        <a href="aousd_blog.html">A note on AOUSD</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="blogs-all">
            <article>
                <div id="blog-text">
                    <h1>The final assessment</h1>
                    <p>Over the past few weeks, I’ve learnt a lot. After the initial two weeks working on this website, I already got feedback regarding my website then, which I’ve by now implemented, and today I received my final feedback and assessment. That doesn’t mean this website is done, it just means it is done <i>for now</i>. </p>
                    <p>The main feedback initially received was that the back end needed to be sorted more coherently. Also that the coded CSS had to be separated across several stylesheets, instead of the jumbled mess of inline- and a single stylesheet I had going on. On top of that there was a request for better backend naming conventions for classes as well as some upgrades to the navigation bar, making it sticky and having it show properly what page you are on at all times. </p>
                    <p>Along with some more minor changes, all these features have been implemented, and you can find them on their respective pages. </p>
                    <p>There was also some feedback during the actual final assessment, though this feedback was so small I am nearly tempted to neglect mentioning it. One of my files had a numbered name, where it made no sense for it to be numbered. The lecturer assessing me, even warned me that this was a very nitpicky commentary, but other than that small little thing, she had next to nothing to share in regards to what I could improve on the website. </p>
                    <p>I am very proud of how far I’ve gotten with this project; it’s been fun to work on and leaving it now, I am still brimming with ideas for future implementations! </p>
                    <p>And to add a little bit about the other classes I’ve been following, I’ve been loving all of them. The tasks are challenging enough for me to have fun solving them, yet simple enough for me to keep up confidently in most regards, it makes me feel proud and happy. </p>
                    <p>The lecturers for both of my classes also speak wonderfully, their lectures are exciting and I am often happy to be spending my time in them. I look forward to future classes from these people. It will be fun. I look forward to what comes next for me in this course, and hope to continue working hard to finish it. </p>
                    <h6>Written 11-10-2024</h6>
                </div>
                <button
                    onclick="window.location.href='../blog_home.html';"
                >Back to main feed</button
                >
            </article>
        </div>
    </section>
</main>
<script src="../scripts/blogFunctions.js"></script>
</body>
</html>
