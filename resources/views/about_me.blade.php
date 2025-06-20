@extends('layouts.main')

@section('title', 'About Me')

@section('css')
    @vite(['resources/css/profile.css'])
    @endsection

@section('content')
    <section>
        <div class="articles">
            <div class="toddler">
                <img
                    src="media/toddler.jpg"
                    style="
                                height: 500px;
                                padding-top: 30px;
                                padding-bottom: 20px;
                            "
                    alt="A Mika of 2 years old in a plastic container giving a thumbs up"
                />
            </div>
            <article>
                <h1>Who am I?</h1>
                <p>
                    My name is Mika, I am a 21 year old guy and have
                    been living in Zeeland for the majority of my
                    life.<br />I live with both my parents, and a
                    younger sibling. There is a year and a half between
                    her and me.
                </p>
                <p>
                    When it comes to education, I've completed the Dutch
                    High School system and have been granted my "HAVO"
                    diploma. This is more or less defined as "Senior
                    General Secondary Education", though I have to admit
                    I haven't the faintest as to what that means
                    exactly.
                </p>
                <p>
                    I originally intended to go to an Art Academy, but
                    was turned away wherever I applied. It's still a
                    dream but not a realistic one. I decided to go into
                    ICT mainly because the magic of computer coding has
                    always enticed me, but also perhaps because it's
                    still a better option than politics.
                </p>
                <p>
                    I have a job delivering newspapers, which I
                    dilligently fufill every morning with the exception
                    of Sundays.
                </p>
            </article>
            <article>
                <div class="watervid">
                    <video height="auto" controls>
                        <source
                            src="media/water.mp4"
                            type="video/mp4"
                            alt="Mika describing how bad the rainfall was outside his student housing in Maastricht"
                        />
                        Your browser does not support the video tag.
                    </video>
                </div>
                <h2>To list some of my further hobbies</h2>
                <dl style="text-align: left">
                    <dt>Playing games</dt>
                    <dd>
                        I mainly have interest in the rhythm game OSU!,
                        but occasionally play factory builders like
                        Shapez.io and simpler games such as Minecraft,
                        too. I also have a VR headset which I enjoy
                        using a lot, mainly for Beat Saber and VRChat.
                    </dd>
                    <dt>LARP</dt>
                    <dd>
                        LARP stands for "Live Action RolePlay" and is a
                        genre with wild variety. The part I most like
                        about it is the improv acting involved. Sadly I
                        haven't been able to participate in any official
                        events yet.
                    </dd>
                    <dt>Drawing</dt>
                    <dd>
                        You'll likely see me doodle in class. I enjoy
                        drawing and always have. You're free to ask to
                        see my sketchbook and I'll gladly show it to
                        you!
                    </dd>
                </dl>
            </article>
            <article>
                <h1>Characteristics</h1>
                <p>
                    I will share some of my characteristics, some lists
                    in no particular order.
                </p>
                <table style="width: 400px">
                    <tr>
                        <th style="width: 200px">Strengths</th>
                        <th style="width: 200px">Weaknesses</th>
                    </tr>
                    <tr>
                        <td>Curious</td>
                        <td>Easily Distracted</td>
                    </tr>
                    <tr>
                        <td>Excitable</td>
                        <td>Impulsive</td>
                    </tr>
                    <tr>
                        <td>Patient</td>
                        <td>Quick to Bore</td>
                    </tr>
                </table>
            </article>
            <article>
                <div class="snapqr">
                    <img
                        src="media/snapcode.png"
                        style="width: 150px; height: auto"
                        alt="Snapchat QR code"
                    />
                </div>
                <h2>Social Medias</h2>
                <p>
                    Obviously as any other modern human, I use social
                    medias. Here are some I'm willing to share. I've got
                    more, but you'll have to ask!
                </p>
                <div class="social-media">
                    <a
                        href="https://github.com/Os773"
                        target="_blank"
                    >Github</a
                    ><br />
                    <a
                        href="https://www.linkedin.com/in/mika-v-953860199/"
                        target="_blank"
                    >LinkedIn</a
                    ><br /><a
                        href="https://www.instagram.com/unapologetically.mika/"
                        target="_blank"
                    >Instagram</a
                    ><br />
                    <a
                        href="https://snapchat.com/t/jd1SSJRq"
                        target="_blank"
                    >Snapchat</a
                    >
                </div>
            </article>
            <article>
                <h4>Some further HTML projects</h4>
                <p>Outside of coding for school, I occasionally meddle with html and css for a website called <a href="https://toyhou.se/">"Toyhou.se"</a>. <br>
                    This is a website that allows you to list original characters you've made, and display/collect art and information about them. Additionally, you can customize their pages with custom HTML and CSS!<br>
                    The Toyhouse website is built on a grid that I don't know the layout of yet, but is still very neat to work with in my personal opinion.</p>
                <p>The first project I made on this was for a character named <a href="https://toyhou.se/28603335.crowbar">Crowbar</a>, the code for his layout was taken from someone else but it had a LOT of inline CSS.<br>
                    I spent a day taking out all the inline CSS and rebuilding the page with a proper backend, as well as changing the theming to be more in line with the videogame <a href="https://en.wikipedia.org/wiki/Pathologic">Pathologic</a>.<br>
                    Now he's looking much fancier, and I made a bunch of other people very happy with this code, too.</p>
            </article>
        </div>
    </section>

@endsection
