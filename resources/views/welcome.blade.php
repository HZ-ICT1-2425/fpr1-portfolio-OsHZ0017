@extends('layouts.main')

@section('title', 'Dashboard Page')

@section('css')
    @vite('resources/css/index.css')
    @endsection

@section('content')
    <section>
        <aside>
            <div class="aside">
                <h4>Useful Links</h4>
                <ul>
                    <li>
                        <a
                            target="_blank"
                            href="https://oer.hz.nl/a37f2fd2-8b35-44ce-800a-c5abe33735aa"
                        >HBO-ICT Course and Examination
                            regulations</a
                        >
                    </li>
                    <li>
                        <a
                            target="_blank"
                            href="https://oer.hz.nl/6978cdea-fb31-430b-9bf9-63206aa07754"
                        >HBO-ICT Implementation Regulations</a
                        >
                    </li>
                    <li>
                        <a
                            target="_blank"
                            href="https://glaze-donut-5a5.notion.site/PCO1en-Your-Showcase-Website-7bc8c340f66047d0b49b83e8dc44ba23"
                        >PCO1en Showcase Website</a
                        >
                    </li>
                    <li>
                        <a
                            target="_blank"
                            href="https://hz.osiris-student.nl/voortgang"
                        >Course progress</a
                        >
                    </li>
                    <li>
                        <a
                            target="_blank"
                            href="https://github.com/HZ-HBO-ICT"
                        >HBO-ICT Github environment</a
                        >
                    </li>
                </ul>
                <h4>Future plans</h4>
                <p>If possible, I would like to add more scripts to this website.<br>
                    Mainly a scrip to automate the navigation bar, but also just in general to make things work smarter.<br>
                    I also intend to rewrite the script behind the dashboard calculations. It works, but I believe it can be made smarter and more efficient.<br>
                    Also, don't tell anyone, but it's a little broken right now. I will repair it when I can find some mental space to, but repairing it comes with upgrading it, too.</p>
            </div>
        </aside>
        <div class="articles">
            <h1 class="title is-1">Please help me oh god.</h1>
            <div class="box">
                <h3>
                    You are here, so you know
                    <abbr title="Mika :3">who</abbr> this website
                    belongs to.
                </h3>
                <p>
                    I think I am ready to be a part of this programme.
                    To learn more about the things that make me curious
                    and actually learn to understand and create in this
                    field of work.
                </p>
                <p>
                    From as young as I have been aware of computers, I
                    have been curious about how their internal
                    mechanisms function. As a younger child we did not
                    exactly have a computer at home on which I was
                    allowed to experiment, but I remember begging my
                    father to let me install minecraft mods. He did,
                    however, let me do classes and projects on
                    <a href="https://code.org/">Code.org</a>
                </p>
                <p>
                    He never let me install those mods though, too
                    afraid I would permanently damage something. Which
                    honestly, I would have.
                </p>
            </div>
            <div class="box">
                <h4 class="title is-5">
                    I think the IT course is a good fit for me because:
                </h4>
                <ul>
                    <li
                    >It is a lot of impromptu problem solving, which
                        I love</li
                    >
                    <li>
                        It is a lot of project work, which I think is a
                        fun challenge
                    </li>
                    <li>
                        It is sometimes out of the box thinking, which
                        can be silly and very fun
                    </li>
                    <li>
                        It is a lot of structuring and design, learning
                        what is intuitive and how to do things best is
                        fun
                    </li>
                </ul>
            </div>
            <div class="box">
                <p>
                    Now that I have become older and have my own money
                    and a frontal lobe more capable of reasonable
                    decisions, I am allowed to start and experiment. I
                    am excited to learn things I did not know before,
                    and I look forward an incredible amount to learning
                    all about these languages that I have heard of, but
                    never learnt to read.
                </p>
                <p>
                    I especially look forward to learning JavaScript.
                    Perhaps in the future I will be creating what I was
                    so curious about, a Minecraft mod! If ever I come up
                    with an idea decent enough.
                </p>
                <p>
                    I hope all of you are just as excited as I am to go
                    into this year and start learning!
                </p>
            </div>
            <div class="box">
                <h3 class="title is-3">Intrinsic Motivation</h3>
                <h3 class="subtitle is-6 is-spaced">
                    Though, if you find yourself even
                    <strong>more</strong> curious about my actual
                    motivation for the programme, here is a little
                    exercise we were offered in Lecture. I will be
                    answering "Why ICT?" a few times.
                </h3>
                <h5 class="title is-6">So, Why ICT?</h5>
                <p class="subtitle is-6"
                >Because computers have always seemed interesting to
                    me.</p
                >
                <h5 class="title is-6">But why do computers seem interesting?</h5>
                <p class="subtitle is-6">
                    Because they seem magic, but actually work on logic
                    and I want to learn to understand that.
                </p>
                <h5 class="title is-6">But why do you want to understand that logic?</h5>
                <p class="subtitle is-6">
                    Because not very many people are able to, and I
                    would feel really cool if I could.
                </p>
                <h5 class="title is-6">But why would it make you feel cool?</h5>
                <p class="subtitle is-6">
                    Because I would feel really proud of myself for
                    learning something so complex. It would be like
                    speaking another language to me.
                </p>
                <h4 class="is-size-4">Incredible pride, it satiates curiousity.</h4>
            </div>
            <div class="box">
                <h3 class="title is-3">Previous project</h3>
                <p>
                    I have previously worked on
                    <a href="https://suunn.nl"> a website</a> before,
                    though the intention of this prevous site was to
                    look both retro and intentionally awful.
                </p>
                <p>
                    I cannot claim I have grown a
                    <strong>lot</strong> since then, but maybe a little?
                </p>
                <img
                    src="{{ url('storage/suunn1.png') }}"
                    class="suunn"
                    alt="A picture of the home screen of the website suunn.nl"
                />
                <img
                    src="{{ url('storage/suunn2.png') }}"
                    class="suunn"
                    alt="A picture of the 'hell' page of the website suunn.nl"
                />
                <img
                    src="{{ url('storage/suunn3.png') }}"
                    class="suunn"
                    alt="A picture of the Star Wars page of the website suunn.nl"
                />
            </div>
        </div>
    </section>
@endsection
