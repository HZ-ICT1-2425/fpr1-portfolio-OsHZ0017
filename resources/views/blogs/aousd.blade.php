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
                <h1>A note on AOUSD</h1>
                <h5 style="font-size: medium">
                    ”Last year, Pixar, Adobe, Apple, Autodesk, and
                    NVIDIA announced the Alliance for OpenUSD, an
                    organization to advance and proliferate the USD file
                    format as the future standard for creating and
                    distributing 3D content.”- Big tech companies are
                    coming together to try and promote a universal
                    standard for 3D modeling within VR and AR
                    experiences.
                </h5>
                <p>
                    The AOUSD (Alliance for Open Universal Scene
                    Description) is an alliance started to promote the
                    Universal Scene Description (USD) file format. This
                    format allows you to compact complex 3D scenes and
                    display them locally. It’s been called the “HTML of
                    the metaverse” by NVIDIA, and would allow a leap
                    forward in accessibility regarding 3D modeling. At
                    least, such is the expectation.
                </p>
                <p>
                    Previously, a quintet of companies announced the
                    launch of this alliance, but this year two more big
                    contenders have joined. Microsoft and Sony, both big
                    in the IT, videogame and general digital industries,
                    have joined this alliance! Thus further promoting
                    this format. A universal format would allow you to
                    transfer these digital files between programs much
                    easier. For example, you wouldn’t have to use only
                    programs within the Adobe sphere, but could also
                    branch out to different programs. I’m hoping Clip
                    Studio Modeler and Blender would also support this
                    file format, for example.
                </p>
                <p>
                    I believe this format could possibly allow me, for
                    example, to really get into 3D model creation as
                    well. It has interested me for a long time, but
                    since texturing is such a hassle and the files
                    needed are often huge, heavy and complex, it’s been
                    tough with the tools at hand. Even the beefy laptop
                    I’m writing this on (ASUS TUF A15) can hardly handle
                    an exported FBX (References the deprecated Filmbox
                    software) model being loaded in unity.
                </p>
                <p>
                    The world of AR and VR is exciting, and I look
                    forward to what will develop and come from it. Maybe
                    someday I’ll be able to make something within that
                    sphere.
                </p>
                <p>
                    <a
                        href="https://www.roadtovr.com/microsoft-and-sony-join-other-industry-giants-in-support-of-openusd-standard/"
                        target="_blank"
                    >Article Source</a
                    >
                    /
                    <a
                        href="https://www.roadtovr.com/apple-pixar-nvidia-ar-file-protocol/"
                        target="_blank"
                    >Additional background information</a
                    >
                </p>
                <h6>Written 10-09-24</h6>
                <button
                    onclick="window.location.href='../blog_home.html';"
                >Back to main feed</button
                >
            </article>
        </div>
    </section>
</main>
</body>
</html>
