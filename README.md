<!DOCTYPE html>

<!--
  Google HTML5 slide template
  Authors: Luke Mahé (code)
           Marcin Wichary (code and design)
           
           Dominic Mazzoni (browser compatibility)
           Charles Chen (ChromeVox support)
  URL: http://code.google.com/p/html5slides/
-->

<!--
This code features:
- inline styles
- <style> blocks
- multiple <script> blocks
- almost no comments
- <br>'s
I'm a trained proffesional, don't try this at home...
Konrad
-->

<html>
<head>
    <title>Presentation</title>

    <meta charset='utf-8'>
    <script src='resources/slides.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
    <script src='resources/jquery.airport-1.1.source.js'></script>
    <link rel="stylesheet" href="resources/elusive-webfont/css/elusive-webfont.css">
</head>

<style type='text/css'>
    .slides.template-mw > article:not(.nobackground):not(.biglogo) {
        background: url(logo/horizontal.png) 687px 630px no-repeat;
        background-color: white;
    }
    .slides > article.problem h2 {
        position: absolute;
        bottom: 50%;
        margin-top: -22px;
    }
    .slides > article.problem .icon {
        color: rgb(244, 58, 109);
    }
</style>
<script>
    $(document).ready(function () {
        $('.slides a').attr('target', '_blank');
    });
</script>

