<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    private $data = [
        [
            'title' => 'A note on AOUSD',
            'excerpt' => '”Last year, Pixar, Adobe, Apple, Autodesk, and
                    NVIDIA announced the Alliance for OpenUSD, an
                    organization to advance and proliferate the USD file
                    format as the future standard for creating and
                    distributing 3D content.”- Big tech companies are
                    coming together to try and promote a universal
                    standard for 3D modeling within VR and AR
                    experiences.',
            'body' => '<p>
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
                <h6>Written 10-09-24</h6>'
        ],
        [
            'title' => 'Programming Experience',
            'excerpt' => 'Personally, I haven’t got a lot of experience in the
                    world of coding. I’ve had my funks of curiosity,
                    exploring pages like code.org and
                    similar, but I’ve never sunk my teeth into any sort
                    of major projects or languages beyond HTML and CSS.',
            'body' => '<p>
                    However, this project alone has greatly encouraged
                    me to delve deeper and broaden my horizons. I’ve
                    learnt some minor things about JavaScript. For
                    example, to learn how to make the buttons on the
                    Blog page and how to code the script that calculates
                    EC’s for me on the Dashboard. It’s been an exciting
                    adventure and I’ve had my fun with it.
                </p>
                <p>
                    On top of that, a fact you might’ve seen on the home
                    page, I’ve dipped my toes into HTML/CSS previously,
                    with a website running on it’s own domain. It’s
                    called
                    <a href="https://www.suunn.nl">Suunn.nl</a> and it
                    was my project over the winter of 2024. I had a lot
                    of fun back then learning how to do all those things
                    to make a primitive little place of my own.
                </p>
                <p>I do believe I’ve grown since then.</p>
                <p>
                    Additionally, though I don’t know if this counts,
                    I’ve done a few things with Redstone in Minecraft.
                    Redstone in Minecraft acts like an electric circuit.
                    Some people are crazy enough to build actual
                    functional computers within the game, but my
                    interest was mostly with automatic doors or lights
                    that turned on when it got dark out. Never anything
                    more major, and rarely anything self-made, but I
                    used to follow tutorials by YouTubers such as
                    <a
                        href="https://www.youtube.com/user/ThatMumboJumbo"
                    >Mumbo Jumbo</a
                    >. Usually I was able to understand what they had me
                    build, and how the circuits worked. It was very
                    exciting.
                </p>
                <p>
                    I think there’s a lot of experience I can gain from
                    diligently attending classes and keeping up with
                    work. It’s an adventure I certainly look forward to.
                    I’m going to have a lot of fun with this. :)
                </p>
                <h6>Written 08-09-24</h6>'
        ],
        [
            'title' => 'The final assessment',
            'excerpt' => 'Over the past few weeks, I’ve learnt a lot.
                    After the initial two weeks working on this website,
                    I already got feedback regarding my website then,
                    which I’ve by now implemented, and today I received my
                    final feedback and assessment.
                    That doesn’t mean this website is done,
                    it just means it is done <i>for now</i>.',
            'body' => '<p>
                    The main feedback initially received was that
                    the back end needed to be sorted more coherently.
                    Also that the coded CSS had to be separated across
                    several stylesheets, instead of the jumbled mess of
                    inline- and a single stylesheet I had going on.
                    On top of that there was a request for better backend
                    naming conventions for classes as well as some
                    upgrades to the navigation bar,
                    making it sticky and having it show properly what
                    page you are on at all times.
                 </p>
                 <p>
                    Along with some more minor changes, all these features
                    have been implemented, and you can find them on their
                    respective pages.
                 </p>
                 <p>
                    There was also some feedback during the actual final
                    assessment, though this feedback was so small I am
                    nearly tempted to neglect mentioning it. One of my
                    files had a numbered name, where it made no sense for
                    it to be numbered. The lecturer assessing me, even
                    warned me that this was a very nitpicky commentary,
                    but other than that small little thing, she had next
                    to nothing to share in regards to what I could improve
                    on the website.
                 </p>
                 <p>
                    I am very proud of how far I’ve gotten with this
                    project; it’s been fun to work on and leaving it now,
                    I am still brimming with ideas for future
                    implementations!
                 </p>
                 <p>
                    And to add a little bit about the other classes I’ve
                    been following, I’ve been loving all of them. The tasks
                    are challenging enough for me to have fun solving them,
                    yet simple enough for me to keep up confidently in
                    most regards, it makes me feel proud and happy.
                 </p>
                 <p>
                    The lecturers for both of my classes also speak
                    wonderfully, their lectures are exciting and I am often
                    happy to be spending my time in them. I look forward to
                    future classes from these people. It will be fun. I look
                    forward to what comes next for me in this course, and
                    hope to continue working hard to finish it.
                 </p>
                 <h6>Written 11-10-2024</h6>'
        ],
        [
            'title' => 'PCO Feedback',
            'excerpt' => 'Throughout this year and for this project, we are -
                    and will be - receiving a lot of feedback. Taking
                    that feedback and improving upon it is a major part
                    of the course and something we will learn to do.
                    Additionally, we will learn to give constructive
                    criticism, feedback you can actually work with. Here
                    is some of the feedback I have received so far.',
            'body' => '<p>
                    Since I came to the front of the class, I have
                    received a little feedback on my site already. I
                    will work through these comments and provide
                    motivation or insight to changes, or lack thereof.
                </p>
                <h5
                >The website folder was nested too far into the
                    repository.</h5
                >
                <p>
                    I’ve fixed this by un-nesting the files on the date
                    of posting. I intend to figure out a way to sort
                    files the way I want to sort them as well as have
                    them un-nested in the repository in the future.
                    Although it’s not a main project of mine since it’s
                    not a part of official requirements and. For now,
                    everything is sorted functionally.
                </p>
                <h5>Fix capitalized letters in file names</h5>
                <p>
                    After this comment, I went and checked all my files
                    and folders within the repository to ensure no
                    capitalization was present. I’ve fixed the issue.
                </p>
                <h5
                >Add content to the Blog and Frequently Asked
                    Questions</h5
                >
                <p>
                    Since receiving this comment, I’ve been working very
                    hard to collect and fulfill all the page
                    requirements for the different pages on this
                    website. You can now find the FAQ filled in
                    entirely, and the blog being actively worked on.
                </p>
                <p>
                    Additionally I gave myself some feedback on a bit of
                    JavaScript I wrote, and added a feature to my
                    Dashboard that compares the amount of gained credits
                    to the NBSA to determine whether or not I’ve passed
                    it. In the future I’d like to also add a feature
                    where the Dashboard locally saves the last
                    calculated amount of EC’s, but this is no priority.
                </p>
                <p>
                    Another feature I learnt about but have not yet
                    implemented, is a CSS grid. With the current
                    timecrunch, it is not a realistic thing to implement
                    before friday. However, I do hope to add it before
                    the interviews in October happen.
                </p>
                <h6
                >Written 07-09-24<br />Feedback received
                    06-09-24</h6
                >'
        ],
        [
            'title' => 'Study Motivation',
            'excerpt' => 'If you had asked me years ago what my motivation was
                    to get into the field of ICT, back when I was maybe
                    10 years old, I would have told you that it was
                    because it is what my dad does. Since then, I have
                    learnt a little better why I actually care about
                    this field and am interested in it.',
            'body' => '<p>
                    Computers have always interested me. Partially
                    because my dad worked as a teacher teaching ICT,
                    partially because they just seem so blatantly
                    complex. It nearly seems magical. As a kid, I
                    wondered how you would even learn to write all the
                    code that goes into a functional computer. I often
                    still wonder.
                </p>
                <p>
                    I have also learnt I can learn that language,
                    though. I can learn to write that code. Not very
                    many people are able to write it, but I can learn
                    to. It would be super cool if I did learn that
                    language!
                </p>
                <p>
                    I would feel so incredibly proud of myself if I
                    managed to finish this course. If I could create
                    things like the websites I use every day or even
                    create something better. A product I want to use
                    because I actually prefer it over whatever was the
                    standard before I made it.
                </p>
                <p>
                    Networks too. I want to learn to make the highways
                    that people use for this digital communication. I
                    want to not only drive on them, but understand the
                    road signs. I want to design the pathways and build
                    the lanes. I think I can learn those things if I
                    follow, and finish, this course.
                </p>
                <p>
                    Growing up, I even learnt my dad does not know how
                    to code. He is a coach for the ICT course, I have
                    already surpassed his knowledge.
                </p>
                <h6>Written 10-09-24</h6>'
        ],
        [
            'title' => 'SWOT analysis',
            'excerpt' => 'We all had to fill in a SWOT analysis as a part of
                    the application process. A SWOT analysis works you
                    through a series of questions to determine your
                    Strengths, Weaknesses, Opportunities and Threats.
                    This allows you to figure out in what regards you
                    are already very strong and in what regards you
                    could grow to improve.',
            'body' => '<p>
                    We all had to fill in a SWOT analysis as a part of
                    the application process. A SWOT analysis works you
                    through a series of questions to determine your
                    Strengths, Weaknesses, Opportunities and Threats.
                    This allows you to figure out in what regards you
                    are already very strong and in what regards you
                    could grow to improve.
                </p>
                <h5>I have edited my answers into a cohesive text.</h5>
                <p>
                    Some of my strengths are that I am curious and
                    unafraid to dive into endeavors that intrigue me. If
                    something manages to grab my interest, I will pour
                    my heart soul and full energy into it, until
                    something occurs to divert that focus.
                </p>
                <p>
                    However, if I lose my interest, my energy will
                    become incredibly distracted and possibly apathetic
                    towards the subject. A definitive weakness of mine
                    is being unable to find interest or curiosity in a
                    specific subject and falling prey to boredom,
                    disinterest and/or annoyance. It takes a lot of
                    energy to finish things I do not really want to do.
                    For example, it took forever to go sit down to write
                    this blog, simply because I did not feel like it.
                </p>
                <p>
                    There are definitely a lot of opportunities for
                    growth in those regards, especially the focus, I
                    want to be better at all of that. I want to teach
                    myself how to find the energy to do things even when
                    they aren’t new and shiny. If I manage to overcome
                    that hurdle I truly do believe I can learn a lot in
                    this course and create things I can be proud of.
                </p>
                <p>
                    On the other hand, I believe my biggest threat would
                    be overloading myself and not setting boundaries,
                    and taking on too many cool projects but ignoring
                    basic requirements. That’s why writing these blogs
                    was left for last, and why it’s a bit of a pitfall.
                </p>
                <h5>All in all,</h5>
                <p>
                    I am perfectly human with room for growth, and hope
                    I do grow over the course of the four years I will
                    spend in this program. I hope to become a diligent
                    student.
                </p>
                <h6>Written 09-09-24</h6>'
        ],
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->data as $item) {
            Blog::create($item);
        }
    }
}