<body style='display: none'>

    <section class='slides layout-regular template-mw'>

        <article>
            <img src='logo/bluppen_full.png' id='logo_big' />
            <img src='resources/PHP-logo.png' class='small_pic' />
            <img src='resources/JS-logo.png' class='small_pic' />
            <img src='resources/github-logo.png' class='small_pic' />
            <img src='resources/context-logo.png' class='small_pic' />
            <img src='resources/stackoverflow-logo.png' class='small_pic' />

            <style>
                #logo_big {
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    margin-left: -190px;
                    margin-top: -190px;
                    z-index: 10;
                }
                .small_pic {
                    position: absolute;
                    left: 50%;
                    top: 50%;
                    margin-left: -70px;
                    margin-top: -50px;
                    z-index: 0;
                }
                    .small_pic.activate {
                        -webkit-animation-fill-mode: forwards;
                        -webkit-animation-duration: 3s;
                    }
                    .small_pic[src="resources/PHP-logo.png"] {
                        -webkit-transform: rotate(-7deg);
                        -webkit-animation-name: php-slidein;
                    }
                @-webkit-keyframes php-slidein {
                    to {
                        margin-top: 50px;
                        margin-left: -300px;
                    }
                }
                .small_pic[src="resources/JS-logo.png"] {
                    -webkit-transform: rotate(10deg);
                    -webkit-animation-name: js-slidein;
                }
                @-webkit-keyframes js-slidein {
                    to {
                        margin-top: -200px;
                        margin-left: -300px;
                    }
                }
                .small_pic[src="resources/github-logo.png"] {
                    -webkit-animation-name: github-slidein;
                }
                @-webkit-keyframes github-slidein {
                    to {
                        margin-top: -330px;
                        margin-left: -100px;
                    }
                }
                .small_pic[src="resources/context-logo.png"] {
                    -webkit-transform: rotate(-20deg);
                    -webkit-animation-name: context-slidein;
                }
                @-webkit-keyframes context-slidein {
                    to {
                        margin-top: -150px;
                        margin-left: 150px;
                    }
                }
                .small_pic[src="resources/stackoverflow-logo.png"] {
                    -webkit-transform: rotate(20deg);
                    -webkit-animation-name: stackoverflow-slidein;
                }
                @-webkit-keyframes stackoverflow-slidein {
                    to {
                        margin-top: 100px;
                        margin-left: 120px;
                    }
                }
                .small_pic[src="resources/stackoverflow-logo.png"] {
                    -webkit-transform: rotate(20deg);
                    -webkit-animation-name: stackoverflow-slidein;
                }
                @-webkit-keyframes stackoverflow-slidein {
                    to {
                        margin-top: 100px;
                        margin-left: 120px;
                    }
                }
            </style>
            <script>
                $(document).ready(function () {
                    $('#logo_big').click(function () {
                        $(this).parent().find('.small_pic:not(.activate):eq(0)').addClass('activate');
                    });
                });
            </script>
        </article>

        <article onslideenter="slide2()">
            <h1 style='margin-top: 115px; margin-bottom: 115px'>Git is your friend<br>
                <div style='font-size: 32px'>it's just autistic<span id="the_heart" style='color: rgb(244, 58, 109);'>.</span></div>
            </h1>

            <p>
                Krzysztof Morcinek
          <br>
                Jul 16, 2013
            </p>
            <script>
                function slide2() {
                    setTimeout(function () {
                        $('#the_heart').airport(['?', '¦']);
                    }, 5000);
                }
            </script>
        </article>

        <!--
            FE nie jest zainteresowany w bebechach
            
            d-->

        <article>
            <h3>Welcome</h3>
            <ul class="build">
                <li>Ask question during presentation</li>
                <li>I am not pro in presentations, feedback appreciated</li>
                <li>Using git for 1,5 year, 4 month on a company project hosted on GitHub</li>
                <li>No agenda, we will see how will it go</li>
            </ul>
        </article>

        <article>
            <h3>Why we need learn</h3>
            <ul class="build">
                <li>More <em>sofisticated</em> than centralized control systems</li>
                <li>Complains on stand-ups</li>
                <li>The same output achieved in many ways</li>
                <li><a href="http://git-scm.com/book">gitbook - Pro Git</a></li>
                <li><a href="http://git-scm.com/book/pl">gitbook - Pro Git - polish</a></li>
                <!--flow from people not experiencing problems-->
            </ul>
        </article>

        <article>
            <h3>Decentralized</h3>
            <ul class="build">
                <li>No server needed</li>
                <li>Whole history, logs always with you</li>
                <li>Work offline</li>
            </ul>
        </article>

        <article>
            <h3>Intermediate step</h3>
            <ul class="build">
                <li><img src="http://git-scm.com/figures/18333fig0201-tn.png" /></li>
                <li>git add .</li>
                <li>git commit -am</li>
                <li>You don't need it</li>
            </ul>
        </article>

        <!--ci br co--> 

        <article>
            <h3>Commit and sha1 on our disk</h3>
            <ul class="build">
                <li>Demo</li>
                <li>Empty folder</li>
                <li>git init</li>
                <li>look to '.git/objects'</li>
                <li>touch file.txt</li>
                <li>git add file.txt</li>
                <li>git commit -m "initial"</li>
                <li>look to '.git/objects'</li>
            </ul>
        </article>

        <article>
            <h3>Commit and sha1 on our disk #2</h3>
            <ul class="build">
                <li>
                    <img src="http://git-scm.com/figures/18333fig0301-tn.png" /></li>
            </ul>
        </article>

        <article>
            <h3>head, branch, commit correlation</h3>
            <ul class="build">
                <li>commit ~ sha1</li>
                <li>branch</li>
                <li>HEAD (UPPERCASE convention, lowercase is also fine)</li>
                <li>parents: ~4 ^ ^^^</li>
                <!--<li>never final like in SVN</li>-->
                <li>git commit --amend</li>
                <li>pointers</li>
            </ul>
        </article>

        <article>
            <h3>Git Branching</h3>
            <ul class="build">
                <li>Live on <a href="http://git-scm.com/book/pl/Ga%C5%82%C4%99zie-Gita-Czym-jest-ga%C5%82%C4%85%C5%BA">gitbook</a></li>
                <li>Really worth reading</li>
                <li>questions?</li>
            </ul>
        </article>

        <article>
            <h3>Undoing things</h3>
            <ul class="build">
                <li>reset --hard sha1</li>
                <li>reset HEAD^</li>
                <li>commit --amend -a</li>
                <li>commit -a (just commit), later: rebase -i</li>
                <li>Demo</li>
            </ul>
        </article>

        <article>
            <h3>Synchronize from others and resolve conflicts</h3>
            <ul class="build">
                <li>Demo</li>
                <li>git pull --rebase</li>
                <li>git config --global --bool pull.rebase true</li>
                <li>I never used fetch (creates no commit)</li>
                <!--                <li>conflict:c54e00ac77490f1a2260ec85f7de09058890b910</li>-->
            </ul>
        </article>

        <article>
            <h3>What happens in Git, stays in git</h3>
            <ul class="build">
                <li>git reflog (whole history)</li>
            </ul>
        </article>

        <article>
            <h3>In the middle of work example</h3>
            <ul class="build">
                <li>"Jestem koniem, nie mogê ci pomóc"</li>
                <li>stash</li> <!-- link why not -->
                <li>branch</li>
                <li>just commit :)</li>
            </ul>
        </article>

        <article>
            <h3>git rebase -i</h3>
            <ul class="build">
                <li>Demo</li>
                <li>I know VIM - come to me</li>
                <!--<li>Forget about localization and adding</li>-->
                <!--<li>changing two files at the beginning of history</li>-->
                <!--<li>enormous flexibility</li>-->
                <li>cherry-pick</li>
            </ul>
        </article>

        <article>
            <h3>merge vs rebase</h3>
            <ul class="build">
                <li>Demo</li>
                <li><a href="https://github.com/kmorcinek/rebase-vs-merge">Fasted demo</a></li>
                <!--<li>osobny branch na git presentation live examples</li>-->
            </ul>
        </article>

        <article>
            <h3>Command mappings</h3>
            <h4>wherever its possible</h4>
            <ul class="build">
                <li>Revert: git reset --hard, git clean -fd</li>
                <li>git revert changes, google-><a href="https://www.google.com/search?output=search&q=git+undo+last+commit">Stack Overflow</a>, enormous number of votes on git</li>
                <li>mappings are antipatterns</li>
            </ul>
        </article>

        <article>
            <h3>Workflow</h3>
            <ul class="build">
                <li>Keep up to date with master</li>
                <!-- picture -->
                <li>Feature branch is antipattern</li>
            </ul>
        </article>

        <article>
            <h3>My tools</h3>
            <ul class="build">
                <li>console is <strong>king</strong></li>
                <li>really use it, only good patterns</li>
                <li>GitHub for Windows - browsing history, (DONT use <em>magic</em> Sync button)</li>
            </ul>
        </article>

        <article>
            <h3>Other</h3>
            <ul class="build">
                <li><em>TortoiseGit have old well known command mappings (Revert)</em></li>
                <li>aliases</li>
                <li>edit .gitconfig in user folder to add aliases</li>
                <li>my <a href="https://gist.github.com/kmorcinek/5747081">gist</a> about aliases</li>
            </ul>
        </article>

        <article>
            <h3>GitHub</h3>
            <ul class="build">
                <!--<li>BYOP - Bring Your Own Problem</li>-->
                <li><a href="https://github.com/kmorcinek/git-presentation">This presentation</a> hosted on <a href="http://kmorcinek.github.io/git-presentation">github.io</a></li>
                <li>Collaborative platform</li>
                <li>No side TODO list, integrated <a href="https://github.com/kmorcinek/TS-web-cards-helper/issues?state=open">Issues</a></li>
                <li><a href="https://github.com/kmorcinek/TS-web-cards-helper">Wiki</a></li>
                <li>You changes accessible by <a href="https://github.com/kmorcinek/TS-web-cards-helper/commit/df1971a02862506c72e8d24676d1ffc4babdcb63">link</a>, no need for revision id and searching</li>
                <li><a href="https://github.com/kmorcinek/TS-web-cards-helper/compare/a3a32c8a822bfc2fb375a029e8b27b95c2be1694...5a0bd8cf70e6bacfc1d212372ce46a00c46dbe87">Compare ranges</a></li>
            </ul>
        </article>

        <article>
            <h3>References</h3>
            <ul class="build">
                <li><a href="http://git-scm.com/book">GitBook</a></li>
                <li><a href="http://mislav.uniqpath.com/2013/02/merge-vs-rebase/">Merge vs Rebase</a> comparision</li>
                <li>my <a href="https://gist.github.com/kmorcinek/3058721">gist</a> about git (not revied)</li>
                <li>my <a href="https://gist.github.com/kmorcinek/5747081">gist</a> about aliases</li>
            </ul>
        </article>

        <article class='problem'>
            <h2><span class="icon icon-smiley-alt"></span>Thank You!</h2>
            <div class='contact_me'>
                <span class="icon icon-pencil-alt"></span><a href='mailto:krzysztof.morcinek@gmail.com'>krzysztof.morcinek@gmail.com</a><br />
                <span class="icon icon-twitter"></span><a href='https://twitter.com/kmorcinek'>kmorcinek</a><br />
                <span class="icon icon-github"></span><a href='https://github.com/kmorcinek'>kmorcinek</a><br />
            </div>
            <style>
                .contact_me a, .contact_me a:visited, .slides > article.problem .contact_me .icon {
                    color: black;
                    font-size: 75%;
                }
            </style>
        </article>

        <article>
            <q style='margin-top: 60px;'>[..] productive developers surround themselves with powerful tools for iterative development and debugging
            </q>
            <div class='author'>
                Paul Irish
            </div>
        </article>
    </section>

</body>
</html>
